<?php 

    class Santri extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            
            // load model untuk 1 controller (setiap method)
            $this->load->model('Santri_model');    
        }
        
        public function index()
        {
            // $this->load->database(); load db permethod

            $data['judul'] = 'Daftar Santri';

            // memanggil method
            $data['santri'] = $this->Santri_model->getAllSantri();

            // load view
            $this->load->view('templates/header', $data);
            $this->load->view('santri/index', $data);
            $this->load->view('templates/footer');
        }

        public function tambah()
        {
            if(!isset($_POST['tambah'])){
            $data['judul'] = 'Tambah Data Santri';
            $this->load->view('templates/header', $data);
            $this->load->view('santri/tambah');
            $this->load->view('templates/footer');
            } else {
            $this->Santri_model->tambahDataSantri();
            // $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('santri');
            }
        }
    }

?>