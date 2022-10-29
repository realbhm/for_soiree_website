@extends('admin.admin_master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <br>
                        <center>
                            <img class="rounded-circle avatar-xl" src="{{ asset('backend/assets/images/small/img-5.jpg') }}" alt="Card image cap">
                        </center>
                        <div class="card-body">
                            <h4 class="card-title">Nom : {{ $adminData->name }}</h4>
                            <hr>
                            <h4 class="card-title">Nom d'utilisateur : {{ $adminData->username }}</h4>
                            <hr>
                            <h4 class="card-title">Email : {{ $adminData->email }}</h4>
                            <hr>
                            <a href="" class="btn btn-info btn-rounded waves-effect waves-light"> Modifier le profile </a>
                            
                        </div>
                    </div>
                </div>

            </div><!-- end col -->
        </div>
    </div>
    </div>
@endsection
