<?php
class subscribercontroller extends CI_Controller{

    public function __construct() {
        parent::__construct();
        // Load any required models, libraries, etc. here
    }

    public function index() {
        // Load the view to display the category

        $file['subscriber']=$this->db->get('subscriber')->result();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('subscriber/showsubscriber',$file);
    }

    public function del($id)
    {
        $this->db->where('subid',$id);
        $this->db->delete('subscriber');
        redirect('subscribercontroller');
    }

    //insert
      public function addsubscriber()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('subscriber/addsubscriber');
    }

    public function inssubscriber()
    {
        $email=$this->input->post('semail');
       
        $data=array(
			"semail"=>$email,
        );

        // echo "<pre>";
		// print_r($data);
		// echo "</pre>";	    

        $this->db->insert('subscriber',$data);
        redirect('subscribercontroller');

    }

      public function edit($id)
    {
        $this->db->where('subid',$id);
        $file['data']=$this->db->get('subscriber')->row();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('subscriber/editsubscriber', $file);
    }

    public function up_subscriber($id)
    {

       $email=$this->input->post('semail');
       
        $data=array(
			"semail"=>$email,
        );

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        $this->db->where('subid',$id);
        $this->db->update('subscriber',$data);
        redirect('subscribercontroller');
    } 
 }

?>

