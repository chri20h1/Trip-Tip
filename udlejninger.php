<?php
  include_once 'header.php';
?>

   <main>
     <div class="wrapper-main">
         <?php if (isset($_SESSION['useruid'])) : ?>

            <img src="img/udlejs.png" style="width: 100%; height: 100%;">


          <?php else : ?>

            <p class="login-status">Du er ikke logget på!</p>

           <?php endif; ?>
      </div>
     </main>
<?php
   include_once "footer.php";
?>
