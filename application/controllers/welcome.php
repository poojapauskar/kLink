<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Welcome extends CI_Controller {

	function __construct() {
        parent::__construct();

        $this->load->library('session');
  	    // $this->load->view('header');
    }

	public function index()
	{

			$this->load->view("loginPage3");
	}


	public function register()
	{

			$this->load->view("registerPage3");
	}

	public function getTickets()
	{
		$this->load->model("hello_model","model");
		$data['details']= $this->model->getTickets();

		
		//print_r($data);
		$this->load->view("ticketPage3",$data);
	}
	
	public function getList()
	{
		$this->load->model("hello_model","model");
		$data['details']= $this->model->getTickets();

		
		//print_r($data);
		$this->load->view("ticketPage4",$data);
	}

	public function addUsers()
	{

		
		$details=array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'country_code'=>$this->input->post('country_code'),
			'phone'=>$this->input->post('phone'),
			'email'=>$this->input->post('email')

		);

		$details['phone'] =$details['country_code'].''.$details['phone'];

		$this->load->model("hello_model","model");
		$data['details']= $this->model->addUsers($details);

		

		print_r("Registration Successful");
	}

	public function login()
	{

			$this->load->view("loginPage3");
	}

	
	
	public function manage()
	{

			$details['ticket_id'] = $_GET['id'];
			
			$this->load->model("hello_model","model");
		    	$data['details']= $this->model->manage($details);
		    	//print_r($data);
		    
			$this->load->view("manage3",$data);
	}
	
	
	public function manage1()
	{

			
			
			$details=array(
			'resolution'=>$this->input->post('resolution'),
			'status'=>$this->input->post('status'),
			'ticket_id'=>$_GET['id']
			);

			$this->load->model("hello_model","model");
		    	$data['details']= $this->model->manage1($details);
		    	
		    	redirect('/getTickets');
	}
	
	public function refer()
	{

			
			$details['ticket_id'] = $_GET['id'];
			
			$this->load->model("hello_model","model");
		    	$data['details']= $this->model->refer($details);
		    	
		    	//print_r($data);
		    	$this->load->view("refer3",$data);
		    	
			
	}


	

	public function loginUsers()
	{

		$details=array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password')
		);

		$this->load->model("hello_model","model");
		$data['flag']= $this->model->loginUsers($details);


		if($data['flag']==1){


		
				$newdata = array(
                   'logged_in' => 1,
                   'logged_in_time' => time()
            	);
          

			//print_r($newdata);
			$this->session->set_userdata($newdata);

			$this->load->model("hello_model","model");
			$data1['isAdmin']= $this->model->isAdmin($details);
			//print_r($data1['isAdmin']);
			
			if($data1['isAdmin']==1)
			{
				redirect('/getList');
			}else{
				redirect('/getTickets');
			}
		}
		else{
			print_r("Not Registered");
		}

		
	}



	public function create()
	{	
		
		
			$sid = $this->session->userdata('logged_in');
			if($sid == 1) {
				//$adm = $this->session->userdata('logged_in');
				//if($adm == 0) {
					$this->load->view("create3");
				//}else{
				//	echo "admin";
				//}
			
			}
			else{
				echo "Please login";
			}
		
	}

	public function createObject()
	{	

			$details=array(
				'name'=>$this->input->post('name'),
				'region'=>$this->input->post('region'),
				'team'=>$this->input->post('team'),
				'query'=>$this->input->post('query')
			);

			$this->load->model("hello_model","model");
			$data['create']= $this->model->createObject($details);
			print_r("Object Created");

	
	}

}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */