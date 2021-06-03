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

// --------------------------------------------------------------------------------------
//  -------------------------------*** P_users *** --------------------------------------
// --------------------------------------------------------------------------------------
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

    // עדכון משתמש קיים
    public function P_update_user(){
        $p_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
        // $data['p_user']=$p_user;// כנל


        $data = array(
            'u_email' => $p_user['u_email'],
            'u_full_name' => $this->input->post('u_full_name'),
            'u_phone' => $this->input->post('u_phone'),
            'u_address' => $this->input->post('u_address')

            // 'u_password' => $this->input->post('u_password')
          );
        $this->P_Users_model->update_p_user($data);
   
        $msg = ':) עידכנת את הפרטים בהצלחה';
        $data['msg']=$msg;
        $this->go_to_P_myProfile();
        $data['msg']=null;

       }
    

public function p_logout(){
    $data = array(
        'u_email',
        'u_password',
        'loggedin'
        );
    $this->session->unset_userdata($data);
    $this->load->view('includes/P_LogIn_view');
    }
    public function P_create_appointment(){
        $p_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
        $data['p_user']=$p_user;// כנל

        $appointmentData = array(
            'u_email' => $p_user['u_email'],
            'b_email' => $this->input->post('b_email'),
            'a_date' => $this->input->post('a_date'),
            'a_time' => $this->input->post('a_time')
              );
        $this->P_Users_model->P_create_appointment($appointmentData);
        $msg = 'התור נשמר בהצלחה! :)';

        $this->go_to_P_appointments($msg);
    }

    public function P_cancel_appointment(){
        $p_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
        $data['p_user']=$p_user;// כנל

        $appointmentData = array(
            'u_email' => $p_user['u_email'],
            'b_email' => $this->input->post('b_email'),
            'a_date' => $this->input->post('a_date'),
            'a_time' => $this->input->post('a_time')
              );
        $this->P_Users_model->P_cancel_appointment($appointmentData);
        $msg = 'התור בוטל בהצלחה!';

        $this->go_to_P_appointments($msg);   
     }


        
//  -----------------P-go_to----------------------

public function go_to_p_login(){
    $this->load->view('includes/P_LogIn_view');
    }
public function go_to_p_register(){
    $this->load->view('includes/P_register_view');
    }


    // מציג את כל בתי העסק בצד הלקוח
    public function go_to_home_page(){
        $p_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
        $data['p_user']=$p_user;// כנל

        $data['result']=$this->P_Users_model->get_B_users();

        $this->load->view('includes/homePage_view',$data);
        }

        public function go_to_P_myProfile(){
            $p_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
            $data['p_user']=$p_user;// כנל

            $this->load->view('includes/P_myProfile_view',$data);
        }

        public function go_to_P_cancel_appointment(){
            $p_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
            $data['p_user']=$p_user;// כנל

            $this->load->view('includes/P_cancelAppointment_view',$data);
        }
        public function go_to_p_change_password(){
            $p_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
            $data['p_user']=$p_user;// כנל
            $p_user_data=$this->P_Users_model->get_P_user_data($p_user);
    
            $data['result']=$p_user_data;
            $this->load->view('includes/P_changePassword_view',$data);
        }
      
        public function go_to_P_appointments($msg = null){
            $p_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
            $data['p_user']=$p_user;// כנל
            $data['msg'] = $msg;
            $p_appointments=$this->P_Users_model->get_P_appointments($p_user);

            $data['result']=$p_appointments;
            $this->load->view('includes/P_myAppointments_view', $data);
        }



        public function go_to_P_editMyProfile(){
            $p_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
            $data['p_user']=$p_user;// כנל

            $p_user_data=$this->P_Users_model->get_P_user_data($p_user);
    
            $data['result']=$p_user_data;
            $this->load->view('includes/P_editAccount_view',$data);
            }
            

            public function go_to_P_businessHistory(){
                $p_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
                $data['p_user']=$p_user;// כנל
            
                $p_businessHistory=$this->P_Users_model->P_get_businessHistory($p_user);
            
                $data['result']=$p_businessHistory;
            
                $this->load->view('includes/P_businessHistory_view',$data);
            }

            public function go_to_P_create_appointment(){
                $p_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
                $data['p_user']=$p_user;// כנל
                
                $b_user = array(
                    'b_email' => $this->input->post('b_email')
                );
                $b_new_appointments=$this->P_Users_model->P_get_B_info_and_new_appointments($b_user);
            
            
                $data['result']=$b_new_appointments;
            
            
                $this->load->view('includes/P_createAppointment_view',$data);
            }         



// --------------------------------------------------------------------------------------
//  -------------------------------*** B_users *** --------------------------------------
// --------------------------------------------------------------------------------------


        public function b_auth(){
            $data = array(
                'b_email' => $this->input->post('b_email'),
                'b_password' => $this->input->post('b_password')
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

    
        
    
    
    
    
    
    public function b_logout(){
        $data = array(
            'b_email',
            'b_password',
            'loggedin'
          );
        $this->session->unset_userdata($data);
        $this->load->view('includes/B_LogIn_view');
        }


        public function b_get_user_data($data){
        $data =  $this->P_Users_model->b_get_user_data($data);
        return $data;
        }






        public function B_create_appointment(){
            $b_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
            $data['b_user']=$b_user;// כנל
  
            $appointmentData = array(
                'b_email' => $b_user['b_email'],
                'a_date' => $this->input->post('a_date'),
                'a_time' => $this->input->post('a_time')
                  );
                
                 $check=$this->P_Users_model->b_appointment_auth($appointmentData);
               
                 if ($check){
                    $error='פגישה זו כבר קיימת. בידקו זאת ונסו שוב.';
                    $this->go_to_b_create_appointment($error);
                 }
                 else{
                    $this->P_Users_model->B_create_appointment($appointmentData);
                    $this->go_to_b_appointments();
                   
                        }



           }



        //    public function B_create_appointment(){
        //     $b_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
        //     $data['b_user']=$b_user;// כנל
  
        //     $appointmentData = array(
        //         'b_email' => $b_user['b_email'],
        //         'a_date' => $this->input->post('a_date'),
        //         'a_time' => $this->input->post('a_time')
        //           );
        //     $this->P_Users_model->B_create_appointment($appointmentData);

        //     $this->go_to_b_appointments();
        //    }



           public function B_get_appointment_time($appointmentData){ 

            $appointmentTime = $this->P_Users_model->B_get_appointment_time($appointmentData);
            return $appointmentTime;      
           }



           public function B_delete_appointment(){ 
            $b_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
            $data['b_user']=$b_user;// כנל
  
            $appointmentData = array(
                'b_email' => $this->input->post('b_email'),
                'a_date' => $this->input->post('a_date'),
                'a_time' => $this->input->post('a_time')
                  );
            
            $this->P_Users_model->B_delete_appointment($appointmentData);
            $this->go_to_b_appointments();
           }




       

//  -----------------B-go_to----------------------

public function go_to_b_login(){
    $this->load->view('includes/B_LogIn_view');
    }
public function go_to_b_register(){
    $this->load->view('includes/B_register_view');
    }

public function go_to_B_myProfile_view(){
    $b_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
    $data['b_user']=$b_user;// כנל
    // $user_data=$this->b_get_user_data($b_user); // פונקציה שאמורה למשוך את שם המשתמש של הבית עסק מהדב
   // $data['b_business_name']=$user_data['b_business_name']; // לנסות להבין למה הוא לא מצליח למשוך את השם בית עסק
    $this->load->view('includes/B_myProfile_view',$data);
}

public function go_to_b_appointments(){
    $b_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
    $data['b_user']=$b_user;// כנל

    $b_appointments=$this->P_Users_model->get_B_appointments($b_user);
    $b_new_appointments=$this->P_Users_model->get_B_new_appointments($b_user);
    $b_all_appointments=$this->P_Users_model->get_B_all_appointments($b_user);


    $data['result']=$b_appointments;
    $data['result_new']=$b_new_appointments;
    $data['result_all']=$b_all_appointments;


    $this->load->view('includes/B_myAppointments_view',$data);
}



public function go_to_b_myCustomers(){
    $b_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
    $data['b_user']=$b_user;// כנל

    $b_myCustomers=$this->P_Users_model->B_get_myCustomers($b_user);


    $data['result']=$b_myCustomers;

    $this->load->view('includes/B_myCustomers_view',$data);
}


public function go_to_b_myProfile(){
    $b_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
    $data['b_user']=$b_user;// כנל

    $this->load->view('includes/B_myProfile_view',$data);
}
public function go_to_b_create_appointment($error=null){
    $b_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
    $data['b_user']=$b_user;// כנל

    $data['error']=$error;
    $this->load->view('includes/B_createAppointment_view',$data);
}
public function go_to_b_cancelAppointment(){                      
    $b_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
    $data['b_user']=$b_user;// כנל

    $a_date=$this->input->post('a_date');
    $data['a_date']=$a_date;

    $appointmentData = array(
        'b_email' => $b_user['b_email'],
        'a_date' => $a_date
          );

    $data['result_time']= $this->B_get_appointment_time($appointmentData);      

    $this->load->view('includes/B_cancelAppointment_view',$data);
}

public function go_to_b_change_password(){
    $b_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
    $data['b_user']=$b_user;// כנל

    $this->load->view('includes/B_changePassword_view',$data);
}

public function go_to_b_myDetails(){
    $b_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
    $data['b_user']=$b_user;// כנל

    $this->load->view('includes/B_editAccount_view',$data);
}

public function go_to_private_account(){
    $b_user=$this->session->all_userdata(); // לשים בכל פונקציה בקנטרולר כדי להעביר מידע על הסשן
    $data['b_user']=$b_user;// כנל

    $this->load->view('includes/P_LogIn_view',$data);
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


}
