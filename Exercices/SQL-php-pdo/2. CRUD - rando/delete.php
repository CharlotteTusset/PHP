<?php

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