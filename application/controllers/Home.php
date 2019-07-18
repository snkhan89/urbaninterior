<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller 
{
		protected $data;
		public function __construct()
		{   
			parent::__construct();
			date_default_timezone_set('Asia/Kolkata');
			
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->model("Admin_model");
			$this->load->model("Privileges_model");
			$this->load->library('form_validation');
			$this->data["admin"]=$this->Privileges_model->admin();
		    $this->load->view('Header');
			$this->load->view('Sidebar',$this->data);
			$this->load->view('Footer');

			if(!$this->session->userdata('adminpanel_artist'))
			{
						$session_data = $this->session->userdata('adminpanel_artist');
						$data['artist_id'] = $session_data['artist_id'];
						redirect('Login','refresh');
			}
		}
	
	
	
public function Welcome()
{
   $this->load->view('Blank');
}
	
public function Main()
{
  $this->load->view('dashboard');
}
	


	
}?>