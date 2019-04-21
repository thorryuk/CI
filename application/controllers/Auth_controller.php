<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    //login method
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            //validasi gagal, kembali ke halaman login
            $this->load->view('auth/login');
        } else {
            //validasi berhasil, proses ke validasi login
            $this->_login();
        }
    }

    //proses login
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //cek user ada atau tidak
        if ($user) {
            //cek user aktif atau tidak
            if ($user['email'] == $email) {
                //cek password
                if ($user['password'] == $password) {
                    $data = [
                        'email' => $user['email']
                    ];

                    $this->session->set_userdata($data);
                    redirect('admin_controller'); //bila berhasil akan masuk ke view user
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password is wrong! </div>');
                    redirect('auth_controller');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email is not activated! </div>');
                redirect('auth_controller');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email is not registered! </div>');
            redirect('auth_controller');
        }
    }

    //proses logout
    public function logout()
    {
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> You have been logged out! </div>');
        redirect('auth_controller');
    }
}
