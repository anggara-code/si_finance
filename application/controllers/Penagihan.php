<?php 

class Penagihan extends CI_controller 
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penagihan_model');
    }
    
    public function index()
    {
        $data['judul'] = 'Form Penagihan';
        $data['nama_jenis_pembayaran'] = $this->Penagihan_model->getNamaJenisPembayaran();

        if(!isset($_POST['tambah'])) {
            $this->load->view('templates/header', $data);
            $this->load->view('penagihan/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penagihan_model->tambahDataPenagihan();
            redirect('penagihan');
        }
    }
}


?>