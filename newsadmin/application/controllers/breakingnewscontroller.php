<?php
class breakingnewscontroller extends CI_Controller{

    public function __construct() {
        parent::__construct();
        // Load any required models, libraries, etc. here
        error_reporting(0);
    }

    public function index() {
        // Load the view to display the category

        $file['breaknews']=$this->db->get('breakingnews')->result();
        
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('breaking news/showbreakingnews', $file);
    }

    public function status($id)
    {
        $this->db->where('bid',$id);
        $breaknews=$this->db->get('breakingnews')->row();

        if($breaknews->bstatus=="active")
            {
                $up=array(
                    "bstatus"=>"Deactive"
                );
            }
            else
                {
                    $up=array(
                        "bstatus"=>"Active"
                    );
                }
            
            $this->db->where('bid',$id);
            $this->db->update('breakingnews',$up);
            redirect('breakingnewscontroller');
    }

    public function del($id)
    {
        $this->db->where('bid',$id);
        $this->db->delete('breakingnews');
        redirect('breakingnewscontroller');
    }       

    public function addbreaking()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('breaking news/addbreakingnews');
    }

    public function insbreaking()
    {
        $description=$this->input->post('description');
        // $status=$this->input->post('bstatus');
       
        $data=array(
			"description"=>$description,
			// "bstatus"=>$status,
        );

        echo "<pre>";
		print_r($data);
		echo "</pre>";	

        $this->db->insert('breakingnews',$data);
        redirect('breakingnewscontroller');

    }

    public function edit($id)
    {
        $this->db->where('bid',$id);
        $file['data']=$this->db->get('breakingnews')->row();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('breaking news/editbreakingnews', $file);
    }

    public function up_breaking($id)
    {
        $description=$this->input->post('description');
       
        $data=array(
            "description"=>$description,
        );
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        
        $this->db->where('bid',$id);
        $this->db->update('breakingnews',$data);
        redirect('breakingnewscontroller');
    }
 }
?>
