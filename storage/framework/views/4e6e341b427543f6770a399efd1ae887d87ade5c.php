<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('productos')->html();
} elseif ($_instance->childHasBeenRendered('YOZUT9A')) {
    $componentId = $_instance->getRenderedChildComponentId('YOZUT9A');
    $componentTag = $_instance->getRenderedChildComponentTagName('YOZUT9A');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('YOZUT9A');
} else {
    $response = \Livewire\Livewire::mount('productos');
    $html = $response->html();
    $_instance->logRenderedChild('YOZUT9A', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>     
    </div>   
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ejemplo\resources\views/livewire/productos/index.blade.php ENDPATH**/ ?>