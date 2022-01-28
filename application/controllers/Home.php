<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function menu()
	{
		$this->load->view('template/head');
		$this->load->view('template/sidebar');
		$this->load->view('v_home');
		$this->load->view('template/footer');
	}

	// public function login()
	// {
	// 	$this->load->view('template/l_head');
	// 	$this->load->view('auth/v_login');
	// 	$this->load->view('template/l_footer');
	// }
}
