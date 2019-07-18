<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends CI_Controller
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
			$this->load->view('Sidebar',$this->data);
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
		$data["category"] = json_decode($this->Add_model->category(),true);
		$this->load->view('project',$data);
		$this->load->view('Footer');
	}

	public function add()
	{
		$category = $this->input->post('category');
		$title = $this->input->post('title');
		
		if(isset($_FILES['thumb_image']['name']) && $_FILES['thumb_image']['name']!="")
		{  
	       $thumb_image = $_FILES['thumb_image']['name'];
	    } 
		
		$this->form_validation->set_rules('category','Category','trim|required');
		$this->form_validation->set_rules('title','Title','trim|required');
		
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('project',$this->data);
			$this->load->view('Footer',$this->data);
		}
		else
		{
			    if(!empty($thumb_image))		
			    {
					$config['upload_path']  = './Project_Image/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size'] = '';
					$config['max_width'] = '';
					$config['max_height']  = '';

					$this->load->library('upload', $config);
					if(!$this->upload->do_upload('thumb_image'))
					{
						$error = array('error'=>$this->upload->display_errors());
						$this->load->view('project',$error);
					}
					else
					{
						$data = array('upload_data'=>$this->upload->data());
					}
			 
				}
				else
				{
					$this->session->set_flashdata('error',"Image Could not be uploaded...");
				    redirect('Project');
				}
			
			
			$response = $this->Add_model->project($category,$title,$thumb_image);
			if($response == 1)
			{
				$this->session->set_flashdata('sucess',"Added successfully...");
				redirect('Project');
			}
			else
			{
				$this->session->set_flashdata('error',"Error...");
				redirect('Project');
			}
		}
    }



	
		public function view()
		{
			$data["counter"] = 1;
			$data["results"] = json_decode($this->Add_model->get_project(),true);
			$this->load->view("Project_view",$data);
			$this->load->view("Footer",$data);
		}


		public function edit()
		{
			$data["category"] = json_decode($this->Add_model->category(),true);
			
			$eid=$this->uri->segment(3);
			
			$data["eid"]=$eid;
			
			$data["get_results"]= json_decode($this->Add_model->edit_project($eid),true);
			
			if($data["get_results"] == "")
			{
				$this->session->set_flashdata('error',"Something went wrong.try again");
				redirect("Project/view");
			}
			$this->load->view("Project",$data);
			$this->load->view("Footer",$data);
		}
	



		public function update()
		{
			
			$eid = $this->input->post('eid');
				
			$data["eid"]=$eid;
				 
			$category = $this->input->post('category');
		    $title = $this->input->post('title');
		
			if(isset($_FILES['thumb_image']['name']) && $_FILES['thumb_image']['name']!="")
			{  
			   $thumb_image = $_FILES['thumb_image']['name'];
			}
            else
			{
			   $thumb_image = $this->input->post('old_thumbimage');
			}			
					
				$this->form_validation->set_rules('title','Title','trim|required');
				$this->form_validation->set_rules('category','Category','trim|required');
				
				if($this->form_validation->run() == FALSE)
				{
					   $this->load->view('Project',$data);
					   $this->load->view('Footer',$data);
				}
				else
				{

					if($_FILES['thumb_image']['name']!="")
					{
							
						$config['upload_path']  = './Project_Image/';
						$config['allowed_types'] = 'gif|jpg|png';
						$config['max_size'] = '';
						$config['max_width'] = '';
						$config['max_height']  = '';
						$this->load->library('upload', $config);
						if(!$this->upload->do_upload('thumb_image'))
						{
							$error = array('error'=>$this->upload->display_errors());
							$this->load->view('Project', $error);
							//$this->session->set_flashdata('error',$this->upload->display_errors());
							//redirect('Slider/edit/'.$eid);
						}
						else
						{
							$data = array('upload_data'=>$this->upload->data());
						}
					}
						
					$response=$this->Add_model->update_project($eid,$category,$title,$thumb_image);
					if($response==1)
					{
						$this->session->set_flashdata('sucess',"Updated sucessfully.");
						redirect('Project/edit/'.$eid);
					}
					else if($response==2)
					{
						$this->session->set_flashdata('error',"No Changes in data.");
						redirect('Project/edit/'.$eid);
					}
					else
					{
						$this->session->set_flashdata('error',"Something went wrong.");
						redirect('Project/edit/'.$eid);
					}
				}

		}


		public function status()
		{

				$eid = $this->uri->segment(3);
			
				if(isset($eid) && !empty($eid))
				{
					$get_status = json_decode($this->Add_model->Project_status($eid),true);
					if($get_status == 1)
					{
							$this->session->set_flashdata('sucess',"status change sucessfully.");
							redirect('Project/view');
					}
					else if($get_status == 2)
					{
							$this->session->set_flashdata('error',"Not change sucessfully.");
							redirect('Project/view');
					}
					else
					{
							$this->session->set_flashdata('error',"Sorry,try again!.");
							redirect('Project/view');
					}
				}
				else
				{
					 $this->session->set_flashdata('error',"Sorry,try again!.");
					 redirect('Project/view');
				}
		}






	
}?>