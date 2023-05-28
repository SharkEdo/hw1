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
	<link rel="icon" type="image/png" href="Images/minilogo.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="homepage.css" rel="stylesheet" type="text/css">
	<script src="homepage.js" defer="true"></script>
	<title> Engineering Help </title>
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
	  <h1> Helpineer </h1>
	  <p> Welcome to Helpineer, the platform dedicated to offering assistance and support to undergraduate computer engineering students. 
	  <br>We are here to help you overcome academic challenges and achieve success in your study journey.</p>
	  <div id="overlay"> </div>
  </header>
  
  <main>	
  
		   <h1> Course </h1>
    	   <section id="corsi">
		   
		   <a class="Link_course" href="CourseC.php">
			<div class="block"> 
				<h1 class = 'Name-course'>C</h1>
				<!--<p>Corso di base di C. Argomenti trattati: introduzione, variabili, operazioni e funzioni; </p>-->
				<!--<div class='contenuti'> contenuto: funzioni, puntatori</div>-->
			</div>
			</a>
			
			<a class="Link_course" href="CourseHTML.php">
			<div class="block"> 
				<h1 class = 'Name-course'>Html</h1>
				<!--<div class='contenuti'> contenuto: funzioni, puntatori</div>-->
			</div>
			</a>
			
			<a class="Link_course" href="Micro.php">
			<div class="block"> 
				<h1 class = 'Name-course'>Micro</h1>
				<!--<div class='contenuti'> contenuto: funzioni, puntatori</div>-->
			</div>
			</a>
			
			</section>
			
			<h1>Command</h1>
			<p> Essential Resources: Explore key commands of the two programming languages ​​here with a single click. </p>
			<section id="search">

				<form id="C">
					<div class="search">
					  <input id = "btnC" type="submit" value="C">
					</div>
				</form>

				<form id="H">
					<div class="search">
					  <input id = "btnH" type="submit" value="HTML">
					</div>
				</form>
			</section>
			
			<section class="container">
				<div id="results">
					
				</div>
			</section>
	   
  </main>


  <footer> 
   	<ul>
		<li class = "subtitle"><strong> HELPINEER </strong></li>
		<li><i> Surname</i>: Cunsolo</li>
		<li><i> Name</i>: Edoardo Giuseppe</li>
		<li><i> Nr.Mat</i>: 1000015960</li>
	</ul>

 	<ul>
		<li class = "subtitle"><strong> CONTACT </strong></li>
		<li><i> email</i>: e.cunsolo19@gmail.com</li>
		<li><i> Indeed</i>: Edoardo Cunsolo</li>
	</ul>

  	<ul>
		<li class = "subtitle"><strong> SOCIAL </strong></li>
		<li>Facebook</li>
		<li>Instagram</li>
		<li>Twitter</li>
	</ul>
	
	<ul>
		<li class = "subtitle"><strong> LINK UTILI </strong></li>
		<li>Assistenza</li>
		<li>App per cellulare</li>
		<li>Informazioni legali</li>
	</ul>
  </footer>
  
</body>

</html>