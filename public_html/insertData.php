<!DOCTYPE html>  
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<meta name="descrition" content="Educational Computer Gaming (ECG) - A Fun Way to Learn">
	<meta name="keywords" content="Educational Computer Gaming (ECG), St. Mary's University, Computer Science, Video Games"> 
	<title>Admin Portal - ECG</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/colors.css">
	<link rel="icon" href="images/someImage.ico">
</head>

<body>
	<div id="container">
		<header>
			
			<a href="ECG_AdminPortal.php" title="home"><img src="images/image565.png" style="height:65px;" alt="image565.png"></a>
			<h1 class="position">Admin Portal - ECG</h1>
		</header>
		
		<div id="content">
			<?php
				include_once('connToDB.php');
				$conn = doDB();
				$insertTitle = $_POST['title'];
				$insertPub = $_POST['publisher'];
				$insertDescription = $_POST['description'];
				$insertDate = $_POST['date'];
				$insertWebsite = $_POST['website'];
				$insertMinAgeLevel = $_POST['minAgeLevel'];
				$insertMaxAgeLevel = $_POST['maxAgeLevel'];
				$insertMinGradeLevel = $_POST['minGradeLevel'];
				$insertMaxGradeLevel = $_POST['maxGradeLevel'];
				$insertLearningArea = $_POST['learningArea'];
			$insertSubArea = $_POST['subArea'];
				$insertLearningObjective = $_POST['learningObjective'];
				$insertMethod = $_POST['method'];
				$insertStudies = $_POST['studies'];
				$insertUsabilityNotes = $_POST['usabilityNotes'];
				$insertLearningNotes = $_POST['learningNotes'];
				$insertOtherNotes = $_POST['otherNotes'];
				$insertPlatform = $_POST['platform'];
				$insertPrice = $_POST['price'];
				$insertCurrently_Published = $_POST['Currently_Published'];
				//"INSERT INTO `idar1227_soegtt`.`games` (`id` ....... hi3 17Jan2017
				$insertDB = "INSERT INTO `ECGames`.`games` (`id`, `title`, `publisher`, `description`, `date`, `website`, `minAgeLevel`, `maxAgeLevel`, `minGradeLevel`, `maxGradeLevel`, `learningArea`, `subArea`, `learningObjective`, `method`, `studies`, `usabilityNotes`, `learningNotes`, `otherNotes`, `platform`, `price`, `Currently_Published`) VALUES (NULL, '".$insertTitle."', '".$insertPub."', '".$insertDescription."', '".$insertDate."', '".$insertWebsite."', '".$insertMinAgeLevel."', '".$insertMaxAgeLevel."', '".$insertMinGradeLevel."', '".$insertMaxGradeLevel."', '".$insertLearningArea."', '".$insertSubArea."', '".$insertLearningObjective."', '".$insertMethod."', '".$insertStudies."', '".$insertUsabilityNotes."', '".$insertLearningNotes."', '".$insertOtherNotes."', '".$insertPlatform."', '".$insertPrice."', '".$insertCurrently_Published."')";
				mysqli_query($conn, $insertDB);
				echo "<p><br>Title: ".$insertTitle."<br>Publisher: ".$insertPub."<br>Description: ".$insertDescription."<br>Website: ".$insertWebsite."<br>Learning Area: ".$insertLearningArea."<br>Learning Sub Areas: ".$insertSubArea."<br>Min Age: ".$insertMinAgeLevel."<br>Max Age: ".$insertMaxAgeLevel."<br>Min Grade Level: ".$insertMinGradeLevel."<br>Max Grade Level: ".$insertMaxGradeLevel."<br>Learning Method: ".$insertMethod."<br>Platform: ".$insertPlatform."<br>Learning Notes: ".$insertLearningNotes."<br><br><b style='color: green;'>Info has been Added in the database.</b></p><p><a href='ECG_AdminPortal.php'>Return to ECG Admin Portal</a></p>";

				//print "<br><b style='color:green;'>SQL query successfully entered: " . $insertDB . "</b>"; //prints inserted query
			?>
			<br>
		</div> <!-- close div="content" -->	
		
		<div id="mod2"> 
			<!--<section class="padding">	-->	
				<ul class="padding">
					<li><a href="ECG_AdminPortal.php" title="Search for Games">Search for Games</a></li>
					<li><a href="Add_New_Game.php" title="Add New Game">Add New Game</a></li>
				</ul>
			<!--</section>-->
		</div>
		
		<div id="mod3">
		<img src="images/image333.png" style="height:100px;" alt="image333.png">
			<i>Game made by a St. Mary's University student.</i>
		</div>
		
	</div> <!-- close div="container" -->

</body>
	<span style="height:0px; width: 1025px;">&copy; Copyright EducationalComputerGaming.com 2014 - <?php echo date("Y"); ?></span><br>
</html>
