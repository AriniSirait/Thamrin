<head>
<?php
	require('include/header.php');
?>
<title>Managed Table</title>
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
                       <li><a href="#">Managed Tables</a><span class="divider-last">&nbsp;</span></li>
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
                            <h4><i class="icon-reorder"></i>Managed Table</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                                <tr>
 									<th >Customer</th>
									<th>S/N</th>
                                    <th >WSID</th>
                                    <th class="hidden-phone">Location</th>
                                    <th >Team</th>
									<th class="hidden-phone">Status</th>
									<th class="hidden-phone">Action</th>
                                </tr>
                            </thead>
							
							
							
                            <tbody>
							<?php
								$link=mysqli_connect("localhost","root","","datapm");
								if (!$link) {
									die('Could not connect: ' . mysql_error());
								}
								//echo 'Connected successfully';
								$result = mysqli_query($link,"SELECT * FROM machinelist");
								$i=0;
								while($row = mysqli_fetch_array($result)) {
								$i++;
								  
							?>
                                <tr class="odd gradeX">
                                   
                                    <td ><a href="mailto:jhone-doe@gmail.com"><?php echo $row['customer']?></a></td>
									<td><?php echo $row['sn']?></td>
                                    
                                    <td class="hidden-phone"><?php echo $row['wsid']?></td>
                                    <td class="center hidden-phone"><?php echo $row['location']?></td>
									<td ><?php echo $row['team']?></td>
									<td class="center hidden-phone">
										<img src="img/star_yes.jpg" width="15px">
										<img src="img/star_yes.jpg" width="15px">
										<img src="img/star_no.jpg" width="15px">
										
										<img src="img/star_no.jpg" width="15px">
										<img src="img/star_no.jpg" width="15px">
										<img src="img/star_no.jpg" width="15px">
										
									</td>
                                    <td ><span class="label label-success"><a href="updatepm.php">Update Now!</a></span></td>
                                </tr>
								<?php 
									}
									mysqli_close($link);
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
