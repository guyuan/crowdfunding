<?php
class Login_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['title']='众筹网by抱不着大腿好伤心team';
		$this->load->view('head_view', $data ) ;
		$this->load->view('login_view' ) ;
		$this->load->view('foot_view' ) ;
	}
}
?>