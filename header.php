<?php
    session_start();
    require_once 'backend/db.php';
    require_once 'backend/display_about_info.php';
    require_once 'backend/display_footer_info.php';
    require_once 'backend/display_header_info.php';
    require_once 'backend/display_header_logo_and_favicon.php';
    require_once 'backend/display_hero_img_1.php';
    require_once 'backend/display_hero_img_2.php';
    require_once 'backend/display_hero_img_3.php';
    require_once 'backend/display_hero_info_1.php';
    require_once 'backend/display_hero_info_2.php';
    require_once 'backend/display_hero_info_3.php';
    require_once 'backend/display_menu_items.php';
    require_once 'backend/display_menu_titles.php';
    require_once 'backend/display_our_strengths.php';
    require_once 'backend/display_promo_imgs.php';
    require_once 'backend/display_promo_info.php';
    require_once 'backend/display_reservations.php';
    require_once 'backend/display_reviews.php';
    require_once 'backend/display_special_dish_info.php';
    require_once 'backend/display_upcoming_events.php';

  if (isset($_SESSION["user_id"])) {

require "backend/db.php";
$msqli = $conn;
// $msqli = require __DIR__ . "backend/db.php";

$sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";

$result = $msqli->query($sql);

$user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <!-- <title>Your Restaurant</title> -->
  <title><?= $header_logo_and_favicon_title; ?></title>
  <!-- <title><?= $header_business_title; ?></title> -->
  <meta name="title" content="Your Restaurant">
  <meta name="description" content="Restaurant website">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/<?= $header_logo_and_favicon; ?>" type="image">
  <!-- <link rel="shortcut icon" href="./assets/images/logo-3.png" type="image/svg+xml"> -->

  <!-- <link rel="shortcut icon" href="./assets/images/501-logo.png" type="image/svg+xml"> -->
  <!-- <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml"> -->

  <!-- FONT AWESOME -->
  <script
      src="https://kit.fontawesome.com/7a6c6b42a6.js"
      crossorigin="anonymous"
    ></script>
    <script src="assets/js/shopping-cart.js" defer></script>

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="<?= $business_name_font; ?>" rel="stylesheet">

  <!-- 
    - shopping-cart css link
  -->
  <link rel="stylesheet" href="./assets/css/shopping-cart.css">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/<?= $hero_slider_img_1; ?>">
  <link rel="preload" as="image" href="./assets/images/<?= $hero_slider_img_2; ?>">
  <link rel="preload" as="image" href="./assets/images/<?= $hero_slider_img_3; ?>">
  <!-- <link rel="preload" as="image" href="./assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-3.jpg"> -->

  <style>
    .dropbtn {
  background-color: transparent;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.fa-solid {
  color: #fff;
  background: transparent;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: #000;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #000;
  color:#fff;
}

.dropdown:hover .dropdown-content {display: block;}

/* .dropdown:hover .dropbtn {background-color: #ffff;} */
  </style>

</head>

<body id="top">
  <!-- 
    - #PRELOADER
  -->
  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">byob</p>
  </div>
  <!-- 
    - #TOP BAR
  -->
  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          <?= $street_address; ?>
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon" style="display:flex; align-items:center; gap:.5rem">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>Hours
        </div>

        <span class="span"> <?= $business_hours_mon; ?></span>
        <span class="span"> <?= $business_hours_fri; ?></span>
        <span class="span"> <?= $business_hours_sun; ?></span>
      </div>

      <a href="tel:+11234567890" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span"><?= $phone; ?></span>
      </a>

      <div class="separator"></div>

      <a href="mailto:info@yourrestaurant.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span"><?= $email; ?></span>
      </a>

    </div>
  </div>
