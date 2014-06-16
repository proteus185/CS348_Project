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
        <li><a href="search.html">Search</a></li>
        <li><a class="selected" href="cart.php">Cart--</a></li>
    </ul>
  </div>
   <div id="site_content">
    <div id="content">

<h2>Please enter your Shipping Information</h2>

<form action = "confirm.php" method ="post">
<p>
<label><input type = "text" name = "ccnumber"/> :Credit Card Number</label>
<br />
<label><input type = "text" name = "name"/> :Full Name</label>
<br />
<label><input type = "text" name ="address"/> :Street Address</label>
<br />
<label><input type = "text" name = "city"/> :City</label>
<br />
<label>

<select name = "state">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select> :State</label>
<br />
<label><input type = "text" name = "Zip"/> :zip Code</label>
<br />
<label><input type = "text" name ="phone"/> :Phone Number</label>
<br />
<label><input type = "text" name ="email"/> :Email Address</label>
<br />
<button type = "submit" value="Submit">Submit</button>
<button type = "reset" value="Reset">Clear</button>


    </div>
   </div>
  </div>
</body>
</html>
