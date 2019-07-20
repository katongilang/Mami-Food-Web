<?php 
defined('BASEPATH') OR exit('Tidak diperbolehkan untuk mengakses script secara langsung');

class Panel extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Panel_model');
	}

	public function panel_home(){
		$data['title'] = "PanelHome";
		$this->load->view('panel_home');
	}
	public function panel_new(){
		$data['title'] = "PanelNew";
		$this->load->view('panel_new');
	}

	//fungsi untuk menghapus konten
	function delete_food($id){
      if($this->Panel_model->get_delete($id)){
        redirect('Panel/panel_list_food');
       }else{
       	//gagal
         redirect('Panel/panel_list_food');
       }
    }

    function delete_beverage($id){
      if($this->Panel_model->get_delete($id)){
        redirect('Panel/panel_list_beverage');
       }else{
       	//kalo gagal
         redirect('Panel/panel_list_beverage');
       }
    }

    //fungsi untuk mengedit food
	function update_food() {
		$this->load->library('upload');

		$config['upload_path'] = './assets/image/food_image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf';
		$config['max_size'] = '2048'; 
		$this->upload->initialize($config);

		$id= $this->input->post('id_menu1');
		$data = array(
			'nama_menu' => $this->input->post('nama_menu1'),
			'deskripsi_menu' => $this->input->post('deskripsi1'),
			'harga_menu' => $this->input->post('harga_menu1')
		);

		$this->upload->do_upload('gambar1');
		$uploaddata = $this->upload->data();
		$images = $uploaddata['file_name']; 

		$data2 = array(
			'gambar' => $images
		);

		$this->Panel_model->get_update_menu($id,$data, $data2);

		redirect('Panel/panel_list_food');
	}


	//fungsi untuk mengedit beverage
	function update_beverage() {
		$this->load->library('upload');

		$config['upload_path'] = './assets/image/food_image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf';
		$config['max_size'] = '2048'; 
		$this->upload->initialize($config);

		$id= $this->input->post('id_menu1');
		$data = array(
			'nama_menu' => $this->input->post('nama_menu1'),
			'deskripsi_menu' => $this->input->post('deskripsi1'),
			'harga_menu' => $this->input->post('harga_menu1')
		);

		$this->upload->do_upload('gambar1');
		$uploaddata = $this->upload->data();
		$images = $uploaddata['file_name']; 

		$data2 = array(
			'gambar' => $images
		);

		$this->Panel_model->get_update_menu($id,$data, $data2);

		redirect('Panel/panel_list_beverage');
	}


	//fungsi mencari makanan (agak aneh di paggingnya)
	function cari_food(){
		$keyword = $this->input->get('srch-term', TRUE); //mengambil nilai dari form input cari

		$jumlah_data = $this->Panel_model->get_jumlah_food($keyword);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Panel/panel_list_food';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 100;
		
		$config['query_string_segment'] = 'start';
		$config['full_tag_open'] = '<nav><ul class="pagination" style="margin-top:0px">';
		$config['full_tag_close'] = '</ul></nav>';
		 
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		 
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		 
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		 
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		 
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		 
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['menu'] = $this->Panel_model->get_cari_food($config['per_page'],$from,$keyword);	
		$this->load->view('panel_list_food',$data);	

	} 

	function cari_beverage(){
		$keyword = $this->input->get('srch-term', TRUE); //mengambil nilai dari form input cari

		$jumlah_data = $this->Panel_model->get_jumlah_beverage($keyword);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Panel/panel_list_beverage';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 100;
		
		$config['query_string_segment'] = 'start';
		$config['full_tag_open'] = '<nav><ul class="pagination" style="margin-top:0px">';
		$config['full_tag_close'] = '</ul></nav>';
		 
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		 
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		 
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		 
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		 
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		 
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['menu'] = $this->Panel_model->get_cari_beverage($config['per_page'],$from,$keyword);	
		$this->load->view('panel_list_beverage',$data);	

	}

	public function panel_list_food(){

		$jumlah_data = $this->Panel_model->get_jumlah_food();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Panel/panel_list_food';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		
		$config['query_string_segment'] = 'start';
		$config['full_tag_open'] = '<nav><ul class="pagination" style="margin-top:0px">';
		$config['full_tag_close'] = '</ul></nav>';
		 
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		 
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		 
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		 
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		 
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		 
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['menu'] = $this->Panel_model->get_list_food($config['per_page'],$from);	
		$this->load->view('panel_list_food',$data);


	}
	public function panel_list_beverage(){
		
		$jumlah_data = $this->Panel_model->get_jumlah_beverage();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Panel/panel_list_beverage';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		
		$config['query_string_segment'] = 'start';
		$config['full_tag_open'] = '<nav><ul class="pagination" style="margin-top:0px">';
		$config['full_tag_close'] = '</ul></nav>';
		 
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		 
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		 
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		 
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		 
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		 
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['menu'] = $this->Panel_model->get_list_beverage($config['per_page'],$from);	
		$this->load->view('panel_list_beverage',$data);
	}

	//fungsi untuk menambah menu
	function post_food() {
		$this->load->model('Panel_model');
		$this->load->library('upload');

		
		$config['upload_path'] = './assets/image/food_image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf';
		$config['max_size'] = '2048'; 
		//$config['file_name'] = $_FILES['image1']['file_name'];
		$this->upload->initialize($config);

		$this->upload->do_upload('gambar');
		$uploaddata = $this->upload->data();
		$images = $uploaddata['file_name'];   

 	 	$this->Panel_model->tambahMenu($images);
 	 
  		redirect('Panel/panel_new');  
	}


}
?>