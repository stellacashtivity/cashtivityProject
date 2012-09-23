<?php
	class Login extends CI_Controller{
		public function index()
		{
			if($this->form_validation->run() != true)
			{
				$this->load->view("vlogin");
			}else{
				echo "Your login info is passed!";
			}
		}
	}

?>
