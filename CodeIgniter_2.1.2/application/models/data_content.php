<?php
class Data_content extends CI_Model{
	function add_content($data){
		$this->db->insert('content', $data);
		return;
	}
}

?>
