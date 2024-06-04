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

<?php if($message = Session::get('success')): ?>
<div class="alert alert-success dismissible">
    <strong><?php echo e($message); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>

<div class="container-fluid">
    <div class="text-right">    
        <a href="/students/create" class="btn btn-dark mt-2">New Student</a>
    </div>
    <h2>Student Details</h2>

    <div>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Student Name</th>
                    <th>Department</th>
                    <th>Age</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key + 1); ?></td>
                        <td><a href='/students/<?php echo e($student->id); ?>/show' class='text-light' ><?php echo e($student->Name); ?></a></td>
                        <td><?php echo e($student->Department); ?></td>
                        <td><?php echo e($student->Age); ?></td>
                        <td>
                        <img src="storage/students/<?php echo e($student->Image); ?>" class='rounded-circle' width='50' height='50'>
                        </td>
                        <td>
                            <a href="/students/<?php echo e($student->id); ?>/edit" class="btn btn-light">Edit</a>
                            <!-- <a href= "/students/<?php echo e($student->id); ?>/delete" class="btn btn-danger">Delete</a> -->              
                            <form action="/students/<?php echo e($student->id); ?>/delete" method="POST" style="display:inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button  href= "/students/<?php echo e($student->id); ?>/delete" type="submit" class="btn btn-danger">
                              Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html><?php /**PATH C:\Users\msbal\OneDrive\Desktop\ZIMO Tasks\ZG-Laravel_Tasks\crud_task\resources\views/students/index.blade.php ENDPATH**/ ?>