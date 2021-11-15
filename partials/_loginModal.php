<?php
include '_dbconnect.php';
$showError = false;
// $showMsg = false;

// it will execute when rSignup button is submitted
if (isset($_REQUEST['rSignup'])) {

    // Checking if all fields are empty if empty prompt an error or else submit the data into db
    if (($_REQUEST['rName'] == "") || ($_REQUEST['rEmail'] == "") || ($_REQUEST['rPass'] == "")) {
        // $showError = true;
        $regmsg = ' <div class="alert alert-warning alert-dismissible mt-2 fade show" role="alert">
                        <strong>Warning!</strong> All Fields are Required.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
    } else {

        // verifying email already exists or not form r_email in database
        $sql = "SELECT `r_email` FROM `r_login_td` WHERE `r_email` = '".$_REQUEST['rEmail']."'";
        $result = $conn->query($sql);
        if($result->num_rows==1) {
            echo 'Email Already Registered';
        }


        $rName = $_REQUEST['rName'];
        $rEmail = $_REQUEST['rEmail'];
        $rPass = $_REQUEST['rPass'];
        // MySQL query
        $sql = "INSERT INTO `r_login_tb` ( `r_name`, `r_email`, `r_password`, `dt`) VALUES ('$rName', '$rEmail', '$rPass', current_timestamp())";
        // Executing Query
        $conn->query($sql);

        // showing User account is created
        if ($conn->query($sql) == True) {
            $regmsg = '
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Account Succesfully created
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
            ';
        } else {
            $regmsg = '
                 <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Warning!</strong> Unable to create an account
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';
        }
    }
}





?>



<!-- form starts -->
<div class="container py-2">



    <!-- Modal -->
    <div class="modal fade" id="signup" tabindex="-1" aria-labelledby="signup" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Signup into mobylcare</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="text-center">Create An Account</h2>
                    <form action="" method="POST">
                        <!-- <?php
                                if ($showError) {
                                    echo '
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Warning!</strong> All Fields are Required.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            ';
                                }

                                if ($showMsg) {
                                    echo '
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong>Your account has  been created Now you can login.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            ';
                                }
                                ?> -->
                        <div class="mb-3">
                            <label for="rName" class="form-label">Full Name</label>
                            <input type="text" name="rName" class="form-control" id="rName" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="rEmail" class="form-label">Email address</label>
                            <input type="email" name="rEmail" class="form-control" id="rEmail" aria-describedby="emailHelp" required>
                            <div id="rEmail" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="rPass" class="form-label">New Password</label>
                            <input type="password" name="rPass" class="form-control" id="rPass" required>
                        </div>
                        <button type="submit" name="rSignup" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                <?php
                    if(isset($regmsg)) {
                        echo $regmsg;
                    }
                ?>
            </div>
        </div>
    </div>

</div>

<!-- form ends -->