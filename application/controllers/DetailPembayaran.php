<?php 

class DetailPembayaran extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('detail_pembayaran_model');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pembayaran';
        $data['pembayaran'] = $this->detail_pembayaran_model->getAllPembayaran();

        $this->load->view('templates/header', $data);
        $this->load->view('detail_pembayaran/index', $data);
        $this->load->view('templates/footer');
    }
    
}


?>