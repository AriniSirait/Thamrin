<head>
<?php
	require('include/header.php');
?>
<title>Managed Bank</title>
</head>

  <!-- BEGIN PAGE TITLE & BREADCRUMB-->     
  <h3 class="page-title">
     Data Bank Detail
     <small>All bank partner with IBM</small>
  </h3>
   <ul class="breadcrumb">
       <li>
           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
       </li>
       <li>
           <a href="#">Data Tables</a> <span class="divider">&nbsp;</span>
       </li>
       <li><a href="#">Managed Bank</a><span class="divider-last">&nbsp;</span></li>
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
          <h4><i class="icon-reorder"></i>Managed Bank</h4>

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
      	<div class="clearfix">
            <!-- <div class="btn-group">
                <a href="tambah_bank.php"> <button id="sample_editable_1_new" class="btn green">
                    Add New Bank <i class="icon-plus"></i>
                </button> </a>
            </div> -->
            <div class="btn-group pull-right">
                <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right">                                        
                    <li><a href="action/doDownload.php?user_option=bank">Export to Excel</a></li>
                </ul>
            </div>
        </div>
        <div class="space15"></div>
        <table class="table table-striped table-bordered" id="sample_1">
        <thead>
            <tr>      				
        			<th>Nama Bank</th>
        			<th class="hidden-phone">Customer Serial Number</th>
        			<th class="hidden-phone">MA Agreement</th>									
              <th>Total PM / Year</th>									
        			<th>Action</th>                          
            </tr>
        </thead>				
        <tbody>
    			<?php
    				//$link=mysqli_connect("localhost","root","","datapm");
    				if (!$link) {
    					die('Could not connect: ' . mysql_error());
    				}
    				//echo 'Connected successfully';

    				$data = mysql_query("select distinct customer, csn, pm_per_year from data_atm where csn != '' ");
    				while($row = mysql_fetch_array($data)) { 
                
    			?>   
    			  <tr class="odd gradeX">      				
              <td ><?php echo $row['customer']?></td>    
      				<td class="center hidden-phone"><?php echo $row['csn']?></td>	
              <td class="center hidden-phone"><?php echo $row['pm_per_year']?></td>   
                <?php
                  $data1 = mysql_query("select distinct tipe_mesin, coverage  from data_atm where customer = '".$row['customer']."'");
                  $ma='';
                  while($row1 = mysql_fetch_array($data1)) { 
                  $ma.=$row1['tipe_mesin'].":".$row1['coverage']."<br>";
                  }
                ?>
              <td class="center hidden-phone"><?php echo $ma ?></td>  
                																			
      				<td><span class="label label-success"><a href="update_bank.php?user_option=edit&id=<?php echo $row['id'];?>">Edit</a></span>
      				|
      				<a href="#" onclick="confirmation('<?php echo $row['id'];?>')"> <span class="label label-warning" >Delete</a></span></td>												
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
   <!-- BEGIN SCRIPT -->
   <script type="text/javascript">
		function confirmation(id) {
		var answer = confirm("Do you want to delete this bank?")
		if (answer){			
			document.location= "action/doEditBank.php?id="+id;
			alert("The bank is deleted");
		}
		else{
			alert("Thanks for not deleting the bank!")
		}
	}
	</script>
   <!-- END SCRIPT -->
   <!-- END CONTAINER -->
<?php
	require('include/footer.php');
?>
