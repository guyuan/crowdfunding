<?php
class Mywish_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['title']='众筹网by抱不着大腿好伤心team';
		$this->load->view('head_view', $data ) ;
		$this->load->view('mywish_view' ) ;
		$this->load->view('foot_view' ) ;
	}
	
	function seek()
	{
		$data['key']=$_POST['keywords'];
		$data['des']=$_POST['describe'];
		$this->load->view('seek_view', $data ) ;
	}
}
?>