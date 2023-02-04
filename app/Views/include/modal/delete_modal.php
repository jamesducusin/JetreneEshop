<!-- <div class="modal fade" id="deleteAddress" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="address_delete" method="post" ?>
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
</div> -->
<div class="modal fade zoomIn" id="deleteAddress" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-body">
        <div class="mt-2 text-center">
          <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
          <i class="czi-trash fs-100 " style="font-size: 5em;"></i>
            <h4>Are you sure ?</h4>
            <p class="text-muted mx-4 mb-0">Are you sure you want to
              remove this record ?</p>
          </div>
        </div>
        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
          <form action="address_delete" method="post">
          <input type="hidden" id="deleteid" name="id">
          <button type="button" class="btn w-sm btn-light" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Yes, Delete It!</button>
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>