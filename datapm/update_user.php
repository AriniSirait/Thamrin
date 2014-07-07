<head>
<?php
	require('include/header.php');
	
?>
<title>Update User</title>
</head>

<?php
	$user_option = $_GET["user_option"];
	$nik = $_GET["nik"];
?>

<!-- BEGIN PAGE TITLE & BREADCRUMB-->
<h3 class="page-title">
  Update User
  <small>For editing user</small>
</h3>
<ul class="breadcrumb">
  <li>
		<a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
  </li>
  <li>
    <a href="#">Manage User</a> <span class="divider">&nbsp;</span>
  </li>
	<li>
    <a href="#">Update User</a> <span class="divider">&nbsp;</span>
  </li>
	<li>
 	 <a href="#">Edit User</a> <span class="divider-last">&nbsp;</span>
  </li>
</ul>

<?php
	$data = mysql_query("select * from user where nik='$nik' ");
	$hasil = mysql_fetch_array($data);
?>
<!-- END PAGE TITLE & BREADCRUMB-->
<!-- BEGIN ADVANCED TABLE widget-->
<div class="row-fluid">
	<div class="span12">
	<!-- BEGIN EXAMPLE TABLE widget-->
	<!-- widget Edit -->
		<div class="widget">
			<div class="widget-title">
				<h4><i class="icon-reorder"></i>Edit User</h4>
				<span class="tools">
			        <a href="javascript:;" class="icon-chevron-down"></a>
			        <a href="javascript:;" class="icon-remove"></a>
        		</span>
			</div>
			<div class="widget-body">
				<!-- BEGIN FORM-->
				<?php if(isset($_REQUEST['msg'])){ ?>
					<div class="valid_box">
						<?php echo  "<h4>"."<center>".$_REQUEST['msg']."</center>" ."</h4>"; ?>
					</div>
				<?php }?>
					<form action="action/doEditUser.php?user_option=edit" method="post" class="form-horizontal">                    
            	<div class="control-group">
             		<label class="control-label">NIK</label>
              		<div class="controls">
						<input type="text" name="nik" placeholder= "<?php echo $hasil['nik']; ?>" value= "<?php echo $hasil['nik']; ?>" class="input-medium"  readonly/>
						<span class="help-inline">NIK berupa email</span>
              		</div>
          		</div>
				<div class="control-group">
              		<label class="control-label">Username</label>
              		<div class="controls">
						<input type="text" name="username" placeholder="<?php echo $hasil['username']; ?>" class="input-medium" />
						<span class="help-inline">username</span>
              		</div>
          		</div>
				<?php if(isset($_REQUEST['nameErr'])){ ?>
			  		<div class="control-group error">
                        <label class="control-label" for="inputError">Nama Lengkap</label>
                        <div class="controls">
                            <input type="text" name="nama_lengkap" placeholder= "" class="input-medium" />
                            <span class="help-inline">
                            	<?php echo  "<h9>"."<center>".$_REQUEST['nameErr']."</center>" ."</h4>"; ?>
                            </span>
                        </div>
                    </div>   	
				<?php } else {?>
				<div class="control-group">
	            <label class="control-label">Nama Lengkap</label>
	            	<div class="controls">
								<input type="text" name="nama_lengkap" placeholder= "" class="input-medium" />
								<span class="help-inline">Nama Lengkap dari User</span>
								
	            	</div>
	        	</div>
	        	<?php } ?>					
				<?php if(isset($_REQUEST['emailErr'])){ ?>
			  		<div class="control-group error">
                        <label class="control-label" for="inputError">Email</label>
                        <div class="controls">
                            <input type="text" name="nik" placeholder= "" class="input-medium" />
                            <span class="help-inline">
                            	<?php echo  "<h9>"."<center>".$_REQUEST['emailErr']."</center>" ."</h4>"; ?>
                            </span>
                        </div>
                    </div>   	
				<?php } else {?>
	        	<div class="control-group">
	            <label class="control-label">Email</label>
	            	<div class="controls">
								<input type="text" name="email" placeholder= "" class="input-medium" />
								<span class="help-inline">Email milik User</span>									
	            	</div>
	        	</div>
	        	<?php } ?>
				<div class="control-group">
		            <label class="control-label">Telp</label>
		            <div class="controls">
						<input type="text" name="telp" placeholder="<?php echo $hasil['telp']; ?>" class="input-medium" />
						<span class="help-inline">Nomor telepon milik user</span>
              		</div>
      	    	</div>
				<div class="form-actions">
	             	<button type="submit" class="btn blue" name="submit"><i class="icon-ok"></i> Save </button>						
	             	<a href="managed_user.php"> <button type="button" class="btn" name="cancel"> <i class=" icon-remove"></i> Cancel </button> </a>
	            </div>
			</div>			
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