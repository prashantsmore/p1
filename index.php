<!DOCTYPE html>
<html>
<head>
	<title>Prashant More</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">

	<link href='css/main.css' rel='stylesheet'>

</head>
<body>
	<div class="container">
		<h1>Prashant More</h1>
		<img src='images/Photo.jpg'>
		<h2>About Me</h2>
		<p>
			My name is Prashant More. I have a Bachelors Degree in Computer Engineering. I am currently working as Director- Technology
			in IHS Markit and  taking this course as part of the process to get admitted to Masters in Information Science Course. 
			I am happy to be here and want to learn more.
		</p>
		<h2>Random Quote</h2>
	 <?php
	 //Generate Random Number from range of 0 to 4
	 $randomNo = rand ( 0 , 4);
	 $listOfQuotes = array
	     ("Only I can change my life. No one can do it for me. -Carol Burnett",
	     "Life is 10% what happens to you and 90% how you react to it. Charles R. Swindoll",
	     "It does not matter how slowly you go as long as you do not stop. Confucius",
	     "The secret of getting ahead is getting started. Mark Twain",
	     "If you can dream it, you can do it. Walt Disney"	         );
	
	// Prints random Quote
	echo  $listOfQuotes[$randomNo] . "\n";
	?>
	</div>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
