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
        <script src='HTML_course.js' defer></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
		<link rel="icon" type="image/png" href="Images/minilogo.jpg">

        <title>HTML Course</title>
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
		<h1> HTML </h1>
	  </header>
	  
	<div class="container">

	  <h2>1. History and purpose of the HTML language</h2>
	  <p>HTML, acronym for HyperText Markup Language, was developed by Tim Berners-Lee in the 90s as a markup language for creating web pages. 
	  The main goal of HTML was to provide a standard framework for formatting content and creating hyperlinks between pages. HTML has played 
	  a vital role in the development and dissemination of the World Wide Web, enabling the creation of web pages that are easily accessible 
	  and understandable to Internet users. Over the years, HTML has undergone several revisions and versions, introducing new features and 
	  improving compatibility with different browsers. Today, HTML is still widely used as a basic language for building websites and a vital 
	  tool for publishing content on the Internet.</p>

	  <h2>2. Main features of the HTML language</h2>
	  <p>HTML is the backbone of the web. Its main features lie in its ability to structure and organize content on web pages. Using HTML tags, 
	  developers can define headings, paragraphs, lists, and sections, creating a hierarchical structure for easy readability and navigation. 
	  HTML also enables the creation of hyperlinks, facilitating seamless navigation between web pages. 
	  With HTML, developers can integrate multimedia elements such as images, videos, and audio, enhancing the visual appeal and interactivity 
	  of web content.
	  HTML further supports the creation of forms for user input, allowing the development of interactive web applications. Its compatibility and 
	  accessibility features ensure that web pages are platform-independent, widely supported, and accessible to all users.</p>

	  <h2>3. Structure of a HTML program</h2>
	  <p>A typical HTML program follows a specific structure to ensure proper rendering and functionality. Here is the basic structure of an HTML 
	  program: <code>html</code> <code>head</code> <code>title</code> <code>body</code></p>

	  <h2>4. Data types and variables</h2>
	  <p>In HTML, there are no explicit data types or variables like in programming languages such as C or JavaScript. HTML is primarily a markup 
	  language used for structuring and presenting content on web pages.</p>

	  <h2>5. Control structures</h2>
	  <p>HTML itself does not include control structures like loops or conditionals. However, HTML can be combined with scripting languages like 
	  JavaScript to add control structures and interactivity to web pages.</p>
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
