

  <!-- 
    - #FOOTER
  -->

  <footer class="footer section has-bg-image text-center"
    style="background-image: url('./assets/images/footer-bg.jpg')">
    <div class="container">

      <div class="footer-top grid-list">

        <div class="footer-brand has-before has-after">

          <a href="#" class="logo">
            <img src="./assets/images/<?= $header_logo_and_favicon; ?>" width="160" height="50" loading="lazy" alt="logo">
          </a>

          <address class="body-4">
            <?= $street_address; ?>
          </address>

          <a href="mailto:booking@grilli.com" class="body-4 contact-link"><?= $email; ?></a>

          <a href="tel:+<?= $phone; ?>" class="body-4 contact-link">Phone : <?= $phone; ?></a>

          <p class="body-4">
            Daily : 8:00 am - 8:00 pm
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <p class="title-1"><?= $footer_main_title; ?></p>
          <!-- <p class="title-1">Get News & Offers</p> -->

          <p class="label-1">
            <span class="span"><?= $footer_sub_title; ?></span>
          </p>
          <!-- <p class="label-1">
            Subscribe us & Get <span class="span">25% Off.</span>
          </p> -->

          <form action="" class="input-wrapper">
            <div class="icon-wrapper">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <input type="email" name="email_address" placeholder="Your email" autocomplete="off" class="input-field">
            </div>

            <button type="submit" class="btn btn-secondary">
              <span class="text text-1">Subscribe</span>

              <span class="text text-2" aria-hidden="true">Subscribe</span>
            </button>
          </form>

        </div>

        <ul class="footer-list">

          <li>
            <a href="#home" class="label-2 footer-link hover-underline">Home</a>
          </li>

          <li>
            <a href="#promotions" class="label-2 footer-link hover-underline">Promotions</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">About Us</a>
          </li>

          <li>
            <a href="#menu" class="label-2 footer-link hover-underline">Menus</a>
          </li>

          <li>
            <a href="#reviews" class="label-2 footer-link hover-underline">Reviews</a>
          </li>

          <li>
            <a href="#reservations" class="label-2 footer-link hover-underline">Contact</a>
          </li>

          <li>
            <a href="#events" class="label-2 footer-link hover-underline">Events</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <a href="<?= $footer_facebook; ?>" class="label-2 footer-link hover-underline" target='_blank'>Facebook</a>
          </li>

          <li>
            <a href="<?= $footer_instagram; ?>" class="label-2 footer-link hover-underline" target='_blank'>Instagram</a>
          </li>

          <li>
            <a href="<?= $footer_youtube; ?>" class="label-2 footer-link hover-underline" target='_blank'>YouTube</a>
          </li>

          <li>
            <a href="<?= $footer_google_map; ?>" class="label-2 footer-link hover-underline" target='_blank'>Google Map</a>
          </li>

          <!-- <li>
            <a href="#" class="label-2 footer-link hover-underline">Google Map</a>
          </li> -->

        </ul>

      </div>

      <div class="footer-bottom">
        <p class="copyright">
           Copyright &copy; <?php echo date("Y"); ?> your restaurant | Website designed and powered by <a href="https://webqwick.com/"
            target="_blank" class="link">webQwick. </a> All other trademarks, service marks and trade names referenced in this material are the property of their respective owner.
        </p>
      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>