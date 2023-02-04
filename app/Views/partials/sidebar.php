<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="/" class="logo logo-dark">
            <span class="logo-sm">
                <img src="/assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="/assets/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="/" class="logo logo-light">
            <span class="logo-sm">
                <img src="/assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="/assets/images/logo-light.png" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="dashboard">
                        <i class="las la-tachometer-alt"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>

                </li> 
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarProduct" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-product-hunt-line"></i> <span data-key="t-apps">Product Master</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProduct">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="categoryList" class="nav-link" data-key="t-category"> Categories </a>
                            </li>
                            <li class="nav-item">
                                <a href="subCategory" class="nav-link" data-key="t-sub-category"> Sub-categories </a>
                            </li>
                            <li class="nav-item">
                                <a href="offerList" class="nav-link" data-key="t-offers"> Offers </a>
                            </li>
                            <li class="nav-item">
                                <a href="productCreate" class="nav-link" data-key="t-create-product"> Create Product </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarSetting" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-settings-3-line"></i> <span data-key="t-apps">Site Settings</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSetting">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="bannerSetting" class="nav-link" data-key="t-banner"> Banners </a>
                            </li>
                            <li class="nav-item">
                                <a href="aboutSetting" class="nav-link" data-key="t-about"> About </a>
                            </li>
                            <li class="nav-item">
                                <a href="contactSetting" class="nav-link" data-key="t-contacts"> Contacts </a>
                            </li>
                            <li class="nav-item">
                                <a href="faqSetting" class="nav-link" data-key="t-faq"> FAQs </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="customerList">
                        <i class="las la-user-circle"></i> <span data-key="t-customer">Customer </span>
                    </a>
                </li>

              
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>