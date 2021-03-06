<?php

class P_Users_model extends CI_Model {
    //put your code here
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function get_users(){
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




// -------------------------------------------------

    public function insert_p_user($data){
        $this->db->insert('DB_users', $data);
    }

    public function update_p_user($data){ 
        $query = $this->db->query('UPDATE `DB_users` SET `u_full_name`="'.$data['u_full_name'].'",`u_phone`="'.$data['u_phone'].'",`u_address`="'.$data['u_address'].'" WHERE `DB_users`.`u_email` = "'.$data['u_email'].'" '); 
    }

    
    public function update_p_user_password($data){ 
        $query = $this->db->query('UPDATE `DB_users` SET `u_password`="'.$data['u_password'].'" WHERE `DB_users`.`u_email` = "'.$data['u_email'].'" '); 
    }



     public function p_auth($data){
        $query = $this->db->get_where('DB_users', $data);
        return $query->result();
     }


     public function p_auth_new_user($data){
        $query = $this->db->get_where('DB_users',$data);
        return $query->result();
     }


        //פונציה שמביאה לי את נתוני המשתמש הפרטי
     public function get_P_user_data($data){
        $query = $this->db->query('SELECT * FROM `DB_users` WHERE `u_email` = "'.$data['u_email'].'" ');
        return $query->result();
     }


     public function get_P_appointments($data){
        $query = $this->db->query('SELECT * FROM `DB_B_Appointments` INNER JOIN DB_businesses  ON DB_B_Appointments.b_email = DB_businesses.b_email WHERE `u_email` = "'.$data['u_email'].'" ');
        return $query->result();
     }



     public function P_get_businessHistory($data){ 

        $query = $this->db->query('SELECT * FROM `DB_B_Appointments` INNER JOIN DB_businesses  ON DB_B_Appointments.b_email = DB_businesses.b_email WHERE `u_email` = "'.$data['u_email'].'" ');
        return $query->result();

    }

    public function P_get_B_info_and_new_appointments($data){
        $query = $this->db->query('SELECT * FROM `DB_B_Appointments` INNER JOIN DB_businesses  ON DB_B_Appointments.b_email = DB_businesses.b_email WHERE DB_B_Appointments.b_email = "'.$data['b_email'].'" AND `u_email` is NULL ');
        return $query->result();
     }

     public function P_create_appointment($data){
        $query = $this->db->query('UPDATE `DB_B_Appointments` SET `u_email` = "'.$data['u_email'].'" WHERE `DB_B_Appointments`.`b_email` = "'.$data['b_email'].'" AND `DB_B_Appointments`.`a_date` = "'.$data['a_date'].'" AND `DB_B_Appointments`.`a_time` = "'.$data['a_time'].'" ');
     }

     public function P_cancel_appointment($data){
        $query = $this->db->query('UPDATE `DB_B_Appointments` SET `u_email` = NULL WHERE `DB_B_Appointments`.`b_email` = "'.$data['b_email'].'" AND `DB_B_Appointments`.`a_date` = "'.$data['a_date'].'" AND `DB_B_Appointments`.`a_time` = "'.$data['a_time'].'" ');
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

     public function update_b_user($data){ 
        $query = $this->db->query('UPDATE `DB_businesses` SET `b_full_name`="'.$data['b_full_name'].'",`b_id`="'.$data['b_id'].'",`b_business_name`="'.$data['b_business_name'].'",`b_profession`="'.$data['b_profession'].'",`b_description`="'.$data['b_description'].'",`b_phone1`="'.$data['b_phone1'].'",`b_phone2`="'.$data['b_phone2'].'",`b_address`="'.$data['b_address'].'" WHERE `DB_businesses`.`b_email` = "'.$data['b_email'].'" '); 
    }

    
    public function update_b_user_password($data){ 
        $query = $this->db->query('UPDATE `DB_businesses` SET `b_password`="'.$data['b_password'].'" WHERE `DB_businesses`.`b_email` = "'.$data['b_email'].'" '); 
    }
     

     public function get_B_appointments($data){
        $query = $this->db->query('SELECT * FROM `DB_B_Appointments` INNER JOIN DB_users  ON DB_B_Appointments.u_email = DB_users.u_email WHERE `b_email` = "'.$data['b_email'].'" ');
         return $query->result();
     }


     public function get_B_new_appointments($data){
        $query = $this->db->query('SELECT * FROM `DB_B_Appointments` WHERE `b_email` = "'.$data['b_email'].'" AND `u_email` is NULL ');
        return $query->result();
     }

     public function get_B_all_appointments($data){
        $query = $this->db->query('SELECT * FROM `DB_B_Appointments` WHERE `b_email` = "'.$data['b_email'].'" ');
        return $query->result();
     }



     public function B_get_appointment_time($appointmentData){
        $query = $this->db->query('SELECT * FROM `DB_B_Appointments` WHERE `DB_B_Appointments`.`b_email` = "'.$appointmentData['b_email'].'" AND `DB_B_Appointments`.`a_date` = "'.$appointmentData['a_date'].'" ');
         return $query->result();
     }

     public function b_appointment_auth($data){
        $query = $this->db->get_where('DB_B_Appointments', $data);
        return $query->result();
     }

     public function B_create_appointment($appointmentData){

        $this->db->insert('DB_B_Appointments', $appointmentData);
     }

     public function B_delete_appointment($appointmentData){ 

        $this->db->query('DELETE FROM `DB_B_Appointments` WHERE `DB_B_Appointments`.`b_email` = "'.$appointmentData['b_email'].'" AND `DB_B_Appointments`.`a_date` = "'.$appointmentData['a_date'].'" AND `DB_B_Appointments`.`a_time` = "'.$appointmentData['a_time'].'" ');

    }



    public function B_get_myCustomers($data){ 

        $query = $this->db->query('SELECT * FROM `DB_B_Appointments` INNER JOIN DB_users  ON DB_B_Appointments.u_email = DB_users.u_email WHERE `b_email` = "'.$data['b_email'].'" ');
        return $query->result();

    }


     public function get_b_user_data($data){
        $query = $this->db->query('SELECT * FROM `DB_businesses` WHERE `b_email` = "'.$data['b_email'].'"');
        return $query->result();
     }
     
}
