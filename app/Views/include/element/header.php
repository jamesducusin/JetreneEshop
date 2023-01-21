<header class="bg-dark navbar-sticky">
    <div class="navbar navbar-expand-lg navbar-dark">
        <div class="container"><a class="navbar-brand d-none d-sm-block mr-4 order-lg-1" href="shop" style="min-width: 7rem;"><img width="142" src="img/logo-light.png" alt="JetreneEshop" /></a><a class="navbar-brand d-sm-none mr-2 order-lg-1" href="home" style="min-width: 4.625rem;"><img width="74" src="img/logo-icon-light.png" alt="JetreneEshop" /></a>
            <!-- Sub Navbar -- cart-wishlist-tracking-->
            <?= $this->include('include/element/sub_navbar'); ?>
            <div class="collapse navbar-collapse mr-auto order-lg-2" id="navbarCollapse">
                <!-- Search-->
                <?= $this->include('include/element/search'); ?>
                <!-- Primary menu-->
                <ul class="navbar-nav">
                    <li><a class="nav-link <?php if (session()->getFlashdata('hometab')) { echo 'active';} session()->remove('hometab')?>" href="home">Home</li></a>
                    <li><a class="nav-link <?php if (session()->getFlashdata('shop')) { echo 'active';} session()->remove('shop')?>" href="shop">Shop</a></li>
                    <li><a class="nav-link <?php if (session()->getFlashdata('category')) { echo 'active';} session()->remove('category')?>" href="shop_category">Categories</a></li>
                    <li><a class="nav-link <?php if (session()->getFlashdata('helpcenter')) { echo 'active';} session()->remove('helpcenter')?>" href="helpcenter">Help Center</a></li>
                    <li><a class="nav-link <?php if (session()->getFlashdata('about')) { echo 'active';} session()->remove('about')?>" href="about">About us</a></li>
                    <li><a class="nav-link <?php if (session()->getFlashdata('contact')) { echo 'active';} session()->remove('contact')?>" href="contacts">Contacts</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Search collapse-->
    <?= $this->include('include/element/search_collapse'); ?>
</header>