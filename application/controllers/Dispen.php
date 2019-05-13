<?php 

class Dispen extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dispen_model');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Dispen';
        $data['dispen'] = $this->Dispen_model->getAllDispen();

        $this->load->view('templates/header', $data);
        $this->load->view('dispen/index', $data);
        $this->load->view('templates/footer');
    }
    
}


?>