 <style>
     /* .upload__box {
         padding: 40px;
     } */

     .upload__inputfile {
         width: .1px;
         height: .1px;
         opacity: 0;
         overflow: hidden;
         position: absolute;
         z-index: -1;
     }

     .upload__btn {
         display: inline-block;
         font-weight: 600;
         color: #fff;
         text-align: center;
         min-width: 116px;
         padding: 5px;
         transition: all .3s ease;
         cursor: pointer;
         border: 2px solid;
         background-color: #4045ba;
         border-color: #4045ba;
         border-radius: 10px;
         line-height: 26px;
         font-size: 14px;
     }

     .upload__btn:hover {
         background-color: unset;
         color: #4045ba;
         transition: all .3s ease;
     }

     .upload__btn-box {
         margin-bottom: 0px;
         display: flex;
         justify-content: start;

     }

     .upload__img-wrap {
         display: flex;
         flex-wrap: wrap;
         justify-content: center;
         /* margin: 0 -10px; */
     }

     .upload__img-box {
         width: 200px;
         padding: 0 10px;
         margin-bottom: 12px;
     }

     .upload__img-close {
         width: 24px;
         height: 24px;
         border-radius: 50%;
         background-color: rgba(0, 0, 0, 0.5);
         position: absolute;
         top: 10px;
         right: 10px;
         text-align: center;
         line-height: 24px;
         z-index: 1;
         cursor: pointer;
     }

     .upload__img-close:after {
         content: '\2716';
         font-size: 14px;
         color: white;
     }

     .img-bg {
         background-repeat: no-repeat;
         background-position: center;
         background-size: cover;
         position: relative;
         padding-bottom: 100%;
         border-radius: 10px;
     }
 </style>

 <div class="container-fluid py-1 mb-6 vh-100">
     <div class="row">

         <div class="col-lg-3">
             <div class="card position-sticky top-1">
                 <ul class="nav flex-column bg-white border-radius-lg p-3">
                     <li class="nav-item ">
                         <a class="nav-link text-dark d-flex" data-scroll href="#facilitys">
                             <i class="material-icons text-lg me-2">receipt_long</i>
                             <span class="text-sm">Facilitys</span>
                         </a>
                     </li>
                     <li class="nav-item ">
                         <a class="nav-link text-dark d-flex" data-scroll href="#near_tourist_place">
                             <i class="material-icons text-lg me-2">receipt_long</i>
                             <span class="text-sm">Near Tourist Place</span>
                         </a>
                     </li>
                     <li class="nav-item ">
                         <a class="nav-link text-dark d-flex" data-scroll href="#room_viewpoints">
                             <i class="material-icons text-lg me-2">receipt_long</i>
                             <span class="text-sm">Viewpoints</span>
                         </a>
                     </li>
                     <li class="nav-item pt-2">
                         <a class="nav-link text-dark d-flex" data-scroll href="#complimentary">
                             <i class="material-icons text-lg me-2">receipt_long</i>
                             <span class="text-sm">Complimentary</span>
                         </a>
                     </li>
                     <li class="nav-item pt-2">
                         <a class="nav-link text-dark d-flex" data-scroll href="#checkinCheckout">
                             <i class="material-icons text-lg me-2">receipt_long</i>
                             <span class="text-sm">Checkin & Checkout</span>
                         </a>
                     </li>
                     <li class="nav-item pt-2">
                         <a class="nav-link text-dark d-flex" data-scroll href="#rules">
                             <i class="material-icons text-lg me-2">receipt_long</i>
                             <span class="text-sm">Rules</span>
                         </a>
                     </li>
                     <li class="nav-item pt-2">
                         <a class="nav-link text-dark d-flex" data-scroll href="#contact">
                             <i class="material-icons text-lg me-2">receipt_long</i>
                             <span class="text-sm">Contact</span>
                         </a>
                     </li>
                     <li class="nav-item pt-2">
                         <a class="nav-link text-dark d-flex" data-scroll href="#address">
                             <i class="material-icons text-lg me-2">receipt_long</i>
                             <span class="text-sm">Address</span>
                         </a>
                     </li>
                     <li class="nav-item pt-2">
                         <a class="nav-link text-dark d-flex" data-scroll href="#room_add">
                             <i class="material-icons text-lg me-2">receipt_long</i>
                             <span class="text-sm">Rooms </span>
                         </a>
                     </li>
                     <li class="nav-item pt-2">
                         <a class="nav-link text-dark d-flex" data-scroll href="#payment">
                             <i class="material-icons text-lg me-2">receipt_long</i>
                             <span class="text-sm">Payment</span>
                         </a>
                     </li>
                     <li class="nav-item pt-2">
                         <a class="nav-link text-dark d-flex" data-scroll href="#agreement">
                             <i class="material-icons text-lg me-2">receipt_long</i>
                             <span class="text-sm">Terms and conditions agreement</span>
                         </a>
                     </li>
                 </ul>
             </div>
         </div>

         <div class="col-lg-9 mt-lg-0 mt-4">

             <form action="">
                 <div class="row  ">
                     <div class="col-12  m-auto ">
                         <div class="card" id="facilitys">
                             <div class="card-body">

                                 <div class="border-radius-xl bg-white">

                                     <div class="d-lg-flex">
                                         <div class="mb-2">
                                             <h5 class="font-weight-bolder mb-0"> Facilitys </h5>
                                             <p class="mb-0 text-sm">Select the Facilitys which is available in your hotel.</p>
                                         </div>

                                         <div class="ms-auto my-auto mt-lg-0 mt-4">
                                             <div class="ms-auto my-auto">
                                                 <a href="add_hotel_add_facility"><button class="btn bg-gradient-dark btn-sm mb-0" type="button">+&nbsp;Facilitys </button></a>

                                             </div>
                                         </div>
                                     </div>

                                     <div class=" ">

                                         <div class="row mt-3">
                                             <div class="col-12 col-sm-6">
                                                 <div class="form-check ps-2">
                                                     <input class="form-check-input" type="checkbox" value="" id="customCheck1">
                                                     <label class="custom-control-label" for="customCheck1">Check All Facility </label>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="card mt-1">
                                             <div class="card-body ">
                                                 <div class="d-lg-flex">
                                                     <div>
                                                         <h6 class="font-weight-bolder mb-0">Bathroom</h6>

                                                     </div>

                                                     <div class="ms-auto my-auto mt-lg-0 mt-4">
                                                         <div class="ms-auto my-auto">

                                                             <a href="add_hotel_add_facility"><button class="btn bg-gradient-light btn-sm mb-0" type="button">Edit</button></a>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="row mt-3 p-0">
                                                     <div class="col-12 p-0 ">
                                                         <div class="form-check  ps-2 ">
                                                             <input class="form-check-input" type="checkbox" value="" id="customCheck6">
                                                             <label class="custom-control-label " for="customCheck6">Check All</label>
                                                         </div>
                                                         <div class="d-flex flex-wrap">

                                                             <div class="form-check  ps-2 col-12 col-md-3 ">
                                                                 <input class="form-check-input" type="checkbox" value="" id="customCheck2">
                                                                 <label class="custom-control-label " for="customCheck2">Bath tub </label>
                                                             </div>

                                                             <div class="form-check  ps-2 col-12 col-md-3">
                                                                 <input class="form-check-input" type="checkbox" value="" id="customCheck3">
                                                                 <label class="custom-control-label " for="customCheck3">Shampoo </label>
                                                             </div>

                                                             <div class="form-check  ps-2 col-12 col-md-3">
                                                                 <input class="form-check-input" type="checkbox" value="" id="customCheck4">
                                                                 <label class="custom-control-label " for="customCheck4">Cleaning Products </label>
                                                             </div>

                                                             <div class="form-check  ps-2 col-12 col-md-3">
                                                                 <input class="form-check-input" type="checkbox" value="" id="customCheck5">
                                                                 <label class="custom-control-label " for="customCheck5">Body Soap </label>
                                                             </div>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="card mt-2 ">
                                             <div class="card-body">
                                                 <div class="d-lg-flex">
                                                     <div>
                                                         <h6 class="font-weight-bolder mb-0">Bedroom and laundry</h6>

                                                     </div>

                                                     <div class="ms-auto my-auto mt-lg-0 mt-4">
                                                         <div class="ms-auto my-auto">

                                                             <a href="add_hotel_add_facility"><button class="btn bg-gradient-light btn-sm mb-0" type="button">Edit</button></a>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="row mt-3 p-0">
                                                     <div class="col-12 p-0">
                                                         <div class="form-check ps-2">
                                                             <input class="form-check-input" type="checkbox" value="" id="customCheck7">
                                                             <label class="custom-control-label " for="customCheck7">Check All</label>
                                                         </div>
                                                         <div class="d-flex flex-wrap">

                                                             <div class="form-check  ps-2 col-12 col-md-3">
                                                                 <input class="form-check-input" type="checkbox" value="" id="customCheck8">
                                                                 <label class="custom-control-label " for="customCheck8">Essentials </label>
                                                             </div>

                                                             <div class="form-check  ps-2 col-12 col-md-3">
                                                                 <input class="form-check-input" type="checkbox" value="" id="customCheck9">
                                                                 <label class="custom-control-label " for="customCheck9">Hangers </label>
                                                             </div>

                                                             <div class="form-check  ps-2 col-12 col-md-3">
                                                                 <input class="form-check-input" type="checkbox" value="" id="customCheck10">
                                                                 <label class="custom-control-label " for="customCheck10">Extra pillows and blankets</label>
                                                             </div>

                                                             <div class="form-check  ps-2 col-12 col-md-3">
                                                                 <input class="form-check-input" type="checkbox" value="" id="customCheck11">
                                                                 <label class="custom-control-label " for="customCheck11">Bed linen </label>
                                                             </div>

                                                             <div class="form-check  ps-2 col-12 col-md-3">
                                                                 <input class="form-check-input" type="checkbox" value="" id="customCheck12">
                                                                 <label class="custom-control-label " for="customCheck12">Iron </label>
                                                             </div>

                                                             <div class="form-check  ps-2 col-12 col-md-3">
                                                                 <input class="form-check-input" type="checkbox" value="" id="customCheck13">
                                                                 <label class="custom-control-label " for="customCheck13">Clothes drying rack </label>
                                                             </div>

                                                             <div class="form-check  ps-2 col-12 col-md-3">
                                                                 <input class="form-check-input" type="checkbox" value="" id="customCheck14">
                                                                 <label class="custom-control-label " for="customCheck14">Clothes storage </label>
                                                             </div>

                                                             <div class="form-check  ps-2 col-12 col-md-3">
                                                                 <input class="form-check-input" type="checkbox" value="" id="customCheck15">
                                                                 <label class="custom-control-label " for="customCheck15">1-Bedroom </label>
                                                             </div>

                                                             <div class="form-check  ps-2 col-12 col-md-3">
                                                                 <input class="form-check-input" type="checkbox" value="" id="customCheck16">
                                                                 <label class="custom-control-label " for="customCheck16">2-Bedroom </label>
                                                             </div>

                                                             <div class="form-check  ps-2 col-12 col-md-3">
                                                                 <input class="form-check-input" type="checkbox" value="" id="customCheck17">
                                                                 <label class="custom-control-label " for="customCheck17">3-Bedroom </label>
                                                             </div>

                                                             <div class="form-check  ps-2 col-12 col-md-3">
                                                                 <input class="form-check-input" type="checkbox" value="" id="customCheck18">
                                                                 <label class="custom-control-label " for="customCheck18">4-Bedroom </label>
                                                             </div>

                                                             <div class="form-check  ps-2 col-12 col-md-3">
                                                                 <input class="form-check-input" type="checkbox" value="" id="customCheck19">
                                                                 <label class="custom-control-label " for="customCheck19">5-Bedroom </label>
                                                             </div>

                                                             <div class="form-check  ps-2 col-12 col-md-3">
                                                                 <input class="form-check-input" type="checkbox" value="" id="customCheck20">
                                                                 <label class="custom-control-label " for="customCheck20">6-Bedroom </label>
                                                             </div>

                                                             <div class="form-check  ps-2 col-12 col-md-3">
                                                                 <input class="form-check-input" type="checkbox" value="" id="customCheck21">
                                                                 <label class="custom-control-label " for="customCheck21">7-Bedroom </label>
                                                             </div>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="card my-4" id="near_tourist_place">
                             <div class="card-body">

                                 <div class="border-radius-xl bg-white">

                                     <div class="d-lg-flex">
                                         <div class="mb-2">
                                             <h5 class="font-weight-bolder mb-0"> Tourist Place </h5>
                                             <p class="mb-0 text-sm">Select the Near Tourist Place which is available in your hotel.</p>
                                         </div>

                                         <div class="ms-auto my-auto mt-lg-0 mt-4">
                                             <div class="ms-auto my-auto">
                                                 <button class="btn bg-gradient-primary btn-sm mb-0" type="button" onclick="addNearTouristPlace()">+&nbsp; Add </button></a>

                                             </div>
                                         </div>
                                     </div>

                                     <div class="">

                                         <div class="near-tourist-place-container ">
                                             <div class="row mt-3  near-tourist-place">
                                                 <div class="col-12 col-sm-6 ">
                                                     <div class="input-grou p input-group-stati c ">
                                                         <label class=" ">Tourist Place</label>
                                                         <select class="form-control select-box border ps-2" name=" " id=" ">
                                                             <option class="py-3" value="" selected disabled>Select Tourist Place </option>
                                                             <option value="">1</option>
                                                             <option value="">2</option>
                                                         </select>
                                                     </div>
                                                 </div>
                                                 <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                     <div class="input-grou p input-group-stati c ">
                                                         <label class=" ">KM Range from Hotel</label>
                                                         <select class="form-control select-box border ps-2" name=" " id=" ">
                                                             <option value="" selected disabled>Select KM Range</option>
                                                             <option value="">1</option>
                                                             <option value="">2</option>
                                                         </select>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="card my-4" id="room_viewpoints">
                             <div class="card-body">

                                 <div class="border-radius-xl bg-white">

                                     <div class="d-lg-flex">
                                         <div class="mb-2">
                                             <h5 class="font-weight-bolder mb-0"> Viewpoints </h5>
                                             <p class="mb-0 text-sm">Select the Room Viewpoints Place which is available in your hotel.</p>
                                         </div>

                                         <div class="ms-auto my-auto mt-lg-0 mt-4">
                                             <div class="ms-auto my-auto">
                                                 <button class="btn bg-gradient-primary btn-sm mb-0" type="button" onclick="addRoomViewpoints()">+&nbsp; Add </button></a>

                                             </div>
                                         </div>
                                     </div>

                                     <div class="">

                                         <div class=" room-viewpoints-place-container ">
                                             <div class="row mt-3  room-viewpoints-place">
                                                 <div class="col-12 col-sm-6  ">
                                                     <div class="input-grou p input-group-stati c ">
                                                         <label class=" ">Viewpoints</label>
                                                         <select class="form-control select-box border ps-2" name=" " id=" ">
                                                             <option class="py-3" value="" selected disabled>Select Viewpoints </option>
                                                             <option value="">1</option>
                                                             <option value="">2</option>
                                                         </select>
                                                     </div>
                                                 </div>
                                                 <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                     <div class="input-grou p input-group-stati c ">
                                                         <label class=" ">KM Range from Hotel</label>
                                                         <select class="form-control select-box border ps-2" name=" " id=" ">
                                                             <option value="" selected disabled>Select KM Range</option>
                                                             <option value="">1</option>
                                                             <option value="">2</option>
                                                         </select>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="card my-4" id="complimentary">
                             <div class="card-body">

                                 <div class="border-radius-xl bg-white">

                                     <div class="d-lg-flex">
                                         <div class="mb-2">
                                             <h5 class="font-weight-bolder mb-0"> Complimentary </h5>
                                             <p class="mb-0 text-sm">Add your complimentary</p>
                                         </div>
                                     </div>

                                     <div class="row ">
                                         <div class="col-md-12">
                                             <ul class="list-inline">
                                                 <li class="list-inline-item mt-2">
                                                     <button type="button" class="btn btn-lg btn-outline border px-4 w-100">Campfire <i class=" ms-3 material-symbols-outlined text-md  " title="Remove Campfire" onclick="removeItem(this)">close</i>

                                                     </button>
                                                 </li>
                                                 <li class="list-inline-item mt-2">
                                                     <button type="button" class="btn btn-lg btn-outline border px-4 w-100">Breakfast <i class=" ms-3 material-symbols-outlined text-md" title="Remove Breakfast" onclick="removeItem(this)">close</i>

                                                     </button>
                                                 </li>
                                                 <li class="list-inline-item mt-2">
                                                     <button type="button" class="btn btn-lg btn-outline border px-4 w-100">Barbeque <i class=" ms-3 material-symbols-outlined text-md" title="Remove Barbeque" onclick="removeItem(this)">close</i>

                                                     </button>
                                                 </li>
                                                 <li class="list-inline-item mt-2">
                                                     <button type="button" class="btn btn-lg btn-outline border px-4 w-100">Jim <i class=" ms-3 material-symbols-outlined text-md" title="Remove Jim" onclick="removeItem(this)">close</i>

                                                     </button>
                                                 </li>
                                             </ul>
                                             <p class="p-main text-primary font-weight-bold text-decoration-underline d-block mt-4 cursor-pointer" onclick="moreComp(this)">Missing items?</p>
                                             <div class="w-100 mt-4 d-none">
                                                 <ul class="list-unstyled">
                                                     <li>
                                                         <div class="d-flex border form-control p-0 mb-3">
                                                             <input type="text" class="form-control border-0 bg-transparent d-block px-3" placeholder="Item name" name=" ">
                                                             <button class="btn btn-default border-0 me-2 mb-0 ms-auto" type="button" onclick="moreCompField(this)"><i class="material-symbols-outlined">add</i></button>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="card my-4" id="checkinCheckout">
                             <div class="card-body">

                                 <div class="border-radius-xl bg-white">

                                     <div class="d-lg-flex">
                                         <div class="mb-2">
                                             <h5 class="font-weight-bolder mb-0"> Checkin & Checkout </h5>
                                             <p class="mb-0 text-sm">Please add checkin and checkout details</p>
                                         </div>
                                     </div>

                                     <div class="row my-3">
                                         <div class="col-12 col-sm-6">
                                             <div class="input-group input-group-static ">
                                                 <label class=" ">Checkin</label>
                                                 <input class="  form-control" type="time" />
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                             <div class="input-group input-group-static ">
                                                 <label class=" ">Checkout</label>
                                                 <input class="  form-control" type="time" />
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </div>

                         <div class="card my-4" id="rules">
                             <div class="card-body">

                                 <div class="border-radius-xl bg-white">

                                     <div class="d-lg-flex">
                                         <div class="mb-2">
                                             <h5 class="font-weight-bolder mb-0"> Rules </h5>
                                             <p class="mb-0 text-sm">Write your property rules</p>
                                         </div>
                                     </div>

                                     <div class="row my-3">
                                         <div class="col-12">
                                             <div class="input-group input-group-static ">
                                                 <label class=" ">Write your property rules</label>
                                                 <textarea class="form-control" rows="5" placeholder="" spellcheck="true"></textarea>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </div>

                         <div class="card my-4" id="contact">
                             <div class="card-body">

                                 <div class="border-radius-xl bg-white">

                                     <div class="d-lg-flex">
                                         <div class="mb-2">
                                             <h5 class="font-weight-bolder mb-0"> Contact </h5>
                                             <p class="mb-0 text-sm">Enter the contact information </p>
                                         </div>
                                     </div>

                                     <div class="row mt-3">
                                         <p class="text-md font-weight-bolder">Contact person 1</p>
                                         <div class="col-12 col-sm-6">
                                             <div class="input-group input-group-outline  ">
                                                 <label class="form-label"> Name </label>
                                                 <input class="  form-control" type="text" placeholder=" " />
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                             <div class="input-group input-group-outline ">
                                                 <label class="form-label">Mobile Number</label>
                                                 <input class="  form-control" type="text" placeholder=" " />
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row mt-3">
                                         <p class="text-md font-weight-bolder">Contact person 2</p>
                                         <div class="col-12 col-sm-6">
                                             <div class="input-group input-group-outline  ">
                                                 <label class="form-label"> Name </label>
                                                 <input class="  form-control" type="text" placeholder=" " />
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                             <div class="input-group input-group-outline ">
                                                 <label class="form-label">Mobile Number</label>
                                                 <input class="  form-control" type="text" placeholder=" " />
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row mt-3">
                                         <p class="text-md font-weight-bolder">Contact person 3</p>
                                         <div class="col-12 col-sm-6">
                                             <div class="input-group input-group-outline  ">
                                                 <label class="form-label"> Name </label>
                                                 <input class="  form-control" type="text" placeholder=" " />
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                             <div class="input-group input-group-outline ">
                                                 <label class="form-label">Mobile Number</label>
                                                 <input class="  form-control" type="text" placeholder=" " />
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </div>

                         <div class="card my-4" id="address">
                             <div class="card-body">

                                 <div class="border-radius-xl bg-white">

                                     <div class="d-lg-flex">
                                         <div class="mb-2">
                                             <h5 class="font-weight-bolder mb-0"> Address </h5>
                                             <p class="mb-0 text-sm">Enter your address details</p>
                                         </div>
                                     </div>

                                     <div class="row my-3">
                                         <div class="col-12">
                                             <div class="input-group input-group-static ">
                                                 <label class=" ">Email id</label>
                                                 <input class="  form-control" type="email" placeholder="Hotel Owner Name" />
                                             </div>
                                         </div>
                                         <div class="col-12 mt-3">
                                             <div class="input-group input-group-static ">
                                                 <label class=" ">Contact Address</label>
                                                 <textarea class="form-control" rows="3" placeholder="" spellcheck="true"></textarea>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </div>

                         <div class="card my-4" id="room_add">
                             <div class="card-body">

                                 <div class="d-lg-flex">
                                     <div class="mb-2">
                                         <h5 class="font-weight-bolder mb-0">Room </h5>
                                         <p class="mb-0 text-sm">Add your Room</p>
                                     </div>

                                     <div class="ms-auto my-auto mt-lg-0 mt-4">
                                         <div class="ms-auto my-auto">
                                             <button class="btn bg-gradient-primary btn-sm mb-0 addRoom" type="button">+&nbsp; Add </button></a>

                                         </div>
                                     </div>
                                 </div>

                                 <div id="container">
                                     <div class=" add_room_form">

                                         <div class="row my-3">
                                             <div class="col-12 col-sm-6">
                                                 <div class="input-group input-group-static ">
                                                     <label class=" ">Type of Rooms</label>
                                                     <select class="form-control " name=" " id="choices_type_of_room s">
                                                         <option value="" selected disabled>Select Type of Room </option>
                                                         <option value="">1</option>
                                                         <option value="">2</option>
                                                     </select>
                                                 </div>
                                             </div>
                                             <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                 <div class="input-group input-group-static ">
                                                     <label class=" ">No:- of Rooms</label>
                                                     <input class="  form-control" type="number" />
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="row my-3">
                                             <div class="col-12 col-sm-6">
                                                 <div class="input-group input-group-static ">
                                                     <label class=" ">Normal price </label>
                                                     <input class="  form-control" type="number" />
                                                 </div>
                                             </div>
                                             <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                 <div class="input-group input-group-static ">
                                                     <label class=" ">Discount price</label>
                                                     <input class="  form-control" type="number" />
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="row my-3">
                                             <div class="upload__box">
                                                 <div class="upload__btn-box py-2">
                                                     <label class="upload__btn">
                                                         <p class="mb-0">Upload images</p>
                                                         <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                                                     </label>
                                                 </div>
                                                 <div class="upload__img-wrap"></div>
                                             </div>
                                         </div>

                                     </div>
                                 </div>

                             </div>
                         </div>

                         <div class="card my-4" id="payment">
                             <div class="card-body">

                                 <div class="border-radius-xl bg-white">

                                     <div class="d-lg-flex">
                                         <div class="mb-2">
                                             <h5 class="font-weight-bolder mb-0"> Payment </h5>
                                             <p class="mb-0 text-sm">Enter the payment information</p>
                                         </div>
                                     </div>

                                     <div class="row my-3">
                                         <div class="col-12 col-sm-6">
                                             <div class="input-group input-group-static">
                                                 <label class=" text-primary "> Select Bank</label>
                                                 <select class="form-control " name=" " id="choices_bank">
                                                     <option value="" selected disabled>Select State </option>
                                                     <option value="">1</option>
                                                     <option value="">2</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                             <div class="input-group input-group-static ">
                                                 <label class=" ">Account holder</label>
                                                 <input class="  form-control" type="text" placeholder="Name" />
                                             </div>
                                         </div>
                                     </div>

                                     <div class="row my-3">
                                         <div class="col-12 col-sm-6">
                                             <div class="input-group input-group-static ">
                                                 <label class=" ">IFSC</label>
                                                 <input class="  form-control" type="number" placeholder="code" />
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                             <div class="input-group input-group-static ">
                                                 <label class=" ">Account Number</label>
                                                 <input class="  form-control" type="number" placeholder="0000000000" />
                                             </div>
                                         </div>
                                     </div>

                                     <div class="row mt-3">
                                         <div class="col-12 ">
                                             <div class="input-group input-group-static ">
                                                 <label class=" "> Upload account holder ID proof</label>
                                                 <input class="form-control custom-file-upload" type="file">
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </div>

                         <div class="card my-4" id="agreement">
                             <div class="card-body">

                                 <div class="border-radius-xl bg-white">

                                     <div class="d-lg-flex">
                                         <div class="mb-2">
                                             <h5 class="font-weight-bolder mb-0"> Terms and conditions agreement </h5>
                                             <p class="mt-4 text-sm">This User Agreement along with Terms of Service (collectively, the "User Agreement") forms the terms and conditions for the use of services and products</p>
                                         </div>
                                     </div>

                                     <div class="row my-3">
                                         <div class="col-12 col-sm-6">
                                             <div class="form-check text-left">
                                                 <input class="form-check-input bg-dark border-dark" type="checkbox" value id="flexCheckDefault" checked>
                                                 <label class="form-check-label" for="flexCheckDefault">
                                                     I agree the <a href="../../../pages/privacy.html" class="text-dark font-weight-bolder">Terms and
                                                         Conditions</a>
                                                 </label>
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-6">
                                             <div class="button-row d-flex">
                                                 <a href="add_hotel_hotel_creation_details" class="ms-auto mb-0">
                                                     <button class="ms-auto mb-0 px-6 btn bg-gradient-dark " type="button" title="submit">Next</button></a>
                                             </div>
                                         </div>
                                     </div>


                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>
             </form>
         </div>
     </div>
 </div>

 <script src="assets/js/plugins/choices.min.js"></script>

 <script>
     function removeItem(button) {
         // Show a confirmation dialog
         var itemName = button.textContent.trim();
         var confirmation = confirm('Are you sure you want to remove ');

         // If the user clicks "OK," remove the corresponding button
         if (confirmation) {
             // Get the parent li element and remove it
             var listItem = button.closest('li');
             listItem.remove();
         }
     }

     function moreComp(element) {
         // Toggle the visibility of the targeted div
         var targetDiv = element.nextElementSibling;
         targetDiv.classList.toggle('d-none');
     }

     function moreCompField(button) {
         // Get the input element associated with the button
         var inputElement = button.previousElementSibling;

         // Check if the button has the class 'delete-icon'
         var isDeleteIcon = button.classList.contains('delete-icon');
         button.innerHTML = '<i class="material-symbols-outlined delete-icon">delete</i>';

         if (isDeleteIcon) {
             // If it's a delete icon, show alert and remove the input
             var itemName = inputElement.value.trim();
             var confirmation = confirm('Are you sure you want to remove ' + itemName + '?');

             if (confirmation) {
                 var liElement = button.closest('li');
                 liElement.remove();
             }
         } else {
             // If it's an add icon, add a new input
             var ulElement = button.closest('ul');
             var liElement = document.createElement('li');
             liElement.innerHTML = '<div class="d-flex border form-control mb-3 p-0">' +
                 '<input type="text" class="form-control border-0 bg-transparent d-block px-3" placeholder="Item name" name="">' +
                 '<button class="btn btn-default border-0 me-2 mb-0 ms-auto" type="button" onclick="moreCompField(this)"><i class="material-symbols-outlined delete-icon">Add</i></button>' +
                 '</div>';
             ulElement.appendChild(liElement);
         }

         // Toggle the 'delete-icon' class on the button
         button.classList.toggle('delete-icon');
     }
 </script>

 <script>
     if (document.getElementById('choices_bank')) {
         var element = document.getElementById('choices_bank');
         const example = new Choices(element, {
             searchEnabled: true,
             shouldSort: false,
         });
     };
     if (document.getElementById('choices_type_of_rooms')) {
         var element = document.getElementById('choices_type_of_rooms');
         const example = new Choices(element, {
             searchEnabled: true,
             shouldSort: false,
         });
     };
 </script>

 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
 <script>
     function addNearTouristPlace() {
         // Create a new set of input fields for sub facility
         var newNearTouristPlace = $('.near-tourist-place:first').clone();

         // Clear the input field in the new set
         newNearTouristPlace.find('input[type="text"]').val('');

         // Append the new set to the container
         $('.near-tourist-place-container').append(newNearTouristPlace);
     }
 </script>
 <script>
     function addRoomViewpoints() {
         // Create a new set of input fields for sub facility
         var newRoomViewpoints = $('.room-viewpoints-place:first').clone();

         // Clear the input field in the new set
         newRoomViewpoints.find('input[type="text"]').val('');

         // Append the new set to the container
         $('.room-viewpoints-place-container').append(newRoomViewpoints);
     }
 </script>

 <script>
     jQuery(document).ready(function() {
         ImgUpload();
     });

     function ImgUpload() {
         var imgWrap = "";
         var imgArray = [];

         $('.upload__inputfile').each(function() {
             $(this).on('change', function(e) {
                 imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                 var maxLength = $(this).attr('data-max_length');

                 var files = e.target.files;
                 var filesArr = Array.prototype.slice.call(files);
                 var iterator = 0;
                 filesArr.forEach(function(f, index) {

                     if (!f.type.match('image.*')) {
                         return;
                     }

                     if (imgArray.length > maxLength) {
                         return false
                     } else {
                         var len = 0;
                         for (var i = 0; i < imgArray.length; i++) {
                             if (imgArray[i] !== undefined) {
                                 len++;
                             }
                         }
                         if (len > maxLength) {
                             return false;
                         } else {
                             imgArray.push(f);

                             var reader = new FileReader();
                             reader.onload = function(e) {
                                 var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                 imgWrap.append(html);
                                 iterator++;
                             }
                             reader.readAsDataURL(f);
                         }
                     }
                 });
             });
         });

         $('body').on('click', ".upload__img-close", function(e) {
             var file = $(this).parent().data("file");
             for (var i = 0; i < imgArray.length; i++) {
                 if (imgArray[i].name === file) {
                     imgArray.splice(i, 1);
                     break;
                 }
             }
             $(this).parent().parent().remove();
         });
     }


     document.addEventListener("DOMContentLoaded", function() {
         const addButton = document.querySelector('.addRoom');
         const container = document.getElementById('container');

         addButton.addEventListener('click', function() {
             const existingSection = document.querySelector('.add_room_form');
             const clonedSection = existingSection.cloneNode(true);

             // Reset input values in the cloned section
             clonedSection.querySelectorAll('input').forEach(function(input) {
                 input.value = '';
             });

             // Reset uploaded images in the cloned section
             const clonedImgWrap = clonedSection.querySelector('.upload__img-wrap');
             clonedImgWrap.innerHTML = '';

             container.appendChild(clonedSection);

             // Reinitialize image upload functionality for the new section
             ImgUpload();
         });
     });
 </script>