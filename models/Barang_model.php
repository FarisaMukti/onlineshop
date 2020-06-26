<?php

class Barang_model extends CI_Model {

    public function get_barang()
    {
        $arr= $this->db->get('tb_barang')
                       ->result();
        return $arr;
        
        if($query->num_rows() > 0)
        {
            $session = array('username'  =>$username,
                             'password'  =>$password,
                             'login_status'=> TRUE
        );
        $this->session->set_userdata($session);
            return true;
        }
        else
        {
            return false;
        }
    }

    public function add_barang()
    {
		$data = array(
				'kode_barang' 	=> $this->input->post('kode_barang'),
				'nama_barang' 	=> $this->input->post('nama_barang'),
				'stok_barang'	=> $this->input->post('stok_barang'),
				'harga_barang'	=> $this->input->post('harga_barang')
			);

		$this->db->insert('tb_barang', $data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

    function hapus_barang($id) {
        $this->db->where('id_barang', $id)
                 ->delete('tb_barang');

        if($this->db->affected_rows() > 0){
            return TRUE;
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

    public function edit()
    {
        $barang = array(
            'kode_barang'   => $this->input->post('kode_barang_edit'),
            'nama_barang'   => $this->input->post('nama_barang_edit'),
            'stok_barang'   => $this->input->post('stok_barang_edit'),
            'harga_barang'  => $this->input->post('harga_barang_edit')
        );

        $this->db->where('id_barang', $this->input->post('id_barang_edit'))
                 ->update('tb_barang', $barang);

        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}