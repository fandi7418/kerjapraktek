<div class="row" style="margin-top:-30px">
    <h3> Daftar Etalase Anda</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nama</th>


                <th>Aksi</th>
            </tr>
        </thead>
        @foreach ($etalase->products as $p)
        <tr>
            <td>{{ $p->name }}</td>

            <td>
                <a data-etalase-id="{{ $etalase->id }}" data-product-id="{{ $p->id }}" href="#" data-placement="top" data-original-title="Delete Pengguna" data-toggle="tooltip" class="btn btn-xs btn-danger btnDelete"><i class="fa fa-fw fa-times"></i> <b class="hover-effect">Delete</b></a></td>
            </td>

        </tr>
        @endforeach
    </table>
</div>


@push('scripts')
<script src="/js/etalase.js"></script>
@endpush