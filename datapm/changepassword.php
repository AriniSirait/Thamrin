<head>
<?php 
    require('include/header.php');
?>
<title>Change Password</title>
</head>

<!-- BEGIN PAGE TITLE & BREADCRUMB-->      
<h3 class="page-title">
 Update PM Data
 <small>simple form layouts</small>
</h3>
<ul class="breadcrumb">
 <li>
     <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
 </li>
 <li><a href="#">Change Password</a><span class="divider-last">&nbsp;</span></li>
</ul>
<!-- END PAGE TITLE & BREADCRUMB-->
     </div>
  </div>

  <!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
  <div class="span12 sortable">
    <!-- BEGIN SAMPLE FORMPORTLET-->    
    <div class="widget">
      	<div class="widget-title">
          <h4><i class="icon-reorder"></i>Update Pm</h4>
            <span class="tools">
            <a href="javascript:;" class="icon-chevron-down"></a>
            <a href="javascript:;" class="icon-remove"></a>
            </span>
      	</div>
     	<div class="widget-body">
     	<?php if(isset($_REQUEST['msg'])){ ?>
			<div class="valid_box">
				<?php echo  "<h4>"."<center>".$_REQUEST['msg']."</center>" ."</h4>"; ?>
			</div>
		<?php }?>
       	<form name="theForm" action="action/doChangePassword.php" method="post" class="form-horizontal form-row-seperated">           
          <div class="control-group">
            <label class="control-label">Old Password</label>
            <div class="controls">
                <input type="password" name="oldPassword" placeholder="" class="input-medium" />
                <span class="help-inline">Old Password</span>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">New Password</label>
            <div class="controls">
                <input type="password" name="newPassword" placeholder="" class="input-medium" />
                <span class="help-inline">New Password</span>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Confirm Password</label>
            <div class="controls">
                <input type="password" name="confirmPassword" placeholder="" class="input-medium" />
                <span class="help-inline">Confirm Password</span>
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
            <a href="login.php"> <button type="button" class="btn" name="cancel"> <i class=" icon-remove"></i> Cancel </button> </a>
          </div>
        </form>
		</div>
			
					
	</div>
	
</div>         
</div>              
</div>
<!-- END ADVANCED TABLE widget-->
</div>
</div>
</div>
</div>
	
<?php
	require('include/footer.php');
?>
