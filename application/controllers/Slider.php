<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Slider extends CI_Controller
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

	public function form()
	{
		$this->load->view('Slider.php');
		$this->load->view('Footer');
	}

	public function add()
	{
		$title = $this->input->post('title');
		
		if(isset($_FILES['slider_image']['name']) && $_FILES['slider_image']['name']!="")
		{  
	       $slider_image = $_FILES['slider_image']['name'];
	    } 
		
		$this->form_validation->set_rules('title','Title','trim|required');
		
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('Slider',$data);
			$this->load->view('Footer',$data);
		}
		else
		{
			
			    if(!empty($slider_image))		
			    {
					$config['upload_path']  = './slider/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size'] = '';
					$config['max_width'] = '';
					$config['max_height']  = '';

					$this->load->library('upload', $config);
					if(!$this->upload->do_upload('slider_image'))
					{
						$error = array('error'=>$this->upload->display_errors());
						$this->load->view('Slider', $error);
					}
					else
					{
						$data = array('upload_data'=>$this->upload->data());
					}
			 
				}
				else
				{
					$this->session->set_flashdata('error',"Image Could not be uploaded...");
				    redirect('Slider/form');
				}
			
				$response = $this->Add_model->Slider($title,$slider_image);
				if($response == 1)
				{
					$this->session->set_flashdata('sucess',"Added successfully...");
					redirect('Slider/form');
				}
				else
				{
					$this->session->set_flashdata('error',"Error...");
					redirect('Slider/form');
				}
		}
    }



	
		public function view()
		{
			$data["counter"] = 1;
			$data["results"] = json_decode($this->Add_model->get_slider(),true);
			$this->load->view("Slider_view",$data);
			$this->load->view("Footer",$data);
		}


		public function edit()
		{
			$eid=$this->uri->segment(3);
			$data["eid"]=$eid;
			$data["get_results"]= json_decode($this->Add_model->edit_slider($eid),true);
			if($data["get_results"] == "")
			{
				$this->session->set_flashdata('error',"Something went wrong.try again");
				redirect("Slider/view");
			}
			$this->load->view("Slider",$data);
			$this->load->view("Footer",$data);
		}
	



public function update()
{
	
	    $eid = $this->input->post('eid');
	
	    $data["eid"] = $eid;
	 
	    $title = $this->input->post('title');
		
		if(isset($_FILES['slider_image']['name']) && $_FILES['slider_image']['name']!="")
		{  
	       $slider_image = $_FILES['slider_image']['name'];
	    }
        else
		{
			$slider_image = $this->input->post('old_sliderimage');
		}		
		
		$this->form_validation->set_rules('title','Title','trim|required');
		
		if($this->form_validation->run() == FALSE)
		{
		   $this->load->view('About',$data);
		   $this->load->view('Footer',$data);
		}
		else
		{

			if($_FILES['slider_image']['name']!="")
            {
				
				
				$config['upload_path']  = './slider/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '';
				$config['max_width'] = '';
				$config['max_height']  = '';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('slider_image'))
				{
					//$error = array('error'=>$this->upload->display_errors());
					//$this->load->view('Slider', $error);
					$this->session->set_flashdata('error',$this->upload->display_errors());
					redirect('Slider/edit/'.$eid);
				}
				else
				{
					$data = array('upload_data'=>$this->upload->data());
					
				}
			 
				
			}
			
			$response=$this->Add_model->update_slider($eid,$title,$slider_image);
			
			if($response==1)
			{
			    $this->session->set_flashdata('sucess',"Updated sucessfully.");
				redirect('Slider/edit/'.$eid);
			}
			else if($response==2)
			{
			    $this->session->set_flashdata('error',"No Changes in data.");
			    redirect('Slider/edit/'.$eid);
            }
			else
			{
			    $this->session->set_flashdata('error',"Something went wrong.");
				redirect('Slider/edit/'.$eid);
            }
		}

}


public function status()
{

	    $eid = $this->uri->segment(3);
	
	     if(isset($eid) && !empty($eid))
		 {
			$get_status = json_decode($this->Add_model->slider_status($eid),true);
			if($get_status == 1)
			{
					$this->session->set_flashdata('sucess',"status change sucessfully.");
					redirect('Slider/view');
			}
			else if($get_status == 2)
			{
					$this->session->set_flashdata('error',"Not change sucessfully.");
					redirect('Slider/view');
			}
			else
			{
					$this->session->set_flashdata('error',"Sorry,try again!.");
					redirect('Slider/view');
			}
					
		 
	
	
		 }
		 else
         {
			 $this->session->set_flashdata('error',"Sorry,try again!.");
			 redirect('Slider/view');
		 }
}






	
}?>