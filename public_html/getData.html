<?php 
session_start();

?>
<html lang="en">
<html>
<head>
	<title>Survey of Games That Teach - Search Results</title>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	<meta charset="utf-8"> 
	<meta name="descrition" content="Educational Computer Gaming (ECG)">
	<meta name="keywords" content="Educational Computer Gaming (ECG), St. Mary's University, Computer Science, Video Games"> 
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/colors.css">
	<link rel="icon" href="images/someImage.ico">

<style>
/* Tooltip container */
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
}

/* Tooltip text */
.tooltip .tooltiptext {
    visibility: hidden;
    width: 350px;
    background-color: #003366;
    color: #fff;
    text-align: left;
    padding: 6px;
    border-radius: 6px;
 
    /* Position the tooltip text - see examples below! */
    position: absolute;
    z-index: 1;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
    visibility: visible;
}
</style>
	
</head>
<body>
<div id="container">
		<header>
			
			<a href="index.php" title="home"><img src="images/image565.png" height="65" alt="image565.png"></a>
			<h1 class="position">Educational Computer Gaming (ECG)</h1>
		</header>
		<!--border:1px solid black;width:500px;height:550px; -->
		<div id="content" style="overflow:auto">
			<br>
			<div><strong>GAME SEARCH RESULTS</strong></div>
			<br>
			<div class="gamesResult">
			<table border='1' cellpadding='3' cellspacing='0' bordercolor='#000000'>
			<?php
			include_once('connToDB.php');
			$conn=doDB();
			if($_SESSION['researchDB']!='')
			   $researchDB = $_SESSION['researchDB'];
			else
			   $researchDB = '';

			if($researchDB != '')
			{
				reSearch($researchDB);
			}
			else
			{
			$postOp1 = $_POST['op1'];
			$postOp2 = $_POST['op2'];
			$postOp3 = $_POST['op3'];
			$postOp4 = $_POST['op4'];

			$searchTitle = $_POST['title'];
			$searchPub = $_POST['publisher'];
			$searchSub = $_POST['subject'];
			$searchMeth = $_POST['learnMeth'];
			$searchPlat = $_POST['platform']; //Environment Selected:	Macintosh || Windows || Web || Console || Mobile

			$searchAll = $_POST['All'];

			$minAge = $_POST['minAgeLevel'];
			$maxAge = $_POST['maxAgeLevel'];
			$minGrade = $_POST['minGradeLevel'];
			$maxGrade = $_POST['maxGradeLevel'];

			if($_POST['minAgeLevel'] != '')
				$searchMinAge = checkAgeLevel($minAge);
			if($_POST['maxAgeLevel'] != '')
					$searchMaxAge = checkAgeLevel($maxAge);
			if($_POST['minGradeLevel'] != '')
				$searchMinGrade = checkGradeLevel($minGrade);
			if($_POST['maxGradeLevel'] != '')
				$searchMaxGrade = checkGradeLevel($maxGrade);

			$_SESSION['subject'] = $searchSub;
			$_SESSION['message'] = '';
			$searchDB = '';
			 //Title, Publisher, Subject, Grade Level, Age Level, Method and Platform x
			 if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//******
				//Title, Publisher, Subject, Grade Level, Age Level and Method  x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Title, Publisher, Grade Level, Age Level, Method and Platform x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Title, Publisher, Subject, Grade Level, Age Level and Platform  x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Title, Publisher, Subject, Age Level, Method and Platform  x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Title, Publisher, Subject, Grade Level, Method and Platform x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Title, Subject, Grade Level, Age Level, Method and Platform  x
			  else if($searchTitle != '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Publisher, Subject, Grade Level, Age Level, Method and Platform  x
			  else if($searchTitle == '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//*****
				//Title, Publisher, Subject, Grade Level, and Age Level x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					endSearch($searchDB);
				}
				//Title, Publisher, Subject, Age Level, and Platform x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Title, Publisher, Subject, Age Level, and Method x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Title, Publisher, Subject, Grade Level, and Platform x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Title, Publisher, Subject, Method and Platform x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Title, Publisher, Grade Level, Age Level, and Method  x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Title, Publisher, Grade Level, Method and Platform x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Title, Publisher, Subject, Age Level and Method x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Title, Subject, Grade Level, Age Level, and Method  x
			  else if($searchTitle != '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Title, Subject, Age Level, Method and Platform x
			  else if($searchTitle != '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Title, Grade Level, Age Level, Method and Platform x
			  else if($searchTitle != '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Publisher, Subject, Grade Level, Age Level, and Method x
			  else if($searchTitle == '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Publisher, Subject, Age Level, Method and Platform x
			  else if($searchTitle == '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Publisher, Grade Level, Age Level, Method and Platform x

			  else if($searchTitle == '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Publisher, Subject, Grade Level, Method and Platform x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}

				//Publisher, Subject, Grade Level, Age Level, and Platform x

			  else if($searchTitle == '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Subject, Grade Level, Age Level, Method and Platform x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//****
				//Title, Publisher, Subject and Grade Level  x
				else if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					endSearch($searchDB);
				}
				//Title, Publisher, Subject and Age Level x
				else if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					endSearch($searchDB);
				}
				//Title, Publisher, Subject, and Method x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Title, Publisher, Subject, and Platform x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Title, Publisher, Grade Level, and Age Level x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					endSearch($searchDB);
				}
				//Title, Publisher, Grade Level, and Method x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade == null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Title, Publisher, Grade Level and Platform x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Title, Publisher, Age Level and Method x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Title, Subject, Grade Level and Age Level x
			else if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					endSearch($searchDB);
				}
				//Title, Subject, Grade Level and Method x
			  else if($searchTitle != '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Title, Subject, Age Level and Method x
			  else if($searchTitle != '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Title, Subject, Age Level and Platform x
			  else if($searchTitle != '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Title, Grade Level, Age Level and Method x
			  else if($searchTitle != '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Title, Age Level, Method and Platform x
			  else if($searchTitle != '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Publisher, Subject, Grade Level and Age Level x
				else if($searchTitle == '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					endSearch($searchDB);
				}
				//Publisher, Grade Level, Age Level and Method x
			  else if($searchTitle == '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Publisher, Grade Level, Method and Platform x
			  else if($searchTitle == '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Publisher, Age Level, Method and Platform x
			  else if($searchTitle == '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Subject, Grade Level, Age Level and Method x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Subject, Grade Level, Age Level and Platform x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Subject, Age Level, Method and Platform x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Grade Level, Age Level, Method and Platform x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//***
				//Title, Publisher and Subject  x
				else if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					endSearch($searchDB);
				}
				//Title, Publisher and Grade Level x
				else if($searchTitle != '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					endSearch($searchDB);
				}
				//Title, Publisher and Age Level
				else if($searchTitle != '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					endSearch($searchDB);
				}
				//Title, Publisher and Platform x
			  else if($searchTitle != '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Title, Subject and Grade Level  x
				else if($searchTitle != '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					endSearch($searchDB);
				}
				//Title, Subject and Age Level  x
				else if($searchTitle != '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					endSearch($searchDB);
				}
				//Title, Subject and Platform  x
			  else if($searchTitle != '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Title, Grade Level and Age Level  x
				else if($searchTitle != '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					endSearch($searchDB);
				}
				//Title, Grade Level, and Method  x
			  else if($searchTitle != '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Title, Method and Platform x
			  else if($searchTitle != '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Publisher, Subject and Grade Level  x
				else if($searchTitle == '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
				$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					endSearch($searchDB);
				}
				//Publisher, Subject and Age Level  x
				else if($searchTitle == '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
				$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
				  $searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					endSearch($searchDB);
				}
				//Publisher, Subject and Method  x
			  else if($searchTitle == '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Publisher, Subject and Platform x
			  else if($searchTitle == '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Publisher, Grade Level and Age Level  x
				else if($searchTitle == '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
				$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
				  $searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					endSearch($searchDB);
				}
				//Publisher, Grade Level and Platform x
			  else if($searchTitle == '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Publisher, Age Level and Method  x
			  else if($searchTitle == '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Publisher, Method and Platform  x
			  else if($searchTitle == '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Subject, Grade Level and Age Level  x
				else if($searchTitle == '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  print  "Min Age:  $searchMinAge";
				  $searchDB = startSearch($searchDB);
				$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
				  $searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "AND ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					endSearch($searchDB);
				}
				//Subject, Grade Level and Method  x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Subject, Grade Level and Platform x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Subject, Age Level and Method  x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Subject, Age Level and Platform x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Subject, Grade Level and Method  x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Subject, Method and Platform x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Grade Level, Age Level and Method  x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Grade Level, Age Level and Platform  x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Grade Level, Method and Platform x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Age Level, Method and Platform x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//**
				//Title and Publisher x
				else if($searchTitle != '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					endSearch($searchDB);
				}
				//Title and Subject x
				else if($searchTitle != '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					endSearch($searchDB);
				}
				//Title and Grade Level x
				else if($searchTitle != '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					endSearch($searchDB);
				}
				//Title and Age Level x
				else if($searchTitle != '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					endSearch($searchDB);
				}
				//Title and Method x
			  else if($searchTitle != '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Title and Platform x
			  else if($searchTitle != '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Publisher and Subject x
				else if($searchTitle == '' && $searchPub != '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
				$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchSub($searchDB, $searchSub);
					endSearch($searchDB);
				}
				//Publisher and Grade Level x
				else if($searchTitle == '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
				$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					endSearch($searchDB);
				}
				//Publisher and Age Level x
				else if($searchTitle == '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
				$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					endSearch($searchDB);
				}
				//Publisher and Method x
			  else if($searchTitle == '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Publisher and Platform x
			  else if($searchTitle == '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Subject and Grade Level x
				else if($searchTitle == '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
				$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					endSearch($searchDB);
				}
				//Subject and Age Level x
				else if($searchTitle == '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
				$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					endSearch($searchDB);
				}
				//Subject and Method x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Subject and Platform x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchSub($searchDB, $searchSub);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Grade Level and Age Level x
				else if($searchTitle == '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					endSearch($searchDB);
				}
				//Grade Level and Method x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Grade Level and Platform x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Age Level and Method x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Age Level and Platform x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Method and Platform x
			  else if($searchTitle == '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && !empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchMeth($searchDB, $searchMeth);
					$searchDB .= "and ";
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//Just Title
				else if($searchTitle != '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchTitle($postOp1, $searchDB, $searchTitle);
					endSearch($searchDB);
				}
				//Just Publisher
				else if($searchTitle == '' && $searchPub != '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPub($postOp2, $searchDB, $searchPub);
					endSearch($searchDB);
				}
				//Just Subject
				else if($searchTitle == '' && $searchPub == '' && $searchSub != 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchSub($searchDB, $searchSub);
					endSearch($searchDB);
				}
				//Just Grade Level
				else if($searchTitle == '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade != null || $searchMaxGrade != null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade);
					endSearch($searchDB);
				}
				//Just Age Level
				else if($searchTitle == '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge != null || $searchMaxAge != null) && $searchMeth == 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge);
					endSearch($searchDB);
				}
				//Just Method
				else if($searchTitle == '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth != 'Any' && empty($searchPlat))
				{
				  $searchDB = startSearch($searchDB);
					$searchDB = searchMeth($searchDB, $searchMeth);
					endSearch($searchDB);
				}
				//Just Platform
				else if($searchTitle == '' && $searchPub == '' && $searchSub == 'Any' && ($searchMinGrade == null && $searchMaxGrade == null)
					&& ($searchMinAge == null && $searchMaxAge == null) && $searchMeth == 'Any' && !empty($searchPlat) )
				{
				  //print $searchPlat;
				  $searchDB = startSearch($searchDB);
					$searchDB = searchPlat($searchDB, $searchPlat);
					endSearch($searchDB);
				}
				//All
				else if(!empty($_POST['All']) && $searchTitle == '' && $searchPub == '' && $searchSub == 'Any' && 
					($searchMinGrade == null && $searchMaxGrade == null) && ($searchMinAge == null && $searchMaxAge == null) && 
						 $searchMeth == 'Any' && empty($searchPlat))
				{
					searchAll($searchDB);
					//endSearch($searchDB);
				}
				//Nothing
			  else
			  {
				 echo "<br><span style='color:red; font-weight:bold;'>Sorry, Unable to search database system. <br>Nothing was selected. Please <a href='Search_for_Games.php' title='Search for Games' style='color:red; font-weight:bold;'>try again</a>!</span>";
				 
			  }
			}
			?>
			</table>
			</div>

			<?php
			//Functions
			function startSearch($searchDB)
			{
				if($searchDB == '')
				{
					 $searchDB = "Select * from games where ";
				}
				return $searchDB;
			}
			function searchTitle($postOp1, $searchDB, $searchTitle)
			{
				if($searchDB != '')
				{
				   if ($postOp1 == "begins with")
						$searchDB .= "title like '$searchTitle%' ";
					 else if ($postOp1 == "equals")
							$searchDB .= "title = '$searchTitle' ";
					 else if ($postOp1 == "contains")
						$searchDB .= "title like '%$searchTitle%' ";
					 else if ($postOp1 == "ends with")
						$searchDB .= "title like '%$searchTitle' ";
				}
				return $searchDB;
			}
			function searchPub($postOp2, $searchDB, $searchPub)
			{
				if($searchDB != '')
				{
				   if ($postOp2 == "begins with")
						$searchDB .= "publisher like '$searchPub%' ";
					 else if ($postOp2 == "equals")
							$searchDB .= "publisher = '$searchPub' ";
					 else if ($postOp2 == "contains")
						$searchDB .= "publisher like '%$searchPub%' ";
					 else if ($postOp2 == "ends with")
						$searchDB .= "publisher like '%$searchPub' ";
				}
				return $searchDB;
			}
			function searchSub($searchDB, $searchSub)
			{
			  if($searchDB != '')
				{
				   $searchDB .= "(learningArea like '%$searchSub%' or subArea like '%$searchSub%') ";
				}
				return $searchDB;
			}
			function searchGradeLevel($postOp3, $searchDB, $searchMinGrade, $searchMaxGrade)
			{
				if($searchDB != '')
				{
				   if ($postOp3 == "only")
					 {
						if($searchMinGrade == null && $searchMaxGrade != null)
							   $searchDB .= "maxGradeLevel = $searchMaxGrade ";
							else if($searchMinGrade != null && $searchMaxGrade == null)
						   $searchDB .= "minGradeLevel = $searchMinGrade or maxGradeLevel = $searchMinGrade ";
					 }
					 else if ($postOp3 == "up to")
							$searchDB .= "maxGradeLevel <= $searchMinGrade ";
					 else if ($postOp3 == "between")
						$searchDB .= "minGradeLevel >= $searchMinGrade and maxGradeLevel <= $searchMaxGrade ";
				}
				//echo $searchDB;
				return $searchDB;
			}
			function checkGradeLevel($post_var)
			{ 
			  switch($post_var)
			  {
				  case "Any":
					  $changeVar = null;
						break;
				  case "Toddler":
					  $changeVar = -2;
					  break;
				case "Pre-Kindergarten":
					  $changeVar = -1;
					  break;
				  case "Kindergarten":
					  $changeVar = 0;
					  break;
				  case "1st":
					  $changeVar = 1;
					  break;
				  case "2nd":
					  $changeVar = 2;
					  break;
				  case "3rd":
					  $changeVar = 3;
					  break;
				  case "4th":
					  $changeVar = 4;
					  break;
				  case "5th":
					  $changeVar = 5;
					  break;
				  case "6th":
					  $changeVar = 6;
					  break;
				  case "7th":
					  $changeVar = 7;
					  break;
				  case "8th":
					  $changeVar = 8;
					  break;
				  case "9th":
					  $changeVar = 9;
					  break;
				  case "10th":
					  $changeVar = 10;
					  break;
				  case "11th":
					  $changeVar = 11;
					  break;
				  case "12th+":
					  $changeVar = 12;
					  break;
				  default:
					  $changeVar = null;
			  }
				return $changeVar;
			}
			function searchAgeLevel($postOp4, $searchDB, $searchMinAge, $searchMaxAge)
			{
				if($searchDB != '')
				{
				   if ($postOp4 == "only")
								 $searchDB .= "maxAgeLevel = $searchMinAge or minAgeLevel = $searchMinAge ";
					 else if ($postOp4 == "up to")
						   $searchDB .= "maxAgeLevel <= $searchMinAge ";
					 else if ($postOp4 == "between")
						$searchDB .= "minAgeLevel >= $searchMinAge and maxAgeLevel <= $searchMaxAge ";
				}
				//echo $searchDB;
				return $searchDB;
			}
			function checkAgeLevel($post_var)
			{
			  switch($post_var)
			  {
				  case "Any";
					  $changeVar = null;
						break;
				case "1 - 3":
					  $changeVar = 3;
					  break;
				case "4":
					  $changeVar = 4;
					  break;
				  case "5":
					  $changeVar = 5;
					  break;
				  case "6":
					  $changeVar = 6;
					  break;
				  case "7":
					$changeVar = 7;
					  break;
				  case "8":
					  $changeVar = 8;
					  break;
				  case "9":
					  $changeVar = 9;
					  break;
				  case "10":
					  $changeVar = 10;
					  break;
				  case "11":
					  $changeVar = 11;
					  break;
				  case "12":
					  $changeVar = 12;
					  break;
				  case "13":
					  $changeVar = 13;
					  break;
				  case "14":
					  $changeVar = 14;
					  break;
				  case "15":
					  $changeVar = 15;
					  break;
				  case "16":
					  $changeVar = 16;
					  break;
				  case "17":
					  $changeVar = 17;
					  break;
				  case "18+":
					  $changeVar = 18;
					  break;
				  default:
					  $changeVar = null;
			  }
				return $changeVar;
			}
			function searchMeth($searchDB, $searchMeth)
			{
			   $searchDB .= "method = '$searchMeth' ";
				 return $searchDB; 
			}
			function searchPlat($searchDB, $searchPlat)
			{
			   if($searchPlat == "WIN")
					$searchDB .= "platform like '%WIN%' ";
				 else if ($searchPlat == "MAC")
					$searchDB .= "platform like '%MAC%' ";
				 else if ($searchPlat == "WEB")
					$searchDB .= "platform like '%WEB%' ";
				 else if ($searchPlat == "CONSOLE")
					$searchDB .= "platform like '%CONSOLE%' ";
				 else if ($searchPlat == "MOBILE")
					$searchDB .= "platform like '%MOBILE%' ";
				 return $searchDB;
			}
			function searchAll($searchDB)
			{
			  $PostALL = $_POST['All'];
			  print($PostAll);
				 $searchDB = "Select * from games ";
				 if($PostALL == "title")
					$searchDB .= "order by title asc";
				 if($PostALL == "subject")
					$searchDB .= "order by learningArea asc";
				 $_SESSION['searchDB'] = $searchDB;
				 include ('searchResults.php');
				 //return $searchDB;
			}
			function endSearch($searchDB)
			{
			  if($searchDB != '')
			  {
				 $searchDB .= "order by title asc";
				 $_SESSION['searchDB'] = $searchDB;
				 include ('searchResults.php');
			  }
			}
			function reSearch($researchDB)
			{
			  if($researchDB != '')
			  {
				  $_SESSION['searchDB'] = $researchDB;
				 include ('searchResults.php');
			  }
			}
			?>

		</div> <!-- close div="content" -->	
		
	
		<div id="mod2"> 
			<section class="padding">
				
				<ul>
					<li><a href="index.php" title="Welcome to ECC">Welcome to ECC</a></li>
					<li><a href="Search_for_Games.php" title="Search for Games">Search for Games</a></li>
					<li><a href="Publications_and_Links.php" title="Publications and Links">Publications and Links</a></li>
					<li><a href="Graduate_Certificate.php" title="Graduate Certificate">Graduate Certificate</a></li>
					<li><a href="contact_Us.php" title="Contact Us">Contact Us</a></li>
				</ul>
			</section>
		</div>
		
		<div id="mod3">
			<div class='tooltip'>
				<a href="documents/friends_with_different_abilites_Jan16.exe" target="_blank">
				<img src="images/friends_with_different_abilites.png" style="height:100px;" alt="image333.png">
				</a>
				<span class='tooltiptext'>"Click on image to download executable file of game to run and play on a Windows PC. File size (79.5 MB)"</span>
			</div>
			<i>Game made by a John Jay Science and Engineering Academy student.</i>
		</div>
		
		
		

		
	</div> <!-- close div="container" -->
</body>
	<span style="height:0px; width: 1025px;">&copy; Copyright EducationalComputerGaming.com 2014 - <?php echo date("Y"); ?></span><br>
</html>