<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {	

	public function __construct() {
        parent::__construct();
        $this->load->helper('url', 'form');
		//$this->load->library('upload');
		
	}
	
	public function index()
	 {
		 //$this->load->view('admin/index');
		 $this->load->view('admin/login');
	 }

	 public function signup()
	 {
		 $this->load->view('admin/signup');
	 }

	 public function user_insert()
	{
        if($this->input->post('username') =="" || $this->input->post('email')=="" || $this->input->post('mobile')=="" || $this->input->post('password')=="" || $this->input->post('Cpassword')==""){
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Please fill all the fields.</div>');
            redirect('admin/signup');
		}
		
		$mobileregex = "/^[6-9][0-9]{9}$/" ;  
		
		if(preg_match($mobileregex, $this->input->post('mobile')) !== 1){
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Mobile Number must be 10 digits.</div>');
            redirect('admin/signup');
		}

		if($this->input->post('password') !== $this->input->post('Cpassword')){
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Password Not Matched</div>');
            redirect('admin/signup');
		}

		$q=$this->db->select('*');
	    $q=$this->db->where('email',$this->input->post('email'));
	    $q=$this->db->or_where('mobile',$this->input->post('mobile'));
		$q=$this->db->get('user_access');
		echo $this->db->last_query();
		$rowcount = $q->num_rows();
		if($rowcount>0){
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Email or Mobile Already exist.</div>');
            redirect('admin/signup');
		}

		$data = array(  
            'name' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'password' => md5($this->input->post('password')),			   		   
            'isActive' => 0
        );
        $this->db->insert('user_access', $data);
        $id = $this->db->insert_id();
        if($id)
        {
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">New User added</div>');
            redirect('admin/signup');
        }
        else
        {
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Sorry! There is error While insert data!</div>');
            redirect('admin/signup');
        }
	}

	public function user_login(){
		$email=$this->input->post('email');
	    $pass=md5($this->input->post('password'));
	    $q=$this->db->select('*');
	    $q=$this->db->where('email',$email);
	    $q=$this->db->where('password',$pass);
		//$q=$this->db->where('isActive',1);
		$q=$this->db->get('user_access');
		//echo $this->db->last_query();
		$rowcount = $q->num_rows();
		//exit();
		if($rowcount>0)
		{	
			
			$data=json_decode(json_encode($q->result()),TRUE);
			if($data[0]['isActive'] == 0){
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Account is inactive</div>');
            	redirect('admin');
			}
			$ses_data=array(
			'id'=>$data[0]['id']			
			);
			$this->session->set_userdata('Admin_session',$ses_data);
			
            redirect('admin/dashboard');
		}
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center">email or password incorrect.</div>');
            redirect('admin');
		}
	}

	public function dashboard(){
		$this->load->view('admin/index');
	}

	public function main_category(){
		$this->load->view('admin/main_category');
	}

	public function insertMainCategory(){
	 	$this->form_validation->set_rules('category', 'Main Category' , 'required');
	 	$this->form_validation->set_rules('description', 'Description' , 'required');

	 	if ($this->form_validation->run()== false)
	 	{
			$this->load->view('admin/main_category');
	 	}else{
			$q=$this->db->select('id,main_category_name');
			$q=$this->db->where('main_category_name',$this->input->post('category'));
			$q=$this->db->get('main_category');
			$rowcount = $q->num_rows();
			if($rowcount > 0){
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">This category already exist.</div>');
				$this->load->view('admin/main_category');
			} else{
				$d=$this->session->all_userdata();				
				$createdby = $d['Admin_session']['id'];
				$data = array(  
					'main_category_name' => $this->input->post('category'),
					'description' => $this->input->post('description'),
					'created_by' => $createdby
				);
				$this->db->insert('main_category', $data);
				$id = $this->db->insert_id();
				if($id)
				{
					$this->session->set_flashdata('msg','<div class="alert alert-success text-center">New Main Category added</div>');
					$this->load->view('admin/main_category');
				}
				else
				{
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Sorry! There is error While insert data!</div>');
					$this->load->view('admin/main_category');
				}
			}			
		 }
	}

	public function sub_category(){
		$this->db->select('id,main_category_name');
		$this->db->from('main_category'); 
		$this->db->where('isActive',1);
		$query = $this->db->get();  
		$data['main_category_data']=$query->result();

		$this->load->view('admin/sub_category',$data);
	}

	public function insertSubhCategory(){
		$this->form_validation->set_rules('main_category', 'Main Category' , 'required');
		$this->form_validation->set_rules('sub_category', 'Sub Category' , 'required');
	    $this->form_validation->set_rules('description', 'Description' , 'required');

	 	if ($this->form_validation->run()== false)
	 	{
			$this->db->select('id,main_category_name');
			$this->db->from('main_category'); 
			$this->db->where('isActive',1);
			$query = $this->db->get();  
			$data['main_category_data']=$query->result();
			$this->load->view('admin/sub_category',$data);
			//redirect('admin/sub_category');
	 	}else{
			$q=$this->db->select('id,main_category_id,sub_category_name,description');
			$q=$this->db->where('main_category_id',$this->input->post('main_category'));
			$q=$this->db->where('sub_category_name',$this->input->post('sub_category'));
			$q=$this->db->get('sub_category');
			$rowcount = $q->num_rows();
			if($rowcount > 0){
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">This sub category already exist in main categgory.</div>');
				//$this->load->view('admin/sub_category');
				redirect('admin/sub_category');
			} else {
				$d=$this->session->all_userdata();				
				$createdby = $d['Admin_session']['id'];				
				$data = array(  
					'main_category_id' => $this->input->post('main_category'),
					'sub_category_name' => $this->input->post('sub_category'),
					'description' => $this->input->post('description'),
					'created_by' => $createdby
				);
				$this->db->insert('sub_category', $data);
				$id = $this->db->insert_id();
				if($id)
				{
					$this->session->set_flashdata('msg','<div class="alert alert-success text-center">New Sub Category added</div>');
					redirect('admin/sub_category');
				}
				else
				{
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Sorry! There is error While insert data!</div>');
					redirect('admin/sub_category');
				}
			}			
		 }
	}

	public function addAdvertisement(){
		$this->db->select('id,main_category_name');
		$this->db->from('main_category'); 
		$this->db->where('isActive',1);
		$query = $this->db->get();  
		$data['main_category_data']=$query->result();
		$this->load->view('admin/advertisement',$data);
	}

	public function insertAdvertisementData(){
		$this->form_validation->set_rules('main_category', 'Main Category' , 'required');
		$this->form_validation->set_rules('sub_category', 'Sub Category' , 'required');
		$this->form_validation->set_rules('client_name', 'Client Name' , 'required');
		$this->form_validation->set_rules('contact_person', 'Contact Person' , 'required');
		$this->form_validation->set_rules('contact_number', 'Contact Number' , 'required');
		$this->form_validation->set_rules('display_contact', 'Office Contact Number' , 'required');
		$this->form_validation->set_rules('email', 'Personal Email Address' , 'required');
		$this->form_validation->set_rules('officeemail', 'Office Email Address' , 'required');
		// $this->form_validation->set_rules('banner', 'Banner' , 'required');
		// $this->form_validation->set_rules('logo', 'Logo' , 'required');
		$this->form_validation->set_rules('website', 'Website Address' , 'required');
		$this->form_validation->set_rules('address', 'Address' , 'required');
		$this->form_validation->set_rules('landmark', 'Landmark' , 'required');
		$this->form_validation->set_rules('city', 'City' , 'required');
		$this->form_validation->set_rules('state', 'State' , 'required');
		$this->form_validation->set_rules('pin', 'Pin' , 'required');
		$this->form_validation->set_rules('description', 'Description' , 'required');

	 	if ($this->form_validation->run()== false)
	 	{
			$this->db->select('id,main_category_name');
			$this->db->from('main_category'); 
			$this->db->where('isActive',1);
			$query = $this->db->get();  
			$data['main_category_data']=$query->result();
			$this->load->view('admin/advertisement',$data);
			//redirect('admin/advertisement');
	 	}else{
			$q=$this->db->select('id,client_name,email');
			$q=$this->db->where('officeemail',$this->input->post('officeemail'));
			$q=$this->db->get('advertisement');
			$rowcount = $q->num_rows();
			$rowcount =0;
			if($rowcount > 0){
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">This advertisement already exist.</div>');
				redirect('admin/addAdvertisement');
			} else {
				$d=$this->session->all_userdata();				
				$createdby = $d['Admin_session']['id'];	

				$errors= array();
				$file_name = $_FILES['banner']['name'];
				$file_size =$_FILES['banner']['size'];
				$file_tmp =$_FILES['banner']['tmp_name'];
				$file_type=$_FILES['banner']['type'];
				$tmp = explode('.', $file_name);
				$file_ext=end($tmp);
				
				$extensions= array("jpeg","jpg","png");
				if(in_array($file_ext,$extensions)=== false){
					$errors[]="extension not allowed, please choose a JPEG or PNG file for banner.";
				 }
				 
				 if($file_size > 2097152){
					$errors[]='Banner size must be excately 2 MB';
				 }

				 //2nd image
				 $errors1= array();
				$file_name1 = $_FILES['logo']['name'];
				$file_size1 =$_FILES['logo']['size'];
				$file_tmp1 =$_FILES['logo']['tmp_name'];
				$file_type1=$_FILES['logo']['type'];
				$tmp1 = explode('.', $file_name1);
				$file_ext1=end($tmp1);
				
				$extensions1= array("jpeg","jpg","png");
				if(in_array($file_ext1,$extensions1)=== false){
					$errors1[]="extension not allowed, please choose a JPEG or PNG file for logo.";
				 }
				 
				 if($file_size1 > 2097152){
					$errors1[]='Logo size must be excately 2 MB';
				 }
				 
				 if(empty($errors)==true && empty($errors1)==true){
					move_uploaded_file($file_tmp,"images/banner/".time().'-'.$file_name);
					move_uploaded_file($file_tmp1,"images/logo/".time().'-'.$file_name1);

					$data = array(  
						'main_category' => $this->input->post('main_category'),
						'sub_category' => $this->input->post('sub_category'),
						'client_name' => $this->input->post('client_name'),
						'contact_person' => $this->input->post('contact_person'),
						'contact_number' => $this->input->post('contact_number'),
						'display_contact' => $this->input->post('display_contact'),
						'email' => $this->input->post('email'),
						'officeemail' => $this->input->post('officeemail'),
						'banner' => time().'-'.$file_name,
						'logo' => time().'-'.$file_name1,
						'website' => $this->input->post('website'),
						'address' => $this->input->post('address'),
						'landmark' => $this->input->post('landmark'),
						'city' => $this->input->post('city'),
						'state' => $this->input->post('state'),
						'pin' => $this->input->post('pin'),
						'description' => $this->input->post('description'),
						'created_by' => $createdby
					);
					$this->db->insert('advertisement', $data);
					$id = $this->db->insert_id();
					if($id)
					{
						$this->session->set_flashdata('msg','<div class="alert alert-success text-center">New advertisement added</div>');
						redirect('admin/addAdvertisement');
					}
					else
					{
						$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Sorry! There is error While insert data!</div>');
						redirect('admin/addAdvertisement');
					}					
				 }else{
					$this->db->select('id,main_category_name');
					$this->db->from('main_category'); 
					$this->db->where('isActive',1);
					$query = $this->db->get();  
					$data['main_category_data']=$query->result();
					$this->session->set_flashdata('msg','<div class="alert alert-success text-center">'.print_r(array_push($errors,$errors1)).'</div>');
					$this->load->view('admin/advertisement',$data);
				 }
				die();
				
				
			}			
		}
	}

	public function getSubCategories()
	{
		$id = $this->input->post('main_category_id');
		$this->db->select('id,sub_category_name');
		$this->db->from('sub_category'); 
		$this->db->where('main_category_id',$id);
		$this->db->where('isActive',1);
		$query = $this->db->get();  
		$data=json_decode(json_encode($query->result()), True);		
		if(count($data)>0)
		{
			$str ='<option value="">Choose option</option>';
			foreach($data as $r){			
			 	$str .='<option value="'. $r['id'].'">'.$r['sub_category_name'].'</option>';
			}			
		}
		else
		{
			$str ='<option value="">Choose option</option>';			
		}
		echo $str;
	}

	public function logout(){
		$this->session->sess_destroy();		
		redirect('Admin');
	}


	public function builder()
	{
		 $this->load->model('User_model');
		$this->load->view('admin/builder');
	}

		//insert data in database 
	 public function insertData()
	 {
	 	$this->load->model('User_model');
	 	$this->form_validation->set_rules('email_address', 'Email' , 'required|valid_email');
	 	$this->form_validation->set_rules('website_link', 'Link' , 'required');
	 	$this->form_validation->set_rules('contact_1', 'Contact-1' , 'required');
	 	$this->form_validation->set_rules('contact_2', 'Contact-2' , 'required');

	 	if ($this->form_validation->run()== false)
	 	{
	 		$this->load->view('admin/builder');
	 	}else{
	 		$formArray = array();
	 			 		
			$data = array();
			$config['upload_path'] = './images/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 2000;
		//	$config['max_width'] = 1500;
	    //  $config['max_height'] = 1500;
	
			$this->load->library('upload', $config);

			 if (!$this->upload->do_upload('banner_image')) {
				 
				$data['message']=$this->session->set_flashdata('error', 'Something went wrong !!' );

			} else{
				
				$formArray['email_address'] = $this->input->post('email_address');
				$formArray['website_link'] = $this->input->post('website_link');
				$formArray['contact_1'] = $this->input->post('contact_1');
				$formArray['contact_2'] = $this->input->post('contact_2');
				$formArray['created_at'] = date('Y-m-d H:i:s');
				
				$cimage_name = $_FILES["banner_image"]["name"];
				$c_logo = $_FILES["logo"]["name"];

				$data1 = $this->upload->data();
				//$data2 = $this->upload->data();

				$formArray['banner_image'] = $data1['file_name'];
				//$formArray['logo'] = $data2['file_name'];

				$this->User_model->insertData($formArray);
				
				$data['message']= $this->session->set_flashdata('success', 'Record Save Successfully !!' );
				redirect(base_url().'Admin/builder',$data);
			}


	 		
	 	}

		 
	 }


	 //get all record for database functionality

	public function list()
		{
			$this->load->model('User_model');
			$master_table = $this->User_model->all();
				$data = array();
				$data['master_table'] = $master_table;
			$this->load->view('admin/list',$data);
		}	

		//Edit or Update functionality
	public function Edit($Id)	
		{
			$this->load->model('User_model');
			$master = $this->User_model->getUser($Id);
			$data = array();
			$data['master'] = $master;
			$this->form_validation->set_rules('email_address','Email','required|valid_email');
			$this->form_validation->set_rules('website_link','Link','required');
			$this->form_validation->set_rules('contact_1','Contact 1','required');
			$this->form_validation->set_rules('contact_2','Contact 2','required');
   
		   if($this->form_validation->run() == false){
			$this->load->view('admin/edit',$data);
   
			} else{
				$formArray = array();
				
					$formArray['email_address'] = $this->input->post('email_address');
					$formArray['website_link'] = $this->input->post('website_link');
					$formArray['contact_1'] = $this->input->post('contact_1');
					$formArray['contact_2'] = $this->input->post('contact_2');
					$this->User_model->updateUser($Id,$formArray);
					$this->session->set_flashdata('success','Record Update Successfully !!!');
					redirect(base_url().'Admin/list');
			}
			
		}

		//delete user functionality
		function delete($Id){
			$this->load->model('User_model');
			$master = $this->User_model->getUser($Id);
	
			if( empty($Id)){
				$this->session->set_flashdata('Failure','Record Not Found !!!');
					 redirect(base_url().'Admin/list');
			}
	
	
			$this->User_model->deleteUser($Id);
			$this->session->set_flashdata('Success','Record Deleted Successfully !!!');
					 redirect(base_url().'Admin/list');
	
		}


	public function hotel()
	{
		$this->load->view('admin/hotel');
	}

	 
	 public function login()
	 {
		 $this->load->view('admin/login');
	 }

	 

	 public function forgote_password()
	 {
		 $this->load->view('admin/forgote_password');
	 }

	 public function addCategory()
	 {
		 $this->load->view('admin/addCategory');
	 }

	

}