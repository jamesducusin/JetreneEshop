<?= $this->include('partials/main') ?>

<head>

    <?php echo view('partials/title-meta', array('title' => 'Sub Categories')); ?>

    <?= $this->include('partials/head-css') ?>
    <style type="text/css">

    </style>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?= $this->include('partials/menu') ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">


                    <?php echo view('partials/page-title', array('pagetitle' => 'Pages', 'title' => 'Sub    Categories')); ?>
                    <div class="row mb-3 pb-1">
                        <div class="col-12">
                            <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                <div class="flex-grow-1">

                                </div>
                                <div class="mt-3 mt-lg-0">
                                    <form action="javascript:void(0);">
                                        <div class="row g-3 mb-0 align-items-center">
                                            <div class="col-sm">
                                                <div class="d-flex justify-content-sm-end">
                                                    <div class="search-box ms-2">
                                                        <input type="text" class="form-control search" id="searchProductList" placeholder="Search Category...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-auto">
                                                <button type="button" class="btn btn-soft-info" data-bs-toggle="modal" data-bs-target="#addSubCategory"><i class="ri-add-circle-line align-middle me-1"></i>
                                                    Add sub-category</button>
                                            </div>
                                            <!--end col-->

                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                            </div><!-- end card header -->
                        </div>
                        <!--end col-->
                    </div>
                    <div class="row">
                        <?php foreach ($sub_category as $category) : ?>
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate" style="border-radius:15px">
                                    <div class="card-body category_block" style="border-radius:15px; background-image:url('img/sub_category/<?= $category['sub_category_image'] ?>')">
                                        <div class="d-flex align-items-center wall_category_block">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Main category" class="text-uppercase fw-medium  text-truncate mb-0">
                                                    <?=$category['category_name']?></p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <span class="form-check form-switch form-switch-md" dir="ltr" >
                                                    <input data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="<?php if($category['sub_category_status'] == 1) {echo "active";   }else{echo "inactive";} ?>" type="checkbox" style="margin-left: 130px" class="form-check-input" data-status="<?= $category['sub_category_status'] ?>" data-id="<?= $category['id'] ?>" id="cat-status" <?php if ($category['sub_category_status']) {
                                                                                                                                                                                                                                echo "checked";
                                                                                                                                                                                                                            }    ?>>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div >
                                                <h4 data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title= "Sub-category name" class="mt-3 text-white" style="text-shadow: 2px 1px 1px #000000; "><?= $category['sub_category_name'] ?>
                                                </h4>
                                                <p data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="product faetures" class="text-decoration text-bg-dark bg-opacity-25 p-3 rounded"><strong>Features: </strong><?=$category['product_features']?></p>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-soft-info rounded fs-3" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                    <button type="button" data-image="<?= $category['sub_category_image'] ?>" data-id="<?= $category['id'] ?>" data-name="<?= $category['sub_category_name'] ?>"  data-bs-toggle="modal" data-bs-target="#editCategory" class="btn btn-light btn-icon waves-effect"><i class="las la-edit fs-3"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                        <?php endforeach; ?>


                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?= $this->include('partials/footer') ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    <!-- Varying Modal Content -->

    <!-- Varying modal content -->
    <div class="modal zoomIn" id="addSubCategory" tabindex="-1" aria-labelledby="addCategory" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="varyingcontentModalLabel">ADD NEW SUB-CATEGORY</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="addSubCategory" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="col-form-label">Sub-Category Name:</label>
                            <input type="text" name="name" class="form-control" id="cat-name" required>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Main category:</label>
                            <select class="js-example-basic-multiple" name="category" required>
                                <optgroup label="Main Category">
                                    <?php foreach($category_name as $cat_name):?>
                                    <option value="<?=$cat_name['id']?>"><?=$cat_name['category_name']?></option>
                                    <?php endforeach;?>
                                </optgroup>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Sub-Category Image:</label>
                            <input type="file" class="form-control" aria-label="category image" name="image" required>
                            <div class="invalid-feedback">Invalid File</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="modal zoomIn" id="editCategory" tabindex="-1" aria-labelledby="editCategory" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="varyingcontentModalLabel">EDIT SUB-CATEGORY</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <form action="updateSubCategory" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="cat-id" name="id">
                        <div class="mb-3">
                            <label class="col-form-label">Sub-category Name:</label>
                            <input type="text" name="name" class="form-control" id="cat-name">
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Sub-category Image:</label>
                            <input type="file" class="form-control" name="image" id="cat-image" aria-label="category image" style="display:none">
                            <div class="invalid-feedback">Invalid File</div>
                        </div>
                        <div class="mb-3">
                            <a href="#" id="openfile"><img class="form-control rounded mb-3" style="margin-left: 5px;" id="preview" width="450" height="200" src="<?=site_url()?>public/assets/images/small/img-4.jpg"></a>
                            <div class="invalid-feedback">Invalid File</div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!--jquery cdn-->

    <?= $this->include('partials/vendor-scripts') ?>
    <script>
        
        $('span input[type="checkbox"]').on('change', function() {
            var id = this.dataset.id;
            var status = this.dataset.status

            if (status == 1) {
                window.location.href = 'subStatusUpdate/' + id + '/' + 0;
            } else {
                window.location.href = 'subStatusUpdate/' + id + '/' + 1;
            }
        });
        $('#editCategory').on("show.bs.modal", function(event) {
            var link = $(event.relatedTarget)
            var name = link.data('name');
            var id = link.data('id');
            var image = link.data('image');
           
            var modal = $(this)
            modal.find('#cat-name').val(name);
            modal.find('#cat-id').val(id);
            modal.find('#preview').val(image);
            modal.find("#preview").attr("src", 'img/sub_category/' + image);
        })
        $("#openfile").click(function() {
            $("#cat-image").click();
        })
        $("#cat-image").change(function() {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                $("#preview").attr("src", e.target.result);
            }
            reader.readAsDataURL(file);

        });
    </script>

</body>

</html>