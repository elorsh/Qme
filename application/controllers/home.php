<?php

class Home extends CI_Controller {
  public function __construct(){
    parent::__construct();
    // $this->load->model('P_Users_model');
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('session');
    
}

    public function index(){

      $data['main_view'] = "home_view";

      $this->load->view('home_view', $data);
    }
}



?>