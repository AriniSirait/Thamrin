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
		            <label class="control-label">NIK</label>
		            <div class="controls">
									<input type="text" name="nik" placeholder= "pic@atm.com" class="input-medium" />
									<span class="help-inline">NIK dari User</span>
		            </div>
		        	</div>
		        	<div class="control-group">
		            <label class="control-label">Username</label>
		            <div class="controls">
									<input type="text" name="username" placeholder= "pic_1" class="input-medium" />
									<span class="help-inline">Username</span>
		            </div>
		        	</div>              
							<div class="control-group">
		            <label class="control-label">Nama Lengkap</label>
		            <div class="controls">
									<input type="text" name="nama_lengkap" placeholder= "PIC" class="input-medium" />
									<span class="help-inline">Nama Lengkap dari User</span>
		            </div>
		        	</div>
		        	<div class="control-group">
		            <label class="control-label">Email</label>
		            <div class="controls">
									<input type="text" name="email" placeholder= "pic@atm.com" class="input-medium" />
									<span class="help-inline">Email milik User</span>
		            </div>
		        	</div>			
							<div class="control-group">
		            <label class="control-label">Telp</label>
		            <div class="controls">
									<input type="text" name="telp" placeholder= "021-xxxxx" class="input-medium" />
									<span class="help-inline">Nomor telepon milik user</span>
		            </div>
		        	</div>
							<div class="control-group">
		            <label class="control-label">Password</label>
		            <div class="controls">
									<input type="password" name="password" placeholder= "xxxxx" class="input-medium" />
									<span class="help-inline">Password dari User</span>
		            </div>
		        	</div>
							<div class="control-group">
		            <label class="control-label">cPassword</label>
		            <div class="controls">
									<input type="password" name="cPassword" placeholder= "xxxxx" class="input-medium" />
									<span class="help-inline">cPassword dari User</span>
		            </div>
		        	</div>
							<div class="control-group">
                <label class="control-label">Role</label>
                <div class="controls">							
									<select size="1" name="role" id="">
								    <option value="">-All-</option>
										<?php														
											$queryAll=mysql_query("select * from lookup_user_role");
											while($row2=mysql_fetch_array($queryAll)){
										?>
										<option value="<?php echo $row2['kode_lookup'];?>"><?php echo $row2['deskripsi_lookup'];?> </option>
										<?php } ?>
									</select>
									<span class="help-inline">Role user</span>
                </div>
            	</div>
							<div class="control-group">
                <label class="control-label">Jabatan</label>
                <div class="controls">
									<select size="1" name="jabatan" id="">
									<option value="">-All-</option>
										<?php									
											$queryAll = mysql_query("select * from lookup_jabatan");
											while($row3 = mysql_fetch_array($queryAll)){
										?>
											<option value="<?php echo $row3['kode_lookup']; ?>"><?php echo $row3['deskripsi_lookup']; ?></option>
										<?php } ?>
									</select>
									<span class="help-inline">Jabatan user</span>
                </div>
            	</div>
							<div class="control-group">
                <label class="control-label">Cabang</label>
                <div class="controls">
									<select size="1" name="cabang" id="">
										<option value="">-All-</option>
										<?php									
											$queryAll=mysql_query("select * from lookup_cabang");
											while($row4=mysql_fetch_array($queryAll)){
										?>
											<option value="<?php echo $row4['deskripsi_lookup'];?>"><?php echo $row4['deskripsi_lookup'];?></option>
										<?php } ?>
									</select>
									<span class="help-inline">Cabang tempat user bekerja</span>
                </div>
            	</div>
            	<div class="form-actions">
                <button type="submit" class="btn blue" name="submit"><i class="icon-ok"></i> Save</button>						
                <button type="reset" class="btn" name="cancel"><i class=" icon-remove"></i> Cancel</button>
            	</div>
		         </form>
		         </div>
			
					
				</div>
	
</div><!-- end of right content-->             
</div>   <!--end of center content -->               
</div>                    

        
    
</div>    
<div class="clear"></div>
</div> <!--end of main content-->
	
<?php
	require('include/footer.php');
?>

