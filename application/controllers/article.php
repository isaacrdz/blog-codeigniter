<?php 

/**
* 
*/
class Article extends CI_controller
{
	public function post($id ='')



		{
			$this->load->model('post');
			$row = $this->post-> getPostByName($id);

			$this->load->view('partials/header');

			$data = array('contenido' => $row -> contenido, 'title' => $row -> post );
			$this->load->view('partials/single',$data);

			
		}
	
}

 ?>