<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AdminPanel</title>

   
<link href="<?php echo base_url();?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>dist/css/sb-admin-2.css" rel="stylesheet">
<link href="<?php echo base_url();?>bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<style>
.error_strings {color: #F00;}
.sucess_string{color:#0F0}
</style>
 
</head>
<body>

<div class="container">
    
<div class="row">
        
<div class="col-md-4 col-md-offset-4">

            
<div class="login-panel panel panel-default">

<div class="panel-heading">
<h3 class="panel-title"><img alt="" src="<?php echo base_url();?>css-admin/school.png"> PLEASE SIGN IN</h3>
</div>
                    

<div class="panel-body">
    
<?php
if($this->session->flashdata('error')){echo "<div class=error_strings>".$this->session->flashdata('error')."</div>";}
if($this->session->flashdata('sucess')){echo "<div class=success_strings>".$this->session->flashdata('sucess')."</div>";}
?>
            
<form role="form" action="<?php echo base_url();?>Login/Admin_Login" method="post" enctype="multipart/form-data">
<fieldset>
                            
<!--<div class="form-group">
<select class="form-control" name="type" id="type" >
<option value="">select type</option>
<option value="1">superadmin</option>
<option value="2">admin</option>
</select>
<b class="error_strings"><?php echo form_error('type'); ?></b>
</div>-->

<div class="form-group">
<input class="form-control" placeholder="Email" name="UserName" id="UserName" type="UserName" autofocus>
<b class="error_strings"><?php echo form_error('UserName'); ?></b>
</div>
                                

<div class="form-group">
<input class="form-control" placeholder="Password" name="Password" id="Password" type="Password" >
<b class="error_strings"><?php echo form_error('Password'); ?></b></div>
                                
<!--<div class="checkbox">
<label>
<input name="remember" type="checkbox" value="Remember Me">Remember Me
</label>
</div>-->
                                
<input type="submit" class="btn btn-lg btn-success btn-block save" name="" id="login-btn" value="Login" />

</fieldset>
</form>

</div>
</div>
</div>
</div>
</div>

   
<script src="<?php echo base_url();?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>bower_components/metisMenu/dist/metisMenu.min.js"></script>
<script src="<?php echo base_url();?>dist/js/sb-admin-2.js"></script>

</body>
</html>
