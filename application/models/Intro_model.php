<?php

class intro_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    // businesses functions------------

    // public function get_B_users(){
    //     $query = $this->db->query("SELECT * FROM DB_businesses");
    //     return $query->result();
    // }
    
}
