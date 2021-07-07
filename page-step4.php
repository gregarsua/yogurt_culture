<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yogurt Culture</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .plan_sched__week-chosen {
      padding: 3em !important
    }

    .none {
      display: none;
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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/step-4_colored.png" class="image" alt="" /><span class="pl-px-16 nav-title">CHECKOUT SUMMARY</span>
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

  <!-- CHECK FOOD -->
  <div class="check_food">
    <h2 class="check_food__title">
      CHECK YOUR FOOD
    </h2>

    <div class="plan_sched">
      <div class="plan_sched__plan-chosen">
        <div class="plan">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box.png" alt="">
          <div class="tl_50">
            <p class="title plan_title">

            </p>
            <p class="desc"></p>
            <p class="desc-2"></p>
          </div>
        </div>
      </div>

      <section id='nano' class="plan_sched__week-chosen none">
        <div class="food_order week-one">
          <h2 class="plan_sched__week-chosen__title ">Week One</h2>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Mon</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Tues</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Wed</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Thurs</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Fri</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Sat</p>
            <p class="pick-food"></p>
          </div>
        </div>
      </section>
      <section id='micro' class="plan_sched__week-chosen choose_food_slider none">
        <div class="food_order week-one">
          <h2 class="plan_sched__week-chosen__title ">Week One</h2>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Mon</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Tues</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Wed</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Thurs</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Fri</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Sat</p>
            <p class="pick-food"></p>
          </div>
        </div>
        <div class="food_order week-two">
          <h2 class="plan_sched__week-chosen__title ">Week Two</h2>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Mon</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Tues</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Wed</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Thurs</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Fri</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Sat</p>
            <p class="pick-food"></p>
          </div>
        </div>

      </section>
      <section id='mega' class="plan_sched__week-chosen choose_food_slider none">
        <div class="food_order week-one">
          <h2 class="plan_sched__week-chosen__title ">Week One</h2>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Mon</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Tues</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Wed</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Thurs</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Fri</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Sat</p>
            <p class="pick-food"></p>
          </div>
        </div>
        <div class="food_order week-two">
          <h2 class="plan_sched__week-chosen__title ">Week Two</h2>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Mon</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Tues</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Wed</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Thurs</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Fri</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Sat</p>
            <p class="pick-food"></p>
          </div>
        </div>
        <div class="food_order week-three">
          <h2 class="plan_sched__week-chosen__title ">Week Three</h2>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Mon</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Tues</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Wed</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Thurs</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Fri</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Sat</p>
            <p class="pick-food"></p>
          </div>
        </div>
        <div class="food_order week-four">
          <h2 class="plan_sched__week-chosen__title ">Week Four</h2>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Mon</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Tues</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Wed</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Thurs</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Fri</p>
            <p class="pick-food"></p>
          </div>
          <div class="plan_sched__week-chosen__date-pick">
            <p class="date-pick_day">Sat</p>
            <p class="pick-food"></p>
          </div>
        </div>

      </section>

      <div id="loading"></div>
    </div>
    <div class="checkout">
      <a href="#">
        <button class="choose_week__btn" onClick="goToCheckChoices()">
          CHECKOUT
        </button>
      </a>
      <a href="http://wordpress.test/step3">
        <p class="back">BACK</p>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    (function() {
      const choose_food_slider = document.querySelector('.choose_food_slider')
      const plan_title = document.querySelector('.plan_title')
      const foodSelection = JSON.parse(localStorage.getItem('food_selection'))
      const planSection = document.querySelectorAll('.plan_sched__week-chosen')
      const section_nano = document.querySelector('#nano')
      const section_micro = document.querySelector('#micro')
      const section_mega = document.querySelector('#mega')
      // nano
      const food_order_1 = section_nano.querySelector('.week-one')
      const pick_food_1 = food_order_1.querySelectorAll('.pick-food')

      // micro
      const micro_food_order_1 = section_micro.querySelector('.week-one')
      const micro_food_order_2 = section_micro.querySelector('.week-two')
      const micro_pick_food_1 = micro_food_order_1.querySelectorAll('.pick-food')
      const micro_pick_food_2 = micro_food_order_2.querySelectorAll('.pick-food')
      // mega
      const mega_food_order_1 = section_mega.querySelector('.week-one')
      const mega_food_order_2 = section_mega.querySelector('.week-two')
      const mega_food_order_3 = section_mega.querySelector('.week-three')
      const mega_food_order_4 = section_mega.querySelector('.week-four')
      const mega_pick_food_1 = mega_food_order_1.querySelectorAll('.pick-food')
      const mega_pick_food_2 = mega_food_order_2.querySelectorAll('.pick-food')
      const mega_pick_food_3 = mega_food_order_3.querySelectorAll('.pick-food')
      const mega_pick_food_4 = mega_food_order_4.querySelectorAll('.pick-food')
      let merged_pick_food = []
      plan_title.innerHTML = localStorage.getItem('plan').toUpperCase()

      const desc = document.querySelector('.desc')
      const desc_2 = document.querySelector('.desc-2')

      switch (localStorage.getItem('plan')) {
        case 'nano':
          desc.innerHTML = 'One Week Trial Plan';
          desc_2.innerHTML = '*Limited Time Only'
          merged_pick_food = [...pick_food_1]
          setFoodSelection(merged_pick_food)
          break;
        case 'micro':
          desc.innerHTML = 'Two Week Plan';
          merged_pick_food = [...micro_pick_food_1, ...micro_pick_food_2]
          setFoodSelection(merged_pick_food)
          break;
        case 'mega':
          desc.innerHTML = 'One Month Plan';
          merged_pick_food = [
            ...mega_pick_food_1,
            ...mega_pick_food_2,
            ...mega_pick_food_3,
            ...mega_pick_food_4,
          ]
          setFoodSelection(merged_pick_food)
          break;

        default:
          break;
      }

      window.addEventListener('DOMContentLoaded', (event) => {
        setSection()
        $('.choose_food_slider').slick();
      });

      function setSection() {
        planSection.forEach((item, index) => {
          item.style.display = localStorage.getItem('plan') == item.id ? 'block' : 'none'
        })
      }

      function setFoodSelection(merged_pick_food) {
        merged_pick_food.forEach((item, index) => {
          item.innerHTML = foodSelection[index]
        })
      }


      console.log(merged_pick_food)
      console.log(foodSelection)
    })()

    function goToCheckChoices() {
      window.location = 'wordpress.test/step5';
    }
  </script>


</body>

</html>