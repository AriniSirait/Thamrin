<head>
<?php
	require('include/header.php');
?>
<title>Managed User</title>
</head>
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->     
                  <h3 class="page-title">
                     Data User Detail
                     <small>All User by Administrator</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">Data Tables</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Managed User</a><span class="divider-last">&nbsp;</span></li>
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
                            <h4><i class="icon-reorder"></i>Managed User</h4>
							
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
                                    <a href="tambah_user.php"> <button id="sample_editable_1_new" class="btn green">
                                        Add New User <i class="icon-plus"></i>
                                    </button> </a>
                                </div>
                                <div class="btn-group pull-right">
                                    <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">                                        
                                        <li><a href="action/doDownload.php?user_option=user">Export to Excel</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="space15"></div>
                            <table class="table table-striped table-bordered" id="sample_1">
								<thead>
									<tr>
										<th>NIK</th>
										<th>Username</th>
										<th class="hidden-phone">Nama Lengkap</th>										
										<th class="hidden-phone">Email</th>
										<th class="hidden-phone">Telp</th>																			
										<th>Action</th>
																			
									</tr>
								</thead>								
								<tbody>
								<?php									
									if (!$link) {
										die('Could not connect: ' . mysql_error());
									}
									//echo 'Connected successfully';
									$data = mysql_query("select * from user");
									while($row = mysql_fetch_array($data)){
									  
								?>
									<tr class="odd gradeX">
										<td><?php echo $row['nik']?></td>
										<td><?php echo $row['username']?></td>                                    
										<td class="center hidden-phone"><?php echo $row['nama_lengkap']?></td>										
										<td class="center hidden-phone"><?php echo $row['email']?></td>
										<td class="center hidden-phone"><?php echo $row['telp']?></td>										
										<td><span class="label label-success"><a href="update_user.php?user_option=edit&nik=<?php echo $row['nik'];?>">Edit</a></span>
										|
										<a href="#" onclick="confirmation('<?php echo $row['nik'];?>')"> <span class="label label-warning"  >Delete</a></span></td>
																												
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
		function confirmation(nik) {
		var answer = confirm("Do you want to delete this user?")
		if (answer){			
			document.location= "action/doEditUser.php?user_option=delete&nik="+nik;
			alert("The user is deleted");
		}
		else{
			alert("Thanks for not deleting the user!")
		}
	}
	</script>
   <!-- END SCRIPT -->
<!-- BEGIN FOOTER -->   
<?php
	require('include/footer.php');
?>
<!-- END CONTAINER -->
