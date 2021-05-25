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
		for ($x = 0; $x <= 11; $x++) {
		 $data['report'] = $this->m_read->report($x);
		 //echo json_encode($data);
		}

		$this->load->view('templates/index',$data);
	}
}
