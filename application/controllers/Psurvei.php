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
}
