<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Form_validation extends CI_Form_validation {

	public function __construct()
  {
        parent::__construct();
  }


	public function cbK_date_valid($date)
 	{
		$jsDateTS = strtotime($date);
		if ($jsDateTS !== false)
		{
				return true;
		}
		else
		{
			$CI =& get_instance();
			$CI->form_validation->set_message('cbK_date_valid', 'select valid date');
			return false;
		}
 	}

 	public function cbk_selectbox_valid($value)
 	{
 		if($value != "")
    {
 			return true;
    }
 		else
 		{
 			$CI =& get_instance();
 			$CI->form_validation->set_message('cbk_selectbox_valid', 'The field is required');
  		return false;
 		}
 	}

  public function cbK_alphanumericwithsym($str)
  {
      if ( !preg_match('/^[a-z0-9 %.,\-]+$/i',$str) )
      {
          $CI =& get_instance();
          $CI->form_validation->set_message('cbK_alphanumericwithsym', 'Letters, numbers and symbols(% and ,) only please');
          return false;
      }
  }


}
