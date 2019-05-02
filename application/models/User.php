<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User extends CI_Model {

	public function login($username,$password)
	 	{
	 		// $this->db->select('id,username,password,level');
	 		// $this->db->from('login_tabel');
	 		// $this->db->where('username',$username);
	 		// $this->db->where('password', $password);
	 		// $query = $this->db->get();
	 		// if($query->num_rows()==1){
	 		// 	return $query->result();
	 		// }else{
	 		// 	return false;
	 		// }
			 
			$this->db->select('*');
			$this->db->from('login_tabel AS a'); 
			$this->db->join('data_santri AS b', 'b.id_login=a.id_login');
			$this->db->where('b.username', $username);
			$this->db->where('b.password', $password);  
			$query = $this->db->get();    
			if($query->num_rows()==1){
				return $query->result();
			}else{
				return false;
			}
	 	}

	public function InsertUser(){
		$data = array(
	 		'username' => $this->input->post('username'),
	 		'password' => md5($this->input->post('password')),
			'level' => $this->input->post('level')
		);
	 	$this->db->insert('tabel_login',$data);
	}

	public function getDataUser()
		{
			$query = $this->db->get("login_tabel");
			return $query->result_array();
		}

}