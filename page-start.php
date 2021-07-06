<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yogurt Culture</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="promo_code">
        <p class="promo_code__title">
            PROMOCODE: <span class="promo_code__culture">YOGURTISOURCULTURE</span>>
            10% OFF ON ALL ITEMS
        </p>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-transparent z-index-10">
        <!-- Diri lang usba para sa katong page-step 2,3,4 etc. -->
        <div class="pl-px-36">
            <img src="<?php echo get_template_directory_uri();   ?>/assets/img/step-1.png" class="image" alt="" /><span class="pl-px-16 nav-title">LET’S START</span>
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
                    <a class="nav-link" href="#">Yogurt Culture</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Subscribe</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="section_1">
        <a href="">
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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