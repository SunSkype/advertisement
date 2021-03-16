<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->helper('url', 'form');
		//$this->load->library('upload');
    }

    public function user_insert()
	{
        if($this->input->post('password') !== $this->input->post('Cpassword')){
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Branch Inserted </div>');
            redirect('admin/signup');
        }

		$data = array(  
            'name' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'password' => $this->input->post('password'),			   		   
            'isActive' => 0
        );
        $this->db->insert('user_access', $data);
        $id = $this->db->insert_id();
        if($id)
        {
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Branch Inserted </div>');
            redirect('Home/Branch');
        }
        else
        {
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Sorry! There is error While insert data!</div>');
            redirect('Home/Branch');
        }
	}


}
?>