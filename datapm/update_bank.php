<head>
<?php
	require('include/header.php');
?>
<title>Update Bank</title>
</head>

<?php
	$user_option = $_GET["user_option"];
	$id = $_GET["id"];
	$data = mysql_query("select * from data_bank where id='$id' ");
	$hasil = mysql_fetch_array($data);
?>

<!-- BEGIN PAGE TITLE & BREADCRUMB-->

<h3 class="page-title">
    Update Bank
    <small>For editing bank</small>
</h3>
<ul class="breadcrumb">
    <li>
		<a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
    </li>
    <li>
        <a href="#">Manage Bank</a> <span class="divider">&nbsp;</span>
    </li>
	<li>
        <a href="#">Update Bank</a> <span class="divider">&nbsp;</span>
    </li>
	<li>
        <a href="#">Edit User</a> <span class="divider-last">&nbsp;</span>
    </li>
</ul>

<!-- END PAGE TITLE & BREADCRUMB-->
<!-- BEGIN ADVANCED TABLE widget-->
<div class="row-fluid">
  <div class="span12">
	<!-- BEGIN EXAMPLE TABLE widget-->
		<!-- widget Edit -->

			<div class="widget">
			<div class="widget-title">
			<h4><i class="icon-reorder"></i>Edit Bank</h4>
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
					<form action="action/doEditBank.php?update_option=edit" method="post" class="form-horizontal">                    
              <div class="control-group">
                <label class="control-label">ID</label>
                <div class="controls">
									<input type="text" name="id" placeholder= "<?php echo $hasil['id']; ?>" value= "<?php echo $hasil['id']; ?>" class="input-medium" readonly />									 
									<span class="help-inline">ID dari bank</span>
                </div>
              </div>
							<div class="control-group">
                <label class="control-label">Customer Serial Number</label>
                <div class="controls">
									<input type="text" name="csn" placeholder= "<?php echo $hasil['csn']; ?>" value= "<?php echo $hasil['csn']; ?>" class="input-medium" />
									<span class="help-inline">CSN dari bank</span>
                </div>
            	</div>
							<div class="control-group">
                <label class="control-label">Nama Bank</label>
                <div class="controls">
									<input type="text" name="nama_bank" placeholder= "<?php echo $hasil['nama_bank']; ?>" value= "<?php echo $hasil['nama_bank']; ?>" class="input-medium" />
									<span class="help-inline">Nama Bank</span>
                </div>
            	</div>
					<div class="control-group">
                        <label class="control-label">MA Agreement</label>
                        <div class="controls">
							<input type="text" name="ma_agreement" placeholder="<?php echo $hasil['ma_agreement']; ?>" value= "<?php echo $hasil['ma_agreement']; ?>" class="input-medium" />
							<span class="help-inline">MA Agreement antara IBM dan Bank terkait</span>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label">PM per Year</label>
                        <div class="controls">
							<input type="text" name="pm_per_year" placeholder="<?php echo $hasil['pm_per_year']; ?>" value= "<?php echo $hasil['pm_per_year']; ?>" class="input-medium" />
							<span class="help-inline">PM per Tahun yang dilakukan untuk tiap mesin</span>
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