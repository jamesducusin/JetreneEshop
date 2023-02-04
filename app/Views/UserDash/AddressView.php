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
    <?= $this->include('include/modal/editAddress_modal'); ?>
    <?= $this->include('include/modal/delete_modal'); ?>
    <!-- Navbar-->
    <!-- Notification Toast-->
    <?= $this->include('include/element/notif_toast'); ?>

    <?= $this->include('include/element/header'); ?>
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
            <?= $this->include('include/element/sidebar'); ?>
            <!-- Content  -->
            <section class="col-lg-8">
                <!-- Toolbar-->
                <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-4">
                    <h6 class="font-size-base text-light mb-0">List of your registered addresses:</h6><a class="btn btn-primary btn-sm" href="<?= base_url() ?>/logout"><i class="czi-sign-out mr-2"></i>Sign out</a>

                </div>
                
                <div class="table-responsive font-size-md">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Contact info</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($address as $user_address) : ?>
                                <tr>
                                    <td ><input type="radio" name="default" id="dafaultInput" data-id="<?= $user_address['id'] ?>" <?php if($user_address['is_default'] == 1) {echo 'checked';} ?>></td>
                                    <td class="py-3 id-middle"><?= $user_address['info'] ?></td>
                                    <td class="py-3 align-middle"><?= $user_address['address'] ?><span class="align-middle badge badge-<?php if($user_address['label_as'] == 'Home'){echo 'info';} else{echo 'warning';} ?> ml-2"><?= $user_address['label_as'] ?></span>
                                        <span class="align-middle badge badge-success ml-2"><?php if ($user_address['is_default'] != 0) : echo "default address";
                                                                                            endif; ?></span>
                                    </td>
                                    <td class="py-3 align-middle" data-id="<?= $user_address['id'] ?>" data-default="<?= $user_address['is_default'] ?>" data-name="<?= $user_address['name'] ?>" data-label_as="<?= $user_address['label_as'] ?>" data-street="<?= $user_address['street'] ?>" data-contact="<?= $user_address['contact'] ?>" data-postalcode="<?= $user_address['postalcode'] ?>"><a class="nav-link-style" href="#" data-toggle="modal" data-target="#editAddress">
                                            <i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="modal" data-target="#deleteAddress">
                                            <div class="czi-trash"></div>
                                        </a>
                                    </td>
                                    <td style="display:none">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
    <script src="<?= base_url() ?>/js/address.js"></script>
    <?= ActionModal('success', 'opentoast'); ?>
    <?= ActionModal('failed', 'opentoast'); ?>


</body>

</html>