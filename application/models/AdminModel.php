<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

    public function cekLogin($data){
        
        return $this->db->get_where('user', $data)->num_rows();

    }

}
