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
        $data["penduduk"] = $this->M_Kesra->get("penduduk");

        $this->load->view('template/head');
        $this->load->view('template/kesra_sidebar');
        // $this->load->view('v_dashboard');
        $this->load->view('masyarakat/index',  $penduduk);

        // $this->load->view('masyarakat/index');

        $this->load->view('template/footer');
    }

    public function masyarakat()
    {
        $this->load->view('template/head');
        $this->load->view('template/kesra_sidebar');
        // $this->load->view('v_dashboard');
        $this->load->view('masyarakat/index');

        $this->load->view('template/footer');
    }
}
