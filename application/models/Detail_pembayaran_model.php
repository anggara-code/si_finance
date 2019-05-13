<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_pembayaran_model extends CI_Model {

    public function getAllPembayaran()
    {
        $this->db->select('*');
        $this->db->from('pembayaran AS a'); 
        $this->db->join('penagihan AS b', 'b.id_penagihan=a.id_penagihan');
        $this->db->join('data_santri AS c', 'c.nis=a.nis');
        $this->db->join('jenis_pembayaran AS d', 'd.id_jenis_pembayaran=b.id_jenis_pembayaran');
        // $this->db->order_by('b.tanggal','desc');         
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

}
?>