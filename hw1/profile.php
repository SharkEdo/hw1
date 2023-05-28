<?php 
    require_once 'auth.php';
    if (!$userid = checkAuth()) {
        header("Location: login.php");
        exit;
    }
?>

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
        <link rel='stylesheet' href='profile.css'>
        <script src='profile.js' defer></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
		<link rel="icon" type="image/png" href="Images/minilogo.jpg">

        <title>Helpineer - <?php echo $userinfo['name']." ".$userinfo['surname'] ?></title>
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
				<h1> YOUR PROFILE </h1>
			  </header>
			  
			  <article id="main-content">
			  
				  <div id="imm-profile" style="background-image: url(<?php echo $userinfo['propic'] == null ? "Images/default_avatar.png" : $userinfo['propic'] ?>)">
				  </div>
				  <div id="txt-profile">
					  <h1 class="txt-pro"> <?php echo $userinfo['name']." ".$userinfo['surname'] ?> </h1>
				  </div>
				  
				  <p> <h1>Nome Utente:</h1><?php echo $userinfo['username'] ?></p>
				  <p> <h1>Email:</h1><?php echo $userinfo['email'] ?></p>

				  
			  </article>
				

		<h1 class = "title"> Favorite </h1>
        <section id="container">

			<h2 class = "argument"> C Command </h2>
            <div id="results">
                
            </div>
			
			<h2 class = "argument"> HTML Tag </h2>
			<div id="resultsHTML">
                
            </div>
		</section>
    </body>
</html>

<?php mysqli_close($conn); ?>