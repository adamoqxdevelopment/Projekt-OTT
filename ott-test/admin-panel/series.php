<!DOCTYPE HTML>
<html>

	<head>
		<title>Series - OTT Platform Creator</title>
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

			<!-- Nagłówek --> 
			
			<h1>Series</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum ipsum at est ultrices, non volutpat ligula cursus. Integer eget cursus leo. Fusce aliquam, metus imperdiet viverra faucibus, odio quam aliquam erat, at pulvinar elit lectus id tellus. Suspendisse et venenatis libero. Donec molestie, risus ut malesuada tincidunt, est mauris aliquet lacus, sit amet tempor ligula nisi ac ipsum. Nunc dignissim malesuada nisi a maximus. Pellentesque blandit vel enim a ultrices. Maecenas eget tortor lorem. Nulla tincidunt nec augue ut tristique.</p>
			
			<!-- Serie/Programy -->
			<div id="tabela">
				<h1>Your Series:</h1>
				<table id="series">
					<tr>
						<th>Name:</th>
						<th>Description:</th>
						<th>Category:</th>
						<th>Options:</th>
					</tr>
					<tr>
						<td>Serie 1</td>
						<td>Some text..</td>
						<td>Comedy</td>
						<th>
							<button class="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
							<button class="button"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
						</th>
					</tr>
					<tr>
						<td>Serie 2</td>
						<td>Some text..</td>
						<td>Science - Fiction</td>
						<th>
							<button class="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
							<button class="button"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
						</th>
					</tr>
					<tr>
						<td>Serie 3</td>
						<td>Some text..</td>
						<td>Action</td>
						<th>
							<button class="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
							<button class="button"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
						</th>
					</tr>
					<tr>
						<td>Serie 4</td>
						<td>Some text..</td>
						<td>Drama</td>
						<th>
							<button class="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
							<button class="button"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
						</th>
					</tr>

				</table>
			</div>
			 
			<!-- Dodaj serię -->
			
			<h1>Add New Serie:</h1>
			
			<form action="POST">
				<label>Serie Name: </label> <input type="text" name="name"/>
				
				<label for="category">Category: </label>
				<select id="category" name="category">
				  <option value="action">Action</option>
				  <option value="comedy">Comedy</option>
				  <option value="drama">Drama</option>
				  <option value="fantasy">Fantasy</option>
				  <option value="horror">Horror</option>
				  <option value="mystery">Mystery</option>
				  <option value="romance">Romance</option>
				  <option value="thiller">Thiller</option>
				  <option value="wetern">Western</option>
				</select>
				
				<label>Description: </label> <input type="text" name="description"/>
			</form>
			<button class="guzik"><i class="fa fa-plus" aria-hidden="true"></i> Add</button>
			<br></br>
			<br></br>

			<!-- Stopka -->  
			
			<br></br>
			<footer>
				<p>OTT Platform Creator &#169; 2022 &ensp; <i class="fa fa-code" aria-hidden="true"></i> &ensp;  Made by <b>Adam Wiśniewski and Dawid Mikulski</b></p>
			</footer>
		</div>
		
	</body>
</html>