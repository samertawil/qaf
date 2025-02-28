<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'pageTitle' => '',
    'button' => '',
    'type' => '',
    'label' => __('customTrans.save'),
    'divlclass' => '',
    'route' => null,
    'iclass' => '',
    'crumb' => null,
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
    'pageTitle' => '',
    'button' => '',
    'type' => '',
    'label' => __('customTrans.save'),
    'divlclass' => '',
    'route' => null,
    'iclass' => '',
    'crumb' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>



<div class="w-100 d-flex d-block align-items-center justify-content-between my-2 page-header-breadcrumb">

    <div class="container-lg">
        <div class="breadCrumb">
            <div class="row">
                <div class="col-custom">
                    <h1> <?php echo e($pageTitle ?? 'Page Title'); ?></h1>
                   
                    <div class="links">
                        <a href="<?php echo e(route('website')); ?>" class="text-muted"><?php echo e(__('customTrans.home page')); ?> </a>
                        
                        <?php echo e($slot ?? ''); ?>

                    </div>

 
                </div>
            </div>
        </div>
    </div>

 

</div>



<?php /**PATH C:\xampp\htdocs\qaf\project-qaf-admin\resources\views/components/breadcrumb-website.blade.php ENDPATH**/ ?>