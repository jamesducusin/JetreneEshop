<div class="modal fade" id="deleteAddress" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="address_delete" method="post"?>
        <div class="modal-header">
          <h5 class="modal-title">Delete</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="deleteid" name="id">
          <p class="font-size-sm">Are you sure you want to delete this record?.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="submit btn-primary btn-sm">Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>