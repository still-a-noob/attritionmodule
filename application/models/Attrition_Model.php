<?php

	class Attrition_Model extends CI_Model {

		// for Attrition Record
		public function get_info() {
			return $users = $this->db->get("attritionv2")->result_array();
		}

		// for Resigned Employees

		public function get_res() {
			return $users = $this->db->get("resigned")->result_array();
		}

		public function get_join() {
			return $users = $this->db->get("joined")->result_array();
		}

		public function get_sum() {
			$sql = "SELECT sum(openingheadcount) as open FROM attritionv2";
			$result = $this->db->query($sql);
			return $result->row()->open;
		}

		public function get_total() {
			$sql = "SELECT SUM(openingheadcount) as head, SUM(janr) as janr, SUM(janj) as janj, SUM(febr) as febr, SUM(febj) as febj, SUM(marr) as marr, SUM(marj) as marj, SUM(aprr) as aprr, SUM(aprj) as aprj, SUM(mayr) as mayr, SUM(mayj) as mayj, SUM(junr) as junr, SUM(junj) as junj, SUM(julr) as julr, SUM(julj) as julj, SUM(augr) as augr, SUM(augj) as augj, SUM(sepr) as sepr, SUM(sepj) as sepj, SUM(octr) as octr, SUM(octj) as octj, SUM(novr) as novr, SUM(novj) as novj, SUM(decr) as decr, SUM(decj) as decj FROM attritionv2";
			$query = $this->db->query($sql);
			return $query->result();
		}

	}
?>