<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kades extends CI_Controller
{

    public function menu()
    {
        $this->load->view('template/head');
        $this->load->view('template/kades_sidebar');
        $this->load->view('v_dashboard');
        $this->load->view('template/footer');
    }
	public function rekomendasi()
    {
        $calon['calon'] = $this->M_Kades->getIndex();

        $this->load->view('template/head');
        $this->load->view('template/kades_sidebar');
        $this->load->view('kades/index', $calon );
        $this->load->view('template/footer');
    }
	public function calonRekom($id_calon_penerima)
    {
		$id_calon_penerima = $this->input->post('id_calon_penerima');
        $data = array(
			'id_calon_penerima' => $id_calon_penerima,
            'status' => $this->input->post('status'),


        );
		$this->db->insert('calon_penerima', $data);
        // redirect('psurvei/index');
    }
}
