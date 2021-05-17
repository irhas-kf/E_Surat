<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap extends MyBasecontroller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_insert');
		$this->load->model('m_read');
		$this->load->model('m_update');
		$this->load->model('m_delete');
		$this->load->helper(array('form', 'url'));
		$this->load->database();
	}

	private $modulId = 5;
	public $acl = array(
		'index' => '5|_READ',
		);

    protected function middleware()
    {
        return array('user_management');
    }

	public function index()
	{
		$bulansaatini = $this->m_read->bulan_saatini();
		$tahunsaatini = $this->m_read->tahun_saatini();
		$data['content']='rekap_v';
		$data['tahunsaatini']=$tahunsaatini;
		$data['bulansaatini']=$bulansaatini;
		$this->load->view('templates/index',$data);

	}

	public function aksi_tampil()
	{
		$multipelfiled = $this->input->post('subject');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		if ($this->input->post('tampil')) {
			$rekaptampil = $this->m_read->rekap_tampil($bulan,$tahun);
			$bulansaatini = $this->m_read->bulan_saatini();
			$tahunsaatini = $this->m_read->tahun_saatini();
			$data['tahunsaatini']=$tahunsaatini;
			$data['bulansaatini']=$bulansaatini;
			$data['rekaptampil']=$rekaptampil;
			$data['datafiledrekapsurat']=$multipelfiled;
			$data['content']='rekap_tampil_v';
			$this->load->view('templates/index',$data);
		}
		if ($this->input->post('pdf')) {
			$data['datafiledrekapsurat']=$multipelfiled;
			$data['content']='rekap_pdf_v';
			$this->load->view('templates/index',$data);
		}
		if ($this->input->post('excel')) {
			$data['datafiledrekapsurat']=$multipelfiled;
			$data['content']='rekap_excel_v';
			$this->load->view('templates/index',$data);
		}
		if ($this->input->post('word')) {
			$data['datafiledrekapsurat']=$multipelfiled;
			$data['content']='rekap_word_v';
			$this->load->view('templates/index',$data);
		}
	}
}
