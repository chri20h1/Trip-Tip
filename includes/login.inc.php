<?php

if (isset($_POST["submit"])) {

  // Få data fra "form" html
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];

  // Derefter vi en masse "error handler", som fanger fejl brugeren har begået
  // Funktionerne kan findes i functions.inc.php

  require_once "dbh.inc.php";
  require_once 'functions.inc.php';

  // Hvis der er tomme felter --> exit
  if (emptyInputLogin($username, $pwd) === true) {
    header("location: ../login.php?error=emptyinput");
		exit();
  }

  // Hvis vi når hertil betyder det, at der er ingen fejl begået af brugeren ved login

  // Nu logger vi brugeren ind
  loginUser($conn, $username, $pwd);

} else {
	header("location: ../login.php");
    exit();
}
