<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// Supaya lebih efisien, kita dapat me-load model, library, helper 
		// yang sering digunakan pada class ini pada __construct sehingga
		// dapat dipanggil oleh semua method yang ada pada class ini
		$this->load->helper('MY');
		$this->load->model('user_model');
		$this->load->model('pesanan_model');
	}

	public function index()
	{

		$this->load->view("templates/v_admin_header");
		$this->load->view('admin/v_dashboard');
		$this->load->view("templates/v_admin_footer");
	}

	public function user(){
		$data['page_title'] = 'User List'; 

		$data['all_user'] = $this->user_model->get_all_user();

		$this->load->view("templates/v_admin_header");
		$this->load->view('admin/user_view',$data);
		$this->load->view("templates/v_admin_footer");
	}

	public function user_create() 
	{
		// Judul Halaman
		$data['page_title'] = 'Tambah User';

		// Kita butuh helper dan library berikut
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules(
			'username', 'username','is_unique[users.username]',
			array(
				'is_unique' => 'Username sudah terdaftar.'
			)
		);

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/user_create',$data);
		} else {
			$this->user_model->create_user();
			redirect('admin/user');
		}
	}

	public function user_delete($id)
	{
		$this->user_model->hapus_user($id);
		redirect('admin/user');
	}

	public function user_edit($id = NULL)
	{

		$data['page_title'] = 'USER EDIT';

		// Get artikel dari model berdasarkan $id
		$data['user'] = $this->user_model->get_user_by_id($id);
		// Jika id kosong atau tidak ada id yg dimaksud, lempar user ke halaman list brand
		if ( empty($id) || !$data['user'] ) redirect('admin');

		// Kita butuh helper dan library berikut
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    $this->form_validation->set_rules('username', 'username', 'required');
	    // Cek apakah input valid atau tidak
	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('admin/user_edit', $data);
	    
	    } else {

	    	$post_data = array(
	    	    'nama' => $this->input->post('nama'),
	    	    'email' => $this->input->post('email'),
	    	    'username' => $this->input->post('username'),
	    	    'password' => $this->input->post('password'),
	    	);

    		// Update kategori sesuai post_data dan id-nya
	        if ($this->user_model->update_user($post_data, $id)) {
		        redirect('admin/user');
	        } else {
		        redirect('admin');
	        }

	    }
	}

	public function pesanan_edit($id = NULL)
	{

		$data['page_title'] = 'PESANAN EDIT';

		// Get artikel dari model berdasarkan $id
		$data['pesanan'] = $this->pesanan_model->get_pesanan_by_id($id);
		// Jika id kosong atau tidak ada id yg dimaksud, lempar user ke halaman list brand
		if ( empty($id) || !$data['pesanan'] ) redirect('admin');

		// Kita butuh helper dan library berikut
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    $this->form_validation->set_rules('nama_penum', 'nama_penum', 'required');
	    // Cek apakah input valid atau tidak
	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('admin/pesanan_edit', $data);
	    
	    } else {

	    	$post_data = array(
	    	    'nama_penum' => $this->input->post('nama_penum'),
	    	    'no_penum' => $this->input->post('no_penum'),
	    	    'asal_penum' => $this->input->post('asal_penum'),
	    	    'tujuan_penum' => $this->input->post('tujuan_penum'),
	    	    'tggl_penum' => $this->input->post('tggl_penum')
	    	);

    		// Update kategori sesuai post_data dan id-nya
	        if ($this->pesanan_model->update_pesanan($post_data, $id)) {
		        redirect('admin/pesanan');
	        } else {
		        redirect('admin');
	        }

	    }
	}

	public function pesanan(){
		$data['page_title'] = 'Pesanan List'; 

		$data['all_pesanan'] = $this->pesanan_model->get_all_pesanan();

		$this->load->view("templates/v_admin_header");
		$this->load->view('admin/pesanan_view',$data);
		$this->load->view("templates/v_admin_footer");
	}

	public function pesanan_create() 
	{
		// Judul Halaman
		$data['page_title'] = 'Tambah Pesanan';

		// Kita butuh helper dan library berikut
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules(
			'no_penum', 'no_penum','is_unique[pesanan.no_penum]',
			array(
				'is_unique' => 'nopenumpang sudah ada.'
			)
		);

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/pesanan_create', $data);
		} else {
			$this->pesanan_model->create_pesanan();
			redirect('admin/pesanan');
		}
	}

	public function pesanan_create2() 
	{
		// Judul Halaman
		$data['page_title'] = 'Tambah Pesanan';

		// Kita butuh helper dan library berikut
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules(
			'no_penum', 'no_penum','is_unique[pesanan.no_penum]',
			array(
				'is_unique' => 'nopenumpang sudah ada.'
			)
		);

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/pesanan_create', $data);
		} else {
			$this->pesanan_model->create_pesanan();
			redirect('home/pesan_berhasil');
		}
	}


	public function pesanan_delete($id)
	{
		$this->pesanan_model->delete_pesanan($id);
		redirect('admin/pesanan');

	}

}
