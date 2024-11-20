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


        <nav class="navbar menu-bar" data-navbar>

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
                </li>

                <li style="position:relative; width:60px; margin-top:10px">
                    <a href="#">Edit <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="#">Menu <i class="fas fa-caret-right"></i></a></li>
                            <li><a href="edit_header_info" target="_blank">Header</a></li>
                            <li><a href="edit_hero_info" target="_blank">Hero</a></li>


                            <div class="dropdown-menu-1">
                                <ul>
                                    <li><a href="add_appetizer_menu_item" target="_blank">Add Appetizers</a></li>
                                    <li><a href="edit_appetizer_menu_item_info" target="_blank">Edit/Delete
                                            Appetizers</a>
                                    </li>
                                    <li><a href="add_menu_item" target="_blank">Add Entre</a></li>
                                    <li><a href="edit_menu_item_info" target="_blank">Edit/Delete Entres</a></li>
                                    <li><a href="add_dessert_menu_item" target="_blank">Add Desserts</a></li>
                                    <li><a href="edit_dessert_menu_item_info" target="_blank">Edit/Delete Desserts</a>
                                    </li>
                                    <li><a href="add_drinks_menu_item" target="_blank">Add Drinks</a></li>
                                    <li><a href="edit_drinks_menu_item_info" target="_blank">Edit/Delete Drinks</a></li>
                                </ul>
                            </div>
                            <li><a href="edit_promo_info" target="_blank">Promotions</a></li>
                        </ul>
                    </div>
                </li>


                <!-- <li class="navbar-item" style="display:flex; gap:1rem">
                    <a href="logout" class="navbar-link hover-underline">
                        <div class="separator"></div>
                        <span class="span desk-top-display">Logout</span>
                        <span class="span mobile-display" data-nav-toggler>Events</span>
                    </a>
                    <div class="dropdown">
                        
                        <i class="dropbtn fa-solid fa-caret-down"
                            style="display:flex; gap:10px; background:#000;"><span> Edit Site</span></i>
                        <div class="dropdown-content">
                            <a href="edit_header_info" target="_blank">Header</a>
                            <a href="edit_hero_info" target="_blank">Hero</a>
                            <a href="edit_promo_info" target="_blank">Promotions</a>
                            <a href="edit_about_info" target="_blank">About</a>
                            <a href="edit_special_dish_info" target="_blank">Special Dish</a>
                            <a href="add_appetizer_menu_item" target="_blank">Menu <i class="fa fa-caret-down"></i></a>
                            <a href="add_appetizer_menu_item" target="_blank">Add Appetizers <i class="fa fa-caret-down"></i></a>
                            <a href="edit_appetizer_menu_item_info" target="_blank">Edit Appetizers</a>
                            <a href="add_menu_item" target="_blank">Add Entre</a>
                            <a href="edit_menu_item_info" target="_blank">Edit Entres</a>
                            <a href="add_dessert_menu_item" target="_blank">Add Desserts</a>
                            <a href="edit_dessert_menu_item_info" target="_blank">Edit Desserts</a>
                            <a href="add_drinks_menu_item" target="_blank">Add Drinks</a>
                            <a href="edit_drinks_menu_item_info" target="_blank">Edit Drinks</a>
                            
                            <a href="edit_reviews_info" target="_blank">Reviews</a>
                            <a href="edit_reservations_info" target="_blank">Reservations</a>
                            <a href="edit_our_strengths_info" target="_blank">Strengths</a>
                            <a href="edit_upcoming_events_info" target="_blank">Events</a>
                            <a href="edit_footer_info" target="_blank">Footer</a>
                        </div>
                    </div>
                </li> -->
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


        <!-- SHOPPING CART START-->


            <div class="cart-box">
                <div class="cart-icon">
                    <i class="fas fa-cart-arrow-down fa-2x"></i>
                </div>
                <div class="whole-cart-window hide">
                    <form action="checkout.php" method="post" enctype="multipart/form-data">
                    <h2 style="color:black">Your Order</h2>
                    <div class="cart-wrapper">
                    </div>
                    <div class="subtotal">Subtotal: 0.00</div>
                    <!-- <div class="checkout"></div> -->
                    <button class="checkout" type="submit" name="checkout-btn">Checkouts</button>
                    
                    <!-- <div class="view-cart">View Cart</div> -->
                    </form>
                </div>
            </div>

            




        <!-- <div class="cart-box">
            <div class="cart-icon">
                <i class="fas fa-cart-arrow-down fa-2x"></i>
            </div>
            <div class="whole-cart-window hide">
                <h2 style="color:black">Your Order</h2>
                <div class="cart-wrapper">

                </div>
                <div class="subtotal">Subtotal: 0.00</div>
                <div class="checkout">Checkout</div>
                <div class="view-cart">View Cart</div>
            </div>
        </div> -->


        <!-- SHOPPING CART END-->

        <!-- <a href="<?= $hero_top_btn_link_1; ?>" class="btn btn-secondary hide-text" target="_blank">
            <span class="text text-1"><?= $hero_top_btn_text_1; ?></span>

            <span class="text text-2" aria-hidden="true"><?= $hero_top_btn_text_1; ?></span>
        </a> -->

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


                    <h1 class="display-1 hero-title slider-reveal">
                        <?= $hero_large_text_2; ?>
                    </h1>


                    <p class="body-2 hero-text slider-reveal">
                        <?= $hero_bottom_text_2; ?>
                    </p>


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


                    <p style="margin-top:20px" class="label-2 section-subtitle slider-reveal hide-text">
                        <?= $hero_top_text_3; ?></p>


                    <a href="<?= $hero_top_btn_link_3; ?>" style="margin-top:20px"
                        class="label-2 section-subtitle slider-reveal mobile-online-ordering"
                        target="_blank"><?= $hero_top_btn_text_3; ?></a>

                    <h1 class="display-1 hero-title slider-reveal">
                        <?= $hero_large_text_3; ?>
                    </h1>

                    <p class="body-2 hero-text slider-reveal">
                        <?= $hero_bottom_text_3; ?>
                    </p>

                    <a href="<?= $hero_bottom_btn_link_3; ?>" class="btn btn-primary slider-reveal" target="_blank">
                        <span class="text text-1"><?= $hero_bottom_btn_text_3; ?></span>

                        <span class="text text-2" aria-hidden="true"><?= $hero_bottom_btn_text_3; ?></span>
                    </a>

                </li>



            </ul>

            <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
                <ion-icon name="chevron-back"></ion-icon>
            </button>

            <button class="slider-btn next" aria-label="slide to next" data-next-btn>
                <ion-icon name="chevron-forward"></ion-icon>
            </button>
        </section>





        <!-- 
        - #PROMOTIONS
      -->

        <section id="promotions" class="section service bg-black-10 text-center" aria-label="service">
            <div class="container">

                <p class="section-subtitle label-2"><?= $small_top_title; ?></p>

                <h2 class="headline-1 section-title"><?= $main_title; ?></h2>

                <p class="section-text">
                    <?= $sub_title; ?>
                </p>

                <ul class="grid-list">

                    <li>
                        <div class="service-card">

                            <a href="#" class="has-before hover:shine">
                                <figure class="card-banner img-holder">
                                    <!-- <figure class="card-banner img-holder" style="--width: 285; --height: 336;"> -->
                                    <img style="width: 100%;" src="./assets/images/<?= $promo_img_1; ?>" loading="lazy"
                                        alt="<?= $promo_img_1; ?>">
                                    <!-- <img src="./assets/images/promotions-1.png" width="285" height="336" loading="lazy" alt="Breakfast"
                     class="img-cover" > -->
                                </figure>
                            </a>

                            <div class="card-content">

                                <h3 class="title-4 card-title">
                                    <?= $promo_img_title_1; ?>
                                </h3>
                                <p><?= $promo_img_text_1; ?></p>

                                <!-- <a href="#menu" class="btn-text hover-underline label-2">View Menu</a> -->

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="service-card">

                            <a href="#" class="has-before hover:shine">
                                <figure class="card-banner img-holder">
                                    <!-- <figure class="card-banner img-holder" style="--width: 285; --height: 336;"> -->
                                    <img style="width: 100%;" src="./assets/images/<?= $promo_img_2; ?>" loading="lazy"
                                        alt="<?= $promo_img_desc_2; ?>">
                                    <!-- <img src="./assets/images/promotions-2.png" width="285" height="336" loading="lazy" alt="Appetizers"> -->
                                    <!-- <img src="./assets/images/food-1.png" width="285" height="336" loading="lazy" alt="Appetizers"
                      class="img-cover"> -->
                                </figure>
                            </a>

                            <div class="card-content">

                                <h3 class="title-4 card-title">
                                    <?= $promo_img_title_2; ?>
                                </h3>
                                <p><?= $promo_img_text_2; ?></p>
                                <!-- <a href="#menu" class="btn-text hover-underline label-2">View Menu</a> -->

                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="service-card">

                            <a href="#" class="has-before hover:shine">
                                <figure class="card-banner img-holder">
                                    <!-- <figure class="card-banner img-holder" style="--width: 285; --height: 336;"> -->
                                    <img src="./assets/images/<?= $promo_img_3; ?>" loading="lazy"
                                        alt="<?= $promo_img_desc_3; ?>" class="img-cover">
                                    <!-- <img src="./assets/images/food-3.png" width="285" height="336" loading="lazy" alt="Drinks"
                      class="img-cover"> -->
                                </figure>
                            </a>

                            <div class="card-content">

                                <h3 class="title-4 card-title">
                                    <?= $promo_img_title_3; ?>
                                </h3>
                                <h4>Mon-Thurs 2pm-4pm</h4>
                                <p><?= $promo_img_text_3; ?></p>

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

                    <p class="label-2 section-subtitle" id="about-label"><?= $about_small_title; ?></p>

                    <h2 class="headline-1 section-title"><?= $about_main_title; ?></h2>

                    <p class="section-text">
                        <?= $about_text; ?>
                    </p>

                    <p class="contact-label"><?= $about_sub_title; ?></p>

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

                    <img src="./assets/images/<?= $about_large_img; ?>" width="570" height="570" loading="lazy"
                        alt="<?= $about_large_img_desc; ?>" class="w-100" data-parallax-item data-parallax-speed="1">
                    <!-- <img src="./assets/images/about-banner.jpg" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1"> -->

                    <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.55">
                        <img src="./assets/images/<?= $about_small_img; ?>" width="285" height="285" loading="lazy"
                            alt="<?= $about_small_img_desc; ?>" class="w-100">
                        <!-- <img src="./assets/images/mark.png" width="285" height="285" loading="lazy" alt=""
                class="w-100"> -->
                        <!-- <img src="./assets/images/about-abs-image.jpg" width="285" height="285" loading="lazy" alt=""
                class="w-100"> -->
                    </div>

                    <div style="height: 150px; width: 150px;display: flex; flex-direction: column; align-items: center; justify-content: center;"
                        class="abs-img abs-img-2 has-before">
                        <!-- <img src="./assets/images/badge-2.png" width="133" height="134" loading="lazy" alt=""> -->
                        <p>Since</p>
                        <h1 style="font-size: 3rem;"><?= $about_since_year; ?></h1>
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
                <img src="./assets/images/<?= $special_dish_img; ?>" width="940" height="900" loading="lazy"
                    alt="special dish" class="img-cover">
            </div>

            <div class="special-dish-content bg-black-10">
                <div class="container">

                    <!-- <img src="./assets/images/food-3.png" width="28" height="41" loading="lazy" alt="badge" class="abs-img"> -->
                    <img src="./assets/images/badge-1.png" width="28" height="41" loading="lazy" alt="badge"
                        class="abs-img">

                    <p class="section-subtitle label-2"><?= $special_dish_small_title; ?></p>

                    <h2 class="headline-1 section-title"><?= $special_dish_main_title; ?></h2>

                    <p class="section-text">
                        <?= $special_dish_text; ?>
                    </p>

                    <div class="wrapper">
                        <del class="del body-3">$<?= $special_dish_old_price; ?></del>

                        <span class="span body-1">$<?= $special_dish_sale_price; ?></span>
                    </div>

                    <a href="#" class="btn btn-primary">
                        <span class="text text-1">View All Menu</span>

                        <span class="text text-2" aria-hidden="true">View All Menu</span>
                    </a>

                </div>
            </div>

            <img src="./assets/images/shape-4.png" width="179" height="359" loading="lazy" alt="" class="shape shape-1">

            <img src="./assets/images/<?= $special_dish_bkgd_img; ?>" width="351" height="462" loading="lazy"
                alt="<?= $special_dish_bkgd_img_dec; ?>" class="shape shape-2">

        </section>





        <!-- 
        - #MENU START
      -->


        <!-- APPETIZERS MENU -->

        <div style="display:flex; justify-content:center; margin-top: 5rem">
            <h2 style="font-size:50px">Appetizers</h2>
        </div>
        <section class="section menu" aria-label="menu-label" id="menu">
            <div class="container" style="height:300px; overflow-y:scroll; border:1px solid #fff; padding-top:20px">
                <?php
                    $menu_info_query = "SELECT * FROM menu_item WHERE appetizer_menu_item_num != 0 ";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>

                <ul class="grid-list">
                    <?php while($row = mysqli_fetch_assoc($menu_info_result)): ?>
                    <div class="card-wrapper">
                        <div class="menu-items" id="menus" data-id="<?= $row['id'] ?>" class="card-item">
                            <span><?= $row['appetizer_menu_item_num'] ?></span>
                            <img style="display:inline; width:100px; height:100px"
                                src="./assets/images/<?= $row['appetizer_menu_item_img'];?>" loading="lazy"
                                alt="Lasagne" class="img-cover">
                            <div class="details">
                                <a href="#" class="card-title"><?= $row['appetizer_menu_item_name'];?></a>
                                <p>

                                    <span class="badge label-1"><?= $row['appetizer_menu_item_text'];?></span>
                                    <span class="span title-2"> <?= $row['appetizer_menu_item_price'];?></span>

                                    <span class="add-to-cart-btn">Add To Cart</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
        </section>

        <!-- ENTRES MENU -->
        <div style="display:flex; justify-content:center; margin-top: 5rem">
            <h2 style="font-size:50px">Entres</h2>
        </div>
        <section class="section menu" aria-label="menu-label" id="menu">
            <div class="container" style="height:300px; overflow-y:scroll; border:1px solid #fff; padding-top:20px">
                <?php
                    $menu_info_query = "SELECT * FROM menu_item WHERE entre_menu_item_num != 0";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>

                <ul class="grid-list">
                    <?php while($row = mysqli_fetch_assoc($menu_info_result)): ?>
                    <div class="card-wrapper">
                        <div class="menu-items" id="menus" data-id="<?= $row['id'] ?>" class="card-item">
                            <span><?= $row['entre_menu_item_num'] ?></span>
                            <img style="display:inline; width:100px; height:100px"
                                src="./assets/images/<?= $row['entre_menu_item_img'];?>" loading="lazy" alt="Lasagne"
                                class="img-cover">
                            <div class="details">
                                <a href="#" class="card-title"><?= $row['entre_menu_item_name'];?></a>
                                <p>
                                    <span class="badge label-1"><?= $row['entre_menu_item_text'];?></span>
                                    <span class="span title-2"> <?= $row['entre_menu_item_price'];?></span>

                                    <span class="add-to-cart-btn">Add To Cart</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
        </section>


        <!-- DESSERTS MENU -->
        <div style="display:flex; justify-content:center; margin-top: 5rem">
            <h2 style="font-size:50px">Desserts</h2>
        </div>
        <section class="section menu" aria-label="menu-label" id="menu">
            <div class="container" style="height:300px; overflow-y:scroll; border:1px solid #fff; padding-top:20px">
                <?php
                    $menu_info_query = "SELECT * FROM menu_item WHERE dessert_menu_item_num != 0";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>

                <ul class="grid-list">
                    <?php while($row = mysqli_fetch_assoc($menu_info_result)): ?>
                    <div class="card-wrapper">
                        <div class="menu-items" id="menus" data-id="<?= $row['id'] ?>" class="card-item">
                            <span><?= $row['dessert_menu_item_num'] ?></span>
                            <img style="display:inline; width:100px; height:100px"
                                src="./assets/images/<?= $row['dessert_menu_item_img'];?>" loading="lazy" alt="Lasagne"
                                class="img-cover">
                            <div class="details">
                                <a href="#" class="card-title"><?= $row['dessert_menu_item_name'];?></a>
                                <p>

                                    <span class="badge label-1"><?= $row['dessert_menu_item_text'];?></span>
                                    <span class="span title-2"> <?= $row['dessert_menu_item_price'];?></span>

                                    <span class="add-to-cart-btn">Add To Cart</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
        </section>


        <!-- DRINKS MENU -->
        <div style="display:flex; justify-content:center; margin-top: 5rem">
            <h2 style="font-size:50px">Drinks</h2>
        </div>
        <section class="section menu" aria-label="menu-label" id="menu">
            <div class="container" style="height:300px; overflow-y:scroll; border:1px solid #fff; padding-top:20px">
                <?php
                    $menu_info_query = "SELECT * FROM menu_item WHERE drinks_menu_item_num != 0";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>

                <ul class="grid-list">
                    <?php while($row = mysqli_fetch_assoc($menu_info_result)): ?>
                    <div class="card-wrapper">
                        <div class="menu-items" id="menus" data-id="<?= $row['id'] ?>" class="card-item">
                            <span><?= $row['drinks_menu_item_num'] ?></span>
                            <img style="display:inline; width:100px; height:100px"
                                src="./assets/images/<?= $row['drinks_menu_item_img'];?>" loading="lazy" alt="Lasagne"
                                class="img-cover">
                            <div class="details">
                                <a href="#" class="card-title"><?= $row['drinks_menu_item_name'];?></a>
                                <p>

                                    <span class="badge label-1"><?= $row['drinks_menu_item_text'];?></span>
                                    <span class="span title-2"> <?= $row['drinks_menu_item_price'];?></span>

                                    <span class="add-to-cart-btn">Add To Cart</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
        </section>

        <!-- 
        - #MENU END
      -->

        <!-- 
        - #TESTIMONIALS
      -->

        <section id="reviews" class="section testi text-center has-bg-image"
            style="background-image: url('assets/images/<?= $reviews_bkgd_img; ?>')" aria-label="testimonials">
            <div class="container">

                <div class="quote">”</div>

                <p class="headline-2 testi-text">
                    <?= $review; ?>
                </p>
                <!-- <p class="headline-2 testi-text">
                    I wanted to thank you for inviting me down for that amazing dinner the other night. The food was
                    extraordinary.
                </p> -->

                <div class="wrapper">
                    <div class="separator"></div>
                    <div class="separator"></div>
                    <div class="separator"></div>
                </div>

                <div class="profile">
                    <img src="./assets/images/<?= $reviews_small_img; ?>" width="100" height="100" loading="lazy"
                        alt="<?= $reviews_small_img_desc; ?>" class="img">

                    <p class="label-2 profile-name"><?= $reviews_small_img_text; ?></p>
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

                        <h2 class="headline-1 text-center"><?= $reservation_title; ?></h2>

                        <p class="form-text text-center">
                            <?= $reservation_text; ?>
                        </p>
                        <!-- <p class="form-text text-center">
                            Reservation request <a href="tel:+<?= $phone; ?>" class="link"><?= $phone; ?></a>
                            or fill out the reservation form
                        </p> -->

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

                        <a href="tel:+3125555555" class="body-1 contact-number hover-underline"><?= $phone; ?></a>

                        <div class="separator"></div>

                        <p class="contact-label">Location</p>

                        <address class="body-4">
                            <?= $street_address; ?>
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

                <p class="section-subtitle label-2"><?= $our_strengths_small_top_title; ?></p>

                <h2 class="headline-1 section-title"><?= $our_strengths_main_title; ?></h2>

                <ul class="grid-list">

                    <li class="feature-item">
                        <div class="feature-card">

                            <div class="card-icon">
                                <img src="./assets/images/<?= $our_strengths_img_1; ?>" width="100" height="80"
                                    loading="lazy" alt="<?= $our_strengths_img_desc_1; ?>">
                            </div>

                            <h3 class="title-2 card-title"><?= $our_strengths_img_title_1; ?></h3>

                            <p class="label-1 card-text"><?= $our_strengths_img_text_1; ?></p>

                        </div>
                    </li>

                    <li class="feature-item">
                        <div class="feature-card">

                            <div class="card-icon">
                                <img src="./assets/images/<?= $our_strengths_img_2; ?>" width="100" height="80"
                                    loading="lazy" alt="<?= $our_strengths_img_desc_2; ?>">
                            </div>

                            <h3 class="title-2 card-title"><?= $our_strengths_img_title_2; ?></h3>

                            <p class="label-1 card-text"><?= $our_strengths_img_text_2; ?></p>

                        </div>
                    </li>

                    <li class="feature-item">
                        <div class="feature-card">

                            <div class="card-icon">
                                <img src="./assets/images/<?= $our_strengths_img_3; ?>" width="100" height="80"
                                    loading="lazy" alt="<?= $our_strengths_img_desc_3; ?>">
                            </div>

                            <h3 class="title-2 card-title"><?= $our_strengths_img_title_3; ?></h3>

                            <p class="label-1 card-text"><?= $our_strengths_img_text_3; ?></p>

                        </div>
                    </li>

                    <li class="feature-item">
                        <div class="feature-card">

                            <div class="card-icon">
                                <img src="./assets/images/<?= $our_strengths_img_4; ?>" width="100" height="80"
                                    loading="lazy" alt="<?= $our_strengths_img_desc_4; ?>">
                            </div>

                            <h3 class="title-2 card-title"><?= $our_strengths_img_title_4; ?></h3>

                            <p class="label-1 card-text"><?= $our_strengths_img_text_4; ?></p>

                        </div>
                    </li>

                </ul>

                <img src="./assets/images/<?= $our_strengths_right_img; ?>" width="208" height="178" loading="lazy"
                    alt="<?= $our_strengths_right_img_desc; ?>" class="shape shape-1">

                <img src="./assets/images/<?= $our_strengths_left_img; ?>" width="120" height="115" loading="lazy"
                    alt="<?= $our_strengths_left_img_desc; ?>" class="shape shape-2">

            </div>
        </section>





        <!-- 
        - #EVENT
      -->

        <section id="events" class="section event bg-black-10" aria-label="event">
            <div class="container">

                <p class="section-subtitle label-2 text-center"><?= $upcoming_events_small_top_title; ?></p>

                <h2 class="section-title headline-1 text-center"><?= $upcoming_events_main_title; ?></h2>

                <ul class="grid-list">

                    <li>
                        <div class="event-card has-before hover:shine">

                            <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                <img src="./assets/images/<?= $upcoming_events_img_1; ?>" width="350" height="450"
                                    loading="lazy" alt="<?= $upcoming_events_img_desc_1; ?>" class="img-cover">

                                <time class="publish-date label-2" datetime="09/15/2024">11/09/2024</time>
                            </div>

                            <div class="card-content">
                                <p class="card-subtitle label-2 text-center"><?= $upcoming_events_img_title_1; ?></p>

                                <h3 class="card-title title-2 text-center">
                                    <?= $upcoming_events_img_text_1; ?>.
                                </h3>
                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="event-card has-before hover:shine">

                            <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                <img src="./assets/images/<?= $upcoming_events_img_2; ?>" width="350" height="450"
                                    loading="lazy" alt="<?= $upcoming_events_img_desc_2; ?>" class="img-cover">

                                <time class="publish-date label-2" datetime="11/12/2024">09/25/2024</time>
                            </div>

                            <div class="card-content">
                                <p class="card-subtitle label-2 text-center"><?= $upcoming_events_img_title_2; ?></p>

                                <h3 class="card-title title-2 text-center">
                                    <?= $upcoming_events_img_text_2; ?>
                                </h3>
                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="event-card has-before hover:shine">

                            <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                <img src="./assets/images/<?= $upcoming_events_img_3; ?>" width="350" height="450"
                                    loading="lazy" alt="<?= $upcoming_events_img_desc_3; ?>" class="img-cover">

                                <time class="publish-date label-2" datetime="12/01/2024">12/01/2024</time>
                            </div>

                            <div class="card-content">
                                <p class="card-subtitle label-2 text-center"><?= $upcoming_events_img_title_3; ?></p>

                                <h3 class="card-title title-2 text-center">
                                    <?= $upcoming_events_img_text_3; ?>
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