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
    
    <?= $this->include('include/modal/order_modal'); ?>
    <!-- Navbar-->
    <?= $this->include('include/element/header'); ?>
    <!-- Page title-->
    <!-- Page Title (Dark)-->
    <div class="bg-dark py-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="home"><i class="czi-home"></i>Home</a></li>
                        <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Order tracking</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                <h1 class="h3 text-light mb-0">Tracking order: <span class="h4 font-weight-normal text-light">34VB5540K83</span></h1>
            </div>
        </div>
    </div>
    <!-- Page Content-->
    <div class="container py-5 mb-2 mb-md-3">
        <!-- Details-->
        <div class="row mb-4">
            <div class="col-sm-4 mb-2">
                <div class="bg-secondary p-4 text-center rounded-lg"><span class="font-weight-medium text-dark mr-2">Shipped via:</span>UPS Ground</div>
            </div>
            <div class="col-sm-4 mb-2">
                <div class="bg-secondary p-4 text-center rounded-lg"><span class="font-weight-medium text-dark mr-2">Status:</span>Processing order</div>
            </div>
            <div class="col-sm-4 mb-2">
                <div class="bg-secondary p-4 text-center rounded-lg"><span class="font-weight-medium text-dark mr-2">Expected date:</span>October 15, 2019</div>
            </div>
        </div>
        <!-- Progress-->
        <div class="card border-0 box-shadow-lg">
            <div class="card-body pb-2">
                <ul class="nav nav-tabs media-tabs nav-justified">
                    <li class="nav-item">
                        <div class="nav-link completed">
                            <div class="media align-items-center">
                                <div class="media-tab-media mr-3"><i class="czi-bag"></i></div>
                                <div class="media-body">
                                    <div class="media-tab-subtitle text-muted font-size-xs mb-1">First step</div>
                                    <h6 class="media-tab-title text-nowrap mb-0">Order placed</h6>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link active">
                            <div class="media align-items-center">
                                <div class="media-tab-media mr-3"><i class="czi-settings"></i></div>
                                <div class="media-body">
                                    <div class="media-tab-subtitle text-muted font-size-xs mb-1">Second step</div>
                                    <h6 class="media-tab-title text-nowrap mb-0">Processing order</h6>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link">
                            <div class="media align-items-center">
                                <div class="media-tab-media mr-3"><i class="czi-star"></i></div>
                                <div class="media-body">
                                    <div class="media-tab-subtitle text-muted font-size-xs mb-1">Third step</div>
                                    <h6 class="media-tab-title text-nowrap mb-0">Quality check</h6>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link">
                            <div class="media align-items-center">
                                <div class="media-tab-media mr-3"><i class="czi-package"></i></div>
                                <div class="media-body">
                                    <div class="media-tab-subtitle text-muted font-size-xs mb-1">Fourth step</div>
                                    <h6 class="media-tab-title text-nowrap mb-0">Product dispatched</h6>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Footer-->
        <div class="d-sm-flex flex-wrap justify-content-between align-items-center text-center pt-4">
            <div class="custom-control custom-checkbox mt-2 mr-3">
                <input class="custom-control-input" type="checkbox" id="notify-me" checked>
                <label class="custom-control-label" for="notify-me">Notify me when order is delivered</label>
            </div><a class="btn btn-primary btn-sm mt-2" href="#order-details" data-toggle="modal">View Order Details</a>
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