<?php 

class Donatur_model extends CI_Model {
    
    // public function getNamaJenisPembayaran()
    // {
    //     return $this->db->get('jenis_pembayaran')->result_array();
        
    // }
    
    public function tambahDataDonatur()
    {
        $data = [
            "nis" => $this->input->post('nis', true),
            "id_login" => $this->input->post('id_login', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "no_hp" => $this->input->post('no_hp', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "no_rekening" => $this->input->post('no_rekening', true)
        ];

        $this->db->insert('data_santri', $data);
        
    }

    public function tambahDonasi()
    {
        $data = [
            "nis" => $this->input->post('nis', true),
            "nama_jenis_donasi" => $this->input->post('nama_jenis_donasi', true),
            "no_rekening" => $this->input->post('no_rekening', true),
            "nominal" => $this->input->post('nominal', true)
        ];

        $this->db->insert('donasi', $data);
    }

    public function getAllDonasi()
    {
        // return $this->db->get('donasi')->result_array();
        $this->db->select('*');
        $this->db->from('donasi AS a'); 
        $this->db->join('data_santri AS b', 'b.nis=a.nis');   
        $query = $this->db->get(); 
        if($query->num_rows() != 0)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
    }

    public function getAllJenisDonasi()
    {
        return $this->db->get('jenis_donasi')->result_array();
    }

    public function getDonatur()
    {
        $username = $this->session->userdata('username');
        return $this->db->get_where('data_santri', array('username' => $username))->result_array();
    }
}

?>