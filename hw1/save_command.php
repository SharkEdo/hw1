<?php

    require_once 'auth.php';
    if (!$userid = checkAuth()) exit;

    command();

    function command() {
        global $dbconfig, $userid;

        $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
        
        # Costruisco la query
        $userid = mysqli_real_escape_string($conn, $userid);
		$course = mysqli_real_escape_string($conn, $_POST['course']);
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
		$description = mysqli_real_escape_string($conn, $_POST['description']);


		if($course === 'C'){
			$query = "SELECT * FROM C WHERE user = '$userid' AND id = '$id'";
			$res = mysqli_query($conn, $query) or die(mysqli_error($conn));
			# if song is already present, do nothing
			if(mysqli_num_rows($res) > 0) {
				echo json_encode(array('ok' => true));
				exit;
			}

			# Eseguo
			$query = "INSERT INTO C(id, user, content) VALUES('$id', '$userid', JSON_OBJECT('id', '$id', 'title', '$title', 'description', '$description'))";
			error_log($query);
			# Se corretta, ritorna un JSON con {ok: true}
			if(mysqli_query($conn, $query) or die(mysqli_error($conn))) {
				echo json_encode(array('ok' => true));
				exit;
			}

			mysqli_close($conn);
			echo json_encode(array('ok' => false));
			}else if($course === 'HTML'){
			$query = "SELECT * FROM HTML WHERE user = '$userid' AND id = '$id'";
			$res = mysqli_query($conn, $query) or die(mysqli_error($conn));
			
			if(mysqli_num_rows($res) > 0) {
				echo json_encode(array('ok' => true));
				exit;
			}

			# Eseguo
			$query = "INSERT INTO HTML(id, user, content) VALUES('$id', '$userid', JSON_OBJECT('id', '$id', 'title', '$title', 'description', '$description'))";
			error_log($query);
			# Se corretta, ritorna un JSON con {ok: true}
			if(mysqli_query($conn, $query) or die(mysqli_error($conn))) {
				echo json_encode(array('ok' => true));
				exit;
			}
			mysqli_close($conn);
			echo json_encode(array('ok' => false));
		}
    }

?>