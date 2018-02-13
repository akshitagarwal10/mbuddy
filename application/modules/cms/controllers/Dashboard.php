 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

	public function __construct(){
		$this->load->model("cms_model");
		$this->load->helper('url');
		$this->load->module('common/ticket_generator');
	}

	public function index(){
		$this->load->view("cms/dashboardPage");
	}

	public function createTag(){
		if(!$this->input->is_ajax_request()){
		   	exit('No direct script access allowed');
		}
		$key = 'tag';
		$tagName 	= $this->input->post('tagName', TRUE);


		if($tagName == null || $tagName == ""){
			echo json_encode("Name field can not be empty");
			return;
		}

		$valueExist = $this->cms_model->checkValueExist($tagName, $key);

		if($valueExist){
			echo json_encode("Tag by this name already exist");
		}
		else{
			$tagID = $this->ticket_generator->generate_ticket($key);
			$data = array(
				'TagID' 		=> $tagID,
				'TagName' 		=> $tagName,
				'TagCreatedBy' 	=> '150'
				);

			$result = $this->cms_model->addLeads($data, $key);

			if($result = true){
				echo json_encode("true");
			}
			else {
				echo json_encode("Error");		
			}
		}

	}

	public function addLeads(){
		if(!$this->input->is_ajax_request()){
		   	exit('No direct script access allowed');
		}
		$input 	= $this->input->post('input', TRUE);
		$key	= $this->input->post('key', TRUE);

		if($input == null || $input == ""){
			echo json_encode("Name field can not be empty");
			return;
		}

		$valueExist = $this->cms_model->checkValueExist($input, $key);

		if($valueExist){
			echo json_encode("Entry by this name already exist");
		}
		else{
			$valueID = $this->ticket_generator->generate_ticket($key);
			$data = array(
				ucfirst($key).'ID' 		=> $valueID,
				ucfirst($key).'Name' 	=> $input,
				);

			$result = $this->cms_model->addLeads($data, $key);

			if($result = true){
				echo json_encode("true");
			}
			else {
				echo json_encode("Error");		
			}
		}

	}

}
?>