<?php

	class recordcontrol extends CI_Controller {

		// for displaying attrition record
		public function display() {

		// for department employees
		$data_user = callAPI('GET',base_url('Recordapi/index'),0);
          $result['data']=json_decode($data_user); 

        // for grand total
         $total_sum = callAPI('GET',base_url('Recordapi/total'),0);
          $result['total'] = json_decode($total_sum);

			$this->load->view('record',$result);
		}

		// for displaying resigned employees
		public function resigned() {

			$data_user = callAPI('GET', base_url('Recordapi/resigned'),0);
			$result['data']=json_decode($data_user);

			$this->load->view('resigned', $result);
		}

		// for displaying joined employees
		public function joined() {
			$data_user = callAPI('GET', base_url('Recordapi/joined'),0);
			$result['data']=json_decode($data_user);

			$this->load->view('joined', $result);
		}
	}

?>