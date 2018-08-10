<?php 

class Model_auth extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function smkbm_login(){
		$getInputUsername = $this->input->post('username');
		$getInputPassword = $this->input->post('password');
		
		$this->db->where('user_username',$getInputUsername);
		$this->db->where('user_password',$getInputPassword);
		$query = $this->db->get('bm_user');


		$cek = $this->cek_active($this->input->post('username'));

		if($query->num_rows()==1){
			if($cek==1){
				return true;
			} else{
				return false;
			}
		} else {
			return false;
		}
	}

	function cek_active($username){
		$cek = $this->db->select('user_active')->get_where('bm_user',array('user_username'=>$username))->row_array();
		return $cek['user_active'];
	}

	function cek_status(){
		//status user : adminweb/adminkaprodi
		$cek = $this->db->select('user_status')->get_where('bm_user',array('user_username'=>$this->session->userdata('username')))->row_array();
		return $cek['user_status'];

	}
	

}


 ?>