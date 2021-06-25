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


</body>

</html>