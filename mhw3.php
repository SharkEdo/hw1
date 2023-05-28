<?php 
    require_once 'auth.php';
    if (!$userid = checkAuth()) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>

  <?php 
    // Carico le informazioni dell'utente loggato per visualizzarle nella sidebar (mobile)
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
    $userid = mysqli_real_escape_string($conn, $userid);
    $query = "SELECT * FROM users WHERE id = $userid";
    $res_1 = mysqli_query($conn, $query);
    $userinfo = mysqli_fetch_assoc($res_1);   
  ?>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Passion</title>
    <link rel="stylesheet" href="mhw3.css">
	<script src="Nasa.js" defer></script>
	<link rel="icon" type="image/png" href="Images/minilogo.jpg">
  </head>

  <body>
	   <nav>
	<img src = "Images/logonavbar.jpg" class = "logo" />
		<div id ="Cell">
			<div class="dropdown">
				<a id = "All-link" class= "but-navbar"> All </a>
				<div class="dropdown-content">
					<p class = "tag-page"> Other</p>
					<a href="mhw3.php">Passion</a>
					<a href="minigame.php"> mini-game</a>
					
					<p class = "tag-page"> Course</p>
					  <a href="CourseC.php">C</a>
					  <a href="CourseHTML.php">HTML</a>
					  <a href="Micro.php">Micro</a>
					
					<p class = "tag-page"></p> 
				  <a href="profile.php">Profile</a>
				  <a href="logout.php">Logout</a>
				 </div> 
			</div>
		</div>
	
	
	<div class = "central">
	
			<div class="dropdown">
				<a class= "but-navbar"> Other </a>
				<div class="dropdown-content">
				  <a href="minigame.php">Mini-Game</a>
				  <a href="mhw3.php">Passion</a>
				 </div> 
			</div>
			
			<div class="dropdown">
				<a class= "but-navbar"> Course </a>
				<div class="dropdown-content">
				  <a href="CourseC.php">C</a>
				  <a href="CourseHTML.php">HTML</a>
				  <a href="Micro.php">Micro</a>
				 </div> 
			</div>	
			
      <a class= "but-navbar" href='homepage.php'> Home </a>						
      <a id = "contact" class= "but-navbar"> Contact </a>
	</div>
	<div class = "Accesso">
	<a id = "signup" href='profile.php'>Profile</a>
	<a href='logout.php'><button id = "login"> Logout </button></a>
	</div> 
  </nav>
	  <header>
		<h1> PASSION </h1>
	  </header>
	  
  <article>
	<div class = "corpo">
	
	<div class = 'Init'>
	<img src= "Images/NasaLogo.png" class = 'Logo'>
	<h1> Space Missions</h1>
	</div>
		<div class= 'box'>
		<p>One of the first passions I had since I was a child is space, space has always fascinated
		and intrigued me with its wonders and misteries. I dreamed of becoming an astronaut and exploring the stars,
		planets and galaxies. space is for me a source of ispiration and knowledge, a challenge for humanity and Science. 
		<br>That's why I put the willingness to search for NASA space missions.
		<br> Recommended searches: Sun, Artemis, Saturn.<p>
		<form id= 'Nasa'>
		  Enter a Mission:
		  <input type='text' id='Mission'>
		  <input type='submit' id='submitNs' value='Search'>
		</form>
		</div>
		
		<section id="nasa-view">
		</section>
		
  </article>
  </body>
</html>