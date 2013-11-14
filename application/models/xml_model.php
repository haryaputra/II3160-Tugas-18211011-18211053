<?php

class xml_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function daftarKoran() {
		$xml = simplexml_load_file('./data/xml/koran.xml');
		$hasil = array();
		$tmp1 = "";$tmp2 = "";$tmp3 = "";
		foreach ($xml->daftarkoran as $daftarkoran){
			foreach ($daftarkoran->children() as $key => $value) {
			switch($key) {
			case 'id':
				$tmp1 = $value;
				break;
			case 'nama':
				$tmp2 = $value;
				break;
			case 'edisi':
				$tmp3 = $value;
				break;
		}
		}
		$hasil[] = array(
				'id' => str_replace("\r\n", '', $tmp1),
				'Nama' => str_replace("\r\n", '', $tmp2),
				'Edisi' => str_replace("\r\n", '', $tmp3));
	}
		return $hasil;
	}
}