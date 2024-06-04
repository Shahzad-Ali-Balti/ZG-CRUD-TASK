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
                    <form method='POST' action="/students/<?php echo e($student->id); ?>/update" enctype='multipart/form-data'>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class='form-group'>
                            <label>Name</label>
                            <input type='text' name='name' class='form-control' value="<?php echo e($student->Name); ?>">
                            <?php if($errors->has('name')): ?>
          <span> <?php echo e($errors-> first('name')); ?></span>
          <?php endif; ?>
                        </div>
                        <div class='form-group'>
                            <label>Department</label>
                            <input type='text' name='department' class='form-control' value="<?php echo e($student->Department); ?>">
                            <?php if($errors->has('department')): ?>
          <span> <?php echo e($errors-> first('department')); ?></span>
          <?php endif; ?>
                        </div>
                        <div class='form-group'>
                            <label>Age</label>
                            <input type='number' name='age' class='form-control' value="<?php echo e($student->Age); ?>">
                            <?php if($errors->has('age')): ?>
          <span> <?php echo e($errors-> first('age')); ?></span>
          <?php endif; ?>
                        </div>
                        <div class='form-group'>
                            <label>Image</label>
                            <input type='file' name='image' class='form-control' value="<?php echo e($student->Image); ?>">   
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
<?php /**PATH C:\Users\msbal\OneDrive\Desktop\ZIMO Tasks\ZG-Laravel_Tasks\crud_task\resources\views/students/edit.blade.php ENDPATH**/ ?>