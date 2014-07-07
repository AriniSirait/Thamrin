<head>
<?php
	require('include/header.php');
?>
<title>Sub Details</title>

</head>
<?php
  $msn = $_GET["msn"];
?>

<!-- BEGIN PAGE TITLE & BREADCRUMB-->     
<h3 class="page-title">
   Data PM Detail
   <small>History PM Detail of Particular Machine </small>
</h3>
 <ul class="breadcrumb">
     <li>
         <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
     </li>
     <li>
         <a href="#">Data Tables</a> <span class="divider">&nbsp;</span>
     </li>
     <li>
         <a href="#">PM Details</a> <span class="divider">&nbsp;</span>
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
                 $his = mysql_query("select * from historypm where msn='$msn' ");
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