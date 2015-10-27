<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scoring extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function count_t1($value, $tahun, $id_tk)
	{
		$query = $this->db->query('SELECT * FROM `tb_question`, `tb_evaluasi` WHERE tb_question.id_question=tb_evaluasi.id_evaluasi AND tahun='. (int)$tahun .' AND t1='. (int)$value .' AND id_tk='.(int)$id_tk.'');
		return $query->num_rows();
	}	

	function count_t2($value, $tahun, $id_tk)
	{
		$query = $this->db->query('SELECT * FROM `tb_question`, `tb_evaluasi` WHERE tb_question.id_question=tb_evaluasi.id_evaluasi AND tahun='. (int)$tahun .' AND t2='. (int)$value .' AND id_tk='.(int)$id_tk.'');
		return $query->num_rows();
	}	

	function count_t3($value, $tahun, $id_tk)
	{
		$query = $this->db->query('SELECT * FROM `tb_question`, `tb_evaluasi` WHERE tb_question.id_question=tb_evaluasi.id_evaluasi AND tahun='. (int)$tahun .' AND t3='. (int)$value .' AND id_tk='.(int)$id_tk.'');
		return $query->num_rows();
	}	

	function count_t4($value, $tahun, $id_tk)
	{
		$query = $this->db->query('SELECT * FROM `tb_question`, `tb_evaluasi` WHERE tb_question.id_question=tb_evaluasi.id_evaluasi AND tahun='. (int)$tahun .' AND t4='. (int)$value .' AND id_tk='.(int)$id_tk.'');
		return $query->num_rows();
	}	

	function count_t5($value, $tahun, $id_tk)
	{
		$query = $this->db->query('SELECT * FROM `tb_question`, `tb_evaluasi` WHERE tb_question.id_question=tb_evaluasi.id_evaluasi AND tahun='. (int)$tahun .' AND t5='. (int)$value .' AND id_tk='.(int)$id_tk.'');
		return $query->num_rows();
	}

	function count_t6($value, $tahun, $id_tk)
	{
		$query = $this->db->query('SELECT * FROM `tb_question`, `tb_evaluasi` WHERE tb_question.id_question=tb_evaluasi.id_evaluasi AND tahun='. (int)$tahun .' AND t6='. (int)$value .' AND id_tk='.(int)$id_tk.'');
		return $query->num_rows();
	}		

	function count_t7($value, $tahun, $id_tk)
	{
		$query = $this->db->query('SELECT * FROM `tb_question`, `tb_evaluasi` WHERE tb_question.id_question=tb_evaluasi.id_evaluasi AND tahun='. (int)$tahun .' AND t7='. (int)$value .' AND id_tk='.(int)$id_tk.'');
		return $query->num_rows();
	}	

	function count_t8($value, $tahun, $id_tk)
	{
		$query = $this->db->query('SELECT * FROM `tb_question`, `tb_evaluasi` WHERE tb_question.id_question=tb_evaluasi.id_evaluasi AND tahun='. (int)$tahun .' AND t8='. (int)$value .' AND id_tk='.(int)$id_tk.'');
		return $query->num_rows();
	}

	function count_q1($value, $tahun, $id_tk)
	{
		$query = $this->db->query('SELECT * FROM `tb_question`, `tb_evaluasi` WHERE tb_question.id_question=tb_evaluasi.id_evaluasi AND tahun='. (int)$tahun .' AND q1='. (int)$value .' AND id_tk='.(int)$id_tk.'');
		return $query->num_rows();
	}	

	function count_q2($value, $tahun, $id_tk)
	{
		$query = $this->db->query('SELECT * FROM `tb_question`, `tb_evaluasi` WHERE tb_question.id_question=tb_evaluasi.id_evaluasi AND tahun='. (int)$tahun .' AND q2='. (int)$value .' AND id_tk='.(int)$id_tk.'');
		return $query->num_rows();
	}	

	function count_q3($value, $tahun, $id_tk)
	{
		$query = $this->db->query('SELECT * FROM `tb_question`, `tb_evaluasi` WHERE tb_question.id_question=tb_evaluasi.id_evaluasi AND tahun='. (int)$tahun .' AND q3='. (int)$value .' AND id_tk='.(int)$id_tk.'');
		return $query->num_rows();
	}	

	function count_q4($value, $tahun, $id_tk)
	{
		$query = $this->db->query('SELECT * FROM `tb_question`, `tb_evaluasi` WHERE tb_question.id_question=tb_evaluasi.id_evaluasi AND tahun='. (int)$tahun .' AND q4='. (int)$value .' AND id_tk='.(int)$id_tk.'');
		return $query->num_rows();
	}	

	function count_q5($value, $tahun, $id_tk)
	{
		$query = $this->db->query('SELECT * FROM `tb_question`, `tb_evaluasi` WHERE tb_question.id_question=tb_evaluasi.id_evaluasi AND tahun='. (int)$tahun .' AND q5='. (int)$value .' AND id_tk='.(int)$id_tk.'');
		return $query->num_rows();
	}
	
	function count_q6($value, $tahun, $id_tk)
	{
		$query = $this->db->query('SELECT * FROM `tb_question`, `tb_evaluasi` WHERE tb_question.id_question=tb_evaluasi.id_evaluasi AND tahun='. (int)$tahun .' AND q6='. (int)$value .' AND id_tk='.(int)$id_tk.'');
		return $query->num_rows();
	}	
}
