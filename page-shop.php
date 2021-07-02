<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yogurt Culture</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <div class="top_header">
            <p>PROMOCODE: <span class="top_header__promo">YOGURTISOURCULTURE</span> 10% OFF ON ALL ITEMS</p>
        </div>

        <div class="top_main">
            <div class="top_main__logo">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
            </div>
            <div class="width_2"></div>
            <div class="top_main__links">
                <ul class="top_main__link">
                    <li>PRODUCTS</li>
                    <li>ABOUT US</li>
                    <li style="color:#0C55A0">SHOP</li>
                    <li>SUBSCRIPTION</li>
                    <li>CONTACT</li>
                </ul>
            </div>
            <div class="top_main__cart">
                <img class="cart_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/cart.png" alt="">
            </div>
        </div>

        <!-- HEADER SP VIEW -->
        <div class="top_main-sp">

        </div>
    </header>
    <div class="carousel-pc">
        <div class="choosing_food">
            <div class="choosing_food__foods slider">
                <div class="choosing_food__foods__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/1st_img.png" alt="">
                    <p class="choosing_food__foods__title">Strawberry Yogurt</p>
                    <p class="choosing_food__foods__desc">Lorem ipsum dolor sit amet, <br>consectetuer adipiscing elit, sed diam.</p>
                    <button class="choosing_food__foods__cart">ADD TO CART</button>
                </div>
                <div class="choosing_food__foods__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2nd_img.png" alt="">
                    <p class="choosing_food__foods__title">Mango Yogurt </p>
                    <p class="choosing_food__foods__desc">Lorem ipsum dolor sit amet, <br>consectetuer adipiscing elit, sed diam.</p>
                    <button class="choosing_food__foods__cart">ADD TO CART</button>
                </div>
                <div class="choosing_food__foods__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/3rd_img.png" alt="">
                    <p class="choosing_food__foods__title">Mixed Berry Yogurt</p>
                    <p class="choosing_food__foods__desc">Lorem ipsum dolor sit amet, <br>consectetuer adipiscing elit, sed diam.</p>
                    <button class="choosing_food__foods__cart">ADD TO CART</button>
                </div>
                <div class="choosing_food__foods__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/4th_img.png" alt="">
                    <p class="choosing_food__foods__title">Plain Yogurt</p>
                    <p class="choosing_food__foods__desc">VLorem ipsum dolor sit amet, <br>consectetuer adipiscing elit, sed diam.</p>
                    <button class="choosing_food__foods__cart">ADD TO CART</button>
                </div>
                <div class="choosing_food__foods__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/1st_img.png" alt="">
                    <p class="choosing_food__foods__title">Strawberry Yogurt</p>
                    <p class="choosing_food__foods__desc">Lorem ipsum dolor sit amet, <br>consectetuer adipiscing elit, sed diam.</p>
                    <button class="choosing_food__foods__cart">ADD TO CART</button>
                </div>
                <div class="choosing_food__foods__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2nd_img.png" alt="">
                    <p class="choosing_food__foods__title">Mango Yogurt </p>
                    <p class="choosing_food__foods__desc">Lorem ipsum dolor sit amet, <br>consectetuer adipiscing elit, sed diam.</p>
                    <button class="choosing_food__foods__cart">ADD TO CART</button>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- CAROUSEL SP -->
    <div class="carousel-sp">

        <!-- ITEM 1 -->
        <div class="a-box">
            <div class="img-container">
                <div class="img-inner">
                    <div class="inner-skew">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/1st_img.png">
                    </div>
                </div>
            </div>
            <div class="text-container">
                <h3>Mango Yogurt</h3>
                <div class="text-container__desc">
                    Vietnamese Yogurt mixed<br>
                    with ripe mango jam
                </div>
                <button class="text-container__btn">
                    ADD TO CART
                </button>
            </div>
        </div>

        <!-- ITEM 2 -->
        <div class="a-box">
            <div class="img-container">
                <div class="img-inner">
                    <div class="inner-skew">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2nd_img.png">
                    </div>
                </div>
            </div>
            <div class="text-container">
                <h3>Mango Yogurt</h3>
                <div class="text-container__desc">
                    Vietnamese Yogurt mixed<br>
                    with ripe mango jam
                </div>
                <button class="text-container__btn">
                    ADD TO CART
                </button>
            </div>
        </div>

        <!-- ITEM 3 -->
        <div class="a-box">
            <div class="img-container">
                <div class="img-inner">
                    <div class="inner-skew">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/3rd_img.png">
                    </div>
                </div>
            </div>
            <div class="text-container">
                <h3>Mango Yogurt</h3>
                <div class="text-container__desc">
                    Vietnamese Yogurt mixed<br>
                    with ripe mango jam
                </div>
                <button class="text-container__btn">
                    ADD TO CART
                </button>
            </div>
        </div>

        <!-- ITEM 4 -->

        <div class="a-box">
            <div class="img-container">
                <div class="img-inner">
                    <div class="inner-skew">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/4th_img.png">
                    </div>
                </div>
            </div>
            <div class="text-container">
                <h3>Mango Yogurt</h3>
                <div class="text-container__desc">
                    Vietnamese Yogurt mixed<br>
                    with ripe mango jam
                </div>
                <button class="text-container__btn">
                    ADD TO CART
                </button>
            </div>
        </div>
    </div>
    <!-- END CAROUSEL SP -->


    <div class="yogurt">
        <p class="yogurt__title">Yogurt Everyday!</p>
        <p class="yogurt__desc">Subscribe for a weekly yogurt supply</p>
        <p class="yogurt__choose">Choose your choice of yogurt flavors for a week and<br>
            we will deliver it to you weekly! </p>
        <button class="yogurt__btn">
            Subscribe Now
        </button>
    </div>

    <div class="order">
        <p class="order__title">Order our Yogurts</p>
        <div class="order__logos">
            <div class="foodpanda">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foodpanda.png" alt="">
            </div>
            <div class="width_2"></div>
            <div class="grab">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/grab.png" alt="">
            </div>
        </div>
        <button class="order__btn">
            See Nearby Distributors
        </button>
    </div>

    <footer class="footer">
        <div class="footer__items">
            <div class="item-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo.png" alt="">
            </div>
            <div class="width_2"></div>
            <div class="item-2">
                <p class="item-2__title">Subscribe to our newsletter</p>
                <input class="item-2__email_input" type="email" placeholder="Email" style="width: 50%;"><br>
                <button class="item-2__btn">Subscribe</button>
            </div>

            <div class="item-3">
                <ul>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <li>Home</li>
                    </a>
                    <a href="<?php echo esc_url(home_url('Products')); ?>">
                        <li>Products</li>
                    </a>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <li>Be a Distributor</li>
                    </a>
                    <a href="<?php echo esc_url(home_url('Shop')); ?>">
                        <li>Shop</li>
                    </a>
                    <a href="<?php echo esc_url(home_url('About Us')); ?>">
                        <li>About Us</li>
                    </a>

                </ul>
            </div>

            <div class="item-4">
                <p class="item-4__title">CONTACT US</p>
                <p class="item-4__number">+63 032 262 5680</p>
                <p class="item-4__email">info.yogurtculture.store</p>

                <div class="item-4__social">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt="">
                    <img class="inst_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="">
                </div>
            </div>
        </div>
    </footer>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type="text/javascript">
        $('.slider').slick({
            autoplay: true,
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            arrows: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>

    <script>
        $('.carousel-sp').slick({
            centerMode: true,
            arrows: false,
            infinite: true,
        });
    </script>


</body>

</html>