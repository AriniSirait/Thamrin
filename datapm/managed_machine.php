<head>
<?php
	require('include/header.php');
?>
<title>Managed Machine</title>
</head>

<!-- BEGIN PAGE TITLE & BREADCRUMB-->     
<h3 class="page-title">
Data Machine Detail
<small>All Machine from IBM</small>
</h3>
<ul class="breadcrumb">
	<li>
		<a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
	</li>
	<li>
		<a href="#">Data Tables</a> <span class="divider">&nbsp;</span>
	</li>
	<li><a href="#">Managed Machine</a><span class="divider-last">&nbsp;</span></li>
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
            <h4><i class="icon-reorder"></i>Managed Machine</h4>              
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
                                <div class="btn-group">
                                    <a href="tambah_machine.php"> <button id="sample_editable_1_new" class="btn green">
                                        Add New Machine <i class="icon-plus"></i>
                                    </button> </a>
                                </div>
                                <div class="btn-group pull-right">
                                    <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">                                        
                                        <li><a href="action/doDownload.php?user_option=machine">Export to Excel</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="space15"></div>				
					<table class="table table-striped table-bordered" id="sample_1">							
					<thead>							
						<tr>								
							<!-- <th class="hidden-phone">ID</th> -->
							<th>Customer</th>
							<th class="hidden-phone">Cust No</th>
							<th >Terminal ID</th>
							<th class="hidden-phone"> Machine Serial Number</th>
							<!-- <th>Mesin</th> -->
							<!-- <th class="hidden-phone">Address</th> -->
							<th class="hidden-phone">City</th>
							<th class="hidden-phone">Service Area</th>
							<!-- <th class="hidden-phone">Tanggal Instalasi</th> -->
							<th class="hidden-phone">Team</th>
							<th class="hidden-phone">CE Owner</th>
							<!-- <th class="hidden-phone">Remarks2</th>                 
							<th class="hidden-phone">Status</th>
							<th>Coverage</th>
							<th class="hidden-phone">Start Date</th>
							<th >End Date</th> -->
							<th>PM per year</th>
            				<th>Action</th>                                    
						</tr>
					</thead>						
					<tbody>							
						<?php                               
			                if (!$link) {              
			                  die('Could not connect: ' . mysql_error());              
			                }              
			                //echo 'Connected successfully';              
			                $data = mysql_query("select * from data_atm");
			               	while($row = mysql_fetch_array($data)) {              
		              	?>                        							 
							<tr class="odd gradeX">		
								 					
							 	<td ><?php echo $row['customer']?></td>								    
								<td class="center hidden-phone"><?php echo $row['csn']?></td>								                                
								<td > <a href="submanaged_machine.php?terminal_id=<?php echo $row['terminal_id'];?>"> <?php echo $row['terminal_id']?> </a> </td>
								<td class="center hidden-phone"><?php echo $row['msn']?></td>
								   
				                <td class="center hidden-phone"><?php echo $row['city']?></td>                                                
				                <td class="center hidden-phone"><?php echo $row['service_area']?></td>
				                
				                <td class="center hidden-phone"><?php echo $row['team']?></td>   
				                <td class="center hidden-phone"><?php echo $row['ceowner']?></td>
				                
				                <td ><?php echo $row['pm_per_year']?></td> 
								<td><span class="label label-success"><a href="update_machine.php?user_option=edit&id=<?php echo $row['id'];?>">Edit</a></span>
								|
								<a  href="#" onclick="confirmation('<?php echo $row['id'];?>')"> <span class="label label-warning" >Delete</a></span></td>
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
  var answer = confirm("Do you want to delete this Machine?")
  if (answer){      
    document.location= "action/doEditMachine.php?id="+id;
    alert("The Machine is deleted");
  }else{
    alert("Thanks for not deleting the Machine!")
  	}
	}
</script>
   <!-- END SCRIPT -->
	 <!-- END CONTAINER -->
<?php
	require('include/footer.php');
?>
