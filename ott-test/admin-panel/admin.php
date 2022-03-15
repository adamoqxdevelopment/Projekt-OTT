<!DOCTYPE HTML>
<html>

	<head>
		<title>Dashboard - OTT Platform Creator</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="style.css" type="text/css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
	
		<!-- Navbar -->  
	
		<?php include("elements/navbar.php"); ?>
	
		<!-- Sidebar -->

		<?php include("elements/panel.php"); ?>
		
		<!-- Dashboard -->  
		
		<div class="content">
		
			<!-- Notification --> 
		
			<div class="notefic">
				<p>&ensp;<strong>Warning!</strong> Something is broken, I can feel it...</p>
			</div>
			
			<!-- Dashboard Header --> 
			
			<h1>Dashboard</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum ipsum at est ultrices, non volutpat ligula cursus. Integer eget cursus leo. Fusce aliquam, metus imperdiet viverra faucibus, odio quam aliquam erat, at pulvinar elit lectus id tellus. Suspendisse et venenatis libero. Donec molestie, risus ut malesuada tincidunt, est mauris aliquet lacus, sit amet tempor ligula nisi ac ipsum. Nunc dignissim malesuada nisi a maximus. Pellentesque blandit vel enim a ultrices. Maecenas eget tortor lorem. Nulla tincidunt nec augue ut tristique.</p>
			<h3>OTT Platform Creator 2022</h3>
			
			<!-- Widgets -->
			
			<div class="row">
				<button type="button" class="collapsible"><i class="fa fa-arrow-right" aria-hidden="true"></i> Welcome to OTT Platform Creator!</button>
				<div class="column">
					<h2><i class="fa fa-star" aria-hidden="true"></i> Welcome to OTT Platform Creator!</h2>
					<p>Some text..</p>
				</div>
				<button type="button" class="collapsible"><i class="fa fa-arrow-right" aria-hidden="true"></i> Statistics</button>
				<div class="column">
					<h2><i class="fa fa-bar-chart" aria-hidden="true"></i> Statistics</h2>
					<p>Some text..</p>
				</div>
				<button type="button" class="collapsible"><i class="fa fa-arrow-right" aria-hidden="true"></i> Activity</button>
				<div class="column" style=>
					<h2><i class="fa fa-file-text" aria-hidden="true"></i> Activity</h2>
					<p>Some text..</p>
				</div>
			</div>
			<br></br>
			
			<!-- Collapsing Widgets Script -->  
			
			<script>
				var coll = document.getElementsByClassName("collapsible");
				var i;

				for (i = 0; i < coll.length; i++) {
				  coll[i].addEventListener("click", function() {
					this.classList.toggle("active");
					var content = this.nextElementSibling;
					if (content.style.display === "block") {
					  content.style.display = "none";
					} else {
					  content.style.display = "block";
					}
				  });
				}
			</script>
			
			<!-- Footer --> 

			<?php include("elements/footer.php"); ?>
			
		</div>
		
	</body>
</html>