<?php 

$username_val = "charlotte";
$password_val = "123";

if (isset($_POST['username']) && isset($_POST['password'])) {

  if ($username_val == $_POST['username'] && $password_val == $_POST['password']) {
    session_start ();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    header ('location: read.php');
  }
  else {
    echo '<body onLoad="alert(\'Unknown member...\')">';
    echo '<meta http-equiv="refresh" content="0;URL=read.php">';
  }
}
else {
  echo 'Form variables are not declared.';
}

?>