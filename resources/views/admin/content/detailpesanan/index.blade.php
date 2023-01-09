@extends('/admin/layout/main')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header  bg-primary py-3">
            <h6 class="m-0 font-weight-bold text-white">Daftar Pesanan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Pesanan</th>
                            <th>Tanggal</th>
                            <th>iduser</th>
                            <th>no meja</th>
                            <th>Total</th>
                            <th>Bayar</th>
                            <th>kembalian</th>
                            <th>status pesanan</th>
                            <th>status pesanan</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>gambar</td>
                            <td>kode</td>
                            <td>Donna Snider</td>
                            <td>gambar</td>
                            <td>kode</td>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>dsadasdasd</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection