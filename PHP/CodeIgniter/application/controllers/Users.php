<?php

class Users extends CI_Controller{
	
    public function showMethod1(){
    	$result=$this->user_model->get_users(); //Call get users
		
		foreach ($result as $object) {
			echo $object->id
			." "
			.$object->username
			." "
			.$object->password."<br>";
		} 
		
	}
	
	public function showMethod2(){
		$result=$this->user_model->get_users(); //Call get users
		
		//Gets database information
		$db_data = $result;
		
		echo $result;
		
		/*
		foreach ($result as $object) {
			$db_data=$db_data. $object->id
			." "
			.$object->username
			." "
			.$object->password."<br>";
		} 
		
		
		//Sends the value of data here
		$data['welcome'] = $db_data;
		
		 * */
		 
		//Load view
		//$this->load->view('user-view', $db_data);
		
		
	}
	
	
	public function index()
	{
		$this->load->view('home_view');
	}	
	
	public function get_users_by_id($user_id)
	{
		
		/*
		$result=$this->user_model->get_users_by_id($user_id); //Call get users
			
		$db_data = "";
			foreach ($result as $object) {
			$db_data=$db_data. $object->id
			." "
			.$object->username
			." "
			.$object->password."<br>";
			}				
			echo $db_data;
		 * 
		 */
			
		
	}	
	
	public function insert()	
	{
		
		$data = array(
              'username' => 'peter',
			  'password' => 'password'
        );
		
		$this->user_model->create_users($data);	
		
	}	
	
	
	public function update()	
	{
		$id = 3;
		$data = array(
              'username' => 'peter',
			  'password' => 'sk'
        );
		
		$this->user_model->update_user($data,$id);	
		
	}	
	
	public function delete()	
	{
		$id = 3;
		
		
		$this->user_model->delete($id);	
		
	}	
	
	
	
}
?>