<?php

/**
* 
*/
class Test extends CI_Controller
{

	
	public function index(){
		$this->load->model('test_model');
		$data['query']=$this->test_model->get_all_post();
		$data['title']="index page";
		$this->load->view('test_view',$data);
	}

	public function add_post(){
		$this->load-> helper('url');

		$this->load->view('add_job_view');
	}

	public function create(){
		$Name=$this->input->post('Name');
		$CompanyProfile=$this->input->post('Profile');
		//$CompanyLogo=$this->input->post('fileInput');
		$Location=$this->input->post('Location');
		$Category=$this->input->post('Category');
		$SalaryRange=$this->input->post('SalaryRange');
		$JobPosition=$this->input->post('JobPosition');
		$JobType=$this->input->post('type');
		$TelNumber=$this->input->post('TelNumber');
		$Email=$this->input->post('Email');
		$Website=$this->input->post('Website');
		
		
		$data=array(
			'Name'=>$Name,
			'CompanyProfile'=>$CompanyProfile,
			//'fileInput'=>$CompanyLogo,
			'Location'=>$Location,
			'Category'=>$Category,
			'SalaryRange'=>$SalaryRange,
			'JobPosition'=>$JobPosition,
			'JobType'=>$JobType,
			'TelNumber'=>$TelNumber,
			'Email'=>$Email,
			'Website'=>$Website,);
			
			
		$this->load->model('test_model');
		$this->test_model->add_new_post($data);
		$this->load->view('success');

	}

	
}