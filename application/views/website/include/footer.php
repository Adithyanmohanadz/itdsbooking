<footer class="footer pt-3 glbg-primary position-relative" >
   
    <div class="container ">
        <div class=" row">

        <div class="col-12 py-3 py-lg-5 text-center">
        <img src="assets/img/hotel/logo/ITDS  LOGO1 light.png" alt="" class="footer_logo">
        </div>

            <div class="col-md-3 mb-4 ms-auto">
                <div>
                    <h6 class="glcolor-secondary font-weight-bolder mb-0">ITDS</h6>

                    <p class=" text-md text-white mb-2"> Idukki Tourism Development Society, Charalil Complex, Near Pvt. Bus Stand, Thodupuzha-685584</p>
                    <p class=" text-md text-white mb-2"><a class="text-white" href="mailto:itdskerala03@gmail.com">itdskerala03@gmail.com</a>  </p>
                    <p class=" text-md text-white mb-2"> +91 9746582844 </p>

                </div>
                <div>
                    <h6 class="mt-3 mb-2 text-white">Social</h6>
                    <ul class="d-flex flex-row ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link pe-1" href=" " target="_blank">
                                <i class="fab fa-facebook text-lg opacity-8 text-white"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pe-1" href=" " target="_blank">
                                <i class="fab fa-twitter text-lg opacity-8 text-white"></i>
                            </a>
                        </li> 

                        <li class="nav-item">
                            <a class="nav-link pe-1" href=" " target="_blank">
                                <i class="fab fa-youtube text-lg opacity-8 text-white"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>



            <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="glcolor-secondary text-sm">Company</h6>
                    <ul class="flex-column ms-n3 nav ">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= base_url() ?>#about" target="_blank">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="" target="_blank">
                            Membership
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="search" target="_blank">
                            Hotel Booking
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact_us" target="_blank">
                            Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="glcolor-secondary text-sm">Resources</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href=" " target="_blank">
                                1
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href=" " target="_blank">
                                2
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href=" " target="_blank">
                                3
                            </a>
                        </li>
                    </ul>
                </div>
            </div> -->

            <!-- <div class="col-md-2 col-sm-6 col-6 mb-4">
                <div>
                    <h6 class="glcolor-secondary text-sm">Help & Support</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href=" " target="_blank">
                                Contact Us
                            </a>
                        </li> 

                    </ul>
                </div>
            </div> -->

            <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
                <div>
                    <h6 class="glcolor-secondary text-sm">Legal</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="" target="_blank">
                                Terms &amp; Conditions
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="" target="_blank">
                                Privacy Policy
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="hotel_reg" target="_blank">
                                Hotel Reg
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="horizontal " style="background-image: linear-gradient(90deg, transparent, rgb(255 255 255), transparent);">

            <div class="col-12 py-1">
                <div class="text-center">
                    <p class="my-4 text-sm text-white">
                        All rights reserved. Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> <a href=" " class="text-white" target="_blank">ITDS </a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>







<script>
    // Toggle the guest popup on clicking relevant elements
    $('.guest ').on('click', function(e) {
        e.stopPropagation();
        $('.guest-popup').toggle();
    });

    // Handle "Done" button click
    $('.btn-done').on('click', function(e) {
        e.preventDefault();
        $('.guest-popup').hide();
        // Additional actions you want to perform when Done is clicked
    });

    // Close the guest popup when clicking outside it
    $(document).on('click', function(e) {
        // Check if the click target is not within the .guest-popup or .guest elements
        if (!$(e.target).closest('.guest-popup').length && !$(e.target).hasClass('guest')) {
            $('.guest-popup').hide();
        }
    });

    $(document).ready(function() {
        // Room counter increment and decrement
        $('.room-counter .counter-inc, .room-counter .counter-dec').on('click', function(e) {
            e.stopPropagation();
            var counterInput = $(this).siblings('.counter-input');
            var count = parseInt(counterInput.val());
            count = $(this).hasClass('counter-inc') ? count + 1 : (count > 1 ? count - 1 : 1);
            counterInput.val(count);
            updateGuestText();
        });


        // Adults counter increment and decrement
        $('.adults-counter .counter-inc, .adults-counter .counter-dec').on('click', function(e) {
            e.stopPropagation();
            var counterInput = $(this).siblings('.counter-input');
            var count = parseInt(counterInput.val());
            count = $(this).hasClass('counter-inc') ? count + 1 : (count > 1 ? count - 1 : 1);
            counterInput.val(count);
            updateGuestText();
        });


        // Children counter increment and decrement
        $('.children-counter .counter-inc, .children-counter .counter-dec').on('click', function(e) {
            e.stopPropagation();
            var counterInput = $(this).siblings('.counter-input');
            var count = parseInt(counterInput.val());
            count = $(this).hasClass('counter-inc') ? count + 1 : (count > 0 ? count - 1 : 0);
            counterInput.val(count);
            updateGuestText();
        });

        // Function to update the guest text
        function updateGuestText() {
            var roomCount = $('.room-counter .counter-input').val();
            var adultsCount = $('.adults-counter .counter-input').val();
            var childrenCount = $('.children-counter .counter-input').val();
            $('.guest .intext').val(roomCount + " Room | " + adultsCount + " Adults | " + childrenCount + " Children");
        }


    });
</script>


<script>
    const rangeInput = document.querySelectorAll(".range-input input"),
        priceInput = document.querySelectorAll(".price-input input"),
        range = document.querySelector(".slider .progress");
    let priceGap = 1000;

    priceInput.forEach((input) => {
        input.addEventListener("input", (e) => {
            let minPrice = parseInt(priceInput[0].value),
                maxPrice = parseInt(priceInput[1].value);

            if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
                if (e.target.className === "input-min") {
                    rangeInput[0].value = minPrice;
                    range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
                } else {
                    rangeInput[1].value = maxPrice;
                    range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                }
            }
        });
    });

    rangeInput.forEach((input) => {
        input.addEventListener("input", (e) => {
            let minVal = parseInt(rangeInput[0].value),
                maxVal = parseInt(rangeInput[1].value);

            if (maxVal - minVal < priceGap) {
                if (e.target.className === "range-min") {
                    rangeInput[0].value = maxVal - priceGap;
                } else {
                    rangeInput[1].value = minVal + priceGap;
                }
            } else {
                priceInput[0].value = minVal;
                priceInput[1].value = maxVal;
                range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
                range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
            }
        });
    });
</script>




<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--  Flatpickr  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>

<script>
    $("#rangeDate").flatpickr({
        mode: 'range',
        dateFormat: "Y-m-d",
        minDate: "today"
    });
</script>


<!--   Core JS Files   -->
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>

<script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="assets/js/plugins/countup.min.js"></script>
<script src="assets/js/plugins/prism.min.js"></script>
<!-- <script src="assets/js/plugins/highlight.min.js"></script> -->



<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="assets/js/plugins/rellax.min.js"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="assets/js/plugins/tilt.min.js"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="assets/js/plugins/choices.min.js"></script>
<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
<script src="assets/js/plugins/parallax.min.js"></script>


<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>

<script src="assets/js/plugins/glidejs.min.js" type="text/javascript"></script>

<script src="assets/js/plugins/anime.min.js" type="text/javascript"></script>

<script src="assets/js/plugins/gallery.js" type="text/javascript"></script>


<!-- <script src="assets/js/soft-design-system.min.js?v=1.0.9" type="text/javascript"></script> -->
<script src="assets/js/hotel_gl.js" type="text/javascript"></script>



</body>

</html>