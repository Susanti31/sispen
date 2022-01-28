<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kesra extends CI_Controller
{

    public function menu()
    {
        $this->load->view('template/head');
        $this->load->view('template/kesra_sidebar');
        $this->load->view('v_dashboard');
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
