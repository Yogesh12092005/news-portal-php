<?php
class citycontroller extends CI_Controller{

    public function __construct() {
        parent::__construct();
        // Load any required models, libraries, etc. here
        error_reporting(0);
    }

    public function index() {
        // Join Query
        $this->db->from('city');
        $this->db->join('country', 'country.countryid = city.countryid');
        $this->db->join('state', 'state.stateid = city.stateid');
        
        // Load the view to display the category

        $file['city']=$this->db->get()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('city/showcity',$file);

        }

    public function status($id)
    {
        $this->db->where('cityid',$id);
        $city=$this->db->get('city')->row();

        if($city->cstatus=="active")
            {
                $up=array(
                "cstatus"=>"Deactive"
                );
            }
        else
            {
                $up=array(
                    "cstatus"=>"Active"
                );
            }

            $this->db->where('cityid',$id);
            $this->db->update('city',$up);
            redirect('citycontroller');
    }

    public function del($id)
    {
        $this->db->where('cityid',$id);
        $this->db->delete('city');
        redirect('citycontroller');
        
    }

    public function addcity()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('city/addcity');
    }

    public function inscity()
    {

        $cname=$this->input->post('cname');
       $countryid=$this->input->post('countryid');
       $stateid=$this->input->post('stateid');
        
       $data=array(
			"cname"=>$cname,
            "countryid"=>$countryid,
            "stateid"=>$stateid,
        );

        // echo "<pre>";
		// print_r($data);
		// echo "</pre>";	

        $this->db->insert('city',$data);
        redirect('citycontroller');

    }

    public function edit($id)
    {
        $this->db->where('cityid',$id);
        $file['data']=$this->db->get('city')->row();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('city/editcity', $file);
    }

    public function up_city($id)
    {

        $countryid=$this->input->post('countryid');
        $stateid=$this->input->post('stateid');
        $cname=$this->input->post('cname');

        $data=array(
            "countryid"=>$countryid,
            "stateid"=>$stateid,
            "cname"=>$cname,
        );

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        $this->db->where('cityid',$id);
        $this->db->update('city',$data);
        redirect('citycontroller');
    }
 }

?>

