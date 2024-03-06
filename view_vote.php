<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

  
<?php include 'include/connection.php';
session_start();
?>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>Falcon | Dashboard &amp; Web App Template</title>

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
  </head>

  <body>
    <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid" data-layout="container-fluid">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <?php include 'top.php'?>
        <br>
       
        <div class="content">
         
         <div class="row gx-3">
           <div class="col-xxl-12 col-xl-12">
             <div class="card" id="ticketsTable" data-list='{"valueNames":["no","er","name","date","phone","course","counsellor"],"page":11,"pagination":true,"fallback":"tickets-table-fallback"}'>
               <div class="card-header border-bottom border-200 px-0">
                 <div class="d-lg-flex justify-content-between">
                   <div class="row flex-between-center gy-2 px-x1">
                     <div class="col-auto pe-0">
                       <h6 class="mb-0">Votes</h6>
                     </div>
                     <div class="col-auto">
                       <form>
                         <div class="input-group input-search-width">
                           <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Search  by name" aria-label="search" /><button class="btn btn-sm btn-outline-secondary border-300 hover-border-secondary"><span class="fa fa-search fs-10"></span></button></div>
                       </form>
                     </div>
                   </div>
                   <div class="border-bottom border-200 my-3"></div>
                   <div class="d-flex align-items-center justify-content-between justify-content-lg-end px-x1">
                     
                     <div class="bg-300 mx-3 d-none d-lg-block d-xl-none" style="width:1px; height:29px"></div>
                     
                     <div class="d-flex align-items-center" id="table-ticket-replace-element">
                       
                     <a class="btn btn-falcon-default btn-sm mx-2" href="vote.php" type="button">
                           <span class="fas fa-plus" data-fa-transform="shrink-3"></span>
                           <span class="d-none d-sm-inline-block ms-1">Vote</span>
                     </a>
                       
                     </div>
                   </div>
                 </div>
               </div>
               <div class="card-body p-0">
                 <div class="table-responsive scrollbar">
              
                   <table class="table table-sm mb-0 fs-10 table-view-tickets text-center">
                     <thead class="bg-body-tertiary">
                       <tr>
                       <th class="text-800 sort align-middle" data-sort="no">ID</th>
                         
                        
                         <th class="text-800 sort align-middle" data-sort="date">User ID</th>
                         <th class="text-800 sort align-middle" data-sort="er">Name</th>
                         <th class="text-800 sort align-middle" data-sort="phone">Phone</th>
                         <th class="text-800 sort align-middle" data-sort="course">Reference Code</th>
                         <th class="text-800 sort align-middle" data-sort="counsellor">Vote 1</th>
                         <th class="text-800 sort align-middle" data-sort="counsellor">Vote 2</th>
                         <th class="text-800 sort align-middle" data-sort="counsellor">Vote 3</th>
                         <th class="text-800 sort align-middle" data-sort="action">Time</th>
                       </tr>
                     </thead>
                     <tbody class="list" id="table-ticket-body">
                     <?php
                  $sql = "SELECT * FROM tbl_vote WHERE status='1'";
                  $result = mysqli_query($conn,$sql);
                  while($row = mysqli_fetch_array($result)){
                    
               ?>
                     <tr>
                         
                         <td class="align-middle no py-2 pe-14"><?php echo $row['id'] ?></td>
                         <td class="align-middle no py-2 pe-14"><?php
                         
                          echo $_SESSION['username']; ?></td>
                         
                         <td class="align-middle date py-2 pe-2"><?php echo $row['name'] ?></td>
                         <td class="align-middle date py-2 pe-2"><?php echo $row['phone'] ?></td>
                         <td class="align-middle date py-2 pe-2"><?php echo $row['ref_code'] ?></td>
                         <td class="align-middle date py-2 pe-2"><?php echo $row['vote1'] ?></td>
                         <td class="align-middle date py-2 pe-2"><?php echo $row['vote2'] ?></td>
                         <td class="align-middle date py-2 pe-2"><?php echo $row['vote3'] ?></td>
                         <td class="align-middle date py-2 pe-2"><?php echo $row['time'] ?></td>
                         <td>
                          
         
                         </td>                    
                       </tr>
                                      
                     </tbody>
                     <?php
                        }
                     ?>
                   </table>
                 
                   <div class="text-center d-none" id="tickets-table-fallback">
                     <p class="fw-bold fs-8 mt-3">No ticket found</p>
                   </div>
                 </div>
               </div>
               <div class="card-footer">
                 <div class="d-flex justify-content-center"><button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                   <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                 </div>
               </div>
             </div>
           </div>
           
         </div>
         <?php include 'bottom.php'?>
       </div>
      </div>
    </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->

    

    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="<?php echo BASE_URL?>vendors/popper/popper.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/anchorjs/anchor.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/is/is.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/echarts/echarts.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbaQGvhe7Af-uOMJz68NWHnO34UjjE7Lo&amp;callback=initMap" async></script>
    <script src="<?php echo BASE_URL?>vendors/dayjs/dayjs.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/fontawesome/all.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/lodash/lodash.min.js"></script>
    <script src="<?php echo BASE_URL?><?php echo BASE_URL?>../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="<?php echo BASE_URL?>vendors/list.js/list.min.js"></script>
    <script src="<?php echo BASE_URL?>assets/js/theme.js"></script>
  </body>


</html>