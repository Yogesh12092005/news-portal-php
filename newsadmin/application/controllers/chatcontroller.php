<?php
class chatcontroller extends CI_Controller{

    public function __construct() {
        parent::__construct();
        // Load any required models, libraries, etc. here
        error_reporting(0);
    }

    public function index() {
        // Join Query
        $this->db->from('chat');
        $this->db->join('reportereg', 'reportereg.repid = chat.repid');

        // Load the view to display the category

        $file['chat']=$this->db->get()->result(); //remove ('chat') from get().

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('chat/showchat', $file);
    }

    public function status($id)
    {
        $this->db->where('chatid',$id);
        $chat=$this->db->get('chat')->row();

        if($chat->chatstatus=="active")
            {
                $up=array(
                    "chatstatus"=>"Deactive"
                );
            }

            else
                {
                    $up=array(
                        "chatstatus"=>"Active"
                    );
                }

            $this->db->where('chatid',$id);
            $this->db->update('chat',$up);
            redirect('chatcontroller');
    }

    public function del($id)
    {
        $this->db->where('chatid',$id); 
        $this->db->delete('chat');
        redirect('chatcontroller/');
    }
        
     public function addchat()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('chat/addchat');
    }

   
    public function inschat()
    {

    $data = array(
        'repid'      => $this->input->post('repid'),
        'adminmsg'   => $this->input->post('adminmsg'),
        
    );


    $this->db->insert('chat', $data);
		redirect('chatcontroller');
    }

    public function edit($id)
    {
        $this->db->where('chatid',$id);
        $file['data']=$this->db->get('chat')->row();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('chat/editchat', $file);
    }

    public function up_chat($id)
    {
    $data = array(
        'repid'      => $this->input->post('repid'),
        'adminmsg'   => $this->input->post('adminmsg'),
        
    );
    $this->db->where('chatid', $id);
    $this->db->update('chat', $data);
    redirect('chatcontroller');
    }

    }

?>

