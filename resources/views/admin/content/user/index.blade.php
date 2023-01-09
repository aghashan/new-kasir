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
            <h6 class="m-0 font-weight-bold text-white">Daftar User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>email</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>level</th>
                            <th>Actiom</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $d)
                        <tr>
                            <td>{{$d->email}}</td>
                            <td>{{$d->nama}}</td>
                            <td>{{$d->username}} Snider</td>
                            <td>{{$d->level}}</td>
                            <td>
                            <a href="#" class="btn btn-warning btn-circle btn-sm">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection