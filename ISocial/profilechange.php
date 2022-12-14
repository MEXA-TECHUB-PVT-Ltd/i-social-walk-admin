<!doctype html>
<html lang="en">

<?php
include('include/connection.php');

include 'include/scripts.php';
?>
<?php
session_start();
if (empty(isset($_SESSION['id']))) {

    header("location:dashboard.php");
    exit();
}
$id = $_SESSION['id'];
?>

<body>

    <!--- Login  PHP-->

    <?php

    $sql = "Select * from users where id=$id";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        while ($row = mysqli_fetch_assoc($query)) {
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $email = $row['email'];
            $active_watch = $row['active_watch'];
            $profile_image = $row['profile_image'];
            $phone_no = $row['phoneno'];
        }
    }

    if (isset($_POST['submit'])) {

        $phone_no = $_POST['phoneno'];

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $sqll = "UPDATE users SET phoneno='$phone_no' ,first_name='$first_name',last_name='$last_name'where email = '$email'";

        $queryl = mysqli_query($conn, $sqll);
        if ($queryl) {

            $_SESSION['status_text'] = "Profile Updated.";
            $_SESSION['status_title'] = "Success";
            $_SESSION['status_code'] = "success";
        }
    }
    ?>

    <body>

        <div class="authentication-bg min-vh-100">
            <div class="bg-overlay bg-light"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <a href="dashboard.php" type="button" class="btn btn-info btn-circle btn-xl mt-5 "> Move Back</a>
                    </div>
                </div>
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
                                        <h5>Update Profile</h5>

                                    </div>
                                    <div class="p-2 mt-4">
                                        <form action="" method="POST">

                                            <div class="mb-3">
                                                <label class="form-label" for="email">Email Address</label>
                                                <div class="position-relative input-custom-icon">
                                                    <input type="text" value="<?php echo $email; ?>" readonly class=" form-control" id="email" name="email" placeholder="Enter email">
                                                    <span class="bx bx-user"></span>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="email">First name</label>
                                                <div class="position-relative input-custom-icon">
                                                    <input type="text" value="<?php echo $first_name; ?>" class=" form-control" id="email" name="first_name" placeholder="Enter First Name">
                                                    <span class="bx bx-user"></span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="email">Last name</label>
                                                <div class="position-relative input-custom-icon">
                                                    <input type="text" value="<?php echo $last_name; ?>" class=" form-control" id="email" name="last_name" placeholder="Enter Last Name">
                                                    <span class="bx bx-user"></span>
                                                </div>
                                            </div>

                                            <div class="mb-3">

                                                <label class="form-label" for="phoneno-input">Phone no</label>
                                                <div class="position-relative auth-pass-inputgroup input-custom-icon">
                                                    <span class="fas fa-phone"></span>
                                                    <input name="phoneno" type="phoneno" class="form-control" required id="phoneno-input" value="<?php echo $phone_no; ?>" placeholder="Enter phoneno">

                                                </div>
                                            </div>


                                            <div class="mt-3">
                                                <button name="submit" class="btn btn-primary w-100 waves-effect waves-light" type="submit">Update</button>
                                            </div>



                                            <!-- <div class="mt-4 text-center">
                                            <p class="mb-0">Don't have an account ? <a href="auth-register.html" class="fw-medium text-primary"> Signup now </a> </p>
                                        </div> -->
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
        <?php include('include/footerscripts.php'); ?>


    </body>



</html>