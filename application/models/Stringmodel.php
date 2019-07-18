<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class stringmodel extends CI_Model
{
	public function __construct()
	{
		//$this->load->database();
	}
	function NewGuid() { 
    $s = strtoupper(md5(uniqid(rand(),true))); 
    $guidText = 
        substr($s,0,8) . '_' . 
        substr($s,8,4) . '_' . 
        substr($s,12,4). '_' . 
        substr($s,16,4). '_' . 
        substr($s,20); 
    	return $guidText;
	}
		function NewGuid5() { 
    $s = strtoupper(md5(uniqid(rand(),true))); 
    $guidText = 
        substr($s,0,5);
    	return $guidText;
	}
	
	function random_auth_number($length) 
	{
		$randomCode=mt_rand(100000,999999);
   		return str_shuffle($randomCode);
    }
}
?>