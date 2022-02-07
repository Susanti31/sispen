<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Psurvei extends CI_Controller
{

    public function menu()
    {
        $this->load->view('template/head');
        $this->load->view('template/psurvei_sidebar');
        $this->load->view('v_dashboard');
        $this->load->view('template/footer');
    }
    public function index()
    {
		$penduduk['penduduk'] = $this->M_Kesra->getAll();
        $this->load->view('template/head');
        $this->load->view('template/psurvei_sidebar');
        $this->load->view('survei/index',$penduduk);
        $this->load->view('template/footer');
    }
	public function tambah($no_kk){
	
        $data['penduduk'] = $this->M_Kesra->getById($no_kk);

        $this->load->view('template/head');
        $this->load->view('template/kesra_sidebar');
		$this->load->view('survei/tambah',$data);
        $this->load->view('template/footer');

	}
	public function tambah_data($no_kk){
		
		$data = array(
			'no_kk'=> $this->input->post('no_kk'),
			'nama'=> $this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			
		);
		$this->db->insert('penduduk', $data);
    	redirect('Kesra');

	}
}
