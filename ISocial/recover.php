<!doctype html>
<html lang="en">

<?php include('include/scripts.php'); ?>

<body>


    <div class="authentication-bg min-vh-100">
        <div class="bg-overlay bg-light"></div>
        <div class="container">
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-5">

                        <div class="mb-4 pb-2">
                            <a href="index-2.html" class="d-block auth-logo">
                                <img src="assets/images/logo-dark.png" alt="" height="30" class="auth-logo-dark me-start">
                                <img src="assets/images/logo-light.png" alt="" height="30" class="auth-logo-light me-start">
                            </a>
                        </div>

                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5>Reset Password</h5>
                                    <p class="text-muted">Reset Password with i Social Walk.</p>
                                </div>
                                <div class="p-2 mt-4">

                                    <div class="alert alert-success text-center small mb-4" role="alert">
                                        Enter your Email and Four Digit Code will be sent to you!
                                    </div>

                                    <form action="emailverification.php">

                                        <div class="mb-3">
                                            <label class="form-label" for="useremail">Email</label>
                                            <div class="position-relative input-custom-icon">
                                                <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                                                <span class="bx bx-mail-send"></span>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <button href="emailverification.php" class="btn btn-primary w-100 waves-effect waves-light" type="submit">Reset</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <p class="mb-0">Remember It ? <a href="login.php" class="fw-medium text-primary"> Sign in </a></p>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->


            </div>
        </div><!-- end container -->
    </div>
    <!-- end authentication section -->

    <!-- JAVASCRIPT -->

    <?php include('include/footerscripts.php'); ?>

</body>


</html>