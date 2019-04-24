<?php 

class Penagihan_model extends CI_Model {
    
    public function tambahDataPenagihan()
    {
        $data = [
            "jenis_pembayaran" => $this->input->post('jenis_pembayaran', true),
            "tanggal" => $this->input->post('tanggal', true),
            "alamat" => $this->input->post('alamat', true),
            "keterangan" => $this->input->post('keterangan', true)
        ];

        $this->db->insert('penagihan', $data);
        
    }
}

?>