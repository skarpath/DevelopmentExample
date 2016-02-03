<?php
class user_model extends CI_Controller{
	
	
	//Get users
	public function get_users(){
		
		//To get EVERYTHING
		//	$query = $this->db->get('users');
		//return $query->result;
	
		//To be able to run all queries
		$query = $this->db->query("SELECT * FROM users");
		return $query->num_rows(); //Instead of row you can go getfields in where the number of fields will be displayed
		
		/*
		 * Manual way of loading database info into code ingiter
		 * $config['hostname'] = "localhost";
		 * $config['username'] = "root";
		 * $config['password'] = "";
		 * $config['database'] = "errand_db";
		 * 
		 * $connection = $this->load->database(#config);
		 * 
		 * DO THIS AGAIN for new another connection
		 * or use autoload for database in conf/database.php
		 */		
	}
	
	
	
	
}


?>