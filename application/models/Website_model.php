<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Website_model extends CI_Model
{
	public function __construct()
	{
		//$this->load->model("stringmodel"); 
		$this->load->helper('url');
		$this->load->helper('cookie');
		$this->load->database();
	}


public function get_slider()
{
		$this->db->select('*'); 
		$this->db->from('slider');
        $this->db->where('status',1);
		$this->db->order_by('id','desc');
		$query = $this->db->get();
        if($query->num_rows() > 0)
        {
            foreach ($query->result_array() as $row)
            {
                $data[] = $row;
            }
            return $data;
        }
}


    public function get_about_us()
    {
        $this->db->select('*');
        $this->db->from('about_us');
        $this->db->where('status',1);
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            foreach ($query->result_array() as $row)
            {
                $data[] = $row;
            }
            return $data;
        }
    }

   
}