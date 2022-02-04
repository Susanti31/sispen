<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kesra extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_kesra");
        $this->load->library('form_validation');
    }

    public function menu()
    {
        // $data["penduduk"] = $this->M_Kesra->getAll();

        $this->load->view('template/head');
        $this->load->view('template/kesra_sidebar');
        $this->load->view('v_dashboard');
        // $this->load->view('masyarakat/menu', $data);

        // $this->load->view('masyarakat/index');

        $this->load->view('template/footer');
    }

    public function index()
    {
        $data['penduduk'] = $this->M_Kesra->getAll();
		// $data['pria']= $this->M_parfum->ambil_data_pria();

        $this->load->view('template/head');
        $this->load->view('template/kesra_sidebar');
        // $this->load->view('v_dashboard');
        $this->load->view('masyarakat/index', $data);

        $this->load->view('template/footer');
    }
	public function tambah(){
	
        $this->load->view('template/head');
        $this->load->view('template/kesra_sidebar');
		$this->load->view('masyarakat/tambah');
        $this->load->view('template/footer');

	}
	public function tambah_data(){
		
		$data = array(
			'no_kk'=> $this->input->post('no_kk'),
			'nama'=> $this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			
		);
		$this->db->insert('penduduk', $data);
    	redirect('Kesra');

	}
	public function update($no_kk){
        $data['penduduk'] = $this->M_Kesra->getById($no_kk);
	
        $this->load->view('template/head');
        $this->load->view('template/kesra_sidebar');
		$this->load->view('masyarakat/update', $data);
        $this->load->view('template/footer');
// redirect('kesra');
	}
	public function proses_update(){        
		$no_kk = $this->input->post('no_kk');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$data =  array('no_kk' => $no_kk, 
					  'nama' => $nama,
					  'alamat' => $alamat, 

		);
		$where= array('no_kk' => $no_kk );
		 $this->M_Kesra->input_update($where,$data,'penduduk');
		 redirect('kesra');
		}
	public function delete($no_kk){
		$this->M_Kesra->hapus($no_kk);
		redirect('kesra');
	}

	public function kriteria()
	{
		$data['kriteria'] = $this->M_Kesra->data_kriteria();
		// $data['pria']= $this->M_parfum->ambil_data_pria();

        $this->load->view('template/head');
        $this->load->view('template/kesra_sidebar');
        // $this->load->view('v_dashboard');
        $this->load->view('kriteria/index', $data);

        $this->load->view('template/footer');
	}
	public function tambah_kriteria(){
	
        $this->load->view('template/head');
        $this->load->view('template/kesra_sidebar');
		$this->load->view('kriteria/tambah');
        $this->load->view('template/footer');

	}
	public function tambah_data_kriteria(){
		
		$data = array(
			'no_kk'=> $this->input->post('no_kk'),
			'status_tempat_tinggal'=> $this->input->post('status_tempat_tinggal'),
			'status_lahan'=>$this->input->post('status_lahan'),
			'luas_lahan'=>$this->input->post('luas_lahan'),
			'luas_lantai'=>$this->input->post('luas_lantai'),
			'jenis_lantai'=>$this->input->post('jenis_lantai'),
			'jenis_dinding'=>$this->input->post('jenis_dinding'),
			'atap'=>$this->input->post('atap'),
			'sumber_penerangan'=>$this->input->post('sumber_penerangan'),
			'sumber_air_minum'=>$this->input->post('sumber_air_minum'),
			'energi_memasak'=>$this->input->post('energi_memasak'),
			'fasilitas_mck'=>$this->input->post('fasilitas_mck'),
			
		);
		$this->db->insert('kriteria', $data);
    	redirect('kriteria');

	}
}
