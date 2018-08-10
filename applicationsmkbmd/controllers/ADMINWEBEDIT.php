<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminweb extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		
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

       public function tambahwacana(){ 
            $kategori =$this->input->post('kategori');
            $subkategori =$this->input->post('subkategori');
            $judul =$this->input->post('judul');
            $isi =$this->input->post('isi');
            
            //Upload Foto

            $config['upload_path'] = 'C:\xampp\htdocs\smkbm\applicationssmkbmd\assets\images';
            $config['allowed_types'] = 'jpg|png';
            $config['file_name'] = 'gambar_'.$judul;
            $this->upload->overwrite= true;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('userfile')){

                ?><script language="JavaScript">alert('Harap mengisi semua data.');
                document.location='<?php echo site_url('Adminweb/inputwacana') ?>'</script><?php

            }
            else{
                $tipe='';
                $upload_data = $this->upload->data();
                if($upload_data['image_type']=='jpeg'|| $upload_data['image_type']=='JPG'){
                    $tipe='jpg';
                }else if($upload_data['image_type']=='png'|| $upload_data['image_type']=='PNG'){
                    $tipe='png';
                }
             }
                //masukkan ke database
                $gambar = 'assets/images/resep/resep_'.$namaresep.'.'.$tipe;
      //   SAMPE SINI YAK     
                $cek = $this->E_Barang->addresep('resep',array ("id_user"=>$id_user,"namaresep" => $namaresep, "harga" => $harga,"kategori" => $kategori, "stock" => $stock, "deskripsi" => $deskripsi, "gambar" => $gambar));
                if ($cek >= 1){
                    ?> <script language="JavaScript">alert('Berhasil menambahkan resep!');
                        document.location='<?php echo site_url('C_Admin/index') ?>'</script><?php
                    //redirect();
                }
                else {
                    ?> <script language="JavaScript">alert('Gagal Ditambahkan');
                        document.location='<?php echo site_url('C_Admin/inputbarang') ?>'</script><?php
                }
            }
	public function inputwacana(){
		$data = array(
			'kategori' => $this->input->post('kategori'),
			'subkategori' => $this->input->post('subkategori'),
			'judul' => $this->input->post('judul'),
			'isi' => $this->input->post('isi')
		);
		$this->Model_admin->insert_wacana($data);
		redirect(site_url('Adminweb/home_admin'));
	}


}