<?php
class repfeedbackcontroller extends CI_Controller{

    public function __construct() {
        parent::__construct();
        // Load any required models, libraries, etc. here
        error_reporting(0);
    }

    public function index() {

        $this->db->from('feedback');
        $this->db->join('reporterpost', 'reporterpost.rid = feedback.rid');

        // Load the view to display the category
        $file['feedback']=$this->db->get()->result();

        $this->load->view('templatereporter/header');
        $this->load->view('templatereporter/sidebar');
        $this->load->view('feedback/showfeedback', $file);
    }

    public function status($id)
    {
        $this->db->where('fid',$id);
        $feedback=$this->db->get('feedback')->row();

        if($feedback->fstatus=="active")
            {
                $up=array(
                    "fstatus"=>"Deactive"
                );
            }
        else
            {
                $up=array(
                    "fstatus"=>"Active"
                );
            }

        $this->db->where('fid',$id);
        $this->db->update('feedback',$up);
        redirect('repfeedbackcontroller');
    }

    public function del($id)
    {
        $this->db->where('fid',$id);
        $this->db->delete('feedback');
        redirect('repfeedbackcontroller');
    }

     public function addfeedback()
    {
        $this->load->view('templatereporter/header');
        $this->load->view('templatereporter/sidebar');
        $this->load->view('feedback/addfeedback');
    }

    public function insfeedback()
    {
        $rid=$this->input->post('rid');
        $username=$this->input->post('username');
        $email=$this->input->post('email');
        $contactno=$this->input->post('contactno');
        $comment=$this->input->post('comment');
       
        $data=array(

            "rid"=>$rid,
			"username"=>$username,
			"email"=>$email,
			"contactno"=>$contactno,
			"comment"=>$comment,
        );

        // echo "<pre>";
		// print_r($data);
		// echo "</pre>";	

        $this->db->insert('feedback',$data);
        redirect('repfeedbackcontroller');

    }

     public function edit($id)
    {
        $this->db->where('fid',$id);
        $file['data']=$this->db->get('feedback')->row();

        $this->load->view('templatereporter/header');
        $this->load->view('templatereporter/sidebar');
        $this->load->view('feedback/editfeedback', $file);
    }

    public function up_feedback($id)
    {

        $rid=$this->input->post('rid');
        $username=$this->input->post('username');
        $email=$this->input->post('email');
        $contactno=$this->input->post('contactno');
        $comment=$this->input->post('comment');
     
        $data=array(
            "rid"=>$rid,
			"username"=>$username,
			"email"=>$email,
			"contactno"=>$contactno,
			"comment"=>$comment,
        );

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        $this->db->where('fid',$id);
        $this->db->update('feedback',$data);
        redirect('repfeedbackcontroller');
    }

 }

?>

