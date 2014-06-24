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
      	<a href="tambah_bank.php">Add New Bank</a>
      	<br />
        <table class="table table-striped table-bordered" id="sample_1">
        <thead>
            <tr>
      				<th class="hidden-phone">ID</th>
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
    				$data = mysql_query("select * from data_bank");
    				while($row = mysql_fetch_array($data)) { 
    			?>   
    			  <tr class="odd gradeX">
      				<td class="center hidden-phone"><?php echo $row['id']?></td>
              <td ><?php echo $row['nama_bank']?></td>    
      				<td class="center hidden-phone"><?php echo $row['csn']?></td>	
              <td class="center hidden-phone"><?php echo $row['ma_agreement']?></td>
      				<td><?php echo $row['pm_per_year']?></td>																	
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
        <a href="action/doDownload.php?user_option=bank">DOWNLOAD</a>
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
