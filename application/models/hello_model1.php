<?php 

class Hello_model1 extends CI_Model{

		public function addUsers($details){

			$query="INSERT INTO users1 (user_name,password) VALUES ('$details[username]','$details[password]')";
			$query=$this->db->query($query);
				
			return;
		}

		public function isAdmin($details){

			$query="SELECT isadmin FROM users1 WHERE user_name =$details['username'] && password =$details['password']";
			$query=$this->db->query($query);
				
			return;
		}

		public function getTickets(){

			$query="SELECT * FROM tickets1";
			$query=$this->db->query($query);
				
			return;
		}

		public function loginUsers($details){

    		$query = $this->db->get_where('users1',array('user_name'=>$details['username'],'password'=>$details['password']));
			//$query="SELECT * FROM users WHERE user_name= '$details[username]' AND phone='$details[phone]' AND vz_id='$details[vz_id]'";
			//print_r($query->num_rows());
			//$query=$this->db->query($query);

			//print_r($query);
			return $query->num_rows();	
		}


		public function createObject($details){

			$query="INSERT INTO tickets1 (name,region,team,question) VALUES ('$details['name']','$details['region']','$details['team']','$details['question']');";
			$query=$this->db->query($query);
				
			return;	
		}

		public function manage($details){

			$query="UPDATE tickets1 SET resolution = details['resolution'], status= $details['status'] WHERE ticket_id=$details['ticket_id'];";
			$query=$this->db->query($query);
				
			return;	
		}

}

?>