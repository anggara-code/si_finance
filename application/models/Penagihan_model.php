<?php 

class Penagihan_model extends CI_Model {
    
    public function getNamaJenisPembayaran()
    {
        return $this->db->get('jenis_pembayaran')->result_array();
        
    }
    
    public function tambahDataPenagihan()
    {
        $data = [
            "id_penagihan" => $this->input->post('id_penagihan', true),
            "id_jenis_pembayaran" => $this->input->post('jenis_pembayaran', true),
            "tanggal" => $this->input->post('tanggal', true)
        ];

        $this->db->insert('penagihan', $data);
        
    }
}

?>