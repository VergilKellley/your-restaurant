<?php
    require_once 'header.php';
?>
<!-- 
    - #HEADER
  -->

<header class="header" data-header>
    <div class="container">

        <a style="display: flex; flex-direction: column; gap: 1rem; align-items: center;" href="#" class="logo">
            <img class="header-logo" src="./assets/images/<?= $header_logo_and_favicon; ?>" style="width:150px"
                alt="your restaurant logo">

            <!-- <img id="header-logo" src="./assets/images/501-logo-2.png" width="160" height="50" alt="Grilli - Home"> -->
        </a>


        <nav class="navbar" data-navbar>

            <button class="close-btn" aria-label="close menu" data-nav-toggler>
                <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>

            <a href="#" class="logo">
                <img class="header-logo" src="./assets/images/<?= $header_logo_and_favicon; ?>" style="width:150px"
                    alt="<?= $header_logo_and_favicon_desc; ?>">
            </a>

            <ul class="navbar-list">
                <li class="navbar-item">
                    <a href="#home" class="navbar-link hover-underline active">
                        <div class="separator"></div>

                        <span class="span desk-top-display">Home</span>
                        <span class="span mobile-display" data-nav-toggler>Home</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="#promotions" class="navbar-link hover-underline">
                        <div class="separator"></div>

                        <span class="span desk-top-display">Promotions</span>
                        <span class="span mobile-display" data-nav-toggler>Promotions</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="#about" class="navbar-link hover-underline">
                        <div class="separator"></div>

                        <span class="span desk-top-display">About Us</span>
                        <span class="span mobile-display" data-nav-toggler>About Us</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="#menu" class="navbar-link hover-underline">
                        <div class="separator"></div>

                        <span class="span desk-top-display">Menu</span>
                        <span class="span mobile-display" data-nav-toggler>Menu</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="#reviews" class="navbar-link hover-underline">
                        <div class="separator"></div>

                        <span class="span desk-top-display">Reviews</span>
                        <span class="span mobile-display" data-nav-toggler>Reviews</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="#reservations" class="navbar-link hover-underline">
                        <div class="separator"></div>

                        <span class="span desk-top-display">Contact</span>
                        <span class="span mobile-display" data-nav-toggler>Contact</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="#events" class="navbar-link hover-underline">
                        <div class="separator"></div>

                        <span class="span desk-top-display">Events</span>
                        <span class="span mobile-display" data-nav-toggler>Events</span>
                    </a>
                </li>

                <?php if (!isset($user)): ?>
                <li class="navbar-item">
                    <a href="webqwick-login" class="navbar-link hover-underline">
                        <div class="separator"></div>
                        <span class="span desk-top-display">Login</span>
                        <span class="span mobile-display" data-nav-toggler>Events</span>
                    </a>
                </li>
                <?php elseif (isset($user)): ?>
                <li class="navbar-item" style="display:flex; gap:1rem">
                    <a href="logout" class="navbar-link hover-underline">
                        <div class="separator"></div>
                        <span class="span desk-top-display">Logout</span>
                        <span class="span mobile-display" data-nav-toggler>Events</span>
                    </a>
                    <div class="dropdown">
                        <button class="dropbtn">></button>
                        <div class="dropdown-content">
                            <a href="edit_header_info">Edit Header</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                </li>
                <?php endif; ?>
            </ul>

            <div class="text-center">
                <p class="headline-1 navbar-title">Visit Us</p>

                <address class="body-4">
                    <?= $street_address; ?>
                </address>

                <p class="body-4 navbar-text"><?= $business_hours_mon; ?></p>
                <p class="body-4 navbar-text"><?= $business_hours_tue; ?></p>
                <p class="body-4 navbar-text"><?= $business_hours_wed; ?></p>
                <p class="body-4 navbar-text"><?= $business_hours_thur; ?></p>
                <p class="body-4 navbar-text"><?= $business_hours_fri; ?></p>
                <p class="body-4 navbar-text"><?= $business_hours_sat; ?></p>
                <p class="body-4 navbar-text"><?= $business_hours_sun; ?></p>

                <a href="mailto:<?= $email; ?>" class="body-4 sidebar-link"><?= $email; ?></a>

                <div class="separator"></div>

                <p class="contact-label">Booking Request</p>

                <a href="tel:+3125555555" class="body-1 contact-number hover-underline">
                    <?= $phone; ?>
                </a>
            </div>

        </nav>

        <a href="<?= $hero_top_btn_link_1; ?>" class="btn btn-secondary hide-text" target="_blank">
            <span class="text text-1"><?= $hero_top_btn_text_1; ?></span>

            <span class="text text-2" aria-hidden="true"><?= $hero_top_btn_text_1; ?></span>
        </a>

        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
        </button>

        <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
</header>

<main>
    <article>

        <!-- 
        - #HERO
      -->

        <section class="hero text-center" aria-label="home" id="home">

            <ul class="hero-slider" data-hero-slider>

                <li class="slider-item active" data-hero-slider-item>

                    <div class="slider-bg">
                        <img src="./assets/images/<?= $hero_img_1; ?>
              " width="1880" height="950" alt="<?= $hero_img_desc_1; ?>" class="img-cover">
                        <div
                            style="background-color: rgba(0,0,0,.7);position:absolute; height: 100%; width: 100%;top:0; bottom:0; left:0; right:0; z-index: 3;">
                        </div>
                    </div>

                    <!--<p style="margin-top:20px" class="label-2 section-subtitle slider-reveal">Tradational & Local</p>-->

                    <p style="margin-top:20px" class="label-2 section-subtitle slider-reveal hide-text">
                        <?= $hero_top_text_1; ?></p>

                    <a href='<?= $hero_top_btn_link_1; ?>' style="margin-top:50px"
                        class="label-2 section-subtitle slider-reveal mobile-online-ordering"
                        target="_blank"><?= $hero_top_btn_text_1; ?>meals</a>

                    <div
                        style="display: flex; flex-direction: column;align-items: center;justify-content: center; width: 100vw; margin-bottom:20px">
                        <h1 id="hero-first-slider-h1"
                            style="width: 65%; display: flex;flex-direction: column;align-items: center;"
                            class="display-1 hero-title slider-reveal">
                            <?= $hero_large_text_1; ?>
                            <!-- <img class="header-award" src="./assets/images/diners-choice-award-2024.png" width="115"  alt="your restaurant logo"> -->
                        </h1>
                    </div>
                    <p class="body-2 hero-text slider-reveal">
                        <?= $hero_bottom_text_1; ?>
                    </p>

                    <a href="<?= $hero_bottom_btn_link_1; ?>" class="btn btn-primary slider-reveal" target="_blank">
                        <span class="text text-1"><?= $hero_bottom_btn_text_1; ?></span>

                        <span class="text text-2" aria-hidden="true"><?= $hero_bottom_btn_text_1; ?></span>
                    </a>

                </li>

                <li class="slider-item" data-hero-slider-item>

                    <div class="slider-bg">
                        <img src="./assets/images/<?= $hero_img_2; ?>" width="1880" height="950"
                            alt="<?= $hero_img_desc_2; ?>" class="img-cover">
                        <div
                            style="background-color: rgba(0,0,0,.7);position:absolute; height: 100%; width: 100%;top:0; bottom:0; left:0; right:0; z-index: 3;">
                        </div>
                    </div>

                    <p style="margin-top:20px" class="label-2 section-subtitle slider-reveal hide-text">
                        <?= $hero_top_text_2; ?></p>

                    <a href="<?= $hero_top_btn_link_2; ?>" style="margin-top:20px"
                        class="label-2 section-subtitle slider-reveal mobile-online-ordering"
                        target="_blank"><?= $hero_top_btn_text_2; ?></a>

                    <!--<p class="label-2 section-subtitle slider-reveal">delightful experience</p>-->

                    <h1 class="display-1 hero-title slider-reveal">
                        <?= $hero_large_text_2; ?>
                    </h1>
                    <!-- <h1 class="display-1 hero-title slider-reveal">
              Flavors Inspired by <br>
              the Seasons
            </h1> -->

                    <p class="body-2 hero-text slider-reveal">
                        <?= $hero_bottom_text_2; ?>
                    </p>
                    <!-- <p class="body-2 hero-text slider-reveal">
              Come with family & feel the joy of mouthwatering food
            </p> -->

                    <a href="<?= $hero_bottom_btn_link_2; ?>" class="btn btn-primary slider-reveal" target="_blank">
                        <span class="text text-1"><?= $hero_bottom_btn_text_2; ?></span>

                        <span class="text text-2" aria-hidden="true"><?= $hero_bottom_btn_text_2; ?></span>
                    </a>

                </li>

                <li class="slider-item" data-hero-slider-item>

                    <div class="slider-bg">
                        <img src="./assets/images/<?= $hero_img_3; ?>" width="1880" height="950"
                            alt="<?= $hero_img_desc_3; ?>" class="img-cover">
                        <div
                            style="background-color: rgba(0,0,0,.7);position:absolute; height: 100%; width: 100%;top:0; bottom:0; left:0; right:0; z-index: 3;">
                        </div>
                    </div>

                    <!--<p class="label-2 section-subtitle slider-reveal">amazing & delicious</p>-->

                    <p style="margin-top:20px" class="label-2 section-subtitle slider-reveal hide-text">
                        <?= $hero_top_text_3; ?></p>
                    <!-- <p style="margin-top:20px" class="label-2 section-subtitle slider-reveal hide-text">amazing & delicious</p> -->

                    <a href="<?= $hero_top_btn_link_3; ?>" style="margin-top:20px"
                        class="label-2 section-subtitle slider-reveal mobile-online-ordering"
                        target="_blank"><?= $hero_top_btn_text_3; ?></a>

                    <h1 class="display-1 hero-title slider-reveal">
                        <?= $hero_large_text_3; ?>
                    </h1>
                    <!-- <h1 class="display-1 hero-title slider-reveal">
              Where Quisine & <br> Ambiance Harmonize
            </h1> -->

                    <p class="body-2 hero-text slider-reveal">
                        <?= $hero_bottom_text_3; ?>
                    </p>
                    <!-- <p class="body-2 hero-text slider-reveal">
              Come with family & feel the joy of mouthwatering food
            </p> -->

                    <a href="<?= $hero_bottom_btn_link_3; ?>" class="btn btn-primary slider-reveal" target="_blank">
                        <span class="text text-1"><?= $hero_bottom_btn_text_3; ?></span>

                        <span class="text text-2" aria-hidden="true"><?= $hero_bottom_btn_text_3; ?></span>
                    </a>

                </li>

                <!-- <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/restaurant-hero.jpg" width="1880" height="950" alt="your restaurant logo" class="img-cover">
              <div style="background-color: rgba(0,0,0,.7);position:absolute; height: 100%; width: 100%;top:0; bottom:0; left:0; right:0; z-index: 3;"></div>
            </div>

            <p class="label-2 section-subtitle slider-reveal">amazing & delicious</p>

            <h1 class="display-1 hero-title slider-reveal">
              Where every flavor <br>
              tells a story
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Come with family & feel the joy of mouthwatering food
            </p>

            <a href="https://www.opentable.com/restref/client/?restref=1096087&lang=en-US&ot_source=Restaurant%20website&corrid=db856316-3e84-4806-b14b-7e55c1f1e81a" class="btn btn-primary slider-reveal" target="_blank">
              <span class="text text-1">Reservations</span>

              <span class="text text-2" aria-hidden="true">Reservations</span>
            </a>

          </li> -->

            </ul>

            <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
                <ion-icon name="chevron-back"></ion-icon>
            </button>

            <button class="slider-btn next" aria-label="slide to next" data-next-btn>
                <ion-icon name="chevron-forward"></ion-icon>
            </button>

            <!-- <a style="display: flex; align-items: center; justify-content: center; flex-direction: column;" href="https://www.jimotowinnetka.com/" class="hero-btn has-after" target="_blank">
          <img src="./assets/images/hero-icon.png" width="48" height="48" alt="booking icon">
          
          <span style="color: #333; text-transform: lowercase;" class="label-2 text-center span"></span>
        </a> -->

        </section>





        <!-- 
        - #SERVICE
      -->

        <section id="promotions" class="section service bg-black-10 text-center" aria-label="service">
            <div class="container">

                <p class="section-subtitle label-2">Flavors For Royalty</p>

                <h2 class="headline-1 section-title">Promotions</h2>

                <p class="section-text">
                    Join us for these special promotions.
                </p>

                <ul class="grid-list">

                    <li>
                        <div class="service-card">

                            <a href="#" class="has-before hover:shine">
                                <figure class="card-banner img-holder">
                                    <!-- <figure class="card-banner img-holder" style="--width: 285; --height: 336;"> -->
                                    <img style="width: 100%;" src="./assets/images/food-6.jpg" loading="lazy"
                                        alt="Breakfast">
                                    <!-- <img src="./assets/images/promotions-1.png" width="285" height="336" loading="lazy" alt="Breakfast"
                     class="img-cover" > -->
                                </figure>
                            </a>

                            <div class="card-content">

                                <h3 class="title-4 card-title">
                                    50% Off Burger Deals!
                                </h3>
                                <p>minus voluptatibus nesciunt soluta reprehenderit doloremque eos nemo.</p>

                                <!-- <a href="#menu" class="btn-text hover-underline label-2">View Menu</a> -->

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="service-card">

                            <a href="#" class="has-before hover:shine">
                                <figure class="card-banner img-holder">
                                    <!-- <figure class="card-banner img-holder" style="--width: 285; --height: 336;"> -->
                                    <img style="width: 100%;" src="./assets/images/food-7.jpg" loading="lazy"
                                        alt="Appetizers">
                                    <!-- <img src="./assets/images/promotions-2.png" width="285" height="336" loading="lazy" alt="Appetizers"> -->
                                    <!-- <img src="./assets/images/food-1.png" width="285" height="336" loading="lazy" alt="Appetizers"
                      class="img-cover"> -->
                                </figure>
                            </a>

                            <div class="card-content">

                                <h3 class="title-4 card-title">
                                    50% Off select wines!
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni minus voluptatibus
                                    nesciunt soluta reprehenderit doloremque eos nemo </p>
                                <!-- <a href="#menu" class="btn-text hover-underline label-2">View Menu</a> -->

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="service-card">

                            <a href="#" class="has-before hover:shine">
                                <figure class="card-banner img-holder">
                                    <!-- <figure class="card-banner img-holder" style="--width: 285; --height: 336;"> -->
                                    <img src="./assets/images/promotions-3.jpg" loading="lazy" alt="Drinks"
                                        class="img-cover">
                                    <!-- <img src="./assets/images/food-3.png" width="285" height="336" loading="lazy" alt="Drinks"
                      class="img-cover"> -->
                                </figure>
                            </a>

                            <div class="card-content">

                                <h3 class="title-4 card-title">
                                    Happy Hour!
                                </h3>
                                <h4>Mon-Thurs 2pm-4pm</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni minus voluptatibus
                                    nesciunt soluta reprehenderit doloremque eos nemo</p>

                                <!-- <a href="#menu" class="btn-text hover-underline label-2">View Menu</a> -->

                            </div>

                        </div>
                    </li>

                </ul>

                <img src="./assets/images/shape-1.png" width="246" height="412" loading="lazy" alt="shape"
                    class="shape shape-1 move-anim">
                <img src="./assets/images/shape-2.png" width="343" height="345" loading="lazy" alt="shape"
                    class="shape shape-2 move-anim">

            </div>
        </section>





        <!-- 
        - #ABOUT
      -->

        <section class="section about text-center" aria-labelledby="about-label" id="about">
            <div class="container">

                <div class="about-content">

                    <p class="label-2 section-subtitle" id="about-label">Our Story</p>

                    <h2 class="headline-1 section-title">Every Flavor Tells a Story</h2>

                    <p class="section-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni minus voluptatibus nesciunt
                        soluta reprehenderit doloremque eos nemo veniam vitae vero illo hic possimus error delectus
                        temporibus quas iusto, in ullam! Distinctio, iure vero dolore adipisci corrupti, beatae ad
                        perspiciatis consequuntur facere voluptatem quo maxime velit debitis, deleniti assumenda commodi
                        id?.
                    </p>

                    <div class="contact-label">We look forward to seeing you!</div>

                    <a href="tel:+804001234567" class="body-1 contact-number hover-underline">(312) 555-5555</a>

                    <!-- <a href="https://www.opentable.com/restref/client/?restref=1096087&lang=en-US&ot_source=Restaurant%20website&corrid=db856316-3e84-4806-b14b-7e55c1f1e81a" class="btn btn-primary slider-reveal" target="_blank">

            <span class="text text-1">Reservations</span>

              <span class="text text-2" aria-hidden="true">Reservations</span>
            </a> -->
                    <!-- <a href="https://www.opentable.com/restref/client/?restref=1096087&lang=en-US&ot_source=Restaurant%20website&corrid=db856316-3e84-4806-b14b-7e55c1f1e81a" class="btn btn-primary"></a>
              <span class="text text-1">Reservations</span>

              <span class="text text-2" aria-hidden="true">Reservations</span>
            </a> -->

                    <a href="#reservations" class="btn btn-primary" target="_blank">
                        <span class="text text-1">Reservations</span>

                        <span class="text text-2" aria-hidden="true">Reservations</span>
                    </a>

                </div>

                <figure class="about-banner">

                    <img src="./assets/images/food-12.jpg" width="570" height="570" loading="lazy" alt="about banner"
                        class="w-100" data-parallax-item data-parallax-speed="1">
                    <!-- <img src="./assets/images/about-banner.jpg" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1"> -->

                    <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.55">
                        <img src="./assets/images/chef.jpg" width="285" height="285" loading="lazy" alt=""
                            class="w-100">
                        <!-- <img src="./assets/images/mark.png" width="285" height="285" loading="lazy" alt=""
                class="w-100"> -->
                        <!-- <img src="./assets/images/about-abs-image.jpg" width="285" height="285" loading="lazy" alt=""
                class="w-100"> -->
                    </div>

                    <div style="height: 150px; width: 150px;display: flex; flex-direction: column; align-items: center; justify-content: center;"
                        class="abs-img abs-img-2 has-before">
                        <!-- <img src="./assets/images/badge-2.png" width="133" height="134" loading="lazy" alt=""> -->
                        <p>Since</p>
                        <h1 style="font-size: 3rem;">1999</h1>
                    </div>

                </figure>

                <img src="./assets/images/shape-3.png" width="197" height="194" loading="lazy" alt="" class="shape">

            </div>
        </section>





        <!-- 
        - #SPECIAL DISH
      -->

        <section class="special-dish text-center" aria-labelledby="dish-label">

            <div class="special-dish-banner">
                <img src="./assets/images/food-11.jpg" width="940" height="900" loading="lazy" alt="special dish"
                    class="img-cover">
            </div>

            <div class="special-dish-content bg-black-10">
                <div class="container">

                    <!-- <img src="./assets/images/food-3.png" width="28" height="41" loading="lazy" alt="badge" class="abs-img"> -->
                    <img src="./assets/images/badge-1.png" width="28" height="41" loading="lazy" alt="badge"
                        class="abs-img">

                    <p class="section-subtitle label-2">Farm Fresh</p>

                    <h2 class="headline-1 section-title">Only the freshest ingredients</h2>

                    <p class="section-text">
                        Lorem Ipsum is simply dummy text of the printingand typesetting industry lorem Ipsum has been
                        the
                        industrys standard dummy text ever since the when an unknown printer took a galley of type.
                    </p>

                    <div class="wrapper">
                        <del class="del body-3">$40.00</del>

                        <span class="span body-1">$20.00</span>
                    </div>

                    <a href="#" class="btn btn-primary">
                        <span class="text text-1">View All Menu</span>

                        <span class="text text-2" aria-hidden="true">View All Menu</span>
                    </a>

                </div>
            </div>

            <img src="./assets/images/shape-4.png" width="179" height="359" loading="lazy" alt="" class="shape shape-1">

            <img src="./assets/images/shape-9.png" width="351" height="462" loading="lazy" alt="" class="shape shape-2">

        </section>





        <!-- 
        - #MENU
      -->

        <section class="section menu" aria-label="menu-label" id="menu">
            <div class="container">

                <p class="section-subtitle text-center label-2">Special Selection</p>

                <h2 class="headline-1 section-title text-center">Delicious Menu</h2>

                <ul class="grid-list">

                    <li>
                        <div class="menu-card hover:card">

                            <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                                <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy"
                                    alt="Greek Salad" class="img-cover">
                            </figure>

                            <div>

                                <div class="title-wrapper">
                                    <h3 class="title-3">
                                        <a href="#" class="card-title">Greek Salad</a>
                                    </h3>

                                    <span class="badge label-1">Seasonal</span>

                                    <span class="span title-2">$25.50</span>
                                </div>

                                <p class="card-text label-1">
                                    Tomatoes, green bell pepper, sliced cucumber onion, olives, and feta cheese.
                                </p>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="menu-card hover:card">

                            <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                                <img src="./assets/images/menu-2.png" width="100" height="100" loading="lazy"
                                    alt="Lasagne" class="img-cover">
                            </figure>

                            <div>

                                <div class="title-wrapper">
                                    <h3 class="title-3">
                                        <a href="#" class="card-title">Lasagne</a>
                                    </h3>

                                    <span class="span title-2">$40.00</span>
                                </div>

                                <p class="card-text label-1">
                                    Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices
                                </p>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="menu-card hover:card">

                            <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                                <img src="./assets/images/menu-3.png" width="100" height="100" loading="lazy"
                                    alt="Butternut Pumpkin" class="img-cover">
                            </figure>

                            <div>

                                <div class="title-wrapper">
                                    <h3 class="title-3">
                                        <a href="#" class="card-title">Butternut Pumpkin</a>
                                    </h3>

                                    <span class="span title-2">$10.00</span>
                                </div>

                                <p class="card-text label-1">
                                    Typesetting industry lorem Lorem Ipsum is simply dummy text of the priand.
                                </p>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="menu-card hover:card">

                            <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                                <img src="./assets/images/menu-4.png" width="100" height="100" loading="lazy"
                                    alt="Tokusen Wagyu" class="img-cover">
                            </figure>

                            <div>

                                <div class="title-wrapper">
                                    <h3 class="title-3">
                                        <a href="#" class="card-title">Tokusen Wagyu</a>
                                    </h3>

                                    <span class="badge label-1">New</span>

                                    <span class="span title-2">$39.00</span>
                                </div>

                                <p class="card-text label-1">
                                    Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices.
                                </p>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="menu-card hover:card">

                            <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                                <img src="./assets/images/menu-5.png" width="100" height="100" loading="lazy"
                                    alt="Olivas Rellenas" class="img-cover">
                            </figure>

                            <div>

                                <div class="title-wrapper">
                                    <h3 class="title-3">
                                        <a href="#" class="card-title">Olivas Rellenas</a>
                                    </h3>

                                    <span class="span title-2">$25.00</span>
                                </div>

                                <p class="card-text label-1">
                                    Avocados with crab meat, red onion, crab salad stuffed red bell pepper and green
                                    bell pepper.
                                </p>

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="menu-card hover:card">

                            <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                                <img src="./assets/images/menu-6.png" width="100" height="100" loading="lazy"
                                    alt="Opu Fish" class="img-cover">
                            </figure>

                            <div>

                                <div class="title-wrapper">
                                    <h3 class="title-3">
                                        <a href="#" class="card-title">Opu Fish</a>
                                    </h3>

                                    <span class="span title-2">$49.00</span>
                                </div>

                                <p class="card-text label-1">
                                    Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices
                                </p>

                            </div>

                        </div>
                    </li>

                </ul>

                <p class="menu-text text-center">
                    During winter daily from <span class="span">7:00 pm</span> to <span class="span">9:00 pm</span>
                </p>

                <a href="#" class="btn btn-primary">
                    <span class="text text-1">View All Menu</span>

                    <span class="text text-2" aria-hidden="true">View All Menu</span>
                </a>

                <img src="./assets/images/shape-5.png" width="921" height="1036" loading="lazy" alt="shape"
                    class="shape shape-2 move-anim">
                <img src="./assets/images/shape-6.png" width="343" height="345" loading="lazy" alt="shape"
                    class="shape shape-3 move-anim">

            </div>
        </section>





        <!-- 
        - #TESTIMONIALS
      -->

        <section id="reviews" class="section testi text-center has-bg-image"
            style="background-image: url('./assets/images/testimonial-bg.jpg')" aria-label="testimonials">
            <div class="container">

                <div class="quote">”</div>

                <p class="headline-2 testi-text">
                    I wanted to thank you for inviting me down for that amazing dinner the other night. The food was
                    extraordinary.
                </p>

                <div class="wrapper">
                    <div class="separator"></div>
                    <div class="separator"></div>
                    <div class="separator"></div>
                </div>

                <div class="profile">
                    <img src="./assets/images/testi-avatar.jpg" width="100" height="100" loading="lazy"
                        alt="Sam Jhonson" class="img">

                    <p class="label-2 profile-name">Sam Jhonson</p>
                </div>

            </div>
        </section>





        <!-- 
        - #RESERVATION
      -->


        <section id="reservations" class="reservation">
            <br>
            <br>
            <div class="container">

                <div class="form reservation-form bg-black-10">

                    <form action="#" class="form-left">

                        <h2 class="headline-1 text-center">Online Reservation</h2>

                        <p class="form-text text-center">
                            Reservation request <a href="tel:+3125555555" class="link">(312) 555-5555</a>
                            or fill out the reservation form
                        </p>

                        <div class="input-wrapper">
                            <input type="text" name="name" placeholder="Your Name" autocomplete="off"
                                class="input-field">

                            <input type="tel" name="phone" placeholder="Phone Number" autocomplete="off"
                                class="input-field">
                        </div>

                        <div class="input-wrapper">

                            <div class="icon-wrapper">
                                <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                                <select name="person" class="input-field">
                                    <option value="1-person">1 Person</option>
                                    <option value="2-person">2 Persons</option>
                                    <option value="3-person">3 Persons</option>
                                    <option value="4-person">4 Persons</option>
                                    <option value="5-person">5 Persons</option>
                                    <option value="6-person">6 Persons</option>
                                    <option value="7-person">7 Persons</option>
                                    <option value="7-person">8 Persons</option>
                                    <option value="7-person">9 Persons</option>
                                    <option value="7-person">10+ Persons</option>
                                </select>

                                <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                            </div>

                            <div class="icon-wrapper">
                                <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>

                                <input type="date" name="reservation-date" class="input-field">

                                <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                            </div>

                            <div class="icon-wrapper">
                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                <select name="person" class="input-field">
                                    <option value="08:00am">08 : 00 am</option>
                                    <option value="09:00am">09 : 00 am</option>
                                    <option value="010:00am">10 : 00 am</option>
                                    <option value="011:00am">11 : 00 am</option>
                                    <option value="012:00am">12 : 00 am</option>
                                    <option value="01:00pm">01 : 00 pm</option>
                                    <option value="02:00pm">02 : 00 pm</option>
                                    <option value="03:00pm">03 : 00 pm</option>
                                    <option value="04:00pm">04 : 00 pm</option>
                                    <option value="05:00pm">05 : 00 pm</option>
                                    <option value="06:00pm">06 : 00 pm</option>
                                    <option value="07:00pm">07 : 00 pm</option>
                                    <option value="08:00pm">08 : 00 pm</option>
                                    <option value="09:00pm">09 : 00 pm</option>
                                    <option value="10:00pm">10 : 00 pm</option>
                                </select>

                                <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                            </div>

                        </div>

                        <textarea name="message" placeholder="Message" autocomplete="off"
                            class="input-field"></textarea>

                        <button type="submit" class="btn btn-secondary">
                            <span class="text text-1">Book A Table</span>

                            <span class="text text-2" aria-hidden="true">Book A Table</span>
                        </button>

                    </form>

                    <div class="form-right text-center"
                        style="background-image: url('./assets/images/form-pattern.png')">

                        <h2 class="headline-1 text-center">Contact Us</h2>

                        <p class="contact-label">Phone</p>

                        <a href="tel:+3125555555" class="body-1 contact-number hover-underline">(312) 555-5555</a>

                        <div class="separator"></div>

                        <p class="contact-label">Location</p>

                        <address class="body-4">
                            1234 Broadway Avenue Chicago, IL 60640
                        </address>

                        <p class="contact-label">Lunch Time</p>

                        <p class="body-4">
                            Monday to Sunday <br>
                            8:00 am - 2:30pm
                        </p>

                        <p class="contact-label">Dinner Time</p>

                        <p class="body-4">
                            Monday to Sunday <br>
                            5:00 pm - 9:00pm
                        </p>

                    </div>

                </div>

            </div>
        </section>





        <!-- 
        - #FEATURES
      -->

        <section class="section features text-center" aria-label="features">
            <div class="container">

                <p class="section-subtitle label-2">Why Choose Us</p>

                <h2 class="headline-1 section-title">Our Strength</h2>

                <ul class="grid-list">

                    <li class="feature-item">
                        <div class="feature-card">

                            <div class="card-icon">
                                <img src="./assets/images/features-icon-1.png" width="100" height="80" loading="lazy"
                                    alt="icon">
                            </div>

                            <h3 class="title-2 card-title">Amazing Food</h3>

                            <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

                        </div>
                    </li>

                    <li class="feature-item">
                        <div class="feature-card">

                            <div class="card-icon">
                                <img src="./assets/images/features-icon-2.png" width="100" height="80" loading="lazy"
                                    alt="icon">
                            </div>

                            <h3 class="title-2 card-title">Fresh Environment</h3>

                            <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

                        </div>
                    </li>

                    <li class="feature-item">
                        <div class="feature-card">

                            <div class="card-icon">
                                <img src="./assets/images/features-icon-3.png" width="100" height="80" loading="lazy"
                                    alt="icon">
                            </div>

                            <h3 class="title-2 card-title">Skilled Chefs</h3>

                            <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

                        </div>
                    </li>

                    <li class="feature-item">
                        <div class="feature-card">

                            <div class="card-icon">
                                <img src="./assets/images/features-icon-4.png" width="100" height="80" loading="lazy"
                                    alt="icon">
                            </div>

                            <h3 class="title-2 card-title">Event & Party</h3>

                            <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

                        </div>
                    </li>

                </ul>

                <img src="./assets/images/shape-7.png" width="208" height="178" loading="lazy" alt="shape"
                    class="shape shape-1">

                <img src="./assets/images/shape-8.png" width="120" height="115" loading="lazy" alt="shape"
                    class="shape shape-2">

            </div>
        </section>





        <!-- 
        - #EVENT
      -->

        <section id="events" class="section event bg-black-10" aria-label="event">
            <div class="container">

                <p class="section-subtitle label-2 text-center">Recent Updates</p>

                <h2 class="section-title headline-1 text-center">Upcoming Events</h2>

                <ul class="grid-list">

                    <li>
                        <div class="event-card has-before hover:shine">

                            <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                <img src="./assets/images/event-1.jpg" width="350" height="450" loading="lazy"
                                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                                <time class="publish-date label-2" datetime="09/15/2024">11/09/2024</time>
                            </div>

                            <div class="card-content">
                                <p class="card-subtitle label-2 text-center">Food, Flavour</p>

                                <h3 class="card-title title-2 text-center">
                                    Flavour so good you’ll try to eat with your eyes.
                                </h3>
                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="event-card has-before hover:shine">

                            <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                <img src="./assets/images/event-2.jpg" width="350" height="450" loading="lazy"
                                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                                <time class="publish-date label-2" datetime="11/12/2024">09/25/2024</time>
                            </div>

                            <div class="card-content">
                                <p class="card-subtitle label-2 text-center">Healthy Food</p>

                                <h3 class="card-title title-2 text-center">
                                    Flavour so good you’ll try to eat with your eyes.
                                </h3>
                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="event-card has-before hover:shine">

                            <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                <img src="./assets/images/event-3.jpg" width="350" height="450" loading="lazy"
                                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                                <time class="publish-date label-2" datetime="12/01/2024">12/01/2024</time>
                            </div>

                            <div class="card-content">
                                <p class="card-subtitle label-2 text-center">Recipie</p>

                                <h3 class="card-title title-2 text-center">
                                    Flavour so good you’ll try to eat with your eyes.
                                </h3>
                            </div>

                        </div>
                    </li>

                </ul>

                <a href="#" class="btn btn-primary">
                    <span class="text text-1">View Our Blog</span>

                    <span class="text text-2" aria-hidden="true">View Our Blog</span>
                </a>

            </div>
        </section>

    </article>
</main>

<?php
    require_once 'footer.php';
?>