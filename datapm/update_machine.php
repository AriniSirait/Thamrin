<head>
<?php
	require('include/header.php');
?>
<title>Update Machine</title>
</head>

<?php
	$id = $_GET["id"];
	$data = mysql_query("select * from data_atm where id='$id' ");
	$hasil = mysql_fetch_array($data);
?>

<!-- BEGIN PAGE TITLE & BREADCRUMB-->

<h3 class="page-title">
    Update Machine
    <small>For editing bank</small>
</h3>
<ul class="breadcrumb">
    <li>
		<a href="bank_option.php"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
    </li>
    <li>
        <a href="managed_atm.php">Manage Machine</a> <span class="divider">&nbsp;</span>
    </li>
	<li>
        <a href="#">Update Machine</a> <span class="divider">&nbsp;</span>
    </li>
	<li>
        <a href="#">Edit Machine</a> <span class="divider-last">&nbsp;</span>
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
					<h4><i class="icon-reorder"></i>Edit Machine</h4>
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
						<form action="action/doEditMachine.php?user_option=edit" method="post" class="form-horizontal">                    
		            <div class="control-group">
		                <label class="control-label">ID</label>
		            	    <div class="controls">
									<input type="text" name="id" placeholder= "<?php echo $hasil['id']; ?>" value= "<?php echo $hasil['id']; ?>" class="input-medium" readonly />
									<span class="help-inline">ID dari Tipe ATM</span>
                			</div>
            		</div>
              		<div class="control-group">
			          	<label class="control-label">Customer</label>
			          		<div class="controls">
									<input type="text" name="customer" placeholder= "<?php echo $hasil['customer']; ?>" class="input-medium" />
									<span class="help-inline">Customer</span>
	            			</div>
		        	</div>
					<div class="control-group">
		            <label class="control-label">Customer Number</label>
		            	<div class="controls">
									<input type="text" name="csn" placeholder= "<?php echo $hasil['csn']; ?>" class="input-medium" />
									<span class="help-inline">Nomor keanggotaan customer</span>
		            	</div>
		        	</div>
		        	<div class="control-group">
		            <label class="control-label">Terminal ID</label>
		            <div class="controls">
									<input type="text" name="terminal_id" placeholder= "<?php echo $hasil['terminal_id']; ?>" class="input-medium" />
									<span class="help-inline">Terminal ID</span>
		            </div>
		        	</div>
							<div class="control-group">
		            <label class="control-label">Machine Serial Number</label>
		            <div class="controls">
									<input type="text" name="msn" placeholder= "<?php echo $hasil['msn']; ?>" class="input-medium" />
									<span class="help-inline">Nomor serial dari mesin ATM</span>
		            </div>
		        	</div>
		        	<div class="control-group">				
		        	 <label class="control-label">Tipe Mesin</label>
		            <div class="controls">
									<input type="text" name="tipe_mesin" placeholder= "<?php echo $hasil['tipe_mesin']; ?>" class="input-medium" />
									<span class="help-inline">Tipe Mesin ATM</span>
		            </div>
		        	</div>
							<div class="control-group">
		            <label class="control-label">Address</label>
		            <div class="controls">
									<input type="text" name="address" placeholder= "<?php echo $hasil['address']; ?>" class="input-medium" />
									<span class="help-inline">Alamat customer</span>
		            </div>
		        	</div>
		        	<div class="control-group">
		            <label class="control-label">City</label>
		            <div class="controls">
									<input type="text" name="city" placeholder= "<?php echo $hasil['city']; ?>" class="input-medium" />
									<span class="help-inline">Kota tempat customer berada</span>
		            </div>
		        	</div>
							<div class="control-group">
		            <label class="control-label">Service Area</label>
		            <div class="controls">
									<input type="text" name="service_area" placeholder= "<?php echo $hasil['service_area']; ?>" class="input-medium" />
									<span class="help-inline">Service Area</span>
		            </div>
		        	</div>
		        	<div class="control-group">
		        	 <label class="control-label">Tanggal Instalasi</label>
		            <div class="controls">
									<input type="text" name="installation_date" placeholder= "<?php echo $hasil['installation_date']; ?>" class="input-medium" />
									<span class="help-inline">Tanggal Instalasi dari mesin ATM</span>
		            </div>
		        	</div>
							<div class="control-group">
		            <label class="control-label">Group</label>
		            <div class="controls">
									<input type="text" name="team" placeholder= "<?php echo $hasil['team']; ?>" class="input-medium" />
									<span class="help-inline">Group ATM</span>
		            </div>
		        	</div>
		        	<div class="control-group">
		            <label class="control-label">CE Owner</label>
		            <div class="controls">
									<input type="text" name="ceowner" placeholder= "<?php echo $hasil['ceowner']; ?>" class="input-medium" />
									<span class="help-inline">CE Owner dari mesin ATM</span>
		            </div>
		        	</div>
							<div class="control-group">
		            <label class="control-label">Remarks2</label>
		            <div class="controls">
									<input type="text" name="remarks2" placeholder= "<?php echo $hasil['remarks2']; ?>" class="input-medium" />
									<span class="help-inline">Remarks2 dari mesin ATM</span>
		            </div>
		        	</div>	
		        	<div class="control-group">
		            <label class="control-label">Status</label>
		            <div class="controls">
									<input type="text" name="status" placeholder= "<?php echo $hasil['status']; ?>" class="input-medium" />
									<span class="help-inline">Status mesin ATM</span>
		            </div>
		        	</div>
		        	<div class="control-group">
		        	 <label class="control-label">Coverage</label>
		            <div class="controls">
									<input type="text" name="coverage" placeholder= "<?php echo $hasil['coverage']; ?>" class="input-medium" />
									<span class="help-inline">Coverage dari mesin ATM</span>
		            </div>
		        	</div>
							<div class="control-group">
		            <label class="control-label">Start Date</label>
		            <div class="controls">
									<input type="text" name="start_date" placeholder= "<?php echo $hasil['start_date']; ?>" class="input-medium" />
									<span class="help-inline">Tanggal awal PM dari mesin ATM</span>
		            </div>
		        	</div>
		        	<div class="control-group">
		            <label class="control-label">End Date</label>
		            <div class="controls">
									<input type="text" name="end_date" placeholder= "<?php echo $hasil['end_date']; ?>" class="input-medium" />
									<span class="help-inline">Tanggal akhir PM dari mesin ATM</span>
		            </div>
		        	</div>
							<div class="control-group">
		            <label class="control-label">PM per year</label>
		            <div class="controls">
									<input type="text" name="pm_per_year" placeholder= "<?php echo $hasil['pm_per_year']; ?>" class="input-medium" />
									<span class="help-inline">PM per year dari mesin ATM</span>
		            </div>
		        	</div>
							<div class="form-actions">
		            <button type="submit" class="btn blue" name="submit"><i class="icon-ok"></i> Save</button>						
		            <a href="managed_machine.php"> <button type="button" class="btn" name="cancel"> <i class=" icon-remove"></i> Cancel </button> </a>
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