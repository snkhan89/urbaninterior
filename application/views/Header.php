<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>AdminPanel</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<link href="<?php echo base_url();?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>dist/css/sb-admin-2.css" rel="stylesheet">
<link href="<?php echo base_url();?>bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
<!--<link href="<?php echo base_url();?>bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">-->


<!--<script type="text/javascript" src="<?php echo base_url();?>js/deleteconfirm.js" ></script>-->
<script src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>

<style>
.error_strings {color: #F00;}

.sucess_string{color:#0F0;}

.error {color: #F00;}

.alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
    text-align: center;
    line-height: 30px;
}
.alert-danger
{
	text-align: center;
    line-height: 30px;
	}
</style>

</head>
<body>

<div id="wrapper">

        
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      
      <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ADMINPANEL</a>
      </div>
            
            

<ul class="nav navbar-top-links navbar-right">

<li class="dropdown"></li>
                
                
                
               
<li class="dropdown">

<ul class="dropdown-menu dropdown-tasks">

        <li class="divider"></li>
        <li class="divider"></li>
        <li class="divider"></li>
        <li class="divider"></li>

</ul>
</li>





                <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                <!--<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>-->
                <!--<li class="divider"></li>-->
                <li><a href="<?php echo base_url();?>Login/Logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
                </ul>
                </li>
     
     
               
</ul>
            

            
            
            
            
            
            
            
            
          