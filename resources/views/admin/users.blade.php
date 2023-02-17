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
                <a href="{{url('users/create')}}"> <button type="button" class="btn btn-gradient-success btn-fw">  Add New User </button></a>
            </li>
          </ul>
        </nav>
      </div>

   
      {{-- User Header  --}}

    {{-- Table One  --}}

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> User Image </th>
                  <th> User Name </th>
                  <th> Progress </th>
                  <th> Email </th>
                  <th> User Type  </th>
                  {{-- <th> Created At </th>
                  <th> Updated At </th> --}}
                  <th> Action  </th>
                </tr>
              </thead>

              <tbody>

@foreach ($data as $item)
    
<tr>
  <td class="py-1">
    <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
  </td>

  <td>  {{$item ->name }} </td>
  <td>
    <div class="progress">
      <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
    </div>
  </td>
  <td> {{$item ->email }} </td>
  <td> {{$item ->usertype }} </td>
  {{-- <td> {{$data ->created_at }} </td>
  <td> {{$data ->updated_at }} </td> --}}


  @if ($item->usertype =="0") 
  <td> <a style="text-decoration: none;"  href="{{url('/deleteuser' , $item->id )}}"> <button style="width: 20px" type="button" class="btn btn-inverse-danger btn-fw">Delete</button> </a>  
    <a style="text-decoration: none" href="{{route('users.edit' , $item->id)}}"><button type="button" class="btn btn-inverse-warning btn-fw">Edit</button></a> 
    <a style="text-decoration: none" href=""><button type="button" class="btn btn-inverse-info btn-fw">View</button></a> 
  @else 
  <td> <a href=""> <button type="button" class="btn btn-inverse-dark btn-fw"> Admin  </button>
  </a> </td>
  @endif



</tr>

@endforeach



      







              </tbody>
            </table>
          </div>
        </div>
      </div>



</div>

<script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../../assets/js/off-canvas.js"></script>
<script src="../../assets/js/hoverable-collapse.js"></script>
<script src="../../assets/js/misc.js"></script>
</body>
</html>

@endsection
