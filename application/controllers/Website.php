<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Website extends CI_Controller
{
    protected $data;
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->library('session');
        $this->load->helper('url');
    }

	public function index()
	{
        $this->load->model("Website_model");
        $data['slider'] = $this->Website_model->get_slider();
        $data['about_us'] = $this->Website_model->get_about_us();
        $data['services'] = $this->Website_model->get_services();
        $data['projects'] = $this->Website_model->get_projects();
        $data['categories'] = $this->Website_model->get_categories();
//        var_dump($data);
//        exit;
	    $data['title'] = 'Urban Interior Works';
        $this->load->view('website',$data);
	}

	public function projectDetail(){
        $this->load->model("Website_model");
        $data['title'] = 'Urban Interior Works';
        $this->load->view('website_projects',$data);
    }







	
}

?>