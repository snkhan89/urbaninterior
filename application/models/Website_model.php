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

    public function get_services()
    {
        $this->db->select('*');
        $this->db->from('services');
        $this->db->where('status',1);
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

    public function get_categories()
    {
        $this->db->select('*');
        $this->db->from('project_category');
        $this->db->where('status',1);
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

    public function get_projects()
    {
        $this->db->select('project.*,project_category.category_name');
        $this->db->from('project');
        $this->db->join('project_category', 'project.category = project_category.id');
        $this->db->where('project.status',1);
        $this->db->where('project_category.status',1);
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

    public function get_project_details($id){
        $this->db->select('project.title,project_details.*');
        $this->db->from('project_details');
        $this->db->join('project', 'project.id = project_details.project_id');
        $this->db->where('project_id',$id);
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