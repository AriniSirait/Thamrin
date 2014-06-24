<head>
<?php 
	require('include/header.php');
?>
<title>Update PM</title>
</head>
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
        <form action="#" class="form-horizontal">           
          <div class="control-group">
            <label class="control-label">Customer</label>
            <div class="controls">
                <input type="text" placeholder="BNI" class="input-medium" />
                <span class="help-inline">Customer Name</span>
            </div>
          </div>
		      <div class="control-group">
            <label class="control-label">WSID</label>
            <div class="controls">
                <input type="text" placeholder="S1DKRMC002" class="input-medium" />
                <span class="help-inline">Workstation Id</span>
            </div>
          </div>			
			    <div class="control-group">
            <label class="control-label">SN</label>
            <div class="controls">
                <input type="text" placeholder="IEA1177" class="input-medium" />
                <span class="help-inline">Machine Serial Number</span>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">PM History</label>
            <div class="controls">
              <label class="checkbox line">
                <input type="checkbox" value="" disabled="true" checked/> PM1 (23 January 2014 - Engineer4)
              </label>
              <label class="checkbox line">
                <input type="checkbox" value="" /> PM2 
      						<button type="submit" class="btn blue"> Date</button>
      						<select class="input-small m-wrap" tabindex="1">
                    <option value="Category 1">Engineer1</option>
                    <option value="Category 2">Engineer1</option>
                    <option value="Category 3">Engineer1</option>
                    <option value="Category 4">Engineer1</option>
						        <option value="Category 3">Engineer1</option>
                    <option value="Category 4">Engineer1</option>
						      </select>
              </label>
					    <label class="checkbox line">
                <input type="checkbox" value="" /> PM3
      						<button type="submit" class="btn blue"> Date</button>
      						<select class="input-small m-wrap" tabindex="1">
                    <option value="Category 1">Engineer1</option>
                    <option value="Category 2">Engineer1</option>
                    <option value="Category 3">Engineer1</option>
                    <option value="Category 4">Engineer1</option>
						        <option value="Category 3">Engineer1</option>
                    <option value="Category 4">Engineer1</option>
						      </select>
              </label>
					    <label class="checkbox line">
                <input type="checkbox" value="" /> PM4
    						<button type="submit" class="btn blue">Date</button>
    						<select class="input-small m-wrap" tabindex="1">
                  <option value="Category 1">Engineer1</option>
                  <option value="Category 2">Engineer1</option>
                  <option value="Category 3">Engineer1</option>
                  <option value="Category 4">Engineer1</option>
					       	<option value="Category 3">Engineer1</option>
                  <option value="Category 4">Engineer1</option>
						    </select>
              </label>
            </div>
          </div>                  
          <div class="form-actions">
            <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
            <button type="button" class="btn"><i class=" icon-remove"></i> Cancel</button>
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
<!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
 <?php 
	require('include/footer.php');
?>