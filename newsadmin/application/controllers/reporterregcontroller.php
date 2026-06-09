<?php
class reporterregcontroller extends CI_Controller{

    public function __construct() {
        parent::__construct();
        // Load any required models, libraries, etc. here
        error_reporting(0);
    }

    public function index() {
        // Load the view to display the category
        $file['reporterreg']=$this->db->get('reportereg')->result();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('reporterreg/showreporterreg',$file);
    }

    public function status($id)
    {
        $this->db->where('repid',$id);
        $reporterreg=$this->db->get('reportereg')->row();

        if($reporterreg->regstatus=="active")
            {
                $up=array(
                    "regstatus"=>"Deactive"
                );
            }
        else
            {
                $up=array(
                    "regstatus"=>"Active"
                );
            }

        $this->db->where('repid',$id);
        $this->db->update('reportereg',$up);
        redirect('reporterregcontroller');
    }

    //Delete
    public function del($id)
    {
        $this->db->where('repid',$id);
        $this->db->delete('reportereg');
        redirect('reporterregcontroller');
    }

    //instert
    public function addreporter()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('reporterreg/addreporterreg');
    }

    public function insreporter()
    {

        $name=$this->input->post('rname');
        $email=$this->input->post('remail');
        $password=$this->input->post('rpassword');
        $gender=$this->input->post('gender');
        $address=$this->input->post('raddress');
        $mobile=$this->input->post('rmobile');

        $config['upload_path']          = './imgupload/';
			$config['allowed_types']        = 'gif|jpg|png';
//			$config['max_size']             = 10000;
//			$config['max_width']            = 10240;
//			$config['max_height']           = 76800;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('rimage'))
			{
					$error = array('error' => $this->upload->display_errors());

				print_r( $error);
				die();
			}
			else
			{
					$data = array('upload_data' => $this->upload->data());
					
			}
                $img=$data['upload_data']['file_name'];
			
		$data=array(
			"rname"=>$name,
			"remail"=>$email,
			"rpassword"=>$password,
			"rgender"=>$gender,
			"raddress"=>$address,
			"rmno"=>$mobile,
			"rimage"=>$img,
			);

	//	echo "<pre>";
	//	print_r($data);
	//	echo "</pre>";	

        $this->db->insert('reportereg',$data);
        redirect('reporterregcontroller');

    }

    public function edit($id)
    {
        $this->db->where('repid',$id);
        $file['data']=$this->db->get('reportereg')->row();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('reporterreg/editreporterreg', $file);
    }

    public function up_reporterreg($id)
    {

        $name=$this->input->post('rname');
        $email=$this->input->post('remail');
        $password=$this->input->post('rpassword');
        $gender=$this->input->post('gender');
        $address=$this->input->post('raddress');
        $mobile=$this->input->post('rmobile');

            $config['upload_path']          = './imgupload/';
			$config['allowed_types']        = 'gif|jpg|png';
//			$config['max_size']             = 10000;
//			$config['max_width']            = 10240;
//			$config['max_height']           = 76800;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('rimage'))
			{
					$error = array('error' => $this->upload->display_errors());

				print_r( $error);
				die();
			}
			else
			{
					$data = array('upload_data' => $this->upload->data());
					
			}
                $img=$data['upload_data']['file_name'];
       
     
        $data=array(

           "rname"=>$name,
			"remail"=>$email,
			"rpassword"=>$password,
			"rgender"=>$gender,
			"raddress"=>$address,
			"rmno"=>$mobile,
			"rimage"=>$img,
        );

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        $this->db->where('repid',$id);
        $this->db->update('reportereg',$data);
        redirect('reporterregcontroller');
    } 

 }

?>

