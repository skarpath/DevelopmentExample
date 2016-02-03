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
		
		echo $db_data;
		
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
	
	public function CRUD_LESSON()
	{
		$result=$this->user_model->get_users(); //Call get users
		$this->load->view('home_view');
	}	
}
?>