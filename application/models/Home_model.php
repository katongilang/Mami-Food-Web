<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model {
	//fungsi untuk mendapatkan email dan password berdasarkan inputan admin yang sudah ada di dalam table admin
		function can_login($email, $password)
		{
			$this->db->select('id_admin');
			$this->db->where('email', $email);
			$this->db->where('password', $password);
			$query = $this->db->get('admin');

			if($query->num_rows() > 0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		//dapetin fav food untuk halaman index
		function get_fav_food(){
			$f1='14';
			$f2='15';
			$f3='16';

			$results = array();
			$this->db->select('*, gambar');
			$this->db->from('menu, gambar');
			$this->db->where("(menu.id_menu='14' OR menu.id_menu='15' OR menu.id_menu='16')"); //static
    		$this->db->where('menu.id_menu = gambar.id_menu');

    		$query = $this->db->get();		
			
			if($query->num_rows() > 0) {
    	 		$results = $query->result();
			}
			return $results;
		}

		//dapetin fav beverage untuk halaman index
		function get_fav_beverage(){

			$results = array();
			$this->db->select('*, gambar');
			$this->db->from('menu, gambar');
			$this->db->where("(menu.id_menu='17' OR menu.id_menu='19' OR menu.id_menu='20')"); //static
    		$this->db->where('menu.id_menu = gambar.id_menu');

    		$query = $this->db->get();		
			
			if($query->num_rows() > 0) {
    	 		$results = $query->result();
			}
			return $results;
		}


		//fungsi mendapat semua list makanan
		function get_all_food(){
			$results = array();
			$this->db->select('*, gambar');
			$this->db->from('menu, gambar');
			$this->db->where("menu.kategori = 'Makanan'");
    		$this->db->where('menu.id_menu = gambar.id_menu');
    		$this->db->order_by('menu.id_menu', 'DESC');
			//$this->db->limit(3);
    		$query = $this->db->get();		
			
			if($query->num_rows() > 0) {
    	 		$results = $query->result();
			}
			return $results;
		}

		//fungsi mendapat semua list minuman
		function get_all_beverage(){
			$results = array();
			$this->db->select('*, gambar');
			$this->db->from('menu, gambar');
			$this->db->where("menu.kategori = 'Minuman'");
    		$this->db->where('menu.id_menu = gambar.id_menu');
			$this->db->order_by('menu.id_menu', 'DESC');
			//$this->db->limit(3);
    		$query = $this->db->get();		
			
			if($query->num_rows() > 0) {
    	 		$results = $query->result();
			}
			return $results;
		}

		public function read_more($id){
	 	 $id=$this->db->select('*,gambar')
	      ->from('menu, gambar')
	      ->where('menu.id_menu = gambar.id_menu')
	      ->where('menu.id_menu', $id)
	      ->get();
		return $id;
		}






}
?>