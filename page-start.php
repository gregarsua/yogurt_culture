<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<<<<<<< HEAD:page-start.php
    <title>Document</title>
=======
    <title>Yogurt Culture</title>
>>>>>>> c56f933f9178eccd56fb6a238f41f1367a66074f:front-page.php
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
<<<<<<< HEAD:page-start.php
        <a href="<?php echo esc_url(home_url('/')); ?>">
=======
        <a href="">
>>>>>>> c56f933f9178eccd56fb6a238f41f1367a66074f:front-page.php
            <img class="section_1__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" />
        </a>

        <ul class="section_1__list">
            <li class="section_1__step-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step-1.png" alt="" />
                <p class="step-1">LET’S START</p>
            </li>
            <li class="step-dot">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dot.png" alt="" />
            </li>
            <li class="section_1__step-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step-2.png" alt="" />
                <p class="step-2">SELECT PLAN</p>
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

    <div class="section_2">
        <h2 class="section_2__title">WELP! WE NEED TO START SOMEWHERE.</h2>

        <div class="section_2__col">
            <div class="section_2__col__col-1">
                <img class="kalorie" src="<?php echo get_template_directory_uri(); ?>/assets/img/kalorie.png" alt="" />
            </div>

            <div class="section_2__col__col-2">
                <form action="#">
                    <div class="input">
                        <p class="section_2__col__col-2__label" for="fullname">FULL NAME</p>
                        <input required type="text" name="full_name" id="full_name">
                    </div>

                    <div class="input mt-2">
                        <p class="section_2__col__col-2__label" for="address">ADDRESS</p>
                        <input required type="text" name="address" id="addr">
                    </div>

                    <div class="input mt-2">
                        <p class="section_2__col__col-2__label" for="land">LANDMARK</p>
                        <select required name="landmark" id="land">
                            <option value="Anytime fitness 1">Anytime fitness 1</option>
                            <option value="Anytime fitness 2">Anytime fitness 2</option>
                            <option value="Anytime fitness 3">Anytime fitness 3</option>
                            <option value="Anytime fitness 4">Anytime fitness 4</option>
                        </select>
                    </div>

                    <div class="input mt-2">
                        <p class="section_2__col__col-2__label" for="to_name" id="email">EMAIL ADDRESS</p>
                        <input required type="text" name="to_name" id="to_name">
                    </div>

                    <div class="input mt-2">
                        <p class="section_2__col__col-2__label" for="mobile_number">MOBILE NUMBER</p>
                        <input required type="text" name="mobile_number" id="mobile_number">
                    </div>
                </form>
            </div>
        </div>
        <div class="button">
            <button class="button__btn" onClick="startPlan()">VIEW PLANS + PRICING</button>
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

    <script>
        function startPlan() {
            const fullname = document.getElementById('full_name').value;
            const address = document.getElementById('addr').value;
            const landmark = document.getElementById('land').value;
            const email = document.getElementById('to_name').value;
            const mobile_number = document.getElementById('mobile_number').value;

            localStorage.setItem('fullname', fullname);
            localStorage.setItem('address', address);
            localStorage.setItem('landmark', landmark);
            localStorage.setItem('email', email);
            localStorage.setItem('mobile', mobile_number);

            window.location = 'http://wordpress.test/step1';
            console.log([
                fullname,
                address,
                landmark,
                email,
                mobile_number,
            ]);
        }
    </script>
</body>

</html>