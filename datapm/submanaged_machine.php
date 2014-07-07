<head>
<?php
	require('include/header.php');
?>
<title>Sub Managed Machine</title>

</head>
<?php
  $terminal_id = $_GET["terminal_id"];
?>

<!-- BEGIN PAGE TITLE & BREADCRUMB-->     
<h3 class="page-title">
   Managed Machine Detail
   <small>Managed Machine Detail of Particular Machine </small>
</h3>
 <ul class="breadcrumb">
     <li>
         <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
     </li>
     <li>
         <a href="#">Data Tables</a> <span class="divider">&nbsp;</span>
     </li>
     <li>
         <a href="#">Managed Machine Details</a> <span class="divider">&nbsp;</span>
     </li>
     <li>
        <a href="#">Sub Details</a><span class="divider-last">&nbsp;</span>
      </li>
 </ul>
<!-- END PAGE TITLE & BREADCRUMB-->
   </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN ADVANCED TABLE widget-->
<div class="row-fluid">
  <div class="span12">
    <!-- BEGIN EXAMPLE TABLE widget-->
    <div class="widget">
      <div class="widget-title">
        <h4><i class="icon-reorder"></i>Sub Details</h4>

        <span class="tools">
          <a href="javascript:;" class="icon-chevron-down"></a>
          <a href="javascript:;" class="icon-remove"></a>
        </span>
      </div>
    <div class="widget-body"> 
          <?php                               
            if (!$link) {              
              die('Could not connect: ' . mysql_error());              
            }              
            //echo 'Connected successfully';              
            $data = mysql_query("select * from data_atm where terminal_id='$terminal_id'");
            while($row = mysql_fetch_array($data)) {              
          ?>       
        <dl class="dl-horizontal">
            <dt>Customer</dt>
              <dd> <?php echo $row['customer']?> </dd>
            <dt>Terminal ID</dt>
              <dd> <?php echo $row['terminal_id']?> </dd>
            <dt>WSID</dt>
              <dd> <?php echo $row['msn']?> </dd>
            <dt>Machine ID</dt>
              <dd> <?php echo $row['tipe_mesin']?> </dd>
            <dt>Address</dt>
              <dd> <?php echo $row['address']?> </dd>
            <dt>City</dt>
              <dd> <?php echo $row['city']?> </dd>
            <dt>Service Area</dt>
              <dd> <?php echo $row['service_area']?> </dd>
            <dt>Installation Date</dt>
              <dd> <?php echo $row['installation_date']?> </dd>
            <dt>Team</dt>
              <dd> <?php echo $row['team']?>  </dd>
            <dt>CE Owner</dt>
              <dd> <?php echo $row['ceowner']?></dd>
            <dt>Remarks 2</dt>
              <dd> <?php echo $row['remarks2']?> </dd>
            <dt>Customer Serial Number</dt>
              <dd> <?php echo $row['csn']?> </dd>
            <dt>Status</dt>
              <dd> <?php echo $row['status']?> </dd>
            <dt>Coverage</dt>
              <dd> <?php echo $row['coverage']?> </dd>
            <dt>Start Date</dt>
              <dd> <?php echo $row['start_date']?> </dd>
            <dt>End Date</dt>
              <dd> <?php echo $row['end_date']?> </dd>
            <dt>PM per Year</dt>
              <dd> <?php echo $row['pm_per_year']?> </dd>            
        </dl>
        <?php                 
              }               
              mysql_close();
        ?>                   
       </div>
           
    </div>
    </div>
    <!-- END EXAMPLE TABLE widget-->
</div>
</div>

  <!-- END ADVANCED TABLE widget-->

<!-- END PAGE CONTENT-->
</div>
<!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
</div>
   <!-- END CONTAINER -->
<?php
  require('include/footer.php');
?>