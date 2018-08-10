<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Authen extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_auth');
		$this->load->library('form_validation');
		$this->form_validation->set_message('required','<p style="color:red;"> {field} harus diisi.');
	}

	public function index(){
		if($this->session->userdata('username')){
			if($this->session->userdata('status_user')=='admin'){
				redirect('adminweb/home_admin');
				// die('a');
			}elseif($this->session->userdata('status_user')=='adminwebmhs'){
				redirect('adminmhs');
			}else{
				$this->load->view('login');
			}
		}else{
			$this->load->view('login');
		}
	}

	public function authentication(){
		if($this->model_auth->smkbm_login()){
			return true;
		} else {
			$this->form_validation->set_message('authentication','<p style="color:red;">Username atau Password yang anda masukkan salah atau belum terdaftar');
			return false;
		}
	}

	public function proseslogin(){
		$this->form_validation->set_rules('username','Username','required|trim|callback_authentication');
		$this->form_validation->set_rules('password','Password','required');


		//jika username dan password telah terisi
		if($this->form_validation->run()){

			$data = array(
					'username' => $this->input->post('username'),
					'is_logged_in' => 1
				);
			$this->session->set_userdata($data);

			$status_user = $this->model_auth->cek_status();

			$data['status_user']=$status_user;
			$this->session->set_userdata($data);

			$this->index();
		}else{
			$this->index();
		} 
	}
	public function proseslogout(){
		$this->session->sess_destroy();
		redirect(site_url('Authen'));
	}

}

 ?>