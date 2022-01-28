<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_Kesra extends CI_Model
{
    private $_table = "penduduk";

    public $no_kk;
    public $nama;
    public $alamat;

    public function rules()
    {
        return [
            [
                'field' => 'no_kk',
                'label' => 'no_kk',
                'rules' => 'required'
            ],

            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'numeric'
            ],

            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["no_kk" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->no_kk = uniqid();
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->no_kk = $post["id"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        return $this->db->update($this->_table, $this, array('no_kk' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("no_kk" => $id));
    }
}
