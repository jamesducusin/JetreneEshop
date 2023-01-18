<form class="needs-validation modal fade" method="post" id="add-address" tabindex="-1" novalidate>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add a new address</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address-fn">First name</label>
                                <input class="form-control" type="text" id="address-fn" required>
                                <div class="invalid-feedback">Please fill in you first name!</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address-ln">Last name</label>
                                <input class="form-control" type="text" id="address-ln" required>
                                <div class="invalid-feedback">Please fill in you last name!</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address-company">Company</label>
                                <input class="form-control" type="text" id="address-company">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address-country">Country</label>
                                <select class="custom-select" id="address-country" required>
                                    <option value>Select country</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="France">France</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Spain">Spain</option>
                                    <option value="UK">United Kingdom</option>
                                    <option value="USA">USA</option>
                                </select>
                                <div class="invalid-feedback">Please select your country!</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address-city">City</label>
                                <input class="form-control" type="text" id="address-city" required>
                                <div class="invalid-feedback">Please fill in your city!</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address-line1">Line 1</label>
                                <input class="form-control" type="text" id="address-line1" required>
                                <div class="invalid-feedback">Please fill in your address!</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address-line2">Line 2</label>
                                <input class="form-control" type="text" id="address-line2">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address-zip">ZIP code</label>
                                <input class="form-control" type="text" id="address-zip" required>
                                <div class="invalid-feedback">Please add your ZIP code!</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="address-primary">
                                <label class="custom-control-label" for="address-primary">Make this address primary</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary btn-shadow" type="submit">Add address</button>
                </div>
            </div>
        </div>
    </form>