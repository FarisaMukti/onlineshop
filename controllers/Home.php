<?php
class Home extends CI_Controller{

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model');
	}
    public function index()
	{
		if($this->session->userdata('login_status') == TRUE){

			$data['content_view'] = 'Dashboard_view';
			$data['jumlah'] = $this->Dashboard_model->get_jml_barang();
			$data['jml_transaksi'] = $this->Dashboard_model->get_jml_transaksi();
			$data['jml_pengguna'] = $this->Dashboard_model->get_jml_pengguna();
			$this->load->view('template', $data);

		} else {
			redirect('login/index');
		}
	}
}