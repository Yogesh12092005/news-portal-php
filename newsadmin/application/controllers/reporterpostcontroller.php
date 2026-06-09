<?php
class reporterpostcontroller extends CI_Controller{

    public function __construct() {
        parent::__construct();
        // Load any required models, libraries, etc. here
        error_reporting(0);
    }

    public function index() {

        $this->db->from('reporterpost');
        $this->db->join('reportereg', 'reportereg.repid = reporterpost.repid');
        $this->db->join('category', 'category.cid = reporterpost.cid');
        $this->db->join('subcategory', 'subcategory.sid = reporterpost.sid');
        $this->db->join('city', 'city.cityid = reporterpost.cityid');

        // Load the view to display the category

        $file['repost']=$this->db->get()->result();
        
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('reporterpost/showreporterpost',$file);
    }

    public function status($id)
    {
        $this->db->where('rid',$id);
        $repost=$this->db->get('reporterpost')->row();

        if($repost->rpstatus=="active")
            {
                $up=array(
                    "rpstatus"=>"Deactive"
                );
            }
        else
            {
                $up=array(
                    "rpstatus"=>"Active"
                );
            }

            $this->db->where('rid',$id);
            $this->db->update('reporterpost',$up);
            redirect('reporterpostcontroller');
    }
    
    public function del($del)
    {
        $this->db->where('rid',$del);
        $this->db->delete('reporterpost');
        redirect('reporterpostcontroller');
    }

    public function addreporterpost()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('reporterpost/addreporterpost');
    }

    public function insreporterpost()
    {
        $repid=$this->input->post('repid');
        $cid=$this->input->post('cid');
        $sid=$this->input->post('sid');
        $cityid=$this->input->post('cityid');
        $title=$this->input->post('title');
        $Description=$this->input->post('description');
        $view=$this->input->post('view');

            $config['upload_path']          = './imgupload/';
			$config['allowed_types']        = 'gif|jpg|png';
//			$config['max_size']             = 10000;
//			$config['max_width']            = 10240;
//			$config['max_height']           = 76800;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('image'))
			{
					$error = array('error' => $this->upload->display_errors());

				print_r( $error);
				die();
			}
			else
			{
					$data = array('upload_data' => $this->upload->data());
					
			}
                $image=$data['upload_data']['file_name'];
       
        $data=array(
            "repid"=>$repid,
            "cid"=>$cid,
            "sid"=>$sid,
            "cityid"=>$cityid,
			"image"=>$image,
            "title"=>$title,
            "description"=>$Description,
            "view"=>$view,

        );

        // echo "<pre>";
		//  print_r($data);
		//  echo "</pre>";	

        $this->db->insert('reporterpost',$data);
        redirect('reporterpostcontroller');

    }

     public function edit($id)
    {
        $this->db->where('rid',$id);
        $file['data']=$this->db->get('reporterpost')->row();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('reporterpost/editreporterpost', $file);
    }

    public function up_reporterpost($id)
    {

        $repid=$this->input->post('repid');
        $cid=$this->input->post('cid');
        $sid=$this->input->post('sid');
        $cityid=$this->input->post('cityid');
        $image=$this->input->post('image');
        $title=$this->input->post('title');
        $Description=$this->input->post('description');
        $view=$this->input->post('view');

            $config['upload_path']          = './imgupload/';
			$config['allowed_types']        = 'gif|jpg|png';
//			$config['max_size']             = 10000;
//			$config['max_width']            = 10240;
//			$config['max_height']           = 76800;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('image'))
			{
					$error = array('error' => $this->upload->display_errors());

				print_r( $error);
				die();
			}
			else
			{
					$data = array('upload_data' => $this->upload->data());
					
			}
                $image=$data['upload_data']['file_name'];
       
     
        $data=array(

            "repid"=>$repid,
            "cid"=>$cid,
            "sid"=>$sid,
            "cityid"=>$cityid,
			"image"=>$image,
            "title"=>$title,
            "description"=>$Description,
            "view"=>$view,
        );

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        $this->db->where('rid',$id);
        $this->db->update('reporterpost',$data);
        redirect('reporterpostcontroller');
    } 
 }

?>

