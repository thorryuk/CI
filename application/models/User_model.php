<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";

    public $id;
    public $nama;
    public $nik;
    public $alamat;
    public $email;
    public $password;

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],

            [
                'field' => 'nik',
                'label' => 'Nik',
                'rules' => 'numeric'
            ],

            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ],

            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|trim|valid_email'
            ],

            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim'
            ]
        ];
    }


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->nik = $post["nik"];
        $this->alamat = $post["alamat"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->nik = $post["nik"];
        $this->alamat = $post["alamat"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
