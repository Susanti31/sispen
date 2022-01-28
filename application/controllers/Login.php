<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function Vlogin()
    {
        $this->load->view('template/l_head');
        $this->load->view('auth/v_login');
        $this->load->view('template/l_footer');
    }
}
