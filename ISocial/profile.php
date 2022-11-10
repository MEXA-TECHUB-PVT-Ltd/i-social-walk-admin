<!doctype html>
<html lang="en">
<?php include('include/scripts.php'); ?>

<body>
    <div id="layout-wrapper">
        <?php include('include/header.php'); ?>


        <div class="vertical-menu">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="#" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-dark-sm.png" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="28">
                    </span>
                </a>

                <a href="#" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="30">
                    </span>
                    <span class="logo-sm">
                        <img src="assets/images/logo-light-sm.png" alt="" height="26">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                <i class="bx bx-menu align-middle"></i>
            </button>

            <div data-simplebar class="sidebar-menu-scroll">

                <!--- Sidemenu -->
                <?php include('include/sidebar.php'); ?>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <?php include('include/leftsidebar.php'); ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xxl-3">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="user-profile-img">
                                        <img src="assets/images/pattern-bg.jpg" class="profile-img profile-foreground-img rounded-top" style="height: 120px;" alt="">
                                        <div class="overlay-content rounded-top">
                                            <div>
                                                <div class="user-nav p-3">
                                                    <div class="d-flex justify-content-end">
                                                        <div class="dropdown">
                                                            <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                <i class="bx bx-dots-vertical text-white font-size-20"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end user-profile-img -->


                                    <div class="p-4 pt-0">

                                        <div class="mt-n5 position-relative text-center border-bottom pb-3">
                                            <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xl rounded-circle img-thumbnail">

                                            <div class="mt-3">
                                                <h5 class="mb-1">Martin Gurley</h5>
                                                <p class="text-muted mb-0">
                                                    <i class="bx bxs-star text-warning font-size-14"></i>
                                                    <i class="bx bxs-star text-warning font-size-14"></i>
                                                    <i class="bx bxs-star text-warning font-size-14"></i>
                                                    <i class="bx bxs-star text-warning font-size-14"></i>
                                                    <i class="bx bxs-star-half text-warning font-size-14"></i>
                                                </p>
                                            </div>

                                        </div>

                                        <div class="table-responsive mt-3 border-bottom pb-3">
                                            <table class="table align-middle table-sm table-nowrap table-borderless table-centered mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th class="fw-bold">
                                                            City :</th>
                                                        <td class="text-muted">New Your City</td>
                                                    </tr>
                                                    <!-- end tr -->

                                                    <!-- end tr -->
                                                    <tr>
                                                        <th class="fw-bold">
                                                            Country :</th>
                                                        <td class="text-muted">USA</td>
                                                    </tr>
                                                    <!-- end tr -->
                                                    <tr>
                                                        <th class="fw-bold">Pin Code :</th>
                                                        <td class="text-muted">0005485</td>
                                                    </tr>
                                                    <!-- end tr -->

                                                    <tr>
                                                        <th class="fw-bold">Phone :</th>
                                                        <td class="text-muted">+214 5632564</td>
                                                    </tr>
                                                    <!-- end tr -->

                                                    <tr>
                                                        <th class="fw-bold">Email :</th>
                                                        <td class="text-muted">martingurley52@gmail.com</td>
                                                    </tr>
                                                    <!-- end tr -->
                                                </tbody><!-- end tbody -->
                                            </table>
                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- end row -->






                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- chat offcanvas -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivity" aria-labelledby="offcanvasActivityLabel">
            <div class="offcanvas-header border-bottom">
                <h5 id="offcanvasActivityLabel">Offcanvas right</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                ...
            </div>
        </div>


        <?php include('include/footerscripts.php'); ?>

</body>


</html>