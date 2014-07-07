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
							<input type="text" name="customer" placeholder= "" class="input-medium" />
							<span class="help-inline">Customer</span>
            </div>
        	</div>

            <?php if(isset($_REQUEST['csnErr'])){ ?>
                <div class="control-group error">
                    <label class="control-label" for="inputError">Customer Number</label>
                    <div class="controls">
                        <input type="text" name="csn" placeholder= "" class="input-medium" />
                        <span class="help-inline">
                            <?php echo  "<h9>"."<center>".$_REQUEST['csnErr']."</center>" ."</h4>"; ?>
                        </span>
                    </div>
                </div>      
            <?php } else {?>
			<div class="control-group">
            <label class="control-label">Customer Number</label>
            <div class="controls">
							<input type="text" name="csn" placeholder= "" class="input-medium" />
							<span class="help-inline">Nomor keanggotaan customer</span>
            </div>
        	</div>
            <?php } ?>

        	<div class="control-group">
            <label class="control-label">Terminal ID</label>
            <div class="controls">
							<input type="text" name="terminal_id" placeholder= "" class="input-medium" />
							<span class="help-inline">Terminal ID</span>
            </div>
        	</div>
					<div class="control-group">
            <label class="control-label">Machine Serial Number</label>
            <div class="controls">
							<input type="text" name="msn" placeholder= "" class="input-medium" />
							<span class="help-inline">Nomor serial dari mesin ATM</span>
            </div>
        	</div>
        	<div class="control-group">				
        	 <label class="control-label">Tipe Mesin</label>
            <div class="controls">
							<input type="text" name="tipe_mesin" placeholder= "" class="input-medium" />
							<span class="help-inline">Tipe Mesin ATM</span>
            </div>
        	</div>
					<div class="control-group">
            <label class="control-label">Address</label>
            <div class="controls">
							<input type="text" name="address" placeholder= "" class="input-medium" />
							<span class="help-inline">Alamat customer</span>
            </div>
        	</div>
        	<div class="control-group">
            <label class="control-label">City</label>
            <div class="controls">
							<input type="text" name="city" placeholder= "" class="input-medium" />
							<span class="help-inline">Kota tempat customer berada</span>
            </div>
        	</div>
					<div class="control-group">
            <label class="control-label">Service Area</label>
            <div class="controls">
							<input type="text" name="service_area" placeholder= "" class="input-medium" />
							<span class="help-inline">Service Area</span>
            </div>
        	</div>
        	
            <?php if(isset($_REQUEST['sdErr'])){ ?>
                <div class="control-group error">
                    <label class="control-label" for="inputError">Tanggal Instalasi</label>
                    <div class="controls">
                        <div class="input-append" id="ui_date_picker_trigger">              
                            <input type="text" class="m-wrap medium" name="start_date"/><span class="add-on"><i class="icon-calendar"></i></span>
                        </div>
                        <span class="help-inline">
                            <?php echo  "<h9>"."<center>".$_REQUEST['sdErr']."</center>" ."</h4>"; ?>
                        </span>
                    </div>
                </div>      
            <?php } else {?>
            <div class="control-group">
        	<label class="control-label">Tanggal Instalasi</label>
            <div class="controls">
							<div class="input-append" id="ui_date_picker_trigger">              
                                <input type="text" class="m-wrap medium" name="installation_date"/><span class="add-on"><i class="icon-calendar"></i></span>
                            </div>
							<span class="help-inline">Tanggal Instalasi dari mesin ATM</span>
            </div>
        	</div>
            <?php } ?>

			<div class="control-group">
            <label class="control-label">Team</label>
            <div class="controls">
							<input type="text" name="team" placeholder= "" class="input-medium" />
							<span class="help-inline">Team ATM</span>
            </div>
        	</div>
        	<div class="control-group">
            <label class="control-label">CE Owner</label>
            <div class="controls">
							<input type="text" name="ceowner" placeholder= "" class="input-medium" />
							<span class="help-inline">CE Owner dari mesin ATM</span>
            </div>
        	</div>
					<div class="control-group">
            <label class="control-label">Remarks2</label>
            <div class="controls">
							<input type="text" name="remarks2" placeholder= "" class="input-medium" />
							<span class="help-inline">Remarks2 dari mesin ATM</span>
            </div>
        	</div>	
        	<div class="control-group">
            <label class="control-label">Status</label>
            <div class="controls">
							<input type="text" name="status" placeholder= "" class="input-medium" />
							<span class="help-inline">Status mesin ATM</span>
            </div>
        	</div>
        	<div class="control-group">
        	 <label class="control-label">Coverage</label>
            <div class="controls">
							<input type="text" name="coverage" placeholder= "" class="input-medium" />
							<span class="help-inline">Coverage dari mesin ATM</span>
            </div>
        	</div>
			
            <?php if(isset($_REQUEST['sdErr'])){ ?>
                <div class="control-group error">
                    <label class="control-label" for="inputError">Start Date</label>
                    <div class="controls">
                        <div class="input-append" id="ui_date_picker_trigger">              
                            <input type="text" class="m-wrap medium" name="start_date"/><span class="add-on"><i class="icon-calendar"></i></span>
                        </div>
                        <span class="help-inline">
                            <?php echo  "<h9>"."<center>".$_REQUEST['sdErr']."</center>" ."</h4>"; ?>
                        </span>
                    </div>
                </div>      
            <?php } else {?>
            <div class="control-group">
            <label class="control-label">Start Date</label>
            <div class="controls">
							<div class="input-append" id="ui_date_picker_trigger">              
                                <input type="text" class="m-wrap medium" name="start_date"/><span class="add-on"><i class="icon-calendar"></i></span>
                            </div>
							<span class="help-inline">Tanggal awal PM dari mesin ATM</span>
            </div>
        	</div>
            <?php } ?>

            <?php if(isset($_REQUEST['edErr'])){ ?>
                <div class="control-group error">
                    <label class="control-label" for="inputError">End Date</label>
                    <div class="controls">
                        <div class="input-append" id="ui_date_picker_trigger">              
                            <input type="text" class="m-wrap medium" name="end_date"/><span class="add-on"><i class="icon-calendar"></i></span>
                        </div>
                        <span class="help-inline">
                            <?php echo  "<h9>"."<center>".$_REQUEST['edErr']."</center>" ."</h4>"; ?>
                        </span>
                    </div>
                </div>      
            <?php } else {?>
        	<div class="control-group">
            <label class="control-label">End Date</label>
            <div class="controls">
							<div class="input-append" id="ui_date_picker_trigger">              
                                <input type="text" class="m-wrap medium" name="end_date"/><span class="add-on"><i class="icon-calendar"></i></span>
                            </div>
							<span class="help-inline">Tanggal akhir PM dari mesin ATM</span>
            </div>
        	</div>
            <?php } ?>
			
            <?php if(isset($_REQUEST['pmErr'])){ ?>
                <div class="control-group error">
                    <label class="control-label" for="inputError">PM per year</label>
                    <div class="controls">
                        <input type="text" name="pm_per_year" placeholder= "" class="input-medium" />>
                        <span class="help-inline">
                            <?php echo  "<h9>"."<center>".$_REQUEST['pmErr']."</center>" ."</h4>"; ?>
                        </span>
                    </div>
                </div>      
            <?php } else {?>
            <div class="control-group">
                <label class="control-label">PM per year</label>
                <div class="controls">
							<input type="text" name="pm_per_year" placeholder= "" class="input-medium" />
							<span class="help-inline">Jumlah PM per year dari mesin ATM</span>
                </div>
        	</div>
            <?php } ?>
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
<!-- END ADVANCED TABLE widget-->
</div>
</div>
<!-- BEGIN JAVASCRIPTS-->
    <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script src="js/scripts.js"></script>
   <script src="js/ui-jqueryui.js"></script>
    <script>
          jQuery(document).ready(function() {       
             // initiate layout and plugins
             App.init();
             UIJQueryUI.init();
          });
    </script>
<!--END JAVASCRIPTS-->
</div>
</div>
	
<?php
	require('include/footer.php');
?>

