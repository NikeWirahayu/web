<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminweb extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Model_admin');
		
	}

	function index(){
		$this->load->view('login');
		$this->load->view('admin/footer_admin');
	}
	function home_admin(){
		$this->load->view('admin/header_admin');
		$this->load->view('admin/index_admin');
		$this->load->view('admin/footer_admin');
	}

	function identitas(){

		$this->load->view('admin/header_admin');
		$this->load->view('admin/identitas');
		$this->load->view('admin/footer_admin');
	}  

	function profil_sejarah(){
		$this->load->view('admin/header_admin');
		$this->load->view('admin/profil_sejarah');
		$this->load->view('admin/footer_admin');
	}

	function profil_kepala(){
		$this->load->view('admin/header_admin');
		$this->load->view('admin/profil_kepala');
		$this->load->view('admin/footer_admin');
	}

	function profil_wakakur(){
		$this->load->view('admin/header_admin');
		$this->load->view('admin/profil_wakakur');
		$this->load->view('admin/footer_admin');
	}

	function profil_wakasis(){
		$this->load->view('admin/header_admin');
		$this->load->view('admin/profil_wakasis');
		$this->load->view('admin/footer_admin');
	}

	function profil_wakahum(){
		$this->load->view('admin/header_admin');
		$this->load->view('admin/profil_wakahum');
		$this->load->view('admin/footer_admin');
	}

	function profil_wakasar(){
		$this->load->view('admin/header_admin');
		$this->load->view('admin/profil_wakasar');
		$this->load->view('admin/footer_admin');
	}
		function tambah_lowongan(){
		$this->load->view('admin/header_admin');
		$this->load->view('admin/tambah_lowongan');
		$this->load->view('admin/footer_admin');
	}
		function tambah_pengumuman(){
		$this->load->view('admin/header_admin');
		$this->load->view('admin/tambah_pengumuman');
		$this->load->view('admin/footer_admin');
	}

		public function tambahwacana(){
		$data = array(
			'konten_kategori' => $this->input->post('konten_kategori'),
			'konten_subkategori' => $this->input->post('konten_subkategori'),
			'konten_judul' => $this->input->post('konten_judul'),
			'konten_isi' => $this->input->post('konten_isi'),
			'konten_tanggal' => date('Y-m-d H:i:s')
		); 
		$this->Model_admin->insert_wacana($data);
		redirect(site_url('Adminweb/home_admin'));
	}

	public function tambahpengumuman(){
		$data = array(
			'konten_kategori' => $this->input->post('konten_kategori'),
			'konten_subkategori' => $this->input->post('konten_subkategori'),
			'konten_judul' => $this->input->post('konten_judul'),
			'konten_isi' => $this->input->post('konten_isi'),
			'konten_tanggal' => date('Y-m-d H:i:s')
		); 
		$this->Model_admin->insert_wacana($data);
		redirect(site_url('Adminweb/list_pengumuman'));
	}
	//SAMPAI SINI!!!
	    public function tampil_loker() {
        $data['lowongan'] = $this->Model_admin->list_lowongan();
        $this->load->view('admin/header_admin');
        $this->load->view('admin/list_lowongan', $data);
        $this->load->view('admin/footer_admin');
    }
    	function list_loker(){
    	$data['lowongan'] = $this->Model_admin->list_lowongan();
		$this->load->view('admin/header_admin');
		$this->load->view('admin/list_loker', $data);
		$this->load->view('admin/footer_admin');
	}
    	function list_berita(){
    	$data['berita'] = $this->Model_admin->list_berita();
		$this->load->view('admin/header_admin');
		$this->load->view('admin/list_berita', $data);
		$this->load->view('admin/footer_admin');
	}
		function list_pengumuman(){
    	$data['pengumuman'] = $this->Model_admin->list_pengumuman();
		$this->load->view('admin/header_admin');
		$this->load->view('admin/list_pengumuman', $data);
		$this->load->view('admin/footer_admin');
	}

	public function hapus_konten_lowongan($konten_id){
		$this->Model_admin->delete_data_konten($konten_id);
		redirect(site_url('Adminweb/list_loker'));
	}
	public function hapus_konten_berita($konten_id){
		$this->Model_admin->delete_data_konten($konten_id);
		redirect(site_url('Adminweb/list_berita'));
	}
	public function hapus_konten_pengumuman($konten_id){
		$this->Model_admin->delete_data_konten($konten_id);
		redirect(site_url('Adminweb/list_pengumuman'));
	}

	public function show_edit_konten($konten_id){
		$data['data_konten'] = $this->Model_admin->get_detail_konten($konten_id)->row();
		$this->load->view('admin/header_admin');
		$this->load->view('admin/edit_konten', $data);
		$this->load->view('admin/footer_admin');
	}
		public function edit_konten($konten_id){
		$data = array(
			'konten_judul' => $this->input->post('konten_judul'),
			'konten_isi' => $this->input->post('konten_isi'),
			'konten_tanggal' => date('Y-m-d H:i:s')
		);
		$this->Model_admin->update_data_konten($konten_id, $data);
		redirect(site_url('Adminweb/home_admin'));
	}


	public function show_edit_pengumuman($konten_id){
		$data['data_konten'] = $this->Model_admin->get_detail_pengumuman($konten_id)->row();
		$this->load->view('admin/header_admin');
		$this->load->view('admin/edit_pengumuman', $data);
		$this->load->view('admin/footer_admin');
	}
		public function edit_pengumuman($konten_id){
		$data = array(
			'konten_judul' => $this->input->post('konten_judul'),
			'konten_isi' => $this->input->post('konten_isi'),
			'konten_tanggal' => date('Y-m-d H:i:s')
		);
		$this->Model_admin->update_pengumuman($konten_id, $data);
		redirect(site_url('Adminweb/list_pengumuman'));
	}


	public function detailloker($konten_id){
        $data['lowongan'] = $this->Model_admin->pilih_wacana($konten_id)->row();
        $this->load->view('admin/header_admin');
        $this->load->view('admin/detailloker',$data);
        $this->load->view('admin/footer_admin');
    }

    public function detailPengumuman($konten_id){
        $data['pengumuman'] = $this->Model_admin->pilih_wacana($konten_id)->row();
        $this->load->view('admin/header_admin');
        $this->load->view('admin/detailPengumuman',$data);
        $this->load->view('admin/footer_admin');
    }
	
}