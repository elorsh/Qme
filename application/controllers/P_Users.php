<?php

class P_Users extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('P_Users_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        
    }
    public function show(){
       // $this->load->model('P_Users_model');
        // $result= $this->P_Users_model->get_users();
        $data['result']=$this->P_Users_model->get_users();
        $this->load->view('includes/p_users_view',$data);




        // foreach ($result as $object){
        //     echo $object->u_full_name;
        // }

    }
    
    public function get_users(){
        $data['user']=$this->session->all_userdata();
        $this->load->view('templates/headG');
        $this->load->view('templates/headU');
        $this->load->view('templates/header');
        $data['DB_users']=$this->P_users_model->get_users();
        $this->load->view('users/users',$data);
        $this->load->view('templates/footer');
    }
    public function add_user($error=null){
        $this->load->view('templates/headG');
        $data['error']=$error;
        $this->load->view('users/register',$data);
        $this->load->view('templates/footer');
        
    }
    public function save_user(){
        //validation using code igniter functions
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $error=['message'=>'First Name is required'];
            $this->register($error);
            return;
        }

        $this->form_validation->set_rules('username', 'username', 'required|max_length[20]');
        if ($this->form_validation->run() == FALSE)
        {
                $error= ['message'=>'Username can not be more than 15 charachters'];
             $this->register ($error);
             return;
        }
  
        //validations using code igniter filters
        $data = array(
               'username' => $this->input->post('username'),
               'password' => $this->input->post('password')
         );
        
        $error=$this->users_model->save($data);
        if ($error)
            $this->register($error);
        else{
            $data['loggedin']='1';
            $this->session->set_userdata($data); 
            $this->get_users();
        }
    }
    public function login($error=null){
        $this->load->view('templates/HeadL');
        $data['error']=$error;
        $this->load->view('users/login',$data);
        $this->load->view('templates/footer');

    }
      public function logout()
       {
            $data = array(
            'user',
            'password' ,
            'loggedin'  
            );
            $this->session->unset_userdata($data);
            $this->login();   
                         
       }
     public function auth(){
           $data = array(
               'username' => $this->input->post('username'),
               'password' => md5($this->input->post('password'))
             );
           
            $check=$this->users_model->auth($data);
          
            if ($check==null){
               $data['error']='Wrong username or Password. Please try again.';
               $this->login($data);
            }
            else{
              $data['username']=$check[0]->username;
              $data['loggedin']='1';
              $this->session->set_userdata($data); 
              redirect("Intro");
            }
   
    }
    public function register($info=null){
        $data['info']=$info;
        $this->load->view('templates/HeadL');
        $this->load->view('users/register',$data);
        $this->load->view('templates/footer');
    }
    public function save_register(){
        //Validations
        //verify first name
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $error= ['message'=>'First Name is a required field'];
             $this->register($error);
             return;
        }

        //verify last name
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $error= ['message'=>'Last Name is a required field'];
             $this->register($error);
             return;
        }

        //verify username + minimum 3 characters + maximum 15
        $this->form_validation->set_rules('username', 'Username', array('required', 'min_length[3]','max_length[15]'));
        if ($this->form_validation->run() == FALSE)
        {
            $error= ['message'=>'Username is a required field, must be 3-15 characters long!'];
             $this->register($error);
             return;
        }

        //verify email is required + valid
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == FALSE)
        {
            $error= ['message'=>'Must enter a unique, valid Email address'];
             $this->register($error);
             return;
        }

        //verify that passwords match
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmPassword', 'Password', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE)
        {
            $error= ['message'=>'Password must match in both fields!'];
             $this->register($error);
             return;
        }

        $data = array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'email' => $this->input->post('email'), 
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
         );
        
        $error=$this->users_model->save($data);
        if ($error){
            $this->register($error);
        }
        else{
            $data['loggedin']='1';
            $data['message']='User Registered successfuly';
            $data['code']=1;
            $this->session->set_userdata($data); 
            $this->pref();
        }
    }

    public function pref(){
        $this->load->view('templates/HeadL');
        $this->load->view('users/Pref');
        $this->load->view('templates/footer');
    }


    public function save_pref(){
        $data = array(
            'p_username'=>$this->input->post('p_username'),
            'pc'=>$this->input->post('pc'),
            'ps'=>$this->input->post('ps'),
            'xbox'=>$this->input->post('xbox'),
            'genre'=>$this->input->post('genre')
        );
        $this->db->insert('pref',$data);
        $this->load->view('templates/headG');
        $this->load->view('HomePage/Homescreen');
        $this->load->view('templates/footer');
    }

    public function get_stats(){
        $data['prefs']=$this->users_model->get_stats();
        $data['consoles']=$this->users_model->get_consoles();
        $this->load->view('templates/headG');
        $this->load->view('users/Stats',$data);
        $this->load->view('templates/footer');
    }


}
