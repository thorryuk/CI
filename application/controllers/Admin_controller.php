<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("worker_model");
        $this->load->model("user_model");
        $this->load->library('form_validation');
        $this->load->library('Pdf');
    }

    public function index()
    {
        $nama['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/_templates/header');
        $this->load->view('admin/_templates/sidebar');
        $this->load->view('admin/_templates/topbar', $nama);
        $this->load->view('admin/index');
        $this->load->view('admin/_templates/footer');
    }

    //Start worker controller

    //get all data from table worker
    public function get_w()
    {
        $nama['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["worker"] = $this->worker_model->getAll();
        $this->load->view('admin/_templates/header');
        $this->load->view('admin/_templates/sidebar');
        $this->load->view('admin/_templates/topbar', $nama);
        $this->load->view('admin/worker/w_list', $data);
        $this->load->view('admin/_templates/footer');
    }

    //add data to table worker
    public function add_w()
    {
        $worker = $this->worker_model;
        $validation = $this->form_validation;
        $validation->set_rules($worker->rules());
        $nama['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($validation->run()) {
            $worker->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Berhasil Ditambahkan ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('admin_controller/get_w');
        }
        $this->load->view('admin/_templates/header');
        $this->load->view('admin/_templates/sidebar');
        $this->load->view('admin/_templates/topbar', $nama);
        $this->load->view("admin/worker/w_add");
        $this->load->view('admin/_templates/footer');
    }

    //detail data user
    public function detail_w($id)
    {
        $nama['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if (!isset($id)) show_404();
        $worker = $this->worker_model;

        $data["worker"] = $worker->getById($id);
        if (!$data["worker"]) show_404();
        $this->load->view('admin/_templates/header');
        $this->load->view('admin/_templates/sidebar');
        $this->load->view('admin/_templates/topbar', $nama);
        $this->load->view('admin/worker/w_detail', $data);
        $this->load->view('admin/_templates/footer');
    }

    // //edit data by id to table worker
    // public function edit_w($id)
    // {
    //     if (!isset($id)) redirect('admin/index');

    //     $nama['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //     $worker = $this->worker_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($worker->rules());

    //     if ($validation->run()) {
    //         $worker->update();
    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Berhasil Di Rubah ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">&times;</span></button></div>');
    //         redirect('admin_controller/get_w');
    //     }

    //     $data["worker"] = $worker->getById($id);
    //     if (!$data["worker"]) show_404();
    //     $this->load->view('admin/_templates/header');
    //     $this->load->view('admin/_templates/sidebar');
    //     $this->load->view('admin/_templates/topbar', $nama);
    //     $this->load->view('admin/worker/w_edit', $data);
    //     $this->load->view('admin/_templates/footer');
    // }

    // //delete data by id from table worker
    // public function delete_w($id)
    // {
    //     if (!isset($id)) show_404();

    //     if ($this->worker_model->delete($id)) {
    //         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Data Berhasil Di Hapus ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">&times;</span></button></div>');
    //         redirect(site_url('admin_controller/get_w'));
    //     }
    // }

    // //menampilkan PDF Worker
    // public function pdf()
    // {
    //     $data["worker"] = $this->worker_model->getAll();
    //     $this->load->view('admin/worker/w_pdf', $data);
    // }

    //end worker controller

    //////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////

    //Start user controller

    //get all data from table user
    public function get_u()
    {
        $nama['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["user"] = $this->user_model->getAll();
        $this->load->view('admin/_templates/header');
        $this->load->view('admin/_templates/sidebar');
        $this->load->view('admin/_templates/topbar', $nama);
        $this->load->view('admin/user/u_list', $data);
        $this->load->view('admin/_templates/footer');
    }

    //add data to table worker
    public function add_u()
    {
        $user = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());
        $nama['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Berhasil Ditambahkan ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('admin_controller/get_u');
        }
        $this->load->view('admin/_templates/header');
        $this->load->view('admin/_templates/sidebar');
        $this->load->view('admin/_templates/topbar', $nama);
        $this->load->view("admin/user/u_add");
        $this->load->view('admin/_templates/footer');
    }

    //detail data user
    public function detail_u($id)
    {
        $nama['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if (!isset($id)) show_404();
        $user = $this->user_model;

        $data["user"] = $user->getById($id);
        if (!$data["user"]) show_404();
        $this->load->view('admin/_templates/header');
        $this->load->view('admin/_templates/sidebar');
        $this->load->view('admin/_templates/topbar', $nama);
        $this->load->view('admin/user/u_detail', $data);
        $this->load->view('admin/_templates/footer');
    }

    //edit data by id to table worker
    public function edit_u($id)
    {
        if (!isset($id)) redirect('admin/index');

        $nama['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $user = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Berhasil Di Rubah ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('admin_controller/get_u');
        }

        $data["user"] = $user->getById($id);
        if (!$data["user"]) show_404();
        $this->load->view('admin/_templates/header');
        $this->load->view('admin/_templates/sidebar');
        $this->load->view('admin/_templates/topbar', $nama);
        $this->load->view('admin/user/u_edit', $data);
        $this->load->view('admin/_templates/footer');
    }

    //delete data by id from table worker
    public function delete_u($id)
    {
        if (!isset($id)) show_404();

        if ($this->user_model->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Data Berhasil Di Hapus ! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect(site_url('admin_controller/get_u'));
        }
    }

    //menampilkan PDF Worker
    // public function pdf_u()
    // {
    //     $data["user"] = $this->user_model->getAll();
    //     $this->load->view('admin/user/u_pdf', $data);
    // }

    //end worker controller


    //start module controller

    public function temperature()
    {
        $nama['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/_templates/header');
        $this->load->view('admin/_templates/sidebar');
        $this->load->view('admin/_templates/topbar', $nama);
        $this->load->view('admin/module/temperature');
        $this->load->view('admin/_templates/footer');
    }

    public function voltage()
    {
        $nama['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/_templates/header');
        $this->load->view('admin/_templates/sidebar');
        $this->load->view('admin/_templates/topbar', $nama);
        $this->load->view('admin/module/voltage');
        $this->load->view('admin/_templates/footer');
    }

    public function vibrate()
    {
        $nama['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/_templates/header');
        $this->load->view('admin/_templates/sidebar');
        $this->load->view('admin/_templates/topbar', $nama);
        $this->load->view('admin/module/vibrate');
        $this->load->view('admin/_templates/footer');
    }

    public function cctv()
    {
        $nama['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/_templates/header');
        $this->load->view('admin/_templates/sidebar');
        $this->load->view('admin/_templates/topbar', $nama);
        $this->load->view('admin/module/cctv');
        $this->load->view('admin/_templates/footer');
    }

    //end module controller
}
