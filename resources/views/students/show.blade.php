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
<div class="container-fluid">
  <h2>Student Details</h2>
  <div class='container'>
    <div class='row justify-content-center'>
      <div class='col-sm-8'>
        <div class='card mt-3 p-3'>
        <p>Name : <b>{{$student->Name}}</b></p>
        <p>Department : <b>{{$student->Department}}</b></p>
        <p>Age : <b>{{$student->Age}}</b></p>
        <div>
          <p>Image :</p>
          <img src='/storage/students/{{$student->Image}}' style='border-radius:5px; width:100px; height:100px;'>
        </div>
        </div> 
      </div>
    </div>
  </div>
</div>
</body>
</html>