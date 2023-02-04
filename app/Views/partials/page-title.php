<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <ol class="breadcrumb m-0">
            
            <li class="m-1"><a id="back" href="#"><i class="ri-arrow-left-line"></i></a></li>
            <li class="m-1"><a href="#" id="forward"><i class="ri-arrow-right-line"></i></a></li>
            <li class="m-1"><h4 class="mb-sm-0"><?= ($title) ? $title : '' ?></h4></li>
        </ol>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="<?=isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER']: "#";?>"><?= ($pagetitle) ? $pagetitle : '' ?></a></li>
                    
                    <li class="breadcrumb-item active"><?= ($title) ? $title : '' ?></li>
                    
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->