<head>
	<?php
		require('include/header.php');
	?>
	<title>Summary</title>
</head> 	
	
<!-- BEGIN PAGE TITLE & BREADCRUMB-->
<h3 class="page-title">
	Dashboard
	<small> General Information </small>
</h3>
<ul class="breadcrumb">
	<li>
		<a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
	</li>
  <li>
     <a href="#">Data PM</a> <span class="divider">&nbsp;</span>
  </li>
	<li><a href="#">Summary</a><span class="divider-last">&nbsp;</span></li>
  <li class="pull-right search-wrap">
    <form class="hidden-phone" action="search_result.html">
      <div class="search-input-area">
          <input id=" " class="search-query" type="text" placeholder="Search">
          <i class="icon-search"></i>
      </div>
    </form>
  </li>
</ul>
<!-- END PAGE TITLE & BREADCRUMB-->
<!-- BEGIN ADVANCED TABLE widget-->
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN EXAMPLE TABLE widget-->
        <div class="widget">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i>Summary</h4>                            
            </div>
            <div class="widget-body">						
							<br />
							<?php
    				//$link=mysqli_connect("localhost","root","","datapm");
    				if (!$link) {
	    					die('Could not connect: ' . mysql_error());
	    				}
	    				//echo 'Connected successfully';
	    				$startRange = 5;
	    				$endRange = 12;
	    				$penyebut = 0; $pembilang = 0;
	    				$query = "SELECT installation_date, sum(7 - CEIL(EXTRACT(month from installation_date)/2)) AS penyebut FROM `data_atm` WHERE customer = 'BCA' and 
	    							team = 'Biru' and EXTRACT(month from installation_date) >= ".$startRange." AND EXTRACT(MONTH FROM installation_date) <= ".$endRange;
	    				$data = mysql_query($query);
	    				while($row = mysql_fetch_array($data)) { 
	    					// echo "Penyebut".$row['penyebut'];
	    					$penyebut = $row['penyebut'];
	    				}
	    				$query = "SELECT COUNT(*) AS pembilang FROM summary s, data_atm da WHERE s.msn = da.msn AND team = 'Biru' AND flag = 1 AND periode >= CEIL(".$startRange."/2) AND periode <= CEIL(".$endRange."/2) ";
	    				$data = mysql_query($query);
	    				while($row = mysql_fetch_array($data)) { 
	    					//echo "Pembilang".$row['pembilang'];
	    					$pembilang = $row['pembilang'];
	    				}
	    			?>  
	    			              	<table class="table table-striped table-bordered" id="sample_1">
              	<thead>
                  	<tr>
							<th>Nama Tim</th>
						<th>BCA</th>
                        <th>BNI</th>
						<th>CIMB Niaga</th>
						<th>BII</th>
						<th>PANIN</th>
						<th>MANDIRI</th>                        
                    </tr>
                </thead>							
                <tbody>							
                    <tr class="odd gradeX">                       
                        <td ><font color="BLUE"><strong>TEAM BIRU</font></td>						
						<td><?php echo $pembilang/$penyebut * 100 . "%"?></td>                        
                        <td>80%</td>
						<td>90%</td>
						<td>70%</td>
						<td>78%</td>
						<td>95%</td>						
                    </tr>
					<tr class="odd gradeX">                                   
                        <td ><a href="mailto:jhone-doe@gmail.com"></a><font color="RED"><strong>TEAM MERAH</strong></font></td>									
						<td>80%</td>                                    
                        <td>80%</td>
						<td>90%</td>
						<td>70%</td>
						<td>78%</td>
						<td>95%</td>									
                    </tr>
					<tr class="odd gradeX">                                   
                        <td ><a href="mailto:jhone-doe@gmail.com"></a><font color="GREEN"><strong>TEAM HIJAU</strong></td>									
						<td>80%</td>                                    
                        <td>80%</td>
						<td>90%</td>
						<td>70%</td>
						<td>78%</td>
						<td>95%</td>									
                    </tr>
					<tr class="odd gradeX">                                   
                        <td ><a href="mailto:jhone-doe@gmail.com"></a><font color="ORANGE"><strong>TEAM KUNING</strong></td>									
						<td>80%</td>                                    
                        <td>80%</td>
						<td>90%</td>
						<td>70%</td>
						<td>78%</td>
						<td>95%</td>									
                    </tr>	
					<tr class="odd gradeX">                                   
                        <td ><a href="mailto:jhone-doe@gmail.com"></a><font color="BLACK"><strong>TEAM REMOTE</strong></td>									
						<td>80%</td>                                    
                        <td>80%</td>
						<td>90%</td>
						<td>70%</td>
						<td>78%</td>
						<td>95%</td>									
                    </tr>                                
                </tbody>
        		</table>
        		<?php
	        		mysql_close();
	        	?> 

           </div>
    	</div>
    <!-- END EXAMPLE TABLE widget-->
	</div>
</div>

<!-- END ADVANCED TABLE widget-->
</div>
</div>
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