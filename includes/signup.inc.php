<?php

if (isset($_POST["submit"])) {

  // Få data fra "form" html
  $social = $_POST["social"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];
  $birthday = $_POST["birthday"];
  $sex = $_POST["sex"];
  $address = $_POST["address"];
  $postal = $_POST["postal"];
  $city = $_POST["city"];

  // Derefter kører vi en masse "error handlers", som fanger fejl brugeren har begået såsom brugt brugernavn eller tomme felter
  // Funktionerne kan findes i functions.inc.php

  require_once "dbh.inc.php";
  require_once 'functions.inc.php';


  // Vi har sat funktionerne til "!== false" da "=== true" har en risiko for, at give os et forkert resultat

  // Hvis der er tomme felter --> exit
  if (emptyInputSignup($social, $name, $email, $username, $pwd, $pwdRepeat, $birthday, $sex, $address, $postal, $city) !== false) {
    header("location: ../signup.php?error=emptyinput");
		exit();
  }
	// Hvis det ikke er et ordenligt username --> exit
  if (invalidUid($uid) !== false) {
    header("location: ../signup.php?error=invaliduid");
		exit();
  }
  // Hvis det ikke er en ordenlig email --> exit
  if (invalidEmail($email) !== false) {
    header("location: ../signup.php?error=invalidemail");
		exit();
  }
  // Hvis pwd ikke matcher --> exit
  if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=passwordsdontmatch");
		exit();
  }
  // Hvis usernamed er taget --> exit
  if (uidExists($conn, $username) !== false) {
    header("location: ../signup.php?error=usernametaken");
		exit();
  }

  // Hvis vi når hertil betyder det, at der er ingen fejl begået af brugeren ved signup

  // Nu indsætter vi brugeren i databasen "users"
  createUser($conn, $social, $name, $email, $username, $pwd, $birthday, $sex, $address, $postal, $city);
  

} else {
	header("location: ../signup.php");
    exit();
}
