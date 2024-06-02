<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


  <!-- Cover -->
  <main>
    <div class="hero">
      <a href="shop.php" class="btn1">Voir tous les  produits
</a>
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>Collection en vedette<h1>
            
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

          <div class="footer-nav__col footer-nav__col--info">
            <div class="footer-nav__heading">Information</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">La marque</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Magasins locaux</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Service Client</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Privacy &amp; cookies</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Site map</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--whybuy">
            <div class="footer-nav__heading">Pourquoi acheter chez nous</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Expédition &amp; retour</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Expédition sécurisée</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Témoignages</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Primé</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Commerce éthique</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--account">
            <div class="footer-nav__heading">Votre compte</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Se connecter</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Registre</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Voir panier</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Consulter votre lookbook</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Suivre commande</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Mettre à jour information</a>
              </li>
            </ul>
          </div>


          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">Détails contact</div>
            <address class="address">
            Head Office: E-BAZAR.<br>
            Belle Rose p.108.
          </address>
            <div class="phone">
              Telephone:
              <a class="phone__number" href="tel:0123456789">032-65-766-80</a>
            </div>
            <div class="email">
              Email:
              <a href="mailto:support@yourwebsite.com" class="email__addr">toljahjari21@gmail.com</a>
            </div>
          </div>

        </div>
      </div>

      <!-- <div class="banners">
        <div class="container clearfix">

          <div class="banner-award">
            <span>Award winner</span><br> Fashion awards 2016
          </div>

          <div class="banner-social">
            <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-pinterest-circled"></i>
          </a>
          </div>

        </div>
      </div> -->

      <div class="page-footer__subline">
        <div class="container clearfix">

          <div class="copyright">
            &copy; <?php echo date("Y");?> Site de Vente&trade;
          </div>

          <div class="developer">
            Developpés par Tolojanahary-Queen-Mahatoky
          </div>

          <div class="designby">
            Concu par Tolojanahary-Queen-Mahatoky
          </div>

        </div>
      </div>
    </footer>
</body>

</html>
