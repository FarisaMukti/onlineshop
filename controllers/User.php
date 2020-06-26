<?php

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('login_status') == TRUE) {
            $data['content_view']="user_view";
			$this->load->model('User_model');
			$data['arr']=$this->User_model->get_user();
			$this->load->view('template', $data, FALSE);
         } else {
             redirect('login');
         }
    }

    public function add_user()
    {
        $this->form_validation->set_rules('email','email','trim|required',
    array('required' => 'Email Harus di isi' ));

    $this->form_validation->set_rules('username','username','trim|required',
    array('required' => 'Username Harus di isi' ));

    $this->form_validation->set_rules('password','password','trim|required',
    array('required' => 'Password harus di isi' ));
    
            if($this->form_validation->run() == TRUE)
            {
                $this->load->model('user_model','us');
                $masuk=$this->us->add_user();

                if($masuk==TRUE){
                $this->session->set_flashdata('pesan', 'sukses masuk');
            
                } else{
                $this->session->set_flashdata('pesan', 'gagal masuk');
            
            }
            redirect(base_url('index.php/user'),'refresh');
        
            }
            else{
                $this->session->set_flashdata('pesan', validation_errors());
                redirect(base_url('index.php/user'),'refresh');
            
        }
    }

    public function hapus()
    {
        if ($this->session->userdata('login_status') == TRUE) {
            $id_user = $this->uri->segment(3);

            if($this->User_model->hapus_user($id_user)){
                $this->session->set_flashdata('pesan', 'Hapus User Berhasil!');
                redirect('user');
            } else {
                $this->session->set_flashdata('pesan', 'Hapus User Gagal!');
                redirect('user');
            }
        } else {
            redirect('login');
        }
    }

    public function json_user_by_id()//untuk ngegate data yang akan diedit,tidak perlu loading dan harus realtime
    {
        if($this->session->userdata('login_status') == TRUE){
            $id_user = $this->uri->segment(3);

            $data = $this->User_model->get_data_user_by_id($id_user);
            echo json_encode($data);
        } else {
            redirect('login');
        }
    }

    public function ubah()
    {
        if($this->session->userdata('login_status') == TRUE)
        {
            
            $this->form_validation->set_rules('email_edit','email','trim|required');
            $this->form_validation->set_rules('username_edit','username','trim|required');
            $this->form_validation->set_rules('password_edit','password','trim|required');
    
            if($this->form_validation->run() == TRUE)
            {

                if($this->User_model->edit() == TRUE)
                {
                    $this->session->set_flashdata('pesan', 'Ubah Barang Berhasil!');
                    redirect('user');
                } else {
                    $this->session->set_flashdata('pesan', 'Ubah Barang Gagal!');
                    redirect('user');
                } 
            }else {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect('user');
            }
        } else {
            redirect('login');
        }      
    }
}