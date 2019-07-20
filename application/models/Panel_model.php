<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class panel_model extends CI_Model {

	//fungsi untuk menambahkan konten ke database
	public function tambahMenu($images){
		$data = array(
			"id_menu" => '',
			"nama_menu" => $this->input->post('nama'),
			"deskripsi_menu" => $this->input->post('deskripsi'),
			"kategori" => $this->input->post('kategori'),
			"harga_menu" => $this->input->post('harga')
		);
	    
	    $this->db->insert('menu', $data); //masukan ke tabel menu
	    
		$cid = $this->db->insert_id();

		$data1 = array(
			"gambar" => $images,
			"id_menu" => $cid
		);
		 $this->db->insert('gambar', $data1);

		 return $cid;
	}

 	//menghitung total rows pada kategori makanan
	function get_jumlah_food(){
		$results = array();
		$this->db->select('*');
		$this->db->from('menu');
		$this->db->where("kategori = 'Makanan'");
		$query = $this->db->get()->num_rows();

		return $query;
	}

	function get_jumlah_beverage()
	{
		$results = array();
		$this->db->select('*');
		$this->db->from('menu');
		$this->db->where("kategori = 'Minuman'");
		$query = $this->db->get()->num_rows();

		return $query;

		//return $this->db->get('menu')->num_rows();
	}


	//fungsi mengambil semua menu dengan kategori MAKANAN (sudah termasuk keperluan pagging, makannya ada parameter number dan offset)
	function get_list_food($number,$offset)
	{	
		$this->db->where("menu.kategori = 'Makanan'");
		$this->db->order_by('menu.id_menu', 'DESC');

		return $query = $this->db->get('menu',$number,$offset)->result();		
	}

	//fungsi mengambil semua menu dengan kategori MINUMAN (sudah termasuk keperluan pagging, makannya ada parameter number dan offset)
	function get_list_beverage($number,$offset)
	{	
		$this->db->where("menu.kategori = 'Minuman'");
		$this->db->order_by('menu.id_menu', 'DESC');

		return $query = $this->db->get('menu',$number,$offset)->result();		
	}

	//fungsi cari makanan pake paging (tapi paggingnya aneh)
	function get_cari_food($number,$offset,$keyword)
	{	
		$this->db->where("kategori = 'Makanan'");
		$this->db->like('nama_menu', $keyword)->or_like('harga_menu', $keyword); //mencari data yang serupa dengan keyword

		return $query = $this->db->get('menu',$number,$offset,$keyword)->result();
	}

	//fungsi cari minuman pake paging (tapi paggingnya aneh)
	function get_cari_beverage($number,$offset,$keyword)
	{	
		$this->db->where("kategori = 'Minuman'");
		$this->db->like('nama_menu', $keyword)->or_like('harga_menu', $keyword); //mencari data yang serupa dengan keyword

		return $query = $this->db->get('menu',$number,$offset,$keyword)->result();
	}

	// fungsi untuk mengedit data content
	function get_update_menu($id,$data,$data2)
	{
		$this->db->where('id_menu', $id);
		$this->db->update('menu', $data);

		$this->db->where('id_menu', $id);
		$this->db->update('gambar', $data2);

		return TRUE;
	}

	//untuk menghapus food atau beverage
	function get_delete($id){
		$this->db->where('id_menu', $id);
		$this->db->delete('menu');
	    
	    $unlink = $this->db->select("gambar");
		$this->db->where('id_gambar', $id);
		$this->db->delete('gambar');

		unlink("../assets/image/content_gambar/$unlink");
	}



}