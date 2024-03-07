<?php 
include 'include/connection.php';

if(isset($_POST['vote'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $ref_code = $_POST['ref_code'];
    $vote1 = $_POST['vote1'];
    $vote2 = $_POST['vote2'];
    $vote3 = $_POST['vote3'];

    $existVote = "SELECT * FROM tbl_vote WHERE ref_code='$ref_code'";
    $result = mysqli_query($conn,$existVote);
    $numRow = mysqli_num_rows($result);

    if($numRow > 0){
        echo "<script>alert('You Have Already Voted')</script>";
        echo "<script>window.open('vote.php','_self')</script>";
    }

    else{  
        $result3 = mysqli_query($conn, "SELECT * FROM tbl_register WHERE ref_code='$ref_code'");
        $numRow2 = mysqli_num_rows($result3);
        if($numRow2 > 0){
            session_start();
            $user = $_SESSION['username'];
            $sql = "INSERT INTO tbl_vote (name,phone,ref_code,vote1,vote2,vote3,added_by) VALUES ('$name','$phone','$ref_code','$vote1','$vote2','$vote3','$user')";
            $result4 = mysqli_query($conn,$sql);

            echo "<script>alert('Vote Added Successfully')</script>";
            echo "<script>window.open('vote.php','_self')</script>";


        }
        else{
            echo "<script>alert('Reference Code is Invalid')</script>";
            echo "<script>window.open('vote.php','_self')</script>";
        }
    }
}

?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>Vote</title>

    <!-- ===============================================--><!--    Favicons--><!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL?>assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL?>assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL?>assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL?>assets/img/favicons/favicon.ico">
    <link rel="manifest" href="<?php echo BASE_URL?>assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?php echo BASE_URL?>assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="<?php echo BASE_URL?>assets/js/config.js"></script>
    <script src="<?php echo BASE_URL?>vendors/simplebar/simplebar.min.js"></script>

    <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="<?php echo BASE_URL?>vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL?>assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="<?php echo BASE_URL?>assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="<?php echo BASE_URL?>assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="<?php echo BASE_URL?>assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 

    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
    <style>
      input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{
        -webkit-appearance: none;
        margin: 0;
      }
    </style>
  </head>

  <body>
    <?php include 'top.php' ?>
    <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid">
        <div class="row min-vh-100 flex-center g-0">
          <div class="col-lg-8 col-xxl-5 py-3 position-relative">
            <img class="bg-auth-circle-shape" src="<?php echo BASE_URL?>assets/img/icons/spot-illustrations/bg-shape.png" alt="" width="250">
            <img class="bg-auth-circle-shape-2" src="<?php echo BASE_URL?>assets/img/icons/spot-illustrations/shape-1.png" alt="" width="150">
            <div class="card overflow-hidden z-1">
              <div class="card-body p-0">
                <div class="row g-0 h-100">
                  <div class="col-md-5 text-center bg-card-gradient">
                    <div class="position-relative p-4 pt-md-5 pb-md-7" data-bs-theme="light">
                      <div class="bg-holder bg-auth-card-shape" style="background-image:url(<?php echo BASE_URL?>assets/img/icons/spot-illustrations/half-circle.png);"></div><!--/.bg-holder-->
                      <div class="z-1 position-relative"><img class="me-2 mb-3" src="<?php echo BASE_URL?>assets/img/pureskill.png" alt="" width="140" />
                        <p class="opacity-75 text-white mt-4">With the power of Falcon, you can now focus only on functionaries for your digital products, while leaving the UI design on us!</p>
                      </div>
                    </div>
                    
                  </div>
                  <div class="col-md-7 d-flex flex-center">
                    <div class="p-4 p-md-5 flex-grow-1">
                      <div class="row flex-between-center">
                        <div class="col-auto">
                          <h3>Vote</h3>
                        </div>
                      </div>
                      <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post"  enctype="multipart/form-data">
                        <div class="mb-3">
                          <label class="form-label" for="card-email">Name</label>
                          <input class="form-control" id="card-email" type="text" name="name" required/>
                        </div>
                        <div class="mb-3">
                          <div class="d-flex justify-content-between">
                            <label class="form-label" for="card-password">Phone</label>
                          </div>
                          <input class="form-control" id="card-password" type="number" name="phone" required/>
                        </div>
                        <div class="mb-3">
                          <div class="d-flex justify-content-between">
                            <label class="form-label" for="card-password">Reference Code</label>
                          </div>
                          <input class="form-control" id="card-password" type="text" name="ref_code" required/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="card-role">Vote 1</label>
                          <select class="form-select" id="select1" name="vote1" required>
                            <option disabled selected>Select a option</option>
                            <option value="Networking">Networking</option>
                            <option value="Server Management">Server Management</option>
                            <option value="Cloud Computing">Cloud Computing</option>
                            <option value="Cyber Security">Cyber Security</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Full Stack Development">Full Stack Development</option>
                            <option value="Artificial Intelligence and IoT">Artificial Intelligence and IoT</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="card-role">Vote 2</label>
                          <select class="form-select" id="select2" name="vote2" required>
                            <option disabled selected>Select a option</option>
                            <option value="Networking">Networking</option>
                            <option value="Server Management">Server Management</option>
                            <option value="Cloud Computing">Cloud Computing</option>
                            <option value="Cyber Security">Cyber Security</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Full Stack Development">Full Stack Development</option>
                            <option value="Artificial Intelligence and IoT">Artificial Intelligence and IoT</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="card-role">Vote 3</label>
                          <select class="form-select" id="select3" name="vote3" required>
                            <option disabled selected>Select a option</option>
                            <option value="Networking">Networking</option>
                            <option value="Server Management">Server Management</option>
                            <option value="Cloud Computing">Cloud Computing</option>
                            <option value="Cyber Security">Cyber Security</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Full Stack Development">Full Stack Development</option>
                            <option value="Artificial Intelligence and IoT">Artificial Intelligence and IoT</option>
                          </select>
                        </div>
                        
                        <div class="mb-3">
                          <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="vote">Log in</button></div>
                      </form>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->

    

    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <!-- <script>
        function updateSelection(select) {
            var selectedValue = select.value;
            var selects = document.querySelectorAll('select');
            selects.forEach(function(sel) {
                var options = sel.options;
                for (var i = 0; i < options.length; i++) {
                    if (options[i].value === selectedValue) {
                        options[i].disabled = true;
                    } else {
                        options[i].disabled = false;
                    }
                }
            });
        }
   </script> -->
    <script src="<?php echo BASE_URL?>vendors/popper/popper.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/anchorjs/anchor.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/is/is.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/fontawesome/all.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/lodash/lodash.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/list.js/list.min.js"></script>
    <script src="<?php echo BASE_URL?>assets/js/theme.js"></script>
  </body>

  <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "danger",
});
</script> -->

</html>