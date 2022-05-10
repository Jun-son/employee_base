<?php
	if(isset($_POST["id"])) {
		$conn = new mysqli("172.10.1.2", "root", "root", "employee");
 	if($conn->connect_error) {
    	die("Ошибка: " . $conn->connect_error);
  	}
  	$userid = $conn->real_escape_string($_POST["id"]);
    $sql = "DELETE FROM staff WHERE id = '$userid'";
    if($conn->query($sql)){
         
        header("Location: /index.php");
    }
    else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();  
	}
?>