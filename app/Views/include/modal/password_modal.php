<div class="modal fade" id="updateAccount" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="account_update" method="post" ?>
                <div class="modal-header">
                    <h5 class="modal-title">Verification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="account-ln">Input Password</label>
                            <input class="form-control" type="password" id="current_password" name="current_password">
                            <div class="invalid-feedback d-block"><?= isset($validation) ? display_error($validation, 'current_password') : '' ?></div>
                        </div>
                    </div>
                    <input type="hidden" id="c_password" name="current_password">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="submit btn-primary btn-sm">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>