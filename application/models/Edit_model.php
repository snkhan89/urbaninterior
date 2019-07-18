<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class edit_model extends CI_Model
{
	public function __construct()
	{
			$this->load->model("stringmodel"); 
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
	}
	
function generate_thumb($filename)
{
    
    preg_match('/(?<extension>\.\w+)$/im', $filename, $matches);
    $extension = $matches['extension'];
    $thumbnail = preg_replace('/(\.\w+)$/im', '', $filename) . '_thumb' . $extension;
    return $thumbnail;
}
   
  
function generate_thumb2($filename)
{
	  $imgarr=explode('.',$filename);
	  $thumb_name=$imgarr[0].'_thumb';
	  $thumbnail=$thumbimgname.'.'.$imgarr[1];
	  return $thumbnail;
}


	
	
public function get_artist($id)
{
		$this->db->select('*'); 
		$this->db->from('artist');
		$my_array = array('artist_id' => $id);
		$this->db->where($my_array);
		$this->db->limit(1);
		$q = $this->db->get();
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $row)
			{
			  $data = $row;
			}
			return json_encode($data);
		}
}



public function update_artist($eid,$a_name,$password,$email,$mobile,$address,$gender)
{
	   $my_array = array('a_name'=>$a_name,'password'=>$password,'a_email'=>$email,'a_number'=>$mobile,'address'=>$address,'a_gender'=>$gender);
	   $this->db->where("artist_id",$eid);
	   $this->db->update("artist",$my_array);
	   $cnt=$this->db->affected_rows();
	   if(isset($cnt) && $cnt > 0)
	   {
		  return json_encode(1);
	   }
	   else
	   {
		  return json_encode(2); 
	   }
}	




public function get_product($id)
{
	    $this->db->select('*'); 
		$this->db->from('product');
		$my_array = array('product_id'=>$id);
		$this->db->where($my_array);
		$this->db->limit(1);
		$q = $this->db->get();
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $row)
			{
			  $data = $row;
			}
			return json_encode($data);
		}
	
	
	}




public function update_product($eid,$pcategory,$productname,$image,$productprice,$productsize,$pdesc,$aname,$note)
{
	  $my_array=array('product_category_id'=>$pcategory,'product_name'=>$productname,'cimage'=>$image,'product_desc'=>$pdesc,'product_price'=>$productprice,'product_size'=>$productsize,'artist_name'=>$aname,'note'=>$note);
	   $this->db->where("product_id",$eid);
	   $this->db->update("product",$my_array);
	   $cnt=$this->db->affected_rows();
	   if(isset($cnt) && $cnt > 0)
	   {
		  return json_encode(1);
	   }
	   else
	   {
		  return json_encode(2); 
	   }

}




public function get_order($id)
{
	    $this->db->select('*'); 
		$this->db->from('bill');
		$my_array = array('bill_id'=>$id);
		$this->db->where($my_array);
		$this->db->limit(1);
		$q = $this->db->get();
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $row)
			{
			  $data = $row;
			}
			return json_encode($data);
		}
}



public function Fetch_billitem($id)
{
	    $this->db->select('*'); 
		$this->db->from('bill_item');
		$my_array = array('bill_id'=>$id);
		$this->db->where($my_array);
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




public function update_billitem($id,$status)
{
	   $myarray=array('product_status'=>$status);
	   $this->db->where("bill_item_id",$id);
	   $this->db->update("bill_item",$myarray);
	   $cnt=$this->db->affected_rows();
	   if(isset($cnt) && $cnt > 0)
	   {
		  return json_encode(1);
	   }
	   else
	   {
		  return json_encode(2); 
	   }
}

//-----------------------------------------------------------------------------------------------------//



public function get_tax($id)
{
	    $this->db->select('*'); 
		$this->db->from('tax');
		$my_array = array('tax_id'=>$id);
		$this->db->where($my_array);
		$this->db->limit(1);
		$q = $this->db->get();
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $row)
			{
			  $data = $row;
			}
			return json_encode($data);
		}
}



public function update_tax($eid,$tname,$tpercent)
{
	   $myarray=array('taxname'=>$tname,'taxpercentage'=>$tpercent);
	   $this->db->where("tax_id",$eid);
	   $this->db->update("tax",$myarray);
	   $cnt=$this->db->affected_rows();
	   if(isset($cnt) && $cnt > 0)
	   {
		  return json_encode(1);
	   }
	   else
	   {
		  return json_encode(2); 
	   }
}




public function get_commission($id)
{
	    $this->db->select('*'); 
		$this->db->from('commission_slot');
		$my_array = array('commissionid'=>$id);
		$this->db->where($my_array);
		$this->db->limit(1);
		$q = $this->db->get();
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $row)
			{
			  $data = $row;
			}
			return json_encode($data);
		}
}



public function update_commission($eid,$cpercent)
{
	   $myarray=array('commission'=>$cpercent);
	   $this->db->where("commissionid",$eid);
	   $this->db->update("commission_slot",$myarray);
	   $cnt=$this->db->affected_rows();
	   if(isset($cnt) && $cnt > 0)
	   {
		  return json_encode(1);
	   }
	   else
	   {
		  return json_encode(2); 
	   }
}


public function get_slider($id)
{
	    $this->db->select('*'); 
		$this->db->from('mainslider');
		$my_array = array('mid'=>$id);
		$this->db->where($my_array);
		$this->db->limit(1);
		$q = $this->db->get();
		if($q->num_rows() > 0)
		{
			foreach ($q->result() as $row)
			{
			  $data = $row;
			}
			return json_encode($data);
		}
}


public function update_slider($eid,$title,$image)
{
	   $myarray=array('title'=>$title,'image'=>$image);
	   $this->db->where("mid",$eid);
	   $this->db->update("mainslider",$myarray);
	   $cnt=$this->db->affected_rows();
	   if(isset($cnt) && $cnt > 0)
	   {
		  return json_encode(1);
	   }
	   else
	   {
		  return json_encode(2); 
	   }
}


   
	   


}?>