<head>
<?php 
    require('include/header.php');
?>
<title>Update PM</title>
</head>

<?php
      $terminal_id = $_GET["terminal_id"];
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
    $data = mysql_query("select * from data_atm where terminal_id='$terminal_id' ");    
    $hasil = mysql_fetch_array($data);
?>
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
        <?php if(isset($_REQUEST['msg'])){ ?>
            <div class="valid_box">
               <?php echo  "<h4>"."<center>".$_REQUEST['msg']."</center>" ."</h4>"; ?>
            </div>
        <?php }?>
        <!-- BEGIN FORM-->
        <form name="theForm" action="action/doUpdatePM.php" method="post" class="form-horizontal form-row-seperated">           
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
                <div class="input-append" id="ui_date_picker_trigger">              
                    <input type="text" class="m-wrap medium" name="date"/><span class="add-on"><i class="icon-calendar"></i></span>
                </div>   
                <select class="input-medium m-wrap" tabindex="1" name="eng">
                    <option value="Category 1">Engineer1</option>
                    <option value="Category 2">Engineer2</option>
                    <option value="Category 3">Engineer3</option>
                    <option value="Category 4">Engineer4</option>
                    <option value="Category 5">Engineer5</option>
                    <option value="Category 6">Engineer6</option>
                </select>                        
            </div>
          </div>               

          <div class="form-actions">
            <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
            <button type="reset" class="btn"><i class=" icon-remove"></i> Cancel</button>
          </div>

          <div>
                     <div class="widget-title">
                        <h4>History</h4>
                     </div>
                     <div class="widget-body">
                        <table class="table table-striped table-bordered" id="sample_1">
                           <thead>
                              <tr>
                                 <th>No</th>
                                 <th>Engineer</th>
                                 <th>Date PM</th>
                              </tr>
                           </thead>
                           <tbody>
                             <?php
                                if (!$link) {
                                    die('Could not connect: ' . mysql_error());
                                }                            
                                 $no = 0;
                                 $his = mysql_query("select * from historypm where terminal_id='$terminal_id' ");
                                 while($row = mysql_fetch_array($his)) { 
                                 $no++; 
                             ?>   
                            <tr class="odd gradeX">
                                <td ><?php echo $no?></td>
                                <td ><?php echo $row['eng']?></td>    
                                <td ><?php echo $row['date']?></td>   
                            </tr>
                            <?php
                                }
                                mysql_close();
                            ?>
                           </tbody>
                        </table>
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
<!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
 <?php 
    require('include/footer.php');
?>