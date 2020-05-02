<?php 
	
	require APPPATH.'libraries/REST_Controller.php';

	class Recordapi extends REST_Controller {

		public function __construct() {
			parent ::__construct();

			$this->load->model(array('Attrition_Model'));
		}

		public function index_get() {

			// $api_key = trim($this->input->post('key'));
			// if(API_KEY != $api_key){
			// 	$this->response(array(
			// 		"status" => 0,
			// 		"message" => "API Key doesn't match",
			// 	), REST_Controller::HTTP_OK);
			// } else {
			$info = $this->Attrition_Model->get_info();

			if(count($info) > 0) {
				$this->response ($info, REST_Controller::HTTP_OK);
			} else {
				$this->response(array(
					"status" => 0,
					"message" => "No user found!!!",
				), REST_Controller::HTTP_NOT_FOUND);
			}
		}
//}
		public function total_get() {
			$total = $this->Attrition_Model->get_total();
			if(count($total) > 0) {
				$this->response ($total, REST_Controller::HTTP_OK);
			} else {
				$this->response(array(
					"status" => 0,
					"message" => "No user found!!!",
				), REST_Controller::HTTP_NOT_FOUND);
			}
		}

		public function resigned_get() {

			$info = $this->Attrition_Model->get_res();

			if(count($info) > 0) {
				$this->response($info, REST_Controller::HTTP_OK);
			} else {
				$this->response(array(
					"status" => 0,
					"message" => "Data not found..."
				), REST_Controller::HTTP_NOT_FOUND);
			}
		}

		public function joined_get() {

			$info = $this->Attrition_Model->get_join(); 

			if(count($info) > 0){
				$this->response($info, REST_Controller::HTTP_OK);
			} else {
				$this->response(array(
					"status" => 0,
					"message" => "Data not found..."
				), REST_Controller::HTTP_NOT_FOUND);
			}
		}
	}

?>