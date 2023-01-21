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
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">Profile info</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                <h1 class="h3 text-light mb-0">Profile info</h1>
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
                            <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;"><span class="badge badge-success" data-toggle="tooltip" title="online"> </span><img class="rounded-circle" src="<?= isset($profile[0]) ? $profile[0]['avatar'] : 'img/avatar/default-avatar.jpg' ?>" alt="<?= isset($profile[0]) ? $profile[0]['firstName'] : 'user'; ?>"></div>
                            <div class="media-body pl-3">
                                <h3 class="font-size-base mb-0"><?= isset($profile[0]) ? $profile[0]['firstName'] . " " . $profile[0]['lastName'] :  "Anonymous"; ?></h3><span class="text-accent font-size-sm"><?= session()->get('email') ?></span>
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
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="profile_retrieve"><i class="czi-user opacity-60 mr-2"></i>Profile info</a></li>
                        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="address_retrieve"><i class="czi-location opacity-60 mr-2"></i>Addresses</a></li>
                    </ul>
                </div>
            </aside>
            <!-- Content  -->

            <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
                <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
                    <h6 class="font-size-base text-light mb-0">Update your Information below:</h6><a class="btn btn-primary btn-sm" href="logout"><i class="czi-sign-out mr-2"></i>Sign out</a>
                </div>
                <div class="pt-2 px-4 pl-lg-0 pr-xl-5">
                    <!-- Tabs-->
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="nav-item"><a class="nav-link px-0 active" href="#profile" data-toggle="tab" role="tab">
                                <div class="d-none d-lg-block"><i class="czi-user opacity-60 mr-2"></i>Profile</div>
                                <div class="d-lg-none text-center"><i class="czi-user opacity-60 d-block font-size-xl mb-2"></i><span class="font-size-ms">Profile</span></div>
                            </a></li>
                        <li class="nav-item"><a class="nav-link px-0" href="#account" data-toggle="tab" role="tab">
                                <div class="d-none d-lg-block"><i class="czi-bell opacity-60 mr-2"></i>Account</div>
                                <div class="d-lg-none text-center"><i class="czi-bell opacity-60 d-block font-size-xl mb-2"></i><span class="font-size-ms">Notifications</span></div>
                            </a></li>
                    </ul>
                    <!-- Tab content-->
                    <div class="tab-content">
                        <!-- Profile-->
                        <div class="tab-pane fade show active" id="profile" role="tabpanel">
                            <form action="<?= isset($profile[0]) ? 'profile_update' : 'profile_insert'; ?>" method="post" enctype="multipart/form-data" id="form">
                                <div class="bg-secondary rounded-lg p-4 mb-4">
                                    <div class="media align-items-center"><img id="preview" class="rounded" src="<?= isset($profile[0]) ? $profile[0]['avatar'] : 'img/avatar/default-avatar.jpg'; ?>" width="90" alt="<?= isset($profile[0]) ? $profile[0]['firstName'] : 'user'; ?>">
                                        <div class="media-body pl-3">
                                            <button class="btn btn-light btn-shadow btn-sm mb-2 toUpdate" id="upload" type="button" <?= isset($profile[0]) ? "disabled" : ''; ?>><i class="czi-loading mr-2"></i>Change avatar</button>
                                            <div class="p mb-0 font-size-ms text-muted">Upload JPG, GIF or PNG image. 300 x 300 required.</div>
                                        </div>
                                    </div>
                                </div>
                                <input type="file" style="display: none;" id="filedialog" name="avatar">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="account-fn">First Name</label>
                                            <input class="form-control toUpdate" type="text" id="fn" name="firstname" value="<?= isset($profile[0]) ? $profile[0]['firstName'] : ''; ?>" <?= isset($profile[0]) ? "disabled" : ''; ?>>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="account-ln">Last Name</label>
                                            <input class="form-control toUpdate" type="text" id="ln" name="lastname" value="<?= isset($profile[0]) ? $profile[0]['lastName'] : ''; ?>" <?= isset($profile[0]) ? "disabled" : ''; ?>>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="account-phone">Phone Number</label>
                                            <input class="form-control toUpdate" type="tel" name="contact" placeholder="09xxxxxxxxx" maxlength="11" pattern="[0-9]{11}" id="phone" value="<?= isset($profile[0]) ? $profile[0]['contact'] : ''; ?>" <?= isset($profile[0]) ? "disabled" : ''; ?>>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Sex</label>
                                            <select class="custom-select toUpdate" id="sex" name="gender" <?= isset($profile[0]) ? "disabled" : ''; ?>>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Birthday</label>
                                            <input class="form-control toUpdate" type="date" id="birthday" name="birthday" value="<?= isset($profile[0]) ? $profile[0]['birthday'] : ''; ?>" <?= isset($profile[0]) ? "disabled" : ''; ?>>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <hr class="mt-2 mb-3">
                                        <div class="d-flex flex-wrap justify-content-between align-items-center" style="float: right;">
                                            <button class="btn btn-primary mt-3 mt-sm-0" id="update" type="button">Update profile</button>
                                            <button class="btn btn-primary mt-3 mt-sm-0" style="display:none" id="submit" type="submit">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade show" id="account" role="tabpanel">
                            <form action="account_update" method="post">
                                <input type="file" style="display: none;" id="filedialog" name="avatar">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h6>Update Email</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="account-ln">Email</label>
                                            <input class="form-control" type="email" id="email" name="email" value="<?= session()->get('email') ?>">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <br>
                                        <br>
                                        <h6>Change password</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="account-ln">New Password</label>
                                            <input class="form-control" type="password" id="new" name="new_password" value="">
                                            <div class="invalid-feedback d-block"><?= isset($validation) ? display_error($validation, 'new_password') : '' ?></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="account-ln">Confirm Password</label>
                                            <input class="form-control" type="password" id="confirm" name="confirm_password" value="">
                                            <div class="invalid-feedback d-block"><?= isset($validation) ? display_error($validation, 'confirm_password') : '' ?></div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <hr class="mt-2 mb-3">
                                        <div class="d-flex flex-wrap justify-content-between align-items-center" style="float: right;">
                                            <button class="btn btn-primary mt-3 mt-sm-0" id="save" type="button">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
    <script>
        $("#upload").click(function() {
            $("#filedialog").click();
        });

        var sex = "<?= isset($profile[0]) ? $profile[0]['gender'] : ''; ?>";
        $("#sex").val(sex);
        var button = "<?= isset($profile[0]) ? 'hasData' : ''; ?>";

        if (button != 'hasData') {
            $("#update").hide();
            $("#submit").show();
        }


        $("#update").click(function() {
            $("#form").attr("äction", "profile_update");
            $(".toUpdate").prop('disabled', false);
            $("#update").hide();
            $("#submit").show();

        });

        var account = "<?= session()->getFlashdata('account') ?>"
        if (account) {
            $("#account").click();
        }

        $("#filedialog").change(function() {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#preview").attr("src", e.target.result);
            }
            reader.readAsDataURL(file);

        });

        $("#open-modal-btn").click(function() {
            var inputValue = $("#input-field").val();
            $("#modal-content").html(inputValue);
            $("#modal").show();
        });
    </script>
</body>

</html>