<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Psurvei extends CI_Controller
{

    // public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model("M_Survei");
	// 	$this->load->library('form_validation');
	// }
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
        $this->load->view('survei/index', $penduduk);
        $this->load->view('template/footer');
    }
    public function tambah($no_kk)
    {

        $data['penduduk'] = $this->M_Kesra->getById($no_kk);

        $this->load->view('template/head');
        $this->load->view('template/kesra_sidebar');
        $this->load->view('kriteria/tambah', $data);
        // $this->load->view('survei/tambah', $data);
        $this->load->view('template/footer');
    }
    public function tambah_data($no_kk)
    {

        $data = array(
            'no_kk' => $this->input->post('no_kk'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),

        );
        $this->db->insert('penduduk', $data);
        redirect('Kesra');
    }

    public function tambah_kriteria($no_kk)
    {

        $data['penduduk'] = $this->M_Kesra->getById($no_kk);

        $this->load->view('template/head');
        $this->load->view('template/psurvei_sidebar');
        $this->load->view('kriteria/tambah',$data);
        $this->load->view('template/footer');
    }
    public function tambah_data_kriteria()
    {
        // $data['penduduk'] = $this->M_Kesra->getById($no_kk);
		// $penduduk= $this->M_Kesra->getAll('no_kk');

		// $no_kk = $penduduk->get('no_kk');
		// var_dump($no_kk);
        $data = array(
            'id_kriteria' => $this->input->post('id_kriteria'),
            'no_kk' => $this->input->post('no_kk'),
            'status_tempat_tinggal' => $this->input->post('status_tempat_tinggal'),
            'status_lahan' => $this->input->post('status_lahan'),
            'luas_lahan' => $this->input->post('luas_lahan'),
            'luas_lantai' => $this->input->post('luas_lantai'),
            'jenis_lantai' => $this->input->post('jenis_lantai'),
            'jenis_dinding' => $this->input->post('jenis_dinding'),
            'atap' => $this->input->post('atap'),
            'sumber_penerangan' => $this->input->post('sumber_penerangan'),
            'sumber_air_minum' => $this->input->post('sumber_air_minum'),
            'energi_memasak' => $this->input->post('energi_memasak'),
            'fasilitas_mck' => $this->input->post('fasilitas_mck'),

        );
		// $calon = array(
		// 	'id_calon_penerima' => $this->input->post('id_calon_penerima'),
        //     'id_kriteria' => $this->input->post('id_kriteria'),
        //     'peringkat' => $this->input->post('peringkat'),


        // );
		// var_dump($data);
        // $sql = mysqli_query("INSERT INTO kriter (no,id_user,no_rek) VALUES ('$data')");
		$this->db->insert('kriteria', $data);
		// $this->db->insert('calon_penerima', $calon);

		// $this->db->insert('kriteria');
        redirect('psurvei/index');
    }
	public function calonKriteria()
    {
        $data = array(
			'id_calon_penerima' => $this->input->post('id_calon_penerima'),
            'id_kriteria' => $this->input->post('id_kriteria'),
            'peringkat' => $this->input->post('peringkat'),


        );
		$this->db->insert('calon_penerima', $data);
        // redirect('psurvei/index');
    }
}
