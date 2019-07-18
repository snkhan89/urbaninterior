<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<div id="page-wrapper">

<div class="row">
<div class="col-lg-12"><h3 class="page-header">About-us</h3></div>
</div>

<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">Add About-us</div>
<div class="panel-body">

<?php
if($this->session->flashdata('error')){echo "<div class=alert-danger>".$this->session->flashdata('error')."</div>";}
if($this->session->flashdata('sucess')){echo "<div class=alert-success>".$this->session->flashdata('sucess')."</div>";}

?>


<div class="row">
<div class="col-lg-12" style="width:100%">

<?php if(isset($eid)){$post_url=base_url()."About/update";}else{ $post_url=base_url()."About/add";}?>

<form role="form" id="aboutus" name="aboutus" method="post" action="<?php echo $post_url;?>" enctype="multipart/form-data">
        
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">         
<input type="hidden" id="eid" name="eid" value="<?php if(isset($eid)){echo $eid;}?>" />

<div class="form-group">
<label>Title</label>
<input class="form-control" type="text" name="title" id="title" placeholder="Enter Title" value="<?php if(isset($get_result)){ echo $get_result['title'];}?>
<?php echo set_value("title");?>" />
<b class="error_strings"><?php echo form_error('title'); ?></b>
</div> 


<div class="form-group">
<label>Description</label>
<textarea class="form-control" rows="5" name="Description" id="Description" >
<?php if(isset($get_result)){echo $get_result['description'];}?><?php echo set_value('Description'); ?></textarea>
</div>


<button type="submit" class="btn btn-primary btn-lg btn-block" name="save_question" value="save">Save</button>
</form>
                             
</div>

</div>
<Script>
$(document).ready(function () {

    $('#aboutus').validate({ 
        rules: {
            title: {
                required: true
			},
			Description:{
				required:true
			}
            
			
        },
		messages: {
            title: {
              required: "Please Enter Title"
              
            },
			Description:{
				required : "Please Enter Description"
			}
		},
		submitHandler: function (form) {
              
			 form.submit();
		}
    });

});  
</script>

</div>
</div>
</div>
</div>
</div>


