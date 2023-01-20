<form action="<?= site_url('address_insert') ?>" class="needs-validation modal fade" method="post" id="add-address" tabindex="-1" novalidate>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add new address</h5>
                <button class="close"  data-dismiss="modal" type="button" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                  
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Full name</label>
                            <input class="form-control" type="text" name="name"  required>
                            <div class="invalid-feedback">Please fill in you full name!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Contact</label>
                            <input class="form-control" type="tel" name="contact" placeholder="09xxxxxxxxx" maxlength="11" pattern="[0-9]{11}" required>
                            <div class="invalid-feedback">Please fill in a correct format(e.g 09xxxxxxxxx)!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Region</label>
                            <select  class="custom-select" id="region" required></select>
                            <input class="form-control" type="hidden" id="vregion" name="region" required>
                            <div class="invalid-feedback">Please fill in your region!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Province</label>
                            <select  class="custom-select" id="province" required></select>
                            <input class="form-control" type="hidden" id="vprovince" name="province"  required>
                            <div class="invalid-feedback">Please fill in your the province!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>City/Municipality</label>
                            <select  class="custom-select" id="city" required></select>
                            <input class="form-control" type="hidden" id="vcity" name="city"  required>
                            <div class="invalid-feedback">Please fill in your municipality!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Barangay</label>
                            <select  class="custom-select" id="barangay" required></select>
                            <input class="form-control" type="hidden" id="vbarangay" name="barangay"  required>
                            <div class="invalid-feedback">Please fill in your barangay</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Street</label>
                            <input class="form-control" type="text" name="street" required>
                            <div class="invalid-feedback">Please fill in your street</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Zip code</label>
                            <input class="form-control" type="number" maxlength="5" name="postalcode" required>
                            <div class="invalid-feedback">Please fill in your zip code!</div>
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
                <button class="btn btn-secondary"  data-dismiss="modal" type="button">Close</button>
                <button class="btn btn-primary btn-shadow" type="submit">Save</button>
            </div>
        </div>
    </div>
</form>