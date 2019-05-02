<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller {

 	public function index(){
 
 		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
 		
		 $this->load->view('login_view');
 	}

	 function cek_db(){
		 $username = $this->input->post('username');
		 $password = $this->input->post('password');
		 $this->db->from('login_tabel AS a'); 
		 $this->db->join('data_santri AS b', 'b.id_login = a.id_login');
		 $this->db->where('b.username', $username);
		 $this->db->where('b.password', $password);  
		 $query = $this->db->get();
		 if($query->num_rows()>0){
			 $row = $query->row_array();
			 $sess_array = array(
				 'id_login'=> $row['id_login'],
				 'level' => $row['level'],
				 'username'=> $row['username']
				);
				$this->session->set_userdata($sess_array);
				return true;
			}else{
			$this->form_validation->set_message('cekDb',"Login Gagal");
			return false;
			
		}
	}

 	public function cekLogin()
 	{
 		$this->load->library('form_validation');
 		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
 		if (($this->form_validation->run() == FALSE) || ($this->cek_db()==false)) {
 			$this->load->view('login_view');
 		// } else {
 		// 	redirect('Welcome','refresh');
 		// }
 		}else{
			 if ($this->session->userdata('username')) {
				 
				 $session_data = $this->session->userdata();
				 
				if(($session_data['username']=='admin') && ($session_data['level']=='santri')){
					 redirect('Home','refresh');

				}elseif(($session_data['username']) && ($session_data['level']=='santri')){
					redirect('HomeSantri','refresh');
				
				}else{
					redirect('Welcome','refresh');
				}
			}	
 		}
 		
 		
 	}

 	public function Registrasi()
	{
      $this->load->library('form_validation');

 		$this->form_validation->set_rules('username','Username','trim|required');
 		$this->form_validation->set_rules('password','Password','trim|required');
 		$this->form_validation->set_rules('level','Level','trim|required');
 		if ($this->form_validation->run() == FALSE) {
 			$this->load->view('registerasi');
 		} else {
 			$this->load->model('user');
 			$this->user->InsertUser();
 			echo '<script>alert("Anda Berhasil Daftar")</script>';

 			redirect('Login','refresh');
 		}

 	
 	}

 	public function Logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('Login','refresh');
	}
}