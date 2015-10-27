<?php
/**
 * @author Muhammad Yusran, PEP BAWEN
 * @copyright Oktober 2015
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_project','project');
	}

	public function add_user()
	{
		$encrypt = md5($this->input->post('password1'));
		$data = array (
			"seksi" => $this->input->post('seksi'),
			"username" => $this->input->post('username'),
			"email" => $this->input->post('email'),
			"password" => $encrypt
			);
		$this->project->add_user($data);
		redirect('main/user');
	}

	public function delete_user($id_user)
	{
		$this->project->delete_user($id_user);
		redirect('main/user');
	}

	public function edit_user($id_user)
	{
		$data = $this->project->edit_user($id_user);
		echo json_encode($data);
	}

	public function update_user()
	{	
		$encrypt = md5($this->input->post('password3'));
		$data = array (
			"seksi" => $this->input->post('seksi'),
			"username" => $this->input->post('username'),
			"email" => $this->input->post('email'),
			"password" => $encrypt
			);
		$this->project->update_user(array("id_user" => $this->input->post('id_user')), $data);
		
		echo json_encode(array("status" => TRUE));
	}


	public function add_evaluasi()
	{
		if ($this->project->cek_tahun($this->input->post('tahun'))){
			echo "Tahun sudah ada"; 
		}
		else{
			$user = $this->project->jumlah_user();
			for ($a = 2, $id=1; $a<=$user; $a++){
				for ($b = 1; $b<=2; $b++, $id++){
						$data1 = array ("id_question"=>"");
						$data2 = array(
								"tahun" => $this->input->post('tahun'),
								"id_user" => $a,
								"id_tk" => $b,
								"id_question" => $id,
								"status" => "Waiting"
						);
						$this->project->save($data1, $data2);	
				}		
			} 	
			$query = $this->project->get_email();
			$x=0;
			foreach ($query as $row) 
			{
				$email[$x]=$row->email;
				$x++;
			}

			$this->project->sendmail($email[1],$email[2],$email[3],$email[4],$email[5],$email[6],$email[7], $email[8], $this->input->post('tahun'));
			redirect('main');
		}
	}

	public function submit_questioner($id, $id_tk){
		$today = date("y-m-d");
		$data = array(
				"t1"=>$this->input->post('t1'),
				"t2"=>$this->input->post('t2'),
				"t3"=>$this->input->post('t3'),
				"t4"=>$this->input->post('t4'),
				"t5"=>$this->input->post('t5'),
				"t6"=>$this->input->post('t6'),
				"t7"=>$this->input->post('t7'),
				"t8"=>$this->input->post('t8'),
				"k1"=>$this->input->post('k1'),
				"q1"=>$this->input->post('q1'),
				"q2"=>$this->input->post('q2'),
				"q3"=>$this->input->post('q3'),
				"q4"=>$this->input->post('q4'),
				"q5"=>$this->input->post('q5'),
				"q6"=>$this->input->post('q6'),
				"k2"=>$this->input->post('k2')
			);
		$status = array ("status"=>"Submitted",
						"tanggal"=>date("y-m-d")
				);

		//$this->project->update(array('id_question' => $id), $data, $status);
		$this->project->update($id, $data, $status);
		echo json_encode(array("status" => TRUE));
		if ($id_tk==1)
			redirect('main/kopkar');
		else
			redirect('main/dinasti');
	}


	public function ajax_edit($id)
	{
		$data = $this->project->get_by_id($id);
		echo json_encode($data);
	}
	
	public function ajax_delete($id)
	{
		$this->project->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
}
