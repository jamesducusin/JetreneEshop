<?= $this->include('partials/main') ?>

<head>

    <?php echo view('partials/title-meta', array('title' => 'Offers')); ?>

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


                    <?php echo view('partials/page-title', array('pagetitle' => 'Pages', 'title' => 'Offers')); ?>
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
                                                        <input type="text" class="form-control search" id="searchProductList" placeholder="Search Offers..">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-auto">
                                                <button type="button" class="btn btn-soft-info" data-bs-toggle="modal" data-bs-target="#addOffer"><i class="ri-add-circle-line align-middle me-1"></i>
                                                    Add offer</button>
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
                        <?php foreach ($offers as $offer) : ?>
                            <div class="col-xl-4 col-md-6">
                                <!-- card -->
                                <div class="card card-animate" style="border-radius:15px;">
                                    <div class="card-body category_block" style="border-radius:15px; background-image:url('img/offers/<?= $offer['offer_image'] ?>')">
                                        <div class="d-flex align-items-center wall_category_block" style="height:100%">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden align-items-end justify-content-between mt-4 mb-100">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h4 data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Sub-offer name" class="mt-3 text-white " style="text-shadow: 2px 1px 1px #000000; ">
                                                </h4>
                                                <h6 style="z-index:1000 ;position:relative" class="text-decoration text-bg-dark bg-opacity-10 p-3 rounded"><strong><?= $offer['offer_name'] ?></strong><br><?= $offer['offer_percentage'] ?>% OFF</h6>
                                            </div>
                                            <div class="hstack flex-wrap gap-2" style="z-index: 10001; float:right">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class=" form-check form-switch form-switch-dark form-switch-md">

                                                        <input data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="<?php if ($offer['offer_status'] == 1) {
                                                                                                                                                    echo "active";
                                                                                                                                                } else {
                                                                                                                                                    echo "inactive";
                                                                                                                                                } ?>" type="checkbox" class="form-check-input mt-3" data-status="<?= $offer['offer_status'] ?>" data-id="<?= $offer['id'] ?>" id="cat-status" <?php if ($offer['offer_status']) {
                                                                                                                                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                                                                                                                                }    ?>>

                                                    </span>

                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-info rounded fs-3" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                        <button type="button" data-desc="<?= $offer['offer_desc'] ?>" data-discount="<?= $offer['offer_percentage'] ?>" data-image="<?= $offer['offer_image'] ?>" data-id="<?= $offer['id'] ?>" data-name="<?= $offer['offer_name'] ?>" data-bs-toggle="modal" data-bs-target="#viewOffer" class="btn btn-light btn-icon waves-effect"><i class=" ri-eye-line fs-3"></i></button>
                                                    </span>

                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-info rounded fs-3" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <button type="button" data-desc="<?= $offer['offer_desc'] ?>" data-percentage="<?= $offer['offer_percentage'] ?>" data-image="<?= $offer['offer_image'] ?>" data-id="<?= $offer['id'] ?>" data-name="<?= $offer['offer_name'] ?>" data-bs-toggle="modal" data-bs-target="#editOffer" class="btn btn-light btn-icon waves-effect"><i class="las la-edit fs-3"></i></button>
                                                    </span>

                                                </div>
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
    <div class="modal zoomIn" id="addOffer" tabindex="-1" aria-labelledby="addCategory" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="varyingcontentModalLabel">ADD NEW OFFER</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="addOffer" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="col-form-label">Offer title:</label>
                            <input type="text" name="name" class="form-control" placeholder="title" id="cat-name" required>
                        </div>
                        <div class="mb-3">
                            <div class="col-lg-3 ">
                                <label for="offerDesc" class="form-label">Offer Description</label>
                            </div>
                            <div class="col-lg-12">
                                <textarea class="form-control" id="offerDesc" rows="3" name="offer_desc" placeholder="Enter description" required></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                        <label class="form-label">Discount</label>
                            <input type="number" class="form-control" id="discount" name="offer_percentage" placeholder="Enter discount" required>
                        </div>

                        <div class="mb-3">
                            <label class="col-form-label">Offer Image:</label>
                            <input type="file" class="form-control" aria-label="offer image" name="image" required>
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
    <div class="modal zoomIn" id="editOffer" tabindex="-1" aria-labelledby="editOffer" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="varyingcontentModalLabel">EDIT SUB-CATEGORY</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="updateOffer" method="post" enctype="multipart/form-data">
                        <input type="hidden" id="offer-id" name="id">
                        <div class="mb-3">
                            <label class="col-form-label">Offer title:</label>
                            <input type="text" name="offer_name" class="form-control" placeholder="title" id="offer-name" required>
                        </div>
                        <div class="mb-3">
                            <div class="col-lg-3 ">
                                <label for="offerDesc" class="form-label">Offer Description</label>
                            </div>
                            <div class="col-lg-12">
                                <textarea class="form-control" id="offer-desc" rows="3" name="offer_desc" placeholder="Enter description" required></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                        <label class="form-label">Discount</label>
                            <input type="number" class="form-control" id="offer-discount" name="offer_percentage" placeholder="Enter discount" required>
                        </div>

                        <div class="mb-3">
                            <label class="col-form-label">Offer Image:</label>
                            <input type="file" class="form-control" name="image" id="offer-image" aria-label="offer image" style="display:none">
                            <div class="invalid-feedback">Invalid File</div>
                        </div>
                        <div class="mb-3">
                            <a href="#" id="openfile"><img class="form-control rounded mb-3" style="margin-left: 5px;" id="preview" width="450" height="200" src="<?= site_url() ?>public/assets/images/small/img-4.jpg"></a>
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
    <div class="modal modal-xl zoomIn" id="viewOffer" tabindex="-1" aria-labelledby="editOffer" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="varyingcontentModalLabel">Offer Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                        <div class="mb-3">
                        <h2 class="modal-title mb-3" id="discount" >Discount: </h2>
                        <h6 class="modal-title mb-3" id="desc" >Description: </h6>
                        <img class="form-control rounded mb-3" style="margin-left: 5px;" id="preview"  src="<?= site_url() ?>public/assets/images/small/img-4.jpg">
                            
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
                window.location.href = 'statusOfferUpdate/' + id + '/' + 0;
            } else {
                window.location.href = 'statusOfferUpdate/' + id + '/' + 1;
            }
        });
        $('#editOffer').on("show.bs.modal", function(event) {
            var link = $(event.relatedTarget)
            var name = link.data('name');
            var id = link.data('id');
            var image = link.data('image');
            var desc = link.data('desc');
            var percentage = link.data('percentage');

            var modal = $(this)
            modal.find('#offer-name').val(name);
            modal.find('#offer-id').val(id);
            modal.find('#offer-desc').val(desc);
            modal.find('#offer-discount').val(percentage);
            modal.find('#preview').val(image);
            modal.find("#preview").attr("src", 'img/offers/' + image);
        })
        $('#viewOffer').on("show.bs.modal", function(event) {
            var link = $(event.relatedTarget)
            var image = link.data('image');
            var discount = link.data('discount');
            var desc = link.data('desc');
            var modal = $(this)
            modal.find('#discount').text('Discount:  ' + discount + '%');
            modal.find('#desc').text('Description:  ' + desc);
            modal.find("#preview").attr("src", 'img/offers/' + image);
        })
        $("#openfile").click(function() {
            $("#offer-image").click();
        })
        $("#offer-image").change(function() {
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