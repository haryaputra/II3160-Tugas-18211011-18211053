<?php

class sql_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function dataBuku() {
		$query = $this->db->query("SELECT * FROM buku");
		return $query -> result_array();
	}
}