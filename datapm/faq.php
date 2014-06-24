<head>
<?php
	require('include/header.php');
?>
<title>FAQ</title>
</head>
<!-- BEGIN PAGE TITLE & BREADCRUMB-->
<h3 class="page-title">
    Frequently Asked Question
    <small>List of questions about PM</small>
</h3>
<ul class="breadcrumb">
    <li>
		<a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
    </li>
    <li>
        <a href="#">FAQ</a> <span class="divider-last">&nbsp;</span>
    </li>
	<li class="search-wrap">
		<form class="hidden-phone" action="search_result.html">
            <div class="search-input-area">
				<input id=" " class="search-query" type="text" placeholder="Have a question?">
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
				<h4><i class="icon-reorder"></i>FAQs about PM</h4>
					<span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="javascript:;" class="icon-remove"></a>
                    </span>
				</div>
				
				<div class="widget-body">
				<!--List of FAQ-->					
					<ul class="faq-list">
						<li>
							<a href="#">
								Bagaimana?
							</a>
								Gini caranya
						</li>
						<li>
							<a href="#">
								Kapan?
							</a>
								Suatu saat
						</li>
						<li class="long">
							<a href="#">
								Pertanyaan yang jawabannya panjang....
							</a>
								Longer answer than the rest.
							</li>
					</ul>
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