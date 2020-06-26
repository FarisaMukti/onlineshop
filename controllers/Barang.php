<?php

class Barang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('login_status') == TRUE) {
            $data['content_view']="barang_view";
			$this->load->model('Barang_model');
			$data['arr']=$this->Barang_model->get_barang();
			$this->load->view('template', $data, FALSE);
         } else {
             redirect('login');
         }
    }

    public function add_barang()
    {
        if($this->session->userdata('login_status') == TRUE){
        $this->form_validation->set_rules('kode_barang','kode_barang','trim|required',
    array('required' => 'Kode Barang Harus di isi' ));

    $this->form_validation->set_rules('nama_barang','nama_barang','trim|required',
    array('required' => 'Nama Barang Harus di isi' ));

    $this->form_validation->set_rules('stok_barang','stok_barang','trim|required',
    array('required' => 'Stok Barang harus di isi' ));

    $this->form_validation->set_rules('harga_barang','harga_barang','trim|required',
    array('required' => 'Harga Barang harus di isi' ));
    
    if($this->form_validation->run() == TRUE)
    {
        $this->load->model('Barang_model','bar');
        $masuk=$this->bar->add_barang();

        if($masuk==TRUE){
        $this->session->set_flashdata('pesan', 'sukses masuk');
    
        } else{
        $this->session->set_flashdata('pesan', 'gagal masuk');
    
    }
    redirect(base_url('index.php/barang'),'refresh');

    }
    else{
        $this->session->set_flashdata('pesan', validation_errors());
        redirect(base_url('index.php/barang'),'refresh');
    
    }
}
    }
    public function hapus(){
        if ($this->session->userdata('login_status') == TRUE) {
            $id_barang = $this->uri->segment(3);

            if($this->Barang_model->hapus_barang($id_barang)){
                $this->session->set_flashdata('pesan', 'Hapus Barang Berhasil!');
                redirect('barang');
            } else {
                $this->session->set_flashdata('pesan', 'Hapus Barang Gagal!');
                redirect('barang');
            }
        } else {
            redirect('login');
        }
    }

    public function json_barang_by_id()
    {
        if($this->session->userdata('login_status') == TRUE){
            $id_barang = $this->uri->segment(3);

            $data = $this->Barang_model->get_data_barang_by_id($id_barang);
            echo json_encode($data);
        } else {
            redirect('login');
        }
    }

    public function ubah()
    {
        if($this->session->userdata('login_status') == TRUE)
        {
            
            $this->form_validation->set_rules('kode_barang_edit','kode_barang','trim|required');
            $this->form_validation->set_rules('nama_barang_edit','nama_barang','trim|required');
            $this->form_validation->set_rules('stok_barang_edit','stok_barang','trim|required');
            $this->form_validation->set_rules('harga_barang_edit','harga_barang','trim|required');
    
            if($this->form_validation->run() == TRUE)
            {

                if($this->Barang_model->edit() == TRUE)
                {
                    $this->session->set_flashdata('pesan', 'Ubah Barang Berhasil!');
                    redirect('barang');
                } else {
                    $this->session->set_flashdata('pesan', 'Ubah Barang Gagal!');
                    redirect('barang');
                } 
            }else {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect('barang');
            }
        } else {
            redirect('login');
        }      
    }
}
