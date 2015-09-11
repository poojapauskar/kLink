<?php 

class Hello_model extends CI_Model{

		public function addUsers($details){

			$query="INSERT INTO users1 (username,password) VALUES ('$details[username]','$details[password]')";
			$query=$this->db->query($query);
				
			return;
		}
		
		public function loginUsers($details){

    		$query = $this->db->get_where('users1',array('username'=>$details['username'],'password'=>$details['password']));
			//$query="SELECT * FROM users WHERE user_name= '$details[username]' AND phone='$details[phone]' AND vz_id='$details[vz_id]'";
			//print_r($query->num_rows());
			//$query=$this->db->query($query);

			//print_r($query);
			return $query->num_rows();	
		}
		
		public function createObject($details){

			$query="INSERT INTO tickets1 (name,region,team,query) VALUES ('$details[name]','$details[region]','$details[team]','$details[query]')";
			$query=$this->db->query($query);
				
			return;	
		}
		
		public function getTickets(){

			$query="SELECT * FROM tickets1";
			$query=$this->db->query($query);
				
			return $query;
		}
		
		public function refer($details){

			$query="SELECT * FROM tickets1 WHERE ticket_id=$details[ticket_id]";
			$query=$this->db->query($query);
				
			return $query;	
		}

		
		public function manage($details){

			$query="SELECT * FROM tickets1 WHERE ticket_id=$details[ticket_id]";
			$query=$this->db->query($query);
				
			return $query;	
		}
		
		public function manage1($details){

			$query="UPDATE tickets1 SET resolution = '$details[resolution]', status= '$details[status]' WHERE ticket_id=$details[ticket_id]";
			$query=$this->db->query($query);
				
			return $query;	
		}
		/*public function isAdmin($details){

			$query="SELECT isadmin FROM users1 WHERE username =$details['username'] && password =$details['password']";
			$query=$this->db->query($query);
				
			return;
		}

		
 		*/

}

?>