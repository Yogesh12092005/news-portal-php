<?php
class reptodaynewscontroller extends CI_Controller{

    public function __construct() {
        parent::__construct();
        // Load any required models, libraries, etc. here
        error_reporting(0);
    }

    public function index() {

         $this->db->from('todaynews');
        $this->db->join('category', 'category.cid = todaynews.cid');
        // Load the view to display the category

        $file['todaynews']=$this->db->get()->result();
        
        $this->load->view('templatereporter/header');
        $this->load->view('templatereporter/sidebar');
        $this->load->view('todaynews/showtodaynews',$file);
    }

    public function status($id)
    {
        $this->db->where('tid',$id);
        $todaynews=$this->db->get('todaynews')->row();

        if($todaynews->tstatus=="active")
            {
                $up=array(
                    "tstatus"=>"Deactive"
                );
            }
        else
            {
                $up=array(
                    "tstatus"=>"Active"
                );
            }

        $this->db->where('tid',$id);
        $this->db->update('todaynews',$up);
        redirect('reptodaynewscontroller');

    }

    public function del($id)
    {
        $this->db->where('tid',$id);
        $this->db->delete('todaynews');
        redirect('reptodaynewscontroller');
    }

     public function addtodaynews()
    {
        $this->load->view('templatereporter/header');
        $this->load->view('templatereporter/sidebar');
        $this->load->view('todaynews/addtodaynews');
    }

    public function instodaynews()
    {
        $cid=$this->input->post('cid');
        $image=$this->input->post('timage');
        $title=$this->input->post('title');
        $Description=$this->input->post('tdesc');
       

            $config['upload_path']          = './imgupload/';
			$config['allowed_types']        = 'gif|jpg|png';
//			$config['max_size']             = 10000;
//			$config['max_width']            = 10240;
//			$config['max_height']           = 76800;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('timage'))
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
            "cid"=>$cid,
            "timage"=>$image,
            "title"=>$title,
            "tdesc"=>$Description,
            
        );
			

        // echo "<pre>";
		//  print_r($data);
		//  echo "</pre>";	

        $this->db->insert('todaynews',$data);
        redirect('reptodaynewscontroller');

    }

      public function edit($id)
    {
        $this->db->where('tid',$id);
        $file['data']=$this->db->get('todaynews')->row();

        $this->load->view('templatereporter/header');
        $this->load->view('templatereporter/sidebar');
        $this->load->view('todaynews/edittodaynews', $file);
    }

    public function up_todaynews($id)
    {

        $cid=$this->input->post('cid');
        $image=$this->input->post('timage');
        $title=$this->input->post('title');
        $Description=$this->input->post('tdesc');
       

            $config['upload_path']          = './imgupload/';
			$config['allowed_types']        = 'gif|jpg|png';
//			$config['max_size']             = 10000;
//			$config['max_width']            = 10240;
//			$config['max_height']           = 76800;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('timage'))
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
            "cid"=>$cid,
            "timage"=>$image,
            "title"=>$title,
            "tdesc"=>$Description,   
        );

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        $this->db->where('tid',$id);
        $this->db->update('todaynews',$data);
        redirect('reptodaynewscontroller');
    } 

 }

?>

