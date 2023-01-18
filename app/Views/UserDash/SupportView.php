<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Meta + Resources-->
        <?= $this->include('include/asset/head'); ?>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
</head>
<!-- Body-->

<body class="toolbar-enabled">
  <!-- Sign in / sign up modal-->
  <?= $this->include('include/modal/signup_modal'); ?>

    <!-- Navbar-->
    <?= $this->include('include/modal/support_modal'); ?>
     <!-- Navbar-->
     <header class="bg-dark navbar-sticky">
        <div class="navbar navbar-expand-lg navbar-dark">
            <div class="container"><a class="navbar-brand d-none d-sm-block mr-4 order-lg-1" href="home" style="min-width: 7rem;"><img width="142" src="img/logo-light.png" alt="JetreneEshop" /></a><a class="navbar-brand d-sm-none mr-2 order-lg-1" href="home" style="min-width: 4.625rem;"><img width="74" src="img/logo-icon-light.png" alt="JetreneEshop" /></a>
                <!-- Sub Navbar -- cart-wishlist-tracking-->
                <?= $this->include('include/element/sub_navbar'); ?>
                <div class="collapse navbar-collapse mr-auto order-lg-2" id="navbarCollapse">
                    <!-- Search-->
                    <?= $this->include('include/element/search'); ?>
                    <!-- Primary menu-->
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="home">Home</li></a>
                        <li><a class="nav-link" href="shop">Shop</a></li>
                        <li><a class="nav-link" href="shop_category">Categories</a></li>
                        <li><a class="nav-link" href="helpcenter">Help Center</a></li>
                        <li><a class="nav-link " href="about">About us</a></li>
                        <li><a class="nav-link" href="contacts">Contacts</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Search collapse-->
        <?= $this->include('include/element/search_collapse'); ?>
    </header>
    <!-- Page title-->
    <!-- Page Title-->
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="home"><i class="czi-home"></i>Home</a></li>
                        <li class="breadcrumb-item text-nowrap"><a href="#">Account</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Support tickets</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                <h1 class="h3 text-light mb-0">Support tickets</h1>
            </div>
        </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-3">
        <div class="row">
            <!-- Sidebar-->
            <aside class="col-lg-4 pt-4 pt-lg-0">
                <div class="cz-sidebar-static rounded-lg box-shadow-lg px-0 pb-0 mb-5 mb-lg-0">
                    <div class="px-4 mb-4">
                        <div class="media align-items-center">
                            <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;"><span class="badge badge-warning" data-toggle="tooltip" title="Reward points">384</span><img class="rounded-circle" src="img/shop/account/avatar.jpg" alt="Susan Gardner"></div>
                            <div class="media-body pl-3">
                                <h3 class="font-size-base mb-0">Susan Gardner</h3><span class="text-accent font-size-sm">s.gardner@example.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-secondary px-4 py-3">
                        <h3 class="font-size-sm mb-0 text-muted">Dashboard</h3>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="orders"><i class="czi-bag opacity-60 mr-2"></i>Orders<span class="font-size-sm text-muted ml-auto">1</span></a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="wishlist"><i class="czi-heart opacity-60 mr-2"></i>Wishlist<span class="font-size-sm text-muted ml-auto">3</span></a></li>
                        <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="support"><i class="czi-help opacity-60 mr-2"></i>Support tickets<span class="font-size-sm text-muted ml-auto">1</span></a></li>
                    </ul>
                    <div class="bg-secondary px-4 py-3">
                        <h3 class="font-size-sm mb-0 text-muted">Account settings</h3>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="profile"><i class="czi-user opacity-60 mr-2"></i>Profile info</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="address"><i class="czi-location opacity-60 mr-2"></i>Addresses</a></li>
                    
                        <li class="d-lg-none border-top mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="signin"><i class="czi-sign-out opacity-60 mr-2"></i>Sign out</a></li>
                    </ul>
                </div>
            </aside>
            <!-- Content  -->
            <section class="col-lg-8">
                <!-- Toolbar-->
                <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">
                    <div class="form-inline">
                        <label class="text-light opacity-75 text-nowrap mr-2 d-none d-lg-block" for="order-sort">Sort orders:</label>
                        <select class="form-control custom-select" id="order-sort">
                            <option>All</option>
                            <option>Open</option>
                            <option>Closed</option>
                        </select>
                    </div><a class="btn btn-primary btn-sm d-none d-lg-inline-block" href="account-signin.html"><i class="czi-sign-out mr-2"></i>Sign out</a>
                </div>
                <!-- Tickets list-->
                <div class="table-responsive font-size-md">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Ticket Subject</th>
                                <th>Date Submitted | Updated</th>
                                <th>Type</th>
                                <th>Priority</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-3"><a class="nav-link-style font-weight-medium" href="singlesupport">My new ticket</a></td>
                                <td class="py-3">09/27/2019 | 09/30/2019</td>
                                <td class="py-3">Website problem</td>
                                <td class="py-3"><span class="badge badge-warning m-0">High</span></td>
                                <td class="py-3"><span class="badge badge-success m-0">Open</span></td>
                            </tr>
                            <tr>
                                <td class="py-3"><a class="nav-link-style font-weight-medium" href="singlesupport">Another ticket</a></td>
                                <td class="py-3">08/21/2019 | 08/23/2019</td>
                                <td class="py-3">Partner request</td>
                                <td class="py-3"><span class="badge badge-info m-0">Medium</span></td>
                                <td class="py-3"><span class="badge badge-secondary m-0">Closed</span></td>
                            </tr>
                            <tr>
                                <td class="py-3"><a class="nav-link-style font-weight-medium" href="singlesupport">Yet another ticket</a></td>
                                <td class="py-3">11/19/2018 | 11/20/2018</td>
                                <td class="py-3">Complaint</td>
                                <td class="py-3"><span class="badge badge-danger m-0">Urgent</span></td>
                                <td class="py-3"><span class="badge badge-secondary m-0">Closed</span></td>
                            </tr>
                            <tr>
                                <td class="py-3"><a class="nav-link-style font-weight-medium" href="singlesupport">My old ticket</a></td>
                                <td class="py-3">06/19/2018 | 06/20/2018</td>
                                <td class="py-3">Info inquiry</td>
                                <td class="py-3"><span class="badge badge-success m-0">Low</span></td>
                                <td class="py-3"><span class="badge badge-secondary m-0">Closed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr class="mb-4">
                <div class="text-right">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#open-ticket">Submit new ticket</button>
                </div>
            </section>
        </div>
    </div>
   <!-- Footer-->
   <?= $this->include('include/element/footer'); ?>
    <!-- Vendor scrits: js libraries and plugins-->
    <?= $this->include('include/asset/end'); ?>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
</body>

</html>