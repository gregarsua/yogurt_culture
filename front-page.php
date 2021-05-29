<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" />
</head>

<body>
    <div class="promo_code">
        <p class="promo_code__title">
            PROMOCODE: <span class="promo_code__culture">YOGURTISOURCULTURE</span>>
            10% OFF ON ALL ITEMS
        </p>
    </div>

    <div class="section_1">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img class="section_1__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" />
        </a>

        <ul class="section_1__list">
            <li class="section_1__step-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step-1.png" alt="" />
                <p class="step-1">LET’S START</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dot.png" alt="" />
            </li>
            <li class="section_1__step-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step-2.png" alt="" />
                <p class="step-2">SELECT PLAN</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dot.png" alt="" />
            </li>
            <li class="section_1__step-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step-3.png" alt="" />
                <p class="step-3">SELECT ITEMS</p>
            </li>
            <li>
                <img src="assets/img/dot.png" alt="" />
            </li>
            <li class="section_1__step-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step-4.png" alt="" />
                <p class="step-4">CHECKOUT</p>
            </li>
        </ul>
    </div>

    <div class="section_2">
        <h2 class="section_2__title">WELP! WE NEED TO START SOMEWHERE.</h2>

        <div class="section_2__col">
            <div class="section_2__col__col-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kalorie.png" alt="" />
            </div>

            <div class="section_2__col__col-2">
                <form action="#">
                    <div class="input">
                        <p class="section_2__col__col-2__label" for="fullname">
                            FULL NAME
                        </p>
                        <input type="text" />
                    </div>

                    <div class="input mt-2">
                        <p class="section_2__col__col-2__label" for="fullname">ADDRESS</p>
                        <input type="text" />
                    </div>

                    <div class="input mt-2">
                        <p class="section_2__col__col-2__label" for="fullname">
                            LANDMARK
                        </p>
                        <input type="text" />
                    </div>

                    <div class="input mt-2">
                        <p class="section_2__col__col-2__label" for="fullname">
                            EMAIL ADDRESS
                        </p>
                        <input type="text" />
                    </div>

                    <div class="input mt-2">
                        <p class="section_2__col__col-2__label" for="fullname">
                            MOBILE NUMBER
                        </p>
                        <input type="text" />
                    </div>
                </form>
            </div>
        </div>
        <div class="button">
            <button class="button__btn">VIEW PLANS + PRICING</button>
            <p class="button__agreement">
                By clicking above, you agree to our Terms of Use and consent our
                <br />
                Privacy Policy. Already have an account? Login
            </p>
        </div>
    </div>

    <footer class="footer">
        <p class="footer__txt">Terms and Privacy | Disclaimer </p>
        <p class="footer__txt2">© YOGURT CULTURE 2021</p>
    </footer>
</body>

</html>