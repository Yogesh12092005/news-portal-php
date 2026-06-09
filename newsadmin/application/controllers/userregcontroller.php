<?php
class userregcontroller extends CI_Controller{

    public function __construct() {
        parent::__construct();
        // Load any required models, libraries, etc. here
        error_reporting(0);

    }

    public function index() {
        // Load the view to display the category

        $file['userreg']=$this->db->get('userreg')->result();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('userreg/showuserreg',$file);
    }

    public function status($id)
    {
        $this->db->where('uid',$id);
        $userreg=$this->db->get('userreg')->row();

        if($userreg->ustatus=="active")
            {
                $up=array(
                    "ustatus"=>"Deactive"
                );
            }
        else
            {
                $up=array(
                    "ustatus"=>"Active"
                );
            }

        $this->db->where('uid',$id);
        $this->db->update('userreg',$up);
        redirect('userregcontroller');
    }

    public function del($id)
    {
        $this->db->where('uid',$id);
        $this->db->delete('userreg');
        redirect('userregcontroller');
    }

     public function adduserreg()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('userreg/adduserreg');
    }

    public function insuserreg()
    {
        $uname=$this->input->post('uname');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $contactno=$this->input->post('contactno');

       
        $data=array(
			"uname"=>$uname,
			"email"=>$email,
			"password"=>$password,
			"contactno"=>$contactno,

        );

        // echo "<pre>";
		// print_r($data);
		// echo "</pre>";	    

        $this->db->insert('userreg',$data);
        redirect('userregcontroller');

    }

      public function edit($id)
    {
        $this->db->where('uid',$id);
        $file['data']=$this->db->get('userreg')->row();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('userreg/edituserreg', $file);
    }

    public function up_userreg($id)
    {

         $uname=$this->input->post('uname');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $contactno=$this->input->post('contactno');

       
        $data=array(
			"uname"=>$uname,
			"email"=>$email,
			"password"=>$password,
			"contactno"=>$contactno,

        );

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        $this->db->where('uid',$id);
        $this->db->update('userreg',$data);
        redirect('userregcontroller');
    } 

 
}

?>

