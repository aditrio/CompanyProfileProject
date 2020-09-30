

<!-- Modal -->
<div class="modal fade " id="modal-delete-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data ??</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-danger text-light">

        <div class="form-group">
            <select class="form-control" name="delete-id-product" id="delete-id-product">

              <option  selected="true"  value="">Pilih..</option>
              
            </select>
          </div>

          <strong><p>DATA AKAN DIHAPUS PERMANEN !!</p></strong>

        <form action="" id="form-delete-product" method="POST">
          @method('DELETE')
          @csrf
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>