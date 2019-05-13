<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailDonasi extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Donatur_model');
    }
    
    public function index()
    {
        $data['judul'] = 'Detail Donasi';
        $data['detail'] = $this->Donatur_model->getAllDonasi();

        $this->load->view('templates/header', $data);
        $this->load->view('donasi/index', $data);
        $this->load->view('templates/footer');
    }
}

?>