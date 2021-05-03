<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MyBasecontroller {

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
		$data['content']='dashboard_v';
		$this->load->view('templates/index',$data);
	}

	public function rekap_aksi()
	{
		$nomor_surat = $this->input->post('nomor_surat');
		$perihal = $this->input->post('perihal');
		$nama_instansi = $this->input->post('nama_instansi');
		$tgl_terima = $this->input->post('tgl_terima');
		$penerima = $this->input->post('penerima');

		$datainsert = array(
			'nomor_surat' => $nomor_surat,
			'perihal' => $perihal,
			'nama_instansi' => $nama_instansi,
			'tanggal_terima' => $tgl_terima,
			'penerima' => $penerima,
			);

		$this->m_insert->input_data($datainsert,'surat');

		redirect('/Dashboard');

	}
}
