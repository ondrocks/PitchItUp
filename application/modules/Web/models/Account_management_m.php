<?php

	class Account_management_m extends CI_Model{

		function __construct(){
			parent::__construct();
		}


		function updateAccount($data){

			$this->db->set('FirstName',$data['firstname']);
			$this->db->set('LastName',$data['lastname']);
			$this->db->set('username',$data['username']);
			$this->db->set('password',$data['password']);
		    $this->db->where('sf_id',$this->session->userdata('userid'));
		    $query = $this->db->update('startup_founder');

		    if($query){
		      return 'True';
		    }else{
		      return 'False';
		    }
		}

	}
?>