<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_kades extends CI_Model
{
    private $_table = "calon_penerima";

    public function getIndex()
    {
		$data = $this->db->query("SELECT c.id_calon_penerima, k.no_kk ,p.nama , c.peringkat, c.status FROM `calon_penerima` c, kriteria k , penduduk p WHERE c.id_kriteria= k.id_kriteria AND k.no_kk = p.no_kk ORDER BY c.peringkat DESC")->result();
		return $data;
    }
    
	function input_update($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    

}
