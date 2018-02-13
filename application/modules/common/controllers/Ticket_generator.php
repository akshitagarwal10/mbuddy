<?php

class Ticket_generator extends MX_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("ticket_generator_model");
	}

	public function generate_ticket($key){
			return $this->ticket_generator_model->getID($key);
		}
		
}



  ?>