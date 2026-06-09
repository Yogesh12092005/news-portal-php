<?php
class admincontroller extends CI_Controller{

    public function __construct() {
        parent::__construct();
        // Load any required models, libraries, etc. here
        error_reporting(0);
    }
    
    public function index() {
        // Load the view to display the category

         $file['admin']=$this->db->get('admin_register')->result();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/showadmin', $file);
    }

    //Status : Active & Deactive

    public function status($id)
    {
        $this->db->where('Aid',$id);
        $admin=$this->db->get('admin_register')->row();

        if($admin->astatus=="active")
            {
                $up=array(
                    "astatus"=>"Deactive"
                );
            }
            else    
                {
                    $up=array(
                        "astatus"=>"Active"
                    );
                }
            
            $this->db->where('Aid',$id);
            $this->db->update('admin_register',$up);
            redirect('admincontroller');
    }

    //Delete
    public function del($id) 
    {   
        $this->db->where('Aid',$id);
        $this->db->delete('admin_register');
        redirect('admincontroller/');
        
    }

    public function addadmin()
    {
       $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/addadmin');   
    }

    public function insadmin()
    {
        $aname=$this->input->post('Aname');
        $fullname=$this->input->post('fullname');
        $email=$this->input->post('Aemail');
        $password=$this->input->post('password');
        $gender=$this->input->post('gender');
        $address=$this->input->post('address');
        $contactno=$this->input->post('contactno');
        $city=$this->input->post('city');        
        $state=$this->input->post('state');        
        $country=$this->input->post('country');
        $pincode=$this->input->post('pincode');
        $priority=$this->input->post('priority'); 
        
        
            $config['upload_path']          = './imgupload/';
			$config['allowed_types']        = 'gif|jpg|png';
//			$config['max_size']             = 10000;
//			$config['max_width']            = 10240;
//			$config['max_height']           = 76800;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('aimage'))
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
			"Aname"=>$aname,
			"fullname"=>$fullname,
            "Aemail"=>$email,
			"password"=>$password,
			"gender"=>$gender,
			"address"=>$address,
			"contactno"=>$contactno,
            "city"=>$city,
            "state"=>$state,
            "country"=>$country,
			"aimage"=>$img,
            "pincode"=>$pincode,
            "priority"=>$priority,
			);

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";	

        $this->db->insert('admin_register',$data);
        redirect('admincontroller');

    }

    public function edit($id)
    {
        $this->db->where('Aid',$id);
        $file['data']=$this->db->get('admin_register')->row();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/editadmin', $file);
    }

    public function up_admin($id)
    {

        $aname=$this->input->post('Aname');
        $fullname=$this->input->post('fullname');
        $email=$this->input->post('Aemail');
        $password=$this->input->post('password');
        $gender=$this->input->post('gender');
        $address=$this->input->post('address');
        $contactno=$this->input->post('contactno');
        $city=$this->input->post('city');
        $state=$this->input->post('state');
        $country=$this->input->post('country');
        $pincode=$this->input->post('pincode');
        $priority=$this->input->post('priority');   
        
       
            $config['upload_path']          = './imgupload/';
			$config['allowed_types']        = 'gif|jpg|png';
//			$config['max_size']             = 10000;
//			$config['max_width']            = 10240;
//			$config['max_height']           = 76800;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('aimage'))
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
			"Aname"=>$aname,
			"fullname"=>$fullname,
            "Aemail"=>$email,
			"password"=>$password,
			"gender"=>$gender,
			"address"=>$address,
			"contactno"=>$contactno,
            "city"=>$city,
            "state"=>$state,
            "country"=>$country,
			"aimage"=>$img,
            "pincode"=>$pincode,
            "priority"=>$priority,
			);


          $this->db->where('Aid',$id);
          $this->db->update('admin_register',$data);
           redirect('admincontroller');        

    }

    }
?>
