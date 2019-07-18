<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller 
{
    protected $data;
	public function __construct()
    {   
        parent::__construct();
		date_default_timezone_set('Asia/Kolkata');
		
		$this->load->library('session');
	    $this->load->helper('url');
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->model("Admin_model");
	}
	
	
public function index()
{
  $this->load->view('Login_form');
}
	
	
public function Login()
{
	
	$this->load->view('Login_form');
    $this->load->view('Footer');
}

	
public function Logout()
{
	$this->session->sess_destroy();
	redirect('Login');
}
	
	
	
public function Admin_Login()
{
	
	$UserName = $this->input->post('UserName');
	$Password = $this->input->post('Password');

   
	$this->form_validation->set_rules('UserName', 'Email', 'required');
	$this->form_validation->set_rules('Password', 'Password', 'required');

	if($this->form_validation->run() == FALSE)
	{
	   $this->load->view('Login_form',$this->data);
	}
	else
	{
		  $getuser_det = $this->Admin_model->get_admin_login($UserName,$Password);
		  if($getuser_det==1)
		  {
			 $this->session->set_flashdata('sucess',"LOGIN SUCCESSFULLY.");
			 redirect('Home/Welcome');
		  }
		  else if($getuser_det==2) 
		  {
			$this->session->set_flashdata('error',"INCORRECT USERNAME AND PASSWORD! OR TYPE");
			redirect('Login/Login');
		  }	
	
	}



	
	
}
	
	
	
} ?>
