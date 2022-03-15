<!DOCTYPE HTML>
<html>

	<head>
		<title>Page Layout - OTT Platform Creator</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="style.css" type="text/css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
	
		<!-- Pasek górny z narzędziami -->  
	
		<?php include("elements/navbar.php"); ?>
	
		<!-- Menu boczne -->

		<?php include("elements/panel.php"); ?>
		
		<!-- Dashboard -->  
		
		<div class="content">
			
			<!-- Nagłówek dashboardu --> 
			
			<h1>Page Layout</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum ipsum at est ultrices, non volutpat ligula cursus. Integer eget cursus leo. Fusce aliquam, metus imperdiet viverra faucibus, odio quam aliquam erat, at pulvinar elit lectus id tellus. Suspendisse et venenatis libero. Donec molestie, risus ut malesuada tincidunt, est mauris aliquet lacus, sit amet tempor ligula nisi ac ipsum. Nunc dignissim malesuada nisi a maximus. Pellentesque blandit vel enim a ultrices. Maecenas eget tortor lorem. Nulla tincidunt nec augue ut tristique.</p>
			
			<!-- Widgety strony głównej -->
			
			<h1>Page Widgets:</h1>
			
			<div class="row">
				<div class="column">
					<h2><i class="fa fa-home" aria-hidden="true"></i> Home Page Widgets:</h2>
					<label class="checkbox">Slideshow
						<input type="checkbox" checked="checked">
						<span class="checkmark"></span>
					</label>
					<label class="checkbox">Custom HTML
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
					<label class="checkbox">Contact Form
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
					<label class="checkbox">Social Media Links
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
				</div>
				<div class="column">
					<h2><i class="fa fa-bars" aria-hidden="true"></i> Navbar Widgets:</h2>
					<label class="checkbox">Page Logo
						<input type="checkbox" checked="checked">
						<span class="checkmark"></span>
					</label>
					<label class="checkbox">Page Name
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
					<label class="checkbox">Social Media Icons
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
					<label class="checkbox">Search Form
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
					<label class="checkbox">Contact Info
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
					<label class="checkbox">Custom HTML
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
				</div>
				<div class="column">
					<h2><i class="fa fa-info-circle" aria-hidden="true"></i> Footer Widgets:</h2>
					<label class="checkbox">Page Name
						<input type="checkbox" checked="checked">
						<span class="checkmark"></span>
					</label>
					<label class="checkbox">Author Name
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
					<label class="checkbox">Contact Info
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
					<label class="checkbox">Social Media Links
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
					<label class="checkbox">Search Form
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
					<label class="checkbox">Custom HTML
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
				</div>
			</div>
			<br></br>
						
			<!-- Stopka -->  
			
			
			<footer>
				<p>OTT Platform Creator &#169; 2022 &ensp; <i class="fa fa-code" aria-hidden="true"></i> &ensp;  Made by <b>Adam Wiśniewski and Dawid Mikulski</b></p>
			</footer>
		</div>
		
	</body>
</html>