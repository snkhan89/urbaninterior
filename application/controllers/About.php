<?php defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller
{
	    protected $data;
	    public function __construct()
		{
			parent::__construct();
			date_default_timezone_set('Asia/Kolkata');
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->model("Add_model");
			$this->load->model("Edit_model");
			$this->load->library("pagination");
			$this->load->model("Privileges_model");
			$this->data["admin"] = $this->Privileges_model->admin();
			$this->load->model("Viewmodel");
			$this->load->view('Header');
			$this->load->view('Sidebar', $this->data);
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			
			
			if(!$this->session->userdata('adminpanel_artist'))
			{
				$session_data = $this->session->userdata('adminpanel_artist');
				$data['artist_id'] = $session_data['artist_id'];
				redirect('Login', 'refresh');
			}
		}

	public function index()
	{
		$this->load->view('About.php');
		$this->load->view('Footer',$this->data);
	}

	public function add()
	{
		$title = $this->input->post('title');
		$description = $this->input->post('Description');
		
		$this->form_validation->set_rules('title','Title','trim|required');
		$this->form_validation->set_rules('Description','Description','trim|required');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('About',$this->data);
			$this->load->view('Footer',$this->data);
		}
		else
		{
			$response = $this->Add_model->aboutus($title,$description);
			if($response == 1)
			{
				$this->session->set_flashdata('sucess',"Added successfully...");
				redirect('About');
			}
			else
			{
				$this->session->set_flashdata('error',"Error...");
				redirect('About');
			}
		}
}



	
		public function view()
		{
			$data["counter"] = 1;
			$data["results"] = json_decode($this->Add_model->get_aboutus(),true);
			$this->load->view("About_view",$data);
			$this->load->view("Footer",$data);
		}


		public function edit()
		{
			$eid=$this->uri->segment(3);
			$data["eid"]=$eid;
			$data["get_result"]= json_decode($this->Add_model->edit_aboutus($eid),true);
			if($data["get_result"] == "")
			{
				$this->session->set_flashdata('error',"Something went wrong.try again");
				redirect("About/view");
			}
			$this->load->view("About",$data);
			$this->load->view("Footer",$data);
		}
	



public function update()
{
	
	    $eid = $this->input->post('eid');
	
	    $data["eid"]=$eid;
	 
	    $title = $this->input->post('title');
		$description = $this->input->post('Description');
		
		$this->form_validation->set_rules('title','Title','trim|required');
		$this->form_validation->set_rules('Description','Description','trim|required');
    
		if($this->form_validation->run() == FALSE)
		{
		   $this->load->view('About',$data);
		   $this->load->view('Footer',$data);
		}
		else
		{

			$response=$this->Add_model->update_aboutus($eid,$title,$description);
			if($response==1)
			{
			    $this->session->set_flashdata('sucess',"Updated sucessfully.");
				redirect('About/edit/'.$eid);
			}
			else if($response==2)
			{
			    $this->session->set_flashdata('error',"No Changes in data.");
			    redirect('About/edit/'.$eid);
            }
			else
			{
			    $this->session->set_flashdata('error',"Something went wrong.");
				redirect('About/edit/'.$eid);
            }
		}

}


public function status()
{

	    $eid = $this->uri->segment(3);
	
	     if(isset($eid) && !empty($eid))
		 {
			$get_status = json_decode($this->Add_model->status($eid),true);
			if($get_status == 1)
			{
					$this->session->set_flashdata('sucess',"status change sucessfully.");
					redirect('About/view');
			}
			else if($get_status == 2)
			{
					$this->session->set_flashdata('error',"Not change sucessfully.");
					redirect('About/view');
			}
			else
			{
					$this->session->set_flashdata('error',"Sorry,try again!.");
					redirect('About/view');
			}
					
		 
	
	
		 }
		 else
         {
			 $this->session->set_flashdata('error',"Sorry,try again!.");
			 redirect('About/view');
		 }
}






	
}?>