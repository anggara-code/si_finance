<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Donasi_model');
    }
    

    public function index()
    {
        $data['judul'] = 'Tambah Jenis Donasi';

        if (!isset($_POST['tambah'])) {       
            $this->load->view('templates/header', $data);
            $this->load->view('donasi/form_jenis_donasi');
            $this->load->view('templates/footer');
        } else {
            $this->Donasi_model->tambahDataJenisDonasi();
            redirect('donasi');
        }
    }

}

/* End of file Donasi.php */

?>