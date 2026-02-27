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

<?php
include_once('connToDB.php');
$conn = doDB();
$count = 0; //used for counting records searched
$searchDB = $_SESSION['searchDB'];

$postOp1 = $_POST['op1'];
$postOp2 = $_POST['op2'];
$postOp3 = $_POST['op3'];
$postOp4 = $_POST['op4'];

$searchTitle = $_POST['title'];
$searchPub = $_POST['publisher'];
$searchSub = $_POST['subject'];
$searchMeth = $_POST['learnMeth'];
$searchPlat = $_POST['platform'];

$searchAll = $_POST['All'];

$minAge = $_POST['minAgeLevel'];
$maxAge = $_POST['maxAgeLevel'];
$minGrade = $_POST['minGradeLevel'];
$maxGrade = $_POST['maxGradeLevel'];
//print $searchDB; //prints Selected Search Criteria

$resultsSearch = mysqli_query($conn, $searchDB);
///////
			while($database = mysqli_fetch_array($resultsSearch, MYSQLI_ASSOC))
				{
				$count++;
				}
				
			echo "<br>Number of Games found: <b>" . $count . "</b><br><br>";
$resultsSearch = mysqli_query($conn, $searchDB);				
			echo "<table style='border: 1px solid #000000; margin:0 auto; width: 780px; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>
				<tr style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>
					<th style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>Title</th>
    				<th style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>Platform</th>
					
					<th style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px 22px;'>Description</th>

					<th style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>Website</th>
                    <th style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>Publisher</th>
					<th style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>Learning Area</th>
					<th style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>Learning Sub Areas</th>
					<th style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>Age Level</th>
					<th style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>Grade Level</th>
					<th style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>Learning Method</th>

					<!-- Taken out HI3 8/21/2017 Learning Notes no longer needed to be displayed
					<th style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>Learning Notes</th>
					-->
				</tr>";
				
				// The possible values for this parameter are the constants MYSQLI_ASSOC, MYSQLI_NUM, or MYSQLI_BOTH.
				while($database = mysqli_fetch_array($resultsSearch, MYSQLI_ASSOC))
				{
				$count++;
					$title=$database['title']; 
					$publisher=$database['publisher'];
					$description=$database['description'];
					$website=$database['website'];
					$learningArea=$database['learningArea'];
					$subArea=$database['subArea'];
					$minAgeLevel=$database['minAgeLevel'];
					$maxAgeLevel=$database['maxAgeLevel'];
					$minGradeLevel=$database['minGradeLevel'];
					$maxGradeLevel=$database['maxGradeLevel'];
					$method=$database['method'];
					$platform=$database['platform'];					
					$learningNotes=$database['learningNotes'];
					
					echo "<tr style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>";
					echo "<td style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>".$title."</td>";
                    echo "<td style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>".$platform."</td>";
					
					
					echo "<td style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'><div class='tooltip'>description here<span class='tooltiptext'>".$description."</span></div></td>";
					

					//echo "<td style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>".$website."</td>";
					echo "<td style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'> <a href = '//".$website."' title = '".$website."' target = '_blank'><u>".$website."</u></a> </td>";
                    echo "<td style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>".$publisher."</td>";
					echo "<td style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>".$learningArea."</td>";
					echo "<td style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>".$subArea."</td>";
					echo "<td style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>".$minAgeLevel." - ".$maxAgeLevel."</td>";
					echo "<td style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>".$minGradeLevel." - ".$maxGradeLevel."</td>";					
					echo "<td style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>".$method."</td>";
					// Taken out HI3 8/21/2017 Learning Notes no longer needed to be displayed
					//echo "<td style='border: 1px solid #000000; background-color: #fbfafd; border-collapse: collapse; padding:8px;'>".$learningNotes."</td>";


					echo "</tr>";
				}	
			echo "</table>";	
//////////////////  echo "<br>Number of Games found: " . $count . "<br>";
				
?>
</html>