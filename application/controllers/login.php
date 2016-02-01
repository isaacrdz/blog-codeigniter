<?php 

/**
* 
*/
class Login extends CI_Controller
{
	public function index()
	{
		$email    = $this->input->post('email');
		$password =  $this->input->post('password');

		$this->load->model('user');
		$fila = $this->user->getUSer($email);

		if ($fila != null) {
			if ($fila->password == $password) {
				$data = array(
					'email'    => $email , 
					'id' 	   => $fila->id,
					'login' => true
				);

				$this->session->set_userdata($data);
			} else {

				header("Location: " . base_url());

			}
		} else {
				header("Location: " . base_url());


		}
	}
	public function logout()

		{
			$this->session->sess_destroy();
			header("Location: " . base_url());

		}
}

 ?>