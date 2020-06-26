<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_akun');
        $this->load->library('form_validation');
    }
 
     public function index() {
         $this->form_validation->set_rules('username', 'Username','trim|required');
         $this->form_validation->set_rules('email','Email','required|valid_email');
         $this->form_validation->set_rules('password','Password','trim|required');
         $this->form_validation->set_rules('confirm-password','Confirm Password','required|matches[password]');
         if($this->form_validation->run() == FALSE) {
             $this->load->view('v_login');
         }else{
             $data['username'] =    $this->input->post('username');
             $data['email']  =    $this->input->post('email');
             $data['password'] =    md5($this->input->post('password'));
 
             $this->M_akun->daftar($data);
             
             $pesan['message'] =    "Pendaftaran berhasil";
             
             $this->load->view('v_success',$pesan);
         }
     }
 }