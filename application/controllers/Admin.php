<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller 
{
		protected $data;
		public function __construct()
		{   
			parent::__construct();
			date_default_timezone_set('Asia/Kolkata');
			
			$this->load->library('session');
			$this->load->helper('url');
			
			$this->load->model("Add_model");
			//$this->load->model("Edit_model");
			$this->load->library("pagination");
			$this->load->model("Privileges_model");
			$this->data["admin"]=$this->Privileges_model->menu_permission();
			$this->load->model("Viewmodel");
		    $this->load->view('Header');
			$this->load->view('Sidebar',$this->data);
			$this->load->helper(array('form','url'));
            $this->load->library('form_validation');
			
			if(!$this->session->userdata('adminpanel_artist'))
			{
						$session_data = $this->session->userdata('adminpanel_artist');
						$data['artist_id'] = $session_data['artist_id'];
						redirect('Login','refresh');
			}
}
		
public function form()
{
  
   $this->load->view('Admin_form',$this->data);
   $this->load->view('Footer',$this->data);
}


public function Add()
{
	
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	
	$this->form_validation->set_rules('username','username','required');
	$this->form_validation->set_rules('password','password', 'required');
	
    if($this->form_validation->run() == FALSE)
	{
	   $this->load->view('Admin_form',$this->data);
	   $this->load->view('Footer',$this->data);
	}
	else
	{
		            $abc = json_decode($this->Add_model->Admin($username,$password),true);
	                if($abc==1)
					{
						$this->session->set_flashdata('sucess',"ADDED SUCESSFULLY...");
						redirect('Admin/form');
					}
					else if($abc==2)
					{
						$this->session->set_flashdata('error',"NOT ADDED SUCESSFULLY.");
						redirect('Admin/form');
					}
					else
					{
						$this->session->set_flashdata('error',"SORRY TRY AGAIN LATER!");
						redirect('Admin/form');
					}
		
	}
	
	
}


public function view()
{
	    $config = array();
		$table_name="login";
        $config["base_url"] = base_url()."Admin/view";
        $config["total_rows"] = $this->Viewmodel->count_total_rows($table_name);
        $config["per_page"] = 20;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->data["results"] = json_decode($this->Viewmodel->Fetch_Admin($config["per_page"],$page),true);
		$this->data["links"] = $this->pagination->create_links();
		$this->data["counter"]=$page+1;
        $this->load->view("Admin_view",$this->data);
		$this->load->view('Footer',$this->data);

}







			
}?>