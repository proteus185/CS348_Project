<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>UMW Eagles</title>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

  <!-- **** layout stylesheet **** -->
  <link rel="stylesheet" type="text/css" href="style/style.css" />

  <!-- **** colour scheme stylesheet **** -->
  <link rel="stylesheet" type="text/css" href="style/colour_blue.css" />

  <!-- **** CSS Image Viewer from CSSplay (www.cssplay.co.uk) -->
  <link rel="stylesheet" type="text/css" href="style/image_viewer.css" />

</head>

<body>
  <div id="logo"><h1><b>UMWEAGLES</b></h1>
<!--<div id="links">design by <a href="http://www.dcarter.co.uk">dcarter</a><br />image viewer from <a href="http://www.cssplay.co.uk">CSSplay</a></div></div>-->
  <div id="menu">
    <ul>
      <li><a href="index.html">Home</a></li>
    	<li><a class="selected"  href="search.php">Search</a></li>
	<li><a href="cart.php">Cart--</a></li>
    </ul>
  </div>
 <div id="site_content">
    <div id="side_menu">
<h2>Search Gallery</h2>
<h3>Search Gallery</h3>

<form method = "post" action ="">
	<input type= "text" name = "searchItem" size = "40"> <br/>
	<input type = "submit" name = "search" value = "Search">
</form>
	<br/>
	<br/>
	<br/>

<?php
	$item = $_POST["searchItem"];
	if($item != ""){
		print "Search Results for " . "<u/><strong/>". $_POST["searchItem"]. ":<br />";
	}
?>

	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
    </div>
    <div id="content">
    </div>

  </div>
</body>
</html>

