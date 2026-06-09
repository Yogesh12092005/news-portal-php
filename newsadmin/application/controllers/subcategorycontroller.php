<?php
class subcategorycontroller extends CI_Controller{

    public function __construct() {
        parent::__construct();
        // Load any required models, libraries, etc. here
    }

    public function index() {

         $this->db->from('subcategory');
        $this->db->join('category', 'category.cid = subcategory.cid');
        // Load the view to display the category

        $file['subcat']=$this->db->get()->result();
        
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('subcategory/showsubcategory',$file);
    }

    public function del($id)
    {
        $this->db->where('sid',$id);
        $this->db->delete('subcategory');
        redirect('subcategorycontroller');
        
    }

      public function addsubcategory()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('subcategory/addsubcategory');
    }

    public function inssubcategory()
    {
      $cid=$this->input->post('cid');
        $sname=$this->input->post('sname');
       
        $data=array(
            "cid"=>$cid,
			"sname"=>$sname,
        );

        // echo "<pre>";
		// print_r($data);
		// echo "</pre>";	    

        $this->db->insert('subcategory',$data);
        redirect('subcategorycontroller');

    }

    public function edit($id)
    {
        $this->db->where('sid',$id);
        $file['data']=$this->db->get('subcategory')->row();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('subcategory/editsubcategory', $file);
    }

    public function up_subcategory($id)
    {
      $cid=$this->input->post('cid');
      $sname=$this->input->post('sname');
       
        $data=array(
            "cid"=>$cid,
			"sname"=>$sname,
        );

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        $this->db->where('sid',$id);
        $this->db->update('subcategory',$data);
        redirect('subcategorycontroller');
    } 

 }

?>

