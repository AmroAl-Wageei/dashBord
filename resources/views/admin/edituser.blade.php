@extends('div.admin.app')

@section('title' , 'Dashboard')
    


@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
  </head>
  <body>

<div class="content-wrapper">


    {{-- User Header  --}}

    <div class="page-header">

        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
          </span> Users 
        </h3>
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <a href="{{url('/users')}}"> <button type="button" class="btn btn-gradient-success btn-fw">  Show All User </button></a>
            </li>
          </ul>
        </nav>
      </div>

   
      {{-- User Header  --}}







      {{-- Create User --}}




      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Edit  User </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Back to All User </a></li>
                <li class="breadcrumb-item active" aria-current="page">User Form </li>
              </ol>
            </nav>
          </div>

          <div class="row">
            

            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit  User </h4>
                  <p class="card-description"> User Form</p>

                  <form class="forms-sample" action="{{route('users.update' , $data->id)}}" method="Post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="{{$data->name}}" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" value="{{$data->email}}" name="email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword4" value="{{$data->password}}" name="password">
                    </div>



                    <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>




      {{-- Create User --}}









    </div>

<script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../../assets/js/off-canvas.js"></script>
<script src="../../assets/js/hoverable-collapse.js"></script>
<script src="../../assets/js/misc.js"></script>
</body>
</html>

@endsection


