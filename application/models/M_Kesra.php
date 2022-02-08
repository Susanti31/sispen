<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_Kesra extends CI_Model
{
    private $_table = "penduduk";

    // public $no_kk;
    // public $nama;
    // public $alamat;

    // public function rules()
    // {
    //     return [
    //         [
    //             'field' => 'no_kk',
    //             'label' => 'no_kk',
    //             'rules' => 'required'
    //         ],

    //         [
    //             'field' => 'nama',
    //             'label' => 'Nama',
    //             'rules' => 'numeric'
    //         ],

    //         [
    //             'field' => 'alamat',
    //             'label' => 'Alamat',
    //             'rules' => 'required'
    //         ]
    //     ];
    // }

    public function getAll()
    {
		$data = $this->db->query("SELECT * FROM `penduduk` ")->result();
		return $data;
    }

    public function getById($no_kk)
    {
        return $this->db->get_where($this->_table, ["no_kk" => $no_kk])->row();
    }

    // public function save()
    // {
    //     $post = $this->input->post();
    //     $this->no_kk = uniqid();
    //     $this->nama = $post["nama"];
    //     $this->alamat = $post["alamat"];
    //     return $this->db->insert($this->_table, $this);
    // }

    // public function update()
    // {
    //     $post = $this->input->post();
    //     $this->no_kk = $post["id"];
    //     $this->nama = $post["nama"];
    //     $this->alamat = $post["alamat"];
    //     return $this->db->update($this->_table, $this, array('no_kk' => $post['id']));
    // }
	function input_update($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    
		function hapus($no_kk){
			$this->db->where('no_kk',$no_kk);
			$this->db->delete('penduduk');
		return true;
		}
    public function data_kriteria()
	{
		$data = $this->db->query("SELECT * FROM `kriteria` ")->result();
		return $data;
	}
}
