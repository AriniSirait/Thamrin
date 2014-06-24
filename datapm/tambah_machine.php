<head>
<?php include "include/header.php" ?>
<?php /*include "include/menuAdmin.php"*/ ?>

<title>Tambah Machine</title>
</head>
	
<!-- BEGIN PAGE TITLE & BREADCRUMB-->
<h3 class="page-title">
	Add Machine
	<small>For add Machine to the list</small>
</h3>
<ul class="breadcrumb">
  <li>
	<a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
  </li>
  <li>
      <a href="#">Manage Machine</a> <span class="divider">&nbsp;</span>
  </li>
	<li>
    <a href="#">Add Machine</a> <span class="divider-last">&nbsp;</span>
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
      	<form action="action/doTambahMachine.php" method="post" class="form-horizontal">					
					<div class="control-group">
            <label class="control-label">Customer</label>
            <div class="controls">
							<input type="text" name="customer" placeholder= "Panin" class="input-medium" />
							<span class="help-inline">Customer</span>
            </div>
        	</div>
					<div class="control-group">
            <label class="control-label">Customer Number</label>
            <div class="controls">
							<input type="text" name="csn" placeholder= "211736" class="input-medium" />
							<span class="help-inline">Nomor keanggotaan customer</span>
            </div>
        	</div>
        	<div class="control-group">
            <label class="control-label">Terminal ID</label>
            <div class="controls">
							<input type="text" name="terminal_id" placeholder= "234" class="input-medium" />
							<span class="help-inline">Terminal ID</span>
            </div>
        	</div>
					<div class="control-group">
            <label class="control-label">Machine Serial Number</label>
            <div class="controls">
							<input type="text" name="msn" placeholder= "IE04092" class="input-medium" />
							<span class="help-inline">Nomor serial dari mesin ATM</span>
            </div>
        	</div>
        	<div class="control-group">				
        	 <label class="control-label">Tipe Mesin</label>
            <div class="controls">
							<input type="text" name="tipe_mesin" placeholder= "CD1" class="input-medium" />
							<span class="help-inline">Tipe Mesin ATM</span>
            </div>
        	</div>
					<div class="control-group">
            <label class="control-label">Address</label>
            <div class="controls">
							<input type="text" name="address" placeholder= "JL. Juanda Bandung" class="input-medium" />
							<span class="help-inline">Alamat customer</span>
            </div>
        	</div>
        	<div class="control-group">
            <label class="control-label">City</label>
            <div class="controls">
							<input type="text" name="city" placeholder= "Bandung" class="input-medium" />
							<span class="help-inline">Kota tempat customer berada</span>
            </div>
        	</div>
					<div class="control-group">
            <label class="control-label">Service Area</label>
            <div class="controls">
							<input type="text" name="service_area" placeholder= "Bandung" class="input-medium" />
							<span class="help-inline">Service Area</span>
            </div>
        	</div>
        	<div class="control-group">
        	 <label class="control-label">Tanggal Instalasi</label>
            <div class="controls">
							<input type="text" name="installation_date" placeholder= "YYYY-MM-DD" class="input-medium" />
							<span class="help-inline">Tanggal Instalasi dari mesin ATM</span>
            </div>
        	</div>
					<div class="control-group">
            <label class="control-label">Group</label>
            <div class="controls">
							<input type="text" name="group" placeholder= "Bandung" class="input-medium" />
							<span class="help-inline">Group ATM</span>
            </div>
        	</div>
        	<div class="control-group">
            <label class="control-label">CE Owner</label>
            <div class="controls">
							<input type="text" name="ceowner" placeholder= "Eko" class="input-medium" />
							<span class="help-inline">CE Owner dari mesin ATM</span>
            </div>
        	</div>
					<div class="control-group">
            <label class="control-label">Remarks2</label>
            <div class="controls">
							<input type="text" name="remarks2" placeholder= "FALSE" class="input-medium" />
							<span class="help-inline">Remarks2 dari mesin ATM</span>
            </div>
        	</div>	
        	<div class="control-group">
            <label class="control-label">Status</label>
            <div class="controls">
							<input type="text" name="status" placeholder= "MA" class="input-medium" />
							<span class="help-inline">Status mesin ATM</span>
            </div>
        	</div>
        	<div class="control-group">
        	 <label class="control-label">Coverage</label>
            <div class="controls">
							<input type="text" name="coverage" placeholder= "5x11" class="input-medium" />
							<span class="help-inline">Coverage dari mesin ATM</span>
            </div>
        	</div>
					<div class="control-group">
            <label class="control-label">Start Date</label>
            <div class="controls">
							<input type="text" name="start_date" placeholder= "YYYY-MM-DD" class="input-medium" />
							<span class="help-inline">Tanggal awal PM dari mesin ATM</span>
            </div>
        	</div>
        	<div class="control-group">
            <label class="control-label">End Date</label>
            <div class="controls">
							<input type="text" name="end_date" placeholder= "YYYY-MM-DD" class="input-medium" />
							<span class="help-inline">Tanggal akhir PM dari mesin ATM</span>
            </div>
        	</div>
					<div class="control-group">
            <label class="control-label">PM per year</label>
            <div class="controls">
							<input type="text" name="pm_per_year" placeholder= "6" class="input-medium" />
							<span class="help-inline">Jumlah PM per year dari mesin ATM</span>
            </div>
        	</div>
					<div class="form-actions">
            <button type="submit" class="btn blue" name="submit"><i class="icon-ok"></i> Save</button>						
            <button type="reset" class="btn" name="cancel"><i class=" icon-remove"></i> Cancel</button>
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

