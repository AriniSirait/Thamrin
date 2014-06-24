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
								<input type="text" name="username" placeholder="<?php echo $hasil['username']; ?>" value= "<?php echo $hasil['username']; ?>" class="input-medium" />
								<span class="help-inline">username</span>
              </div>
          	</div>
						<div class="control-group">
	            <label class="control-label">Nama Lengkap</label>
	            <div class="controls">
								<input type="text" name="nama_lengkap" placeholder="<?php echo $hasil['nama_lengkap']; ?>" value= "<?php echo $hasil['nama_lengkap']; ?>" class="input-medium" />
								<span class="help-inline">Nama lengkap dari user</span>
              </div>
       			</div>					
						<div class="control-group">
              <label class="control-label">Email</label>
              <div class="controls">
								<input type="text" name="email" placeholder="<?php echo $hasil['email']; ?>" value= "<?php echo $hasil['email']; ?>" class="input-medium" />
								<span class="help-inline">Email milik user</span>
              </div>
          	</div>
						<div class="control-group">
              <label class="control-label">Telp</label>
              <div class="controls">
								<input type="text" name="telp" placeholder="<?php echo $hasil['telp']; ?>" value= "<?php echo $hasil['telp']; ?>" class="input-medium" />
								<span class="help-inline">Nomor telepon milik user</span>
              </div>
      	    </div>
						<div class="control-group">
              <label class="control-label">Role</label>
              <div class="controls">							
								<select size="1" name="role" id="">
							    <?php														
										$data=mysql_query("select `role` from user where `nik`='$nik'");
										while($hasil=mysql_fetch_array($data)){
									?>
							    <option value=""><?php echo $hasil['role']; ?></option>
									<?php } ?>
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
								<?php														
										$data=mysql_query("select `jabatan` from user where `nik`='$nik'");
										while($hasil=mysql_fetch_array($data)){
								?>
							    <option value=""><?php echo $hasil['jabatan']; ?></option>
							    <?php } ?>							    
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
								<?php														
										$data=mysql_query("select `cabang` from user where `nik`='$nik'");
										while($hasil=mysql_fetch_array($data)){
								?>
							    <option value=""><?php echo $hasil['cabang']; ?></option>
							    <?php } ?>							    
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