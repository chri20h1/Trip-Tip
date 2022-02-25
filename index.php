<?php
  include_once "header.php";
?>

  <link rel="stylesheet" href="styles/grid.css"/>

   <main>
     <div class="wrapper-main">


       <?php if (isset($_SESSION['useruid'])) : ?>

         <section class="section-default"><p class="login-status">Dine forslag</p></section>
                <div class="grid">
                  <div class="bil"> <img src="img/bil1.png" style="width: 258px; height: 180px;"> <p>Toyata mini |</p> <h1>85.000kr</h1> </div>
                   <div class="bil"> <img src="img/bil2.jpeg" style="width: 258px; height: 180px;"> <p>Bentley ford |</p> <h1>365.000kr</h1> </div>
                   <div class="bil"> <img src="img/bil3.jpeg" style="width: 258px; height: 180px;"> <p>Audi A8 |</p> <h1>200.000kr</h1></div>
                   <div class="bil"> <img src="img/bil4.jpg" style="width: 258px; height: 180px;"> <p>Renault quick |</p> <h1>55.000kr</h1></div>
                   <div class="bil"> <img src="img/bil5.jpeg" style="width: 258px; height: 180px;"> <p>Gamle Ole |</p> <h1>123.000kr</h1></div>
                   <div class="bil"> <img src="img/bil6.jpg" style="width: 258px; height: 180px;"> <p>Mercedes future |</p> <h1>1.200.000kr</h1></div>
                   <div class="bil"> <img src="img/bil7.jpg" style="width: 258px; height: 180px;"> <p>Pegeot 102 |</p> <h1>45.000kr</h1></div>
                   <div class="bil"> <img src="img/bil8.jpg" style="width: 258px; height: 180px;"> <p>Skoda activa |</p> <h1>100.000kr</h1></div>
               </div>


        <?php else : ?>

          <p class="login-status">Du er ikke logget på!</p>

         <?php endif; ?>

      </div>
     </main>
<?php
   include_once "footer.php";
?>
