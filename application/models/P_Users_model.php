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

    public function update_p_users($data,$u_email){
        $this->db->where(['u_email'=> $u_email]);
        $this->db->update('DB_users', $data);

    }

    public function delete_p_users($u_email){
        
        $this->db->where(['u_email'=>$u_email]);
        $this->db->delete('DB_users');

    }


    // public function save($data){
    //     //set flag in order to avoid showing php errors
    //     $this->db->db_debug = FALSE; 
    //     $error=null;
    //     if (!$this->db->insert('DB_users', $data)){
    //         $error=$this->db->error();
    //     }
    //     return $error;
    //  }



// -------------------------------------------------

public function insert_p_user($data){
    $this->db->insert('DB_users', $data);
}

     public function p_auth($data){
        $query = $this->db->get_where('DB_users', $data);
        return $query->result();
     }


     public function p_auth_new_user($data){
        // $query = $this->db->get_where('DB_users',array($data));
        $query = $this->db->get_where('DB_users',$data);
        return $query->result();
     }

        //פונציה שמביאה לי את נתוני המשתמש  - - במידה ואפשר לשמור את הנתונים מהסשן אז מיותר
     public function get_P_user_data($data){
        $query = $this->db->get_where('DB_users',$data);
        return $query->result();
     }

     public function get_P_appointments($data){
         $query = $this->db->get_where('DB_B_Appointments', $data['u_email']);
        return $query->result();
     }




    //  --------------- *** b_users *** -----------------------
    
    public function insert_b_user($data){
        $this->db->insert('DB_businesses', $data);
    }

    public function get_B_users(){
        $query = $this->db->query("SELECT * FROM DB_businesses");
        return $query->result();
    }


    public function b_auth($data){
        $query = $this->db->get_where('DB_businesses', $data);
        return $query->result();
     }


     public function b_auth_new_user($data){
        $query = $this->db->get_where('DB_businesses',$data);
        return $query->result();
     }

}
