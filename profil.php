<?php
  include_once "header.php";
  include_once "includes/dbh.inc.php";
?>

   <main>
     <div class="wrapper-main">
       <section class="section-default">



 <?php
 if($_SESSION['userid']){

      $brugeren = $_SESSION['userid'];
      $bint = (int)$brugeren;

      $sql = "SELECT * FROM users WHERE usersId ='$bint';";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
         while ($row = mysqli_fetch_assoc($result)){
            echo "<span class='profilInfo'>" . "Navn:............ " . "<div class='profilInfoFed'>" . "{$row['usersName']}" . "</div><br>" . "Cpr:............... " . "<div class='profilInfoFed'>" . "{$row['usersCpr']}" . "</div><br>" . "Username:..... " . "<div class='profilInfoFed'>" . "{$row['usersUid']}" . "</div><br>" . "Email............... " . "<div class='profilInfoFed'>" . "{$row['usersEmail']}" . "</div><br>" . "Fødselsdag:..... " . "<div class='profilInfoFed'>" . "{$row['usersBirthday']}" . "</div><br>" . "Køn:................... " . "<div class='profilInfoFed'>" . "{$row['usersSex']}" . "</div><br>" . "Adresse:............. " . "<div class='profilInfoFed'>" . "{$row['usersAddress']}" . "</div><br>" . "Postnummer:...... " . "<div class='profilInfoFed'>" . "{$row['usersPostal']}" . "</div><br>" . "By:......................... " . "<div class='profilInfoFed'>" . "{$row['usersCity']}" . "</div><br>" . "</span>";
         }
       }
else {
    echo "error";
  }
}
  ?>

       </section>
      </div>
     </main>

<?php
   include_once "footer.php";
?>
