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

    // -------P_users---------------------------

    public function show(){

        $data['result']=$this->P_Users_model->get_users();
        $this->load->view('includes/p_users_view',$data);
    }

   
    public function p_auth(){
        $data = array(
            'u_email' => $this->input->post('u_email'),
            'u_password' => $this->input->post('u_password')
          );
        
         $check=$this->P_Users_model->p_auth($data);
       
         if ($check==null){
            $data['error']='כתובת האימייל או הסיסמה לא נכונים :(  בידקו זאת ונסו שוב.';
            $this->p_login($data['error']);
         }
         else{
           $data['u_email']=$check[0]->u_email;
           $data['loggedin']='1';
           $this->session->set_userdata($data); 
           $this->go_to_home_page();
           
                }

    }

 public function p_login($error=null){
    $data['error']=$error;
    $this->load->view('includes/P_LogIn_view',$data);
}

public function p_login_new_user($msg=null){
    $data['msg']=$msg;
    $this->load->view('includes/P_LogIn_view',$data);
}





public function p_auth_new_user(){
    $data = array(
        'u_email' => $this->input->post('u_email'),
      );
    
     $check=$this->P_Users_model->p_auth_new_user($data);
   
     if ($check){
        $data['error']='כתובת האימייל כבר קיימת במערכת :( <br>  בידקו זאת ונסו שוב.';
        $this->P_register_error($data['error']);
     }
     else{
        //  $data['error']=NULL;
        $data = array(
            'u_full_name' => $this->input->post('u_full_name'),
            'u_phone' => $this->input->post('u_phone'),
            'u_address' => $this->input->post('u_address'), 
            'u_email' => $this->input->post('u_email'),
            'u_password' => $this->input->post('u_password')
          );
         $this-> insert_new_p_user($data);
            }

}

public function P_register_error($error=null){
    $data['error']=$error;
    $this->load->view('includes/P_register_view',$data);
}


public function insert_new_p_user($data){
     $this->P_Users_model->insert_p_user($data);

     $msg = ':) !יצרת משתמש בהצלחה<br>עכשיו רק נשאר להתחבר לצורך השלמת התהליך';
     $this->p_login_new_user($msg);
    }
    


    // מציג את כל בתי העסק בצד הלקוח
    public function go_to_home_page(){
        $p_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
        $data['p_user']=$p_user;// כנל
        $data['result']=$this->P_Users_model->get_B_users();
        $this->load->view('includes/homePage_view',$data);
        }

        //פונציה שמביאה לי את נתוני המשתמש  - - במידה ואפשר לשמור את הנתונים מהסשן אז מיותר
        public function go_to_P_editMyProfile(){
            $data['result']=$this->P_Users_model->get_P_user_data();
            $this->load->view('includes/P_editAccount_view',$data);
            }

        public function go_to_P_appointments(){
            $p_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
            $data['p_user']=$p_user;// כנל
            $p_appointments=$this->P_Users_model->get_P_appointments($p_user);
            $data['result']=$p_appointments;
            $this->load->view('includes/P_myAppointments_view', $data);
        }




    //  --------------- *** b_users *** -----------------------


    


        public function b_auth(){
            $data = array(
                'b_email' => $this->input->post('b_email'),
                'b_password' => $this->input->post('b_password	')
              );
            
             $check=$this->P_Users_model->b_auth($data);
           
             if ($check==null){
                $data['error']='כתובת האימייל או הסיסמה לא נכונים :(  בידקו זאת ונסו שוב.';
                $this->b_login($data['error']);
             }
             else{
               $data['b_email']=$check[0]->b_email;
               $data['loggedin']='1';
               $this->session->set_userdata($data); 
            //    $this->load->view('includes/homePage_view');
               $this->go_to_B_myProfile_view(); 
               
                    }
    
        }
    
     public function b_login($error=null){
        $data['error']=$error;
        $this->load->view('includes/B_LogIn_view',$data);
    }
    
    public function b_login_new_user($msg=null){
        $data['msg']=$msg;
        $this->load->view('includes/B_LogIn_view',$data);
    }
    
    
    
    public function b_auth_new_user(){
        $data = array(
            'b_email' => $this->input->post('b_email'),
          );
        
         $check=$this->P_Users_model->b_auth_new_user($data);
       
         if ($check){
            $data['error']='כתובת האימייל כבר קיימת במערכת :( <br>  בידקו זאת ונסו שוב.';
            $this->B_register_error($data['error']);
         }
         else{
            $data = array(
                'b_email' => $this->input->post('b_email'),
                'b_password' => $this->input->post('b_password'),
                'b_full_name' => $this->input->post('b_full_name'), 
                'b_id' => $this->input->post('b_id'),
                'b_business_name' => $this->input->post('b_business_name'),
                'b_profession' => $this->input->post('b_profession'),
                'b_description' => $this->input->post('b_description'),
                'b_phone1' => $this->input->post('b_phone1'), 
                'b_phone2' => $this->input->post('b_phone2'),
                'b_address' => $this->input->post('b_address'),
                'b_photo' => $this->input->post('b_photo')
              );
             $this-> insert_new_B_user($data);
                }
    
    }
    
    public function B_register_error($error=null){
        $data['error']=$error;
        $this->load->view('includes/B_register_view',$data);
    }
    
    
    public function insert_new_B_user($data){ 
         $this->P_Users_model->insert_B_user($data);
    
         $msg = ':) !יצרת משתמש בית עסק בהצלחה<br>עכשיו רק נשאר להתחבר לצורך השלמת התהליך';
         $this->b_login_new_user($msg);
        }

        
    public function go_to_B_myProfile_view(){
        $this->load->view('includes/B_myProfile_view',$data);
    }
        
    
    
    
    
    
    














// ---------------------------------------------------------------- registrer
// public function register($info=null){
//     $data['info']=$info;
//     $this->load->view('includes/P_register_view',$data);
// }
// public function insert_new_p_user(){
//     //Validations
//     //verify first name
//     $this->form_validation->set_rules('u_full_name', 'First Name', 'required');
//     if ($this->form_validation->run() == FALSE)
//     {
//         $error= ['message'=>'יש להזין שם מלא'];
//          $this->register($error);
//          return;
//     }

//     //verify email is required + valid
//     $this->form_validation->set_rules('u_email', 'Email', 'required|valid_email');
//     if ($this->form_validation->run() == FALSE)
//     {
//         $error= ['message'=>'יש להזין כתובת אימייל תקינה'];
//             $this->register($error);
//             return;
//     }

//     //verify phone number
//     $this->form_validation->set_rules('u_phone', 'phone', 'required');
//     if ($this->form_validation->run() == FALSE)
//     {
//         $error= ['message'=>'יש להזין מספר פלאפון'];
//          $this->register($error);
//          return;
//     }

//     //verify address maximum 30
//     $this->form_validation->set_rules('u_address', 'address', array('required','max_length[30]'));
//     if ($this->form_validation->run() == FALSE)
//     {
//         $error= ['message'=>'יש להזין עיר מגורים'];
//          $this->register($error);
//          return;
//     }

//     //verify that passwords match
//     $this->form_validation->set_rules('u_password', 'Password', 'required');
//     $this->form_validation->set_rules('confirm_u_password', 'Password', 'required|matches[password]');
//     if ($this->form_validation->run() == FALSE)
//     {
//         $error= ['message'=>'Password must match in both fields!'];
//          $this->register($error);
//          return;
//     }

//     $data = array(
//         'u_full_name' => $this->input->post('u_full_name'),
//         'u_phone' => $this->input->post('u_phone'),
//         'u_address' => $this->input->post('u_address'), 
//         'u_email' => $this->input->post('u_email'),
//         'u_password' => $this->input->post('u_password')
//      );
    
//     $error=$this->users_model->save($data);
//     if ($error){
//         $this->register($error);
//     }
//     else{
//         $data['loggedin']='1';
//         $data['message']='User Registered successfuly';
//         $data['code']=1;
//         $this->session->set_userdata($data); 
//         $this->pref();
//     }
// }
// ----------------------------------------------------------------










// -------------------------------------------------

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
