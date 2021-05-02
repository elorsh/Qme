<?php

class P_Users_model extends CI_Model {
    //put your code here
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function get_users(){
        // $query=$this->db->get('DB_users');
        $query = $this->db->query("SELECT * FROM DB_users");
        return $query->result();
    }

    public function create_p_users($data){

        $this->db->insert('DB_users', $data);

    }

    public function update_p_users($data){
        $this->db->where(['u_email'=> $u_email]);
        $this->db->update('DB_users', $data);

    }





    public function save($data){
        //set flag in order to avoid showing php errors
        $this->db->db_debug = FALSE; 
        $error=null;
        if (!$this->db->insert('DB_users', $data)){
            $error=$this->db->error();
        }
        return $error;
     }

     public function auth($data){
        $query = $this->db->get_where('DB_users', $data);
        return $query->result();
     }

     public function get_stats(){
        $query=$this->db->get('pref');
        return $query->result();
     }

     public function get_consoles(){
        $user=$this->session->all_userdata();
        $query=$this->db->query('SELECT * FROM pref WHERE p_username = "'.$user['username'].'" ');
        return $query->result();
     }
}
