<!DOCTYPE html>  
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<meta name="descrition" content="Educational Computer Gaming (ECG)">
	<meta name="keywords" content="Educational Computer Gaming (ECG), St. Mary's University, Computer Science, Video Games"> 
	<title>Admin Portal - ECG | Delete Game</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/colors.css">
	<link rel="icon" href="images/someImage.ico">
</head>

<body>
	<div id="container" style="height:825px;">
		<header>
			
			<a href="ECG_AdminPortal.php" title="home"><img src="images/image565.png" height="65" alt="image565.png"></a>
			<h1 class="position">Admin Portal - ECG</h1>
		</header>
		<div id="content" style="color: #00303A; height:725px;">
			<?php
			include_once('connToDB.php');
			$conn = doDB();

			$id = $_GET['id']; // GET gets the value of id selected by Admin
			 
			if(isset($_POST["submit"])) {
			$Uid = $_POST['id'];
			$Utitle = $_POST['title'];
			$Upublisher = $_POST['publisher'];
			$Udescription = $_POST['description'];
			$Udate = $_POST['date'];
			$Uwebsite = $_POST['website'];
			$UminAgeLevel = $_POST['minAgeLevel'];
			$UmaxAgeLevel = $_POST['maxAgeLevel'];
			$UminGradeLevel = $_POST['minGradeLevel'];
			$UmaxGradeLevel = $_POST['maxGradeLevel'];
			$UlearningArea = $_POST['learningArea'];
			$UsubArea = $_POST['subArea'];
			$UlearningObjective = $_POST['learningObjective'];
			$Umethod = $_POST['method'];
			$Ustudies = $_POST['studies'];
			$UusabilityNotes = $_POST['usabilityNotes'];
			$UlearningNotes = $_POST['learningNotes'];
			$UotherNotes = $_POST['otherNotes'];
			$Uplatform = $_POST['platform'];
			$Uprice = $_POST['price'];
			$UCurrently_Published = $_POST['Currently_Published'];
			} else {
				echo ("<h2 style='color: #ff0000; font-weight: 900;'>Delete Game from Database</h2>");
				}


			$sql = "SELECT * FROM games WHERE id = '" . $id . "'" ;
			$result = mysqli_query($conn, $sql);

			if ($id!=NULL) {
				echo '<b style="color: #00303A; height:725px;">Are you sure you want to delete Game ID:' . $id . ' ?</b><br><br>';
				echo '<center>';
				while($database = mysqli_fetch_array($result, MYSQLI_ASSOC)) {    
				?>	
					<FORM METHOD="POST" ACTION="deleteGames.php" name="search">
										 <table border="1" cellpadding="3" cellspacing="3" bordercolor="#000000">
										
											<tr>
												<td align="right" height="30" bgcolor="#FFFFFF">
												 <font color="#00303A"><strong>ID</strong></font><br/>
												</td>
											   <td valign="bottom" align="left">
												 <input type="text" name="id" value="<?php echo $database['id'] ?>" size="30"> 
											   </td>
											</tr>
											
											<tr>
												<td align="right" height="30" bgcolor="#FFFFFF">
												 <font color="#00303A"><strong>Title</strong></font><br/>
												</td>
											   <td valign="bottom" align="left">
												 <input type="text" name="title" value="<?php echo $database['title'] ?>" size="30"> 
											   </td>
											</tr>
											
											<tr>
												<td align="right" height="30" bgcolor="#FFFFFF">
												 <font color="#00303A"><strong>Publisher</strong></font><br/>
												</td>
											   <td valign="bottom" align="left">
												 <input type="text" name="publisher" value="<?php echo $database['publisher'] ?>" size="30"> 
											   </td>
											</tr>
										   
											<tr>
												<td align="right" height="30" bgcolor="#FFFFFF">
												 <font color="#00303A"><strong>Description</strong></font><br/>
												</td>
											   <td valign="bottom" align="left">
												 <input type="text" name="description" value="<?php echo $database['description'] ?>" size="30"> 
											   </td>
											</tr>						   
										   
											<tr>
												<td align="right" height="30" bgcolor="#FFFFFF">
												 <font color="#00303A"><strong>Website</strong></font><br/>
												</td>
											   <td valign="bottom" align="left">
												 <input type="text" name="website" value="<?php echo $database['website'] ?>" size="30"> 
											   </td>
											</tr>						   

											<tr>
											 <td align="right" height="15" bgcolor="#FFFFFF">
												<font color="#00303A"><strong>Learning<br/>Area</strong></font>
											 </td>
											 <td align="left" valign="bottom" >
											   <select name="learningArea">
												   <option selected>Any</option>
															 <option>Critical Thinking</option>
												   <option>Cross Curricular</option>
															 <option>Computer</option>
													   <option>Chemistry</option>
															 <option>Early Development</option>
													   <option>Economics</option>
													   <option>Environment</option>
															 <option>Foreign Language</option>
												   <option>Geography</option>
															 <option>Health</option>
													   <option>History</option>
													   <option>Language Arts</option>
													   <option>Logic</option>
													   <option>Mathematics</option>
													   <option>Music</option>
													   <option>Politics</option>
												   <option>Problem Solving</option>
													   <option>Reading</option>
												   <option>Science</option>
												   <option>Social Studies</option>
												   <option>Special Needs</option>
															 <option>Spelling</option>
															 <option>Typing</option>
															 <option>Visual Arts</option>
												   <option>Writing</option>
												</select>
												</td>
												</tr>
												
											<tr>
												<td align="right" height="30" bgcolor="#FFFFFF">
												 <font color="#00303A"><strong>Learning<br>sub areas</strong></font><br/>
												</td>
											   <td valign="bottom" align="left">
												 <input type="text" name="subArea" value="<?php echo $database['subArea'] ?>" size="30"> 
											   </td>
											</tr>								
												
												<tr><td valign="bottom" align="right" height="20" bgcolor="#FFFFFF">
													<font color="#00303A"><strong>Grade Level<br/> Range</strong></font>
												</td>
												<td align="left"><table><tr><td valign="bottom">
												  <select id="op3" name="op3" onChange="showMaxGrade();">
													<option selected>only</option>
													<option>up to</option>
													<option>between</option>
												  </select></td>
												  <td valign="bottom"><select name="minGradeLevel">
														<option selected>Any</option>
														<option id="-2">Toddler</option>
												  <option id="-1">Pre-Kindergarten</option>
														<option id="0">Kindergarten</option>
														<option id="1">1st</option>
														<option id="2">2nd</option>
														<option id="3">3rd</option>
														<option id="4">4th</option>
														<option id="5">5th</option>
														<option id="6">6th</option>
														<option id="7">7th</option>
														<option id="8">8th</option>
														<option id="9">9th</option>
														<option id="10">10th</option>
														<option id="11">11th</option>
														<option id="12">12th+</option>
												   </select></td>
													 <td> <div id="maxGradeLevel" style="visibility:hidden">
															&nbsp;&nbsp;<font size="2" color="#990000"><strong>AND</strong></font>&nbsp;&nbsp;
															<select id="maxGradeLevel" name="maxGradeLevel">
														<option selected>Any</option>
														<option id="-2">Toddler</option>
												  <option id="-1">Pre-Kindergarten</option>
														<option id="0">Kindergarten</option>
														<option id="1">1st</option>
														<option id="2">2nd</option>
														<option id="3">3rd</option>
														<option id="4">4th</option>
														<option id="5">5th</option>
														<option id="6">6th</option>
														<option id="7">7th</option>
														<option id="8">8th</option>
														<option id="9">9th</option>
														<option id="10">10th</option>
														<option id="11">11th</option>
														<option id="12">12th+</option>
												</select></div>
												</td>
												</tr>
										   </table>
												</td>
												</tr>
												<tr>
												<td valign="bottom" align="right" bgcolor="#FFFFFF">
												   &nbsp;<font color="#00303A"><strong>Age Level<br/>Range</strong></font>
												</td>
												<td align="left" valign="bottom">
												<table>
												<tr>
												<td>
												  <select id="op4" name="op4" onChange="showMaxAge();">
													   <option selected>only</option>
													   <option>up to</option>
													   <option>between</option>
												  </select></td>
												  <td><select name="minAgeLevel">
													   <option selected>Any</option>
													   <option id="3">1 - 3</option>
											 <option id="4">4</option>
													   <option id="5">5</option>
												   <option id="6">6</option>
												   <option id="7">7</option>
												   <option id="8">8</option>
												   <option id="9">9</option>
												   <option id="10">10</option>
												   <option id="11">11</option>
												   <option id="12">12</option>
												   <option id="13">13</option>
												   <option id="14">14</option>
												   <option id="15">15</option>
												   <option id="16">16</option>
												   <option id="17">17</option>
												   <option id="18">18+</option>
											</select></td>
												  <td  valign="bottom"><div id="maxAgeLevel" style="visibility:hidden" >
													&nbsp;&nbsp;<font size="2" color="#990000"><strong>AND</strong></font>&nbsp;&nbsp;
													<select id="maxAgeLevel" name="maxAgeLevel">
													   <option selected>Any</option>
													   <option id="3">1 - 3</option>
											 <option id="4">4</option>
													   <option id="5">5</option>
												   <option id="6">6</option>
												   <option id="7">7</option>
												   <option id="8">8</option>
												   <option id="9">9</option>
												   <option id="10">10</option>
												   <option id="11">11</option>
												   <option id="12">12</option>
												   <option id="13">13</option>
												   <option id="14">14</option>
												   <option id="15">15</option>
												   <option id="16">16</option>
												   <option id="17">17</option>
												   <option id="18">18+</option>
										   </select></div>
												</td></tr>
												</table>
												</td>
											</tr>
											<tr>
											   <td align="right" height="15" bgcolor="#FFFFFF">
												   <font color="#00303A"><strong>Learning<br/>Method</strong></font>
											   </td>
											   <td align="left" valign="bottom">
												 <select name="method">
														<option selected>Any</option>
														<option>Creative Activity</option>
														<option>Drill & Practice</option>
														<option>Exploration</option>
														<option>Role Playing</option>
														<option>Interactive</option>
														<option>Guided Practice</option>
														<option>Problem Solving</option>
														<option>Simulation</option>
												</select>
											  </td>
											</tr>
											<tr>
											  <td valign="bottom" align="right" bgcolor="#FFFFFF" height="30">
													<font color="#00303A"><strong>Environment</strong></font>
											  </td>
											  <td  valign="bottom" align="left" >
												<input type="radio" name="platform" value="MAC"><strong>Macintosh</strong>&nbsp;&nbsp;
												<input type="radio" name="platform" value="WIN"><strong>Windows</strong><br/>
												<input type="radio" name="platform" value="WEB"><strong>Web</strong>&nbsp;&nbsp;
												<input type="radio" name="platform" value="CONSOLE"><strong>Console</strong>&nbsp;&nbsp;
												<input type="radio" name="platform" value="MOBILE"><strong>Mobile</strong>
											  </td>
										  </tr>
										  <tr>
										  
											<tr>
												<td align="right" height="30" bgcolor="#FFFFFF">
												 <font color="#00303A"><strong>Learning<br>notes</strong></font><br/>
												</td>
											   <td valign="bottom" align="left">
												 <input type="text" name="learningNotes" value="<?php echo $database['learningNotes'] ?>" size="30"> 
											   </td>
											</tr>						  
										  
										<td align="center" colspan="2">
										  <!-- <input type="submit" name ="search" value="Add">  -->
										  <input name="submit" type="submit" value="Delete" onclick="deleteGame()">
										  
										</td>
									  </tr>
								   </table>
					</form>
					</center>
				<?php
				} //End of while
			} //end of if
				else {
				echo "<p>ID: ".$Uid."<br>Title: ".$Utitle."<br>Publisher: ".$Upublisher."<br>Description: ".$Udescription."<br>Website: ".$Uwebsite."<br>Learning Area: ".$UlearningArea."<br>Learning Sub Areas: ".$UsubArea."<br>Min Age: ".$UminAgeLevel."<br>Max Age: ".$UmaxAgeLevel."<br>Min Grade Level: ".$UminGradeLevel."<br>Max Grade Level: ".$UmaxGradeLevel."<br>Learning Method: ".$Umethod."<br>Platform: ".$Uplatform."<br>Learning Notes: ".$UlearningNotes."<br><br><b style='color: #ff0000; font-weight: 900;'>Info has been deleted from the database.</b></p><p><a href='ECG_AdminPortal.php'>Return to ECG Admin Portal</a></p>";
				}
			 $conn->close();
			 ?> </p>
					<script>
						function deleteGame() {
							<?php
							include_once('connToDB.php');
							$conn = doDB();
								$sqlUpdate = "DELETE FROM games WHERE id='" . $Uid . "'" ;
								mysqli_query($conn, $sqlUpdate);
								echo "<h2 style='color: #ff0000; font-weight: 900;'>Successfully DELTED!</h2>"; 		
							$conn->close();	
							?>;	
						}
					</script>
							<br/>
					
						
		</div> <!-- close div="content" -->	
				<div id="mod2"> 
					<section class="padding">
						<ul>
							<li><a href="ECG_AdminPortal.php" title="Search for Games">Search for Games</a></li>
							<li><a href="Add_New_Game.php" title="Add New Game">Add New Game</a></li>
						</ul>
					</section>
				</div>
				
				<div id="mod3">
				<img src="images/image333.png" height="100px" alt="image333.png">
					<i><center>Game made by a St. Mary's University student.</center></i>
				</div>
	</div> <!-- close div="container" -->
	
</body>
	<span style="height:0px; width: 1025px;">&copy; Copyright EducationalComputerGaming.com 2014 - <?php echo date("Y"); ?></span><br>
</html>
