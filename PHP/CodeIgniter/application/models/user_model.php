<?php
class user_model extends CI_Controller{
	
	
	//Get users
	public function get_users(){
		
		//To get EVERYTHING
		//	$query = $this->db->get('users');
		//return $query->result;
	
		//To be able to run all queries
		$query = $this->db->query("SELECT * FROM users");
		
		
		return $query->num_rows(); //Shows row count
		//return $query->num_fields(); shows colum count;
		
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
	
	public function get_users_by_id($user_id){
		
		//Method 2
		$this->db->where('id',$user_id);
		
		//$this->db->where('id',$user_id); //MORE Conditions
		
		
		//$this->db->where('id',$user_id); //METHOD 1
		$query = $this->db->get('users');		
	
		
		return $query->result();
		 
		
	}
	
	public function update_user($data,$id){
		
		//Insert
		$this->db->where('id', $id);
		$this->db->insert('users', $data);
		
	}
	
	public function delete($id){
		
		//Insert
		
		$this->db->delete('id', $id);
	
		
	}
	
	
	
}


?>