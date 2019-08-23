<?php
defined('BASEPATH') OR exit('No direct script access allowed.');

/**
 * Enhanced Email library by CI Bootstrap 3
 */
class MY_Email extends CI_Email {

	protected $CI;

	public function __construct(array $config = array())
	{
		parent::__construct($config);

		$this->CI =& get_instance();

	}

	public function send_contact_mail($email_tmpl_data)
	{

		$view_data['email_info'] = $email_tmpl_data;

		$message = $this->CI->load->view('email/contact', $view_data, TRUE);

		$this->CI->email->from($email_tmpl_data['email_id']);
		$this->CI->email->to('sarverkhan89@gmail.com');
        //$this->CI->email->cc('another@another-example.com');

		$this->CI->email->subject('Contact Us');

		$this->CI->email->message($message);

		$this->CI->email->send();

    }

	public function sendSms($mobileno,$message)
	{
		$authKey = "132369ASrpIoUX7m8589813a8";

		//Multiple mobiles numbers separated by comma
		$mobileNumber = '91'.$mobileno;
		//Sender ID,While using route4 sender id should be 6 characters long.
		$senderId = "McXtra";
		//Your message to send, Add URL encoding here.
		$message = urlencode($message);
		//Define route
		$route = 4;
		//Prepare you post parameters
		$postData = array(
		    'authkey' => $authKey,
		    'mobiles' => $mobileNumber,
		    'message' => $message,
		    'sender' => $senderId,
		    'route' => $route,
			'response'=>'json'
		);
		//API URL
		$url="https://control.msg91.com/api/sendhttp.php";

		// init the resource
		$ch = curl_init();
		curl_setopt_array($ch, array(
		    CURLOPT_URL => "$url",
   			CURLOPT_RETURNTRANSFER => true,
   			CURLOPT_CUSTOMREQUEST => "POST",
   			CURLOPT_POSTFIELDS => $postData,
   			CURLOPT_HTTPHEADER => array("authkey:132369ASrpIoUX7m8589813a8",
       									"content-type: multipart/form-data")
			));

		//Ignore SSL certificate verification
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		//get response
		$output = curl_exec($ch);

		$return_array = array();

		$output = json_decode($output);

		if(curl_errno($ch))
		{
		    $return_array['message'] = 'error';

			$return_array['type'] = 'error';
		}
		else
		{
			$return_array['message'] = $output->message;

			$return_array['type'] = $output->type;
		}


		
		curl_close($ch);
		return $return_array;
	}

}
