<?php $__env->startPush('head'); ?>
    <title>Todo List App</title>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main-section'); ?>

<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">All Todos</div>
        <a href="<?php echo e(route("todo.create")); ?>" class="btn btn-primary btn-lg">Add Todo</a>
    </div>

    <table class="table table-stripped table-dark">
        <tr>
            <th>Name</th>
            <th>Work</th>
            <th>Due Date</th>
            <th>Action</th>
        </tr>
        <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr valign='middle'>
            <td><?php echo e($todo->name); ?></td>
            <td><?php echo e($todo->work); ?></td>
            <td><?php echo e($todo->dueDate); ?></td>
            <td>
                <a href="<?php echo e(route("todo.edit",$todo->id)); ?>" class="btn btn-success btn-sm">Update</a>
                <a href="<?php echo e(route("todo.delete",$todo->id)); ?>" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </table>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Marhaba\Desktop\laravel project\todos\resources\views/welcome.blade.php ENDPATH**/ ?>