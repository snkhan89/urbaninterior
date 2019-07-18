<div id="page-wrapper">
<div class="row">
<div class="col-lg-12">
<h3 class="page-header">Project</h3></div>
</div>

<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">Add Project</div>
<div class="panel-body">

<?php
if($this->session->flashdata('error')){echo "<div class=alert-danger>".$this->session->flashdata('error')."</div>";}
if($this->session->flashdata('sucess')){echo "<div class=alert-success>".$this->session->flashdata('sucess')."</div>";}

?>


<div class="row">
<div class="col-lg-12" style="width:100%">

<?php if(isset($eid)){$post_url=base_url()."Project/update";}else{ $post_url=base_url()."Project/add";}?>

<form role="form" method="post" action="<?php echo $post_url;?>" enctype="multipart/form-data">
        
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">  
       
<input type="hidden" id="eid" name="eid" value="<?php if(isset($eid)){echo $eid;}?>" />

<div class="form-group">
<label>Selects Project Category</label>
<select class="form-control" name="category" id="category" required>
<option value="">select category</option>
<?php 
if(isset($category))
{
   foreach($category as $category)
   {?>
   <option value="<?php echo $category['id'];?>"<?php echo set_select('category', $category['id'], False);?>
   <?php if(isset($get_results) && $get_results['category'] == $category['id'] ){  echo "selected";  }?>>
   <?php echo ucwords($category['category_name']); ?></option>
   <?php 
   }
   
 
  

}  ?>

</select>
</div>


<div class="form-group">
<label>Project Title</label>
<input class="form-control" type="text" name="title" id="title" placeholder="Enter Title" value="<?php if(isset($get_results)){ echo $get_results['title'];}?>
<?php echo set_value("title");?>" />
<b class="error_strings"><?php echo form_error('title'); ?></b>
</div> 

 <hr>
 
<div class="form-group">
<label>Thumbnail Image</label>
<input type="file" name="thumb_image" id="thumb_image"> </br>

<?php if(isset($get_results) && file_exists("Project_Image/".$get_results['thumb_image']) && !empty($get_results['thumb_image']) ) 
{ ?>
    <img src="<?php echo base_url();?>Project_Image/<?php if(isset($get_results['thumb_image'])){echo $get_results['thumb_image'];} ?>" alt="Image" width="250px" height="150px" />
<?php } ?>

<input type="hidden" name="old_thumbimage" id="old_thumbimage" value="<?php if(isset($get_results['thumb_image'])){echo $get_results['thumb_image'];} ?>" />

</div> 

<hr> 

<!--<div class="form-group">
<label>Project Multiple Image</label>
<input type="file" name="multiple_image" id="multiple_image"> </br>
</div> -->




<button type="submit" class="btn btn-primary btn-lg btn-block" name="save_question" value="save">Save</button>
</form>
                             
</div>

</div>




</div>
</div>
</div>
</div>
</div>


