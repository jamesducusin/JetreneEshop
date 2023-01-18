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
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Single ticket</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                <h1 class="h3 text-light mb-0">Signle ticket</h1>
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
                        <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="support"><i class="czi-help opacity-60 mr-2"></i>Support tickets<span class="font-size-sm text-muted ml-auto">1</span></a></li>
                    </ul>
                    <div class="bg-secondary px-4 py-3">
                        <h3 class="font-size-sm mb-0 text-muted">Account settings</h3>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="profile"><i class="czi-user opacity-60 mr-2"></i>Profile info</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="address"><i class="czi-location opacity-60 mr-2"></i>Addresses</a></li>
                        <li class="d-lg-none border-top mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-signin.html"><i class="czi-sign-out opacity-60 mr-2"></i>Sign out</a></li>
                    </ul>
                </div>
            </aside>
            <!-- Content  -->
            <section class="col-lg-8">
                <!-- Toolbar-->
                <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-4">
                    <div class="d-flex w-100 text-light text-center mr-3">
                        <div class="font-size-ms px-3">
                            <div class="font-weight-medium">Date Submitted</div>
                            <div class="opacity-60">09/27/2019</div>
                        </div>
                        <div class="font-size-ms px-3">
                            <div class="font-weight-medium">Last Updated</div>
                            <div class="opacity-60">09/30/2019</div>
                        </div>
                        <div class="font-size-ms px-3">
                            <div class="font-weight-medium">Type</div>
                            <div class="opacity-60">Website problem</div>
                        </div>
                        <div class="font-size-ms px-3">
                            <div class="font-weight-medium">Priority</div><span class="badge badge-warning">High</span>
                        </div>
                        <div class="font-size-ms px-3">
                            <div class="font-weight-medium">Status</div><span class="badge badge-success">Open</span>
                        </div>
                    </div><a class="btn btn-primary btn-sm" href="account-signin.html"><i class="czi-sign-out mr-3"></i>Sign out</a>
                </div>
                <!-- Ticket details (visible on mobile)-->
                <div class="d-flex d-lg-none flex-wrap bg-secondary text-center rounded-lg pt-4 px-4 pb-1 mb-4">
                    <div class="font-size-sm px-3 pb-3">
                        <div class="font-weight-medium">Date Submitted</div>
                        <div class="text-muted">09/27/2019</div>
                    </div>
                    <div class="font-size-sm px-3 pb-3">
                        <div class="font-weight-medium">Last Updated</div>
                        <div class="text-muted">09/30/2019</div>
                    </div>
                    <div class="font-size-sm px-3 pb-3">
                        <div class="font-weight-medium">Type</div>
                        <div class="text-muted">Website problem</div>
                    </div>
                    <div class="font-size-sm px-3 pb-3">
                        <div class="font-weight-medium">Priority</div><span class="badge badge-warning">High</span>
                    </div>
                    <div class="font-size-sm px-3 pb-3">
                        <div class="font-weight-medium">Status</div><span class="badge badge-success">Open</span>
                    </div>
                </div>
                <!-- Comment-->
                <div class="media pb-4 border-bottom"><img class="rounded-circle" width="50" src="img/testimonials/03.jpg" alt="Michael Davis" />
                    <div class="media-body pl-3">
                        <h6 class="font-size-md mb-2">Michael Davis</h6>
                        <p class="font-size-md mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat cupidatat non proident, sunt in culpa qui.</p><span class="font-size-ms text-muted"><i class="czi-time align-middle mr-2"></i>Sep 30, 2019 at 11:05AM</span>
                    </div>
                </div>
                <!-- Comment reply-->
                <div class="media py-4 border-bottom"><img class="rounded-circle" width="50" src="img/testimonials/03.jpg" alt="Michael Davis" />
                    <div class="media-body pl-3">
                        <h6 class="font-size-md mb-2">Michael Davis</h6>
                        <p class="font-size-md mb-1">Sed elementum tempus egestas sed sed. Aliquam faucibus purus in massa tempor nec feugiat. Interdum varius sit amet mattis. Magna ac placerat vestibulum lectus mauris. Magna fringilla urna porttitor rhoncus dolor purus non. Urna et pharetra pharetra massa massa ultricies mi quis.</p><span class="font-size-ms text-muted"><i class="czi-time align-middle mr-2"></i>Sep 28, 2019 at 10:00AM</span>
                        <!-- Comment-->
                        <div class="media border-top pt-4 mt-4"><img class="rounded-circle" width="50" src="img/testimonials/04.jpg" alt="Susan Gardner" />
                            <div class="media-body pl-3">
                                <h6 class="font-size-md mb-2">Susan Gardner</h6>
                                <p class="font-size-md mb-1">Egestas sed sed risus pretium quam vulputate dignissim. A diam sollicitudin tempor id eu nisl. Ut porttitor leo a diam. Bibendum at varius vel pharetra vel turpis nunc.</p><span class="font-size-ms text-muted"><i class="czi-time align-middle mr-2"></i>Sep 27, 2019 at 6:30PM</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Leave message-->
                <h3 class="h5 mt-2 pt-4 pb-2">Leave a Message</h3>
                <form class="needs-validation" novalidate>
                    <div class="form-group">
                        <textarea class="form-control" rows="8" placeholder="Write your message here..." required></textarea>
                        <div class="invalid-tooltip">Please write the message!</div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="custom-control custom-checkbox d-block">
                            <input class="custom-control-input" type="checkbox" id="close-ticket">
                            <label class="custom-control-label" for="close-ticket">Submit and close the ticket</label>
                        </div>
                        <button class="btn btn-primary my-2" type="submit">Submit message</button>
                    </div>
                </form>
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