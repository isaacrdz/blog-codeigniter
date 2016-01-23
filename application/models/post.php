<?php 
 /**
 * 
 */
 class Post extends CI_model
 {
 	
 	public function getPost()
	 	{
	 		return $this->load->database();

	 	}

 	public function getPostByName($id = '')
	 	{

	 		$result = $this->db->query(" SELECT * FROM post WHERE id = ' " . $id ." ' LIMIT 1 ");
	 		return $result -> row();
	 	}
	 	
 }

?>