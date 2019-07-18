<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model
{
	public function __construct()
	{
		//$this->load->model("stringmodel"); 
		$this->load->helper('url');
		$this->load->helper('cookie');
		$this->load->database();
	}


public function get_admin_login($UserName,$Password)
{
		$this->db->select('*'); 
		$this->db->from('login');
		//$where=array('a_email'=>$UserName,'password'=>md5($Password),'status'=>1);
		$where=array('username'=>$UserName,'password'=>md5($Password));
		$this->db->where($where);
		$this->db->limit(1);
		$query = $this->db->get();
		if($query ->num_rows() > 0)
		{
			    $muser = array();
				foreach ($query->result() as $row)
				{
				   $muser = array('id'=>$row->id,'username'=>$row->username);
				   $this->session->set_userdata('adminpanel_artist',$muser);
				}
			    return 1;
        }
        else
        {
           return 2;
        }
}





		 
public function user_Verify($user,$OTP)
   {
		$this->db->select('*'); 
		$this->db->from('muser_details');
		$where ="(muser_id='".$user."')";
		$where ="(otp='".$OTP."')";
        $this->db->where($where);
		$this->db->limit(1);
		$query = $this->db->get();
		if($query -> num_rows() == 1)
         {
           $my_array = array('user_status'=>'1');
		   $this->db->where('muser_id',$user);
		   $this->db->update('muser_details',$my_array);
		  
		return 1; 
		
		 }
        else
         {
          return 2;
          }
		
         }
   
   
   
   
   
}