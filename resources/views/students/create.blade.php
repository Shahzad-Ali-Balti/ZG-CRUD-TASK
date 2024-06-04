<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZIMO-CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="/">ZIMO GROUP</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">All Students</a>
    </li>   
  </ul>
</nav>
@if($message= Session::get('success'))
<div class='alert alert-success'><strong>{{$message}}</strong></div>
@endif
<div class="container-fluid">
  <h2>Add New Student</h2>
  <div class='container'>
    <div class='row justify-content-center'>
      <div class='col-sm-8'>
        <div class='card mt-3 p-3'>
        <form method='POST' action='/students/store' enctype='multipart/form-data'>
    @csrf
    <div class='form-group'>
        <label>Name</label>
        <input type='text' name='name' class='form-control' value="{{ old('name') }}">
        @if($errors->has('name'))
            <span> {{$errors->first('name')}}</span>
        @endif
    </div>
    <div class='form-group'>
        <label>Department</label>
        <input type='text' name='department' class='form-control' value="{{ old('department') }}">
        @if($errors->has('department'))
            <span> {{$errors->first('department')}}</span>
        @endif
    </div>
    <div class='form-group'>
        <label>Age</label>
        <input type='number' name='age' class='form-control' value="{{ old('age') }}">
        @if($errors->has('age'))
            <span> {{$errors->first('age')}}</span>
        @endif
    </div>  
    <div class='form-group'>
        <label>Image</label>
        <input type='file' name='image' class='form-control' placeholder="Select an image (JPEG, PNG, GIF)">
        @if($errors->has('image'))
            <span> {{$errors->first('image')}}</span>
        @endif
    </div> 
    <button type='submit' class='btn btn-dark'>Submit</button> 
</form>

        </div> 
      </div>
    </div>
  </div>
</div>
</body>
</html>