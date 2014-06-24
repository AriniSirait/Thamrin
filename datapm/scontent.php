<head>
<?php
	require('include/header.php');
?>
<title>Specific Content</title>
</head>

<!-- BEGIN PAGE TITLE & BREADCRUMB-->
<?php
     $bank_option = $_GET["bank_option"];
?>
<h3 class="page-title">
    Specific Content
    <small>Content related to the Bank</small>
</h3>
<ul class="breadcrumb">
    <li>
		<a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
    </li>
    <li>
        <a href="#">Bank Option</a> <span class="divider">&nbsp;</span>
    </li>
	<li>
        <a href="#">Specific Content</a> <span class="divider">&nbsp;</span>
    </li>
	<li>
        <a href="#"> Bank <?php echo $bank_option ?> </a> <span class="divider-last">&nbsp;</span>
    </li>
</ul>

<!-- END PAGE TITLE & BREADCRUMB-->

<!-- BEGIN ADVANCED TABLE widget-->
<div class="row-fluid">
    <div class="span12">
	<!-- BEGIN EXAMPLE TABLE widget-->
		<!-- widget Call Center -->
		<div class="widget">
            <div class="widget-title">
				<h4><i class="icon-reorder"></i>Call Center</h4>
				<span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
			</div>
			<div class="widget-body">
				<table class="table table-striped table-bordered">
                    <thead>
						<tr>
 							<th>Kota</th>
							<th>No Telepon</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$link=mysqli_connect("localhost","root","","datapm");
						if (!$link) {
							die('Could not connect: ' . mysql_error());
						}
						//echo 'Connected successfully';
						$result = mysqli_query($link,"SELECT * FROM callcenter WHERE bank='$bank_option'");
						
						while($row = mysqli_fetch_array($result)) {
									  
					?>	
						<tr class="odd gradeX">
						<td> <?php echo $row['kota']?> </td>
						<td> <?php echo $row['telp']?> </td>
						
					<?php 
						}
						mysqli_close($link);
					?>
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- widget Leader Info -->
        <div class="widget">
            <div class="widget-title">
				<h4><i class="icon-reorder"></i>Leader Info</h4>
				<span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
			</div>
			<div class="widget-body">
				<table class="table table-striped table-bordered">
                    <thead>
						<tr>
 							<th>Nama</th>
							<th>Email</th>
							<th>Cabang</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$link=mysqli_connect("localhost","root","","datapm");
						if (!$link) {
							die('Could not connect: ' . mysql_error());
						}
						//echo 'Connected successfully';
						$result = mysqli_query($link,"SELECT * FROM user");
						
						while($row = mysqli_fetch_array($result)) {
									  
					?>	
						<tr class="odd gradeX">
						<td> <?php echo $row['nama_lengkap']?> </td>
						<td> <?php echo $row['email']?> </td>
						<td> <?php echo $row['cabang']?> </td>
					<?php 
						}
						mysqli_close($link);
					?>
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- widget FAQ -->
		<div class="widget">
            <div class="widget-title">
				<h4><i class="icon-reorder"></i>FAQ</h4>
				<span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
			</div>
			<div class="widget-body">
				<?php
					$link=mysqli_connect("localhost","root","","datapm");
					if (!$link) {
						die('Could not connect: ' . mysql_error());
					}
					//echo 'Connected successfully';
					$result = mysqli_query($link,"SELECT * FROM faq WHERE bank='$bank_option'");

					while($row = mysqli_fetch_array($result)) {
								  
				?>
				<ul class="faq-list">
					<li>
						<a href="#">
							<?php echo $row['question']?>
						</a>
							<?php echo $row['answer']?>
					
				</ul>
				<?php 
					}
					mysqli_close($link);
				?>
			</div>
		</div>
		
		<!-- widget Prosedur Ekskalasi Problem -->
		<div class="widget">
            <div class="widget-title">
				<h4><i class="icon-reorder"></i>Prosedur Ekskalasi Problem</h4>
				<span class="tools">
                    <a href="javascript:;" class="icon-chevron-down"></a>
                    <a href="javascript:;" class="icon-remove"></a>
                </span>
			</div>
			<div class="widget-body">
			</div>
		</div>
	</div>
</div>

</div>
</div>
<!-- END ADVANCED TABLE widget-->
</div>
</div>
</div>
</div>
<?php
	require('include/footer.php');
?>