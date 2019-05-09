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

        <!-- Spinner Button -->
        <div class="form-group row" style="margin-bottom: -40px;">
            <label for="jml" class="col-sm-5 col-form-label">Jumlah</label>
            <div class="col-sm-7">
                <div id="jml" class="def-number-input number-input">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                    <input class="quantity" min="0" max="10" name="quantity" value="1" type="number" readonly>
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                </div>
            </div>
        </div>
        <!-- Spinner Button -->

        <!-- Quotes -->
        <div class="form-group row">
            <label for="note" class="col-sm-5 col-form-label">note</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="note" name="note" >
            </div>
        </div>
        <!-- nama Web -->

        <!-- upload image -->
      </div>
      <div class="modal-footer">
      <button class="btn btn-sm btn-primary" type="submit">save</button>
      </div>
    <!-- </form> -->

    </div>
  </div>
</div>