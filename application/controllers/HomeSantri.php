<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeSantri extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model');
    }
    

    public function index()
    {
        $data['judul'] = 'Data Pembayaran';
        $data['jenis_pembayaran'] = $this->Pembayaran_model->getJenisPembayaran();

        $this->load->view('home_santri/templates/header', $data);
        $this->load->view('pembayaran/index', $data);
        $this->load->view('home_santri/templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Pembayaran';
        $data['detail'] = $this->Pembayaran_model->getDetailTagihan($id);

        $this->load->view('templates/header', $data);
        $this->load->view('pembayaran/detail', $data);
        $this->load->view('templates/footer');
    }

    public function bayar($id)
    {
        $data['judul'] = 'Detail Pembayaran';
        $data['detail'] = $this->Pembayaran_model->getDetailTagihanByPenagihan($id);

        $this->load->view('templates/header', $data);
        $this->load->view('pembayaran/form_pembayaran', $data);
        $this->load->view('templates/footer');
    }
}

?>