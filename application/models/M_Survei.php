<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_Kesra extends CI_Model
{
    private $_table = "penduduk";

   
    public function getAll()
    {
		$data = $this->db->query("SELECT * FROM `penduduk` ")->result();
		return $data;
    }

    public function getById($no_kk)
    {
        return $this->db->get_where($this->_table, ["no_kk" => $no_kk])->row();
    }

    
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
