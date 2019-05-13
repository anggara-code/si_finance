<?php 

class Donatur extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Donatur_model');
    }
    
    public function index()
    {   
        $this->load->view('register_donatur');

        if(isset($_POST['tambah'])) {
            $this->Donatur_model->tambahDataDonatur();
            redirect('Login');
        }
    }
}

?>