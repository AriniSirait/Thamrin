<?php
if ($_GET["content"]=="" || $_GET["content"]==null){
	echo "Content not valid";
}else if ($_GET["content"]=="unclscall"){
	$content = file_get_contents('http://localhost:8080/SpringRest/rest/graph');
	echo $content;
}else if ($_GET["content"]=="unclscallDetail"){
	$param1 = $_GET['param1'];
	$param2 = rawurlencode($_GET['param2']);
	$content = file_get_contents('http://localhost:8080/SpringRest/rest/graph/'.$param1.'/'.$param2);
	echo $content;
}else if ($_GET["content"]=="engineer"){
	$content = file_get_contents('http://localhost:8080/SpringRest/rest/engineer');
	echo $content;
}else if ($_GET["content"]=="engineerDetail"){
	$param1 = $_GET['param1'];
	$content = file_get_contents('http://localhost:8080/SpringRest/rest/engineer/'.$param1);
	echo $content;
}else if ($_GET["content"]=="rmks") {
	$param1 = rawurlencode($_GET['param1']);
	$param2 = $_GET['param2'];
	$content = file_get_contents('http://localhost:8080/SpringRest/rest/rmks/'.$param1.'/'.$param2);
}elseif ($_GET["content"]=="clmn") {
	$content = file_get_contents('http://localhost:8080/SpringRest/rest/columns');
	echo $content;
}elseif ($_GET["content"]=="ssearch") {
	$param1 = $_GET['param1'];
	$content = file_get_contents('http://localhost:8080/SpringRest/rest/simplesearch/'.$param1);
	echo $content;
}elseif ($_GET["content"]=="asearch") {
	$param1 = rawurlencode($_GET['param1']);
	$content = file_get_contents('http://localhost:8080/SpringRest/rest/advsearch/'.$param1);
	echo $content;
}elseif ($_GET["content"]=="signin") {
	$param1 = $_GET['param1'];
	$param2 = $_GET['param2'];
	$content = file_get_contents('http://localhost:8080/SpringRest/rest/check/'.$param1.'/'.$param2);
	echo $content;
}
?>