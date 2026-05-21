<?php

use function Laravel\Folio\name;
use App\Models\Product;

$products=Product::where('category',App\Enums\CategoryEnum::PROD_KILIMA)->get();

name('py_kilima');
?>



<?php $__env->startSection('title', __('Сировина для поліуретанового кам`яного килима – основа міцності та довговічності покриття')); ?>
<?php $__env->startSection('meta_description', __('Надійна сировина для створення поліуретанового кам`яного килима. Високоякісні полімери та
наповнювачі для довговічних і стійких покриттів. Ідеальне рішення для внутрішніх і зовнішніх робіт.')); ?>
<?php $__env->startSection('meta_keywords', __('сировина для поліуретанового кам`яного килима, полімери для кам`яного килима, поліуретановий кам`яний килим,
наповнювачі для кам`яного покриття, компоненти для поліуретанового килима, довговічні полімери для покриттів, поліуретанове покриття для підлоги')); ?>


<?php $__env->startSection('og_title', __('Сировина для поліуретанового кам`яного килима – основа міцності та довговічності покриття')); ?>
<?php $__env->startSection('og_description', __('Надійна сировина для створення поліуретанового кам`яного килима. Високоякісні полімери та
наповнювачі для довговічних і стійких покриттів. Ідеальне рішення для внутрішніх і зовнішніх робіт.')); ?>
<?php $__env->startSection('og_image', Vite::asset('resources/img/categories/003.jpg')); ?>
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
            <?php echo e(__('mes.subproduct_top_title_py_stone_carpet')); ?>


         <?php $__env->endSlot(); ?>

         <?php $__env->slot('description', null, []); ?> 
            <?php echo e(__('mes.subproduct_top_description_py_stone_carpet')); ?>

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

<?php echo $__env->make('layouts.base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Herd\himpost\resources\views\pages\dlya-poliuretanovogo-kamyanogo-kilima.blade.php ENDPATH**/ ?>