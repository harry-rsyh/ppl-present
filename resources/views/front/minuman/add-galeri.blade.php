<!-- Modal -->
<div class="modal fade" id="modalGaleri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

    <!-- <form method="POST" enctype="multipart/form-data" >
    @csrf -->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Quotes -->
        <!-- <div class="form-group row">
            <label for="jml" class="col-sm-5 col-form-label">Quantity <p class="d-inline" style="font-size: 7pt;color:red;"><i>( Max 35 Character )</i></p></label>
            <div class="col-sm-7">
                <input type="number" class="form-control" id="jml" name="jml" maxlength="35" required>
            </div>
        </div> -->
        <!-- nama Web -->
        <!-- Label -->
        <div class="form-group row">
            <label for="jml" class="col-sm-5 col-form-label">Jumlah</label>
            <div class="col-sm-7">
                <select class="form-control" id="jml" name="jml">
                    <option value="1" >1</option>
                    <option value="1" >2</option>
                    <option value="1" >3</option>
                    <option value="1" >4</option>
                    <option value="1" >5</option>
                </select>
            </div>
        </div>
        <!-- Label -->

        <div class="form-group row">
            <label for="opsi" class="col-sm-5 col-form-label">Opsi</label>
            <div class="col-sm-7">
                <select class="form-control" id="opsi" name="opsi">
                    <option value="1" >1</option>
                    <option value="1" >2</option>
                </select>
            </div>
        </div>
        <!-- Label -->

        <!-- upload image -->
      </div>
      <div class="modal-footer">
      <button class="btn btn-sm btn-primary" type="submit">save</button>
      </div>
    <!-- </form> -->

    </div>
  </div>
</div>