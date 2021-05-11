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
    public function go_to_p_login(){
        $this->load->view('includes/P_LogIn_view');
        }
    public function go_to_p_register(){
        $this->load->view('includes/P_register_view');
        }
    public function go_to_b_login(){
        $this->load->view('includes/B_LogIn_view');
        }
    public function go_to_b_register(){
        $this->load->view('includes/B_register_view');
        }
    public function go_to_home_page(){
            $this->load->view('includes/homePage_view');
        }
    public function go_to_b_appointments(){
            $this->load->view('includes/B_myAppointments_view');
        }
     public function go_to_b_myProfile(){
            $this->load->view('includes/B_myProfile_view');
        }
    public function go_to_b_create_appointment(){
            $this->load->view('includes/B_createAppointment_view');
        }
        public function go_to_b_cancel_appointment(){
            $this->load->view('includes/B_cancelAppointment_view');
        }
        
    }

    
