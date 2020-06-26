<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function get_jml_barang(){
		return $this->db->select('count(*) as jumlah')
					    ->get('tb_barang')
					    ->row();
	}

	public function get_jml_transaksi(){
		return $this->db->select('count(*) as jml_transaksi')
					    ->get('tb_transaksi')
					    ->row();
	}

	public function get_jml_pengguna(){
		return $this->db->select('count(*) as jml_pengguna')
					    ->get('tb_user')
					    ->row();
	}

}