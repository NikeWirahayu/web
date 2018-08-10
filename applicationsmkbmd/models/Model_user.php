<?php 

class Model_user extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	 function list_lowongan(){
        $this->db->select('*');
        $this->db->from('bm_konten');
        $this->db->where('konten_kategori','lowongan');
        $query = $this->db->get();
        return $query->result_array(); 
    }
	function pilih_wacana($konten_id){
        $this->db->where('konten_id',$konten_id);
        $query = $this->db->get('bm_konten');
        return $query;
    } 
	function permission($action = NULL){
		if($this->session->userdata('username')){
			$this->db->where('username', $this->session->userdata('username'));
			$user = $this->db->get('user')->row();
			if($user->status == 'admin'){
				$permissionList = array('adhome2');
			}else if($user->status == 'dosen'){
				$permissionList = array('doshome2');
			}else if($user->status == 'mhs'){
				$permissionList = array('dhs','krs','khs','jadwalkrs','krsclose','krsopen','mhshome2','perpuspinjaman','perpusriwayat','profilmhs','profileditprb','profileditort','profileditlog');
			}
		}
		if(!is_null($permissionList) and in_array($action,$permissionList)){
			return true;
		}else{
			return false;
		}
	}

	

}


 ?>