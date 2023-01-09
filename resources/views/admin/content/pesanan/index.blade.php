@extends('/admin/layout/main')
@section('content')
<div class="container-fluid">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-success" type="button">
            <Tambah><i class="fa fa-plus"></i> Tambah 
        </a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header  bg-primary py-3">
            <h6 class="m-0 font-weight-bold text-white">Daftar Meja</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>kode meja</th>
                            <th>no meja</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>gambar</td>
                            <td>kode</td>
                            <td>Donna Snider</td>
                            <td>jjjj</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection