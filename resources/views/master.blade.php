<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"

>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>@section('title')</title>
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href=" {{ asset('assets/img/favicon/favicon.ico') }} " />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href=" {{ asset('assets/vendor/fonts/boxicons.css') }} " />

    <!-- Core CSS -->
    <link rel="stylesheet" href=" {{ asset('assets/vendor/css/core.css') }} " />
    <link rel="stylesheet" href=" {{ asset('assets/vendor/css/theme-default.css') }} " />
    <link rel="stylesheet" href=" {{ asset('assets/css/demo.css') }} " />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href=" {{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }} " />

    <link rel="stylesheet" href=" {{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }} " />
    <script src=" {{ asset('assets/vendor/js/helpers.js') }} "></script>
    <script src=" {{ asset('assets/js/config.js') }} "></script>

    <style>
      .menu-vertical .menu-item.active{
        background-color: red;
      }
      .menu-vertical .show{
        background-color: rgb(181, 249, 181);
        display: block;
      }
    </style>

    @stack('head')
    @stack('css')

  </head>

 <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

       @yield('sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div>
                <ul class="navbar-nav navbar-fixed-top">
                  <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.library') }}">Library</a>
                  </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Merchandising</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Planning</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">TNA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Commercial</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">MCD</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Wash</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">SMN</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Approval</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.admin') }}">Admin</a>
                  </li>
                </ul>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->


                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            @yield('content')
            <!-- / Content -->

            <!-- Footer -->
           @include('includes.footer')


  </body>
</html>
