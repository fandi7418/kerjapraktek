<!-- modal-delete -->
<div class="modal modal-edit fade" id="delete-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" align="center"><b>Delete Isi Etalase</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form enctype="multipart/form-data" action="{{ url('/etalase/hapus/' .$p->id)}}" method="get">

                <div class="modal-body">
                    <input type="hidden" name="product_id" value="{{$p->id}}">
                    <input type="hidden" name="name" value="{{$p->name}}">
                    <h5>Apakah Kamu Yakin Ingin Menghapus Isi Etalase Dengan Nama "{{$p->name}}"</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger btnDeleteEtalase">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>