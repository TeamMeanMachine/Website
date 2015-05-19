<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

$pagename = htmlspecialchars($_GET["page"]);

if ($pagename == '') {
	$pagename = "About Us";
}

$menu = array(
"About Us" => "mindex.php?page=About Us",
"News" => "mindex.php?page=Latest News",
"Calendar" => "mindex.php?page=Calendar",
"Awards" => "mindex.php?page=Robots and Awards",
"Parents" => "mindex.php?page=Parent's Corner",
"Links" => "mindex.php?page=Important Links",
);


?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo "$pagename - Team 2471"; ?></title>
<meta name="keywords" content="" />
<meta name="Everyday Series" content="" />
<link href="mobile.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<!-- start header -->
<?php

include("mheader.php");

?>
<!-- end header -->
<div id="wrapper">
		<table id="menu" cellpadding="0" cellspacing="0" border="0">
			<tr>
			<?php
			
			$menuindex = 1;
			
			foreach($menu as $name => $URL){
				if ($menuindex == 1) {
					$align = 'align="left"';
				} elseif ($menuindex == count($menu)) {
					$align = 'align="right"';
				} else {
					$align = 'align="center"';
				}
				
				$menuindex++;
				
				if ($pagename == $name) {
					$class = 'class="current_page_item"';
				} else {
					$class = '';
				}
				
				echo '<td ',$class,' ',$align,'><a href="',$URL,'">',$name,'</a></td>';
			}
			
			?>
			</tr>
		</table>
	<!-- start page -->
	<div id="page">
	<!-- start content -->
	<div>
		<div id="content">

<?php
 
	if ($pagename == "Latest News") {
		include("downloads/content/news_content.php");
	} elseif ($pagename == "Calendar") {
		include("downloads/content/calendar_content.phpme>");
	} elseif ($pagename == "About Us") {
		include("downloads/content/about_content.php");
	} elseif ($pagename == "Robots and Awards") {
		include("downloads/content/awards_content.php");
	} elseif ($pagename == "Important Links") {
		include("downloads/content/links_content.php");
	} elseif ($pagename == "Media Gallery") {
		include("downloads/content/media_content.php");
	} elseif ($pagename == "Sponsors") {
		include("downloads/content/sponsor_content.php");			} 
	elseif ($pagename == "Parents") {		
		include("downloads/content/Parents_content.php");	
	}
	
	
?>		
		
		</div>
		<!-- end content -->
		<!-- start sidebars -->
		
		<!-- end sidebars -->
		<div style="clear: both;"></div>
	</div>
	<!-- end page -->
</div>
<?php 
include("mfooter.php")
?>
</body>
</html>
