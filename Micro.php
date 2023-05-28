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

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
		<link rel="icon" type="image/png" href="Images/minilogo.jpg">

        <title>Micro Course</title>
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
		<a id = "signup" href='profile.php'>Profilo</a>
		<a href='logout.php'><button id = "login"> Logout </button></a>
		</div> 
	  </nav>
	  <header>
		<h1> Micro </h1>
	  </header>
	  
	<div class="container">

	  <h2>1. Microcontroller Architecture</h2>
	  <p>Most microcontrollers follow a von Neumann or Harvard-type architecture. The von Neumann architecture 
	  has single memory for data and instructions, while the Harvard architecture has separate memories for data and instructions. 
	  Both architectures have specific advantages and disadvantages and are chosen according to the needs of the project.</p>

	  <h2>2. Integrated Peripherals</h2>
	  <p>Microcontrollers often include a variety of integrated peripherals to facilitate interfacing with the outside world.
	  These peripherals can include digital input/output ports, analog-to-digital converters (ADCs), digital-to-analog converters (DACs), 
	  timers/counters, serial communication (UART, SPI, I2C), and more. The use of integrated peripherals allows microcontrollers to easily connect 
	  to external sensors, actuators, and other devices.</p>

	  <h2>3. Microcontroller Programming</h2>
	  <p>Microcontroller programming can be done using different languages ​​and development environments. A common language for programming
	  microcontrollers is the C language, which offers a good combination of efficiency and ease of use. It is also possible to use high-level
	  programming languages ​​such as Python to simplify software development. Integrated development environments (IDEs) such as the Arduino IDE,
	  MPLAB X IDE, and Keil MDK are commonly used to write, compile, and upload code to microcontrollers.</p>

	  <h2>4. Energy Management</h2>
	  <p>Microcontrollers often need to manage energy efficiently, especially when used in battery-powered or energy-constrained
	  devices. To this end, they can implement different techniques such as low-power mode, sleep mode, clock gating, and supply voltage reduction. 
	  These techniques help reduce the power consumption of microcontrollers and extend battery life.</p>

	  <h2>5. Real-Time Operating Systems (RTOS)</h2>
	  <p>In more complex designs, a real-time operating system can be used to handle microcontroller tasks 
	  efficiently. An RTOS provides multitasking, task scheduling, event management, and inter-process communication capabilities. Examples of 
	  commonly used RTOS are FreeRTOS, uC/OS-II and TI-RTOS. Using an RTOS simplifies the management of complex tasks, allowing for better 
	  organization of the code and greater system reliability.</p>
	</div>
</body>
</html>