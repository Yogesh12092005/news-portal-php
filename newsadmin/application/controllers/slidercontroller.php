<?php
class slidercontroller extends CI_Controller{

    public function __construct() {
        parent::__construct();
        // Load any required models, libraries, etc. here
        error_reporting(0);
    }

    public function index() {

         $this->db->from('slider');
        $this->db->join('category', 'category.cid = slider.cid');

        // Load the view to display the category

        $file['slider']=$this->db->get()->result();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('slider/showslider',$file);
    }

    public function status($id)
    {
        $this->db->where('sliderid',$id);
        $slider=$this->db->get('slider')->row();

        if($slider->sliderstatus=="active")
            {
                $up=array(
                    "sliderstatus"=>"Deactive"
                );
            }
        else
            {
                $up=array(
                    "sliderstatus"=>"Active"
                );
            }

        $this->db->where('sliderid',$id);
        $this->db->update('slider',$up);
        redirect('slidercontroller');
    }

    public function del($id)
    {
        $this->db->where('sliderid',$id);
        $this->db->delete('slider');
        redirect('slidercontroller');
    }

     public function addslider()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('slider/addslider');
    }

    public function insslider()
    {
        $cid=$this->input->post('cid');
        $image=$this->input->post('slider_image');
        $title=$this->input->post('slidertitle');
        $Description=$this->input->post('sliderdesc');
       

            $config['upload_path']          = './imgupload/';
			$config['allowed_types']        = 'gif|jpg|png';
//			$config['max_size']             = 10000;
//			$config['max_width']            = 10240;
//			$config['max_height']           = 76800;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('slider_image'))
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
			"slider_image"=>$image,
            "slidertitle"=>$title,
            "sliderdesc"=>$Description,
        );

        // echo "<pre>";
		//  print_r($data);
		//  echo "</pre>";	

        $this->db->insert('slider',$data);
        redirect('slidercontroller');

    }

     public function edit($id)
    {
        $this->db->where('sliderid',$id);
        $file['data']=$this->db->get('slider')->row();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('slider/editslider', $file);
    }

    public function up_slider($id)
    {

       $cid=$this->input->post('cid');
        $image=$this->input->post('slider_image');
        $title=$this->input->post('slidertitle');
        $Description=$this->input->post('sliderdesc');


            $config['upload_path']          = './imgupload/';
			$config['allowed_types']        = 'gif|jpg|png';
//			$config['max_size']             = 10000;
//			$config['max_width']            = 10240;
//			$config['max_height']           = 76800;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('slider_image'))
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
			"slider_image"=>$image,
            "slidertitle"=>$title,
            "sliderdesc"=>$Description,
        );

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        $this->db->where('sliderid',$id);
        $this->db->update('slider',$data);
        redirect('slidercontroller');
    } 
 }

?>

