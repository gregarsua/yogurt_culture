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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @media only screen and (max-width: 768px) {
            .choose_plan {
                display: flex;
                flex-direction: column;
                flex-wrap: nowrap;
                justify-content: flex-start;
                align-items: stretch;
                align-content: flex-start;
            }
        }
    </style>
</head>

<body>
    <div class="promo_code">
        <p class="promo_code__title">
            PROMOCODE: <span class="promo_code__culture">YOGURTISOURCULTURE</span>> 10% OFF ON ALL ITEMS
        </p>
    </div>

    <div class="start-pc">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent z-index-10">
            <!-- Diri lang usba para sa katong page-step 2,3,4 etc. -->
            <div class="pl-px-36">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step-2_colored.png" class="image" alt="" /><span class="pl-px-16 nav-title">SELECT PLAN</span>
            </div>
            <!--  -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse yc-nav" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto pl-px-36 pt-px-35 pb-px-36">
                    <li class="nav-item text-white active">
                        <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>">Yogurt Culture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('PRODUCTS')) ?>">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('ABOUT US')) ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('SHOP')) ?>">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('SUBSCRIBE')) ?>">Subscribe</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('CONTACT US')) ?>">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="section_1">
        <a href="<?php echo esc_url(home_url('Start')); ?>">
            <img class="section_1__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" />
        </a>

        <ul class="section_1__list">
            <li class="section_1__step-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step-1_grayed.png" alt="" />
                <p class="step-1" style="color: #d2d3d5;">LET’S START</p>
            </li>
            <li class="step-dot">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dot.png" alt="" />
            </li>
            <li class="section_1__step-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step-2_colored.png" alt="" />
                <p class="step-2" style="color:#0c55a0 ;">SELECT PLAN</p>
            </li>
            <li class="step-dot">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dot.png" alt="" />
            </li>
            <li class="section_1__step-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step-3.png" alt="" />
                <p class="step-3">SELECT ITEMS</p>
            </li>
            <li class="step-dot">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dot.png" alt="" />
            </li>
            <li class="section_1__step-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step-4.png" alt="" />
                <p class="step-4">CHECKOUT</p>
            </li>
        </ul>
    </div>

    <!-- CHOOSING PLAN -->
    <div class="choosing_plan">
        <div class="step_2">
            <h2 class="step_2__title">
                HERE’S HOW WE BEGIN.
            </h2>
            <p class="step_2__sel">Start your plan by choosing exactly what you want</p>
        </div>

        <div class="choose_plan">
            <div class="plan_1" id="plan_1" onClick="setPlan('nano')">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box.png" alt="">
                <div class="plan_1__tl_50">
                    <p class="plan_1__title">
                        NANO
                    </p>
                    <p class="plan_1__desc">One week Trial Plan</p>
                </div>
            </div>
            <div class="plan_1" id="plan_2" onClick="setPlan('micro')">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box.png" alt="">
                <div class="plan_1__tl_50">
                    <p class="plan_1__title">
                        MICRO
                    </p>
                    <p class="plan_1__desc">Two week Plan</p>
                </div>
            </div>
            <div class="plan_1" id="plan_3" onClick="setPlan('mega')">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box.png" alt="">
                <div class="plan_1__tl_50">
                    <p class="plan_1__title">
                        MEGA
                    </p>
                    <p class="plan_1__desc">One month Plan</p>
                </div>
            </div>
        </div>

        <div class="promo">
            <p class="promo__off">* 20% off your first 3 boxes *</p>
        </div>

        <div class="choose_week">
            <a href="#">
                <button class="choose_week__btn" onClick='goToChoosingWeek()'>
                    CHOOSE A WEEK
                </button>
            </a>
        </div>
    </div>


    <footer class="footer">
        <p class="footer__txt">Terms and Privacy | Disclaimer </p>
        <p class="footer__txt2">© YOGURT CULTURE 2021</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function setPlan(plan) {
            const nanoPLan = document.querySelector('#plan_1');
            const microPLan = document.querySelector('#plan_2');
            const megaPLan = document.querySelector('#plan_3');
            switch (plan) {
                case 'nano':
                    nanoPLan.style.border = '1px solid black';
                    microPLan.style.border = 'none';
                    megaPLan.style.border = 'none';
                    localStorage.setItem('plan', plan);
                    break;
                case 'micro':
                    nanoPLan.style.border = 'none';
                    microPLan.style.border = '1px solid black';
                    megaPLan.style.border = 'none';
                    break;
                case 'mega':
                    nanoPLan.style.border = 'none';
                    microPLan.style.border = 'none';
                    megaPLan.style.border = '1px solid black';
                    break;
                default:
                    break;
            }
            localStorage.setItem('plan', plan);
            choosing_consumption_section.style.display = 'none';
            choosing_food_section.style.display = 'none';
            check_food_section.style.display = 'none';
            check_choices_section.style.display = 'none';
            console.log(plan)
        }

        function goToChoosingWeek() {
            if (!localStorage.getItem('plan')) {
                alert('Please select a plan')
            } else {
                window.location = 'http://wordpress.test/step2';
            }

        }
    </script>
</body>

</html>