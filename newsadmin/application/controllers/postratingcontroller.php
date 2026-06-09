<?php
class postratingcontroller extends CI_Controller{

    public function __construct() {
        parent::__construct();
        // Load any required models, libraries, etc. here
    }

    public function index() {

        
         $this->db->from('postrating');
         $this->db->join('reporterpost', 'reporterpost.rid = postrating.rid');
        // Load the view to display the category

        $file['postrating']=$this->db->get()->result();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('post rating/showpostrating', $file);
    }

    public function del($id)
    {
        $this->db->where('ratid',$id);
        $this->db->delete('postrating');
        redirect('postratingcontroller');
    }

     public function addpostrating()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('post rating/addpostrating');
    }

    public function inspostrating()
    {
        $rid=$this->input->post('rid');
        $email=$this->input->post('uemail');
        $rating=$this->input->post('ratlike');
       
        $data=array(
            "rid"=>$rid,
			"uemail"=>$email,
			"ratlike"=>$rating,
        );

        // echo "<pre>";
		// print_r($data);
		// echo "</pre>";	

        $this->db->insert('postrating',$data);
        redirect('postratingcontroller');

    }

    public function edit($id)
    {
        $this->db->where('ratid',$id);
        $file['data']=$this->db->get('postrating')->row();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('post rating/editpostrating', $file);
    }

    public function up_postrating($id)
    {

        $rid=$this->input->post('rid');
        $email=$this->input->post('uemail');
        $ratlike=$this->input->post('ratlike');
     
        $data=array(
            "rid"=>$rid,
			"uemail"=>$email,
			"ratlike"=>$ratlike,
        );

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        $this->db->where('ratid',$id);
        $this->db->update('postrating',$data);
        redirect('postratingcontroller');
    }




 }

?>

