<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Welcome1 extends CI_Controller {

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
		$this->load->model("hello_model1","model");
		$data['details']= $this->model->getTickets();

		$this->load->view("ticketPage3",$data);
	}

	public function addUsers()
	{

		
		$details=array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password')

		);


		$this->load->model("hello_model1","model");
		$data['details']= $this->model->addUsers($details);

		

		print_r("Registration Successful");
	}

	public function login()
	{

			$this->load->view("loginPage3");
	}

	public function manage()
	{

			
			$details=array(
			'resolution'=>$this->input->post('resolution'),
			'status'=>$this->input->post('status'),
			'ticket_id'=>$_GET['id']
			);

			$this->load->model("hello_model1","model");
		    $data['details']= $this->model->manage($details);
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


			$this->load->model("hello_model","model");
		    $data['flag1']= $this->model->isAdmin($details);

		    if($data['flag1'] == 1){
				$newdata = array(
                   'logged_in' => 1,
                   'logged_in_time' => time(),
                   'isadmin' => 1
            	);
            }else{
            	$newdata = array(
                   'logged_in' => 1,
                   'logged_in_time' => time()
            	);
            }

			//print_r($newdata);
			$this->session->set_userdata($newdata);

			$this->load->view("Login Successful");
			//print_r("User logged in");
		}
		else{
			print_r("Not Registered");
		}

		
	}



	public function create($id=null)
	{	
		
		
			$sid = $this->session->userdata('logged_in');
			if($sid == 1) {
				$adm = $this->session->userdata('logged_in');
				if($adm == 0) {
					$this->load->view("create3",$data);
				}else{
					echo "admin";
				}
			
			}
			else{
				echo "Please login";
			}
		
	}

	public function createObject($id=null)
	{	

			$details=array(
				'name'=>$this->input->post('name'),
				'region'=>$this->input->post('region'),
				'team'=>$this->input->post('team'),
				'question'=>$this->input->post('question')
			);

			
			$data['create']= $this->model->createObject($details);
			print_r("Object Created");

	
	}

}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

