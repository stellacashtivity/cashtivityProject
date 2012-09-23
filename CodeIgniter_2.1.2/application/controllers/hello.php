<?php  

class Hello extends CI_Controller {
/*
	public function Hello(){
		parent::CI_Controller();
	}

	function you(){
		$this->load->view('you_view');
	}
*/
	var $name;
	var $color;
	

	public function index()
	{
		
		//$this->load->view('you_view');
		$this->name = 'Andi';
		$this->color = 'red';
	}
	
	public function test()
	{
		$this->name = 'Andi';
		$this->color = 'red';
		$data['name'] = $this->name;
		$data['color'] = $this->color;
		$this->load->view('you_view',$data);
	}
}
