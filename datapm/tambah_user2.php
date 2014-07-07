<head>
<?php include "include/header.php" ?>
<?php /*include "include/menuAdmin.php"*/ ?>

<title>Tambah User</title>
</head>

<!-- BEGIN PAGE TITLE & BREADCRUMB-->
<h3 class="page-title">
	Add User
	<small>For add User to the list</small>
</h3>
<ul class="breadcrumb">
  <li>
	<a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
  </li>
  <li>
      <a href="#">Manage User</a> <span class="divider">&nbsp;</span>
  </li>
	<li>
    <a href="#">Add User</a> <span class="divider-last">&nbsp;</span>
	</li>
</ul>
<!-- END PAGE TITLE & BREADCRUMB-->
<!-- BEGIN ADVANCED TABLE widget-->
<div class="row-fluid">
  <div class="span12">
	<!-- BEGIN EXAMPLE TABLE widget-->
		<div class="widget">
	    <div class="widget-title">
				<h4><i class="icon-reorder"></i>Add Machine</h4>							
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
				<!-- BEGIN FORM-->
		        <form action="action/doTambahUser.php" method="post" class="form-horizontal">
		        	<div class="control-group"> 
		            <label class="control-label" for="inputError">NIK</label>
		            	<div class="controls">
									<input type="email" name="nik" placeholder= "" class="input-medium" />									
									<span class="help-inline">NIK dari User</span>
									
		            	</div>
		        	</div>     	

		        	<div class="control-group">
		            <label class="control-label">Username</label>
		           		<div class="controls">
									<input type="text" name="username" placeholder= "" class="input-medium" />
									<span class="help-inline">Username</span>
		            	</div>
		        	</div>              

					<div class="control-group">
		            <label class="control-label">Nama Lengkap</label>
		            	<div class="controls">
									<input type="text" name="nama_lengkap" placeholder= "" class="input-medium" />
									<span class="help-inline">Nama Lengkap dari User</span>
									
		            	</div>
		        	</div>

		        	<div class="control-group">
		            <label class="control-label">Email</label>
		            	<div class="controls">
									<input type="email" name="email" placeholder= "" class="input-medium" />
									<span class="help-inline">Email milik User</span>
									
		            	</div>
		        	</div>

					<div class="control-group">
		            <label class="control-label">Telp</label>
		            	<div class="controls">
									<input type="tel" pattern="(^\+[0-9]{2}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9,12}$|[0-9\-\s]{10,20}$)" name="telp" placeholder= "xxx-xxxxxxxxx" class="input-medium" />
									<span class="help-inline">Nomor telepon milik user</span>
		            	</div>
		        	</div>

					<div class="control-group">
		            <label class="control-label">Password</label>
		            	<div class="controls">
									<input type="password" name="password" placeholder= "" class="input-medium" />
									<span class="help-inline">Password dari User</span>
		           		</div>
		        	</div>

					<div class="control-group">
		            <label class="control-label">cPassword</label>
		            	<div class="controls">
									<input type="password" name="cPassword" placeholder= "" class="input-medium" />
									<span class="help-inline">cPassword dari User</span>
		           		</div>
		        	</div>
	            	<div class="form-actions">
		                <button type="submit" class="btn blue" name="submit"><i class="icon-ok"></i> Save</button>						
		                <a href="managed_user.php"> <button type="button" class="btn" name="cancel"> <i class=" icon-remove"></i> Cancel </button> </a>
            		</div>
	         	</form>
         </div>
			
					
				</div>
	
</div><!-- end of right content-->             
</div>   <!--end of center content -->               
</div>                    
</div> 
</div>         
    
</div>    
<div class="clear"></div>
</div> <!--end of main content-->
	
<?php
	require('include/footer.php');
?>

