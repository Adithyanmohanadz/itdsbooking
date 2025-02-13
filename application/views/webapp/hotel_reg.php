<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>
        Hotel
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url() ?>assets2/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets2/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url() ?>assets2/css/m-d-g-l.css?v=3.1.0" rel="stylesheet" />

    <link id="pagestyle" href="assets/css/glcus.css" rel="stylesheet" />
</head>

<body class=" ">

    <!-- Navbar -->
    <!-- <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
        <div class="container">
            <a class="w-50 navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href=" ">
                <img class="w-30 " src="<?= base_url() ?>assets2/img/gl/full logo inline for white background 1.png" alt="">
            </a>

        </div>
    </nav> -->
    <!-- End Navbar -->

    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-7 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                            <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('assets/img/hotel/idukki/green-tea-bud-leaves-green-tea-plantations-morning.jpg'); background-size: cover;">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                            <div class="container d-flex">
                                <a class=" text-center " href="index">
                                    <img class="w-50 mx-auto" src="<?= base_url() ?>assets/img/hotel/logo/ITDS  LOGO1 primary.png" alt="">
                                </a>

                            </div>
                            <div class="card card-plain">
                                <div class="card-header text-center">
                                    <h4 class="font-weight-bolder  ">Hotel Registration</h4> 
                                </div>
                                <div class="card-body pt-0">
                                    <form role="form">
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Hotel Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Hotel Owner</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Location</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label"> </label>
                                            <select class="form-control " name=" " id="choices_category">
                                                <option value="" selected disabled>Select Type </option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="text-center">
                                            <a href="login"><button type="button" class="btn btn-lg bg-gradient-dark btn-lg w-100 mt-4 mb-0">Submit</button></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="<?= base_url() ?>assets2/js/core/popper.min.js"></script>
    <script src="<?= base_url() ?>assets2/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets2/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url() ?>assets2/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="<?= base_url() ?>assets2/js/m-d-g-l.min.js?v=3.0.6"></script>
</body>


</html>