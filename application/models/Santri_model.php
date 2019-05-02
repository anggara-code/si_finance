<?php 

class Santri_model extends CI_Model {
    
    public function getAllSantri()
    {
        return $this->db->get('data_santri')->result_array();
    }

    public function tambahDataSantri()
    {
        $data = [
            "nis" => $this->input->post('nis', true),
            "id_login" => $this->input->post('id_login', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "no_hp" => $this->input->post('no_hp', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "angkatan" => $this->input->post('angkatan', true),
            "nama_ayah" => $this->input->post('nama_ayah', true),
            "nama_ibu" => $this->input->post('nama_ibu', true),
            "nama_wali" => $this->input->post('nama_wali', true),
            "alamat_orangtua" => $this->input->post('alamat_orangtua', true),
            "telp_orangtua" => $this->input->post('telp_orangtua', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true)
        ];

        $this->db->insert('data_santri', $data);
        
    }

    public function hapusDataSantri($nis)
    {
        $this->db->where('nis', $nis);
        $this->db->delete('data_santri');
    }

    public function getSantriById($nis)
    {
        return $this->db->get_where('data_santri', ['nis' => $nis])->row_array();
    }

    public function ubahDataSantri()
    {
        $data = [
            "nis" => $this->input->post('nis', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "no_hp" => $this->input->post('no_hp', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "angkatan" => $this->input->post('angkatan', true),
            "nama_ayah" => $this->input->post('nama_ayah', true),
            "nama_ibu" => $this->input->post('nama_ibu', true),
            "nama_wali" => $this->input->post('nama_wali', true),
            "alamat_orangtua" => $this->input->post('alamat_orangtua', true),
            "telp_orangtua" => $this->input->post('telp_orangtua', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true)
        ];

        $this->db->where('nis', $data['nis']);
        $this->db->update('data_santri', $data);
        
    }

    public function cariDataSantri()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        return $this->db->get('data_santri')->result_array();
    }
}

?>