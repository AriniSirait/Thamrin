<head>
<?php
	require('include/header.php');
?>
<title>Managed ATM</title>
</head>

                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->     
                  <h3 class="page-title">
                     Data ATM Type Detail
                     <small>All ATM Type from IBM</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="bank_option.php"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">Data Tables</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Managed ATM Type</a><span class="divider-last">&nbsp;</span></li>
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
                            <h4><i class="icon-reorder"></i>Managed ATM Type</h4>							
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
            							<a href="tambah_atm.php">Add New ATM Type</a>
            							<br />
                            <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                              <tr>
               									<th class="hidden-phone">ID</th>
              									<th>Tipe ATM</th>
              									<th>Description</th>																		
              									<th>Action</th>                                    
                              </tr>
                            </thead>
														
                            <tbody>
								<?php									
									if (!$link) {
										die('Could not connect: ' . mysql_error());
									}
									//echo 'Connected successfully';
									$data = mysql_query("select * from atm_type");
                  while($row = mysql_fetch_array($data)) {									  
								?>
								<tr class="odd gradeX">
									<td class="center hidden-phone"><?php echo $row['id']?></td>
                  <td ><?php echo $row['tipe_atm']?></td>    
									<td><?php echo $row['description']?></td>																		
									<td><span class="label label-success"><a href="update_atm.php?user_option=edit&id=<?php echo $row['id'];?>">Edit</a></span>
									|
									<a href="#" onclick="confirmation('<?php echo $row['id'];?>')"> <span class="label label-warning" >Delete</a></span></td>
																											
                                </tr>
								<?php 
									}
									mysql_close();
								?>
                                
                                </tbody>
                        </table>
                        <a href="action/doDownload.php?user_option=atm">DOWNLOAD</a>
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
		var answer = confirm("Do you want to delete this ATM Type?")
		if (answer){			
			document.location= "action/doEditATM.php?id="+id;
			alert("The ATM Type is deleted");
		}
		else{
			alert("Thanks for not deleting the ATM Type!")
		}
	}
	</script>
   <!-- END SCRIPT -->
   <!-- END CONTAINER -->
<?php
	require('include/footer.php');
?>
