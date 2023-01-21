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
            <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 <?php if (session()->getFlashdata('order')) { echo 'active';} session()->remove('order')?>" href="orders"><i class="czi-bag opacity-60 mr-2"></i>Orders<span class="font-size-sm text-muted ml-auto">1</span></a></li>
        </ul>
        <div class="bg-secondary px-4 py-3">
            <h3 class="font-size-sm mb-0 text-muted">Account settings</h3>
        </div>
        <ul class="list-unstyled mb-0">
            <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 <?php if (session()->getFlashdata('profiletab')) { echo 'active';} session()->remove('profiletab')?>" href="profile_retrieve"><i class="czi-user opacity-60 mr-2"></i>Profile info</a></li>
            <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 <?php if (session()->getFlashdata('addresstab')) { echo 'active';} session()->remove('addresstab')?>" href="address_retrieve"><i class="czi-location opacity-60 mr-2"></i>Addresses</a></li>
        </ul>
    </div>
</aside>