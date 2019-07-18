<div class="navbar-default sidebar" role="navigation">


<?php 
	
	if(isset($admin) && !empty($admin))
	{
	
	       if(isset($admin["dashboard"])){$dashboard=$admin["dashboard"];}
		   if(isset($admin["std"])){$order=$admin["std"];}
           if(isset($admin["subject"])){$subject=$admin["subject"];}
           if(isset($admin["chapter"])){$chapter=$admin["chapter"];}
		   if(isset($admin["question"])){$reports=$admin["question"];}
		   if(isset($admin["revision"])){$revision=$admin["revision"];}
           if(isset($admin["package"])){$package=$admin["package"];}
           if(isset($admin["create_test"])){$create_test=$admin["create_test"];}
           if(isset($admin["board"])){$board=$admin["board"];}
		   
		   
		   
		   
		   if(isset($admin["health"])){$health=$admin["health"];}
		   
		   if(isset($admin["about_us"])){$about_us=$admin["about_us"];}
		   if(isset($admin["slider"])){$slider=$admin["slider"];}
		   if(isset($admin["project"])){$project=$admin["project"];}
           if(isset($admin["service"])){$service=$admin["service"];}
	    
	}
?>
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      
                     
                        <?php if(isset($dashboard) && !empty($dashboard)){ ?>
                        <li><a href='#'><i class="fa fa-circle fa-fw"></i> DASHBOARD<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php foreach($dashboard as $k=>$vall){?>
                        <li><a href='<?php echo base_url().$vall; ?>'><span><?php echo $k;?></span></a></li>
                        <?php } ?>
                        </ul>
                        </li>
                        <?php } else{} ?>	  
                        
                        
						<?php if(isset($order) && !empty($order)){ ?>
                        <li><a href='#'><i class="fa fa-circle fa-fw"></i> STANDARD<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php foreach($order as $k=>$vall){?>
                        <li><a href='<?php echo base_url().$vall; ?>'><span><?php echo $k;?></span></a></li>
                        <?php } ?>
                        </ul>
                        </li>
                        <?php } else{} ?>
						
						
						   <?php if(isset($subject) && !empty($subject)){ ?>
                        <li><a href='#'><i class="fa fa-circle fa-fw"></i> SUBJECT<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php foreach($subject as $k=>$vall){?>
                        <li><a href='<?php echo base_url().$vall; ?>'><span><?php echo $k;?></span></a></li>
                        <?php } ?>
                        </ul>
                        </li>
                        <?php } else{} ?>
                        
                        
						   <?php if(isset($chapter) && !empty($chapter)){ ?>
                        <li><a href='#'><i class="fa fa-circle fa-fw"></i> CHAPTER<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php foreach($chapter as $k=>$vall){?>
                        <li><a href='<?php echo base_url().$vall; ?>'><span><?php echo $k;?></span></a></li>
                        <?php } ?>
                        </ul>
                        </li>
                        <?php } else{} ?>
						
						 <?php if(isset($board) && !empty($board)){ ?>
                        <li><a href='#'><i class="fa fa-circle fa-fw"></i> BOARD QUESTION<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php foreach($board as $k=>$vall){?>
                        <li><a href='<?php echo base_url().$vall; ?>'><span><?php echo $k;?></span></a></li>
                        <?php } ?>
                        </ul>
                        </li>
                        <?php } else{} ?>	
						
						
						
						<?php if(isset($reports) && !empty($reports)){ ?>
                        <li><a href='#'><i class="fa fa-circle fa-fw"></i> QUESTION<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php foreach($reports as $k=>$vall){?>
                        <li><a href='<?php echo base_url().$vall; ?>'><span><?php echo $k;?></span></a></li>
                        <?php } ?>
                        </ul>
                        </li>
                        <?php } else{} ?>
						

						<?php if(isset($revision) && !empty($revision)){ ?>
                        <li><a href='#'><i class="fa fa-circle fa-fw"></i> REVESION<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php foreach($revision as $k=>$vall){?>
                        <li><a href='<?php echo base_url().$vall; ?>'><span><?php echo $k;?></span></a></li>
                        <?php } ?>
                        </ul>
                        </li>
                        <?php } else{} ?>

                            <?php if(isset($package) && !empty($package)){ ?>
                        <li><a href='#'><i class="fa fa-circle fa-fw"></i> PACKAGE<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php foreach($package as $k=>$vall){?>
                        <li><a href='<?php echo base_url().$vall; ?>'><span><?php echo $k;?></span></a></li>
                        <?php } ?>
                        </ul>
                        </li>
                        <?php } else{} ?>

                         <?php if(isset($create_test) && !empty($create_test)){ ?>
                        <li><a href='#'><i class="fa fa-circle fa-fw"></i> CREATE TEST<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php foreach($create_test as $k=>$vall){?>
                        <li><a href='<?php echo base_url().$vall; ?>'><span><?php echo $k;?></span></a></li>
                        <?php } ?>
                        </ul>
                        </li>
                        <?php } else{} ?>
						
						
						
						
						
						
						
						 <?php if(isset($health) && !empty($health)){ ?>
                        <li><a href='#'><i class="fa fa-circle fa-fw"></i> TEST<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php foreach($health as $k=>$vall){?>
                        <li><a href='<?php echo base_url().$vall; ?>'><span><?php echo $k;?></span></a></li>
                        <?php } ?>
                        </ul>
                        </li>
                        <?php } else{} ?>
						
						
						<?php if(isset($about_us) && !empty($about_us)){ ?>
                        <li><a href='#'><i class="fa fa-circle fa-fw"></i>  About Us  <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php foreach($about_us as $k=>$vall){?>
                        <li><a href='<?php echo base_url().$vall; ?>'><span><?php echo $k;?></span></a></li>
                        <?php } ?>
                        </ul>
                        </li>
                        <?php } else{} ?>
						
						
						<?php if(isset($slider) && !empty($slider)){ ?>
                        <li><a href='#'><i class="fa fa-circle fa-fw"></i>  Slider  <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php foreach($slider as $k=>$vall){?>
                        <li><a href='<?php echo base_url().$vall; ?>'><span><?php echo $k;?></span></a></li>
                        <?php } ?>
                        </ul>
                        </li>
                        <?php } else{} ?>
						
						
						<?php if(isset($project) && !empty($project)){ ?>
                        <li><a href='#'><i class="fa fa-circle fa-fw"></i>  Project  <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php foreach($project as $k=>$vall){?>
                        <li><a href='<?php echo base_url().$vall; ?>'><span><?php echo $k;?></span></a></li>
                        <?php } ?>
                        </ul>
                        </li>
                        <?php } else{} ?>
						
                        
						<?php if(isset($service) && !empty($service)){ ?>
                        <li><a href='#'><i class="fa fa-circle fa-fw"></i>  Service  <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php foreach($service as $k=>$vall){?>
                        <li><a href='<?php echo base_url().$vall; ?>'><span><?php echo $k;?></span></a></li>
                        <?php } ?>
                        </ul>
                        </li>
                        <?php } else{} ?>

                        
                        
                </ul>
          </div>
     </div>
</nav>
        