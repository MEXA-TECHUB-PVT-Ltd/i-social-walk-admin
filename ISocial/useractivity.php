<!doctype html>
<html lang="en">
<?php include('include/scripts.php'); ?>

<body>
    <div id="layout-wrapper">
        <?php include('include/header.php'); ?>


        <div class="vertical-menu">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index-2.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-dark-sm.png" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="28">
                    </span>
                </a>

                <a href="index-2.html" class="logo logo-light">
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
                        <div class="offset-md-3 col-xl-6 col-6 col-md-6">
                            <div class="card">
                                <div class="card-body">

                                    <div class="">
                                        <div class="row mb-2">
                                            <div class="col-xl-12 col-md-112 col-12">
                                                <div class="pb-3 pb-xl-0">

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title mb-0 text-center">Activity</h4>
                                                        </div>
                                                        <div class="card-body">

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3 text-center">
                                                                        <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-6.jpg" alt="">

                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <div class="row">
                                                                <div class="col-md-12 col-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 col-12 text-start text-bold"> Name</div>
                                                                        <div class="col-md-6 col-12 text-start">
                                                                            John
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 col-6  text-start text-bold">Calories Burnt</div>
                                                                        <div class="col-md-6 col-6 text-start">
                                                                            <div class="badge badge-soft-success font-size-12"> 290</div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 col-6  text-start text-bold">distance Covered</div>
                                                                        <div class="col-md-6 col-6 text-start">
                                                                            <div class="text-bold font-size-14"> 55 km</div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 col-6  text-start text-bold">Time Taken</div>
                                                                        <div class="col-md-6 col-6 text-start">
                                                                            <div class="text-bold font-size-14"> 5 Mins</div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-12 col-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 col-6  text-start text-bold">Average Speed</div>
                                                                        <div class="col-md-6 col-6 text-start">
                                                                            <div class="badge badge-soft-danger font-size-12">25 km</div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-12 col-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 col-6  text-start text-bold">Average Pace</div>
                                                                        <div class="col-md-6 col-6 text-start">
                                                                            <div class="badge badge-soft-danger font-size-12">25 km</div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-12">
                                                                    <div class="mb-3" style="display:flex;">
                                                                        <div class="col-md-6 col-6  text-start text-bold">Date </div>
                                                                        <div class="col-md-6 col-6 text-start">
                                                                            <div class="badge badge-soft-success font-size-12">10, May 2022</div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div>

                                                            </div>

                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                </div>
                                            </div>


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

            <?php include('include/footer.php'); ?>
        </div>
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