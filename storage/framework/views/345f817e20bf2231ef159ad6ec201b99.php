<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KLEJ_SENDVICH)->get();

name('prod_klej_sendvich');
?>



<?php $__env->startSection('title', __('Однокомпонентні поліуретанові клеї для сендвіч-панелей та клінкерних термопанелей – міцність та енергоефективність')); ?>
<?php $__env->startSection('meta_description', __('Однокомпонентні поліуретанові клеї забезпечують надійне та довговічне з`єднання сендвіч-панелей та
клінкерних термопанелей. Ідеальні для створення енергоефективних будівельних конструкцій, що відзначаються високою адгезією, стійкістю
до температурних змін та впливу вологи. Підходять для швидкого монтажу та забезпечують тривалий термін служби готових виробів.')); ?>
<?php $__env->startSection('meta_keywords', __('поліуретанові клеї для сендвіч-панелей, однокомпонентний клей для клінкерних термопанелей,
клей для монтажу сендвіч-панелей, поліуретановий клей для термопанелей, енергоефективний клей для будівництва,
клей для зовнішніх будівельних конструкцій, монтаж сендвіч-панелей поліуретановим клеєм, водостійкий клей для панелей')); ?>


<?php $__env->startSection('og_title', __('Однокомпонентні поліуретанові клеї для сендвіч-панелей та клінкерних термопанелей – міцність та енергоефективність')); ?>
<?php $__env->startSection('og_description', __('Однокомпонентні поліуретанові клеї забезпечують надійне та довговічне з`єднання сендвіч-панелей та
клінкерних термопанелей. Ідеальні для створення енергоефективних будівельних конструкцій, що відзначаються високою адгезією, стійкістю
до температурних змін та впливу вологи. Підходять для швидкого монтажу та забезпечують тривалий термін служби готових виробів.')); ?>

<?php $__env->startSection('og_image', Vite::asset('resources/img/mat_4/03.jpg')); ?>

<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalb1d9fc6528bf326cc6f29f8ffff7c0d4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb1d9fc6528bf326cc6f29f8ffff7c0d4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category-header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

         <?php $__env->slot('title', null, []); ?> 
            <?php echo e(__('mes.product_top_title_py_clinker')); ?>

         <?php $__env->endSlot(); ?>

         <?php $__env->slot('description', null, []); ?> 
            <?php echo e(__('mes.product_top_description_py_clinker')); ?>


         <?php $__env->endSlot(); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb1d9fc6528bf326cc6f29f8ffff7c0d4)): ?>
<?php $attributes = $__attributesOriginalb1d9fc6528bf326cc6f29f8ffff7c0d4; ?>
<?php unset($__attributesOriginalb1d9fc6528bf326cc6f29f8ffff7c0d4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb1d9fc6528bf326cc6f29f8ffff7c0d4)): ?>
<?php $component = $__componentOriginalb1d9fc6528bf326cc6f29f8ffff7c0d4; ?>
<?php unset($__componentOriginalb1d9fc6528bf326cc6f29f8ffff7c0d4); ?>
<?php endif; ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('search', []);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-1903326617-0', $__key);

$__html = app('livewire')->mount($__name, $__params, $__key, $__componentSlots);

echo $__html;

unset($__html);
unset($__key);
$__key = $__keyOuter;
unset($__keyOuter);
unset($__name);
unset($__params);
unset($__componentSlots);
unset($__split);
?>

    <?php if (isset($component)) { $__componentOriginal785c8021fd1a6e19eb80cad4b837cda0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

        <?php if (isset($component)) { $__componentOriginal04476a1deabb246773fcfeabd74b4e33 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal04476a1deabb246773fcfeabd74b4e33 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.decor.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('decor.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalf97e078afbabc819f84eaefd07face7e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf97e078afbabc819f84eaefd07face7e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.product','data' => ['product' => $product]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('product'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf97e078afbabc819f84eaefd07face7e)): ?>
<?php $attributes = $__attributesOriginalf97e078afbabc819f84eaefd07face7e; ?>
<?php unset($__attributesOriginalf97e078afbabc819f84eaefd07face7e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf97e078afbabc819f84eaefd07face7e)): ?>
<?php $component = $__componentOriginalf97e078afbabc819f84eaefd07face7e; ?>
<?php unset($__componentOriginalf97e078afbabc819f84eaefd07face7e); ?>
<?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal04476a1deabb246773fcfeabd74b4e33)): ?>
<?php $attributes = $__attributesOriginal04476a1deabb246773fcfeabd74b4e33; ?>
<?php unset($__attributesOriginal04476a1deabb246773fcfeabd74b4e33); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal04476a1deabb246773fcfeabd74b4e33)): ?>
<?php $component = $__componentOriginal04476a1deabb246773fcfeabd74b4e33; ?>
<?php unset($__componentOriginal04476a1deabb246773fcfeabd74b4e33); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0)): ?>
<?php $attributes = $__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0; ?>
<?php unset($__attributesOriginal785c8021fd1a6e19eb80cad4b837cda0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal785c8021fd1a6e19eb80cad4b837cda0)): ?>
<?php $component = $__componentOriginal785c8021fd1a6e19eb80cad4b837cda0; ?>
<?php unset($__componentOriginal785c8021fd1a6e19eb80cad4b837cda0); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Herd\himpost\resources\views\pages\product\poliuretanovi-klej-odnokomponentni-dlya-sendvich-panelej-ta-klinkernih-termopanelej.blade.php ENDPATH**/ ?>