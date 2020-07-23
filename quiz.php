<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AWS QUIZ</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="website.css" rel="stylesheet">
    <style type="text/css">
    	body{
    		background-image: url(../phpprogram.php/quiz.jpg);
    		background-size: 100% 100%;
    		background-attachment: fixed;
	        width: 100%;
	        height: 650px;
    		font-family: cursive;
    		font-weight: bold;
    		font-size: 17px;
    		 
    	}
    </style>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-light sticky-top">
		<div class="container">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a href="result.php" class="nav-link text-white">VIEW ANSWERS AND EXPLANATIONS</a>

			</li>
			 
			
		</ul>
	</div>
	</nav>
	<div class="container">
	
	<h2 class="text-center">CLOUD COMPUTING QUIZ!!!</h2>
	<h2 class="text-center text-primary">ALL QUESTIONS ARE MANDATORY</h2>
	<form action="result.php" method="post">
		<p> Q1)What type of storage is s3?</p>
		<input type="radio" name="q-1" value="A">Block<br>
		<input type="radio" name="q-1" value="B">Object<br>
		<input type="radio" name="q-1" value="C">None<br><br>

		<p> Q2)What does VPC stand for?</p>
		<input type="radio" name="q-2" value="A">Virtual protected cloud<br>
		<input type="radio" name="q-2" value="B">Verified Public Cloud<br>
		<input type="radio" name="q-2" value="C">Virtual Private Cloud<br>
		<input type="radio" name="q-2" value="D">None of above<br><br>

		<p> Q3)What is the no. of cloud deployment models?</p>
		<input type="radio" name="q-3" value="A">8<br>
		<input type="radio" name="q-3" value="B">5<br>
		<input type="radio" name="q-3" value="C">3<br>
		<input type="radio" name="q-3" value="D">4<br><br>

		<p> Q4)Which of the following is an edge-storage or content-delivery system that caches data in different physical locations?</p>
		<input type="radio" name="q-4" value="A">Amazon Relational Database Service<br>
		<input type="radio" name="q-4" value="B">Amazon SimpleDB<br>
		<input type="radio" name="q-4" value="C">Amazon Cloudfront<br>
		<input type="radio" name="q-4" value="D"> Amazon Associates Web Services<br><br>

		<p> Q5)Which of the following is a system for creating block level storage devices that can be used for Amazon Machine Instances in EC2?</p>
		<input type="radio" name="q-5" value="A">CloudWatch<br>
		<input type="radio" name="q-5" value="B">Amazon Elastic Block Store<br>
		<input type="radio" name="q-5" value="C"> AWS Import/Export<br>
		<input type="radio" name="q-5" value="D">All of the mentioned<br><br>

		<p> Q6)Which of the following feature is used for scaling of EC2 sites?</p>
		<input type="radio" name="q-6" value="A">Auto Replica<br>
		<input type="radio" name="q-6" value="B">Auto Scaling<br>
		<input type="radio" name="q-6" value="C">Auto Ruling<br>
		<input type="radio" name="q-6" value="D">All of the mentioned<br><br>

		<p> Q7)Which of the following metrics are used to support Elastic Load Balancing?</p>
		<input type="radio" name="q-7" value="A">CloudWatch<br>
		<input type="radio" name="q-7" value="B">Amazon Elastic Block Store<br>
		<input type="radio" name="q-7" value="C">AWS Import/Export<br>
		<input type="radio" name="q-7" value="D">All of the mentioned<br><br>

		<p> Q8)Which of the following is an online backup and storage system?</p>
		<input type="radio" name="q-8" value="A">Amazon Elastic Compute Cloud<br>
		<input type="radio" name="q-8" value="B">Amazon Simple Queue Service<br>
		<input type="radio" name="q-8" value="C">Amazon Simple Notification Service<br>
		<input type="radio" name="q-8" value="D"> Amazon Simple Storage System<br><br>

		<p> Q9)Which of the following is a Web service that can publish messages from an application and deliver them to other applications or to subscribers?</p>
		<input type="radio" name="q-9" value="A">Amazon Elastic Compute Cloud<br>
		<input type="radio" name="q-9" value="B">Amazon Simple Queue Service<br>
		<input type="radio" name="q-9" value="C">Amazon Simple Notification Service<br>
		<input type="radio" name="q-9" value="D"> Amazon Simple Storage System<br><br>

		<p> Q10)Which of the following is a message queue or transaction system for distributed Internet-based applications?</p>
		<input type="radio" name="q-10" value="A">Amazon Elastic Compute Cloud<br>
		<input type="radio" name="q-10" value="B">Amazon Simple Queue Service<br>
		<input type="radio" name="q-10" value="C">Amazon Simple Notification Service<br>
		<input type="radio" name="q-10" value="D"> Amazon Simple Storage System<br><br>












		 
		<input type="submit" class="btn btn-warning">

	</form>
</div>

</body>
</html>