<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/GL-img/gl-logo1.webp">
  <title>
    GL CRM
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?= base_url() ?>assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?= base_url() ?>assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url() ?>assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link id="pagestyle" href="<?= base_url() ?>assets/css/test.css" rel="stylesheet" />
  <link id="pagestyle" href="<?= base_url() ?>assets/css/glstyle.css" rel="stylesheet" />


  <!-- country code -->
  <link rel='stylesheet' href='https://intl-tel-input.com/node_modules/intl-tel-input/build/css/intlTelInput.css?1549804213570'>

  <link href="<?php echo base_url(); ?>assets/select2/dist/css/select2.min.css" rel="stylesheet" />


</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-250 bg-gradient-light position-absolute w-100"></div>
  <!-- <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="./assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Argon Dashboard 2</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./pages/dashboard.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/tables.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/billing.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Billing</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/virtual-reality.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Virtual Reality</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/rtl.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/profile.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/sign-in.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/sign-up.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="./assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">Need help?</h6>
            <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
          </div>
        </div>
      </div>
      <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
      <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
    </div>
  </aside> -->
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="dash.html">Dashboard</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">pages</li>
          </ol>
          <!-- <h6 class="font-weight-bolder text-dark mb-0">pages</h6> -->
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!-- <div class="input-group ">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div> -->
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-dark font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <!-- <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li> -->

            <li class="nav-item dropdown  px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-dark p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="<?= base_url() ?>assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="<?= base_url() ?>assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                  </path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->


    <div class="container-fluid mt-n4 py-4">

      <div class="row mb-5">
        <div class="col-12">
          <div class=" mb-5">



            <div class="row mt-n2">
              <div class="col-12 col-lg-12 m-auto">
                <form class="" id="customer_form">

                  <div class="card  p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                    <div>
                      <h5 class="font-weight-bolder mb-0">About me</h5>
                      <p class="mb-0 text-sm">Mandatory informations</p>

                      <div class="button-row d-flex mt-n5 mb-4">
                        <!-- <a href="p-3.html" class="col-4 btn bg-gradient-dark ms-auto mb-0 js-btn-next p-3" type="button"
                          title="Next">Next</a> -->
                        <button type="submit" class="col-4 btn bg-gradient-dark ms-auto mb-0 js-btn-next p-3 ">Next</button>
                      </div>
                    </div>


                    <div class="">



                      <div class="mb-2">
                        <div class="card">
                          <div class="card-body p-2">
                            <div class="row mt-3">
                              <div class="col-12 col-sm-4">
                                <!-- <label>First Name</label> -->
                                <input class=" form-control" type="text" name="customer_name" placeholder="customer name" />
                              </div>
                              <!-- <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                          <label>Country Code</label>
                          <select name="" id="address-country" class="form-control "></select>
                        </div> -->
                              <div class="col-12 col-sm-4">
                                <!-- <label>Enter Mobile Number</label> -->
                                <input type="number" id="phone" class=" form-control" name="phone" placeholder="Enter Mobile Number" value="">

                                <div class="row px-xl-5 px-sm-4 px-0  mt-1">
                                  <div class="col-3 ms-auto px-1">
                                    <a class="btn btn-outline-light mb-0 w-100" href="javascript:;">
                                      <img width="32px" height="22px" src="<?= base_url() ?>assets/img/GL-img/flag/ind.jpg" alt="">
                                    </a>
                                  </div>
                                  <div class="col-3 px-1">
                                    <a class="btn btn-outline-light mb-0 w-100" href="javascript:;">
                                      <img width="32px" height="22px" src="<?= base_url() ?>assets/img/GL-img/flag/uk.jpg" alt="">
                                    </a>
                                  </div>
                                  <div class="col-3 px-1">
                                    <a class="btn btn-outline-light mb-0 w-100" href="javascript:;">
                                      <img width="32px" height="22px" src="<?= base_url() ?>assets/img/GL-img/flag/usa.jpg" alt="">
                                    </a>
                                  </div>
                                  <div class="col-3 me-auto px-1">
                                    <a class="btn btn-outline-light mb-0 w-100" href="javascript:;">
                                      <img width="32px" height="22px" src="<?= base_url() ?>assets/img/GL-img/flag/canada.jpg" alt="" value="+1">
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                                <!-- <label>Email Address</label> -->
                                <input class=" form-control" type="email" name="email" placeholder="Email Address" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-12 ">
                        <div class="row ">
                          <div class="col-lg-3">
                            <div class="card">
                              <div class="card-body">
                                <div class="row   mt-3">
                                  <h6 class="font-weight-bolder text-center">Socials</h6>
                                  <?php $i = 0;
                                  foreach ($socials as $row) {
                                    $i++ ?>
                                    <!-- <div class="col-lg-4 col-md-2 col-3 px-1 form-check">
                                    <label class="btn  btn-outline-secondary  " for="btncheck4">
                                    <input type="checkbox" id="vehicle1" name="social[]" value="<?= $row->social_id  ?>">                                 
                                      <img width="32px" height="32px" src="<?= base_url() ?>assets/img/GL-img/social/<?= $row->social_media_image ?>"
                                        alt="">
                                    </label>
                                  </div> -->
                                    <div class="col-lg-4 col-md-2 col-3 px-1 form-check">
                                      <label class="btn  btn-outline-secondary  " for="btn<?= $i ?>">
                                        <img width="32px" height="32px" src="<?= base_url() ?>assets/img/GL-img/social/<?= $row->social_media_image ?>" alt="">
                                        <input class="form-check-input social-btn" type="checkbox" name="social[]" value="<?= $row->social_id  ?>" id="btn<?= $i ?>">
                                      </label>
                                    </div>
                                  <?php } ?>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-2">
                            <div class="card">
                              <div class="card-body">
                                <?php foreach ($website as $row) { ?>
                                  <div class="row  mt-3">
                                    <div class="col">
                                      <div class="form-check ">
                                        <input class="form-check-input " type="checkbox" name="website[]" value="<?= $row->knew_by_website_id ?>" id="flexCheckDefault1">
                                        <label class="custom-control-label " style="" for="flexCheckDefault1"><?= $row->website_name ?></label>
                                      </div>
                                    </div>
                                  </div>
                                <?php } ?>
                              </div>
                            </div>
                          </div>


                          <div class="col-lg-4" id="other_source_div">
                            <div class="card">
                              <div class="card-body">
                                <div class="row mt-3">
                                  <?php foreach ($other as $row) { ?>
                                    <div class="col-6 col-sm-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="other[]" value="<?= $row->knew_by_other_id  ?>" id="flexCheckDefault3">
                                        <label class="custom-control-label" for="flexCheckDefault3"><?= $row->knew_by_other_name ?> </label>
                                      </div>
                                    </div>
                                  <?php } ?>
                                </div>
                                <div class="row mt-3">
                                  <div class="col-12 col-sm-6">
                                    <label>Other Sources</label>
                                    <input class=" form-control" type="text" name="other_source" id="other_source" placeholder="Others" />
                                    <button class="btn btn-primary btn-xs mt-1" id="other_src_btn" type="button">Add</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-3" id="ser">
                            <div class="card">
                              <div class="card-body">
                                <div class="row mt-3">
                                  <div class="col-12 col-sm-12">
                                    <label class="form-label">AGENT</label> <br>
                                    <select class="select-box form-control select2" name="agent" id="choices-button-agent">
                                      <option value="" selected disabled>--Select--</option>
                                      <?php
                                      foreach ($agent as $row) {
                                        echo '<option value="' . $row->agent_id . '">' . $row->agent_name . '</option>';
                                      }
                                      ?>
                                    </select>
                                    <br>
                                    <button type="button" class=" btn btn-xs btn-dark mt-1" data-bs-toggle="modal" data-bs-target="#agent_modal">
                                      Add Agent
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="Label">add</h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            ...
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn bg-gradient-primary">Save changes</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>


                                  </div>
                                  <!-- <div class="ms-md-auto pe-md-3 d-flex align-items-center mt-4"> -->
                                  <!-- <div class="input-group">
                                      <span class="input-group-text text-body"><i class="fas fa-search"
                                          aria-hidden="true"></i></span>
                                      <input type="text" class="form-control" placeholder="Type here...">
                                    </div> -->
                                  <div class="col-12 col-sm-12">
                                    <label class="form-label">CUSTOMERS</label>
                                    <select class="select-box form-control select_cust" name="cust" id="choices-button-cust">
                                      <option value="" selected disabled>--Select--</option>
                                      <?php
                                      foreach ($cust as $row) {
                                        echo '<option value="' . $row->customer_id . '">' . $row->name . '</option>';
                                      }
                                      ?>
                                    </select>
                                    <!-- <button type="button" class=" btn btn-xs btn-dark mt-1" data-bs-toggle="modal" data-bs-target="#cust_details">
                                      Add Customer 
                                    </button> -->
                                    <a href="<?= base_url() ?>main/email_test" class=" btn btn-xs btn-dark mt-1" target="_blank"> Add Customer</a>
                                  </div>
                                  <!-- </div> -->
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>


                    </div>
                  </div>

                  <!--Agent Modal -->
                  <div class="modal fade" id="agent_modal" tabindex="-1" role="dialog" aria-labelledby="cust_details" aria-hidden="true">
                    <div class="modal-dialog  modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="productlistLabel">Add Agent </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="card">
                                <div class="card-body p-0">
                                  <div class="row mt-3 p-3">
                                    <form action="" method="post" id="agent_form">
                                      <div class="form-group mb-2">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" id="agent_name" placeholder="Enter Name">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Phone number</label>
                                        <input type="number" class="form-control" id="agent_no" placeholder="Enter Number">
                                      </div>


                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Email </label>
                                        <input type="number" class="form-control" id="agent_email" placeholder="Enter Number">
                                      </div>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" id="agent_form_id">Save changes</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                </form>

              </div>
            </div>
          </div>





          </form>
        </div>
      </div>
    </div>
    </div>
    </div>

    <footer class="footer pt-3  mt-auto">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              ©
              <script>
                document.write(new Date().getFullYear())
              </script>,

              <a href="https://grandlady.in" class="font-weight-bold" target="_blank">grandlady</a>
              <img class="mb-2 w-3" src="assets/img/GL-img/gl-logo1.webp" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://grandlady.in" class="nav-link text-muted text-uppercase" target="_blank">grandlady</a>
              </li>
              <li class="nav-item">
                <a href="https://grandlady.in/about.html" class="nav-link text-muted" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://grandlady.in/product.html" class="nav-link text-muted" target="_blank">Product</a>
              </li>
              <li class="nav-item">
                <a href="https://grandlady.in/contact.html" class="nav-link pe-0 text-muted" target="_blank">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    </div>
  </main>

  <input type="hidden" id="base" value="<?php echo base_url(); ?>">

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

  <!--   Core JS Files   -->
  <script src="<?= base_url() ?>assets/js/core/popper.min.js"></script>
  <script src="<?= base_url() ?>assets/js/core/bootstrap.min.js"></script>
  <!-- <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script> -->
  <!-- <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script> -->
  <script src="<?= base_url() ?>assets/js/plugins/multistep-form.js"></script>
  <script src="<?= base_url() ?>assets/js/plugins/choices.js"></script>

  <script src="<?= base_url() ?>assets/js/plugins/dragula/dragula.min.js"></script>
  <script src="<?= base_url() ?>assets/js/plugins/jkanban/jkanban.js"></script>


  <script src="<?php echo base_url(); ?>assets/select2/dist/js/select2.min.js"></script>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->

  <!-- country-code -->
  <script src='https://intl-tel-input.com/node_modules/intl-tel-input/build/js/intlTelInput.js?1549804213570'></script>
  <script src="assets/js/gl/country-code.js"></script>
  <script src="<?php echo base_url() ?>assets/js/crm1.js"></script>

  <!-- <script>
    $("#phone").intlTelInput({
	initialCountry: "in",
	separateDialCode: true,
	// utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
});
  </script> -->
  <!-- country-code -->

  <script>
    $(document).ready(function() {
      $('.select2').select2();

    });

    $(document).ready(function() {
      $('.select_cust').select2();
    });
  </script>

  <script>
    if (document.getElementById('choices-button-assigned')) {
      var element = document.getElementById('choices-button-assigned');
      const example = new Choices(element);
    }
  </script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>

</body>

</html>