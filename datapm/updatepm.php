<head>
<?php 
	require('include/header.php');
?>
<title>Update PM</title>
</head>

<?php
      $msn = $_GET["msn"];
?>

<!-- BEGIN PAGE TITLE & BREADCRUMB-->      
<h3 class="page-title">
 Update PM Data
 <small>simple form layouts</small>
</h3>
<ul class="breadcrumb">
 <li>
     <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
 </li>
 <li>
     <a href="#">Data PM</a> <span class="divider">&nbsp;</span>
 </li>
 <li><a href="#">Update PM</a><span class="divider-last">&nbsp;</span></li>
</ul>
<!-- END PAGE TITLE & BREADCRUMB-->
     </div>
  </div>

<?php
    $data = mysql_query("select * from data_atm where msn='$msn' ");
    $hasil = mysql_fetch_array($data);
?>
 <script type="text/javascript">
    function toggleTB2(what){
        if(what.checked){            
            document.theForm.op2.disabled=0;
        }else{           
            document.theForm.op2.disabled=1;
        }
    }
    function toggleTB3(what){
        if(what.checked){            
            document.theForm.op3.disabled=0;
        }else{           
            document.theForm.op3.disabled=1;
        }
    }
    function toggleTB4(what){
        if(what.checked){            
            document.theForm.op4.disabled=0;
        }else{           
            document.theForm.op4.disabled=1;
        }
    }
    function toggleTB5(what){
        if(what.checked){            
            document.theForm.op5.disabled=0;
        }else{           
            document.theForm.op5.disabled=1;
        }
    }
    function toggleTB6(what){
        if(what.checked){            
            document.theForm.op6.disabled=0;
        }else{           
            document.theForm.op6.disabled=1;
        }
    }
  </script> 

<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
  <div class="span12 sortable">
    <!-- BEGIN SAMPLE FORMPORTLET-->    
    <div class="widget">
      <div class="widget-title">
          <h4><i class="icon-reorder"></i>Update Pm</h4>
            <span class="tools">
            <a href="javascript:;" class="icon-chevron-down"></a>
            <a href="javascript:;" class="icon-remove"></a>
            </span>
      </div>
      <div class="widget-body">
        <!-- BEGIN FORM-->
        <form name="theForm" action="action/doUpdatePM.php" method="post" class="form-horizontal">           
          <div class="control-group">
            <label class="control-label">Customer</label>
            <div class="controls">
                <input type="text" name="customer" placeholder="<?php echo $hasil['customer']; ?>" value= "<?php echo $hasil['customer']; ?>" class="input-medium" readonly/>
                <span class="help-inline">Customer Name</span>
            </div>
          </div>
		      <div class="control-group">
            <label class="control-label">WSID</label>
            <div class="controls">
                <input type="text" name="terminal_id" placeholder="<?php echo $hasil['terminal_id']; ?>" value= "<?php echo $hasil['terminal_id']; ?>" class="input-medium" readonly/>
                <span class="help-inline">Workstation ID</span>
            </div>
          </div>			
		<div class="control-group">
            <label class="control-label">SN</label>
            <div class="controls">
                <input type="text" name="msn" placeholder="<?php echo $hasil['msn']; ?>" value= "<?php echo $hasil['msn']; ?>" class="input-medium" readonly/>
                <span class="help-inline">Machine Serial Number</span>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">PM History</label>
            <div class="controls">
                <?php if ($hasil['pm_per_year'] == 4) {?>
                  
                <?php } else { ?>
                    <label class="checkbox line">               
                        <input type="checkbox" name="theCB" onClick="toggleTB2(this)" />PM2                        
                        <input type="text" class="m-wrap medium" /><span class="add-on"><i class="icon-calendar"></i></span>   
                        <select class="input-medium m-wrap" tabindex="1" name="op2" disabled>
                            <option value="Category 1">Engineer1</option>
                            <option value="Category 2">Engineer2</option>
                            <option value="Category 3">Engineer3</option>
                            <option value="Category 4">Engineer4</option>
                            <option value="Category 5">Engineer5</option>
                            <option value="Category 6">Engineer6</option>
                        </select>                        
                    </label>                    
                    <label class="checkbox line">               
                        <input type="checkbox" name="theCB3" onClick="toggleTB3(this)" />PM3                        
                        <input type="text" name="date" placeholder="YYYY-MM-DD">   
                        <select class="input-medium m-wrap" tabindex="1" name="op3" disabled>
                            <option value="Category 1">Engineer1</option>
                            <option value="Category 2">Engineer2</option>
                            <option value="Category 3">Engineer3</option>
                            <option value="Category 4">Engineer4</option>
                            <option value="Category 5">Engineer5</option>
                            <option value="Category 6">Engineer6</option>
                        </select>                        
                    </label>
                    <label class="checkbox line">               
                        <input type="checkbox" name="theCB4" onClick="toggleTB4(this)" />PM4                        
                        <input type="text" name="date" placeholder="YYYY-MM-DD">   
                        <select class="input-medium m-wrap" tabindex="1" name="op4" disabled>
                            <option value="Category 1">Engineer1</option>
                            <option value="Category 2">Engineer2</option>
                            <option value="Category 3">Engineer3</option>
                            <option value="Category 4">Engineer4</option>
                            <option value="Category 5">Engineer5</option>
                            <option value="Category 6">Engineer6</option>
                        </select>                        
                    </label>
                    <label class="checkbox line">               
                        <input type="checkbox" name="theCB5" onClick="toggleTB5(this)" />PM5                        
                        <input type="text" name="date" placeholder="YYYY-MM-DD">   
                        <select class="input-medium m-wrap" tabindex="1" name="op5" disabled>
                            <option value="Category 1">Engineer1</option>
                            <option value="Category 2">Engineer2</option>
                            <option value="Category 3">Engineer3</option>
                            <option value="Category 4">Engineer4</option>
                            <option value="Category 5">Engineer5</option>
                            <option value="Category 6">Engineer6</option>
                        </select>                        
                    </label>
                    <label class="checkbox line">               
                        <input type="checkbox" name="theCB6" onClick="toggleTB6(this)" />PM6                        
                        <input type="text" name="date" placeholder="YYYY-MM-DD">   
                        <select class="input-medium m-wrap" tabindex="1" name="op6" disabled>
                            <option value="Category 1">Engineer1</option>
                            <option value="Category 2">Engineer2</option>
                            <option value="Category 3">Engineer3</option>
                            <option value="Category 4">Engineer4</option>
                            <option value="Category 5">Engineer5</option>
                            <option value="Category 6">Engineer6</option>
                        </select>                        
                    </label>
                    
              <?php } ?>
            </div>
          </div>                  
          <div class="form-actions">
            <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
            <button type="reset" class="btn"><i class=" icon-remove"></i> Cancel</button>
          </div>
        </form>
        <!-- END FORM-->
      </div>
    </div>
    <!-- END SAMPLE FORM PORTLET-->
  </div>
</div>

  <!-- END PAGE CONTENT-->         
</div>
<!-- BEGIN JAVASCRIPTS

<script src="assets/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/jquery-ui/jquery-ui.js"></script>
<script>
    $(function() {
       $( "#datepicker" ).datepicker();
    });
</script>
   END JAVASCRIPTS-->
<!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
 <?php 
	require('include/footer.php');
?>