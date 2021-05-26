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
		$this->load->model('pantai_model');
	}

	public function index()
	{
		$data['total_pesanan'] =  $this->pesanan_model->get_total();

		$this->load->view("templates/v_admin_header");
		$this->load->view('admin/v_dashboard', $data);
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
			$this->load->view("templates/v_admin_header");
			$this->load->view('admin/user_create',$data);
			$this->load->view("templates/v_admin_footer");
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
			$this->load->view("templates/v_admin_header");
	        $this->load->view('admin/user_edit', $data);
			$this->load->view("templates/v_admin_footer");
	    
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


	public function selesaikan_pembayaran($id)
	{
	    	$post_data = array(
	    	    // 'nama_penum' => $this->input->post('nama_penum'),
	    	    // 'no_penum' => $this->input->post('no_penum'),
	    	    // 'asal_penum' => $this->input->post('asal_penum'),
	    	    // 'tujuan_penum' => $this->input->post('tujuan_penum'),
	    	    // 'tggl_penum' => $this->input->post('tggl_penum')
	    	    'bayar' => 'sudah',
	    	);

    		// Update kategori sesuai post_data dan id-nya
	        if ($this->pesanan_model->update_pesanan($post_data, $id)) {
		        redirect('admin/pesanan');
	        } else {
		        redirect('admin');
	        }
	}
	public function batalkan_pembayaran($id)
	{
	    	$post_data = array(
	    	    // 'nama_penum' => $this->input->post('nama_penum'),
	    	    // 'no_penum' => $this->input->post('no_penum'),
	    	    // 'asal_penum' => $this->input->post('asal_penum'),
	    	    // 'tujuan_penum' => $this->input->post('tujuan_penum'),
	    	    // 'tggl_penum' => $this->input->post('tggl_penum')
	    	    'bayar' => 'belum',
	    	);

    		// Update kategori sesuai post_data dan id-nya
	        if ($this->pesanan_model->update_pesanan($post_data, $id)) {
		        redirect('admin/pesanan');
	        } else {
		        redirect('admin');
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

		$this->form_validation->set_rules('nama', 'nama', 'required',
			array('required' => 'Isi %s ya.'));
		

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

	public function listpantai(){
		$data['page_title'] = 'Daftar Pantai'; 

		$data['all_listpantai'] = $this->pantai_model->get_all_pantai();

		$this->load->view("templates/v_admin_header");
		$this->load->view('admin/listpantai_view',$data);
		$this->load->view("templates/v_admin_footer");
	}

	public function listpantai_create() 
	{
		// Judul Halaman
		$data['page_title'] = 'Tambah Pantai';

		// Kita butuh helper dan library berikut
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules(
			'nama_pantai', 'nama_pantai','is_unique[pantai.nama_pantai]',
			array(
				'is_unique' => 'nama pantai sudah ada'
			)
		);

	    // Cek apakah input valid atau tidak
	    if ($this->form_validation->run() === FALSE)
	    {
			$this->load->view("templates/v_admin_header");
			$this->load->view('admin/listpantai_create', $data);
			$this->load->view("templates/v_admin_footer");

	    } else {

    		// Apakah user upload gambar?
    		if ( isset($_FILES['thumbnail']) && $_FILES['thumbnail']['size'] > 0 )
    		{
    			// Konfigurasi folder upload & file yang diijinkan
    			// Jangan lupa buat folder uploads di dalam ci3-course
    			$config['upload_path']          = './uploads/';
    	        $config['allowed_types']        = 'gif|jpg|png';
    	        $config['max_size']             = 1500;
    	        $config['max_width']            = 2024;
    	        $config['max_height']           = 1500;

    	        // Load library upload
    	        $this->load->library('upload', $config);

    	        // Apakah file berhasil diupload?
    	        if ( ! $this->upload->do_upload('thumbnail'))
    	        {
    	        	$data['upload_error'] = $this->upload->display_errors();

    	        	$post_image = '';

    	        	// Kita passing pesan error upload ke view supaya user mencoba upload ulang
					$this->load->view("templates/v_admin_header");
					$this->load->view('admin/listpantai_create', $data);
					$this->load->view("templates/v_admin_footer");

    	        } else {

    	        	// Simpan nama file-nya jika berhasil diupload
    	            $img_data = $this->upload->data();
    	            $post_image = $img_data['file_name'];
    	        	
    	        }
    		} else {

    			// User tidak upload gambar, jadi kita kosongkan field ini
    			$post_image = '';
    		}

	    	// Memformat slug sebagai alamat URL, 
	    	// Misal judul: "Hello World", kita format menjadi "hello-world"
	    	// Nantinya, URL blog kita menjadi mudah dibaca \

	    	$value = $this->input->post('pantai_favorit');
			$checked = isset($POST['pantai_favorit']) ? 1 : 0;

	    	$post_data = array(
				'nama_pantai'          => $this->input->post('nama_pantai'),
                'harga_pantai'          => $this->input->post('harga_pantai'),
                'deskripsi'          => $this->input->post('deskripsi'),
                'thumbnail'          	=> $post_image,
                'pantai_favorit'		=> $checked
	    	);

	    	// Jika tidak ada error upload gambar, maka kita insert ke database via model Blog 
	    	if( empty($data['upload_error']) ) {
		        $this->pantai_model->create_pantai($post_data);

				redirect('admin/listpantai');
	    	}
	    }
	}

	public function listpantai_edit($id = NULL)
	{

		$data['page_title'] = 'UBAH DAFTAR PANTAI';

		// Get artikel dari model berdasarkan $id
		$data['listpantai'] = $this->pantai_model->get_pantai_by_id($id);
		// Jika id kosong atau tidak ada id yg dimaksud, lempar user ke halaman list brand
		if ( empty($id) || !$data['listpantai'] ) redirect('admin');

		// Kita butuh helper dan library berikut
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    $this->form_validation->set_rules('harga_pantai', 'harga_pantai', 'required');
	    // Cek apakah input valid atau tidak
	    if ($this->form_validation->run() === FALSE)
	    {
			$this->load->view("templates/v_admin_header");
	        $this->load->view('admin/listpantai_edit', $data);
			$this->load->view("templates/v_admin_footer");
	    
	    } else {

	    	$value = $this->input->post('pantai_favorit');
			$checked = ($value === FALSE) ? 0 : 1;

	    	$post_data = array(
	    	    // 'nama_pantai' => $this->input->post('nama_pantai'),
	    	    'harga_pantai' => $this->input->post('harga_pantai'),
	    	    'pantai_favorit' => $checked,
	    	    // 'gambar' => $this->input->post('gambar')
	    	);

    		// Update kategori sesuai post_data dan id-nya
	        if ($this->pantai_model->update_pantai($post_data, $id)) {
		        redirect('admin/listpantai');
	        } else {
		        redirect('admin');
	        }
	    }
	}

	public function listpantai_delete($id)
	{
		$this->pantai_model->delete_pantai($id);
		redirect('admin/listpantai');

	}

}
