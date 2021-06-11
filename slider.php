<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Document</title>
=======
    <title>Yogurt Culture</title>
>>>>>>> c56f933f9178eccd56fb6a238f41f1367a66074f
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="choosing_food__foods slider">
        <div class="choosing_food__foods__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Chicken Wrap.png" alt="">
            <p class="choosing_food__foods__title">Chicken Wrap</p>
            <p class="choosing_food__foods__desc">Vietnamese Yogurt mixed <br>
                with ripe mango jam</p>
        </div>
        <div class="choosing_food__foods__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Cobb Salad.png" alt="">
            <p class="choosing_food__foods__title">Cobb Salad</p>
            <p class="choosing_food__foods__desc">Vietnamese Yogurt mixed <br>
                with ripe mango jam</p>
        </div>
        <div class="choosing_food__foods__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Mashup Salad.png" alt="">
            <p class="choosing_food__foods__title">Mashup Salad</p>
            <p class="choosing_food__foods__desc">Vietnamese Yogurt mixed <br>
                with ripe mango jam</p>
        </div>
        <div class="choosing_food__foods__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Panzanella.png" alt="">
            <p class="choosing_food__foods__title">Panzanella</p>
            <p class="choosing_food__foods__desc">Vietnamese Yogurt mixed <br>
                with ripe mango jam</p>
        </div>
        <div class="choosing_food__foods__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pasta Salad.png" alt="">
            <p class="choosing_food__foods__title">Pasta Salad</p>
            <p class="choosing_food__foods__desc">Vietnamese Yogurt mixed <br>
                with ripe mango jam</p>
        </div>
        <div class="choosing_food__foods__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Russian Salad.png" alt="">
            <p class="choosing_food__foods__title">Russian Salad</p>
            <p class="choosing_food__foods__desc">Vietnamese Yogurt mixed <br>
                with ripe mango jam</p>
        </div>
        <div class="choosing_food__foods__item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/salad.png" alt="">
            <p class="choosing_food__foods__title">Chicken Salad</p>
            <p class="choosing_food__foods__desc">Vietnamese Yogurt mixed <br>
                with ripe mango jam</p>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        $('.slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
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