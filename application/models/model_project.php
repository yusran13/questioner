<?php
/**
 * @author Muhammad Yusran, PEP BAWEN
 * @copyright Oktober 2015
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_project extends CI_Model {

	var $table = 'tb_evaluasi';
	var $column = array('tahun','id_user','id_tk','id_question','status','tanggal');
	var $order = array('id_evaluasi' => 'dsc');

	var $table2 = 'tb_user';
	var $column2 = array('id_user', 'username', 'seksi');


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function daftar_evaluasi($tk)
	{

		$query = $this->db->query('SELECT id_evaluasi, seksi, tahun, status, tanggal FROM `tb_user` join tb_evaluasi WHERE tb_evaluasi.id_user = tb_user.id_user AND tb_evaluasi.id_tk= '. (int)$tk .'  order by id_evaluasi asc');
		return $query->result();
	}	

	function daftar_evaluasi_by_seksi($tk, $seksi)
	{

		$query = $this->db->query('SELECT id_evaluasi, tb_evaluasi.id_user, seksi, tahun, tb_evaluasi.id_tk, nama_tk, status, tanggal FROM `tb_user` join tb_evaluasi join tb_tenaga_kerja WHERE tb_evaluasi.id_user = tb_user.id_user AND seksi="'.$seksi.'" AND tb_evaluasi.id_tk= '. (int)$tk .' AND tb_evaluasi.id_tk=tb_tenaga_kerja.id_tk order by id_evaluasi asc');
		return $query->result();
	}	

	public function add_user($data)
	{
		$this->db->insert('tb_user', $data);
	}

	public function delete_user($id_user)
	{
		$this->db->where('id_user', $id_user);
		$this->db->delete('tb_user');
	}

	public function edit_user($id_user)
	{
		$this->db->from('tb_user');
		$this->db->where('id_user',$id_user);
		$query = $this->db->get();

		return $query->row();
	}

	public function update_user($id_user, $data)
	{
		$this->db->update('tb_user', $data, $id_user);
		return $this->db->affected_rows();
	}

	function daftar_user()
	{
		//$query = $this->db->select('id_user, username, seksi');
		$query = $this->db->get('tb_user');
		return $query->result();
	}	

	function jumlah_user()
	{
		//$query = $this->db->select('id_user, username, seksi');
		$query = $this->db->get('tb_user');

		return $query->num_rows();
	}	

	function _get_datatables_query()
	{
		
		$this->db->from($this->table);

		$i = 0;
	
		foreach ($this->column as $item) 
		{
			if($_POST['search']['value'])
				($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
			$column[$i] = $item;
			$i++;
		}
		
		if(isset($_POST['order']))
		{
			$this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function get_daftar_evaluasi($tk)
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$this->db->where('id_tk',$tk);
		$query = $this->db->get();
		
		return $query->result();
	}

	function get_data_not_status($status)
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$this->db->where('status !=',$status);
		$query = $this->db->get();
		
		return $query->result();
	}

	function count_filtered($status)
	{
		$this->_get_datatables_query();
		$this->db->where('status',$status);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all($status)
	{
		$this->db->from($this->table);
		$this->db->where('status',$status);
		return $this->db->count_all_results();
	}

	function count_filtered_not($status)
	{
		$this->_get_datatables_query();
		$this->db->where('status !=',$status);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all_not($status)
	{
		$this->db->from($this->table);
		$this->db->where('status !=',$status);
		return $this->db->count_all_results();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function cek_tahun($tahun)
	{
		$query = $this->db->query('SELECT tahun FROM tb_evaluasi WHERE tahun = '. (int)$tahun);
		if ($query->num_rows()>0)
			return true;
		else
			return false;
	}

	public function save($data1, $data2)
	{
		$this->db->insert('tb_question', $data1);
		$this->db->insert('tb_evaluasi', $data2);
	}

	public function update($id, $data, $status)
	{

		$this->db->where('id_question', $id);
		$this->db->update('tb_question', $data);

		$this->db->where('id_evaluasi', $id);
		$this->db->update('tb_evaluasi', $status);
		return $this->db->affected_rows(); 
	}

	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}

	function get_data_questioner($id_evaluasi)
	{
		$query = $this->db->query('SELECT id_user, tahun, id_tk FROM tb_evaluasi WHERE id_evaluasi = '. (int)$id_evaluasi);
		return $query->result();
	}

	function get_data_report($id_evaluasi)
	{
		$query = $this->db->query('SELECT tb_evaluasi.id_user, tahun, id_tk, seksi, t1, t2, t3, t4, t5, t6, t7, t8, k1, q1, q2, q3, q4, q5, q6, k2  FROM tb_evaluasi, tb_user, tb_question WHERE id_evaluasi = '. (int)$id_evaluasi.' AND tb_evaluasi.id_user=tb_user.id_user AND tb_question.id_question= id_evaluasi');
		return $query->result();
	}	

	function view_years(){
		$data = array();
		$query = $this->db->query('SELECT DISTINCT `tahun` FROM tb_evaluasi');
		foreach($query->result() as $row) {
            $data[] = $row;
        }
        return $data;
	}	

	function get_email(){
		$query = $this->db->query('SELECT email FROM tb_user');
        return $query->result();
	}

	function sendmail($email1,$email2,$email3,$email4,$email5,$email6,$email7, $email8, $tahun){   

           $server = "smg_ln1/svr/app";
	       $dbfile = "mail\snotific.nsf";
	   
			$receipt = $email1.";".$email2.";".$email3.";".$email4.";".$email5.";".$email6.";".$email7.";".$email8;
			$send = split(";", $receipt);
			

			$pw = "pepbawen";
 			$session = new COM("Lotus.NotesSession") 
 			 or die("Can't init Notes Session");;
			$session->Initialize( $pw ); 
			// print the actual Notes Username
			//echo $session->UserName ; 
			// open the database on the server
			$db = $session->GetDatabase( $server, $dbfile, False );
			// create a new document in the database
			$doc = $db->CreateDocument(); 
			// Set some important fields
			$doc->ReplaceItemValue("Form","Memo");
			// Note: It's not possible in this way to add more
			// than one receipient to this memo.
			$doc->ReplaceItemValue("SendTo", $send);
			// other flields are BlindCopyTo CopyTo
			$doc->ReplaceItemValue('$KeepPrivate',"1");
			$doc->ReplaceItemValue("Importance","1");
			// or ReturnReceipt = "1"
			// or Importance = "1" for high
			$doc->ReplaceItemValue("Subject","Questioner Tenaga Kerja Koperasi Karyawan & Karya Dinasti Tahun ".$tahun);
			// create a RichTextItem
			$ritem = $doc->CreateRichTextItem( "Body" );
			// a other way is to add only Text to the body:
			
			$ritem->AddNewLine(1);
			$ritem->AppendText( "Dear Sir/Madam," );
			$ritem->AddNewLine(2);
			$ritem->AddNewLine(2);
			$ritem->AppendText( "Disampaikan untuk mengisi e-Questioner tahunan (".$tahun.") Tenaga Kerja Outsourching (Koperasi Karyawan & Karya Dinasti) yang ada di seksi masing-masing." );
			$ritem->AddNewLine();
			$ritem->AppendText( "Dimohon untuk melakukan pengisian questioner secara objektif demi peningkatan kualitas tenaga kerja kedepannya.");
			$ritem->AddNewLine(3);
			$ritem->AppendText( "Demikian kami sampaikan, atas perhatian dan kerjasamanya kami ucapkan terima kasih.");
			$ritem->AddNewLine();
			$ritem->AppendText( "Untuk melakukan pengisian e-Questioner melalui alamat: http://172.16.201.88/questioner, untuk username & password silahkan menghubungi HRD (ext. 117).");
			$ritem->AddNewLine(5);
		    $ritem->AppendText( "Regards,");
			$ritem->AddNewLine();
			$ritem->AppendText( "HRD Purinusa Bawen");
			$ritem->AddNewLine();
			$ritem->AppendText( "---------------------------------");
			$ritem->AddNewLine(2);
			$ritem->AppendText( "Auto Generate By e-Questioner Application");
			// send the mail
			$doc->Send(False);
			// Note: If you want save the mail you have to call
			// $doc->Save(True,False);
			$ritem = null;
			$doc = null;
			$db = null;
			$session = null;
// END OF LOTUS NOTES
    }

}
