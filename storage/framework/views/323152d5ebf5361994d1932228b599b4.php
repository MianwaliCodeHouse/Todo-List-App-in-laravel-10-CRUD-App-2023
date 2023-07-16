
<?php $__env->startPush('head'); ?>
    <title>Add Todo</title>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main-section'); ?>

<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">Add Todo</div>
        <a href="<?php echo e(route("todo.home")); ?>" class="btn btn-primary btn-lg">Back</a>
    </div>
    <div class="card">
      <div class="card-body">
        <form action="<?php echo e(route("todo.store")); ?>" method="post">
          <?php echo csrf_field(); ?>
          <label for="" class="form-label mt-4">Name</label>
          <input type="text" name="name" class="form-control">
          <div class="text-danger">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <label for="" class="form-label mt-4">Work</label>
          <input type="text" name="work" class="form-control">
          <div class="text-danger">
            <?php $__errorArgs = ['work'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <label for="" class="form-label mt-4">Due Date</label>
          <input type="date" name="dueDate" class="form-control">
          <div class="text-danger">
            <?php $__errorArgs = ['dueDate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <button class="btn btn-primary btn-lg mt-4">Add Todo</button>
        </form>
      </div>
    </div>
    

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Marhaba\Desktop\laravel project\todos\resources\views/create.blade.php ENDPATH**/ ?>