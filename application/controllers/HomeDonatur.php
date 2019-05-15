<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeDonatur extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
    $this->load->model('Donatur_model');
    }
    
    public function index()
    {
        $data['judul'] = 'Detail Donasi';
        $data['detail'] = $this->Donatur_model->getAllDonasi();

        $this->load->view('home_donatur/templates/header', $data);
        $this->load->view('donasi/index', $data);
        $this->load->view('home_donatur/templates/footer');
    }

    public function donasi()
    {
        $data['judul'] = 'Tambah Pembayaran Donasi';
        $data['detail'] = $this->Donatur_model->getAllJenisDonasi();
        $data['donatur'] = $this->Donatur_model->getDonatur();
        
        if(!isset($_POST['tambah'])) {
            $this->load->view('home_donatur/templates/header', $data);
            $this->load->view('donasi/form_donasi', $data);
            $this->load->view('home_donatur/templates/footer');
        } else {
            $this->Donatur_model->tambahDonasi();
            redirect('HomeDonatur');
        }
    }
}

?>