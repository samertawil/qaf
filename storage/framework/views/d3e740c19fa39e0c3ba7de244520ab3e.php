 <!--[if BLOCK]><![endif]--><?php if(session('message')): ?>
     <div class="alert alert-<?php echo e(session('type')); ?> alert-dismissible fade show w-75 mx-auto  " id="test1">
         <?php echo e(session('message')); ?>

         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
             
         </button>
     </div>
 <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

 <script>
     setTimeout(() => {
         $('.alert').fadeOut()
     }, 4000);
 </script>
<?php /**PATH C:\xampp\htdocs\qaf\project-qaf-admin\resources\views/layouts/_alert-session.blade.php ENDPATH**/ ?>