<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{

		if($this->session->userdata('logged_in')) 
			redirect('user/dashboard');

		$this->load->view('templates/header');
		$this->load->view('pages/v_home');
		$this->load->view('templates/footer');
	
	}

	public function pesan_berhasil()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/pesan_berhasil');
		$this->load->view('templates/footer');
	
	}

	public function about()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
	}

	public function detail_pantai()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/detail_pantai');
		$this->load->view('templates/footer');
	}


}
