<?php 
defined('BASEPATH') OR exit('Tidak diperbolehkan untuk mengakses script secara langsung');

class Home extends CI_Controller{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Home_model'); 
	}

	public function index()
    {
    	//memuat model
        // $this->load->model('Home_model');
        //mengambil data dari database
        //$data['tb_gambar']=$this->home_model->get_images();
        //memuat view dan meneruskan data
        $data['fav_beverage'] = $this->Home_model->get_fav_beverage();
        $data['fav_food'] = $this->Home_model->get_fav_food();
        $this->load->view('index',$data);

    }

    //fungsi untuk login
	public function login(){
		
		$data['title'] = "Login";
		$this->load->view('login', $data);
	}

	//fungsi untuk validasi login
	function login_validation(){

		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		
		//model function
		$this->load->model('Home_model');
		$result = $this->Home_model->can_login($email, $password);
		
		if($result){
			foreach ($result as $key) {
			$session_data = array(
				'id_admin'       => $key->$id_admin,
				'email' 		 => $email,
				'status' 		 => "login"
			);

			$this->session->set_userdata($session_data);
			}
			redirect(base_url(). 'Panel/panel_home');
		}
		else
		{	
			$this->session->set_flashdata('category_error', 'Invalid Email and Password !');
			redirect(base_url() . 'Home/login');
		}
	}
	//fungsi untuk logout
	function logout()
	{
		$this->session->unset_userdata(array('id_admin','username','status'));
		$this->session->sess_destroy();
		redirect(base_url() . 'Home/index');
	}

	//membuka list food semua
	public function list_food(){

		$data['menu'] = $this->Home_model->get_all_food();

		$this->load->view('list_food', $data);
	}

	//membuka list beverage semua
	public function list_beverage(){
		$data['menu'] = $this->Home_model->get_all_beverage();
		$this->load->view('list_beverage',$data);
	}

	//fungsi untuk menampilkan detail menu
	public function detail_menu(){
	   $id= $this->uri->segment(3);
	   $data['detail'] = $this->Home_model->read_more($id);
	   $this->load->view('detail_menu', $data);
	}	

	
}
