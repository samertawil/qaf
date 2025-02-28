<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'type' => 'text',
    'name'=>'',
    'value' => '',
    'dataUrl' => '',
    'dir' => '',
    'label'=>'',
    'id'=>'',
    'title'=>'',
    'labelclass'=>'',
    'description_field'=>'',
    'divlclass' =>'',
    'labelname'=>'',
    'req'=>'',
    'divWidth'=>'3',
	 'span'=>null,
    'description_field1'=>null,
    'marginBottom'=>'3',
   
    
    
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'type' => 'text',
    'name'=>'',
    'value' => '',
    'dataUrl' => '',
    'dir' => '',
    'label'=>'',
    'id'=>'',
    'title'=>'',
    'labelclass'=>'',
    'description_field'=>'',
    'divlclass' =>'',
    'labelname'=>'',
    'req'=>'',
    'divWidth'=>'3',
	 'span'=>null,
    'description_field1'=>null,
    'marginBottom'=>'3',
   
    
    
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>


<div   class="<?php echo \Illuminate\Support\Arr::toCssClasses([ "form-group mb-$marginBottom col-md-4 col-lg-$divWidth" , $divlclass  ]); ?>" data-url=<?php echo e($dataUrl); ?>>

    <!--[if BLOCK]><![endif]--><?php if($label): ?>
    <label for="<?php echo e($id); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(["col-form-label   $labelclass "]); ?>"><?php echo e($labelname?$labelname: __("customTrans.$name")); ?>

        <!--[if BLOCK]><![endif]--><?php if($req): ?>
        <span class="text-danger">*</span>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
		   <!--[if BLOCK]><![endif]--><?php if($span): ?>
        <small class="text-muted"><?php echo e($description_field1); ?></small>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </label>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    
   
    
        <input 
          id="<?php echo e($id); ?>" 
          type="<?php echo e($type); ?>"
          name="<?php echo e($name); ?>"
          value="<?php echo e(old($name, $value)); ?>" 
          
          autocomplete="<?php echo e($name); ?>"
          dir="<?php echo e($dir); ?>"
          title="<?php echo e($title); ?>"
         
          <?php echo e($attributes->class(['form-control',
            'is-invalid' => $errors->has($name)])); ?>>
        <small class="text-muted"><?php echo e($description_field); ?></small>

        <?php echo $__env->make('partials.general._show-error',['field_name'=>$name], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     

    
</div>
<?php /**PATH C:\xampp\htdocs\qaf\project-qaf-admin\resources\views/components/input.blade.php ENDPATH**/ ?>