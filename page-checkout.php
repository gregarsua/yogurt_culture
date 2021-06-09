<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
=======
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/reset.css">
>>>>>>> 611be977d5fd7b5b4ad3652ad70a8cd24072805d
</head>

<body>
    <div class="promo_code">
        <p class="promo_code__title">
            PROMOCODE: <span class="promo_code__culture">YOGURTISOURCULTURE</span>> 10% OFF ON ALL ITEMS
        </p>
    </div>

    <div class="section_1">
<<<<<<< HEAD
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img class="section_1__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" />
=======
        <a href="">
            <img class="section_1__logo" src="/assets/img/logo.png" alt="" />
>>>>>>> 611be977d5fd7b5b4ad3652ad70a8cd24072805d
        </a>

        <ul class="section_1__list">
            <li class="section_1__step-1">
<<<<<<< HEAD
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
=======
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
>>>>>>> 611be977d5fd7b5b4ad3652ad70a8cd24072805d
                <p class="step-4">CHECKOUT</p>
            </li>
        </ul>
    </div>

    <div class="checkout-container" style="display: block;">
        <div class="checkout">
            <h2 class="checkout__title">ALMOST THERE!</h2>
            <p class="checkout__desc">Download the QR Code and upload<br>
                it in your Gcash account to pay</p>
        </div>

        <div class="content">
            <div class="qr_code">
<<<<<<< HEAD
                <img class="qr_code__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/qr.png" alt="">
=======
                <img class="qr_code__img" src="/assets/img/qr.png" alt="">
>>>>>>> 611be977d5fd7b5b4ad3652ad70a8cd24072805d
                <p class="qr_code__txt">+ 63 967 019 5897</p>
                <p class="qr_code__acc">ACCOUNT NUMBER</p>
            </div>

            <div class="check_choices__plan-chosen">
                <div class="plan">
<<<<<<< HEAD
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/box.png" alt="">
                    <div class="tl_50">
                        <p class="tl_50__title">
                            MICRO
=======
                    <img src="/assets/img/box.png" alt="">
                    <div class="tl_50">
                        <p class="tl_50__title plan_title">

>>>>>>> 611be977d5fd7b5b4ad3652ad70a8cd24072805d
                        </p>
                        <p class="tl_50__desc">Three Week Meal Plan</p>
                        <p class="tl_50__desc2">Php 5,400 </p>
                    </div>
                </div>

                <div class="compute">
                    <p class="compute__desc">Subtotal:</p>
<<<<<<< HEAD
                    <p class="compute__price">₱ 5,500.00</p>
=======
                    <p id='subtotal_price' class="compute__price">₱ 5,500.00</p>
>>>>>>> 611be977d5fd7b5b4ad3652ad70a8cd24072805d
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
<<<<<<< HEAD
                    <p class="compute__price" style="font-size: 1.25rem; font-weight: 600;">₱ 5,500.00</p>
=======
                    <p id='total_price' class="compute__price" style="font-size: 1.25rem; font-weight: 600;">₱ 5,500.00</p>
>>>>>>> 611be977d5fd7b5b4ad3652ad70a8cd24072805d
                </div>

                <p class="notice">Once we receive the payment, <br>
                    our team will contact you to <br>
                    confirm the transaction
                </p>

                <div class="start_plan">
                    <button class="start_plan__btn" id="myBtn">DOWNLOAD QR</button><br>
                    <p class="back">BACK</p>
                </div>
            </div>
        </div>
    </div>


    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <h1 class="title">Download Successful! </h1>

            <p class="desc">Use the QR code to start your plan by uploading<br>
                it on your GCASH through the PAY QR Option. </p>


            <p class="desc">Once we receive the payment, we will immediately <br>
                contact you to confirm the payment</p>

            <button class="modal_btn">Back to Home</button>
        </div>

    </div>

    <footer class="footer">
        <p class="footer__txt">Terms and Privacy | Disclaimer </p>
        <p class="footer__txt2">© YOGURT CULTURE 2021</p>
    </footer>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
<<<<<<< HEAD
            emailjs.init("user_1aX0fAWdjCJgtNQEYzWaF");
        })();
    </script>
    <script>
=======
            emailjs.init("user_OuoAcJflVsGtmUVmKDLNz");
        })();
    </script>
    <script>
        const plan_title = document.querySelector('.plan_title')
        plan_title.innerHTML = localStorage.getItem('plan').toUpperCase()
        const tl_50__desc = document.querySelector('.tl_50__desc')
        const tl_50__desc2 = document.querySelector('.tl_50__desc2')
        const subtotal_price = document.querySelector('#subtotal_price')
        const total_price = document.querySelector('#total_price')

        switch (localStorage.getItem('plan')) {
        case 'nano':
          tl_50__desc.innerHTML = 'One Week Trial Plan'
          tl_50__desc2.innerHTML = '₱ 1,499'
          subtotal_price.innerHTML = '₱ 1,499'
          total_price.innerHTML = '₱ 1,499'
          break;
        case 'micro':
          tl_50__desc.innerHTML = 'Two Week Plan'
          tl_50__desc2.innerHTML = '₱ 2,998'
          subtotal_price.innerHTML = '₱ 2,998'
          total_price.innerHTML = '₱ 2,998'
          break;
        case 'mega':
          tl_50__desc.innerHTML = 'Three Week Plan'
          tl_50__desc2.innerHTML = '₱ 4,500'
          subtotal_price.innerHTML = '₱ 4,500'
          total_price.innerHTML = '₱ 4,500'
          break;

        default:
          break;
      }

>>>>>>> 611be977d5fd7b5b4ad3652ad70a8cd24072805d
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
            confirmOrder();
        }

        function confirmOrder() {
<<<<<<< HEAD
            const serviceID = 'service_nv201jq';
            const templateID = 'template_f8b2wye';
            // company email on from_name
            const from_name = 'ejessa0506@gmail.com'
=======
            const serviceID = 'service_e4ti7a9';
            const templateID = 'template_cbu7u1e';
            // company email on from_name
            const from_name = 'yogurtcultureph@gmail.com'
>>>>>>> 611be977d5fd7b5b4ad3652ad70a8cd24072805d
            // reply_to the user email
            const reply_to = localStorage.getItem('email')

            const plan = localStorage.getItem('plan');
            const date = localStorage.getItem('date');
            const time = localStorage.getItem('time');
            const fullname = localStorage.getItem('fullname');
            const address = localStorage.getItem('address');
            const landmark = localStorage.getItem('landmark');
            const email = localStorage.getItem('email');
            const mobile = localStorage.getItem('mobile');
<<<<<<< HEAD
            const nanoFoodSelected = [
                localStorage.getItem('nano_monday'),
                localStorage.getItem('nano_tuesday'),
                localStorage.getItem('nano_wednesday'),
                localStorage.getItem('nano_thursday'),
                localStorage.getItem('nano_friday'),
                localStorage.getItem('nano_saturday'),
            ];
            const myHtml = `
            <div id="sum_nano" hidden>
=======
            const foodSelection = JSON.parse(localStorage.getItem('food_selection'))

            let week_one;
            let week_two
            let week_three
            let week_four
            let merged_week = '';

            switch (localStorage.getItem('plan')) {
                case 'nano':
                    week_one = `
                    <h2> Week One</h2>
                    <h3>- ${foodSelection[0]}</h3>
                    <h3>- ${foodSelection[1]}</h3>
                    <h3>- ${foodSelection[2]}</h3>
                    <h3>- ${foodSelection[3]}</h3>
                    <h3>- ${foodSelection[4]}</h3>
                    <h3>- ${foodSelection[5]}</h3>
                    `
                    merged_week += week_one
                    break;
                case 'micro':
                    week_one = `
                    <h2> Week One</h2>
                    <h3>- ${foodSelection[0]}</h3>
                    <h3>- ${foodSelection[1]}</h3>
                    <h3>- ${foodSelection[2]}</h3>
                    <h3>- ${foodSelection[3]}</h3>
                    <h3>- ${foodSelection[4]}</h3>
                    <h3>- ${foodSelection[5]}</h3>
                    `
                    week_two = `
                    <h2> Week Two</h2>
                    <h3>- ${foodSelection[6]}</h3>
                    <h3>- ${foodSelection[7]}</h3>
                    <h3>- ${foodSelection[8]}</h3>
                    <h3>- ${foodSelection[9]}</h3>
                    <h3>- ${foodSelection[10]}</h3>
                    <h3>- ${foodSelection[11]}</h3>
                    `
                    merged_week += week_one
                    merged_week += week_two
                    break;
                case 'mega':
                    week_one = `
                    <h2> Week One</h2>
                    <h3>- ${foodSelection[0]}</h3>
                    <h3>- ${foodSelection[1]}</h3>
                    <h3>- ${foodSelection[2]}</h3>
                    <h3>- ${foodSelection[3]}</h3>
                    <h3>- ${foodSelection[4]}</h3>
                    <h3>- ${foodSelection[5]}</h3>
                    `
                    week_two = `
                    <h2> Week Two</h2>
                    <h3>- ${foodSelection[6]}</h3>
                    <h3>- ${foodSelection[7]}</h3>
                    <h3>- ${foodSelection[8]}</h3>
                    <h3>- ${foodSelection[9]}</h3>
                    <h3>- ${foodSelection[10]}</h3>
                    <h3>- ${foodSelection[11]}</h3>
                    `
                    week_three = `
                    <h2> Week Three</h2>
                    <h3>- ${foodSelection[12]}</h3>
                    <h3>- ${foodSelection[13]}</h3>
                    <h3>- ${foodSelection[14]}</h3>
                    <h3>- ${foodSelection[15]}</h3>
                    <h3>- ${foodSelection[16]}</h3>
                    <h3>- ${foodSelection[17]}</h3>
                    `
                    week_four = `
                    <h2> Week Four</h2>
                    <h3>- ${foodSelection[18]}</h3>
                    <h3>- ${foodSelection[19]}</h3>
                    <h3>- ${foodSelection[20]}</h3>
                    <h3>- ${foodSelection[21]}</h3>
                    <h3>- ${foodSelection[22]}</h3>
                    <h3>- ${foodSelection[23]}</h3>
                    `

                    merged_week += week_one
                    merged_week += week_two
                    merged_week += week_three
                    merged_week += week_four
                    break;

                default:
                    break;
            }

            console.log(merged_week)
            const myHtml = `
            <div >
>>>>>>> 611be977d5fd7b5b4ad3652ad70a8cd24072805d
                <h1>Check Details:</h1>
                Plan: <h2 >${plan}</h2>
                date: <h2 >${date}</h2>
                time: <h2>${time}</h2>
                total: <h2>Php 1,000</h2>
<<<<<<< HEAD
                <label>Week 1</label>
                <h2>${nanoFoodSelected[0]}</h2>
                <h2>${nanoFoodSelected[1]}</h2>
                <h2>${nanoFoodSelected[2]}</h2>
                <h2>${nanoFoodSelected[3]}</h2>
                <h2>${nanoFoodSelected[4]}</h2>
                <h2>${nanoFoodSelected[5]}</h2>
=======
               ${merged_week}
>>>>>>> 611be977d5fd7b5b4ad3652ad70a8cd24072805d
            </div>
            `;

            var templateParams = {
                to_name: email,
                full_name: fullname,
                address: address,
                email: email,
                myHtml: myHtml,
                landmark: landmark,
                mobile: mobile,
                startingDate: date,
                consumption: time,
                from_name: from_name,
                reply_to: reply_to,
            };

<<<<<<< HEAD
            emailjs.send(serviceID, templateID, templateParams).then(
                function(response) {
                    alert('Order Sent' + response.status + response.text);
=======
            console.log(templateParams)
            emailjs.send(serviceID, templateID, templateParams).then(
                function(response) {
                    alert('Order Sent' + response.status + response.text);
                    localStorage.clear();
                    window.location = 'front-page.php'
>>>>>>> 611be977d5fd7b5b4ad3652ad70a8cd24072805d
                    location.reload();
                },
                function(error) {
                    alert('error sending your email');
                }, (err) => {
                    alert(JSON.stringify(err));
                }
            );
        }

        // When the user clicks on <span> (x), close the modal
        // span.onclick = function() {
        //   modal.style.display = "none";
        // }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

<<<<<<< HEAD
=======


>>>>>>> 611be977d5fd7b5b4ad3652ad70a8cd24072805d
        function backToHome() {
            window.location = 'index.html'
        }
    </script>

</body>

</html>