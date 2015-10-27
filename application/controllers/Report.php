<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('database');
		$this->load->model('model_project');
		$this->load->model('scoring');
				
	}

	public function pdf($id_evaluasi) {
    
	    $logged_in = $this->session->userdata('logged_in');
		if (!$logged_in){
			$this->load->view('login');
		}

		else{
	    
	   	 	$query = $this->model_project->get_data_report($id_evaluasi);	
			foreach ($query as $row)
			{
        			$id_user= $row->id_user;
        			$id_tk = $row->id_tk;
        			$tahun = $row->tahun;
        			$seksi = $row->seksi;
        			$t1 = $row->t1;
        			$t2 = $row->t2;
        			$t3 = $row->t3;
        			$t4 = $row->t4;
        			$t5 = $row->t5;
        			$t6 = $row->t6;
        			$t7 = $row->t7;
        			$t8 = $row->t8;
        			$k1 = $row->k1;
        			$k2 = $row->k2;
        			$q1 = $row->q1;
        			$q2 = $row->q2;
        			$q3 = $row->q3;
        			$q4 = $row->q4;
        			$q5 = $row->q5;
        			$q6 = $row->q6;
        			
			}

			if ($id_tk==1) $tk="Koperasi Karyawan";
			else $tk="Karya Dinasti";
			$data["id"] = $id_evaluasi;
			$data["seksi"] = $seksi;
			$data["tahun"] = $tahun;
			$data["id_tk"] = $id_tk;
			$data["tk"] = $tk;
			$data["tk"] = $tk;
			$data["t1"] = $t1;
			$data["t2"] = $t2;
			$data["t3"] = $t3;
			$data["t4"] = $t4;
			$data["t5"] = $t5;
			$data["t6"] = $t6;
			$data["t7"] = $t7;
			$data["t8"] = $t8;
			$data["k1"] = $k1;
			$data["k2"] = $k2;
			$data["q1"] = $q1;
			$data["q2"] = $q2;
			$data["q3"] = $q3;
			$data["q4"] = $q4;
			$data["q5"] = $q5;
			$data["q6"] = $q6;


			$html=$this->load->view('report', $data, true);
		    
		    include_once APPPATH.'/third_party/mpdf/mpdf.php';
		    $this->mpdf = new mPDF();
   			$this->stylesheet = file_get_contents('css/style.css');
    		$this->mpdf->AddPage('P', // L - landscape, P - portrait
            '', '', '', '',
            15, // margin_left
            0, // margin right
            3, // margin top
            0, // margin bottom
            0, // margin header
            12,
            '','','','','','','','','','Letter'); // margin footer

		    $this->mpdf->WriteHTML($html);
		    $tgl = date("d-m-Y");
		    $pdfFilePath = 'Questioner_'.$seksi.'_'.$tahun.'.pdf';
		    $this->mpdf->Output($pdfFilePath, 'I'); // view in the explorer
		    
		    //$pdf = $this->m_pdf->load();
		    //$data["laporan"] = $this->database->report($awal, $akhir);
		    //$html=$this->load->view('report', $data, true);
		    //$pdf = new mPDF('','', 0, '', 15, 15, 16, 16, 9, 9, 'L');
		    //$pdf->WriteHTML($html);
		    //$pdf->Output($pdfFilePath, "I");
		    //$this->load->view('report');
		  }
	}

	public function html($id_evaluasi) {
		$query = $this->model_project->get_data_report($id_evaluasi);	
			foreach ($query as $row)
			{
        			$id_user= $row->id_user;
        			$id_tk = $row->id_tk;
        			$tahun = $row->tahun;
        			$seksi = $row->seksi;
        			$t1 = $row->t1;
        			$t2 = $row->t2;
        			$t3 = $row->t3;
        			$t4 = $row->t4;
        			$t5 = $row->t5;
        			$t6 = $row->t6;
        			$t7 = $row->t7;
        			$t8 = $row->t8;
        			$k1 = $row->k1;
        			$k2 = $row->k2;
        			$q1 = $row->q1;
        			$q2 = $row->q2;
        			$q3 = $row->q3;
        			$q4 = $row->q4;
        			$q5 = $row->q5;
        			$q6 = $row->q6;
        			
			}

			if ($id_tk==1) $tk="Koperasi Karyawan";
			else $tk="Karya Dinasti";
			$data["id"] = $id_evaluasi;
			$data["seksi"] = $seksi;
			$data["tahun"] = $tahun;
			$data["id_tk"] = $id_tk;
			$data["tk"] = $tk;
			$data["t1"] = $t1;
			$data["t2"] = $t2;
			$data["t3"] = $t3;
			$data["t4"] = $t4;
			$data["t5"] = $t5;
			$data["t6"] = $t6;
			$data["t7"] = $t7;
			$data["t8"] = $t8;
			$data["k1"] = $k1;
			$data["k2"] = $k2;
			$data["q1"] = $q1;
			$data["q2"] = $q2;
			$data["q3"] = $q3;
			$data["q4"] = $q4;
			$data["q5"] = $q5;
			$data["q6"] = $q6;
		$this->load->view('report', $data);

	}

	public function scoring()
	{		
		$logged_in = $this->session->userdata('logged_in');
		if (!$logged_in){
			$this->load->view('login');
		}
		else{

			$tahun =  $this->input->post('tahun');
			$id_tk =  $this->input->post('id_tk');

			$data["tahun"] = $tahun;
			$data["id_tk"] = $id_tk;

			$data["t1_4"] = $this->scoring->count_t1(4, $tahun, $id_tk);
			$data["t1_3"] = $this->scoring->count_t1(3, $tahun, $id_tk);
			$data["t1_2"] = $this->scoring->count_t1(2, $tahun, $id_tk);
			$data["t1_1"] = $this->scoring->count_t1(1, $tahun, $id_tk);

			$data["t2_4"] = $this->scoring->count_t2(4, $tahun, $id_tk);
			$data["t2_3"] = $this->scoring->count_t2(3, $tahun, $id_tk);
			$data["t2_2"] = $this->scoring->count_t2(2, $tahun, $id_tk);
			$data["t2_1"] = $this->scoring->count_t2(1, $tahun, $id_tk);

			$data["t3_4"] = $this->scoring->count_t3(4, $tahun, $id_tk);
			$data["t3_3"] = $this->scoring->count_t3(3, $tahun, $id_tk);
			$data["t3_2"] = $this->scoring->count_t3(2, $tahun, $id_tk);
			$data["t3_1"] = $this->scoring->count_t3(1, $tahun, $id_tk);

			$data["t4_4"] = $this->scoring->count_t4(4, $tahun, $id_tk);
			$data["t4_3"] = $this->scoring->count_t4(3, $tahun, $id_tk);
			$data["t4_2"] = $this->scoring->count_t4(2, $tahun, $id_tk);
			$data["t4_1"] = $this->scoring->count_t4(1, $tahun, $id_tk);

			$data["t5_4"] = $this->scoring->count_t5(4, $tahun, $id_tk);
			$data["t5_3"] = $this->scoring->count_t5(3, $tahun, $id_tk);
			$data["t5_2"] = $this->scoring->count_t5(2, $tahun, $id_tk);
			$data["t5_1"] = $this->scoring->count_t5(1, $tahun, $id_tk);

			$data["t6_4"] = $this->scoring->count_t6(4, $tahun, $id_tk);
			$data["t6_3"] = $this->scoring->count_t6(3, $tahun, $id_tk);
			$data["t6_2"] = $this->scoring->count_t6(2, $tahun, $id_tk);
			$data["t6_1"] = $this->scoring->count_t6(1, $tahun, $id_tk);

			$data["t7_4"] = $this->scoring->count_t7(4, $tahun, $id_tk);
			$data["t7_3"] = $this->scoring->count_t7(3, $tahun, $id_tk);
			$data["t7_2"] = $this->scoring->count_t7(2, $tahun, $id_tk);
			$data["t7_1"] = $this->scoring->count_t7(1, $tahun, $id_tk);

			$data["t8_4"] = $this->scoring->count_t8(4, $tahun, $id_tk);
			$data["t8_3"] = $this->scoring->count_t8(3, $tahun, $id_tk);
			$data["t8_2"] = $this->scoring->count_t8(2, $tahun, $id_tk);
			$data["t8_1"] = $this->scoring->count_t8(1, $tahun, $id_tk);


			$data["q1_4"] = $this->scoring->count_q1(4, $tahun, $id_tk);
			$data["q1_3"] = $this->scoring->count_q1(3, $tahun, $id_tk);
			$data["q1_2"] = $this->scoring->count_q1(2, $tahun, $id_tk);
			$data["q1_1"] = $this->scoring->count_q1(1, $tahun, $id_tk);

			$data["q2_4"] = $this->scoring->count_q2(4, $tahun, $id_tk);
			$data["q2_3"] = $this->scoring->count_q2(3, $tahun, $id_tk);
			$data["q2_2"] = $this->scoring->count_q2(2, $tahun, $id_tk);
			$data["q2_1"] = $this->scoring->count_q2(1, $tahun, $id_tk);

			$data["q3_4"] = $this->scoring->count_q3(4, $tahun, $id_tk);
			$data["q3_3"] = $this->scoring->count_q3(3, $tahun, $id_tk);
			$data["q3_2"] = $this->scoring->count_q3(2, $tahun, $id_tk);
			$data["q3_1"] = $this->scoring->count_q3(1, $tahun, $id_tk);

			$data["q4_4"] = $this->scoring->count_q4(4, $tahun, $id_tk);
			$data["q4_3"] = $this->scoring->count_q4(3, $tahun, $id_tk);
			$data["q4_2"] = $this->scoring->count_q4(2, $tahun, $id_tk);
			$data["q4_1"] = $this->scoring->count_q4(1, $tahun, $id_tk);

			$data["q5_4"] = $this->scoring->count_q5(4, $tahun, $id_tk);
			$data["q5_3"] = $this->scoring->count_q5(3, $tahun, $id_tk);
			$data["q5_2"] = $this->scoring->count_q5(2, $tahun, $id_tk);
			$data["q5_1"] = $this->scoring->count_q5(1, $tahun, $id_tk);

			$data["q6_4"] = $this->scoring->count_q6(4, $tahun, $id_tk);
			$data["q6_3"] = $this->scoring->count_q6(3, $tahun, $id_tk);
			$data["q6_2"] = $this->scoring->count_q6(2, $tahun, $id_tk);
			$data["q6_1"] = $this->scoring->count_q6(1, $tahun, $id_tk);


			//load tahun evaluasi
			$query = $this->model_project->view_years();
			if ($query){
			    $data['records'] = $query;
		    }

			//$this->load->view('scoring', $data);

			$html=$this->load->view('scoring', $data, true);
		    
		    include_once APPPATH.'/third_party/mpdf/mpdf.php';
		    $this->mpdf = new mPDF();
   			$this->stylesheet = file_get_contents('css/style.css');
    		$this->mpdf->AddPage('P', // L - landscape, P - portrait
            '', '', '', '',
            15, // margin_left
            15, // margin right
            15, // margin top
            15, // margin bottom
            15, // margin header
            12,
            '','','','','','','','','','Letter'); // margin footer

		    $this->mpdf->WriteHTML($html);
		    $tgl = date("d-m-Y");
		    $pdfFilePath = 'Scoring_'.$id_tk.'_'.$tahun.'.pdf';
		    $this->mpdf->Output($pdfFilePath, 'I');
		}		
	}

	

}