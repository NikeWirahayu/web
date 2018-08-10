<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smkbmpare extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_user');
		
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');

	}

// ================================= PROFIL ================================

	function sejarah(){
		$this->load->view('template/header');
		$this->load->view('profil/sejarah');
		$this->load->view('profil/menuProfil');
		$this->load->view('template/footer');
	}

	function kepala(){
		$this->load->view('template/header');
		$this->load->view('profil/kepala2');
		// $this->load->view('profil/menuprofil');
		$this->load->view('template/footer');
	}

	function visimisi(){
		$this->load->view('template/header');
		$this->load->view('profil/visimisi');
		$this->load->view('profil/menuprofil');
		$this->load->view('template/footer');
	}

	function tenagaPendidik(){
		$this->load->view('template/header');
		$this->load->view('profil/tenagapendidik');
		// $this->load->view('profil/menuprofil');
		$this->load->view('template/footer');
	}

// ================================= JURUSAN ================================
	function multimedia(){
		$this->load->view('template/header');
		$this->load->view('jurusan/multimedia');
		$this->load->view('template/footer');
	}

	function rekayasa(){
		$this->load->view('template/header');
		$this->load->view('jurusan/rekayasa');
		$this->load->view('template/footer');
	}

	function farmasi(){
		$this->load->view('template/header');
		$this->load->view('jurusan/farmasi');
		$this->load->view('template/footer');
	}

	function keperawatan(){
		$this->load->view('template/header');
		$this->load->view('jurusan/keperawatan');
		$this->load->view('template/footer');
	}

	function administrasi(){
		$this->load->view('template/header');
		$this->load->view('jurusan/administrasi');
		$this->load->view('template/footer');
	}

	function akuntansi(){
		$this->load->view('template/header');
		$this->load->view('jurusan/akuntansi');
		$this->load->view('template/footer');
	}

	function perbankan(){
		$this->load->view('template/header');
		$this->load->view('jurusan/perbankan');
		$this->load->view('template/footer');
	}

// ================================= BERITA ================================

	function berita(){
		$this->load->view('template/header');
		$this->load->view('berita/berita');
		$this->load->view('berita/menuBerita');
		$this->load->view('template/footer');
	}

	function detailBerita(){
		$this->load->view('template/header');
		$this->load->view('berita/detailBerita');
		$this->load->view('berita/menuBerita');
		$this->load->view('template/footer');
	}

// ================================= PENGUMUMAN ================================

	function pengumuman(){
		$this->load->view('template/header');
		$this->load->view('pengumuman/pengumuman');
		$this->load->view('pengumuman/menuPengumuman');
		$this->load->view('template/footer');
	}

	// function detailPengumuman(){
	// 	$this->load->view('pengumuman/pengumumanDetail');
	// }

	function detailPengumumanPSB(){
		$this->load->view('pengumuman/pengumumanDetailPSB');
	}

	function detailPengumumanLulus(){
		$this->load->view('pengumuman/pengumumanDetailLulus');
	}

// ================================= JADWAL ================================

	function kalender(){
		$this->load->view('template/header');
		$this->load->view('jadwal/kalendar');
		$this->load->view('template/footer');
	}

	function jadwalPelajaran(){
		$this->load->view('template/header');
		$this->load->view('jadwal/jadwalPelajaran');
		$this->load->view('template/footer');
	}

	function jadwalUtsGanjil(){
		$this->load->view('template/header');
		$this->load->view('jadwal/jadwalUtsGanjil');
		$this->load->view('template/footer');
	}

	function jadwalUtsGenap(){
		$this->load->view('template/header');
		$this->load->view('jadwal/jadwalUtsGenap');
		$this->load->view('template/footer');
	}

	function jadwalUasGanjil(){
		$this->load->view('template/header');
		$this->load->view('jadwal/jadwalUasGanjil');
		$this->load->view('template/footer');
	}

	function jadwalUasGenap(){
		$this->load->view('template/header');
		$this->load->view('jadwal/jadwalUasGenap');
		$this->load->view('template/footer');
	}

	function jadwalUnbk(){
		$this->load->view('template/header');
		$this->load->view('jadwal/jadwalUnbk');
		$this->load->view('template/footer');
	}

	function jadwalSimulasiUnbk(){
		$this->load->view('template/header');
		$this->load->view('jadwal/jadwalSimulasiUnbk');
		$this->load->view('template/footer');
	}

	function jadwalUnbkSusulan(){
		$this->load->view('template/header');
		$this->load->view('jadwal/jadwalUnbkSusulan');
		$this->load->view('template/footer');
	}

// ================================= BKK ================================
 
	function infoBkk(){
		$this->load->view('template/header');
		$this->load->view('bkk/tentangBkk');
		$this->load->view('template/footer');
	}

	function lowongan(){
		$data['lowongan'] = $this->Model_user->list_lowongan();
		$this->load->view('template/header');
		$this->load->view('bkk/lowongan',$data);
		$this->load->view('template/footer');
	}

	function detailLowongan($konten_id){
		$data['lowongan'] = $this->Model_user->pilih_wacana($konten_id)->row();
		$this->load->view('template/header');
		$this->load->view('bkk/detailLowongan',$data);
		$this->load->view('template/footer');
	}

// ================================= LSP ================================

	function tentangLsp(){
		$this->load->view('template/header');
		$this->load->view('lsp/tentangLsp');
		$this->load->view('template/footer');
	}

// ================================= Ekstra ================================

	function ekstrakurikuler(){
		$this->load->view('template/header');
		$this->load->view('ekstra/ekstra');
		$this->load->view('template/footer');
	}

	function pramuka(){
		$this->load->view('template/header');
		$this->load->view('ekstra/pramuka');
		$this->load->view('template/footer');
	}

// ================================= AGENDA ================================

	function agenda(){
		$this->load->view('template/header');
		$this->load->view('agenda/agenda');
		$this->load->view('agenda/menuAgenda');
		$this->load->view('template/footer');
	}

	function detailAgenda(){
		$this->load->view('template/header');
		$this->load->view('agenda/detailAgenda');
		$this->load->view('agenda/menuAgenda');
		$this->load->view('template/footer');
	}



// ================================= Kontak ================================

	function kontak(){
		$this->load->view('template/header');
		$this->load->view('kontak');
		$this->load->view('template/footer');
	}

//============================ UNDER CONSTRUCTION ========================
	function alumni(){
		$this->load->view('underconstruction');
	}

	function elearning(){
		$this->load->view('underconstruction');
	}

}
