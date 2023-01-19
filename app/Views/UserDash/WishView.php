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
                        <li><a class="nav-link" href="about">About us</a></li>
                        <li><a class="nav-link" href="contacts">Contacts</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Search collapse-->
        <?= $this->include('include/element/search_collapse'); ?>
    </header>

    <!-- Page Title-->
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="home"><i class="czi-home"></i>Home</a></li>
                        <li class="breadcrumb-item text-nowrap"><a href="#">Account</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Wishlist</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                <h1 class="h3 text-light mb-0">My wishlist</h1>
            </div>
        </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4">
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
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="wishlist"><i class="czi-heart opacity-60 mr-2"></i>Wishlist<span class="font-size-sm text-muted ml-auto">3</span></a></li>
                        <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="support"><i class="czi-help opacity-60 mr-2"></i>Support tickets<span class="font-size-sm text-muted ml-auto">1</span></a></li>
                    </ul>
                    <div class="bg-secondary px-4 py-3">
                        <h3 class="font-size-sm mb-0 text-muted">Account settings</h3>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="profile"><i class="czi-user opacity-60 mr-2"></i>Profile info</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="address"><i class="czi-location opacity-60 mr-2"></i>Addresses</a></li>
                    </ul>
                </div>
            </aside>
            <!-- Content  -->
            <section class="col-lg-8">
                <!-- Toolbar-->
                <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
                    <h6 class="font-size-base text-light mb-0">List of items you added to wishlist:</h6><a class="btn btn-primary btn-sm" href="logout"><i class="czi-sign-out mr-2"></i>Sign out</a>
                </div>
                <!-- Wishlist-->
                <!-- Item-->
                <div class="d-sm-flex justify-content-between mt-lg-4 mb-4 pb-3 pb-sm-2 border-bottom">
                    <div class="media media-ie-fix d-block d-sm-flex text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="single" style="width: 10rem;"><img src="img/shop/cart/02.jpg" alt="Product"></a>
                        <div class="media-body pt-2">
                            <h3 class="product-title font-size-base mb-2"><a href="single">TH Jeans City Backpack</a></h3>
                            <div class="font-size-sm"><span class="text-muted mr-2">Brand:</span>Tommy Hilfiger</div>
                            <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Khaki</div>
                            <div class="font-size-lg text-accent pt-2">$79.<small>50</small></div>
                        </div>
                    </div>
                    <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                        <button class="btn btn-outline-danger btn-sm" type="button"><i class="czi-trash mr-2"></i>Remove</button>
                    </div>
                </div>
                <!-- Item-->
                <div class="d-sm-flex justify-content-between my-4 pb-3 pb-sm-2 border-bottom">
                    <div class="media media-ie-fix d-block d-sm-flex text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="single" style="width: 10rem;"><img src="img/shop/cart/03.jpg" alt="Product"></a>
                        <div class="media-body pt-2">
                            <h3 class="product-title font-size-base mb-2"><a href="single">3-Color Sun Stash Hat</a></h3>
                            <div class="font-size-sm"><span class="text-muted mr-2">Brand:</span>The North Face</div>
                            <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Pink / Beige / Dark blue</div>
                            <div class="font-size-lg text-accent pt-2">$22.<small>50</small></div>
                        </div>
                    </div>
                    <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                        <button class="btn btn-outline-danger btn-sm" type="button"><i class="czi-trash mr-2"></i>Remove</button>
                    </div>
                </div>
                <!-- Item-->
                <div class="d-sm-flex justify-content-between mt-4">
                    <div class="media media-ie-fix d-block d-sm-flex text-center text-sm-left"><a class="d-inline-block mx-auto mr-sm-4" href="single" style="width: 10rem;"><img src="img/shop/cart/04.jpg" alt="Product"></a>
                        <div class="media-body pt-2">
                            <h3 class="product-title font-size-base mb-2"><a href="single">Cotton Polo Regular Fit</a></h3>
                            <div class="font-size-sm"><span class="text-muted mr-2">Size:</span>42</div>
                            <div class="font-size-sm"><span class="text-muted mr-2">Color:</span>Light blue</div>
                            <div class="font-size-lg text-accent pt-2">$9.<small>00</small></div>
                        </div>
                    </div>
                    <div class="pt-2 pl-sm-3 mx-auto mx-sm-0 text-center">
                        <button class="btn btn-outline-danger btn-sm" type="button"><i class="czi-trash mr-2"></i>Remove</button>
                    </div>
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