<?php

class B_Users extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('B_Users_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        
    }
    // public function show(){

    //     $data['result']=$this->B_Users_model->get_B_users();
    //     $this->load->view('includes/homePage_view',$data);
    // }

?>
