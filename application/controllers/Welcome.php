<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct() {
        parent::__construct();
        $this->load->helper('url', 'form');
		//$this->load->library('upload');
		//$this->load->model('Front_model');
	}
	
	public function index()
	{
		$this->load->view('front/index');
	}

	public function hotel_1()
	{
		$data['data'] = $this->Front_model->display_record();
		$this->load->view('front/hotel_1',$data);
	}

	public function parlar()
	{
		$data['data'] = $this->Front_model->display_record();
		$this->load->view('front/parlar',$data);
	}

	public function builder()
	{
		
		$data['data'] = $this->Front_model->display_record();
		$this->load->view('front/builder',$data);
	}

}
