<div class="modal fade" id="updateAccount" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="account_update" method="post" ?>
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="account-ln">Input Current Password to confirm changes</label>
                            <input class="form-control" type="password" id="current_password" name="current_password">
                            <div class="invalid-feedback d-block" id="validation"></div>
                        </div>
                    </div>
                    <input type="hidden" id="nemail" name="email">
                    <input type="hidden" id="npassword" name="new_password">
                    <input type="hidden" id="cpassword" name="confirm_password">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" id="submitUpdate" class="submit btn-primary btn-sm">Conirm</button>
                </div>
            </form>
        </div>
    </div>
</div>