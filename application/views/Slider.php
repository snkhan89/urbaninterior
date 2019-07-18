<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<div id="page-wrapper">

<div class="row">
<div class="col-lg-12"><h3 class="page-header">Slider</h3></div>
</div>

<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">Add Main Slider</div>
<div class="panel-body">



<?php
if($this->session->flashdata('error')){echo "<div class=alert-danger>".$this->session->flashdata('error')."</div>";}
if($this->session->flashdata('sucess')){echo "<div class=alert-success>".$this->session->flashdata('sucess')."</div>";}

?>


<div class="row">
<div class="col-lg-12" style="width:100%">

<?php if(isset($eid)){$post_url=base_url()."Slider/update";}else{ $post_url=base_url()."Slider/add";}?>

<form role="form" id="slider" name="slider" method="post" action="<?php echo $post_url;?>" enctype="multipart/form-data">
        
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">         
<input type="hidden" id="eid" name="eid" value="<?php if(isset($eid)){echo $eid;}?>" />

<div class="form-group">
<label>Slider Title</label>
<input class="form-control" type="text" name="title" id="title" placeholder="Enter Title" value="<?php if(isset($get_results)){ echo $get_results['title'];}?>
<?php echo set_value("title");?>" />
<b class="error_strings"><?php echo form_error('title'); ?></b>
</div> 

<div class="form-group">
<label>Slider Image (1920 * 1136)</label>
<input type="file" name="slider_image" id="slider_image"> </br>

<?php if(isset($get_results) && file_exists("slider/".$get_results['main_slider']) && !empty($get_results['main_slider']) ) 
{ ?>
    <img src="<?php echo base_url();?>slider/<?php if(isset($get_results['main_slider'])){echo $get_results['main_slider'];} ?>" alt="Slider Image" width="250px" height="150px" />
<?php } ?>

<input type="hidden" name="old_sliderimage" id="old_sliderimage" value="<?php if(isset($get_results['main_slider'])){echo $get_results['main_slider'];} ?>" />

</div> 



<button type="submit" class="btn btn-primary btn-lg btn-block" name="save_question" value="save">Save</button>
</form>
                             
</div>

</div>
<Script>
$(document).ready(function () {

    $('#slider').validate({ 
        rules: {
            title: {
                required: true
			},
			slider_image:{
                //required: true,
                 accept:"jpg,png,jpeg,gif"				
            }  
            
			
        },
		messages: {
            title: {
              required: "Please Enter Title"
              
            },
			slider_image:{
				//required:"Please select the Image...",
				accept: "Only image type jpg/png/jpeg/gif is allowed"
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


