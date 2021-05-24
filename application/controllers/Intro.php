<?php
class Intro extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('intro_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }


    public function index(){
        $this->load->view('includes/landing');
        }

        // b user

//     public function go_to_b_login(){
//         $this->load->view('includes/B_LogIn_view');
//         }
//     public function go_to_b_register(){
//         $this->load->view('includes/B_register_view');
//         }
  
//      public function go_to_b_myProfile(){
//             $this->load->view('includes/B_myProfile_view');
//         }
//     public function go_to_b_create_appointment(){
//             $this->load->view('includes/B_createAppointment_view');
//         }
//     public function go_to_b_cancel_appointment(){
//             $this->load->view('includes/B_cancelAppointment_view');
//         }
//     public function go_to_b_change_password(){
//             $this->load->view('includes/B_changePassword_view');
//         }
//     public function go_to_b_myDetails(){
//             $this->load->view('includes/B_editAccount_view');
//         }
//     public function go_to_b_myCustomers(){
//             $this->load->view('includes/B_myCustomers_view');
//         }
//     public function go_to_private_account(){
//             $this->load->view('includes/P_LogIn_view');
//         }
        
// // private

// public function go_to_p_login(){
//     $this->load->view('includes/P_LogIn_view');
//     }
// public function go_to_p_register(){
//     $this->load->view('includes/P_register_view');
//     }

//     public function go_to_P_myProfile(){
//         $this->load->view('includes/P_myProfile_view');
//     }
//     public function go_to_P_create_appointment(){
//         $this->load->view('includes/P_createAppointment_view');
//     }
//     public function go_to_P_cancel_appointment(){
//         $this->load->view('includes/P_cancelAppointment_view');
//     }
//     public function go_to_p_change_password(){
//         $this->load->view('includes/P_changePassword_view');
//     }


    
  
   

        
        
    }

    
