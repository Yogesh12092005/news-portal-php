<?php
class reporterchatcontroller extends CI_Controller{

    public function __construct() {
        parent::__construct();
        // Load any required models, libraries, etc. here
        error_reporting(0);
    }

    public function index() {

        $this->db->from('reporterchat');
        $this->db->join('admin_register', 'admin_register.Aid = reporterchat.Aid');

        // Load the view to display the category

        $file['repchat']=$this->db->get()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('reporterchat/showreporterchat', $file);
    }

    public function status($id)
    {
        $this->db->where('reporterchatid',$id);
        $repchat=$this->db->get('reporterchat')->row();

        if($repchat->reporterchatstatus=="active")
            {
                $up=array(
                    "reporterchatstatus"=>"Deactive"
                );
            }

        else
            {
                $up=array(
                    "reporterchatstatus"=>"Active"
                );
            }
            $this->db->where('reporterchatid',$id);
            $this->db->update('reporterchat',$up);
            redirect('reporterchatcontroller');
    }

    public function del($id)
    {
        $this->db->where('reporterchatid',$id);
        $this->db->delete('reporterchat');
        redirect('reporterchatcontroller');
    }

     public function addreporterchat()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('reporterchat/addreporterchat');
    }

    public function insreporterchat()
    {
        $aid=$this->input->post('Aid');
        $reportermsg=$this->input->post('reportermsg');
       
        $data=array(
            "Aid"=>$aid,
			"reportermsg"=>$reportermsg,
        );

        // echo "<pre>";
		// print_r($data);
		// echo "</pre>";	

        $this->db->insert('reporterchat',$data);
        redirect('reporterchatcontroller');

    }

    public function edit($id)
    {
        $this->db->where('reporterchatid',$id);
        $file['data']=$this->db->get('reporterchat')->row();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('reporterchat/editreporterchat', $file);
    }

    public function up_reporterchat($id)
    {

        $aid=$this->input->post('Aid');
        $reportermsg=$this->input->post('reportermsg');
       
     
        $data=array(
           "Aid"=>$aid,
			"reportermsg"=>$reportermsg,
        );

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        $this->db->where('reporterchatid',$id);
        $this->db->update('reporterchat',$data);
        redirect('reporterchatcontroller');
    }


    

 }

?>

