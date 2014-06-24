<head>
<?php include "include/header.php" ?>
<?php /*include "include/menuAdmin.php"*/ ?>

<title>Tambah ATM Type</title>
</head>
	
<!-- BEGIN PAGE TITLE & BREADCRUMB-->

<h3 class="page-title">
    Add ATM Type
    <small>For add ATM Type to the list</small>
</h3>
<ul class="breadcrumb">
    <li>
		<a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
    </li>
    <li>
        <a href="#">Manage ATM Type</a> <span class="divider">&nbsp;</span>
    </li>
	<li>
        <a href="#">Add ATM Type</a> <span class="divider-last">&nbsp;</span>
    </li>
	
</ul>

<!-- END PAGE TITLE & BREADCRUMB-->

<!-- BEGIN ADVANCED TABLE widget-->
<div class="row-fluid">
    <div class="span12">
	<!-- BEGIN EXAMPLE TABLE widget-->
		<div class="widget">
            <div class="widget-title">
				<h4><i class="icon-reorder"></i>Add ATM Type</h4>							
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
		        <form action="action/doTambahATM.php" method="post" class="form-horizontal">					
					<div class="control-group">
                        <label class="control-label">ATM Type</label>
                        <div class="controls">
							<input type="text" name="tipe_atm" placeholder= "CD1" class="input-medium" />
							<span class="help-inline">ATM Type</span>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label">Deskripsi</label>
                        <div class="controls">
							<input type="text" name="description" placeholder= "" class="input-medium" />
							<span class="help-inline">Deskripsi tipe ATM</span>
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

