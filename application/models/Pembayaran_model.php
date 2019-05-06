<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_model extends CI_Model {

    public function getJenisPembayaran()
    {
        return $this->db->get('jenis_pembayaran')->result_array();
    }

    public function getDetailTagihan($id)
    {
        $this->db->select('*');
        $this->db->from('jenis_pembayaran AS a'); 
        $this->db->join('penagihan AS b', 'b.id_jenis_pembayaran=a.id_jenis_pembayaran');
        $this->db->where('a.id_jenis_pembayaran', $id);
        $this->db->order_by('b.tanggal','desc');         
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

    public function getDetailTagihanByPenagihan($id)
    {
        $this->db->select('*');
        $this->db->from('jenis_pembayaran AS a'); 
        $this->db->join('penagihan AS b', 'b.id_jenis_pembayaran=a.id_jenis_pembayaran');
        $this->db->where('b.id_penagihan', $id);       
        $query = $this->db->get(); 
        if($query->num_rows() != 0)
        {
            return $query->row_array();
        }
        else
        {
            return false;
        }
    }

    public function tambahDataDispen()
    {
        $data = [
            "id_penagihan" => $this->input->post('id_penagihan', true),
            "nis" => $this->input->post('nis', true),
            "nama_jenis_pembayaran" => $this->input->post('nama_jenis_pembayaran', true),
            "tanggal_dispen" => $this->input->post('tanggal_dispen', true)
        ];

        $this->db->insert('dispen', $data);
    }
}

?>