<div class="modal modal-edit fade" id="delete-modal-{{$p->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <div class="card-body">
                    <form enctype="multipart/form-data" action="{{ url('/product/update/' .$p->id)}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <label>Nama</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" value="{{$p->name}}" name="name" placeholder="Nama">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <label>Deskripsi</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="description" value="{{$p->description}}" name="description" placeholder="Deskripsi" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <label>Harga</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="price" value="{{$p->price}}" name="price" placeholder="Harga" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Kategori</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control" name="kategori_id" id="kategori_id">

                                    @foreach ($kategori as $k)
                                    <option value="{{$k->id}}">{{$k->nama}}</option>

                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <label>Status</label>
                                </div>
                                <div class="col-md-9">
                                    {!! Form::select('status', $p->statuses, $p->status, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <label>Gambar</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="image" value="{{$p->image}}" id="image" placeholder="Image">
                                </div>
                            </div>
                        </div>


                        <div class="modal-footer">

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>