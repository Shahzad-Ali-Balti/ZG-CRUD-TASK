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
    <a class="navbar-brand" href="/">ZIMO GROUP</a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/">All Students</a>
        </li>   
    </ul>
</nav>
<div class="container-fluid">
    <h2>Edit Student</h2>
    <div class='container'>
        <div class='row justify-content-center'>
            <div class='col-sm-8'>
                <div class='card mt-3 p-3'>
                    <form method='POST' action="/students/{{ $student->id }}/update" enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <div class='form-group'>
                            <label>Name</label>
                            <input type='text' name='name' class='form-control' value="{{ $student->Name }}">
                            @if($errors->has('name'))
          <span> {{$errors-> first('name')}}</span>
          @endif
                        </div>
                        <div class='form-group'>
                            <label>Department</label>
                            <input type='text' name='department' class='form-control' value="{{ $student->Department }}">
                            @if($errors->has('department'))
          <span> {{$errors-> first('department')}}</span>
          @endif
                        </div>
                        <div class='form-group'>
                            <label>Age</label>
                            <input type='number' name='age' class='form-control' value="{{ $student->Age }}">
                            @if($errors->has('age'))
          <span> {{$errors-> first('age')}}</span>
          @endif
                        </div>
                        <div class='form-group'>
                            <label>Image</label>
                            <input type='file' name='image' class='form-control' value="{{ $student->Image }}">   
                        </div>
                        <button type='submit' class='btn btn-dark'>Update</button> 
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>
</body>
</html>
