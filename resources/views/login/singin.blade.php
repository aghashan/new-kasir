@extends('/login/index')
@section('content')
<div class="container ">
    <div class="row mt-5 justify-content-center">
        <div class="col-8">
            <div class="card mt-5 ">
                <div class="card-header bg-primary text-center font-weight-bold text-white">
                    LOGIN
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">
                                <i class="fa fa-user"></i>
                                Username
                            </label>
                            <input type="text" class="form-control" name="username" id="" autocomplete="off" aria-describedby="username" placeholder="Masukan username anda">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">
                                <i class="fa fa-lock"></i>
                                Password
                            </label>
                            <input type="password" class="form-control" name="password" id="" aria-describedby="password" placeholder="Masukan password anda">
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto ">
                            <button class="btn btn-outline-primary btn-sm mt-3" type="button">Login</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <a class="small" href="#">Create an Account!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection