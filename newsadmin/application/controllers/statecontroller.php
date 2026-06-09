<?php
class statecontroller extends CI_Controller{

    public function __construct() {
        parent::__construct();
        // Load any required models, libraries, etc. here
    }

    public function index() {

         $this->db->from('state');
        $this->db->join('country', 'country.countryid = state.countryid');
        // Load the view to display the category

        $file['state']=$this->db->get()->result();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('state/showstate',$file);
    }

    public function status($id)
    {
        $this->db->where('stateid',$id);
        $state=$this->db->get('state')->row();

        if($state->sstatus=="active")
            {
                $up=array(
                    "sstatus"=>"Deactive"
                );
            }

        else
            {
                $up=array(
                    "sstatus"=>"Active"
                );
            }

            $this->db->where('stateid',$id);
            $this->db->update('state',$up);
            redirect('statecontroller');    
    }

    public function del($id)
    {
        $this->db->where('stateid',$id);
        $this->db->delete('state');
        redirect('statecontroller');
        
    }

      public function addstate()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('state/addstate');
    }

    public function insstate()
    {
        $countryid=$this->input->post('countryid');
        $statename=$this->input->post('sname');
       
        $data=array(

            "countryid"=>$countryid,    
			"sname"=>$statename,
        );

        // echo "<pre>";
		// print_r($data);
		// echo "</pre>";	    

        $this->db->insert('state',$data);
        redirect('statecontroller');

    }

     public function edit($id)
    {
        $this->db->where('stateid',$id);
        $file['data']=$this->db->get('state')->row();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('state/editstate', $file);
    }

    public function up_state($id)
    {

       $countryid=$this->input->post('countryid');
        $statename=$this->input->post('sname');

        $data=array(

            "countryid"=>$countryid,    
			"sname"=>$statename,
        );

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        $this->db->where('stateid',$id);
        $this->db->update('state',$data);
        redirect('statecontroller');
    } 

 }

?>

