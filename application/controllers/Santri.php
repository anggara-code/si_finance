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
            
            if(!isset($_POST['cari'])) {
                $data['santri'] = $this->Santri_model->getAllSantri();
                $this->load->view('templates/header', $data);
                $this->load->view('santri/index', $data);
                $this->load->view('templates/footer');
            } else {
                $data['santri'] = $this->Santri_model->cariDataSantri();
                $this->load->view('templates/header', $data);
                $this->load->view('santri/index', $data);
                $this->load->view('templates/footer');
            }

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

        public function hapus($nis)
        {
            $this->Santri_model->hapusDataSantri($nis);
            redirect('santri');
        }

        public function detail($nis)
        {
            $data['judul'] = 'Detail Santri';

            $data['santri'] = $this->Santri_model->getSantriById($nis);

            $this->load->view('templates/header', $data);
            $this->load->view('santri/detail', $data);
            $this->load->view('templates/footer');
        }

        public function ubah($nis)
        {
            if(!isset($_POST['ubah'])){
                $data['judul'] = 'Ubah Data Santri';
                $data['santri'] = $this->Santri_model->getSantriById($nis);
                $this->load->view('templates/header', $data);
                $this->load->view('santri/ubah', $data);
                $this->load->view('templates/footer');
            } else {
                $this->Santri_model->ubahDataSantri();
                redirect('santri');
            }
        }
    }

?>