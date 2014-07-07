<head>
<?php include "include/header.php" ?>
<?php /*include "include/menuAdmin.php"*/ ?>

<title>Tambah Bank</title>
</head>
	
<!-- BEGIN PAGE TITLE & BREADCRUMB-->

<h3 class="page-title">
    Add Bank
    <small>For add bank to the list</small>
</h3>
<ul class="breadcrumb">
    <li>
		<a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
    </li>
    <li>
        <a href="#">Manage Bank</a> <span class="divider">&nbsp;</span>
    </li>
	<li>
        <a href="#">Add Bank</a> <span class="divider-last">&nbsp;</span>
    </li>
	
</ul>	
<!-- END PAGE TITLE & BREADCRUMB-->

<!-- BEGIN ADVANCED TABLE widget-->
<div class="row-fluid">
    <div class="span12">
	<!-- BEGIN EXAMPLE TABLE widget-->
		<div class="widget">
            <div class="widget-title">
				<h4><i class="icon-reorder"></i>Add Bank</h4>							
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
		        <form action="action/doTambahBank.php" method="post" class="form-horizontal">
					<div class="control-group">
                        <label class="control-label">CSN</label>
                        <div class="controls">
							<input type="text" name="csn" placeholder= "" class="input-medium" />
							<span class="help-inline">CSN dari Bank</span>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label">Nama Bank</label>
                        <div class="controls">
							<input type="text" name="nama_bank" placeholder= "" class="input-medium" />
							<span class="help-inline">Nama Bank</span>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label">MA Agreement</label>
                        <div class="controls">
							<input type="text" name="ma_agreement" placeholder= "" class="input-medium" />
							<span class="help-inline">Isi MA Agreement dengan IBM</span>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label">Total PM / Year</label>
                        <div class="controls">
							<input type="text" name="pm_per_year" placeholder= "" class="input-medium" />
							<span class="help-inline">Isi Total PM / Year</span>
                        </div>
                    </div>
					<div class="form-actions">
                        <button type="submit" class="btn blue" name="submit"><i class="icon-ok"></i> Save</button>						
                        <a href="managed_bank.php"> <button type="button" class="btn" name="cancel"> <i class=" icon-remove"></i> Cancel </button> </a>
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

