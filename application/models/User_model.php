<?php
class User_model extends CI_model{
	
	function insertData($formArray){
		$this->db->insert("master_table" , $formArray); //seve data for database
	}

	function all(){
		return $master_table = $this->db->get("master_table")->result_array(); // get all records for database
	}

	function getUser($Id){
		$this->db->where('id',$Id);
		return $master = $this->db->get('master_table')->row_array(); // get user from database
	}

	function updateUser($Id ,$formArray){
		$this->db->where('id',$Id);
		$this->db->update('master_table',$formArray); // update user for database
	}

	function deleteUser($Id){
		$this->db->where('id',$Id);
		$this->db->delete('master_table'); // delete user for database
	}



}
?>