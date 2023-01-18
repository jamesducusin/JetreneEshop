<form action="<?= isset($pass_modal) ? site_url('address_insert') : site_url('address_update')?>" class="needs-validation <?= session()->getFlashdata('submitted') ?> modal fade" method="post" id="add-address" tabindex="-1" novalidate>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?= isset($pass_modal) ?  "Update address" : "Add new address"; ?></h5>
                <a href="<?= base_url()?>/address_retrieve"><button class="close" type="button" aria-label="Close"><span aria-hidden="true">&times;</span></button></a>
            </div>
            <div class="modal-body">
                <div class="row">
                    <?php foreach ($pass_modal as $addres) ?>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Full name></label>
                            <input class="form-control" type="text" name="name" value="<?= isset($addres) ? $addres['name'] : ''; ?>" required>
                            <div class="invalid-feedback">Please fill in you full name!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Contact</label>
                            <input class="form-control" type="tel" name="contact" placeholder="09672975034" pattern="[0-9]{11}" value="<?= isset($addres) ? $addres['contact'] : ''; ?>" required>
                            <div class="invalid-feedback">Please fill in a correct format(e.g 09062975034)!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Street</label>
                            <input class="form-control" type="text" name="street" value="<?= isset($addres) ? $addres['street'] : ''; ?>" required>
                            <div class="invalid-feedback">Please fill in your street!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Barangay</label>
                            <input class="form-control" type="text" name="barangay" value="<?= isset($addres) ? $addres['barangay'] : ''; ?>" required>
                            <div class="invalid-feedback">Please fill in your the barangay!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>City/Municipality</label>
                            <input class="form-control" type="text" name="city" value="<?= isset($addres) ? $addres['city'] : ''; ?>" required>
                            <div class="invalid-feedback">Please fill in your municipality!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Province</label>
                            <input class="form-control" type="text" name="province" value="<?= isset($addres) ? $addres['province'] : ''; ?>" required>
                            <div class="invalid-feedback">Please fill in your province</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Zip code</label>
                            <input class="form-control" type="number" maxlength="5" name="postalcode" value="<?= isset($addres) ? $addres['postalcode'] : ''; ?>" required>
                            <div class="invalid-feedback">Please fill in you full name!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Label as</label>
                            <select class="custom-select" name="label_as" required>
                                <option value>select...</option>
                                <option value="Home">Home</option>
                                <option value="Work">Work</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="address-primary" name="default">
                            <label class="custom-control-label" for="address-primary">Make this default address.</label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <a href="<?= base_url()?>/address_retrieve"><button class="btn btn-secondary" type="button">Close</button></a>
                <button class="btn btn-primary btn-shadow" type="submit"><?= isset($addres) ?  "Update address" : "Add new address"; ?></button>
            </div>
        </div>
    </div>
</form>