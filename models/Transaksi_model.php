<?php

class Transaksi_model extends CI_Model {

	public function cari_barang()
	{
		$data_cart = $this->db->where('tb_barang.nama_barang', $this->input->post('nama_barang'))
							  ->get('tb_barang')
							  ->row();
		if($data_cart != NULL){

			//cek stok
			if($data_cart->stok_barang > 0){
				$cart_array = array(
								'id_cart'		=> $this->session->userdata('username'),
								'id_barang' 	=> $data_cart->id_barang
							);						
				$this->db->insert('tb_cart',$cart_array);

				return TRUE;
			} else {
				return FALSE;
			}
		} else {
			return FALSE;
		}
	}

	public function get_data_barang_by_id($id)
	{
		return $this->db->where('id_barang', $id)
						->get('tb_barang')
						->row();
	}

	public function get_cart()
	{
		return $this->db->join('tb_barang', 'tb_barang.id_barang = tb_cart.id_barang')
					    ->get('tb_cart')
					    ->result();
	}

	public function hapus_item_cart()
	{
		$this->db->where('id', $this->input->post('hapus_id'))
				 ->delete('tb_cart');

		if($this->db->affected_rows() > 0)
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function ubah_jumlah_cart()
	{
		$data = array(
				'jumlah' => $this->input->post('jumlah')
			);

		//cek stok awal dulu untuk memastikan stok lebih dari jumlah yang dibeli
		$stok_awal = $this->get_data_barang_by_id($this->input->post('id_barang'))->stok_barang;
		if($stok_awal >= $this->input->post('jumlah')){
			$this->db->where('id', $this->input->post('id'))
					 ->update('tb_cart', $data);
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_total_belanja()
	{
		return $this->db->select('SUM(tb_barang.harga_barang*tb_cart.jumlah) as total')
						->where('tb_cart.id_cart', $this->session->userdata('username'))
						->join('tb_barang', 'tb_barang.id_barang = tb_cart.id_barang')
						->get('tb_cart')
						->row()->total;
	}

	public function tambah_transaksi()
	{
		$data_transaksi = array(
				'id_kasir'		=> $this->session->userdata('username'),
				'nama_pembeli'	=> $this->input->post('nama_pembeli')
			);
		$this->db->insert('tb_transaksi', $data_transaksi);
		$last_insert_id = $this->db->insert_id();
		//insert detil transksi
		for($i = 0; $i < count($this->get_cart()); $i++)
		{
			$data_detail_transaksi = array(
				'id_transaksi'	=> $last_insert_id,
				'id_barang'		=> $this->input->post('id_barang')[$i],
				'jumlah'		=> $this->input->post('jumlah')[$i]
			);

			//memasukan ke tabel detil transaksi
			$this->db->insert('detail_transaksi', $data_detail_transaksi);

			//mengurangi stok baranhg
			$stok_awal = $this->get_data_barang_by_id($this->input->post('id_barang')[$i])->stok_barang;
			$stok_akhir = $stok_awal-$this->input->post('jumlah')[$i];
			$stok_barang = array('stok_barang' => $stok_akhir);
			$this->db->where('id_barang', $this->input->post('id_barang')[$i])
					 ->update('tb_barang', $stok_barang);

		}


		//mengkosongkan cart berdasarkan kasir yang melakukan transaksi
		$this->db->where('id_cart', $this->session->userdata('username'))
				 ->delete('tb_cart');

		return TRUE;

	}

	public function get_riwayat_transaksi()
	{
		return $this->db->select('tb_transaksi.id_transaksi, tb_transaksi.nama_pembeli, tb_transaksi.id_kasir, tb_transaksi.tgl_beli, (SELECT SUM(detail_transaksi.jumlah*tb_barang.harga_barang) FROM detail_transaksi JOIN tb_barang ON tb_barang.id_barang = detail_transaksi.id_barang WHERE id_transaksi = tb_transaksi.id_transaksi ) as total')
						->join('detail_transaksi','detail_transaksi.id_transaksi = tb_transaksi.id_transaksi')
						->join('tb_barang','tb_barang.id_barang = detail_transaksi.id_barang')
						->group_by('id_transaksi')
						->get('tb_transaksi')
						->result();
	}

	public function get_transaksi_by_id($id)
	{
		return $this->db->select('tb_barang.nama_barang, tb_barang.harga_barang, detail_transaksi.jumlah')
						->where('id_transaksi', $id)
						->join('tb_barang','tb_barang.id_barang = detail_transaksi.id_barang')
						->get('detail_transaksi')
						->result();
	}

}

/* End of file Transaksi_model.php */
/* Location: ./application/models/Transaksi_model.php */