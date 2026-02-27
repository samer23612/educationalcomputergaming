<?php 
//session_start();  Notice: A session had already been started - ignoring session_start()

include_once('connToDB.php');

$conn = doDB();

   $searchDB = $_SESSION['searchDB'];

   $subject = $_SESSION['subject'];  //Learning Area selected and passed here

   $mes = $_SESSION['message'];
  
   $_SESSION['researchDB'] = '';

	//print $subject; //Learning Area selected and passed here
	
   print $searchDB; //prints Selected Search Criteria
    //$test = "Select * from games";
	// $searchDB_res = mysqli_query($conn, $test) or die(mysql_error());
	

	$searchDB_res = mysqli_query($conn, $searchDB); 
 
 
 $num_rows = mysql_num_rows($searchDB_res);
//$one = 1;
print "number of rows" . $num_rows . " <-";
echo "$num_rows Rows\n";
									
   if(mysql_num_rows($searchDB_res)>0)

   {

        $count = mysql_num_rows($searchDB_res);

	    $display = "<tr valign='top' align='center'><td colspan='2'>Number of Records : $count</td></tr>";

	    //$display .= "<tr><td><h3>Title</h3></td><td><h3>Publisher</h3></td><td><h3>Learning Area</h3></td></tr>";
		
		$display .= "<tr><td><h3>Title</h3></td><td><h3>Publisher</h3></td></tr>";

		//$display .= "<td>Sub Area</td><td>Min Grade Level</td><td>Max Grade Level</td>";

		//$display .= "<td>Min Age Level</td><td>Max Age Level</td></tr>";

	  while($getGameInfo = mysqli_fetch_array($searchDB_res, MYSQLI_ASSOC))

	  {

			$gameID = $getGameInfo['id'];

			$gameTitle = $getGameInfo['title'];

			$gamePub = $getGameInfo['publisher'];

			/*$gameLearnArea = $getGameInfo['learningArea'];

			$gameSubArea = $getGameInfo['subArea'];

			$gamePub = $getGameInfo['publisher'];

				

			if($getGameInfo['maxGradeLevel'] == -1)

				$gameMaxGrade = "Pre K";

			else if($getGameInfo['maxGradeLevel'] == 0)

				$gameMaxGrade = "Kindergarten";

			else if ($getGameInfo['maxGradeLevel'] == -2)

				$gameMaxGrade = "Toddler";

			else

			    $gameMaxGrade = $getGameInfo['maxGradeLevel'];

			

			if($getGameInfo['minGradeLevel'] == -1)

				$gameMinGrade = "Pre K";

			else if($getGameInfo['minGradeLevel'] == 0)

				$gameMinGrade = "Kindergarten";

			else if ($getGameInfo['minGradeLevel'] == -2)

				$gameMinGrade = "Toddler";

			else

			    $gameMinGrade = $getGameInfo['minGradeLevel'];

			$gameMinAge = $getGameInfo['minAgeLevel'];

			$gameMaxAge = $getGameInfo['maxAgeLevel'];*/

			
			$destination = "gameData.php?gameID=$gameID";
			$display .= "<tr><td><a href='$destination'>$gameTitle</a></td>";

			$display .= "<td>$gamePub</td></tr>";//<td>$gameSubArea</td>";
			
			//$display .= "<td>$gamePub</td><td>$gameLearnArea</td></tr>";//<td>$gameSubArea</td>";

			//$display .= "<td>$gameMinGrade</td><td>$gameMaxGrade</td><td>$gameMinAge</td>";

			//$display .= "<td>$gameMaxAge</td></tr>";

	  }

	  $display .="</table>";
	  $_SESSION['listDisplay'] = $display;
	  print $display;

   }

   else

   {

	  $noData = "<br><span style='color:#036; font-weight:bold;'>No data available for that search, Please try again!</span>";

	  print $noData;

   }

   

//function doDB()

//{

  //mysql_connect("p41mysql31.secureserver.net", "gamesThatTeach", "Snickers1") or die(mysql_error());

  //mysql_select_db("gamesThatTeach") or die(mysql_error());

  //mysql_connect("localhost", "root", "") or die(mysql_error());

  //mysql_select_db("gtt") or die(mysql_error());

//}



?>