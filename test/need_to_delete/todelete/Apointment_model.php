<?php

class Apointment_model extends CI_Model {
    //put your code here
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

}
