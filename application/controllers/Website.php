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
	    $data['title'] = 'Urban Interior Works';
        $this->load->view('website',$data);
	}







	
}

?>