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
		$cover_image = $this->input->post('cover_image');
		$images = $this->input->post('userFiles');
		
		
		$this->form_validation->set_rules('category','Category','trim|required');
		$this->form_validation->set_rules('title','Title','trim|required');
		if (empty($_FILES['cover_image']['name']))
		{
			$this->form_validation->set_rules('cover_image', 'Cover Image', 'required');
		}
		
		if($this->form_validation->run() == FALSE)
		{
			$this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
			$this->load->view('project',$this->data);
			$this->load->view('Footer',$this->data);
		}
		else
		{
			    
			if(!empty($_FILES['cover_image']['name']) && isset($_FILES['cover_image']['name']) && $_FILES['cover_image']['name']!="" )
			{
						$config['upload_path'] = './project_image/';
						$config['allowed_types'] = 'gif|jpg|png';
						$config['max_size']= "";
						$config['max_width'] = "";
						$config['max_height']= "";
						
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						
						if (!$this->upload->do_upload('cover_image'))
						{
						    $error = $this->upload->display_errors();
							$this->session->set_flashdata('error_login',"$error");
						    redirect('Project');
                        }
						else
						{
							$data = $this->upload->data(); 
							$cimage = $data['file_name'];
							
							$multiple_image = "";
							if (!empty($_FILES['userFiles']['name']))
							{
								$filesCount = count($_FILES['userFiles']['name']);
								for ($i = 0; $i < $filesCount; $i++)
								{
									$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
									$_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
									$_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
									$_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
									$_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];
									$uploadPath = 'project_image/resize/';
									$config['upload_path'] = $uploadPath;
									$config['allowed_types'] = 'gif|jpg|png';
									$this->load->library('upload', $config);
									$this->upload->initialize($config);
									if ($this->upload->do_upload('userFile'))
									{
										$fileData = $this->upload->data();
										$name_array[] = $fileData['file_name'];
										$uploadData[$i]['file_name'] = $fileData['file_name'];
										$uploadData[$i]['created'] = date("Y-m-d H:i:s");
										$uploadData[$i]['modified'] = date("Y-m-d H:i:s");
									}
								}

								@$multiple_image = implode(',', $name_array);
							}
							
						}
			}
			
				
			$response = $this->Add_model->project($category,$title,$cimage,$multiple_image);
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
		
			if(isset($_FILES['cover_image']['name']) && $_FILES['cover_image']['name']!="")
			{  
			   $thumb_image = $_FILES['cover_image']['name'];
			}
            else
			{
			   $thumb_image = $this->input->post('old_cover');
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

					if (!empty($_FILES['cover_image']['name']) && isset($_FILES['cover_image']['name']) && $_FILES['cover_image']['name']!="")
				    {
					  	@unlink('project_image/'.$thumb_image);
						$config['upload_path']= './project_image/';
						$config['allowed_types']= 'gif|jpg|png';
						$config['max_size'] = 12000;
						$config['max_width'] = "";
						$config['max_height'] = "";
						
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						
								if (!$this->upload->do_upload('cover_image'))
								{
								   $error = $this->upload->display_errors();
								   $this->session->set_flashdata('error_login',"$error");
								   redirect('Project/edit/'.$eid);

								}
								else
								{
									$data = $this->upload->data(); 
									$thumb_image = $data['file_name'];
								}
				    }	
					
				if (!empty($_FILES['userFiles']['name']))
				{
				   $multiple_image = "";
				   $filesCount = count($_FILES['userFiles']['name']);
				   for($i = 0; $i < $filesCount; $i++)
				   {
						$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
						$_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
						$_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
						$_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
						$_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];
						$uploadPath = 'project_image/resize/';
						$config['upload_path'] = $uploadPath;
						$config['allowed_types'] = 'gif|jpg|png';
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						if ($this->upload->do_upload('userFile'))
						{
							$fileData = $this->upload->data();
							$name_array[] = $fileData['file_name'];
							$uploadData[$i]['file_name'] = $fileData['file_name'];
							$uploadData[$i]['created'] = date("Y-m-d H:i:s");
							$uploadData[$i]['modified'] = date("Y-m-d H:i:s");
						}
				    }

				   @$multiple_image = implode(',', $name_array);
				}
					
					
				$response=$this->Add_model->update_project($eid,$category,$title,$thumb_image,$multiple_image);
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