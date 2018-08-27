<?php

session_start();

if (isset($_SESSION['connect']) && $_SESSION['connect'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    echo "Please log in first to see this page.";
}

include 'connect.php';

$sql = "DELETE FROM hiking WHERE id=:id";

$req = $bdd->prepare($sql);

if(isset($_POST['delete'])){ 
	$id=$_POST['id'];
} 

$req->bindParam(":id", $id);

$req->execute();
$req->closeCursor(); 

// Redirection
header('Location: read.php');

?>