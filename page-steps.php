<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .startingWeek {
            appearance: none;
            border-radius: 57px;
            background-color: #f1f2f2;
            border: none;
            padding: 20px;
            width: 57%;
            margin: 1em 0;
            color: #b2b1b1;
            text-align: center;
            cursor: pointer !important;
        }
    </style>
</head>

<body>
    <div class="promo_code">
        <p class="promo_code__title">
            PROMOCODE: <span class="promo_code__culture">YOGURTISOURCULTURE</span>> 10% OFF ON ALL ITEMS
        </p>
    </div>

    <div class="steps">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img class="section_1__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" />
        </a>
        <ul class="steps__list">
            <li class="steps__step-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step-1_grayed.png" alt="">
                <p class="step-1">LET’S START</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dot.png" alt="">
            </li>
            <li class="steps__step-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step-2_colored.png" alt="">
                <p class="step-2">SELECT PLAN</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dot.png" alt="">
            </li>
            <li class="steps__step-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step-3.png" alt="">
                <p class="step-3">SELECT ITEMS</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dot.png" alt="">
            </li>
            <li class="steps__step-4">
                <img src="assets/img/step-4.png" alt="">
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
            <div class="plan_1" onClick="setPlan('nano')">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box.png" alt="">
                <div class="plan_1__tl_50">
                    <p class="plan_1__title">
                        NANO
                    </p>
                    <p class="plan_1__desc">One week Trial Plan</p>
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

    <!-- CHOOSE CONSUMPTION -->
    <div class="choosing_consumption" style="display: block !important;">
        <div class="step_2">
            <h2 class="step_2__title">
                HERE’S HOW WE BEGIN.
            </h2>
            <p class="step_2__sel">Start your plan by choosing exactly what you want</p>
        </div>

        <div class="week">
            <div class="week__plan">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box.png" alt="">
                <div class="tl_50">
                    <p class="title">
                        NANO
                    </p>
                    <p class="desc">One week Trial Plan</p>
                    <p class="desc2">*Limited Time Only</p>
                </div>
            </div>
            <div class="week__calendar">
                <p class="start_date">STARTING DATE</p>
                <input class="startingWeek" type="date" name="startingDate" id="startingDate" class="option" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/calendar.png" onchange="setConsumptionDate(this)">

                <div class="input mt-2">
                    <p class="section_2__col__col-2__label" for="consumption">TIME OF CONSUMPTION</p>
                    <select class="options" id="consumption" name="consumption" onChange="setConsumption(this)">
                        <option value="breakfast">BREAKFAST</option>
                        <option value="lunch">LUNCH</option>
                        <option value="dinner">DINNER</option>
                    </select>
                </div>
                <div class="calendar"></div>
            </div>
        </div>
        <div class="promo">
            <p class="promo__off">* 20% off your first 3 boxes *</p>
        </div>

        <div class="choose_week">
            <a href="#">
                <button class="choose_week__btn" onClick="goToChoosingFood()">
                    CHOOSE MY FOOD
                </button>
            </a>
        </div>
    </div>

    <!-- CHOOSE FOOD -->
    <div class="choosing_food" style="display: block;">
        <h2 class="choosing_food__title">CHOOSE YOUR FOOD</h2>

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

        <div class="sched">
            <div class="sched__filter">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/filter.svg" alt="">
                <p class="filter_text">Filter</p>
                <input type="text" style="width: 20%;">
            </div>

            <div class="sched__plan-sched">
                <div class="plan_chosen">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box.png" alt="">
                    <div class="tl_50">
                        <p class="title">
                            NANO
                        </p>
                        <p class="desc">One week Trial Plan</p>
                        <p class="desc2">*Limited Time Only</p>
                    </div>
                </div>

                <div class="plan_week">
                    <h2 class="title">Week One</h2>

                    <div class="dates">
                        <div class="date-2">
                            <p class="day">Mon</p>
                            <select class="input" name="nano_monday" id="nano_monday" onChange="setFood(this)">
                                <option selected disabled>Please select a Yogurt</option>
                                <option value="Banana Yogurt">Banana Yogurt</option>
                                <option value="Strawberry Yogurt">Strawberry Yogurt</option>
                                <option value="Mango Yogurt">Mango Yogurt</option>
                            </select>
                        </div>

                        <div class="date-2">
                            <p class="day">Tues</p>
                            <select class="input" name="nano_tuesday" id="nano_tuesday" onChange="setFood(this)">
                                <option selected disabled>Please select a Yogurt</option>
                                <option value="Banana Yogurt">Banana Yogurt</option>
                                <option value="Strawberry Yogurt">Strawberry Yogurt</option>
                                <option value="Mango Yogurt">Mango Yogurt</option>
                            </select>
                        </div>

                        <div class="date-2">
                            <p class="day">Wed</p>
                            <select class="input" name="nano_wednesday" id="nano_wednesday" onChange="setFood(this)">
                                <option selected disabled>Please select a Yogurt</option>
                                <option value="Banana Yogurt">Banana Yogurt</option>
                                <option value="Strawberry Yogurt">Strawberry Yogurt</option>
                                <option value="Mango Yogurt">Mango Yogurt</option>
                            </select>
                        </div>

                        <div class="date-2">
                            <p class="day">Thurs</p>
                            <select class="input" name="nano_thursday" id="nano_thursday" onChange="setFood(this)">
                                <option selected disabled>Please select a Yogurt</option>
                                <option value="Banana Yogurt">Banana Yogurt</option>
                                <option value="Strawberry Yogurt">Strawberry Yogurt</option>
                                <option value="Mango Yogurt">Mango Yogurt</option>
                            </select>
                        </div>

                        <div class="date-2">
                            <p class="day">Fri</p>
                            <select class="input" name="nano_friday" id="nano_friday" onChange="setFood(this)">
                                <option selected disabled>Please select a Yogurt</option>
                                <option value="Banana Yogurt">Banana Yogurt</option>
                                <option value="Strawberry Yogurt">Strawberry Yogurt</option>
                                <option value="Mango Yogurt">Mango Yogurt</option>
                            </select>
                        </div>

                        <div class="date-2">
                            <p class="day">Sat</p>
                            <select class="input" name="nano_saturday" id="nano_saturday" onChange="setFood(this)">
                                <option selected disabled>Please select a Yogurt</option>
                                <option value="Banana Yogurt">Banana Yogurt</option>
                                <option value="Strawberry Yogurt">Strawberry Yogurt</option>
                                <option value="Mango Yogurt">Mango Yogurt</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="checkout">
                <a href="#">
                    <button class="choose_week__btn" onClick="goToCheckFood()">
                        CHECKOUT
                    </button>
                </a>
                <p class="back">BACK</p>
            </div>
        </div>
    </div>

    <!-- CHECK FOOD -->
    <div class="check_food" style="display: none;">
        <h2 class="check_food__title">
            CHECK YOUR FOOD
        </h2>

        <div class="plan_sched">
            <div class="plan_sched__plan-chosen">
                <div class="plan">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box.png" alt="">
                    <div class="tl_50">
                        <p class="week__title">
                            NANO
                        </p>
                        <p class="week__desc">One Week Trial Plan</p>
                        <p class="week__desc2">*Limited Time Only</p>
                    </div>
                </div>
            </div>
            <div class="plan_sched__week-chosen" id="nano_section">
                <form id="nano_form" method="post">
                    <h2 class="plan_sched__week-chosen__title">Week One</h2>

                    <div class="plan_sched__week-chosen__date-pick">
                        <p class="date-pick_day">Mon</p>
                        <p class="pick-food nano_check_food"></p>
                    </div>
                    <div class="plan_sched__week-chosen__date-pick">
                        <p class="date-pick_day">Tues</p>
                        <p class="pick-food nano_check_food"></p>
                    </div>
                    <div class="plan_sched__week-chosen__date-pick">
                        <p class="date-pick_day">Wed</p>
                        <p class="pick-food nano_check_food"></p>
                    </div>
                    <div class="plan_sched__week-chosen__date-pick">
                        <p class="date-pick_day">Thurs</p>
                        <p class="pick-food nano_check_food"></p>
                    </div>
                    <div class="plan_sched__week-chosen__date-pick">
                        <p class="date-pick_day">Fri</p>
                        <p class="pick-food nano_check_food"></p>
                    </div>
                    <div class="plan_sched__week-chosen__date-pick">
                        <p class="date-pick_day">Sat</p>
                        <p class="pick-food nano_check_food"></p>
                    </div>
                </form>
            </div>
        </div>
        <div class="checkout">
            <a href="#">
                <button class="choose_week__btn" onClick="goToCheckChoices()">
                    CHECKOUT
                </button>
            </a>
            <p class="back">BACK</p>
        </div>
    </div>

    <!-- CHECK CHOICES -->
    <div class="check_choices" style="display:none;">
        <h2 class="check_choices__title">CHECK YOUR CHOICES</h2>

        <div class="choice">
            <div class="check_choices__week-chosen">
                <h2 class="check_choices__week-chosen__title">Week One</h2>

                <div class="check_choices__week-chosen__date-pick">
                    <p class="date-pick_day">Mon</p>
                    <p class="pick-food nano_check_food_choice"></p>
                </div>
                <div class="check_choices__week-chosen__date-pick">
                    <p class="date-pick_day">Tues</p>
                    <p class="pick-food nano_check_food_choice"></p>
                </div>
                <div class="check_choices__week-chosen__date-pick">
                    <p class="date-pick_day">Wed</p>
                    <p class="pick-food nano_check_food_choice"></p>
                </div>
                <div class="check_choices__week-chosen__date-pick">
                    <p class="date-pick_day">Thurs</p>
                    <p class="pick-food nano_check_food_choice"></p>
                </div>
                <div class="check_choices__week-chosen__date-pick">
                    <p class="date-pick_day">Fri</p>
                    <p class="pick-food nano_check_food_choice"></p>
                </div>
                <div class="check_choices__week-chosen__date-pick">
                    <p class="date-pick_day">Sat</p>
                    <p class="pick-food nano_check_food_choice"></p>
                </div>
            </div>

            <div class="check_choices__plan-chosen">
                <div class="plan">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box_3.png" alt="">
                    <div class="tl_50">
                        <p class="tl_50__title">
                            NANO
                        </p>
                        <p class="tl_50__desc">Three Week Meal Plan</p>
                        <p class="tl_50__desc2">Php 5,400 </p>
                    </div>
                </div>

                <div class="compute">
                    <p class="compute__desc">Subtotal:</p>
                    <p class="compute__price">₱ 5,500.00</p>
                </div>

                <div class="compute">
                    <p class="compute__desc">Delivery Fee:</p>
                    <p class="compute__price">Free</p>
                </div>

                <div class="compute" style="padding-bottom: 1em;">
                    <p class="compute__desc">Promo Code:</p>
                    <input type="text" style="width: 27%; padding: 10px; margin: 0;">
                </div>
                <hr>

                <div class="compute">
                    <p class="compute__desc" style="font-size: 1.313rem; font-weight: 600;">Total</p>
                    <p class="compute__price" style="font-size: 1.25rem; font-weight: 600;">₱ 5,500.00</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="container_width_50"></div>
            <div class="start_plan">
                <button class="start_plan__btn" onClick="goToCheckout()">START MY PLAN</button><br>
            </div>
        </div>
        <div class="back-container">
            <div class="container_width_50"></div>
            <p class="back">BACK</p>
        </div>

    </div>

    <footer class="footer">
        <p class="footer__txt">Terms and Privacy | Disclaimer </p>
        <p class="footer__txt2">© YOGURT CULTURE 2021</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        $('.slider').slick({
            dots: true,
            infinite: false,
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
    <script>
        const choosing_plan_section = document.querySelector('.choosing_plan');
        const choosing_consumption_section = document.querySelector('.choosing_consumption');
        const choosing_food_section = document.querySelector('.choosing_food');
        const check_food_section = document.querySelector('.check_food');
        const check_choices_section = document.querySelector('.check_choices');
        choosing_plan_section.style.display = 'block';
        choosing_consumption_section.style.display = 'none';
        choosing_food_section.style.display = 'none';
        check_food_section.style.display = 'none';
        check_choices_section.style.display = 'none';

        function setPlan(plan) {
            const nanoPLan = document.querySelector('.plan_1');
            const microPLan = document.querySelector('.plan_2');
            const megaPLan = document.querySelector('.plan_3');
            switch (plan) {
                case 'nano':
                    nanoPLan.style.border = '1px solid black';
                    // microPLan.style.border = 'none';
                    // megaPLan.style.border = 'none';
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
            choosing_plan_section.style.display = 'none';
            choosing_consumption_section.style.display = 'block';
            choosing_food_section.style.display = 'none';
            check_food_section.style.display = 'none';
            check_choices_section.style.display = 'none';
        }

        function goToChoosingFood() {
            choosing_plan_section.style.display = 'none';
            choosing_consumption_section.style.display = 'none';
            choosing_food_section.style.display = 'block';
            check_food_section.style.display = 'none';
            check_choices_section.style.display = 'none';
        }

        function goToCheckFood() {
            setFoodCheck();
            choosing_plan_section.style.display = 'none';
            choosing_consumption_section.style.display = 'none';
            choosing_food_section.style.display = 'none';
            check_food_section.style.display = 'block';
            check_choices_section.style.display = 'none';
        }

        function goToCheckChoices() {
            setFoodCheck();
            choosing_plan_section.style.display = 'none';
            choosing_consumption_section.style.display = 'none';
            choosing_food_section.style.display = 'none';
            check_food_section.style.display = 'none';
            check_choices_section.style.display = 'block';
        }

        function setFoodCheck() {
            const nanoAll = document.querySelectorAll('.nano_check_food');
            const nanoAllChoices = document.querySelectorAll('.nano_check_food_choice');
            const nanoFoodSelected = [
                localStorage.getItem('nano_monday'),
                localStorage.getItem('nano_tuesday'),
                localStorage.getItem('nano_wednesday'),
                localStorage.getItem('nano_thursday'),
                localStorage.getItem('nano_friday'),
                localStorage.getItem('nano_saturday'),
            ];
            console.log(nanoAll)
            nanoAll.forEach((item, index) => {
                item.innerHTML = nanoFoodSelected[index];
            })
            nanoAllChoices.forEach((item, index) => {
                item.innerHTML = nanoFoodSelected[index];
            })
        }

        function goToCheckout() {
            window.location = 'http://wordpress.test/checkout'
        }

        function setConsumption(sel) {
            const consumption = sel.options[sel.selectedIndex].value;
            console.log(consumption);
            localStorage.setItem('time', consumption);
        }

        function setConsumptionDate(item) {
            const startingDate = item.value;
            localStorage.setItem('date', startingDate);
        }

        function setFood(foodSel) {
            console.log(foodSel.id);
            setFoodLocalStorage(foodSel.id, foodSel.options[foodSel.selectedIndex].value);

        }

        function setFoodLocalStorage(day, item) {
            localStorage.setItem(day, item);
        }
    </script>
</body>

</html>