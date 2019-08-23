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
        $this->load->model("Website_model");
        $this->load->library('form_validation');
    }

	public function index()
	{

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
        if($this->uri->segment(3)) {
            $data['title'] = 'Urban Interior Works';
            $data['details'] = $this->Website_model->get_project_details($this->uri->segment(3));
            $this->load->view('website_projects', $data);
        }
    }

    public function contact(){
        if ($this->input->is_ajax_request()) {
            $json_array = array();

            $json_array['status'] = false;

            $message = $this->input->post('comment');
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_message('required', ' {field} is required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_message('required', ' {field} is required');

            if ($this->form_validation->run() == FALSE) {
                $json_array['message'] = 'Please try again!';
            } else {
                $result = $this->Website_model->contact($name,$email,$message);
                if($result){
                    $this->load->library('email');
                    $email_tmpl_data['subject'] = "Your account has been created";
                    $email_tmpl_data['email_id'] = $email;
                    $email_tmpl_data['name'] = $name;
                    $email_tmpl_data['message'] = $message;
                    $this->email->send_contact_mail($email_tmpl_data);
                    $json_array['status'] = true;
                    $json_array['message'] = 'Thank you. Our representative will contact you soon.';
                }else{
                    $json_array['message'] = 'Please try again!';
                }

            }
            echo json_encode($json_array);
        }
    }







	
}

?>