<?php 
	class Model_admin extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function insert_wacana($data){
		$this->db->insert('bm_konten', $data);
	}



    function list_lowongan(){
        $this->db->select('*');
        $this->db->from('bm_konten');
        $this->db->where('konten_kategori','lowongan');
        $query = $this->db->get();
        return $query->result_array(); 
    }

	//SAMPAI SINI!!!
  
	public function delete_data_konten($konten_id){
		$this->db->where('konten_id', $konten_id);
		$this->db->delete('bm_konten');
	}

	function pilih_wacana($konten_id){
        $this->db->where('konten_id',$konten_id);
        $query = $this->db->get('bm_konten');
        return $query;
    } 

        function list_berita(){
        $this->db->select('*');
        $this->db->from('bm_konten');
        $this->db->where('konten_kategori','berita');
        $query = $this->db->get();
        return $query->result_array(); 
    }
    function list_pengumuman(){
        $this->db->select('*');
        $this->db->from('bm_konten');
        $this->db->where('konten_kategori','pengumuman');
        $query = $this->db->get();
        return $query->result_array(); 
    }

    public function get_detail_konten($konten_id){
        $this->db->where('konten_id',$konten_id);
        $this->db->select('*');
        $this->db->from('bm_konten');
        return $this->db->get();
    }
    public function update_data_konten($konten_id, $data){
        $this->db->where('konten_id', $konten_id);
        $this->db->update('bm_konten', $data);
    }


    public function get_detail_pengumuman($konten_id){
        $this->db->where('konten_id',$konten_id);
        $this->db->select('*');
        $this->db->from('bm_konten');
        return $this->db->get();
    }
    public function update_pengumuman($konten_id, $data){
        $this->db->where('konten_id', $konten_id);
        $this->db->update('bm_konten', $data);
    }


}