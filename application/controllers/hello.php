<?php 

class Hello extends CI_Controller{

	public function index(){
		echo "This is index";
	}

	/*
	public function one($p1){
		$this->load->model("hello_model","model");
		$profile= $this->model->getProfile($p1);

		print_r($profile);


		$data['profile']=$profile;
		print_r($data);

		$this->load->view("one",$data);

	}*/

	public function two(){
		$this->load->model("hello_model","model");
		
		$data['users']= $this->model->getUsers();

		$data['employees']= $this->model->getEmployees();
		//print_r($data);
		

		$this->load->view("detailPage",$data);

	}
}

?>