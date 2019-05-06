<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dispen_model extends CI_Model {

    public function getAllDispen()
    {
        return $this->db->get('dispen')->result_array();
    }

}

?>