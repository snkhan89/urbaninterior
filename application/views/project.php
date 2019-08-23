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

<center> 
<?php if(isset($error) && !empty($error)) { ?><div class="err"><?php echo $error; ?></div><?php } ?>
<?php if(isset($sucess) && !empty($sucess)) { ?><div class="success"><?php echo $sucess; ?></div><?php } ?>
<?php
    if($this->session->flashdata('error_login')){echo '<div class="alert alert-danger">'.$this->session->flashdata('error_login')."</div>";}
    if($this->session->flashdata('sucess')){echo '<div class="alert alert-success">'.$this->session->flashdata('sucess')."</div>";}
?>
</center>

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
        <label>Cover Image</label>
        <input type="file" class="form-control" name="cover_image" id="cover_image"/>
        </div>
		<?php echo form_error('cover_image'); ?>
		
		
        <?php if(isset($get_results) && $get_results['thumb_image']!="" || isset($eid)){?>
        <div class="form-group">
        <label>Old Image</label>
        <input type="hidden" name="old_cover" value="<?php if(isset($get_results)){ echo $get_results['thumb_image'];} ?><?php echo set_value('old_cover'); ?>"/>
        
      
        <img src="<?php echo base_url();?>Project_Image/<?php if(isset($get_results)){ echo $get_results['thumb_image'];}else{ echo set_value('thumb_image');  } ?>" title="<?php if(isset($get_results)){ echo $get_results['thumb_image'];} ?>" alt="<?php if(isset($get_results)){ echo $get_results['thumb_image'];} ?>" width="10%" height="10%" />
        </div>
		 <?php }?>
		
		
		
		
		<div class="form-group">
        <img id="blah" src="#"  width="75" height="75"alt="your image" />
		<script>
		$("#blah").hide();
		function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
			$('#blah').attr('src', e.target.result);
			}
			  reader.readAsDataURL(input.files[0]);
			}
		}
		$("#cover_image").change(function(){
		readURL(this);
		$("#blah").show();
		});
		</script>
        </div>
		
		
		<hr> 
		
		<div class="form-group">
        <label>Multiple Image</label>
        <input type="file" id="mimage"  class="form-control" name="userFiles[]" multiple/>
        </div>         
        <?php echo form_error('images'); ?>
        <div class="form-group">
        <div id="dvPreview"></div>
        </div>


<button type="submit" class="btn btn-primary btn-lg btn-block" name="save_question" value="save">Save</button>
</form>
                             
</div>

</div>




</div>
</div>
</div>
</div>
</div>

<script language="javascript" type="text/javascript">
window.onload = function () {
var fileUpload = document.getElementById("mimage");
fileUpload.onchange = function () {
if (typeof (FileReader) != "undefined") {
var dvPreview = document.getElementById("dvPreview");
dvPreview.innerHTML = "";
var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
for (var i = 0; i < fileUpload.files.length; i++) {
var file = fileUpload.files[i];
if (regex.test(file.name.toLowerCase())) {
    var reader = new FileReader();
    reader.onload = function (e) {
    var img = document.createElement("IMG");
	var columnText = document.createTextNode('   ');
    img.height = "100";
    img.width = "100";
    img.src = e.target.result;
	//brs=document.createElement("&nbsp;");
	dvPreview.appendChild(columnText);
    dvPreview.appendChild(img);
	//dvPreview.appenChild(&nbsp;);
    }
    reader.readAsDataURL(file);
    } else {
        alert(file.name + " is not a valid image file.");
        dvPreview.innerHTML = "";
        return false;
    }
 }
    } else {
        alert("This browser does not support HTML5 FileReader.");
                }
            }
        };
    </script>  
