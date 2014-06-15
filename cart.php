<?php 
	session_start();
	if(!isset($_SESSION['cart']))
		$_SESSION['cart'] = array();


?>


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
      <li><a  href="index.html">Home</a></li>
      <!--<li><a href="about.html">about this template</a></li>-->
	<li><a href="index.html">Search</a></li>
	<li><a class="selected" href="cart.php">Cart--</a></li>
    </ul>
  </div>
   <div id="site_content">
    <div id="content">
      <h2>Your Cart Thus Far</h2>
      <?php 
	$items = array('picture_1', 'picture_2', 'picture_3', 'picture_4');
	$prices = array(5.00, 10.00,15.00,20.00);
	?>
	<table border = "3">
		<tr>
			<th>Selected Pictures</th>
			<th>Price</th>
		</tr>
		<?php 
			$total = 0;
			for($i = 0; $i < count($_SESSION['cart']);$i++) {
				echo('<tr>');
			echo('<td>'.$items[$_SESSION['cart'][$i]].'</td>');
				echo('<td align="right">$');
		echo(number_format($prices[$_SESSION['cart'][$i]],2));
				echo('</td>');
				echo('</tr>');
				$total = $total + $process[$_SESSION['cart'][$i]];
			}
		?>
		<tr>
			<th align="right">Total:</th>
			<th align="right">$<?=number_format($total,2)?></th>
		</tr>
	</table>
    <p>
	<!-- return to shopping, _empty the cart or purchase the merchandise-->

	<form action="index.html"><input type="submit" value="Continue Shopping"></form>
        <form action="purchase.html"><input type="submit" value="Purchase"></form>

	<a href="<?$_SERVER['PHP_SELF']?>?empty=1"> Empty your cart</a>

    <p>
    </div>
   </div>
  </div>
</body>
</html>
