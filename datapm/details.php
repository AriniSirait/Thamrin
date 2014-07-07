<head>
<?php
	require('include/header.php');
?>
<title>Details</title>

</head>
  <!-- BEGIN PAGE TITLE & BREADCRUMB-->     
  <h3 class="page-title">
     Data PM Detail
     <small>All Machine for all account</small>
  </h3>
   <ul class="breadcrumb">
       <li>
           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
       </li>
       <li>
           <a href="#">Data Tables</a> <span class="divider">&nbsp;</span>
       </li>
       <li><a href="#">PM Details</a><span class="divider-last">&nbsp;</span></li>
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
          <h4><i class="icon-reorder"></i>Managed Details</h4>

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
      	<br />
        <table class="table table-striped table-bordered" id="sample_1">
        <thead>
            <tr>
              <th >Customer</th>
              <th class="hidden-phone">S/N</th>
              <th >WSID</th>
              <th class="hidden-phone">Location</th>
              <th >Team</th>
              <!--<th style="display: none">PM per Year</th>-->
              <th >Status</th>
              <th >Action</th>
            </tr>
        </thead>				
        <tbody>
    			<?php    				
    				if (!$link) {
    					die('Could not connect: ' . mysql_error());
    				}
    				//echo 'Connected successfully';
    				$data = mysql_query("select * from data_atm");
            $a = '';
    				while($row = mysql_fetch_array($data)) { 
    			?>   
    			  <tr class="odd gradeX">
      				<td ><?php echo $row['customer']?></td>
                    <td class="center hidden-phone"> <a href="subdetails.php?msn=<?php echo $row['msn'];?>"><?php echo $row['msn']; $a=$row['msn'];?></td>    
      				<td >  <?php echo $row['terminal_id']?> </a> </td>	
                    <td class="center hidden-phone"><?php echo $row['city']?></td>              
      				<td><?php echo $row['team']?></td>	
              
              <td >
                <?php
                    $bintang = 0;
                    $tt = $row['terminal_id'];
                      $his = mysql_query("select * from historypm where terminal_id='$tt' ");
                      while($row = mysql_fetch_array($his)) { 
                            $bintang++; 
                ?>
                    <img src="img/star_yes.jpg" width="15px">
                <?php
                    }
                ?>
                
                <?php
                    $last = 6 - $bintang;
                      while($last > 0) { 
                            $last--; 
                ?>
                    <img src="img/star_no.jpg" width="15px">
                <?php
                    }
                ?>   
                
                
              </td>  															
      				<td ><span class="label label-success"><a href="updatepm.php?msn=<?php echo $a;?>">Update Now!</a></span></td>      				
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
