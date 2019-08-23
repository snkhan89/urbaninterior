<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Add_model extends CI_Model
{
	public function __construct()
	{
			$this->load->model("Stringmodel"); 
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->database();
	}

public function Std($std,$std_name)
{


	$guid=$this->stringmodel->NewGuid();
	$myarray=array('stdid'=>$std,'std'=>$std,'std_name'=>$std_name);
	$this->db->insert('standard',$myarray);
	
	$cnt=$this->db->affected_rows();
	  if(isset($cnt) && $cnt > 0)
	  {
	      return 1;
	  }
	  else
	  {
	      return 2; 
	  }
		
}
public function insert_package($pname,$pprice)
{
$myarray=array('pname'=>$pname,'pprice'=>$pprice);
	$this->db->insert('package',$myarray);
	
	$cnt=$this->db->affected_rows();
	  if(isset($cnt) && $cnt > 0)
	  {
	      return 1;
	  }
	  else
	  {
	      return 2; 
	  }	
}
public function get_package()
{
	$query=$this->db->query("select * from package order by ptime desc");
	if($query->num_rows() > 0)
	{
		foreach ($query->result_array() as $row) {
			$data[]=$row;
		}
		return json_encode($data);
			}
}
public function Product($pcategory,$productname,$image,$productprice,$productsize,$pdesc,$aname,$note)
{
	  $guid=$this->stringmodel->NewGuid();
	 
	  $myarray=array('product_id'=>$guid,'product_category_id'=>$pcategory,'product_name'=>$productname,'cimage'=>$image,'product_desc'=>$pdesc,'product_price'=>$productprice,'product_size'=>$productsize,'artist_name'=>$aname,'note'=>$note);
	  
	  $this->db->insert('product',$myarray);
	  
	            /*if(!empty($multi))
				{
				$ct=explode(',',$multi);
				$c=count($ct);
				for($i=0;$i<$c;$i++)
				{
				$myarrays=array('product_id'=>$guid,'product_image'=>$ct[$i]);
	            $this->db->insert('product_image',$myarrays);
				}
				}
				else{}*/
	  
	  
	  
	  
	  $cnt=$this->db->affected_rows();
	  if(isset($cnt) && $cnt > 0)
	  {
	      return 1;
	  }
	  else
	  {
	      return 2; 
	  }

}





public function question($year,$subject,$semester,$chapter,$type,$desc1,$desc2,$desc3,$pollopt,$match1,$match2,$radio)
{    
 
	
	 $guid=$this->stringmodel->NewGuid5();	
		
  if($type==1)
  {
	 
		  $my_array = array('quest_id'=>$guid,'year'=>$year,'sub'=>$subject,'sem'=>$semester,'chpt'=>$chapter,'question'=>$desc1,'type'=>$type);
		  $this->db->insert('question',$my_array);
		  $q_id = $this->db->insert_id();
		  
		  $guid1=$this->stringmodel->NewGuid5();	
		  foreach($pollopt as $poll)
		  {
			  $myarray1=array('fbid'=>$guid1,'quest_id'=>$guid,'answer'=>$radio);
			  $this->db->insert('f&b',$myarray1);
		  }
		  $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }
  }
  elseif($type==2)
  {
	  
	  
	  $my_array = array('quest_id'=>$guid,'year'=>$year,'sub'=>$subject,'sem'=>$semester,'chpt'=>$chapter,'question'=>$desc2,'type'=>$type);
		  $this->db->insert('question',$my_array);
		  $q_id = $this->db->insert_id();
		  
		  $guid1=$this->stringmodel->NewGuid5();	
		 // foreach($pollopt as $poll)
		  //{
			  $myarray1=array('tfid'=>$guid1,'quest_id'=>$guid,'answer'=>$radio);
			  $this->db->insert('t&f',$myarray1);
		 // }
		  $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }
	  
  }
  elseif($type==3)
  {
	  
	     $my_array = array('quest_id'=>$guid,'year'=>$year,'sub'=>$subject,'sem'=>$semester,'chpt'=>$chapter,'type'=>$type);
		  $this->db->insert('question',$my_array);
		  $q_id = $this->db->insert_id();
		  
		 
		  foreach($match1 as $index=>$poll)
		  {
			  $myarray1=array('quest_id'=>$guid,'match1'=>$poll,'match2'=>$match2[$index]);
			  $this->db->insert('match',$myarray1);
		  }
		  $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }
	  
	  
	  
  }
  elseif($type==4)
  {
	  return 4;
  }
		
		
		
		
		
}

public function fill_in_the_blank($year,$subject,$semister,$chapter,$type,$question,$fill_answer,$a,$fill_option,$board)
{
	
       //print_r(array_merge($fill_answer,$a,$fill_option));
	   	//print_r($a);
	   	
  if($type==1)//fill in the blank
  { 
          $guid=$this->stringmodel->NewGuid5();	
	 
		  $my_array = array('quest_id'=>$guid,'year'=>$year,'sub'=>$subject,'sem'=>$semister,'chpt'=>$chapter,'question'=>$question,'type'=>$type,"board"=>$board);
		  $this->db->insert('question',$my_array);
		  $q_id = $this->db->insert_id();
	
	      $position=1;
		  
		  foreach($fill_answer as $key=>$fans)
		  {
		       
		     
		   
		     if(count($a) > 0)
		     {
		       
		        $guid1=$this->stringmodel->NewGuid5();	
			    $myarray1=array('fbid'=>$guid1,'quest_id'=>$guid,'answer'=>$fans,'image'=>$a[$key],'right_ans'=>$fill_option[$key],'position'=>$position);
			    $this->db->insert('fill_blank',$myarray1);
			    $position++;
		     }
		     else
		     {
		         
		        
		         $guid1=$this->stringmodel->NewGuid5();	
			     $myarray1=array('fbid'=>$guid1,'quest_id'=>$guid,'answer'=>$fans,'image'=>'0','right_ans'=>$fill_option[$key],'position'=>$position);
			     $this->db->insert('fill_blank',$myarray1);
			     $position++;
		         
		     }
		  }
		  $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }
  }
  else if($type==4) // odd man out
  { 

  	$guid=$this->stringmodel->NewGuid5();	
	 
		  $my_array = array('quest_id'=>$guid,'year'=>$year,'sub'=>$subject,'sem'=>$semister,'chpt'=>$chapter,'question'=>$question,'type'=>$type,"board"=>$board);
		  $this->db->insert('question',$my_array);
		  $q_id = $this->db->insert_id();
		  
		
		  $position=1;
		  foreach($fill_answer as $key=>$fans)
		  {
		  	  $guid1=$this->stringmodel->NewGuid5();	
			  $myarray1=array('odd_id'=>$guid1,'quest_id'=>$guid,'answer'=>$fans,'right_ans'=>$fill_option[$key],'position'=>$position);
			  $this->db->insert('odd_out',$myarray1);
			  $position++;
		  }
		  $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }
  }

}

public function true_false($year,$subject,$semister,$chapter,$type,$question,$tfvalue,$board)
{
$guid=$this->stringmodel->NewGuid5();	
		
  if($type==2)
  {
	 
		  $my_array = array('quest_id'=>$guid,'year'=>$year,'sub'=>$subject,'sem'=>$semister,'chpt'=>$chapter,'question'=>$question,'type'=>$type,"board"=>$board,'answer'=>$tfvalue);
		  $this->db->insert('question',$my_array);
		  $q_id = $this->db->insert_id();
		  
		
		 // $guid1=$this->stringmodel->NewGuid5();	
		
			 // $myarray1=array('tfid'=>$guid1,'quest_id'=>$guid,'answer'=>$tfvalue);
			  //$this->db->insert('t&f',$myarray1);
		  $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }
  }

}

public function match_the_following($year,$subject,$semister,$chapter,$type,$match_question,$match_answer,$board,$extra_answer)
{
	if($type==3)
  {
	   $guid=$this->stringmodel->NewGuid5();	
	   $my_array = array('quest_id'=>$guid,'year'=>$year,'sub'=>$subject,'sem'=>$semister,'chpt'=>$chapter,'type'=>$type,"board"=>$board);
		  $this->db->insert('question',$my_array);
		  $q_id = $this->db->insert_id();
		  
	$position=1;
		  foreach($match_question as $index=>$poll)
		  {
		  	
		  		 $guid1=$this->stringmodel->NewGuid5();	 
			  $myarray1=array('quest_id'=>$guid,'match1'=>$poll,'match2'=>$match_answer[$index],"position"=>$position);
			  $this->db->insert('match_answer',$myarray1);
			  $position++;
		  }
		  if(isset($extra_answer))
		  {
		       foreach($extra_answer as $exans)
		  {
		  	if(isset($exans) && $exans!="")
		  	{
		  		 $guid1=$this->stringmodel->NewGuid5();	 
		  	
			  $myarray1=array('quest_id'=>$guid,'match2'=>$exans,"position"=>$position);
			  $this->db->insert('match_answer',$myarray1);
			  $position++;
			  }
		  }

		  }
		  $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }
	  
	  
	  
  }
}

public function one_sentence($year,$subject,$semister,$chapter,$type,$one_question,$one_answer,$board)
{
	if($type==5)
	{
 $guid=$this->stringmodel->NewGuid5();	
		  $my_array = array('quest_id'=>$guid,'year'=>$year,'sub'=>$subject,'sem'=>$semister,'chpt'=>$chapter,'question'=>$one_question,'answer'=>$one_answer,'type'=>$type,"board"=>$board);
		  $this->db->insert('question',$my_array);
		  $q_id = $this->db->insert_id();
		  
		
		  // $guid1=$this->stringmodel->NewGuid5();	
		
			 //  $myarray1=array('one_id'=>$guid1,'quest_id'=>$guid,'one_question'=>$one_question,'one_answer'=>$one_answer);
			 //  $this->db->insert('one_sentence',$myarray1);
		  $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }

	}
}
public function get_question()
{
$query=$this->db->query("select * from question order by timestamp desc");
if($query->num_rows() > 0)
{
	foreach ($query->result_array() as $row) {
		$data[]=$row;
	}
	return json_encode($data);
}


}	   

public function get_standard()
{
$query=$this->db->query("select * from standard order by stime desc");
if($query->num_rows() > 0)
{
	foreach ($query->result_array() as $row) {
		$data[]=$row;
	}
	return json_encode($data);
}	
}	   
public function edit_Std($eid)
{
$query=$this->db->query("select * from standard where stdid='$eid'");
if($query->num_rows() > 0)
{
	foreach ($query->result_array() as $row) {
		$data=$row;
	}
	return json_encode($data);
}		
}
public function edit_question($eid)
{
	$query=$this->db->query("select * from question where quest_id='$eid'");
	if($query->num_rows() > 0)
	{

		foreach ($query->result_array() as $row) {
					
					$data=$row;
		}
		return json_encode($data);
	}
}

//update question


public function fill_in_the_blank_edit($eid,$year,$subject,$semister,$chapter,$type,$question,$fill_answer,$a,$fill_option,$board)
{
	if($type==4)
	{
		$my_array = array('year'=>$year,'sub'=>$subject,'sem'=>$semister,'chpt'=>$chapter,'question'=>$question,'type'=>$type,"board"=>$board);
		  $this->db->where("quest_id",$eid);
		  $this->db->update('question',$my_array);
		
		  
		$count_query=$this->db->query("select max(position)as cnt from odd_out where quest_id='$eid'");
        if($count_query->num_rows() > 0)
        {
        	foreach($count_query->result_array() as $cnt);
        	{
        		$position=$cnt['cnt']+1;
        	}
        }
        else
        {
		  $position=1;
		}
		if(isset($fill_answer))
		{
		  foreach($fill_answer as $key=>$fans)
		  {
		  	if($fans!="")
		  	{
		  	    $guid1=$this->stringmodel->NewGuid5();	
			    $myarray1=array('odd_id'=>$guid1,'quest_id'=>$eid,'answer'=>$fans,'right_ans'=>$fill_option[$key],'position'=>$position);
			    $this->db->insert('odd_out',$myarray1);
			    $position++;
			}
		  }
		}
				  $cnt=$this->db->affected_rows();
				  if(isset($cnt) && $cnt > 0)
				  {
					  return 1;
				  }
				  else
				  {
					  return 2; 
				  }	
		  }
		  else if($type==1)
		  {
		  	  $my_array = array('year'=>$year,'sub'=>$subject,'sem'=>$semister,'chpt'=>$chapter,'question'=>$question,'type'=>$type,'board'=>$board);
		      $this->db->where("quest_id",$eid);
		      $this->db->update('question',$my_array);
		
		  
		$count_query=$this->db->query("select max(position)as cnt from fill_blank where quest_id='$eid'");
        if($count_query->num_rows() > 0)
        {
        	foreach($count_query->result_array() as $cnt);
        	{
        		$position=$cnt['cnt']+1;
        	}
        }else
        {
		  $position=1;
		}
		if(isset($fill_answer))
		{
		  foreach($fill_answer as $key=>$fans)
		  {
		  	if($fans!="")
		  	{
		  	  
		  	  
		  	  
		  	  
		  	  //$guid1=$this->stringmodel->NewGuid5();	
			 // $myarray1=array('fbid'=>$guid1,'quest_id'=>$eid,'answer'=>$fans,'image'=>$a[$key],'right_ans'=>$fill_option[$key],'position'=>$position);
			 // $this->db->insert('fill_blank',$myarray1);
			 // $position++;
			  
			  if(count($a) > 0)
		     {
		       
		        $guid1=$this->stringmodel->NewGuid5();	
			    $myarray1=array('fbid'=>$guid1,'quest_id'=>$eid,'answer'=>$fans,'image'=>$a[$key],'right_ans'=>$fill_option[$key],'position'=>$position);
			    $this->db->insert('fill_blank',$myarray1);
			    $position++;
		     }
		     else
		     {
		         
		        
		         $guid1=$this->stringmodel->NewGuid5();	
			     $myarray1=array('fbid'=>$guid1,'quest_id'=>$eid,'answer'=>$fans,'image'=>'0','right_ans'=>$fill_option[$key],'position'=>$position);
			     $this->db->insert('fill_blank',$myarray1);
			     $position++;
		         
		     }
			  
			  
			  
			  
			  
			  
			  
			}
		  }
		  }
				  $cnt=$this->db->affected_rows();
				  if(isset($cnt) && $cnt > 0)
				  {
					  return 1;
				  }
				  else
				  {
					  return 2; 
				  }	
		  }
}
public function true_false_edit($eid,$year,$subject,$semister,$chapter,$type,$question,$tfvalue,$board)
{
	if($type==2)
	{
	  $my_array = array('year'=>$year,'sub'=>$subject,'sem'=>$semister,'chpt'=>$chapter,'question'=>$question,'answer'=>$tfvalue,'type'=>$type,'board'=>$board);
	  $this->db->where("quest_id",$eid);
		  $this->db->update('question',$my_array);
		  $q_id = $this->db->insert_id();
		  
		
		  $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }	
	}
}
public function match_the_following_edit($eid,$year,$subject,$semister,$chapter,$type,$match_question,$match_answer,$board,$extra_answer)
{
if($type==3)
  {
	   $guid=$this->stringmodel->NewGuid5();	
	   $my_array = array('year'=>$year,'sub'=>$subject,'sem'=>$semister,'chpt'=>$chapter,'type'=>$type,'board'=>$board);
	   $this->db->where("quest_id",$eid);
		  $this->db->update('question',$my_array);
		  $q_id = $this->db->insert_id();
		  
		$count_query=$this->db->query("select max(position)as cnt from match_answer where quest_id='$eid'");
        if($count_query->num_rows() > 0)
        {
        	foreach($count_query->result_array() as $cnt);
        	{
        		$position=$cnt['cnt']+1;
        	}
        }else
        {
		  $position=1;
		}
		if(isset($match_question))
		{
		  foreach($match_question as $index=>$poll)
		  {
		  	if($poll!="" && $match_answer[$index]!="")
		  	{ 
		  		 $guid1=$this->stringmodel->NewGuid5();	 
			  $myarray1=array('quest_id'=>$eid,'match1'=>$poll,'match2'=>$match_answer[$index],"position"=>$position);
			  $this->db->insert('match_answer',$myarray1);
			  $position++;
			}
		  }
		}
		   if(isset($extra_answer))
		{
		  foreach($extra_answer as $exans)
		  {
		  	if(isset($exans) && $exans!="")
		  	{
		  		 $guid1=$this->stringmodel->NewGuid5();	 
		  	
			  $myarray11=array('quest_id'=>$eid,'match2'=>$exans,"position"=>$position);
			  $this->db->insert('match_answer',$myarray11);
			  $position++;
			  }
		  }
		}
		  $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }  
  }	
}
public function one_sentence_edit($eid,$year,$subject,$semister,$chapter,$type,$one_question,$one_answer,$board)
{
	if($type==5)
	{

		  $my_array = array('year'=>$year,'sub'=>$subject,'sem'=>$semister,'chpt'=>$chapter,'question'=>$one_question,'answer'=>$one_answer,'type'=>$type,'board'=>$board);
		  $this->db->where("quest_id",$eid);
		  $this->db->update('question',$my_array);
	
		  $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }
	
	}
}
//update question end
//revison part start
public function insert_revision($year,$subject,$semister,$chapter,$question,$answer,$type)
{
	if($type!=3)
	{
 $guid=$this->stringmodel->NewGuid5();	
		  $my_array = array('quest_id'=>$guid,'year'=>$year,'sub'=>$subject,'sem'=>$semister,'chpt'=>$chapter,'question'=>$question,'answer'=>$answer,'type'=>$type);
		  $this->db->insert('revision',$my_array);
		  $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }
		}
}
public function match_the_following_revision($year,$subject,$semister,$chapter,$type,$match_question,$match_answer)
{
	if($type==3)
  {
	   $guid=$this->stringmodel->NewGuid5();	
	   $my_array = array('quest_id'=>$guid,'year'=>$year,'sub'=>$subject,'sem'=>$semister,'chpt'=>$chapter,'type'=>$type);
		  $this->db->insert('revision',$my_array);
		  $q_id = $this->db->insert_id();
		  
	$position=1;
		  foreach($match_question as $index=>$poll)
		  {
		  	
		  		 $guid1=$this->stringmodel->NewGuid5();	 
			  $myarray1=array('quest_id'=>$guid,'match1'=>$poll,'match2'=>$match_answer[$index],"position"=>$position);
			  $this->db->insert('match_answer',$myarray1);
			  $position++;
		  }
		  $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }
	  
	  
	  
  }	
} 
public function get_revision()
{
	$query=$this->db->query("select * from revision order by timestamp desc");
	if($query->num_rows() > 0)
	{
		foreach($query->result_array() as $row)
		{
			$data[]=$row;
		}
		return json_encode($data);
	}
} 
public function edit_revision($id)
{
$query=$this->db->query("select * from revision where quest_id='$id'");
	if($query->num_rows() > 0)
	{
		foreach($query->result_array() as $row)
		{
			$data=$row;
		}
		return json_encode($data);
	}	
} 
public function update_revision($eid,$year,$subject,$semister,$chapter,$question,$answer,$type)
{
if($type!=3)
	{
 $guid=$this->stringmodel->NewGuid5();	
		  $my_array = array('year'=>$year,'sub'=>$subject,'sem'=>$semister,'chpt'=>$chapter,'question'=>$question,'answer'=>$answer,'type'=>$type);
		  $this->db->where("quest_id",$eid);
		  $this->db->update('revision',$my_array);
		  $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }
		}	
}
public function match_the_following_revision_edit($eid,$year,$subject,$semister,$chapter,$type,$match_question,$match_answer)
{
	if($type==3)
  {
	   $guid=$this->stringmodel->NewGuid5();	
	   $my_array = array('year'=>$year,'sub'=>$subject,'sem'=>$semister,'chpt'=>$chapter,'type'=>$type);
	   $this->db->where("quest_id",$eid);
		  $this->db->update('revision',$my_array);
		  $q_id = $this->db->insert_id();
		  
		$count_query=$this->db->query("select max(position)as cnt from match_answer where quest_id='$eid'");
        if($count_query->num_rows() > 0)
        {
        	foreach($count_query->result_array() as $cnt);
        	{
        		$position=$cnt['cnt']+1;
        	}
        }else
        {
		  $position=1;
		}
		  foreach($match_question as $index=>$poll)
		  {
		  	if($poll!="" && $match_answer[$index]!="")
		  	{ 
		  		 $guid1=$this->stringmodel->NewGuid5();	 
			  $myarray1=array('quest_id'=>$eid,'match1'=>$poll,'match2'=>$match_answer[$index],"position"=>$position);
			  $this->db->insert('match_answer',$myarray1);
			  $position++;
			}
		  }
		  $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }  
  }	
}
public function get_data_chapter_wise($standard,$semister,$subject,$chapter)
{
	$query=$this->db->query("select * from revision where year=? and sem=? and sub= ? and chpt =? order by type",array($standard,$semister,$subject,$chapter));
	if($query->num_rows() > 0)
	{
		foreach($query->result_array() as $row)
		{
			$data[]=$row;
		}
		return json_encode($data);
	}
}
//get_data_chapter_wise_type
public function get_data_chapter_wise_type($standard,$semister,$subject,$chapter)
{
	$query=$this->db->query("select type from revision where year=? and sem=? and sub= ? and chpt =? group by type",array($standard,$semister,$subject,$chapter));
	if($query->num_rows() > 0)
	{
		foreach($query->result_array() as $row)
		{
			$data[]=$row;
		}
		return json_encode($data);
	}
}
public function check_document($year,$subject,$semister,$chapter)
{
	$query=$this->db->query("select year,sub,sem,chpt from revision where year='$year' and sub='$subject' and sem='$semister' and chpt='$chapter'");
	if($query->num_rows() > 0)
	{
		return 1;
	}else
	{
		return 2;
	}
}
public function upload_revision($year,$subject,$semister,$chapter,$document ,$free_trial)
{
	$guid=$this->stringmodel->NewGuid5();	
		  $my_array = array('quest_id'=>$guid,'year'=>$year,'sub'=>$subject,'sem'=>$semister,'chpt'=>$chapter,'document'=>$document,"package"=>$free_trial);
		  $this->db->insert('revision',$my_array);
		  $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }
}
public function upload_revision_edit($eid, $year, $subject, $semister, $chapter, $document ,$free_trial	)
{
$guid=$eid;
		  $my_array = array('year'=>$year,'sub'=>$subject,'sem'=>$semister,'chpt'=>$chapter,'document'=>$document,"package"=>$free_trial);
		  $this->db->where('quest_id',$guid);
		  $this->db->update('revision',$my_array);
		  $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }	
}
public function insert_subject($year,$subject)
{
	$query=$this->db->query("insert into subject(yearid,subject)values(?,?)",array($year,$subject));
	$cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }	
}

public function get_subject()
{
	$this->db->select('*');
	$this->db->from('subject');
	$this->db->order_by('timestamp','desc');
	$query=$this->db->get();
	if($query->num_rows() > 0)
	{
		foreach ($query->result_array() as $row) {
			$data[]=$row;
		}
		return json_encode($data);
	}
}
public function edit_subject($eid)
{
	$query=$this->db->query("select * from subject where subject_id=?",array($eid));
	if($query->num_rows() > 0)
	{
		foreach($query->result_array() as $row)
		{
			$data=$row;
		}
		return json_encode($data);
	}
}

public function update_subject($eid,$year,$subject)
{
  /*$query=$this->db->query("update subject set subject='$subject' where subject_id='$eid'");
  $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }	*/
		  
		  
	$array=array("yearid"=>$year,"subject"=>$subject);
    $this->db->where("subject_id",$eid);
    $this->db->update("subject",$array);
    $cnt=$this->db->affected_rows();
	if(isset($cnt) && $cnt > 0)
	{
		return 1;
	}
	else
	{
		return 2; 
	}		  
}








public function insert_chapter($year,$subject,$chapter_number,$chapter)
{
    $query=$this->db->query("insert into chapter(yearid,subject,chapter,chapter_number)values(?,?,?,?)",array($year,$subject,$chapter,$chapter_number));
    $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }	
    
}
public function get_chapter()
{
    $this->db->select('*');
     $this->db->from('chapter');
     $this->db->order_by('timestamp','desc');
     $query=$this->db->get();
     if($query->num_rows() > 0)
     {
         foreach($query->result_array() as $row)
         {
             $data[]=$row;
         }
         return json_encode($data);
     }
    
}
public function edit_chapter($eid)
{
    $query=$this->db->query("select * from chapter where chapter_id='$eid'");
    if($query->num_rows() > 0)
    {
   foreach($query->result_array() as $row)
   {
       $data=$row;
   }
   return json_encode($data);
    }
   
}
public function update_chapter($eid,$year,$subject,$chapter_number,$chapter)
{
    $array=array("yearid"=>$year,"subject"=>$subject,"chapter_number"=>$chapter_number,"chapter"=>$chapter);
    $this->db->where("chapter_id",$eid);
    $this->db->update("chapter",$array);
     $cnt=$this->db->affected_rows();
		  if(isset($cnt) && $cnt > 0)
		  {
			  return 1;
		  }
		  else
		  {
			  return 2; 
		  }	
}




public function update_std($eid,$std_name,$std)
{
	   $array=array("std"=>$std,"std_name"=>$std_name);
	   $this->db->where("stdid",$eid);
	   $this->db->update("standard",$array);
	   $cnt=$this->db->affected_rows();
	   if(isset($cnt) && $cnt > 0)
	   {
		  return 1;
	   }
	   else
	   {
		  return 2; 
	   }	
}



public function get_board_question()
	{
		$query=$this->db->query("select * from question where board='1' order by timestamp desc");
			if($query->num_rows() > 0)
			{
				foreach ($query->result_array() as $row) 
				{
					$data[]=$row;
				}
				return json_encode($data);
			}
	}


/*------------------Aboutus--------------------*/

public function aboutus($title,$description)
{
		$my_array = array('title'=>$title,'description'=>$description);
		$this->db->insert('about_us',$my_array);
	    $cnt=$this->db->affected_rows();
		if(isset($cnt) && $cnt > 0)
		{
			return 1;
		}
		else
		{
			return 2; 
		}
}


public function get_aboutus()
{
	$query=$this->db->query("select * from about_us order by created_at desc");
	if($query->num_rows() > 0)
	{
		foreach ($query->result_array() as $row) 
		{
			$data[]=$row;
		}
		return json_encode($data);
	}
	else
	{
		return False;
	}
}


public function edit_aboutus($eid)
{
	$query=$this->db->query("select * from about_us where id = $eid");
    if($query->num_rows() > 0)
    {
	   foreach($query->result_array() as $row)
	   {
		   $data=$row;
	   }
       return json_encode($data);
    }
	else
	{
		return False;
	}
}

public function update_aboutus($eid,$title,$description)
{
	   $array=array("title"=>$title,"description"=>$description);
	   $this->db->where("id",$eid);
	   $this->db->update("about_us",$array);
	   $cnt=$this->db->affected_rows();
	   if(isset($cnt) && $cnt > 0)
	   {
		  return 1;
	   }
	   else
	   {
		  return 2; 
	   }	
}

public function status($id)
{
	$query=$this->db->query("UPDATE about_us SET status = IF(status=1, 0, 1) WHERE id ='$id'");
	$query=$this->db->affected_rows();
	if(isset($query) && $query > 0)
	{
	   return 1;
	}
	else
	{
	   return 2; 
	}
}



/*------------------------------Aboutus---------------------*/


public function slider($title,$slider_image)
{
	    $my_array = array('title'=>$title,'main_slider'=>$slider_image);
		$this->db->insert('slider',$my_array);
	    $cnt=$this->db->affected_rows();
		if(isset($cnt) && $cnt > 0)
		{
			return 1;
		}
		else
		{
			return 2; 
		}
}

public function get_slider()
{
	$query=$this->db->query("select * from slider order by created_at desc");
	if($query->num_rows() > 0)
	{
		foreach ($query->result_array() as $row) 
		{
			$data[]=$row;
		}
		return json_encode($data);
	}
	else
	{
		return False;
	}
}

public function edit_slider($eid)
{
	$query=$this->db->query("select * from slider where id = $eid");
    if($query->num_rows() > 0)
    {
	   foreach($query->result_array() as $row)
	   {
		   $data=$row;
	   }
       return json_encode($data);
    }
	else
	{
		return False;
	}
}

public function update_slider($eid,$title,$slider_image)
{
	   $array=array("title"=>$title,"main_slider"=>$slider_image);
	   $this->db->where("id",$eid);
	   $this->db->update("slider",$array);
	   $cnt=$this->db->affected_rows();
	   if(isset($cnt) && $cnt > 0)
	   {
		  return 1;
	   }
	   else
	   {
		  return 2; 
	   }	
}

public function slider_status($id)
{
	$query=$this->db->query("UPDATE slider SET status = IF(status=1, 0, 1) WHERE id ='$id'");
	$query=$this->db->affected_rows();
	if(isset($query) && $query > 0)
	{
	   return 1;
	}
	else
	{
	   return 2; 
	}
}


/*------------------------------------------*/


public function category()
{
	$query=$this->db->query("select * from project_category order by created_at desc");
	if($query->num_rows() > 0)
	{
		foreach ($query->result_array() as $row) 
		{
			$data[]=$row;
		}
		return json_encode($data);
	}
	else
	{
		return False;
	}
}

/*----------------------------------------*/


public function service($title,$description)
{
	    $my_array = array('title'=>$title,'description'=>$description);
		$this->db->insert('services',$my_array);
	    $cnt=$this->db->affected_rows();
		if(isset($cnt) && $cnt > 0)
		{
			return 1;
		}
		else
		{
			return 2; 
		}
}


public function get_service()
{
	$query=$this->db->query("select * from services order by created_at desc");
	if($query->num_rows() > 0)
	{
		foreach ($query->result_array() as $row) 
		{
			$data[]=$row;
		}
		return json_encode($data);
	}
	else
	{
		return False;
	}
}


public function edit_service($eid)
{
	$query=$this->db->query("select * from services where id = $eid");
    if($query->num_rows() > 0)
    {
	   foreach($query->result_array() as $row)
	   {
		   $data=$row;
	   }
       return json_encode($data);
    }
	else
	{
		return False;
	}
}




public function update_service($eid,$title,$description)
{
	   $array=array("title"=>$title,"description"=>$description);
	   $this->db->where("id",$eid);
	   $this->db->update("services",$array);
	   $cnt=$this->db->affected_rows();
	   if(isset($cnt) && $cnt > 0)
	   {
		  return 1;
	   }
	   else
	   {
		  return 2; 
	   }	
}




public function service_status($id)
{
	$query=$this->db->query("UPDATE services SET status = IF(status=1, 0, 1) WHERE id ='$id'");
	$query=$this->db->affected_rows();
	if(isset($query) && $query > 0)
	{
	   return 1;
	}
	else
	{
	   return 2; 
	}
}



/*------------------------------------------------------------*/


/*public function project($category,$title,$image,$datainfo)
{
	    $my_array = array('category'=>$category,'title'=>$title,'thumb_image'=>$image);
		$this->db->insert('project',$my_array);
		$insert_id = $this->db->insert_id();
		
		foreach($datainfo as $img)
		{
			$myarray = array('project_id'=>$insert_id,'image'=>$img['name']);
			$this->db->insert('project_details',$myarray);
		}
		
	    $cnt=$this->db->affected_rows();
		if(isset($cnt) && $cnt > 0)
		{
			return 1;
		}
		else
		{
			return 2; 
		}
}*/



public function project($category,$title,$cimage,$multiple_image)
{
	
	$this->db->trans_start();
	
	$array = array('category'=>$category,'title'=>$title,'thumb_image'=>$cimage);
	$this->db->insert("project",$array);
	$lastid = $this->db->insert_id();
	if (isset($multiple_image) && $multiple_image != "")
	{
		$mmultiple_image = explode(",", $multiple_image);
		$p = 1;
		foreach($mmultiple_image as $row)
		{
			$query = $this->db->query("insert into project_details(project_id,image)values('".$lastid."','".$row."')");
			$p++;
		}
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return false;
		}
		else
		{
			$this->db->trans_commit();
			return true;
		}
		
	}
	 
 }


public function get_project()
{
	$query=$this->db->query("select * from project order by created_at desc");
	if($query->num_rows() > 0)
	{
		foreach ($query->result_array() as $row) 
		{
			$data[]=$row;
		}
		return json_encode($data);
	}
	else
	{
		return False;
	}
	
}




public function edit_project($eid)
{
	$query=$this->db->query("select * from project where id = $eid");
    if($query->num_rows() > 0)
    {
	   foreach($query->result_array() as $row)
	   {
		   $data=$row;
	   }
       return json_encode($data);
    }
	else
	{
		return False;
	}
}



public function update_project($eid,$category,$title,$thumb_image,$multiple_image)
{
	   $array=array("category"=>$category,"title"=>$title,"thumb_image"=>$thumb_image);
	   $this->db->where("id",$eid);
	   $this->db->update("project",$array);
	   $cnt=$this->db->affected_rows();
	   if(isset($cnt) && $cnt > 0)
	   {
		  if(!empty($multiple_image))
		  {
			  $mmultiple_image = explode(",", $multiple_image);
			  $p = 1;
			  foreach($mmultiple_image as $row)
			  {
				$query = $this->db->query("insert into project_details(project_id,image)values('".$eid."','".$row."')");
				$p++;
			  }
		  }
		  
		  return true;
	   }
	   else
	   {
		  return false; 
	   }	
}



public function Project_status($id)
{
	$query=$this->db->query("UPDATE project SET status = IF(status=1, 0, 1) WHERE id ='$id'");
	$query=$this->db->affected_rows();
	if(isset($query) && $query > 0)
	{
	   return 1;
	}
	else
	{
	   return 2; 
	}
}














}?>