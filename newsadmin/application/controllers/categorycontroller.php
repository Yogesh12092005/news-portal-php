<?php
class categorycontroller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load any required models, libraries, etc. here
        error_reporting(0);
    }

    public function index() {
        // Load the view to display the category

        $file['cat']=$this->db->get('category')->result();


        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('category/showcategory',$file);
    }

    public function status($id)
    {
        //echo $id;
        $this->db->where('cid',$id);
        $cat=$this->db->get('category')->row();
    
        if($cat->catgstatus=="active")
            {
                $up=array(
                    "catgstatus"=>"Deactive"
                );
            }
            else
                {
                 $up=array(
                    "catgstatus"=>"Active"
                );   
                }

        $this->db->where('cid',$id);
        $this->db->update('category',$up);
        redirect('categorycontroller');          

    }

    public function del($id)
    {
        $this->db->where('cid',$id);
        $this->db->delete('category');
        redirect('categorycontroller');
    }

     public function addcategory()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('category/addcategory');
    }

    public function inscategory()
    {
        $category=$this->input->post('category');
        // $status=$this->input->post('bstatus');
       
        $data=array(
			"category"=>$category,
			// "bstatus"=>$status,
        );

        // echo "<pre>";
		// print_r($data);
		// echo "</pre>";	

        $this->db->insert('category',$data);
        redirect('categorycontroller');
    }

    public function edit($id)
    {
        $this->db->where('cid',$id);
        $file['data']=$this->db->get('category')->row();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('category/editcategory', $file);
    }

    public function up_category($id)
    {
        $category=$this->input->post('category');
       
        $data=array(
            "category"=>$category,
        );
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        
        $this->db->where('cid',$id);
        $this->db->update('category',$data);
        redirect('categorycontroller');
    }
 }

?>