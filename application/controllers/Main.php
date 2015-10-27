<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
	 parent::__construct();
	 $this->load->model('database');
	 $this->load->model('model_project');
	 $this->load->model('scoring');
		
	}

	public function index()
	{		
	
		$logged_in = $this->session->userdata('logged_in');
		if (!$logged_in){
			$this->load->view('login');
		}

		else{

			$data = array();
			$query = $this->model_project->view_years();
			if ($query){
			    $data['records'] = $query;
		    }
			
			$this->load->view('main', $data);
		}	
	}

	public function login()
	{
		

		$logged_in = $this->session->userdata('logged_in');
		if (!$logged_in){
			$this->load->view('login');
		}

		else{
			
			$this->load->view('approved');
		}
	}

	public function auth()
	{
		$logged_in = $this->session->userdata('logged_in');
		if ($logged_in){
			redirect('login');
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$encrypt = md5($password);
	    $result = $this->database->auth($username, $encrypt);

	    if ($result)
	    {
	    	foreach ($result as $row) {
	    		$this->session->set_userdata('id_user', $row->id_user);
	    		$this->session->set_userdata('username', $row->username);
	    		$this->session->set_userdata('seksi', $row->seksi);
	    		$this->session->set_userdata('logged_in', TRUE);
	    	}
	    	redirect('main');
	    }

	    else 
	    {
	    	$this->session->set_flashdata('info','info');
	    	redirect('main');
		}

	}

	public function logout ()
	{
		$this->session->sess_destroy();
	    redirect('main', 'refresh');
	}

	public function add_evaluasi()
	{		
		$logged_in = $this->session->userdata('logged_in');
		if (!$logged_in){
			$this->load->view('login');
		}
		else{
			
			$this->load->view('add_evaluasi');
		}	
	}

	public function kopkar()
	{		
		$logged_in = $this->session->userdata('logged_in');
		if (!$logged_in){
			$this->load->view('login');
		}
		else{
			if ($this->session->userdata('username')=="admin"){
				$data["data"] = $this->model_project->daftar_evaluasi(1);
			}
			else {
				$data["data"] = $this->model_project->daftar_evaluasi_by_seksi(1, $this->session->userdata('seksi'));
			}

			//load tahun evaluasi
			$query = $this->model_project->view_years();
			if ($query){
			    $data['records'] = $query;
		    }
			$this->load->view('kopkar', $data);
		}		
	}

	public function dinasti()
	{		
		$logged_in = $this->session->userdata('logged_in');
		if (!$logged_in){
			$this->load->view('login');
		}
		else{
			if ($this->session->userdata('username')=="admin"){
				$data["data"] = $this->model_project->daftar_evaluasi(2);
			}
			else {
				$data["data"] = $this->model_project->daftar_evaluasi_by_seksi(2, $this->session->userdata('seksi'));
			}

			//load tahun evaluasi
			$query = $this->model_project->view_years();
			if ($query){
			    $data['records'] = $query;
		    }
			$this->load->view('dinasti', $data);
		}		
	}

	public function user()
	{		
		$logged_in = $this->session->userdata('logged_in');
		if (!$logged_in){
			$this->load->view('login');
		}
		else{
			$data["data"] = $this->model_project->daftar_user();

			//load tahun evaluasi
			$query = $this->model_project->view_years();
			if ($query){
			    $data['records'] = $query;
		    }
			$this->load->view('user', $data);
		}
	}

	public function questioner($id_evaluasi)
	{		
		$logged_in = $this->session->userdata('logged_in');
		if (!$logged_in){
			$this->load->view('login');
		}
		else{
			$data = $this->model_project->get_data_questioner($id_evaluasi);	
			foreach ($data as $row)
			{
        			$id_user= $row->id_user;
        			$id_tk = $row->id_tk;
        			$tahun = $row->tahun;
        			
			}
			if ($this->session->userdata('id_user')==$id_user){
				if ($id_tk==1) $tk="Koperasi Karyawan";
				else $tk="Karya Dinasti";
				$data["id"] = $id_evaluasi;
				$data["tahun"] = $tahun;
				$data["id_tk"] = $id_tk;
				$data["tk"] = $tk;
				$this->load->view('questioner', $data);

			}
			else{
				echo "Your not authorized to view this page!";
			}
		}
	}
	
}