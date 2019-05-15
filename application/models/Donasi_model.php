<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi_model extends CI_Model {

    public function tambahDataJenisDonasi()
    {
        $data = [
            "nama_jenis_donasi" => $this->input->post('nama_jenis_donasi', true)
        ];

        $this->db->insert('jenis_donasi', $data);
    }

}

/* End of file Donasi_model.php */

?>