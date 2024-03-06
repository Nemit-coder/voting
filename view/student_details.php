<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

  
<?php include '../include/connection.php'?>
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
        <?php include '../template/top.php'?>
        <br>
       
        <div class="content">
          <div class="card mb-3">
            <div class="card-body d-flex flex-wrap flex-between-center">
              <div>
                <h6 class="text-primary">Learner</h6>
                <h5 class="mb-0">Michael Giacchino</h5>
              </div>
              <div><button class="btn btn-primary btn-md me-2" type="button">
                <span class="fas fa-envelope me-md-1"> </span>
                <span class="d-none d-md-inline">Job Offer Letter</span>
              </button>
              <button class="btn btn-falcon-default btn-md" type="button">
                <span class="fas fa-users me-md-1"></span>
                <span class="d-none d-md-inline">Fees Details</span>
              </button></div>
            </div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-xxl-6">
              <div class="row g-3">
                <div class="col-12">
                  <div class="card font-sans-serif">
                    <div class="card-body d-flex gap-3 flex-column flex-sm-row align-items-center"><img class="rounded-3" src="<?php echo BASE_URL?>assets/img/elearning/avatar/student.png" alt="" width="112" />
                      <table class="table table-borderless fs-10 fw-medium mb-0">
                        <tbody>
                          <tr>
                            <td class="p-1" style="width: 35%;">Last Online:</td>
                            <td class="p-1 text-600">3 hours ago</td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">Joined:</td>
                            <td class="p-1 text-600">2021/01/12 23:13</td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">Email:</td>
                            <td class="p-1"><a class="text-600 text-decoration-none" href="mailto:goodguy@nicemail.com">goodguy@nicemail.com </a><span class="badge rounded-pill badge-subtle-success d-none d-md-inline-block ms-2"><span>Verified</span><span class="fas fa-check ms-1" data-fa-transform="shrink-4"></span></span></td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">Mobile No:</td>
                            <td class="p-1"><a class="text-600 text-decoration-none" href="tel:+01234567890 ">+012-345-67890 </a><span class="badge rounded-pill badge-subtle-primary d-none d-md-inline-block ms-2"><span>2-step verification</span><span class="fas fa-link ms-1" data-fa-transform="shrink-4"></span></span></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="dropdown btn-reveal-trigger position-absolute top-0 end-0 m-3"><button class="btn btn-link btn-reveal text-600 btn-sm dropdown-toggle dropdown-caret-none" type="button" id="studentInfoDropdown" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-11"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="studentInfoDropdown"><a class="dropdown-item" href="#!">View Profile</a><a class="dropdown-item" href="#!">Enrolled Courses</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Logout</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card font-sans-serif">
                    <div class="card-header pb-0">
                      <h6 class="mb-0">Spendings</h6>
                    </div>
                    <div class="card-body">
                      <div class="row g-0">
                        <div class="col-6">
                          <h4 class="text-700 lh-1 mb-1"> $1971.52</h4><span class="badge rounded-pill badge-subtle-danger fs-11 align-bottom"><span class="fas fa-caret-down me-1" data-fa-transform="shrink-4"></span><span>5.1% last month</span></span>
                        </div>
                        <div class="col-6 mt-n4 d-flex justify-content-end">
                          <div class="echart-default" data-echart-responsive="true" data-echarts='{"xAxis":{"data":["Day 1","Day 2","Day 3","Day 4","Day 5","Day 6","Day 7","Day 8","Day 9","Day 10"]},"series":[{"type":"line","data":[85,60,120,70,100,15,65,80,60,75,45],"smooth":true,"lineStyle":{"width":2}}],"grid":{"bottom":"2%","top":"2%","right":"0px","left":"0px"}}'></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card font-sans-serif">
                    <div class="card-header pb-0">
                      <h6 class="mb-0">Time on Site</h6>
                    </div>
                    <div class="card-body">
                      <div class="row g-0">
                        <div class="col-6">
                          <h4 class="text-700 lh-1 mb-1"> 121h 11m</h4><span class="badge rounded-pill badge-subtle-success fs-11 align-bottom"><span class="fas fa-caret-up me-1" data-fa-transform="shrink-4"></span><span>3.6% last month</span></span>
                        </div>
                        <div class="col-6 mt-n4 d-flex justify-content-end">
                          <div class="echart-default" data-echart-responsive="true" data-echarts='{"xAxis":{"data":["Day 1","Day 2","Day 3","Day 4","Day 5","Day 6","Day 7","Day 8"]},"series":[{"type":"line","data":[55,60,40,120,70,80,35,80,85],"smooth":true,"lineStyle":{"width":2}}],"grid":{"bottom":"2%","top":"2%","right":"0px","left":"10px"}}'></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-6">
              <div class="card h-100 font-sans-serif">
                <div class="card-header bg-body-tertiary d-flex flex-between-center py-2">
                  <h6 class="mb-0">Assignment Scores</h6><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">Individual results<span class="fas fa-angle-right ms-1 fs-10"></span></a>
                </div>
                <div class="card-body">
                  <div class="row g-0 h-100">
                    <div class="col-sm-7 order-1 order-sm-0">
                      <div class="row g-sm-0 gy-4 row-cols-2 h-100 align-content-between">
                        <div class="col">
                          <div class="d-flex gap-2 mb-3">
                            <div class="vr rounded ps-1 bg-success"></div>
                            <h6 class="lh-base text-700 mb-0">90-100%</h6>
                          </div>
                          <h5 class="fw-normal"> 10 Courses</h5>
                          <h6 class="mb-0"><span class="text-500 me-2">this week</span><span class="badge rounded-pill badge-subtle-success"><span class="fas fa-caret-up me-1" data-fa-transform="shrink-4"></span><span>2.1%</span></span></h6>
                        </div>
                        <div class="col">
                          <div class="d-flex gap-2 mb-3">
                            <div class="vr rounded ps-1 bg-primary"></div>
                            <h6 class="lh-base text-700 mb-0">70-90%</h6>
                          </div>
                          <h5 class="fw-normal"> 16 Courses</h5>
                          <h6 class="mb-0"><span class="text-500 me-2">this week</span><span class="badge rounded-pill badge-subtle-danger"><span class="fas fa-caret-down me-1" data-fa-transform="shrink-4"></span><span>5.1%</span></span></h6>
                        </div>
                        <div class="col">
                          <div class="d-flex gap-2 mb-3">
                            <div class="vr rounded ps-1 bg-info"></div>
                            <h6 class="lh-base text-700 mb-0">40-70%</h6>
                          </div>
                          <h5 class="fw-normal"> 12 Courses</h5>
                          <h6 class="mb-0"><span class="text-500 me-2">this week</span><span class="badge rounded-pill badge-subtle-secondary"><span>0.0%</span><span class=" ms-1" data-fa-transform="shrink-4"></span></span></h6>
                        </div>
                        <div class="col">
                          <div class="d-flex gap-2 mb-3">
                            <div class="vr rounded ps-1 bg-warning"></div>
                            <h6 class="lh-base text-700 mb-0">0-40%</h6>
                          </div>
                          <h5 class="fw-normal"> 2 Courses</h5>
                          <h6 class="mb-0"><span class="text-500 me-2">this week</span><span class="badge rounded-pill badge-subtle-primary"><span class="fas fa-plus me-1" data-fa-transform="shrink-4"></span><span>3.5%</span></span></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-5 mb-5 mb-sm-0"><!-- Find the JS file for the following chart at: src/js/charts/echarts/assignment-scores.js--><!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                      <div class="echart-assignment-scores" data-echart-responsive="true"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-3">
            <div class="col-lg-5 col-xxl-3">
              <div class="card h-100">
                <div class="card-header bg-body-tertiary d-flex flex-between-center py-2">
                  <h6 class="mb-0">Payment Methods</h6>
                  <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-payment-methods" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-payment-methods"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row g-3 h-100">
                    <div class="col-sm-6 col-lg-12">
                      <div class="card position-relative rounded-4">
                        <div class="bg-holder bg-card rounded-4" style="background-image:url(<?php echo BASE_URL?>assets/img/icons/spot-illustrations/corner-2.png);"></div><!--/.bg-holder-->
                        <div class="card-body p-3 pt-5 pt-xxl-4"><img class="mb-3" src="<?php echo BASE_URL?>assets/img/icons/chip.png" alt="" width="30" />
                          <h6 class="text-primary font-base lh-1 mb-1">**** **** **** 9876</h6>
                          <h6 class="fs-11 fw-semi-bold text-facebook mb-3">12/26</h6>
                          <h6 class="mb-0 text-facebook">Michael Giacchino</h6><img class="position-absolute end-0 bottom-0 mb-2 me-2" src="<?php echo BASE_URL?>assets/img/icons/master-card.png" alt="" width="70" />
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-12">
                      <table class="table table-borderless fw-medium font-sans-serif fs-10 mb-2">
                        <tbody>
                          <tr>
                            <td class="p-1" style="width: 35%;">Type:</td>
                            <td class="p-1 text-600">Mastercard debit card</td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">Name:</td>
                            <td class="p-1 text-600">Michael Giacchino</td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">Expires:</td>
                            <td class="p-1 text-600">DEC 2026</td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">Issuer:</td>
                            <td class="p-1 text-600">Falcon Finances</td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">ID:</td>
                            <td class="p-1 text-600">card_3d1avx3zcafd62</td>
                          </tr>
                        </tbody>
                      </table><span class="badge rounded-pill badge-subtle-success me-2"><span>Verified</span><span class="fas fa-check ms-1" data-fa-transform="shrink-4"></span></span><span class="badge rounded-pill badge-subtle-warning"><span>Non Billable</span><span class="fas fa-exclamation-triangle ms-1" data-fa-transform="shrink-4"></span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-8 col-xxl-9 order-xxl-1 order-lg-2 order-1">
              <div class="card h-100" id="paymentHistoryTable" data-list='{"valueNames":["course","invoice","date","amount","status"],"page":5}'>
                <div class="card-header d-flex flex-between-center">
                  <h5 class="mb-0 text-nowrap py-2 py-xl-0">Payment History</h5>
                  <div><button class="btn btn-falcon-default btn-sm me-2" type="button"><span class="fas fa-filter fs-11"></span><span class="d-none d-sm-inline-block ms-1 align-middle">Filter</span></button><button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt fs-11"></span><span class="d-none d-sm-inline-block ms-1 align-middle">Export</span></button></div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive scrollbar">
                    <table class="table mb-0 fs-10 border-200 overflow-hidden">
                      <thead class="bg-body-tertiary font-sans-serif">
                        <tr>
                          <th class="text-900 sort align-middle fw-medium" data-sort="course">Course</th>
                          <th class="text-900 sort align-middle fw-medium" data-sort="invoice">Invoice no.</th>
                          <th class="text-900 sort align-middle fw-medium" data-sort="date">Date</th>
                          <th class="text-900 sort align-middle fw-medium text-end" data-sort="amount">Amount</th>
                          <th class="text-900 sort align-middle fw-medium text-end" data-sort="status">Payment Status</th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        <tr class="fw-semi-bold">
                          <td class="align-middle pe-5 py-3 course"><a href="course/course-details.html">Course#123232</a></td>
                          <td class="align-middle white-space-nowrap pe-6 py-3 invoice">#FA613145</td>
                          <td class="align-middle white-space-nowrap pe-6 py-3 date">01/10/21</td>
                          <td class="align-middle white-space-nowrap py-3 text-end amount">$39.99</td>
                          <td class="align-middle text-end fw-medium font-sans-serif py-3 status text-warning">Pending</td>
                        </tr>
                        <tr class="fw-semi-bold">
                          <td class="align-middle pe-5 py-3 course"><a href="course/course-details.html">Course#147832</a></td>
                          <td class="align-middle white-space-nowrap pe-6 py-3 invoice">#LC014357</td>
                          <td class="align-middle white-space-nowrap pe-6 py-3 date">12/12/21</td>
                          <td class="align-middle white-space-nowrap py-3 text-end amount">$19.99</td>
                          <td class="align-middle text-end fw-medium font-sans-serif py-3 status text-success">Successful</td>
                        </tr>
                        <tr class="fw-semi-bold">
                          <td class="align-middle pe-5 py-3 course"><a href="course/course-details.html">Course#965473</a></td>
                          <td class="align-middle white-space-nowrap pe-6 py-3 invoice">#FC657916</td>
                          <td class="align-middle white-space-nowrap pe-6 py-3 date">23/08/21</td>
                          <td class="align-middle white-space-nowrap py-3 text-end amount">$35.99</td>
                          <td class="align-middle text-end fw-medium font-sans-serif py-3 status text-warning">Pending</td>
                        </tr>
                        <tr class="fw-semi-bold">
                          <td class="align-middle pe-5 py-3 course"><a href="course/course-details.html">Course#854763</a></td>
                          <td class="align-middle white-space-nowrap pe-6 py-3 invoice">#TN654236</td>
                          <td class="align-middle white-space-nowrap pe-6 py-3 date">09/04/21</td>
                          <td class="align-middle white-space-nowrap py-3 text-end amount">$20.99</td>
                          <td class="align-middle text-end fw-medium font-sans-serif py-3 status text-danger">Denied</td>
                        </tr>
                        <tr class="fw-semi-bold">
                          <td class="align-middle pe-5 py-3 course"><a href="course/course-details.html">Course#232645</a></td>
                          <td class="align-middle white-space-nowrap pe-6 py-3 invoice">#ON820965</td>
                          <td class="align-middle white-space-nowrap pe-6 py-3 date">03/09/21</td>
                          <td class="align-middle white-space-nowrap py-3 text-end amount">$45.49</td>
                          <td class="align-middle text-end fw-medium font-sans-serif py-3 status text-success">Successful</td>
                        </tr>
                        <tr class="fw-semi-bold">
                          <td class="align-middle pe-5 py-3 course"><a href="course/course-details.html">Course#232471</a></td>
                          <td class="align-middle white-space-nowrap pe-6 py-3 invoice">#TN755429</td>
                          <td class="align-middle white-space-nowrap pe-6 py-3 date">31/12/21</td>
                          <td class="align-middle white-space-nowrap py-3 text-end amount">$99.95</td>
                          <td class="align-middle text-end fw-medium font-sans-serif py-3 status text-danger">Denied</td>
                        </tr>
                        <tr class="fw-semi-bold">
                          <td class="align-middle pe-5 py-3 course"><a href="course/course-details.html">Course#232558</a></td>
                          <td class="align-middle white-space-nowrap pe-6 py-3 invoice">#TN789426</td>
                          <td class="align-middle white-space-nowrap pe-6 py-3 date">31/12/21</td>
                          <td class="align-middle white-space-nowrap py-3 text-end amount">$55.95</td>
                          <td class="align-middle text-end fw-medium font-sans-serif py-3 status text-warning">Pending</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer text-end bg-body-tertiary">
                  <p class="mb-0 fs-10"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info"> </span><span class="d-none d-sm-inline-block me-2">&mdash;  </span><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xxl-4 order-xxl-2 order-lg-3 order-2">
              <div class="card h-100">
                <div class="card-header bg-body-tertiary d-flex flex-between-center py-2">
                  <h6 class="mb-0">Billing Address</h6>
                  <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-billing-address" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-billing-address"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="row g-0">
                    <div class="col-12">
                      <div class="googlemap" style="min-height: 18.75rem" data-latlng="48.8583701,2.2922873,17" data-scrollwheel="false" data-icon="<?php echo BASE_URL?>assets/img/icons/map-marker.png" data-zoom="17" data-theme="Default">
                        <div class="marker-content">
                          <h5>Excellent Street </h5>
                          <div class="mb-0">987, Apartment 6, Excellent Street, Good Area, Clean City 5434, Canada</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 p-x1">
                      <table class="table table-borderless fw-medium font-sans-serif fs-10 mb-0">
                        <tbody>
                          <tr class="hover-actions-trigger">
                            <td class="p-1" style="width: 35%;">Name:</td>
                            <td class="p-1 text-600">Michael Giacchino<a class="btn btn-link p-0 mt-n1 hover-actions" href="#!"><span class="fas fa-pencil-alt ms-1 fs-11"></span></a></td>
                          </tr>
                          <tr class="hover-actions-trigger">
                            <td class="p-1" style="width: 35%;">Address:</td>
                            <td class="p-1 text-600">987, Apartment 6, Excellent Street, Good Area, Clean City 5434, Canada.<a class="btn btn-link p-0 mt-n1 hover-actions" href="#!"><span class="fas fa-pencil-alt ms-1 fs-11"></span></a></td>
                          </tr>
                          <tr class="hover-actions-trigger">
                            <td class="p-1" style="width: 35%;">Email:</td>
                            <td class="p-1 text-600"> <a class="text-600 text-decoration-none" href="mailto:goodguy@nicemail.com">goodguy@nicemail.com </a><a class="btn btn-link p-0 mt-n1 hover-actions" href="#!"><span class="fas fa-pencil-alt ms-1 fs-11"></span></a></td>
                          </tr>
                          <tr class="hover-actions-trigger">
                            <td class="p-1" style="width: 35%;">Mobile No:</td>
                            <td class="p-1 text-primary"> <a class="text-600 text-decoration-none" href="tel:+12025550110">+1-202-555-0110</a><a class="btn btn-link p-0 mt-n1 hover-actions" href="#!"><span class="fas fa-pencil-alt ms-1 fs-11"></span></a></td>
                          </tr>
                          <tr class="hover-actions-trigger">
                            <td class="p-1" style="width: 35%;">SMS Invoice:</td>
                            <td class="p-1 text-600">On<a class="btn btn-link p-0 mt-n1 hover-actions" href="#!"><span class="fas fa-pencil-alt ms-1 fs-11"></span></a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-7 col-xxl-4 order-xxl-3 order-lg-1 order-3">
              <div class="card h-100 font-sans-serif">
                <div class="card-header bg-body-tertiary d-flex flex-between-center py-2">
                  <h6 class="mb-0">Recent Activities</h6>
                  <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-recent-activities" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-recent-activities"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                    </div>
                  </div>
                </div>
                <div class="card-body py-0 scrollbar-overlay recent-activity-body-height">
                  <div class="timeline-simple">
                    <div class="timeline-item position-relative">
                      <div class="row g-0 align-items-center">
                        <div class="col-auto d-flex align-items-center">
                          <h6 class="timeline-item-date fs-11 text-500 text-truncate mb-0 me-1"> 3h ago</h6>
                          <div class="position-relative">
                            <div class="icon-item icon-item-md shadow-none bg-200"><span class="text-primary fas fa-sign-out-alt"></span></div>
                          </div>
                        </div>
                        <div class="col ps-3 fs-10 text-500">
                          <div class="py-x1">
                            <h5 class="fs-10">Logged out</h5>
                            <p class="mb-0">Logged out from cart screen</p>
                          </div>
                          <hr class="text-200 my-0" />
                        </div>
                      </div>
                    </div>
                    <div class="timeline-item position-relative">
                      <div class="row g-0 align-items-center">
                        <div class="col-auto d-flex align-items-center">
                          <h6 class="timeline-item-date fs-11 text-500 text-truncate mb-0 me-1"> 3h ago</h6>
                          <div class="position-relative">
                            <div class="icon-item icon-item-md shadow-none bg-200"><span class="text-primary fas fa-shopping-cart"></span></div>
                          </div>
                        </div>
                        <div class="col ps-3 fs-10 text-500">
                          <div class="py-x1">
                            <h5 class="fs-10">Added course#123456 to cart</h5>
                            <p class="mb-0">Added course to cart, Did not pay, Left cart</p>
                          </div>
                          <hr class="text-200 my-0" />
                        </div>
                      </div>
                    </div>
                    <div class="timeline-item position-relative">
                      <div class="row g-0 align-items-center">
                        <div class="col-auto d-flex align-items-center">
                          <h6 class="timeline-item-date fs-11 text-500 text-truncate mb-0 me-1"> 3h ago</h6>
                          <div class="position-relative">
                            <div class="icon-item icon-item-md shadow-none bg-200"><span class="text-primary fas fa-download"></span></div>
                          </div>
                        </div>
                        <div class="col ps-3 fs-10 text-500">
                          <div class="py-x1">
                            <h5 class="fs-10">Downloaded Materials of #121212</h5>
                            <p class="mb-0">3 pdf files were downloaded, learner completed 75% </p>
                          </div>
                          <hr class="text-200 my-0" />
                        </div>
                      </div>
                    </div>
                    <div class="timeline-item position-relative">
                      <div class="row g-0 align-items-center">
                        <div class="col-auto d-flex align-items-center">
                          <h6 class="timeline-item-date fs-11 text-500 text-truncate mb-0 me-1"> 5h ago</h6>
                          <div class="position-relative">
                            <div class="icon-item icon-item-md shadow-none bg-200"><span class="text-primary fas fa-envelope"></span></div>
                          </div>
                        </div>
                        <div class="col ps-3 fs-10 text-500">
                          <div class="py-x1">
                            <h5 class="fs-10">Sent a direct mail to Tra_bil37a8</h5>
                            <p class="mb-0">Tra_bil37a8 is trainer of course#121212 </p>
                          </div>
                          <hr class="text-200 my-0" />
                        </div>
                      </div>
                    </div>
                    <div class="timeline-item position-relative">
                      <div class="row g-0 align-items-center">
                        <div class="col-auto d-flex align-items-center">
                          <h6 class="timeline-item-date fs-11 text-500 text-truncate mb-0 me-1"> 5h ago</h6>
                          <div class="position-relative">
                            <div class="icon-item icon-item-md shadow-none bg-200"><span class="text-primary fas fa-file-upload"></span></div>
                          </div>
                        </div>
                        <div class="col ps-3 fs-10 text-500">
                          <div class="py-x1">
                            <h5 class="fs-10">Submitted assignment no.3</h5>
                            <p class="mb-0">Assignment of course#121212 was due yesterday.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-body-tertiary py-2">
                  <div class="row justify-content-between">
                    <div class="col-auto"><select class="form-select form-select-sm">
                        <option value="today" selected="selected">Today</option>
                        <option value="week">last week</option>
                        <option value="month">last month</option>
                      </select></div>
                    <div class="col-auto"><a class="btn btn-sm btn-falcon-default" href="#!">View All</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xxl-4 order-4">
              <div class="card h-100 font-sans-serif">
                <div class="card-header bg-body-tertiary py-2 d-flex flex-between-center">
                  <h6 class="mb-0">Course Status</h6><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">Details<span class="fas fa-angle-right ms-1 fs-10"></span></a>
                </div>
                <div class="card-body p-0 d-flex flex-column justify-content-between"><!-- Find the JS file for the following chart at: src/js/charts/echarts/course-status.js--><!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                  <div class="echart-course-status" data-echart-responsive="true"></div>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex gap-2 flex-between-center flex-wrap fs-11 p-x1 bg-body-tertiary">
                      <h6 class="fs-xxl-10 fs-lg-11 mb-0 d-flex align-items-center gap-2"><span class="fas fa-circle text-primary" data-fa-transform="shrink-4"></span>Completed Courses<span class="badge rounded-pill badge-subtle-success"><span class="fas fa-caret-up me-1" data-fa-transform="shrink-4"></span><span>2.1%</span></span></h6>
                      <p class="text-600 mb-0">13 Courses</p>
                    </li>
                    <li class="d-flex gap-2 flex-between-center flex-wrap fs-11 p-x1">
                      <h6 class="fs-xxl-10 fs-lg-11 mb-0 d-flex align-items-center gap-2"><span class="fas fa-circle text-warning" data-fa-transform="shrink-4"></span>Dropped Courses<span class="badge rounded-pill badge-subtle-primary"><span class="fas fa-caret-up me-1" data-fa-transform="shrink-4"></span><span>3.5%</span></span></h6>
                      <p class="text-600 mb-0">10 Courses</p>
                    </li>
                    <li class="d-flex gap-2 flex-between-center flex-wrap fs-11 p-x1 bg-body-tertiary">
                      <h6 class="fs-xxl-10 fs-lg-11 mb-0 d-flex align-items-center gap-2"><span class="fas fa-circle text-success" data-fa-transform="shrink-4"></span>Refund Claimed<span class="badge rounded-pill badge-subtle-secondary"><span class=" me-1" data-fa-transform="shrink-4"></span><span>0.00%</span></span></h6>
                      <p class="text-600 mb-0">7 Courses</p>
                    </li>
                    <li class="d-flex gap-2 flex-between-center flex-wrap fs-11 p-x1">
                      <h6 class="fs-xxl-10 fs-lg-11 mb-0 d-flex align-items-center gap-2"><span class="fas fa-circle text-info" data-fa-transform="shrink-4"></span>On-going Courses<span class="badge rounded-pill badge-subtle-danger"><span class="fas fa-caret-down me-1" data-fa-transform="shrink-4"></span><span>5.1%</span></span></h6>
                      <p class="text-600 mb-0">20 Courses</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="card h-100 mb-3">
            <div class="card-header bg-body-tertiary py-3">
              <h6 class="mb-0">Browsing New Courses</h6>
            </div>
            <div class="card-body"><!-- Find the JS file for the following chart at: src/js/charts/echarts/browsed-courses.js--><!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
              <div class="echart-browsed-courses h-100" data-echart-responsive="true" data-options='{"optionOne":"newCourseBrowsed","optionTwo":"paidCourseBrowsed"}'></div>
            </div>
            <div class="card-footer bg-body-tertiary py-2">
              <div class="row flex-between-center g-0">
                <div class="col-auto"><button class="btn btn-sm btn-link fs-11 text-600 text-decoration-none px-0 me-2" id="newCourseBrowsed"><span class="fas fa-circle text-primary text-opacity-25 me-1" data-fa-transform="shrink-4"></span>New Courses Browsed</button><button class="btn btn-sm btn-link fs-11 text-600 text-decoration-none px-0" id="paidCourseBrowsed"><span class="fas fa-circle text-primary me-1" data-fa-transform="shrink-4"></span>Paid Courses Browsed</button></div>
                <div class="col-auto"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">View report<span class="fas fa-chevron-right ms-1 fs-11"></span></a></div>
              </div>
            </div>
          </div>
          <div class="card" id="enrolledCoursesTable" data-list='{"valueNames":["title","trainer","date","time","progress","price"]}'>
            <div class="card-header d-flex flex-between-center">
              <h6 class="mb-0">Enrolled Courses</h6>
              <div><button class="btn btn-falcon-default btn-sm me-2" type="button"><span class="fas fa-filter fs-11"></span><span class="d-none d-sm-inline-block ms-1 align-middle">Filter</span></button><button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-expand-arrows-alt fs-11"></span><span class="d-none d-sm-inline-block ms-1 align-middle">Expand</span></button></div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive scrollbar">
                <table class="table mb-0 fs-10 border-200 overflow-hidden table-enrolled-courses">
                  <thead class="bg-body-tertiary font-sans-serif">
                    <tr>
                      <th class="text-800 fw-medium sort" data-sort="title">Course Title </th>
                      <th class="text-800 fw-medium sort" data-sort="trainer">Trainer</th>
                      <th class="text-800 fw-medium sort" data-sort="date">Enrollment</th>
                      <th class="text-800 fw-medium sort" data-sort="time">Worked</th>
                      <th class="text-800 fw-medium sort" data-sort="progress">Progress</th>
                      <th class="text-800 fw-medium sort text-end" data-sort="price">Price</th>
                      <th class="text-800 fw-medium no-sort pe-1 align-middle data-table-row-action"></th>
                    </tr>
                  </thead>
                  <tbody class="list">
                    <tr class="btn-reveal-trigger fw-semi-bold">
                      <td class="align-middle white-space-nowrap title" style="max-width: 23rem;">
                        <div class="d-flex gap-3 align-items-center position-relative"><img class="rounded-1 border border-200" src="<?php echo BASE_URL?>assets/img/elearning/courses/course3.png" width="60" alt="" /><a class="stretched-link text-truncate" href="course/course-details.html">Advanced Design Tools for Modern Designs</a></div>
                      </td>
                      <td class="align-middle text-nowrap trainer"><a class="text-800" href="trainer-profile.html">Bill finger</a></td>
                      <td class="align-middle date">01/10/21</td>
                      <td class="align-middle time">12h:50m:00s</td>
                      <td class="align-middle">
                        <div class="progress rounded-3 worked" style="height: 5px; width:5rem" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 75%"></div>
                        </div>
                      </td>
                      <td class="align-middle text-end price">$39.99</td>
                      <td class="align-middle text-end">
                        <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none float-end" type="button" id="dropdown0" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown0"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger fw-semi-bold">
                      <td class="align-middle white-space-nowrap title" style="max-width: 23rem;">
                        <div class="d-flex gap-3 align-items-center position-relative"><img class="rounded-1 border border-200" src="<?php echo BASE_URL?>assets/img/elearning/courses/course8.png" width="60" alt="" /><a class="stretched-link text-truncate" href="course/course-details.html">Character Design Masterclass: Your First Superhero</a></div>
                      </td>
                      <td class="align-middle text-nowrap trainer"><a class="text-800" href="trainer-profile.html">Bruce Timm</a></td>
                      <td class="align-middle date">01/10/21</td>
                      <td class="align-middle time">10h:40m:50s</td>
                      <td class="align-middle">
                        <div class="progress rounded-3 worked" style="height: 5px; width:5rem" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 60%"></div>
                        </div>
                      </td>
                      <td class="align-middle text-end price">$69.99</td>
                      <td class="align-middle text-end">
                        <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none float-end" type="button" id="dropdown1" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown1"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger fw-semi-bold">
                      <td class="align-middle white-space-nowrap title" style="max-width: 23rem;">
                        <div class="d-flex gap-3 align-items-center position-relative"><img class="rounded-1 border border-200" src="<?php echo BASE_URL?>assets/img/elearning/courses/course1.png" width="60" alt="" /><a class="stretched-link text-truncate" href="course/course-details.html">Script Writing Masterclass: Introdution to Industry Cliches</a></div>
                      </td>
                      <td class="align-middle text-nowrap trainer"><a class="text-800" href="trainer-profile.html">Bill finger</a></td>
                      <td class="align-middle date">01/10/21</td>
                      <td class="align-middle time">12h:50m:00s</td>
                      <td class="align-middle">
                        <div class="progress rounded-3 worked" style="height: 5px; width:5rem" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 55%"></div>
                        </div>
                      </td>
                      <td class="align-middle text-end price">$69.55</td>
                      <td class="align-middle text-end">
                        <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none float-end" type="button" id="dropdown2" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger fw-semi-bold">
                      <td class="align-middle white-space-nowrap title" style="max-width: 23rem;">
                        <div class="d-flex gap-3 align-items-center position-relative"><img class="rounded-1 border border-200" src="<?php echo BASE_URL?>assets/img/elearning/courses/course5.png" width="60" alt="" /><a class="stretched-link text-truncate" href="course/course-details.html">Abstract Painting: Zero to Mastery in Traditional Medium</a></div>
                      </td>
                      <td class="align-middle text-nowrap trainer"><a class="text-800" href="trainer-profile.html">J. H. Williams III</a></td>
                      <td class="align-middle date">03/09/21</td>
                      <td class="align-middle time">38h:10m:09s</td>
                      <td class="align-middle">
                        <div class="progress rounded-3 worked" style="height: 5px; width:5rem" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 85%"></div>
                        </div>
                      </td>
                      <td class="align-middle text-end price">$45.49</td>
                      <td class="align-middle text-end">
                        <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none float-end" type="button" id="dropdown3" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown3"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger fw-semi-bold">
                      <td class="align-middle white-space-nowrap title" style="max-width: 23rem;">
                        <div class="d-flex gap-3 align-items-center position-relative"><img class="rounded-1 border border-200" src="<?php echo BASE_URL?>assets/img/elearning/courses/course7.png" width="60" alt="" /><a class="stretched-link text-truncate" href="course/course-details.html">Character Design Masterclass: Your First Supervillain</a></div>
                      </td>
                      <td class="align-middle text-nowrap trainer"><a class="text-800" href="trainer-profile.html">Bill finger</a></td>
                      <td class="align-middle date">01/10/21</td>
                      <td class="align-middle time">02h:29m:00s</td>
                      <td class="align-middle">
                        <div class="progress rounded-3 worked" style="height: 5px; width:5rem" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 25%"></div>
                        </div>
                      </td>
                      <td class="align-middle text-end price">$39.99</td>
                      <td class="align-middle text-end">
                        <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none float-end" type="button" id="dropdown4" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown4"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="btn-reveal-trigger fw-semi-bold">
                      <td class="align-middle white-space-nowrap title" style="max-width: 23rem;">
                        <div class="d-flex gap-3 align-items-center position-relative"><img class="rounded-1 border border-200" src="<?php echo BASE_URL?>assets/img/elearning/courses/course2.png" width="60" alt="" /><a class="stretched-link text-truncate" href="course/course-details.html">Composition in Comics: Easy to Read Between Panels</a></div>
                      </td>
                      <td class="align-middle text-nowrap trainer"><a class="text-800" href="trainer-profile.html">Bill finger</a></td>
                      <td class="align-middle date">31/12/21</td>
                      <td class="align-middle time">00h:50m:30s</td>
                      <td class="align-middle">
                        <div class="progress rounded-3 worked" style="height: 5px; width:5rem" role="progressbar" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-progress-gradient rounded-pill" style="width: 15%"></div>
                        </div>
                      </td>
                      <td class="align-middle text-end price">$99.99</td>
                      <td class="align-middle text-end">
                        <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none float-end" type="button" id="dropdown5" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown5"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer bg-body-tertiary py-2 text-center"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">Show all enrollments<span class="fas fa-chevron-right ms-1 fs-11"></span></a></div>
          </div>
          <footer class="footer">
            <div class="row g-0 justify-content-between fs-10 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2023 &copy; <a href="https://themewagon.com/">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v3.19.0</p>
              </div>
            </div>
          </footer>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
          <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
              <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-1">
                  <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                  <p class="fs-10 mb-0 text-white">Please create your free Falcon account</p>
                </div><button class="btn-close position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body py-4 px-5">
                <form>
                  <div class="mb-3"><label class="form-label" for="modal-auth-name">Name</label><input class="form-control" type="text" autocomplete="on" id="modal-auth-name" /></div>
                  <div class="mb-3"><label class="form-label" for="modal-auth-email">Email address</label><input class="form-control" type="email" autocomplete="on" id="modal-auth-email" /></div>
                  <div class="row gx-2">
                    <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-password">Password</label><input class="form-control" type="password" autocomplete="on" id="modal-auth-password" /></div>
                    <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-confirm-password">Confirm Password</label><input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" /></div>
                  </div>
                  <div class="form-check"><input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" /><label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a class="white-space-nowrap" href="#!">privacy policy</a></label></div>
                  <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button></div>
                </form>
                <div class="position-relative mt-5">
                  <hr />
                  <div class="divider-content-center">or register with</div>
                </div>
                <div class="row g-2 mt-2">
                  <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                  <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->

    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
      <div class="offcanvas-header settings-panel-header bg-shape">
        <div class="z-1 py-1">
          <div class="d-flex justify-content-between align-items-center mb-1">
            <h5 class="text-white mb-0 me-2"><span class="fas fa-palette me-2 fs-9"></span>Settings</h5><button class="btn btn-primary btn-sm rounded-pill mt-0 mb-0" data-theme-control="reset" style="font-size:12px"> <span class="fas fa-redo-alt me-1" data-fa-transform="shrink-3"></span>Reset</button>
          </div>
          <p class="mb-0 fs-10 text-white opacity-75"> Set your own customized style</p>
        </div>
        <div class="z-1" data-bs-theme="dark"><button class="btn-close z-1 mt-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
      </div>
      <div class="offcanvas-body scrollbar-overlay px-x1 h-100" id="themeController">
        <h5 class="fs-9">Color Scheme</h5>
        <p class="fs-10">Choose the perfect color mode for your app.</p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
          <div class="row gx-2">
            <div class="col-4"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="<?php echo BASE_URL?>assets/img/generic/falcon-mode-default.jpg" alt=""/></span><span class="label-text">Light</span></label></div>
            <div class="col-4"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="<?php echo BASE_URL?>assets/img/generic/falcon-mode-dark.jpg" alt=""/></span><span class="label-text"> Dark</span></label></div>
            <div class="col-4"><input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs-10" for="themeSwitcherAuto"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="<?php echo BASE_URL?>assets/img/generic/falcon-mode-auto.jpg" alt=""/></span><span class="label-text"> Auto</span></label></div>
          </div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-start"><img class="me-2" src="<?php echo BASE_URL?>assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
            <div class="flex-1">
              <h5 class="fs-9">RTL Mode</h5>
              <p class="fs-10 mb-0">Switch your language direction </p><a class="fs-10" href="<?php echo BASE_URL?>documentation/customization/configuration.html">RTL Documentation</a>
            </div>
          </div>
          <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-rtl" type="checkbox" data-theme-control="isRTL" /></div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-start"><img class="me-2" src="<?php echo BASE_URL?>assets/img/icons/arrows-h.svg" width="20" alt="" />
            <div class="flex-1">
              <h5 class="fs-9">Fluid Layout</h5>
              <p class="fs-10 mb-0">Toggle container layout system </p><a class="fs-10" href="<?php echo BASE_URL?>documentation/customization/configuration.html">Fluid Documentation</a>
            </div>
          </div>
          <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" /></div>
        </div>
        <hr />
        <div class="d-flex align-items-start"><img class="me-2" src="<?php echo BASE_URL?>assets/img/icons/paragraph.svg" width="20" alt="" />
          <div class="flex-1">
            <h5 class="fs-9 d-flex align-items-center">Navigation Position</h5>
            <p class="fs-10 mb-2">Select a suitable navigation system for your web application </p>
            <div><select class="form-select form-select-sm" aria-label="Navbar position" data-theme-control="navbarPosition">
                <option value="vertical">Vertical</option>
                <option value="top">Top</option>
                <option value="combo">Combo</option>
                <option value="double-top">Double Top</option>
              </select></div>
          </div>
        </div>
        <hr />
        <h5 class="fs-9 d-flex align-items-center">Vertical Navbar Style</h5>
        <p class="fs-10 mb-0">Switch between styles for your vertical navbar </p>
        <p> <a class="fs-10" href="<?php echo BASE_URL?>modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">See Documentation</a></p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="<?php echo BASE_URL?>assets/img/generic/default.png" alt="" /><span class="label-text"> Transparent</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="<?php echo BASE_URL?>assets/img/generic/inverted.png" alt="" /><span class="label-text"> Inverted</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-card"> <img class="img-fluid img-prototype" src="<?php echo BASE_URL?>assets/img/generic/card.png" alt="" /><span class="label-text"> Card</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs-10" for="navbar-style-vibrant"> <img class="img-fluid img-prototype" src="<?php echo BASE_URL?>assets/img/generic/vibrant.png" alt="" /><span class="label-text"> Vibrant</span></label></div>
          </div>
        </div>
        <div class="text-center mt-5"><img class="mb-4" src="<?php echo BASE_URL?>assets/img/icons/spot-illustrations/47.png" alt="" width="120" />
          <h5>Like What You See?</h5>
          <p class="fs-10">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class="mb-3 btn btn-primary" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a>
        </div>
      </div>
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
      <div class="card-body d-flex align-items-center py-md-2 px-2 py-1">
        <div class="bg-primary-subtle position-relative rounded-start" style="height:34px;width:28px">
          <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></span></div>
        </div><small class="text-uppercase text-primary fw-bold bg-primary-subtle py-2 pe-2 ps-1 rounded-end">customize</small>
      </div>
    </a>

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


<!-- Mirrored from prium.github.io/falcon/v3.19.0/app/e-learning/student-overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Dec 2023 10:53:46 GMT -->
</html>