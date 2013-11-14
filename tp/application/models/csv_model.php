<?php

class csv_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function daftarMajalah() {
		$hasil = array();
		$dokumen = file("./data/csv/majalah.csv");

		foreach ($dokumen as $idx => $baris) {
			$pecah = explode(',', $baris);
			$hasil[] = array(
				'id' => str_replace("\r\n", '', $pecah[0]),
				'Nama' => str_replace("\r\n", '', $pecah[1]),
				'Edisi' => str_replace("\r\n", '', $pecah[2]));
		}
	return $hasil;
	}
}