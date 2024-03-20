<style>
  /** SLIDESHOW **/
 .slideshow,
 .slideshow:after {
   top: -16px;
   /*Not sure why I needed this fix*/
   /* position: fixed; */
   /* width: 100%; */
   height: 100%;
   left: 0px;
   /* z-index: 0;  */
 }

 .slideshow li span {
   position: absolute;
   width: 100%;
   height: 100%;
   top: 0px;
   left: 0px;
   object-fit: cover;
   color: transparent;
   background-size: cover;
   background-position: 50% 50%;
   background-repeat: no-repeat;
   opacity: 0;
   /* z-index: 0; */
   animation: imageAnimation 30s linear infinite 0s;
 }



 .slideshow li:nth-child(1) span {
   background-image: url("assets/img/hotel/idukki/woman-taking-photo-morning-mist-phu-lang-ka-phayao-thailand.jpg");
 }

 .slideshow li:nth-child(2) span {
   background-image: url("assets/img/hotel/idukki/pexels-nandhu-kumar-13691356.jpg");
   animation-delay: 6s;
 }

 .slideshow li:nth-child(3) span {
   background-image: url("assets/img/hotel/idukki/Kanthalloor_Idukki_1223.jpg");
   animation-delay: 12s;
 }

 .slideshow li:nth-child(4) span {
   background-image: url("assets/img/hotel/idukki/thommankuthu-falls.jpg");
   animation-delay: 18s;
 }

 .slideshow li:nth-child(5) span {
   background-image: url("assets/img/hotel/idukki/green-tea-bud-leaves-green-tea-plantations-morning.jpg");
   animation-delay: 24s;
 }



 @keyframes imageAnimation {
   0% {
     opacity: 0;
     animation-timing-function: ease-in;
   }

   8% {
     opacity: 1;
     animation-timing-function: ease-out;
   }

   17% {
     opacity: 1
   }

   25% {
     opacity: 0
   }

   100% {
     opacity: 0
   }
 }


 @keyframes titleAnimation {
   0% {
     opacity: 0
   }

   8% {
     opacity: 1
   }

   17% {
     opacity: 1
   }

   19% {
     opacity: 0
   }

   100% {
     opacity: 0
   }
 }


 .no-cssanimations .cb-slideshow li span {
   opacity: 1;
 }

 .bimg {
   /* background-image: url(assets/img/hotel/idukki/woman-taking-photo-morning-mist-phu-lang-ka-phayao-thailand.jpg); */
   background-color: #000;
 }
</style>

<!-- -------- START HEADER 3 w/ image on background ------- -->
<header>
  <div class="page-header min-vh-100 bimg">

    <ul class="slideshow">
      <li><span>2</span></li>
      <li><span></span></li>
      <li><span></span></li>
      <li><span></span></li>
    </ul>

    <span class="mask bg-black opacity-4"></span>
    <div class="container">
      <div class="row justify-content-cen ter">
        <div class="col-lg-10 col-sm-9 text-c enter mx-aut o">
          <p class="lea d text-white mb-sm-2 mb-2">- ITDS PRESENT -</p>
          <h1 class=" heading h1 text-white ">The most <br> impressive adventures <br> on the world.</h1>
          <p class="text-white text-sm text-uppercase mt-4 fw-bolder">connect with us on:</p>

          <div class="d-flex justify-content-cent er">
            <a href="javascript:;"><i class="fab fa-facebook fa-1x text-lg text-white me-5"></i></a>
            <a href="javascript:;"><i class="fab fa-instagram fa-1x text-lg text-white me-5"></i></a>
            <a href="javascript:;"><i class="fab fa-twitter fa-1x text-lg text-white me-5"></i></a>
            <a href="javascript:;"><i class="fab fa-google-plus fa-1x text-lg text-white"></i></a>
          </div>
        </div>
      </div>
    </div>



  </div>
  <div class=" relative" style="height: 36px;overflow: hidden;margin-top: -33px; z-index:2">
    <div class="w-full  absolute bottom-0 start-0 end-0" style="transform: scale(2);transform-origin: top center;color: #f8f9fa;">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
</header>
<!-- -------- END HEADER 3 w/ image on background ------- -->

<section class="bg-dimwhite py-8 position-relative">

  <!-- <div class="search-box">
        <input type="text" name="" id="" class="mx-2 mt-1" placeholder="search...">
        <button class="icon">
            <i class="fas fa-search"></i>
        </button>
    </div> -->

  <!-- <div class="search-box">
        <input type="text" name="" id="searchInput" class="mx-2 mt-1" placeholder="Choose Your Destination">
        <button class="icon">
            <i class="fas fa-search"></i>
        </button>
        <div id="suggestions" class="suggestions "></div>
    </div> -->

  <div class="container col-10 mt-n7  p-0 ">
    <div class="row">
      <div class="col-lg-12 d-flex ">
        <div class="card card-body blur text-md-start text-center p x-sm-5 shadow-lg m t-sm-5 p y-sm-5 m t-8">
          <h1 class="glcolor-primary newFont mb-0">Find the right hotel today.</h1>
          <!-- <h2 class="text-dark mb-4">Choose the best</h2> -->
          <div class="card-body p-0">



            <div class="col-md-12 col-sm-12   me-sm-0 mx-auto   p-3">
              <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill p-1" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">
                      <i class="ni ni-app"></i>
                      <span class="ms-2">Hotel</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">
                      <i class="ni ni-app"></i>
                      <span class="ms-2">Near by Tourist Place</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="#tabs-3" role="tab" aria-selected="false">
                      <i class="ni ni-app"></i>
                      <span class="ms-2">Facility </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="#tabs-4" role="tab" aria-selected="false">
                      <i class="ni ni-app"></i>
                      <span class="ms-2">Room Viewpoints </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="  tab-content">
              <div class=" tab-pane fade show active" id="tabs-1" role="tabpanel" aria-labelledby="tab-1">
                <form>
                  <div class="row ">
                    <div class="col-lg-4 mb-2">
                      <div class="form-floating ">
                        <select class="location form-control ">
                          <option value="">Where Are You Going</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                        </select>
                        <label for="floatingInput" id="labelPlace">Enter the Destinations </label>
                        <div class="map-icon" style="background: url('assets/img/svg/map.svg') no-repeat;background-size: cover;"></div>
                      </div>
                    </div>

                    <div class="col-lg-4 mb-2">
                      <div class="form-floating ">
                        <input class="form-control intext" type="text" id="rangeDate" placeholder="Please select Date Range" data-input>
                        <label for="checkInDate">Check-in & Check-out Date </label>
                        <div class="map-icon" style="background: url('assets/img/svg/calendar.svg') no-repeat;background-size: cover; width: 27px;"></div>
                      </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                      <div class="form-floating guest">
                        <input type="text" class="form-control intext " id="floatingInput" value="1 Room | 1 Adults | 0 Children">
                        <label for="floatingInput">Rooms & Guests </label>
                        <div class="map-icon" style="background: url('assets/img/svg/arrowdown.svg') no-repeat;background-size: cover;"></div>
                      </div>
                      <div class="guest-popup">
                        <div class="guest-popup-item room-counter">
                          <div class="guest-popup-label">
                            <h4 class="mb-0">Room</h4>
                            <p class="text-xs">Minimum 1</p>
                          </div>
                          <div class="guest-popup-counter">
                            <span class="counter-btn counter-dec"><i class="fa-solid fa-minus"></i></span>
                            <input type="text" class="counter-input" disabled value="1">
                            <span class="counter-btn counter-inc"><i class="fa-solid fa-plus "></i></span>
                          </div>
                        </div>
                        <div class="guest-popup-item adults-counter">
                          <div class="guest-popup-label">
                            <h4 class="mb-0">Adults</h4>
                            <p class="text-xs">Above 11 Years</p>
                          </div>
                          <div class="guest-popup-counter ">
                            <span class="counter-btn counter-dec"><i class="fa-solid fa-minus"></i></span>
                            <input type="text" class="counter-input" value="1">
                            <span class="counter-btn counter-inc"><i class="fa-solid fa-plus "></i></span>
                          </div>
                        </div>
                        <div class="guest-popup-item children-counter">
                          <div class="guest-popup-label">
                            <h4 class="mb-0">Children</h4>
                            <p class="text-xs">0 - 11 Years</p>
                          </div>
                          <div class="guest-popup-counter">
                            <span class="counter-btn counter-dec"><i class="fa-solid fa-minus"></i></span>
                            <input type="text" class="counter-input" value="0">
                            <span class="counter-btn counter-inc"><i class="fa-solid fa-plus "></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="row text-center mt-4">
                        <div class="col-md-12">
                          <a href="booking"><button  class="btn bg-gradient-primary btn-lg w-md-30 rounded-pill ">Search</button></a>
                          
                        </div>
                      </div> -->
                  </div>

                </form>
              </div>

              <div class=" tab-pane fade" id="tabs-2" role="tabpanel" aria-labelledby="tab-2">
                <form>
                  <div class="row ">
                    <div class="col-lg-6 mb-2">
                      <div class="form-floating ">
                        <select class="location form-control ">
                          <option value="">Where Are You Going</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                        </select>
                        <label for="floatingInput" id="labelPlace">Enter the Destinations </label>
                        <div class="map-icon" style="background: url('assets/img/svg/map.svg') no-repeat;background-size: cover;"></div>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-2">
                      <div class="form-floating ">
                        <select class="location form-control ">
                          <option value="">Near by Tourist</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                        </select>
                        <label for="floatingInput" id="labelPlace">Enter the Near by Tourist </label>
                        <div class="map-icon" style="background: url('assets/img/svg/map.svg') no-repeat;background-size: cover;"></div>
                      </div>
                    </div>


                    <!-- <div class="row text-center mt-4">
                        <div class="col-md-12">
                          <a href="booking"><button  class="btn bg-gradient-primary btn-lg w-md-30 rounded-pill ">Search</button></a>
                          
                        </div>
                      </div> -->
                  </div>

                </form>
              </div>

              <div class=" tab-pane fade" id="tabs-3" role="tabpanel" aria-labelledby="tab-3">
                <form>
                  <div class="row ">
                    <div class="col-lg-6 mb-2">
                      <div class="form-floating ">
                        <select class="location form-control ">
                          <option value="">Where Are You Going</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                        </select>
                        <label for="floatingInput" id="labelPlace">Enter the Destinations </label>
                        <div class="map-icon" style="background: url('assets/img/svg/map.svg') no-repeat;background-size: cover;"></div>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-2">
                      <div class="form-floating ">
                        <select class="location form-control ">
                          <option value="">Facility</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                        </select>
                        <label for="floatingInput" id="labelPlace">Enter the Facility </label>
                        <div class="map-icon" style="background: url('assets/img/svg/map.svg') no-repeat;background-size: cover;"></div>
                      </div>
                    </div>


                    <!-- <div class="row text-center mt-4">
                        <div class="col-md-12">
                          <a href="booking"><button  class="btn bg-gradient-primary btn-lg w-md-30 rounded-pill ">Search</button></a>
                          
                        </div>
                      </div> -->
                  </div>

                </form>
              </div>

              <div class=" tab-pane fade" id="tabs-4" role="tabpanel" aria-labelledby="tab-4">
                <form>
                  <div class="row ">
                    <div class="col-lg-6 mb-2">
                      <div class="form-floating ">
                        <select class="location form-control ">
                          <option value="">Where Are You Going</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                        </select>
                        <label for="floatingInput" id="labelPlace">Enter the Destinations </label>
                        <div class="map-icon" style="background: url('assets/img/svg/map.svg') no-repeat;background-size: cover;"></div>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-2">
                      <div class="form-floating ">
                        <select class="location form-control ">
                          <option value="">Room Viewpoints</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                        </select>
                        <label for="floatingInput" id="labelPlace">Enter the Room Viewpoints </label>
                        <div class="map-icon" style="background: url('assets/img/svg/map.svg') no-repeat;background-size: cover;"></div>
                      </div>
                    </div>


                    <!-- <div class="row text-center mt-4">
                        <div class="col-md-12">
                          <a href="booking"><button  class="btn bg-gradient-primary btn-lg w-md-30 rounded-pill ">Search</button></a>
                          
                        </div>
                      </div> -->
                  </div>

                </form>
              </div>
            </div>


          </div>
          <div class="row text-center mt-4">
            <div class="col-sm-12">
              <a href=""><button class="btn glbg-primary btn-dark btn-lg w-md-30 rounded-pill ">Search</button></a>

            </div>
          </div>
          <!-- <div class="row mt-2">
                  <div class="col-md-3 col-6 ">
                    <img class="w-100" src="assets/img/hotel/resort-img/3.jpg" alt="logo">
                  </div>
                  <div class="col-md-3 col-6 ">
                    <img class="w-100" src="assets/img/hotel/resort-img/3.jpg" alt="logo">
                  </div>
                  <div class="col-md-3 col-6 ">
                    <img class="w-100" src="assets/img/hotel/resort-img/3.jpg" alt="logo">
                  </div>
                  <div class="col-md-3 col-6 ">
                    <img class="w-100" src="assets/img/hotel/resort-img/3.jpg" alt="logo">
                  </div>
                </div> -->
        </div>
      </div>
    </div>
  </div>

</section>

<section class="pb-7 bg-dimwhite position-relative" id="about">
  <div class="container">
    <div class="row">
      <div class="   ">
        <h6 class="glcolor-secondary text-uppercase ms-1">About</h6>
        <h1 class="glcolor-primary mb-3 mt-2 newFont">What is ITDS? </h1>
      </div>
    </div>
    <div class="row">

      <div class="col-md-6 mx-au to text-cent er mb-5">
        <p class="lead">Tourism and hospitality are thriving industries encompassing many sectors. Including Hotels, Resorts, Restaurants, Travel, Events and Enjoyment. Tourism gives an opportunity for people to understand the culture, civilization etc.
          It is a temporary or short term movement away from the place where a person normally live. </p>
        <p class="lead">Hospitality is a field that focuses on providing accommodations to visitors at Hotels, Motels, Resorts, Cruise ships, Country Clubs, while tourism is focused on providing quality attractions and events.</p>
        <p class="lead">It is very much important to a traveler that the selection of places for visit, accommodations facilities to stay, Restaurants to satisfied availability of food.
          Tourism apps helps Users for planning travel, accommodation bookings route mapping and more. However, these are Just the basic user of Tourism booking apps and More tourist services Can be delivered like to help the
          tourists for the selection of Panoramic and beautiful places, make aware of the Importance of the tourist Centres, Booking Safe Hotels, arrange travel facilities.</p>
        <p class="lead font-weight-bold">So Idukki Tourism Development Society (ITDS) organised with the purpose to assure all </p>
      </div>
      <div class="col-md-6 overflow-hidden d-flex justify-content-center  mb-a uto mt-1">
        <img src="assets/img/hotel/idukki/pexels-nandhu-kumar-13691356.jpg" class="img-fluid shadow rounded-3 mb-5 object-fit-cover overflow-hidden" alt="">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <h3 class="newFont font-weight-noraml">Explore Kerala With ITDS</h3>
        <p>Welcome to Kerala, a land of diverse landscapes, rich cultural heritage, and warm hospitality. Known as "God's Own Country," Kerala captivates visitors with its lush greenery, pristine beaches, tranquil backwaters, and vibrant traditions. Join us on a journey to discover the magic of Kerala with ITDS for unique charm.</p>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-lg-3 col-md-4 ">
        <div class="p-3 text-start ps-0">
          <!-- <div class="icon ">
                         
                         </div> -->
          <img src="assets/img/hotel/idukki/img-20180729-wa0073-largejpg.jpg" class="rounded-2 placeimg object-fit-cover shadow-lg" alt="">
          <h5 class="mt-2 mb-1 font-weight-bold newFont h3">
            Idukki Dam
          </h5>
          <span class="text-md font-weight-noraml"> At the heart of Idukki stands the impressive Idukki Dam, an architectural marvel that graces the landscape with its grandeur. Marvel at the colossal structure and enjoy breathtaking views of the Idukki Reservoir and surrounding hills.</span>
          <div class="mt-2">
            <a href=" " class="text-primary icon-move-right">Explore
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 ">
        <div class="p-3 text-start ps-0">
          <!-- <div class="icon ">
                         
                         </div> -->
          <img src="assets/img/hotel/idukki/vagamon_idukki20131031122133_324_1.jpg" class="rounded-2 placeimg object-fit-cover shadow-lg" alt="">
          <h5 class="mt-2 mb-1 font-weight-bold newFont h3">
            Vagamon
          </h5>
          <span class="text-md font-weight-noraml"> Vagamon is a serene hill station that offers a perfect escape from the hustle and bustle of city life. With its rolling hills, lush meadows, and misty valleys, Vagamon is a paradise for nature lovers, adventure enthusiasts, and peace seekers alike.</span>
          <div class="mt-2">
            <a href="place1" class="text-primary icon-move-right">Explore
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 ">
        <div class="p-3 text-start ps-0">
          <!-- <div class="icon ">
                         
                         </div> -->
          <img src="assets/img/hotel/idukki/green-tea-bud-leaves-green-tea-plantations-morning.jpg" class="rounded-2 placeimg object-fit-cover shadow-lg" alt="">
          <h5 class="mt-2 mb-1 font-weight-bold newFont h3">
            Munnar
          </h5>
          <span class="text-md font-weight-noraml"> Embark on a journey through the undulating hills of Munnar, where vast tea plantations carpet the terrain. Walk amidst the lush greenery, breathe in the crisp mountain air, and witness the meticulous process of tea cultivation.</span>
          <div class="mt-2">
            <a href=" " class="text-primary icon-move-right">Explore
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 ">
        <div class="p-3 text-start ps-0">
          <!-- <div class="icon ">
                         
                         </div> -->
          <img src="assets/img/hotel/idukki/Illickal_Kallu_1152.jpg" class="rounded-2 placeimg object-fit-cover shadow-lg" alt="">
          <h5 class="mt-2 mb-1 font-weight-bold newFont h3">
            Illickal Kallu
          </h5>
          <span class="text-md font-weight-noraml"> Illickal Kallu stands as a testament to the awe-inspiring beauty of nature. With its towering rock formations, lush greenery, and panoramic views, Illickal Kallu beckons travelers to embark on a journey of discovery and tranquility.</span>
          <div class="mt-2">
            <a href="javascript:;" class="text-primary icon-move-right">Explore
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 ">
        <div class="p-3 text-start ps-0">
          <!-- <div class="icon ">
                         
                         </div> -->
          <img src="assets/img/hotel/idukki/parunthupara20140115114558_100_1.jpg" class="rounded-2 placeimg object-fit-cover shadow-lg" alt="">
          <h5 class="mt-2 mb-1 font-weight-bold newFont h3">
            Paruthanpara
          </h5>
          <span class="text-md font-weight-noraml"> Paruthanpara offers a serene escape into the lap of nature. With panoramic views, and landscapes, Paruthanpara is a paradise for nature enthusiasts, photographers, and those seeking solace away from the hustle and bustle of city life.</span>
          <div class="mt-2">
            <a href="javascript:;" class="text-primary icon-move-right">Explore
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 ">
        <div class="p-3 text-start ps-0">
          <!-- <div class="icon ">
                         
                         </div> -->
          <img src="assets/img/hotel/idukki/Kudayathoor.jpg" class="rounded-2 placeimg object-fit-cover shadow-lg" alt="">
          <h5 class="mt-2 mb-1 font-weight-bold newFont h3">
            Kudayathoor
          </h5>
          <span class="text-md font-weight-noraml"> Kudayathoor is a hidden gem waiting to be discovered. With its serene landscapes, pristine water bodies, and warm hospitality, Kudayathoor offers a peaceful escape from the hustle and bustle of city life.</span>
          <div class="mt-2">
            <a href="javascript:;" class="text-primary icon-move-right">Explore
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>


      <div class="col-lg-3 col-md-4 ">
        <div class="p-3 text-start ps-0">
          <!-- <div class="icon ">
                         
                         </div> -->
          <img src="assets/img/hotel/idukki/marayoor_morning-desktop.jpg" class="rounded-2 placeimg object-fit-cover shadow-lg" alt="">
          <h5 class="mt-2 mb-1 font-weight-bold newFont h3">
            Marayoor
          </h5>
          <span class="text-md font-weight-noraml">Marayoor is a charming paradise that seamlessly blends nature's splendor with rich cultural heritage. With its sprawling sandalwood forests, ancient dolmens, and lush greenery, Marayoor beckons travelers to explore its treasures and immerse themselves in its timeless allure.</span>
          <div class="mt-2">
            <a href="javascript:;" class="text-primary icon-move-right">Explore
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div> 
      <div class="col-lg-3 col-md-4 ">
        <div class="p-3 text-start ps-0">
          <!-- <div class="icon ">
                         
                         </div> -->
          <img src="assets/img/hotel/idukki/Anakulam.jpeg" class="rounded-2 placeimg object-fit-cover shadow-lg" alt="">
          <h5 class="mt-2 mb-1 font-weight-bold newFont h3">
            Anakulam
          </h5>
          <span class="text-md font-weight-noraml">Escape the hustle and bustle of city life and immerse yourself in the pristine beauty of Anakulam, a charming village nestled in the heart of the Idukki district in Kerala, India. Surrounded by verdant forests, gushing streams, and majestic mountains.</span>
          <div class="mt-2">
            <a href="javascript:;" class="text-primary icon-move-right">Explore
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 ">
        <div class="p-3 text-start ps-0">
          <!-- <div class="icon ">
                         
                         </div> -->
          <img src="assets/img/hotel/idukki/Ramakkalmedu2022-09-14.jpg" class="rounded-2 placeimg object-fit-cover shadow-lg" alt="">
          <h5 class="mt-2 mb-1 font-weight-bold newFont h3">
            Ramakkalmedu
          </h5>
          <span class="text-md font-weight-noraml">Ramakkalmedu is a tranquil hill station that offers a perfect blend of natural beauty and cultural heritage. With its sweeping vistas, verdant meadows, and ancient legends, Ramakkalmedu invites travelers to embark on a journey of discovery and serenity.</span>
          <div class="mt-2">
            <a href="javascript:;" class="text-primary icon-move-right">Explore
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 ">
        <div class="p-3 text-start ps-0">
          <!-- <div class="icon ">
                         
                         </div> -->
          <img src="assets/img/hotel/idukki/thommankuthu-falls.jpg" class="rounded-2 placeimg object-fit-cover shadow-lg" alt="">
          <h5 class="mt-2 mb-1 font-weight-bold newFont h3">
            Thommankuthu
          </h5>
          <span class="text-md font-weight-noraml">Thommankuthu is a breathtaking eco-tourism destination that captivates visitors with its cascading waterfalls, lush greenery, and tranquil ambiance. Thommankuthu promises an unforgettable journey into the heart of nature's splendor.</span>
          <div class="mt-2">
            <a href="javascript:;" class="text-primary icon-move-right">Explore
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div> 
      <div class="col-lg-3 col-md-4 ">
        <div class="p-3 text-start ps-0">
          <!-- <div class="icon ">
                         
                         </div> -->
          <img src="assets/img/hotel/idukki/Vattavada.jpg" class="rounded-2 placeimg object-fit-cover shadow-lg" alt="">
          <h5 class="mt-2 mb-1 font-weight-bold newFont h3">
            Vattavada
          </h5>
          <span class="text-md font-weight-noraml">Vattavada is renowned for its sprawling farms, carpeted with a vibrant patchwork of vegetables and fruits. From lush green terraces to vibrant shades of red and orange, the agricultural vistas here are nothing short of spectacular. </span>
          <div class="mt-2">
            <a href="javascript:;" class="text-primary icon-move-right">Explore
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="text-center my-2">
        <a href="all_places">
          <button class="btn btn-dark  rounded-pill">see more</button>
        </a>

      </div>

    </div>
  </div>
</section>

<section class="pt-3 pb-7 bg-dimwhite position-relative">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto text-center">
        <h6 class="glcolor-secondary text-uppercase"> Team</h6>
        <h1 class="glcolor-primary mb-3 mt-2 newFont">Building The Future</h1>
      </div>
    </div>
    <div class="row mt-md-5 mt-4">
      <div class="col-lg-3 col-6  mb-4">
        <div class="card shadow-xl">
          <div class="card-body text-center bg-white border-radius-lg p-3">
            <a href="javascript:;">
              <img class="w-100 border-radius-md" src="assets/img/hotel/team/Dr. K Soman.jpg" alt="card image">
            </a>
            <h5 class="mt-3 mb-1 d-md-block d-none">Dr. K Soman</h5>
            <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker">Dr. K Soman</p>
            <p class="mb-0 text-xs font-weight-bolder text-info text-gradient text-uppercase">Chairman</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6  mb-4">
        <div class="card shadow-xl">
          <div class="card-body text-center bg-white border-radius-lg p-3">
            <a href="javascript:;">
              <img class="w-100 border-radius-md" src="assets/img/hotel/team/Lalu Chakanal.jpg" alt="card image">
            </a>
            <h5 class="mt-3 mb-1 d-md-block d-none">Lalu Chakanal</h5>
            <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker">Lalu Chakanal</p>
            <p class="mb-0 text-xs font-weight-bolder text-info text-gradient text-uppercase">Secretary </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6  mb-4">
        <div class="card shadow-xl">
          <div class="card-body text-center bg-white border-radius-lg p-3">
            <a href="javascript:;">
              <img class="w-100 border-radius-md" src="assets/img/hotel/team/Jose Vazhuthanappilly.jpg" alt="card image">
            </a>
            <h5 class="mt-3 mb-1 d-md-block d-none">Jose Vazhuthanappilly</h5>
            <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker">Jose Vazhuthanappilly</p>
            <p class="mb-0 text-xs font-weight-bolder text-info text-gradient text-uppercase">Treasurer</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6  mb-4">
        <div class="card shadow-xl">
          <div class="card-body text-center bg-white border-radius-lg p-3">
            <a href="javascript:;">
              <img class="w-100 border-radius-md" src="assets/img/hotel/team/Nicy Thomas.jpg" alt="card image">
            </a>
            <h5 class="mt-3 mb-1 d-md-block d-none">Nicy Thomas</h5>
            <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker">Nicy Thomas</p>
            <p class="mb-0 text-xs font-weight-bolder text-info text-gradient text-uppercase">Director</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6  mb-4">
        <div class="card shadow-xl">
          <div class="card-body text-center bg-white border-radius-lg p-3">
            <a href="javascript:;">
              <img class="w-100 border-radius-md" src="assets/img/hotel/team/Tenny Jose.jpg" alt="card image">
            </a>
            <h5 class="mt-3 mb-1 d-md-block d-none">Tenny Jose</h5>
            <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker">Tenny Jose</p>
            <p class="mb-0 text-xs font-weight-bolder text-info text-gradient text-uppercase">Director</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6  mb-4">
        <div class="card shadow-xl">
          <div class="card-body text-center bg-white border-radius-lg p-3">
            <a href="javascript:;">
              <img class="w-100 border-radius-md" src="assets/img/hotel/team/Mathew Joseph.jpg" alt="card image">
            </a>
            <h5 class="mt-3 mb-1 d-md-block d-none">Mathew Joseph</h5>
            <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker">Mathew Joseph</p>
            <p class="mb-0 text-xs font-weight-bolder text-info text-gradient text-uppercase">Director</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6  mb-4">
        <div class="card shadow-xl">
          <div class="card-body text-center bg-white border-radius-lg p-3">
            <a href="javascript:;">
              <img class="w-100 border-radius-md" src="assets/img/hotel/team/Biju Varghese.jpg" alt="card image">
            </a>
            <h5 class="mt-3 mb-1 d-md-block d-none">Biju Varghese</h5>
            <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker">Biju Varghese</p>
            <p class="mb-0 text-xs font-weight-bolder text-info text-gradient text-uppercase">Director</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6  mb-4">
        <div class="card shadow-xl">
          <div class="card-body text-center bg-white border-radius-lg p-3">
            <a href="javascript:;">
              <img class="w-100 border-radius-md" src="assets/img/hotel/team/V N MOHANAN.jpg" alt="card image">
            </a>
            <h5 class="mt-3 mb-1 d-md-block d-none">V N Mohanan</h5>
            <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker">V N Mohanan</p>
            <p class="mb-0 text-xs font-weight-bolder text-info text-gradient text-uppercase">Director</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6  mb-4">
        <div class="card shadow-xl">
          <div class="card-body text-center bg-white border-radius-lg p-3">
            <a href="javascript:;">
              <img class="w-100 border-radius-md" src="assets/img/hotel/team/SHEEBA THOMY.jpg" alt="card image">
            </a>
            <h5 class="mt-3 mb-1 d-md-block d-none">Sheeba Tomy</h5>
            <p class="mb-1 d-md-none d-block text-sm font-weight-bold text-darker">Sheeba Tomy</p>
            <p class="mb-0 text-xs font-weight-bolder text-info text-gradient text-uppercase">Director</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="pt- 6 pb-0 bg-dimwhite position-relative">
  <div class="container">
    <div class="row py-5">
      <div class="col-md-8 mx-auto text-center">
        <h6 class="glcolor-secondary text-uppercase">Pick a vibe and explore the top destinations</h6>
        <h1 class="glcolor-primary mb-3 mt-2 newFont">Top Hotels in Kerala</h1> 
      </div>
    </div>
    <div class="row mt-n4">
      <div class="col-lg-4 mt-4">
        <div class="row">
          <div class=" col-6">
            <img class="img w-100 border-radius-lg shadow-lg" src="assets/img/hotel/resort-img/9.jpg" alt="curved11">
          </div>
          <div class=" col-6 my-a uto">
            <h4> <a href="javascript:;" class="text-dark font-weight-bold">Hotel Name</a> </h4>
            <p class="text-sm"> place,state</p>
            <div class="">
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-light"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-4">
        <div class="row">
          <div class=" col-6">
            <img class="img w-100 border-radius-lg shadow-lg" src="assets/img/hotel/resort-img/2.jpg" alt="curved11">
          </div>
          <div class=" col-6 my-a uto">
            <h4> <a href="javascript:;" class="text-dark font-weight-bold">Hotel Name</a> </h4>
            <p class="text-sm"> place,state</p>
            <div class="">
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-light"></i></span>
              <span><i class="fa fa-star text-light"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-4">
        <div class="row">
          <div class=" col-6">
            <img class="img w-100 border-radius-lg shadow-lg" src="assets/img/hotel/resort-img/3.jpg" alt="curved11">
          </div>
          <div class=" col-6 my-a uto">
            <h4> <a href="javascript:;" class="text-dark font-weight-bold">Hotel Name</a> </h4>
            <p class="text-sm"> place,state</p>
            <div class="">
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-light"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-4">
        <div class="row">
          <div class=" col-6">
            <img class="img w-100 border-radius-lg shadow-lg" src="assets/img/hotel/resort-img/4.jpg" alt="curved11">
          </div>
          <div class=" col-6 my-a uto">
            <h4> <a href="javascript:;" class="text-dark font-weight-bold">Hotel Name</a> </h4>
            <p class="text-sm"> place,state</p>
            <div class="">
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-light"></i></span>
              <span><i class="fa fa-star text-light"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-4">
        <div class="row">
          <div class=" col-6">
            <img class="img w-100 border-radius-lg shadow-lg" src="assets/img/hotel/resort-img/5.jpg" alt="curved11">
          </div>
          <div class=" col-6 my-a uto">
            <h4> <a href="javascript:;" class="text-dark font-weight-bold">Hotel Name</a> </h4>
            <p class="text-sm"> place,state</p>
            <div class="">
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-light"></i></span>
              <span><i class="fa fa-star text-light"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-4">
        <div class="row">
          <div class=" col-6">
            <img class="img w-100 border-radius-lg shadow-lg" src="assets/img/hotel/resort-img/6.jpg" alt="curved11">
          </div>
          <div class=" col-6 my-a uto">
            <h4> <a href="javascript:;" class="text-dark font-weight-bold">Hotel Name</a> </h4>
            <p class="text-sm"> place,state</p>
            <div class="">
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-light"></i></span>
              <span><i class="fa fa-star text-light"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-4">
        <div class="row">
          <div class=" col-6">
            <img class="img w-100 border-radius-lg shadow-lg" src="assets/img/hotel/resort-img/7.jpg" alt="curved11">
          </div>
          <div class=" col-6 my-a uto">
            <h4> <a href="javascript:;" class="text-dark font-weight-bold">Hotel Name</a> </h4>
            <p class="text-sm"> place,state</p>
            <div class="">
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-light"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-4">
        <div class="row">
          <div class=" col-6">
            <img class="img w-100 border-radius-lg shadow-lg" src="assets/img/hotel/resort-img/8.jpg" alt="curved11">
          </div>
          <div class=" col-6 my-a uto">
            <h4> <a href="javascript:;" class="text-dark font-weight-bold">Hotel Name</a> </h4>
            <p class="text-sm"> place,state</p>
            <div class="">
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-warning"></i></span>
              <span><i class="fa fa-star text-light"></i></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<section class="py-7 bg-dimwhite position-relative">
  <div class="container">
    <div class="row ">
      <div class="col-md-8 mx-auto text-center">
        <h6 class="glcolor-secondary text-uppercase">SERVICE PROVIDERS</h6>
        <h1 class="glcolor-primary mb-3 mt-2 newFont">Trip Essentials</h1>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-4 mb-lg-0 mb-4">

        <a href="javascript:;">
          <div class="card card-background move-on-hover mb-4">
            <div class="full-background" style="background-image: url('assets/img/hotel/service/luxury-chill-bedroom-hotel.jpg')">
            </div>
            <div class="card-body pt-12">
              <h3 class="text-white newFont">Homestays</h3>
              <p>Our homestays offer a cozy retreat, combining the warmth of a home with the allure of Idukki's natural beauty. Wake up to the melody of birdsong and the gentle rustle of leaves as you relax in the comfort of a home away from home.</p>
            </div>
          </div>
        </a>


        <a href="javascript:;">
          <div class="card card-background move-on-hover">
            <div class="full-background" style="background-image: url('assets/img/hotel/service/restaurant-interior.jpg')">
            </div>
            <div class="card-body pt-12">
              <h3 class="text-white newFont">Hotels</h3>
              <p>Welcome to our haven of comfort nestled in the breathtaking landscapes of Idukki. Immerse yourself in the natural beauty and serenity that define our hotel, offering a perfect escape from the hustle and bustle of city life.</p>
            </div>
          </div>
        </a>

      </div>
      <div class="col-lg-4 mb-lg-0 mb-4">

        <a href="javascript:;">
          <div class="card card-background move-on-hover mb-4">
            <div class="full-background" style="background-image: url('assets/img/hotel/service/property-2164-profile-3132-20180625145557.jpg')">
            </div>
            <div class="card-body pt-12">
              <h3 class="text-white newFont">Resorts</h3>
              <p>Our resorts are sanctuaries of relaxation. Unwind by the infinity pool, surrender to rejuvenating spa treatments, or simply revel in the peaceful ambiance of our beautifully landscaped gardens. Every moment is an opportunity to rejuvenate your mind, body, and soul. </p>
            </div>
          </div>
        </a>


        <a href="javascript:;">
          <div class="card card-background move-on-hover">
            <div class="full-background" style="background-image: url('assets/img/hotel/service/house-thailand-style.jpg')">
            </div>
            <div class="card-body pt-12">
              <h3 class="text-white newFont">Serviced Villas</h3>
              <p>Wake up to the breathtaking sight of mist-covered hills and the soothing sounds of nature. Our villas are strategically positioned to offer panoramic views, providing a constant connection to the serene beauty of Idukki.</p>
            </div>
          </div>
        </a>

      </div>
      <div class="col-lg-4">

        <a href="javascript:;">
          <div class="card card-background move-on-hover mb-4">
            <div class="full-background" style="background-image: url('assets/img/hotel/service/26.jpg')">
            </div>
            <div class="card-body pt-12">
              <h3 class="text-white newFont">Tour Operators</h3>
              <p>Benefit from the expertise of our local guides who possess an in-depth knowledge of Idukki's history, culture, and hidden gems. Our commitment to excellence ensures that every aspect of your journey meets global standards of comfort and safety.</p>
            </div>
          </div>
        </a>


        <a href="javascript:;">
          <div class="card card-background move-on-hover">
            <div class="full-background" style="background-image: url('assets/img/hotel/service/shirodhara.png')">
            </div>
            <div class="card-body pt-12">
              <h3 class="text-white newFont">Ayurveda Center</h3>
              <p>Indulge in a range of Ayurvedic treatments, including rejuvenating massages, detoxifying therapies, and specialized wellness rituals. Each session is conducted by skilled therapists under the guidance of experienced Ayurvedic practitioners.</p>
            </div>
          </div>
        </a>

      </div>
    </div>
  </div>
</section>

<script>
  // Sample suggestion data
  const initialSuggestions = ['apple', 'banana', 'orange'];
  const allSuggestions = ['apple', 'banana', 'orange', 'pineapple', 'grape'];

  // Get input element and suggestion box
  const input = document.getElementById('searchInput');
  const suggestionBox = document.getElementById('suggestions');

  // Flag to determine if initial suggestions have been shown
  let initialSuggestionsShown = true;

  // Event listener for input
  input.addEventListener('input', function() {
    const userInput = input.value.toLowerCase();
    let matchedSuggestions;

    if (userInput.trim() === '') {
      // Show initial suggestions only once when input is empty or clicked
      if (!initialSuggestionsShown || document.activeElement === input) {
        matchedSuggestions = initialSuggestions;
        initialSuggestionsShown = true;
      } else {
        matchedSuggestions = [];
      }
    } else {
      // Filter suggestions based on the typed input
      matchedSuggestions = allSuggestions.filter(suggestion =>
        suggestion.toLowerCase().startsWith(userInput)
      );
    }

    displaySuggestions(matchedSuggestions);
  });

  // Function to display suggestions
  function displaySuggestions(suggestions) {
    suggestionBox.innerHTML = '';
    suggestions.forEach(suggestion => {
      const suggestionElement = document.createElement('div');
      suggestionElement.classList.add('suggestion');
      suggestionElement.textContent = suggestion;
      suggestionElement.addEventListener('click', function() {
        input.value = suggestion;
        suggestionBox.innerHTML = '';
      });
      suggestionBox.appendChild(suggestionElement);
    });
  }
</script>