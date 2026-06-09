<?php
class homecontroller extends CI_Controller 
{

    public function index()
    {
        $this->load->view('template/login'); 
        $this->load->view('templatereporter/login');  
    }


    public function checklogin()
    {
        $email=$this->input->post('Aemail');
        $password=$this->input->post('password');

        $this->db->where('Aemail',$email);
        $this->db->where('password',$password);
        $admin=$this->db->get('admin_register')->row();

    if($admin)
    {
        // SESSION CREATE
        $this->session->set_userdata([
            'Aid'=>$admin->Aid,
            'Aname'=>$admin->Aname,
            'admin_login'=>true
        ]);

        redirect('homecontroller/dashboard');
    }
    
    else
    {
        redirect('homecontroller');
    }
    
    }

    public function dashboard()
    {
    
    if(!$this->session->userdata('admin_login'))
    {
        redirect('homecontroller');
    }
    
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/dashboard');
    
}
    
public function logout()
{
    $this->session->unset_userdata([
        'Aid',
        'Aname',
        'admin_login'
    ]);

    redirect('homecontroller');
}


// FORGET PASSWORD : forget,reset_password pages

    public function forget()
    {
        $this->load->view('template/forget');
    }

     public function forgetpassword()
    {
        $email = $this->input->post('email');

        $this->db->where('Aemail', $email);
        $admin = $this->db->get('admin_register')->row();

        if ($admin) 
        {
        // ✅ temp session
        $this->session->set_userdata('reset_email', $email);
        redirect('homecontroller/resetpage');
        } 
    else 
        {
        //  error message (flashdata)
        $this->session->set_flashdata(
            'error',
            'This email is not registered with us.'
        );
        $this->session->mark_as_flash('error');
        redirect('homecontroller/forget');
        }
    }

     public function resetpage()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('homecontroller/forget');
        }

        $this->load->view('template/reset_password');
    }

    // ✅ UPDATE PASSWORD
    public function updatepassword()
    {
        $email = $this->session->userdata('reset_email');

        if (!$email) {
            redirect('homecontroller/forget');
        }

        $password  = $this->input->post('password');
        $cpassword = $this->input->post('cpassword');

        if ($password != $cpassword) {
            redirect('homecontroller/resetpage');
        }

        $this->db->where('Aemail', $email);
        $this->db->update('admin_register', [
            'password' => $password
        ]);

        //  TEMP SESSION REMOVE
        $this->session->unset_userdata('reset_email');

        redirect('homecontroller');
    }

     public function __construct()
    {
        parent::__construct();

        // 🔹 manually load
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
    } 
    
    
    //Reporter Login

        public function checkreplogin()
    {
        $email = $this->input->post('remail');
        $password = $this->input->post('rpassword');

        $this->db->where('remail',$email);
        $this->db->where('rpassword',$password);
        $reporter = $this->db->get('reportereg')->row();

 
        if($reporter)
        {
            // set session
           $this->session->set_userdata([
            'repid'=>$reporter->repid,
            'rname'=>$reporter->rname
            ]);
            
            redirect('homecontroller/repdashboard');
        }
        else
        {
            redirect('homecontroller');
        }
            
    }

    // REPORTER DASHBOARD
    public function repdashboard()
    {
        // SESSION CHECK
        if(!$this->session->userdata('repid'))
        {
            redirect('homecontroller');
        }

        $this->load->view('templatereporter/header');
        $this->load->view('templatereporter/sidebar');
        $this->load->view('templatereporter/repdashboard');
    }
    
    //Logout

    public function replogout()
    {
        $this->session->unset_userdata([
            'repid',
            'rname'
        ]);

        redirect('homecontroller');
    }

        
    

} 


?>