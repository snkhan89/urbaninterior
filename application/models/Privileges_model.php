<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Privileges_model extends CI_Model
{
	public function __construct()
	{
		$this->load->library('session');
		$this->load->helper('url');
	}
	
	


	  function admin() 
	  { 
	  
			$a=array();
			
			//$a['dashboard']=array('DASHBOARD'=>'Home/Main');
			//$a['product']=array('ADD PRODUCT'=>'Product/form','VIEW PRODUCT'=>'Product/view');
			//$a['order']=array('VIEW ORDER'=>'Order/view');
	          
			
			//$a['question']=array('ADD QUESTION'=>'Product/form','VIEW QUESTION'=>'Product/view');
			//$a['board']=array('ADD BOARD QUESTION'=>'Board/form','VIEW BOARD QUESTION'=>'Board/view');
			
			//$a['std']=array('ADD STANDARD'=>'Std/form','VIEW STANDARD'=>'Std/view');
			//$a['subject']=array('ADD SUBJECT'=>'Subject','VIEW SUBJECT'=>'Subject/view');
		//$a['revision']=array('Add Revision'=>'Revision','View Revision'=>'Revision/view',"View Chapter"=>"Revision/chapter");
			//$a['package']=array('Add Package'=>'Package','View Package'=>'Package/view');
			//$a['create_test']=array('Create Test'=>'Create_test');
			//$a['std']=array('VIEW ORDER'=>'Order/view');
			
			
			//$a['health']=array('VIEW ORDER'=>'Order/view');
			
			//$a['chapter']=array('ADD CHAPTER'=>'Chapter','VIEW CHAPTER'=>'Chapter/view');
			//$a['health']=array('ADD Health'=>'Health','VIEW Health'=>'Health/view');
			
			$a['about_us']=array('Add About'=>'About','View About'=>'About/view');
			$a['slider']=array('Add Slider'=>'Slider/form','View Slider'=>'Slider/view');
			
			$a['project']=array('Add Project'=>'Project','View Project'=>'Project/view');
			
			$a['service']=array('Add Service'=>'Service','View Service'=>'Service/view');
			
			$a['enquire']=array('View Enquire'=>'Enquire/view');
			
			return $a;
	  
	  
	  }	
/*
function menu_permission()
{
	
	if(isset($this->session->userdata['adminpanel_pd']) && !empty($this->session->userdata['adminpanel_pd']))
	{
			 $role_id=$this->session->userdata['adminpanel_pd']['type'];
			 if(isset($role_id) && $role_id==1)
			 {
				 //$data=$this->superadmin();
				   $data=$this->admin();
			 }
			 else if(isset($role_id) && $role_id==2)
			 {
				 $data=$this->admin_sub();
			 }
			 else if(isset($role_id) && $role_id==3)
			 {
				 $data=$this->artist();
			 }
			 else
			 {
				 $data="";
			 }
	}
	else
	{
		 $data="";
	}
		return $data;
}	


function admin() 
{ 

$a=array();

$a['Home']=array('CREATE ADMIN'=>'Admin/form','VIEW ADMIN'=>'Admin/view');
$a['dashboard']=array('DASHBOARD'=>'Home/Main');
$a['user']=array('USER DETAILS'=>'Register/view');
$a['Mainslider']=array('ADD MAINSLIDER'=>'Mainslider/form','VIEW MAINSLIDER'=>'Mainslider/view');
$a['Category']=array('Add Category'=>'Category','View Category'=>'Category/view','Add Subcategory'=>"Subcategory","View Subcategory"=>"Subcategory/view");
$a['Artist']=array('ADD ARTIST'=>'Artist/form','VIEW ARTIST'=>'Artist/view');
$a['size']=array('ADD SIZE'=>'Size/form','VIEW SIZE'=>'Size/view');
$a['sofa']=array('ADD SOFA'=>'Sofa/form','VIEW SOFA'=>'Sofa/view');
$a['product']=array('ADD PRODUCT'=>'Product/form','VIEW PRODUCT'=>'Product/view');
$a['order']=array('VIEW ORDER'=>'Order/view');
$a['tax']=array('ADD TAX'=>'Tax/form','VIEW TAX'=>'Tax/view');
$a['comsion']=array('ADD COMMISSION'=>'Commission/form','VIEW COMMISSION'=>'Commission/view');
$a['reports']=array('VIEW ORDER REPORTS'=>'Reports/view');
$a['frame']=array('ADD FRAME'=>'Frame/form','VIEW FRAME'=>'Frame/view');

$a['mails']=array('SEND MAIL'=>'Mails/form');

$a['notify']=array('Notification'=>'Notification/view','Blocked Product'=>'Notification/reject');


return $a;


}	


function admin_sub()
{
	$a=array();
	
	
	$a['product']=array('ADD PRODUCT'=>'Product/form','VIEW PRODUCT'=>'Product/view');
	
	
	return $a;
	}


function artist()
{
	$a=array();
	
	
	
	
	
	
	return $a;
	}

*/

}?>