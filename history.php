<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to RCF SWAGAT GUESTHOUSE</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
</head>

<body>
<div id="wrapper">
	<div id="header">
    <h1><a href="index.php"><img  width="200px" height="200px" src="xres/images/rcflogo.png" class="logo" alt="RCF SWAGAT GUESTHOUSE" /></a></h1>
        <ul id="mainnav">
			<li><a href="index.php">Home</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li class="current"><a href="history.php">History</a></li>
			<li><a href="rates.php">Room Rates</a></li>
            <li><a href="location.php">location</a></li>
			<li><a href="contact.php">Contact Us</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="gallerycontainer">
			<div class="portfolio-area" style=" padding:140px 0 20px 0;">	
				<?php
				include('db.php');
				$result = mysql_query("SELECT * FROM about");
				while($row = mysql_fetch_array($result))
					{
						echo $row['about'];
					}
				?>
               	<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        </div>
    </div>
    



<div id="footer">
	<h4>Phone: 02141 238 028 &bull; <a href="contact-us.php">SWAGAT - A GUESTHOUSE of RCF, RCF Colony Kihim, Mumbai, Maharashtra 402201 </a></h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Hotel guest check-ins available daily 3-8 PM&nbsp;&nbsp;&bull;&nbsp;&nbsp;Serving Dinner Evenings 5-9 PM</p>
	<a href="index.php"><img src="xres/images/footer-logo.png" alt="RCF SWAGAT GUESTHOUSE" /></a>
	<p>&copy; Copyright 2019 RCF SWAGAT GUESTHOUSE| All Rights Reserved <br /></p>
</div>

</div>
</body>
</html>
