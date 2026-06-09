<?php
class countrycontroller extends CI_Controller{

    public function __construct() {
        parent::__construct();
        // Load any required models, libraries, etc. here
        error_reporting(0);
    }

    public function index() {

        
        // Load the view to display the category

        $file['country']=$this->db->get('country')->result();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('country/showcountry',$file);
    }

    public function status($id)
    {
        $this->db->where('countryid',$id);
        $country=$this->db->get('country')->row();

        if($country->countrystatus=="active")
            {
                $up=array(
                    "countrystatus"=>"Deactive"
                );
            }
        else
            {
                $up=array(
                    "countrystatus"=>"Active"
                );
            }

            $this->db->where('countryid',$id);
            $this->db->update('country',$up);
            redirect('countrycontroller');
    }

    public function del($id)
    {
        $this->db->where('countryid',$id);
        $this->db->delete('country');
        redirect('countrycontroller');
    }

     public function addcountry()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('country/addcountry');
    }

    public function inscountry()
    {
        $countryname=$this->input->post('countryname');
       
        $data=array(
			"countryname"=>$countryname,
        );

        // echo "<pre>";
		// print_r($data);
		// echo "</pre>";	

        $this->db->insert('country',$data);
        redirect('countrycontroller');

    }

    public function edit($id)
    {
        $this->db->where('countryid',$id);
        $file['data']=$this->db->get('country')->row();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('country/editcountry', $file);
    }

    public function up_country($id)
    {

       $countryname=$this->input->post('countryname');
     
        $data=array(
            "countryname"=>$countryname,
        );

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        $this->db->where('countryid',$id);
        $this->db->update('country',$data);
        redirect('countrycontroller');
    }

 }

?>

