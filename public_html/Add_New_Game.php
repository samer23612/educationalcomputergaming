<!DOCTYPE html>  
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<meta name="descrition" content="Educational Computer Gaming (ECG)">
	<meta name="keywords" content="Educational Computer Gaming (ECG), St. Mary's University, Computer Science, Video Games"> 
	<title>Admin Portal - ECG | Add New Game</title>
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
<script language="JavaScript" type="text/javascript">
function showMaxGrade()
{
  if(document.search.op3[2].selected)
		 document.search.maxGradeLevel.style.visibility="visible";
}
function showMaxAge()
{
  if(document.search.op4[2].selected)
    document.search.maxAgeLevel.style.visibility="visible";
}
</script>
</head>

<body>
	<div id="container" style="height:740px;">
		<header>
			
			<a href="ECG_AdminPortal.php" title="home"><img src="images/image565.png" height="65" alt="image565.png"></a>
			<h1 class="position">Admin Portal - ECG</h1>
		</header>  
<div id="content" style="color: #00303A; height:640px;">
			<h2 style="color: #00303A">Add New Game Information</h2>
		
			<center>			
			<div >			
				<FORM METHOD="POST" ACTION="insertData.php" name="search">
						 <table border="1" cellpadding="3" cellspacing="3" bordercolor="#000000">
						   
						    <tr>
								<td align="right" height="30" bgcolor="#FFFFFF">
								 <font color="#00303A"><strong>Title</strong></font><br/>
								</td>
							   <td valign="bottom" align="left">
								 <input type="text" name="title" value="" size="30"> 
							   </td>
							</tr>
							
							<tr>
								<td align="right" height="30" bgcolor="#FFFFFF">
								 <font color="#00303A"><strong>Publisher</strong></font><br/>
								</td>
							   <td valign="bottom" align="left">
								 <input type="text" name="publisher" value="" size="30"> 
							   </td>
							</tr>
						   
							<tr>
								<td align="right" height="30" bgcolor="#FFFFFF">
								 <font color="#00303A"><strong>Description</strong></font><br/>
								</td>
							   <td valign="bottom" align="left">
								 <input type="text" name="description" value="" size="30"> 
							   </td>
							</tr>						   
						   
							<tr>
								<td align="right" height="30" bgcolor="#FFFFFF">
								 <font color="#00303A"><strong>Website</strong></font><br/>
								</td>
							   <td valign="bottom" align="left">
								 <input type="text" name="website" value="" size="30"> 
							   </td>
							</tr>						   
<!--   -->	
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
								 <input type="text" name="subArea" value="" size="30"> 
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
								 <input type="text" name="learningNotes" value="" size="30"> 
							   </td>
							</tr>						  
						  
						<td align="center" colspan="2">
						  <input type="submit" name ="search" value="Add">
						  <input type="reset" value="Reset">
						</td>
					  </tr>
				   </table>
				</form>
				<br/>
			
			</div>
			</center>
			
		</div> <!-- close div="content" -->	
		<div id="mod2"> 
			<section class="padding">
				
				<ul>
					<li><a href="ECG_AdminPortal.php" title="Search for Games">Search for Games</a></li>
					<li><a href="Add_New_Game.php" title="Add New Game">Add New Game</a></li>
					<!--
					<li><a href="index.php" title="Welcome to ECC">Welcome to ECC</a></li>
					<li><a href="Publication_and_Links.php" title="Publication and Links">Publication and Links</a></li>
					<li><a href="Graduation_Certificate.php" title="Graduation Certificate">Graduation Certificate</a></li>
					<li><a href="contact_Us.php" title="Contact Us">Contact Us</a></li>
					-->
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