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
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="las la-tachometer-alt"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                           
                            <li class="nav-item">
                                <a href="/" class="nav-link" data-key="t-ecommerce"> Ecommerce </a>
                            </li>
                            
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="lab la-delicious"></i> <span data-key="t-apps">Apps</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                           
                            <li class="nav-item">
                                <a href="#sidebarEcommerce" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce" data-key="t-ecommerce"> Ecommerce
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarEcommerce">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-products" class="nav-link" data-key="t-products"> Products </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-product-details" class="nav-link" data-key="t-product-Details"> Product Details </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-add-product" class="nav-link" data-key="t-create-product"> Create Product </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-orders" class="nav-link" data-key="t-orders"> Orders </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-order-details" class="nav-link" data-key="t-order-details"> Order Details </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-customers" class="nav-link" data-key="t-customers"> Customers </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-cart" class="nav-link" data-key="t-shopping-cart"> Shopping Cart </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-checkout" class="nav-link" data-key="t-checkout"> Checkout </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-sellers" class="nav-link" data-key="t-sellers"> Sellers </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-seller-details" class="nav-link" data-key="t-sellers-details"> Seller Details </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a href="#sidebarInvoices" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoices" data-key="t-invoices"> Invoices
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarInvoices">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-invoices-list" class="nav-link" data-key="t-list-view"> List View </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-invoices-details" class="nav-link" data-key="t-details"> Details </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-invoices-create" class="nav-link" data-key="t-create-invoice"> Create Invoice </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                           
                        </ul>
                    </div>
                </li>

               

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="lar la-user-circle"></i> <span data-key="t-authentication">Authentication</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarSignIn" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn" data-key="t-signin"> Sign In
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSignIn">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-signin-basic" class="nav-link" data-key="t-basic"> Basic </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp" data-key="t-signup"> Sign Up
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSignUp">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-signup-basic" class="nav-link" data-key="t-basic"> Basic </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarResetPass" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarResetPass" data-key="t-password-reset"> Password Reset
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarResetPass">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-pass-reset-basic" class="nav-link" data-key="t-basic"> Basic </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarchangePass" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarchangePass" data-key="t-password-create">
                                    Password Create
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarchangePass">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-pass-change-basic" class="nav-link" data-key="t-basic">
                                                Basic </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarLockScreen" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLockScreen" data-key="t-lock-screen"> Lock Screen
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLockScreen">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-lockscreen-basic" class="nav-link" data-key="t-basic"> Basic </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarLogout" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLogout" data-key="t-logout"> Logout
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLogout">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-logout-basic" class="nav-link" data-key="t-basic"> Basic </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarSuccessMsg" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSuccessMsg" data-key="t-success-message"> Success Message
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSuccessMsg">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-success-msg-basic" class="nav-link" data-key="t-basic"> Basic </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTwoStep" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTwoStep" data-key="t-two-step-verification"> Two Step Verification
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTwoStep">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-twostep-basic" class="nav-link" data-key="t-basic"> Basic </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarErrors" data-key="t-errors"> Errors
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarErrors">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-404-basic" class="nav-link" data-key="t-404-basic"> 404 Basic </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-404-cover" class="nav-link" data-key="t-404-cover"> 404 Cover </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-404-alt" class="nav-link" data-key="t-404-alt"> 404 Alt </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-500" class="nav-link" data-key="t-500"> 500 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-offline" class="nav-link" data-key="t-offline-page"> Offline Page </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="las la-pager"></i> <span data-key="t-pages">Pages</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="pages-starter" class="nav-link" data-key="t-starter"> Starter </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarProfile" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile" data-key="t-profile"> Profile
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProfile">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="pages-profile" class="nav-link" data-key="t-simple-page"> Simple Page </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-profile-settings" class="nav-link" data-key="t-settings"> Settings </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                           
                            <li class="nav-item">
                                <a href="pages-maintenance" class="nav-link" data-key="t-maintenance"> Maintenance </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-coming-soon" class="nav-link" data-key="t-coming-soon"> Coming Soon </a>
                            </li>
                           
                        </ul>
                    </div>
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