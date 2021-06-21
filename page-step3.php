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
  <style>
    .plan_week {
      margin: 20px;
    }

    .center_plan {
      display: flex;
      flex-direction: row;
      flex-wrap: nowrap;
      justify-content: center;
      align-items: stretch;
      align-content: stretch;
    }
  </style>
</head>

<body>
  <div class="promo_code">
    <p class="promo_code__title">
      PROMOCODE: <span class="promo_code__culture">YOGURTISOURCULTURE</span>> 10% OFF ON ALL ITEMS
    </p>
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

  <!-- CHOOSE FOOD -->
  <div class="choosing_food">
    <h2 class="choosing_food__title">CHOOSE YOUR FOOD</h2>

    <div class="choosing_food__foods slider">
      <div class="choosing_food__foods__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/1st_img.png" alt="">
        <p class="choosing_food__foods__title">Mango Yogurt </p>
        <p class="choosing_food__foods__desc">Vietnamese Yogurt mixed<br>
          with ripe mango jam</p>
      </div>
      <div class="choosing_food__foods__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2nd_img.png" alt="">
        <p class="choosing_food__foods__title">Mango Yogurt </p>
        <p class="choosing_food__foods__desc">Vietnamese Yogurt mixed<br>
          with ripe mango jam</p>
      </div>
      <div class="choosing_food__foods__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/3rd_img.png" alt="">
        <p class="choosing_food__foods__title">Mango Yogurt </p>
        <p class="choosing_food__foods__desc">Vietnamese Yogurt mixed<br>
          with ripe mango jam</p>
      </div>
      <div class="choosing_food__foods__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/4th_img.png" alt="">
        <p class="choosing_food__foods__title">Mango Yogurt </p>
        <p class="choosing_food__foods__desc">Vietnamese Yogurt mixed<br>
          with ripe mango jam</p>
      </div>
      <div class="choosing_food__foods__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/5th_img.png" alt="">
        <p class="choosing_food__foods__title">Mango Yogurt </p>
        <p class="choosing_food__foods__desc">Vietnamese Yogurt mixed<br>
          with ripe mango jam</p>
      </div>
      <!-- <div class="choosing_food__foods__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/6th_img.png" alt="">
        <p class="choosing_food__foods__title">Mango Yogurt </p>
        <p class="choosing_food__foods__desc">Vietnamese Yogurt mixed<br>
          with ripe mango jam</p>
      </div>
      <div class="choosing_food__foods__item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/7th_img.png" alt="">
        <p class="choosing_food__foods__title">Mango Yogurt </p>
        <p class="choosing_food__foods__desc">Vietnamese Yogurt mixed<br>
          with ripe mango jam</p>
      </div> -->
    </div>

    <div class="sched">
      <!-- NANO -->
      <section id="nano">
        <div class="sched__filter">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/filter.svg" alt="">
          <p class="filter_text">Filter</p>
          <input type="text" style="width: 20%;">
        </div>
        <div class="nano_food_choice">
          <div class="sched__plan-sched">
            <div class="plan_chosen">
              <img src="/assets/img/box.png" alt="">
              <div class="tl_50">
                <p class="title">
                  NANO
                </p>
                <p class="desc">One week Trial Plan</p>
                <p class="desc-2">*Limited Time Only</p>
              </div>
            </div>
            <div class="plan_week">
              <h2 class="title">Week One</h2>
              <div class="dates">
                <form action='#' class="form nano_form nano" id='nano_form'>
                  <div class="date-2">
                    <p class="day">Mon</p>
                    <select title="Mon" class="input">
                    </select>
                  </div>
                  <div class="date-2">
                    <p class="day">Tues</p>
                    <select title="Tues" class="input">
                    </select>
                  </div>
                  <div class="date-2">
                    <p class="day">Wed</p>
                    <select title="Wed" class="input">
                    </select>
                  </div>
                  <div class="date-2">
                    <p class="day">Thurs</p>
                    <select title="Thurs" class="input">
                    </select>
                  </div>
                  <div class="date-2">
                    <p class="day">Fri</p>
                    <select title="Fri" class="input">
                    </select>
                  </div>
                  <div class="date-2">
                    <p class="day">Sat</p>
                    <select title="Sat" class="input">
                    </select>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /NANO -->
      <!-- MICRO -->
      <section id="micro">
        <!-- CHOOSING PLAN -->
        <div class="choosing_plan">
          <div class="step_2">
            <h2 class="step_2__title">
              HERE’S HOW WE BEGIN.
            </h2>
            <p class="step_2__sel">Start your plan by choosing exactly what you want</p>
          </div>

          <div class="choose_plan center_plan">
            <div class="plan_1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box.png" alt="">
              <div class="plan_1__tl_50">
                <p class="plan_1__title">
                  MICRO
                </p>
                <p class="plan_1__desc">Two Week Plan</p>
              </div>
            </div>
          </div>
        </div>

        <div class="micro_food_choice ">
          <div class="sched__plan-sched micro_slider">
            <div class="plan_week">
              <h2 class="title">Week One</h2>
              <div class="dates">
                <form action='#' class="form micro_form micro" id='micro_form_1'>
                  <div class="date-2">
                    <p class="day">Mon</p>
                    <select title="Mon" class="input">
                    </select>
                  </div>
                  <div class="date-2">
                    <p class="day">Tues</p>
                    <select title="Tues" class="input">
                    </select>
                  </div>
                  <div class="date-2">
                    <p class="day">Wed</p>
                    <select title="Wed" class="input">
                    </select>
                  </div>
                  <div class="date-2">
                    <p class="day">Thurs</p>
                    <select title="Thurs" class="input">
                    </select>
                  </div>
                  <div class="date-2">
                    <p class="day">Fri</p>
                    <select title="Fri" class="input">
                    </select>
                  </div>
                  <div class="date-2">
                    <p class="day">Sat</p>
                    <select title="Sat" class="input">
                    </select>
                  </div>
                </form>
              </div>
            </div>
            <div class="plan_week">
              <h2 class="title">Week Two</h2>
              <div class="dates">
                <form action='#' class="form micro_form micro" id='micro_form_2'>
                  <div class="date-2">
                    <p class="day">Mon</p>
                    <select title="Mon" class="input">
                    </select>
                  </div>
                  <div class="date-2">
                    <p class="day">Tues</p>
                    <select title="Tues" class="input">
                    </select>
                  </div>
                  <div class="date-2">
                    <p class="day">Wed</p>
                    <select title="Wed" class="input">
                    </select>
                  </div>
                  <div class="date-2">
                    <p class="day">Thurs</p>
                    <select title="Thurs" class="input">
                    </select>
                  </div>
                  <div class="date-2">
                    <p class="day">Fri</p>
                    <select title="Fri" class="input">
                    </select>
                  </div>
                  <div class="date-2">
                    <p class="day">Sat</p>
                    <select title="Sat" class="input">
                    </select>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /MICRO -->
      <!-- MEGA -->
      <section id="mega">
        <div class="choosing_plan">
          <div class="step_2">
            <h2 class="step_2__title">
              HERE’S HOW WE BEGIN.
            </h2>
            <p class="step_2__sel">Start your plan by choosing exactly what you want</p>
          </div>

          <div class="choose_plan center_plan">
            <div class="plan_2">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box.png" alt="">
              <div class="plan_1__tl_50">
                <p class="plan_1__title">
                  MEGA
                </p>
                <p class="plan_1__desc">One Month Plan</p>
              </div>
            </div>
          </div>
        </div>
        <div class="sched__plan-sched mega_slider">
          <div class="plan_week">
            <h2 class="title">Week One</h2>
            <div class="dates">
              <form action='#' class="form mega_form mega" id='mega_form_1'>
                <div class="date-2">
                  <p class="day">Mon</p>
                  <select title="Mon" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Tues</p>
                  <select title="Tues" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Wed</p>
                  <select title="Wed" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Thurs</p>
                  <select title="Thurs" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Fri</p>
                  <select title="Fri" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Sat</p>
                  <select title="Sat" class="input">
                  </select>
                </div>
              </form>
            </div>
          </div>
          <div class="plan_week">
            <h2 class="title">Week Two</h2>
            <div class="dates">
              <form action='#' class="form mega_form mega" id='mega_form_2'>
                <div class="date-2">
                  <p class="day">Mon</p>
                  <select title="Mon" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Tues</p>
                  <select title="Tues" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Wed</p>
                  <select title="Wed" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Thurs</p>
                  <select title="Thurs" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Fri</p>
                  <select title="Fri" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Sat</p>
                  <select title="Sat" class="input">
                  </select>
                </div>
              </form>
            </div>
          </div>
          <div class="plan_week">
            <h2 class="title">Week THree</h2>
            <div class="dates">
              <form action='#' class="form mega_form mega" id='mega_form_3'>
                <div class="date-2">
                  <p class="day">Mon</p>
                  <select title="Mon" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Tues</p>
                  <select title="Tues" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Wed</p>
                  <select title="Wed" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Thurs</p>
                  <select title="Thurs" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Fri</p>
                  <select title="Fri" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Sat</p>
                  <select title="Sat" class="input">
                  </select>
                </div>
              </form>
            </div>
          </div>
          <div class="plan_week">
            <h2 class="title">Week Four</h2>
            <div class="dates">
              <form action='#' class="form mega_form mega" id='mega_form_4'>
                <div class="date-2">
                  <p class="day">Mon</p>
                  <select title="Mon" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Tues</p>
                  <select title="Tues" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Wed</p>
                  <select title="Wed" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Thurs</p>
                  <select title="Thurs" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Fri</p>
                  <select title="Fri" class="input">
                  </select>
                </div>
                <div class="date-2">
                  <p class="day">Sat</p>
                  <select title="Sat" class="input">
                  </select>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- /MEGA -->
      <div class="checkout">
        <a href="#">
          <button class="choose_week__btn" onClick="goToCheckFood()">
            CHECKOUT
          </button>
        </a>
        <a href="http://wordpress.test/step2">
          <p class="back">BACK</p>
        </a>
      </div>
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
      infinite: true,
      speed: 700,
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
    $('.micro_slider').slick({
      dots: true,
      infinite: true,
      speed: 700,
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 9999,
          settings: "unslick"
        },
        {
          breakpoint: 800,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 375,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

    $('.mega_slider').slick({
      dots: true,
      infinite: true,
      speed: 700,
      slidesToShow: 2,
      slidesToScroll: 2,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
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
    (function() {
      let selects = document.querySelectorAll('select')

      let foods = [
        'Andiamo, Fuso',
        'Panzanella',
        'Mashup Salad',
        'Romanov Salad',
        'Sexy Grilled Chix',
        'Mr. Cobb',
        'Indian Wraps',
      ]

      // console.log(selects)
      // console.log(foods)

      selects.forEach(select => {
        foods.forEach((food, index) => {
          let option = document.createElement('option')
          option.value = food
          option.innerHTML = food
          select.appendChild(option)
        })
      });

      const sections = document.querySelectorAll('section')
      sections.forEach((section) => {
        // console.log(localStorage.getItem('plan') == section.id)
        localStorage.getItem('plan') == section.id ? section.style.display = 'block' : section.style.display = 'none'

      })
      // console.log(sections)
    })()

    function goToCheckFood() {
      // setFoodCheck()
      // foodSelection(localStorage.getItem('plan'))
      foodSelection()
    }

    function setFoodCheck() {
      const plan = localStorage.getItem('plan')
      foodSelection(plan)
      // switch (localStorage.getItem('plan')) {
      //   case 'nano':
      //     nanoFoodSelection()
      //     break;
      //   case 'micro':
      //     microFoodSelection()
      //     break;
      //   case 'mega':
      //     megaFoodSelection()
      //     break;

      //   default:
      //     break;
      // }
      // window.location = 'step4.php'
    }


    function nanoFoodSelection() {
      const nano_forms = document.querySelectorAll('.nano_form');
      let nano_selections = [];
      nano_forms.forEach((form, index) => {
        nano_selections[index] = form.querySelectorAll('select')
      })

      nano_selections.forEach((selection, index) => {
        selection.forEach((item, index) => {
          if (index % 6 == 0 && index != 0) console.log('---')
          console.log(item.title, ' -> ', item.value);
        });
      })

      console.log(nano_forms)
      console.log(nano_selections)
    }

    function microFoodSelection() {
      const micro_forms = document.querySelectorAll('.micro_form');
      let micro_selections = [];
      micro_forms.forEach((form, index) => {
        micro_selections[index] = form.querySelectorAll('select')
      })

      micro_selections.forEach((selection, index) => {
        selection.forEach((item, index) => {
          if (index % 6 == 0) console.log('---')
          console.log(item.title, ' -> ', item.value);
        });
      })

      console.log(micro_forms)
      console.log(micro_selections)
    }

    function megaFoodSelection() {
      const mega_forms = document.querySelectorAll('.mega_form');
      let mega_selections = [];
      mega_forms.forEach((form, index) => {
        mega_selections[index] = form.querySelectorAll('select')
      })

      mega_selections.forEach((selection, index) => {
        selection.forEach((item, index) => {
          if (index % 6 == 0) console.log('---')
          console.log(item.title, ' -> ', item.value);
        });
      })




      console.log(mega_forms)
      console.log(mega_selections)
    }

    function foodSelection() {
      console.log(localStorage.getItem('plan'))
      const forms = document.querySelectorAll(`.${localStorage.getItem('plan')}_form`);
      let selections = [];
      let selectedFood = [];
      forms.forEach((form, index) => {
        selections[index] = form.querySelectorAll('select')
      })

      selections.forEach((selection, index) => {
        selection.forEach((item, index) => {
          if (index % 6 == 0) console.log('---')
          console.log(item.title, ' -> ', item.value);
          selectedFood.push(item.value)
        });
      })

      localStorage.setItem('food_selection', JSON.stringify(selectedFood))
      redirect()
    }

    function redirect() {
      window.location = 'http://wordpress.test/step4.php';
    }
  </script>
</body>

</html>