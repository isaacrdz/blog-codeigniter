<?php 


/**
* 
*/
class login extends CI_Controller
	{
		
		public function index()
			{
				$this->load->library('session');
				$this->session

				$email 		= $this->input->post('email');
				$password 	= $this->input->post('password');

				$this ->load->model('user');
				$fila = $this->user-> getUser($email);

				if ($fila != null) {
					if ($fila->password == $password) {
						$data = array(
							'email' => $email, 
							'id' => $fila->id , 
							'login' => true 
						);
						$this->session->set_userdata($data);
					}else{

						header("Location: " . base_url());

					}
				}else{
						header("Location: " . base_url());


				}
				
				
			}
	}

 ?>