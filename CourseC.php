<?php 
    require_once 'auth.php';
    if (!$userid = checkAuth()) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <?php 
        // Carico le informazioni dell'utente loggato per visualizzarle nella sidebar (mobile)
        $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
        $userid = mysqli_real_escape_string($conn, $userid);
        $query = "SELECT * FROM users WHERE id = $userid";
        $res_1 = mysqli_query($conn, $query);
        $userinfo = mysqli_fetch_assoc($res_1);   
    ?>


    <head>
        <link rel='stylesheet' href='Course.css'>
        <script src='CCourse.js' defer></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
		<link rel="icon" type="image/png" href="Images/minilogo.jpg">

        <title>C Course</title>
    </head>
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
		<h1> C </h1>
	  </header>
	  
	<div class="container">

	  <h2>1. History and purpose of the C language</h2>
	  <p>The C language was developed by Dennis Ritchie in the 1970s at AT&amp;T's Bell Labs. It was created with the goal of writing the 
	  UNIX operating system. Today, C is one of the most popular and used languages ​​in the programming world.</p>

	  <h2>2. Main features of the C language</h2>
	  <p>The C language is a high-level programming language and at the same time allows access to low-level functionality. It is a compiled 
	  language, offering a wide range of standard libraries and allowing for structured programming.</p>

	  <h2>3. Structure of a C program</h2>
	  <p>A C program consists of one or more functions. Every C program begins with the <code>main()</code> function, which is the entry point
	  of the program. Within the <code>main()</code> function, the program's instructions are executed.</p>

	  <h2>4. Data types and variables</h2>
	  <p>The C language offers several data types, such as integers, decimals, characters, booleans, and pointers. Variables are used to store
	  values ​​of these data types and are declared with their type before being used.</p>

	  <h2>5. Control structures</h2>
	  <p>C provides control structures such as <code>if-else</code>, <code>for</code>, <code>while</code> and <code>switch</code> to manage the
	  program execution flow. These structures allow you to execute or skip pieces of code based on certain conditions.</p>
	</div>
	
	<section id="search">
	<form>
		<div class="search">
		  <input class = "btn" type="submit" value="Command">
		</div>
	</form>
	</section>
	
	<section class="BloRe">
		<div id="results">
			
		</div>
	</section>
	   
	
</body>
</html>
