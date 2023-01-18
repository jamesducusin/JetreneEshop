<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta + Resources-->
    <?= $this->include('include/asset/head'); ?>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="<?= base_url() ?>/css/theme.min.css">
</head>
<!-- Body-->

<body class="toolbar-enabled">
    <!-- Sign in / sign up modal-->
    <?= $this->include('include/modal/signup_modal'); ?>
    <!-- Address modal-->
    <?= $this->include('include/modal/address_modal'); ?>
    <?= $this->include('include/modal/delete_modal'); ?>
    <!-- Navbar-->
    <?= $this->include('include/modal/support_modal'); ?>
    <!-- Notification Toast-->
    <?= $this->include('include/element/notif_toast'); ?>

    <header class="bg-dark navbar-sticky">
        <div class="navbar navbar-expand-lg navbar-dark">
            <div class="container"><a class="navbar-brand d-none d-sm-block mr-4 order-lg-1" href="<?= base_url() ?>/home" style="min-width: 7rem;"><img width="142" src="<?= base_url() ?>/img/logo-light.png" alt="JetreneEshop" /></a><a class="navbar-brand d-sm-none mr-2 order-lg-1" href="<?= base_url() ?>/home" style="min-width: 4.625rem;"><img width="74" src="<?= base_url() ?>/img/logo-icon-light.png" alt="JetreneEshop" /></a>
                <!-- Sub Navbar -- cart-wishlist-tracking-->
                <?= $this->include('include/element/sub_navbar'); ?>
                <div class="collapse navbar-collapse mr-auto order-lg-2" id="navbarCollapse">
                    <!-- Search-->
                    <?= $this->include('include/element/search'); ?>
                    <!-- Primary menu-->
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="<?= base_url() ?>/home">Home</li></a>
                        <li><a class="nav-link" href="<?= base_url() ?>/shop">Shop</a></li>
                        <li><a class="nav-link" href="<?= base_url() ?>/shop_category">Categories</a></li>
                        <li><a class="nav-link" href="<?= base_url() ?>/helpcenter">Help Center</a></li>
                        <li><a class="nav-link " href="<?= base_url() ?>/about">About us</a></li>
                        <li><a class="nav-link" href="<?= base_url() ?>/contacts">Contacts</a></li>
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
                        <li class="breadcrumb-item"><a class="text-nowrap" href="<?= base_url() ?>/home"><i class="czi-home"></i>Home</a></li>
                        <li class="breadcrumb-item text-nowrap"><a href="<?= base_url() ?>/#">Account</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Addresses</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                <h1 class="h3 text-light mb-0">My addresses</h1>
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
                            <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;"><span class="badge badge-warning" data-toggle="tooltip" title="Reward points">384</span><img class="rounded-circle" src="<?= base_url() ?>/img/shop/account/avatar.jpg" alt="Susan Gardner"></div>
                            <div class="media-body pl-3">
                                <h3 class="font-size-base mb-0">Susan Gardner</h3><span class="text-accent font-size-sm">s.gardner@example.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-secondary px-4 py-3">
                        <h3 class="font-size-sm mb-0 text-muted">Dashboard</h3>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="<?= base_url() ?>/orders"><i class="czi-bag opacity-60 mr-2"></i>Orders<span class="font-size-sm text-muted ml-auto">1</span></a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="<?= base_url() ?>/wishlist"><i class="czi-heart opacity-60 mr-2"></i>Wishlist<span class="font-size-sm text-muted ml-auto">3</span></a></li>
                        <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="<?= base_url() ?>/support"><i class="czi-help opacity-60 mr-2"></i>Support tickets<span class="font-size-sm text-muted ml-auto">1</span></a></li>
                    </ul>
                    <div class="bg-secondary px-4 py-3">
                        <h3 class="font-size-sm mb-0 text-muted">Account settings</h3>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="<?= base_url() ?>/profile"><i class="czi-user opacity-60 mr-2"></i>Profile info</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="<?= base_url() ?>/address"><i class="czi-location opacity-60 mr-2"></i>Addresses</a></li>
                    </ul>
                </div>
            </aside>
            <!-- Content  -->
            <section class="col-lg-8">
                <!-- Toolbar-->
                <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-4">
                    <h6 class="font-size-base text-light mb-0">List of your registered addresses:</h6><a class="btn btn-primary btn-sm" href="<?= base_url() ?>/logout"><i class="czi-sign-out mr-2"></i>Sign out</a>

                </div>
                <!-- Addresses list-->
                <?php if (session()->getFlashdata('edit')) : ?>
                    <script>
                        window.addEventListener('load', function() {
                            document.getElementById("openedit").click();
                        })
                    </script>
                <?php endif; ?>
                
                <?= ActionModal('failed', 'opentoast'); ?>
                <?= ActionModal('success', 'opentoast'); ?>    
                

                <div class="table-responsive font-size-md">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Contact info</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($address as $user_address) : ?>
                                <tr>
                                    <td class="py-3 align-middle"><?= $user_address['info'] ?></td>
                                    <td class="py-3 align-middle"><?= $user_address['address'] ?><span class="align-middle badge badge-info ml-2"><?= $user_address['label_as'] ?></span>
                                        <span class="align-middle badge badge-success ml-2"><?php if ($user_address['is_default'] != 0) : echo "default address";
                                                                                            endif; ?></span>
                                    </td>
                                    <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="<?= site_url('address_retrieve/' . $user_address['id']) ?>" title="Edit">
                                            <i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#delete-modal" data-toggle="modal">
                                            <div class="czi-trash"></div>
                                        </a>
                                    </td>
                                    <td style="display:none">
                                        <a id='openedit' href="#add-address" data-toggle="modal"></a>
                                        <a id="delete" href="#" data-toggle="tooltip" title="Remove"></a>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>

                </div>
                <hr class="pb-4">
                <div class="text-sm-right"><a class="btn btn-primary" href="#add-address" data-toggle="modal">Add new address</a></div>
                <button style="display: none;" id="opentoast" data-toggle="toast" data-target="#notif-toast"></button>

            </section>
        </div>
    </div>

    <!-- Footer-->
    <?= $this->include('include/element/footer'); ?>
    <!-- Vendor scrits: js libraries and plugins-->
    <?= $this->include('include/asset/end'); ?>
    <!-- Main theme script-->
    <script src="<?= base_url() ?>/js/theme.min.js"></script>
</body>

</html>