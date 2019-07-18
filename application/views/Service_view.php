<div id="page-wrapper">
<div class="row">
<div class="col-lg-12">
<h3 class="page-header">View Services</h3></div>
</div>
           
<div class="row">

<div class="panel panel-default">
<div class="panel-heading">Services</div>

<div class="display_message" id="error_msgs"> 
<?php if(isset($error) && !empty($error)) { ?><div class="alert-danger"><?php echo $error; ?></div><?php }?>
<?php if(isset($sucess) && !empty($sucess)) { ?><div class="alert-success"><?php echo $sucess; ?></div><?php }?>
<?php
if($this->session->flashdata('error')){echo "<div class=alert-danger>".$this->session->flashdata('error')."</div>";}
if($this->session->flashdata('sucess')){echo "<div class=alert-success>".$this->session->flashdata('sucess')."</div>";}
?>
</div>

<div class="panel-body">
<div class="table-responsive">


<?php if(isset($results) && !empty($results) ){ ?>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<tr>
<th colspan="20" id="pages"><?php //echo $links; ?></th>
</tr>



<tr>
<th>Id</th>
<th>Title</th>
<th>Description</th>
<th>Action</th>

</tr>

</thead>
<tbody>
<?php 
  $b = 0;
 foreach($results as $data) 
 {
    $class = ($b++ % 2 == 0) ? 'even' : 'odd';
?>
   <tr class="<?php echo $class; ?>">
   <td><?php echo $counter++; ?></td>

   <td><?php echo $data['title'];?></td>
   <td><?php echo $data['description'];?></td>
  
   <td>
   <a href="<?php echo base_url();?>Service/edit/<?php echo $data['id']; ?>" class="fa fa-pencil"></a>&nbsp&nbsp
   
   <?php  if($data['status'] == 0)
          { ?>
		  <a href="<?php echo base_url();?>Service/status/<?php echo $data['id']; ?>" class="fa fa-check-circle" style="color:green;"></a>  
		  <?php }
		  else
		  { ?>
		  <a href="<?php echo base_url();?>Service/status/<?php echo $data['id']; ?>" class="fa fa-times-circle" style="color:red;"></a>  
		  <?php }
	      ?>
   </td>

                         
</tr>
<?php }?>

</tbody>
</table>
<?php } else{}?>



</div>
</div>
</div>
</div>
</div>
        
<script>
function myFunction()
{var r =confirm("Are you sure want to change Status!");
if (r == true) {location.reload();
//event.preventDefault();
}else {event.preventDefault();
location.reload();}}
</script> 

<script>
function mydelete()
{var r =confirm("Are you sure want to Delete!");
if (r == true) {location.reload();
//event.preventDefault();
}else {event.preventDefault();
location.reload();}}
</script>