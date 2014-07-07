<head>
<?php
	require('include/header.php');
?>
<title>Update ATM Type</title>
</head>

<?php
	$user_option = $_GET["user_option"];
	$id = $_GET["id"];
	$data = mysql_query("select * from atm_type where id='$id' ");
	$hasil = mysql_fetch_array($data);
?>

<!-- BEGIN PAGE TITLE & BREADCRUMB-->

<h3 class="page-title">
    Update ATM Type
    <small>For editing ATM Type</small>
</h3>
<ul class="breadcrumb">
    <li>
		<a href="bank_option.php"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
    </li>
    <li>
        <a href="managed_atm.php">Manage ATM Type</a> <span class="divider">&nbsp;</span>
    </li>
	<li>
        <a href="#">Update ATM Type</a> <span class="divider">&nbsp;</span>
    </li>
	<li>
        <a href="#">Edit ATM Type</a> <span class="divider-last">&nbsp;</span>
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
					<h4><i class="icon-reorder"></i>Edit ATM Type</h4>
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
						<form action="action/doEditATM.php?user_option=edit" method="post" class="form-horizontal">                    
	                    <div class="control-group">
	                        <label class="control-label">ID</label>
	                        <div class="controls">
								<input type="text" name="id" placeholder= "<?php echo $hasil['id']; ?>" value= "<?php echo $hasil['id']; ?>" class="input-medium" readonly />
								<span class="help-inline">ID dari Tipe ATM</span>
	                        </div>
	                    </div>
						<div class="control-group">
	                        <label class="control-label">Tipe ATM</label>
	                        <div class="controls">
								<input type="text" name="tipe_atm" placeholder= "<?php echo $hasil['tipe_atm']; ?>" class="input-medium" />
								<span class="help-inline">ATM Type</span>
	                        </div>
	                    </div>
						<div class="control-group">
	                        <label class="control-label">Description</label>
	                        <div class="controls">
								<input type="text" name="description" placeholder= "<?php echo $hasil['description']; ?>" class="input-medium" />
								<span class="help-inline">Deskripsi tipe ATM</span>
	                        </div>
	                    </div>					
						<div class="form-actions">
	                        <button type="submit" class="btn blue" name="submit"><i class="icon-ok"></i> Save</button>						
	                        <a href="managed_atm.php"> <button type="button" class="btn" name="cancel"> <i class=" icon-remove"></i> Cancel </button> </a>
	                    </div>
	                    </form>
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