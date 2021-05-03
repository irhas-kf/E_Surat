<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MyBasecontroller {

	function __construct()
	{
		parent::__construct();
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


	public function rekap()
	{
		$data['content']='rekap_v';
		$this->load->view('templates/index',$data);

	}
}