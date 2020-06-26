<?php
class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->session->userdata('login_status') == TRUE){
            redirect('home');
        } else {
            $this->load->view('v_login');
        }
    }

    public function forgot_password()
    {
        $email = $this->url->segment(3);
        echo 'Saya lupa password,email saya : '. $email;
    }

    public function act_login()
    {
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[8]');

        if($this->form_validation->run() == TRUE){
            
            if($this->Login_model->user_check() == TRUE)
            {
                redirect('home');
            } else {
                $this->session->set_flashdata('notif','Username dan Password Tidak Benar!!');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('notif',validation_errors());
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}