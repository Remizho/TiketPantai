<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		// Supaya lebih efisien, kita dapat me-load model, library, helper 
		// yang sering digunakan pada class ini pada __construct sehingga
		// dapat dipanggil oleh semua method yang ada pada class ini
		$this->load->helper('MY');
		$this->load->model('user_model');
		$this->load->model('pesanan_model');
		$this->load->model('pantai_model');
	}

	public function index()
	{

		if($this->session->userdata('logged_in')) 
			redirect('user/dashboard');

		$data['all_favorit'] = $this->pantai_model->get_all_favorit();

		$data['all_pantai'] = $this->pantai_model->get_all_pantai();

		$this->load->view('templates/header');
		$this->load->view('pages/v_home', $data);
		$this->load->view('templates/footer');
	
	}

	public function pesan_berhasil()
	{
		$data['all_pantai'] = $this->pantai_model->get_all_pantai();
		$this->load->view('templates/header');
		$this->load->view('pages/pesan_berhasil', $data);
		$this->load->view('templates/footer');
	
	}

	public function about()
	{
		$data['all_pantai'] = $this->pantai_model->get_all_pantai();
		$this->load->view('templates/header');
		$this->load->view('pages/about', $data);
		$this->load->view('templates/footer');
	}

	public function detail_pantai($id)
	{

		$data['pantai'] = $this->pantai_model->get_pantai_by_id($id);

		$this->load->view('templates/header');
		$this->load->view('pages/detail_pantai', $data);
		$this->load->view('templates/footer');
	}

	public function detail_pantai2()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/detail_pantai2');
		$this->load->view('templates/footer');
	}

	public function detail_pantai3()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/detail_pantai3');
		$this->load->view('templates/footer');
	}

	public function detail_pantai4()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/detail_pantai4');
		$this->load->view('templates/footer');
	}

	public function pesanan_user()
	{
		$id = $this->session->userdata('user_id');
		// print_r($id);
		$data['all_pesanan'] = $this->pesanan_model->get_all_pesanan_sesuai_user($id);

		$this->load->view('templates/header');
		$this->load->view('pages/pesanan_user', $data);
		$this->load->view('templates/footer');
	}


}
