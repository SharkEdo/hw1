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
    <title>Assembla il tuo pc</title>
    <link href="https://fonts.googleapis.com/css?family=Pangolin:400,700|Proxima+Nova" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="provided-style.css"/>
    <link rel="stylesheet" href="style_mhw2.css"/>
    <script src="constants.js" defer="true"></script>
    <script src="script_mhw2.js" defer="true"></script>
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
			<h2 id = "PrincipalTitle">Mini Game</h2>
	  </header>
	  
    <article>
	
	  <h1>Assemble your computer</h1>
      <section class="question-name">
        <h1>Motherboard:</h1>
      </section>

      <section class="choice-grid">
        <div data-choice-id="blep" data-question-id="one">
          <img src="Images/MiniGame/1_1.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="happy" data-question-id="one">
          <img src="Images/MiniGame/1_2.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="sleeping" data-question-id="one">
          <img src="Images/MiniGame/1_3.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="dopey" data-question-id="one">
          <img src="Images/MiniGame/1_4.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="burger" data-question-id="one">
          <img src="Images/MiniGame/1_5.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="cart" data-question-id="one">
          <img src="Images/MiniGame/1_6.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="nerd" data-question-id="one">
          <img src="Images/MiniGame/1_7.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="shy" data-question-id="one">
          <img src="Images/MiniGame/1_8.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="sleepy" data-question-id="one">
          <img src="Images/MiniGame/1_9.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>
      </section>

      <section class="question-name">
        <h1>Ram:</h1>
      </section>

      <section class="choice-grid">
        <div data-choice-id="blep" data-question-id="two">
          <img src="Images/MiniGame/2_1.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="happy" data-question-id="two">
          <img src="Images/MiniGame/2_2.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="sleeping" data-question-id="two">
          <img src="Images/MiniGame/2_3.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="dopey" data-question-id="two">
          <img src="Images/MiniGame/2_4.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="burger" data-question-id="two">
          <img src="Images/MiniGame/2_5.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="cart" data-question-id="two">
          <img src="Images/MiniGame/2_6.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="nerd" data-question-id="two">
          <img src="Images/MiniGame/2_7.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="shy" data-question-id="two">
          <img src="Images/MiniGame/2_8.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="sleepy" data-question-id="two">
          <img src="Images/MiniGame/2_9.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>
      </section>

      <section class="question-name">
        <h1>Video Card:</h1>
      </section>

      <section class="choice-grid">
        <div data-choice-id="blep" data-question-id="three">
          <img src="Images/MiniGame/3_1.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="happy" data-question-id="three">
          <img src="Images/MiniGame/3_2.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="sleeping" data-question-id="three">
          <img src="Images/MiniGame/3_3.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="dopey" data-question-id="three">
          <img src="Images/MiniGame/3_4.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="burger" data-question-id="three">
          <img src="Images/MiniGame/3_5.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="cart" data-question-id="three">
          <img src="Images/MiniGame/3_6.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="nerd" data-question-id="three">
          <img src="Images/MiniGame/3_7.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="shy" data-question-id="three">
          <img src="Images/MiniGame/3_8.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>

        <div data-choice-id="sleepy" data-question-id="three">
          <img src="Images/MiniGame/3_9.jpg"/>
          <img class="checkbox" src="Images/MiniGame/unchecked.png"/>
        </div>
      </section>

    </article>
  </body>
</html>
