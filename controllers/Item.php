<?php

class item extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('item_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->session->userdata('login_status') == TRUE) {
            $data['content_view']="item_view";
			$this->load->view('template', $data, FALSE);
         } else {
             redirect('login');
         }
    }
}