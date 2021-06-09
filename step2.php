<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/reset.css">
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

  <div class="section_1">
    <a href="">
      <img class="section_1__logo" src="/assets/img/logo.png" alt="" />
    </a>

    <ul class="section_1__list">
      <li class="section_1__step-1">
        <img src="/assets/img/step-1_grayed.png" alt="" />
        <p class="step-1" style="color: #d2d3d5;">LET’S START</p>
      </li>
      <li class="step-dot">
        <img src="/assets/img/dot.png" alt="" />
      </li>
      <li class="section_1__step-2">
        <img src="/assets/img/step-2_colored.png" alt="" />
        <p class="step-2" style="color:#0c55a0 ;">SELECT PLAN</p>
      </li>
      <li class="step-dot">
        <img src="/assets/img/dot.png" alt="" />
      </li>
      <li class="section_1__step-3">
        <img src="/assets/img/step-3.png" alt="" />
        <p class="step-3">SELECT ITEMS</p>
      </li>
      <li class="step-dot">
        <img src="/assets/img/dot.png" alt="" />
      </li>
      <li class="section_1__step-4">
        <img src="/assets/img/step-4.png" alt="" />
        <p class="step-4">CHECKOUT</p>
      </li>
    </ul>
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
        <img src="/assets/img/box.png" alt="">
        <div class="tl_50">
          <p class="title plan_title">

          </p>
          <p class="desc"></p>
          <p class="desc-2"></p>
        </div>
      </div>
      <div class="week__calendar">
        <p class="start_date">STARTING DATE</p>
        <input class="startingWeek" type="date" name="startingDate" id="startingDate" class="option" data-thumbnail="/assets/img/calendar.png">

        <div class="input mt-2">
          <p class="section_2__col__col-2__label" for="consumption">TIME OF CONSUMPTION</p>
          <select class="options" id="consumption" name="consumption">
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



  <footer class="footer">
    <p class="footer__txt">Terms and Privacy | Disclaimer </p>
    <p class="footer__txt2">© YOGURT CULTURE 2021</p>
  </footer>
  <script>
    (function() {
      const plan_title = document.querySelector('.plan_title')
      const desc = document.querySelector('.desc')
      const desc_2 = document.querySelector('.desc-2')
      plan_title.innerHTML = localStorage.getItem('plan').toUpperCase()
      switch (localStorage.getItem('plan')) {
        case 'nano':
          desc.innerHTML = 'One Week Trial Plan';
          desc_2.innerHTML = '*Limited Time Only'
          break;
        case 'micro':
          desc.innerHTML = 'Two Week Plan';
          break;
        case 'mega':
          desc.innerHTML = 'One Month Plan';
          break;
      
        default:
          break;
      }
    })()

    function goToChoosingFood() {
      const consumption = document.getElementById('consumption')
      const startingDate = document.getElementById('startingDate');

      console.log([
        startingDate.value,
        consumption.value
      ]);
      localStorage.setItem('date', startingDate.value);
      localStorage.setItem('time', consumption.value);
      if (!localStorage.getItem('time') || !localStorage.getItem('date')) {
        alert('Please input time of consumption')
      } else {
        window.location = 'http://localhost:3000/step3.php';
      }
    }
  </script>
</body>

</html>