<form action="<?= site_url('address_update') ?>" class="needs-validation modal fade" method="post" id="editAddress" tabindex="-1" novalidate>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update address</h5>
                <button class="close"  data-dismiss="modal" type="button" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                <input  type="hidden" id="idHidden" name="id">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Full name</label>
                            <input class="form-control nameInput" type="text" id="nameInput" name="name"  required>
                            <div class="invalid-feedback">Please fill in you full name!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Contact</label>
                            <input class="form-control" type="tel" id="contactInput" name="contact" placeholder="09xxxxxxxxx" maxlength="11" pattern="[0-9]{11}" required>
                            <div class="invalid-feedback">Please fill in a correct format(e.g 09xxxxxxxxx)!</div>
                        </div>
                    </div>
                   
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Street</label>
                            <input class="form-control" type="text" id="streetInput" name="street" required>
                            <div class="invalid-feedback">Please fill in your street</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Zip code</label>
                            <input class="form-control" type="number" maxlength="5" id="postalcodeInput" name="postalcode" required>
                            <div class="invalid-feedback">Please fill in your zip code!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Label as</label>
                            <select class="custom-select" id="labelInput" name="label_as" required>
                                <option value>select...</option>
                                <option value="Home">Home</option>
                                <option value="Work">Work</option>
                            </select>
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