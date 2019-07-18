<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Viewmodel extends CI_Model
{
    public function __construct()
	 {
            parent::__construct();
		    $this->load->model("stringmodel"); 
			$this->load->helper('url');
			$this->load->library('session');
			
     }

    public function count_total_rows($table_name)
    {
        return $this->db->count_all("$table_name");
    }
	
	
   


public function insurer() 
{
	$this->db->select('*');
	$this->db->from('ci_insurers');
	$this->db->order_by("created_on");
	$query = $this->db->get();
	if($query->num_rows() > 0) 
	{
	  foreach ($query->result() as $row) 
	{
	  $data[] = $row;
	}
	  return json_encode($data);
	}
	return false;
} 



public function Fetch_Order() 
{
	$this->db->select('*');
	$this->db->from('standard');
//	$this->db->order_by("timestamp","desc");
	$query = $this->db->get();
	if($query->num_rows() > 0) 
	{
	  foreach ($query->result() as $row) 
	{
	  $data[] = $row;
	}
	  return json_encode($data);
	}
	return false;
} 



public function subject()
{
	$this->db->select('*');
	$this->db->from('subject');
	$this->db->order_by("timestamp","desc");
	$query = $this->db->get();
	if($query->num_rows() > 0) 
	{
	  foreach ($query->result() as $row) 
	{
	  $data[] = $row;
	}
	  return json_encode($data);
	}
	return false;
	
}

public function semister()
{
	$this->db->select('*'); 
	$this->db->from('semister');
	$this->db->order_by("timestamp","desc");
	$q = $this->db->get();
	if($q->num_rows() > 0)
	{
		foreach ($q->result_array() as $row)
		{
		  $data[] = $row;
		}
		return json_encode($data);
	}
}


public function chapter()
{
	$this->db->select('*');
	$this->db->from('chapter');
	$this->db->order_by("timestamp","desc");
	$query = $this->db->get();
	if($query->num_rows() > 0) 
	{
	     foreach ($query->result() as $row) 
	{
	     $data[] = $row;
	}
	     return json_encode($data);
	}
	     return false;
}




}?>