<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/img/apple-icon.png">
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
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
      data-scroll="false">
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
              <a href="javascript:;" class="nav-link text-dark p-0" id="dropdownMenuButton" data-bs-toggle="dropdown"
                aria-expanded="false">
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
                        <img src="<?= base_url() ?>assets/img/small-logos/logo-spotify.svg"
                          class="avatar avatar-sm bg-gradient-dark  me-3 ">
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
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background"
                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                    opacity="0.593633743"></path>
                                  <path class="color-background"
                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
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
    
    
    
      <div class="row mt-n2">
        <div class="col-12 col-lg-12 m-auto">
          <form class=" ">
    
    
    
            <div class="card  p-3 border-radius-xl bg-white" data-animation="FadeIn">
              <!-- <h5 class="font-weight-bolder">Lead Generator</h5> -->
    
    
              <div class="row button-row d-flex mt-n1 mb-3">

                <h5 class="col-2 font-weight-bolder text-center pt-3 mb-0"><?= $this->session->userdata('customer_name') ?></h5>
                <h5 class="col-2 font-weight-bolder text-center pt-3 mb-0"><?= $this->session->userdata('customer_number') ?></h5>
                <h5 class="col-2 font-weight-bolder text-center pt-3 mb-0"><?= $this->session->userdata('customer_email_id') ?></h5>

                <a href="p-4.html" class="col-4 btn bg-gradient-success ms-auto mb-0 js-btn-next p-3" type="button"
                  title="Submit">Submit</a>
              </div>
    
    
    
    
    
    
              <div class="row ">
    
                <div class="col-lg-9">
                  <div class="card">
                    <div class="card-body p-0">
                      <div class="row   mt-3">
                        <?php foreach($item as $row){ ?>
                          <div class=" col-lg-3 col-md-2 col-3 px-1 d-flex justify-content-center">
                            <input type="checkbox" class="btn-check item_check" id="<?= $row->item_id ?>">
                            <label class="btn  btn-outline-secondary  " for="<?= $row->item_id ?>">
                              <h5 class="m-0"><?= $row->item_name ?></h5>
                            </label>
                          </div>    
                        <?php } ?>                                    
                      </div>
    
                      <!-- <div class=" ms-md-auto pe-md-3 row justify-content-center mb-4">
                                                  <div class="col-6">
                                                    <div class=" input-group">
                                                      <input type="text" class="form-control" placeholder="Type here...">
                                                      <span class="bg-gradient-success input-group-text text-body"><i
                                                          class="fas fa-search text-white" aria-hidden="true"></i></span>
                                                    </div>
                                                  </div>
                                                </div> -->
    
    
                    </div>
                  </div>
                </div>
    
                <div class="col-lg-3  ">
                  <div class="button-row d-flex  ">
    
    
                  </div>
                  <div class="card  ">
                    <div class="card-body p-0">
                      <!-- <div class="card-header ms-2 p-0 ">
                                                  <h6 class="mb-0">Product list</h6>
                                                </div> -->
                      <div class="row   mt-4">
                        <div class=" ms-1 pe-md-3 row justify-content-center mb-3">
                          <div class="col-12">
                            <div class=" input-group">
                              <input type="text" id="search_item"  class="form-control" placeholder="Type here...">
                              <span class="bg-gradient-success input-group-text text-body"><i
                                  class="fas fa-search text-white" aria-hidden="true"></i></span>
                            
                            </div>
                            <div id="searchResults"></div>

                          </div>
                          <div class=" mt-4">
                            <button type="button" class="col-12 btn btn-outline-dark mb-0">Product
                              List</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
    
                </div>
    
                <?php foreach($item1 as $row1){ ?>
                  <div class="row mt-2 all_item_class " id="divis<?= $row1->item_id ?>">
                    <div class="col-12 ">
                      <div class="card mb-1">
                        <div class="card-header pb-0">
                          <h6><?= $row1->item_name ?></h6>
                        </div>
                        <div class="card-body px-0  pt-0 pb-2">
                          <div class="table-responsive p-0  " style="overflow-y: hidden;"> 
                             <table class="table align-items-center mb-0">
                                <thead>
                                  <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      product primary details
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                      payment options
                                    </th>

                                    <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      offer
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      Required document
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      Department approvals
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                      status
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                    <td class="align-baseline">
                                        <div class="d-flex px-3 py-1">
                                          <!-- <div>
                                              <img
                                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/blue-shoe.jpg"
                                                class="avatar me-3" alt="image">
                                            </div> -->
                                          <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0  ">Name </h6>
                                            <!-- <p class="text-sm font-weight-bold text-secondary mb-0"><span
                                                                                                                    class="text-success">8.232</span> orders</p> -->
                                          </div>
                                        </div>

                                        <div class="d-flex px-3 flex-column justify-content-center">
                                          <h6 class="mb-2  text-sm">amount </h6>

                                        </div>
                                        <div class="d-flex px-3 flex-column justify-content-center">
                                          <h6 class="mb-2  text-sm">with/without tax </h6>

                                        </div>
                                        <div class="d-flex px-3 flex-column justify-content-center">
                                          <h6 class="mb-2  text-sm">Delivery date </h6>

                                        </div>
                                        <div class="d-flex px-3 flex-column justify-content-center">
                                          <h6 class="mb-2  text-sm">Area </h6>
                                        </div>
                                        <div class="d-flex px-3 flex-column justify-content-center">
                                          <h6 class="mb-2  text-sm">stock </h6>
                                        </div>
                                      </td>


                                      <td class="align-baseline">
                                        <div class="d-flex mb-2 flex-column justify-content-center">
                                          <select class="select-box form-control" name="choices-button-discount" id="choices-button-discount"
                                            placeholder="Departure">
                                            <option value="Choice 1" selected="">one time payment</option>
                                            <option value="Choice 2">10%</option>
                                            <option value="Choice 3">25%</option>
                                            <option value="Choice 4">50%</option>
                                          </select>

                                        </div>

                                        <div class="d-flex mb-2 flex-column justify-content-center">
                                          <select class="select-box form-control" name="choices-button-discount" id="choices-button-discount"
                                            placeholder="Departure">
                                            <option value="Choice 1" selected="">installment</option>
                                            <option value="Choice 2">10%</option>
                                            <option value="Choice 3">25%</option>
                                            <option value="Choice 4">50%</option>
                                          </select>

                                        </div>

                                        <div class="d-flex mb-2 flex-column justify-content-center">
                                          <select class="select-box form-control" name="choices-button-discount" id="choices-button-discount"
                                            placeholder="Departure">
                                            <option value="Choice 1" selected="">monthly rent</option>
                                            <option value="Choice 2">10%</option>
                                            <option value="Choice 3">25%</option>
                                            <option value="Choice 4">50%</option>
                                          </select>

                                        </div>
                                      </td>

                                      <td class="align-baseline  text-sm">
                                        <div class="d-flex mb-2 flex-column justify-content-center">
                                          <select class="select-box form-control" name="choices-button-discount" id="choices-button-discount"
                                            placeholder="Departure">
                                            <option value="Choice 1" selected="">Discount</option>
                                            <option value="Choice 2">10%</option>
                                            <option value="Choice 3">25%</option>
                                            <option value="Choice 4">50%</option>
                                          </select>

                                        </div>
                                        <div class="d-flex mb-2 flex-column  justify-content-center">
                                          <select class="select-box form-control " name="choices-button-sdiscount"
                                            id="choices-button-sdiscount" placeholder="Departure">
                                            <option value="Choice 1" selected="">Special Discount</option>
                                            <option value="Choice 2">50%</option>
                                            <option value="Choice 3">75%</option>
                                            <option value="Choice 4">100%</option>
                                          </select>

                                        </div>
                                        <div class="d-flex mb-2 flex-column  justify-content-center">
                                          <select class="select-box form-control " name="choices-button-sdiscount"
                                            id="choices-button-sdiscount" placeholder="Departure">
                                            <option value="Choice 1" selected="">coupon</option>
                                            <option value="Choice 2">50%</option>
                                            <option value="Choice 3">75%</option>
                                            <option value="Choice 4">100%</option>
                                          </select>

                                        </div>

                                      </td>

                                      <td class="align-baseline  text-sm">
                                        <div class=" ms-4">
                                          <div class="form-check d-flex justify-content-start mb-2">
                                            <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault1">
                                            <label class="custom-control-label ms-3 my-auto" style="" for="flexCheckDefault1">Adhar</label>
                                          </div>
                                          <div class="form-check d-flex justify-content-start mb-2">
                                            <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault2">
                                            <label class="custom-control-label ms-3 my-auto" style="" for="flexCheckDefault2">pan</label>
                                          </div>
                                          <div class="form-check d-flex justify-content-start mb-2">
                                            <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault3">
                                            <label class="custom-control-label ms-3 my-auto" style="" for="flexCheckDefault3">amc</label>
                                          </div>
                                          <div class="form-check d-flex justify-content-start mb-2">
                                            <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault4">
                                            <label class="custom-control-label ms-3 my-auto" style=""
                                              for="flexCheckDefault4">driving license</label>
                                          </div>
                                        </div>
                                      </td>

                                      <td class="align-baseline text-center text-sm">
                                        <div class="d-flex mb-2 flex-row justify-content-center">
                                          <select class="select-box form-control" name="choices-button-discount" id=""
                                            placeholder="Departure">
                                            <option value="" selected="">which user</option>
                                            <option value="Choice 1">1</option>
                                            <option value="Choice 2">2</option>
                                            <option value="Choice 3">3</option>
                                          </select>
                                          <!-- Button trigger modal -->
                                          <button type="button" class="btn mb-0  bg-gradient-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="ni ni-email-83"></i>
                                          </button>

                                          <!-- Modal -->
                                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  ...
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn bg-gradient-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                  <button type="button" class="btn bg-gradient-primary">Save changes</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="d-flex mb-2 flex-row justify-content-center">
                                          <select class="select-box form-control" name="choices-button-discount" id=""
                                            placeholder="Departure">
                                            <option value="" selected="">dept name</option>
                                            <option value="Choice 1">1</option>
                                            <option value="Choice 2">2</option>
                                            <option value="Choice 3">3</option>
                                          </select>
                                          <!-- Button trigger modal -->
                                          <button type="button" class="btn mb-0  bg-gradient-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="ni ni-email-83"></i>
                                          </button>

                                          <!-- Modal -->
                                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  ...
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn bg-gradient-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                  <button type="button" class="btn bg-gradient-primary">Save changes</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="d-flex mb-2 flex-row justify-content-center">
                                          <select class="select-box form-control" name="choices-button-discount" id=""
                                            placeholder="Departure">
                                            <option value="" selected="">dpt person</option>
                                            <option value="Choice 1">1</option>
                                            <option value="Choice 2">2</option>
                                            <option value="Choice 3">3</option>
                                          </select>
                                          <!-- Button trigger modal -->
                                          <button type="button" class="btn mb-0  bg-gradient-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="ni ni-email-83"></i>
                                          </button>

                                          <!-- Modal -->
                                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  ...
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn bg-gradient-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                  <button type="button" class="btn bg-gradient-primary">Save changes</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                      </td>

                                      <td class="align-baseline text-center text-sm">

                                        <div class="d-flex mb-2 flex-column justify-content-center">
                                          <select class="select-box form-control" name="choices-button-discount" id="choices-button-discount"
                                            placeholder="Departure">
                                            <option value="Choice 1" selected="">underprocessing</option>
                                            <option value="Choice 2">1</option>
                                            <option value="Choice 3">2</option>
                                            <option value="Choice 4">3</option>
                                          </select>

                                        </div>
                                        <div class="d-flex mb-2 flex-column justify-content-center">
                                          <select class="select-box form-control" name="choices-button-discount" id="choices-button-discount"
                                            placeholder="Departure">
                                            <option value="Choice 1" selected="">completed</option>
                                            <option value="Choice 2">1</option>
                                            <option value="Choice 3">2</option>
                                            <option value="Choice 4">3</option>
                                          </select>

                                        </div>
                                        <div class="d-flex mb-2 flex-column justify-content-center">
                                          <select class="select-box form-control" name="choices-button-discount" id="choices-button-discount"
                                            placeholder="Departure">
                                            <option value="Choice 1" selected="">reversing</option>
                                            <option value="Choice 2">1</option>
                                            <option value="Choice 3">2</option>
                                            <option value="Choice 4">3</option>
                                          </select>

                                        </div>

                                        </td>

                                        <td class="align-items-center text-center text-sm">
                                          <div class="d-flex  flex-column justify-content-center">
                                            <a href="">
                                              <h6 class="mb-2 w-100 btn btn-primary text-sm">imp requirements </h6>
                                            </a>
                                          </div>



                                          <div class="d-flex  flex-column justify-content-center">
                                            <a href="">
                                              <h6 class="mb-2 w-100 btn bg-gradient-warning text-sm">More </h6>
                                            </a>
                                          </div>

                                        </td>
                                   </tr>

                                   <tr>
                                    <thead>
                                      <tr>

                                        <th class=" text-secondary text-xxs font-weight-bolder ">
                                        </th>
                                        <th class=" text-secondary text-xxs font-weight-bolder ps-2">
                                          <input class=" form-control" type="text" placeholder="expected dicount" />
                                        </th>
                                        <th class=" text-secondary text-xxs font-weight-bolder ps-2">
                                          <input class=" form-control" type="text" placeholder="no of enquiry" />
                                        </th>
                                        <th class=" text-secondary text-xxs font-weight-bolder ps-2">
                                          <input class=" form-control" type="text" placeholder="delivery date" />
                                        </th>
                                        <th class=" text-secondary text-xxs font-weight-bolder ps-2">
                                          <input class=" form-control" type="text" placeholder="anymessages" />
                                        </th>
                                        <th class="col-2 text-uppercase text-secondary text-xxs font-weight-bolder ps-2">
                                          <select class="form-control select-box" name="" id="" placeholder="Departure">
                                            <option value="Choice 1" selected="">assigned</option>
                                            <option value="Choice 2">50%</option>
                                            <option value="Choice 3">75%</option>
                                            <option value="Choice 4">100%</option>
                                          </select>
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">
                                          <a href="">
                                            <h6 class="mb-2 w-100 btn bg-gradient-danger text-sm">Remove </h6>
                                          </a>
                                        </th>

                                      </tr>
                                    </thead>
                                  </tr>
                                </tbody>
                             </table>          
                          </div>
                        </div>
                      </div>
                    </div> 
                  </div>
                <?php } ?>
 

               <!-- above -end of item listing div -->
              </div>
    
    
    
    
    
    
            </div>
          </form>
        </div>
    
    
      </div>
    
    </div>


      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>,

                <a href="https://grandlady.in" class="font-weight-bold" target="_blank">grandlady</a>
                <img class="mb-2 w-3" src="<?= base_url() ?>assets/img/GL-img/gl-logo1.webp" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://grandlady.in" class="nav-link text-muted text-uppercase"
                    target="_blank">grandlady</a>
                </li>
                <li class="nav-item">
                  <a href="https://grandlady.in/about.html" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://grandlady.in/product.html" class="nav-link text-muted" target="_blank">Product</a>
                </li>
                <li class="nav-item">
                  <a href="https://grandlady.in/contact.html" class="nav-link pe-0 text-muted"
                    target="_blank">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
  </main>

  <!--   Core JS Files   -->
  <script src="<?= base_url() ?>assets/js/core/popper.min.js"></script>
  <script src="<?= base_url() ?>assets/js/core/bootstrap.min.js"></script>
  <!-- <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script> -->
  <!-- <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script> -->
  <script src="<?= base_url() ?>assets/js/plugins/multistep-form.js"></script>
  <script src="<?= base_url() ?>assets/js/plugins/choices.js"></script>

  <script src="<?= base_url() ?>assets/js/plugins/dragula/dragula.min.js"></script>
  <script src="<?= base_url() ?>assets/js/plugins/jkanban/jkanban.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


<input type="hidden" id="base" value="<?php echo base_url(); ?>">
<script src="<?php echo base_url() ?>assets/js/crm1.js"></script>


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
  <script src="<?= base_url() ?>assets/js/argon-dashboard.min.js?v=2.0.4"></script>

</body>

</html>