<?php

use function Laravel\Folio\name;
use App\Models\Product;

name('py_serovine');
?>



<?php $__env->startSection('title', __('Сировина для поліуретану')); ?>
<?php $__env->startSection('meta_description',
    __('Широкий вибір сировини для виробництва поліуретану. Надійні компоненти для створення
    міцних,
    еластичних і довговічних поліуретанових виробів. Оптимальні рішення для будівництва, промисловості та інших галузей.')); ?>
<?php $__env->startSection('meta_keywords',
    __('сировина для поліуретану, компоненти для поліуретану, поліол та ізоціанат, поліуретанові
    матеріали,
    поліуретанова система, виробництво поліуретану, поліуретанові компоненти, хімічні речовини для поліуретану')); ?>


<?php $__env->startSection('og_title', __('Сировина для поліуретану')); ?>
<?php $__env->startSection('og_description',
    __('Широкий вибір сировини для виробництва поліуретану. Надійні компоненти для створення
    міцних,
    еластичних і довговічних поліуретанових виробів. Оптимальні рішення для будівництва, промисловості та інших галузей.')); ?>
<?php $__env->startSection('og_image', Vite::asset('resources/img/categories/002.jpg')); ?>

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
            <?php echo e(__('mes.subproduct_top_title_py')); ?>


         <?php $__env->endSlot(); ?>

         <?php $__env->slot('description', null, []); ?> 
            <?php echo e(__('mes.subproduct_top_description_py')); ?>


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

            <?php if (isset($component)) { $__componentOriginalba285bf8ecfe33d87f419e86f3217083 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalba285bf8ecfe33d87f419e86f3217083 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category-v','data' => ['title' => ' '.e(__('mes.category_v_title_py_injection_molding')).'','description' => ''.e(__('mes.category_v_description_py_injection_molding')).'','image' => ''.e(Vite::asset('resources/img/mat_2/01.png')).'','link' => ''.e(route('prod_pu_livarnij')).'','videoOne' => ''.e('hhkZFJQwQmc?si=lnbvXBkrxqyZfzXi').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category-v'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ' '.e(__('mes.category_v_title_py_injection_molding')).'','description' => ''.e(__('mes.category_v_description_py_injection_molding')).'','image' => ''.e(Vite::asset('resources/img/mat_2/01.png')).'','link' => ''.e(route('prod_pu_livarnij')).'','video_one' => ''.e('hhkZFJQwQmc?si=lnbvXBkrxqyZfzXi').'']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalba285bf8ecfe33d87f419e86f3217083)): ?>
<?php $attributes = $__attributesOriginalba285bf8ecfe33d87f419e86f3217083; ?>
<?php unset($__attributesOriginalba285bf8ecfe33d87f419e86f3217083); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalba285bf8ecfe33d87f419e86f3217083)): ?>
<?php $component = $__componentOriginalba285bf8ecfe33d87f419e86f3217083; ?>
<?php unset($__componentOriginalba285bf8ecfe33d87f419e86f3217083); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalba285bf8ecfe33d87f419e86f3217083 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalba285bf8ecfe33d87f419e86f3217083 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category-v','data' => ['title' => ' '.e(__('mes.category_v_title_py_leveling_floors')).'','description' => ''.e(__('mes.category_v_description_py_leveling_floors')).'','image' => ''.e(Vite::asset('resources/img/mat_2/02.png')).'','link' => ''.e(route('prod_pu_pidlogi')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category-v'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ' '.e(__('mes.category_v_title_py_leveling_floors')).'','description' => ''.e(__('mes.category_v_description_py_leveling_floors')).'','image' => ''.e(Vite::asset('resources/img/mat_2/02.png')).'','link' => ''.e(route('prod_pu_pidlogi')).'']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalba285bf8ecfe33d87f419e86f3217083)): ?>
<?php $attributes = $__attributesOriginalba285bf8ecfe33d87f419e86f3217083; ?>
<?php unset($__attributesOriginalba285bf8ecfe33d87f419e86f3217083); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalba285bf8ecfe33d87f419e86f3217083)): ?>
<?php $component = $__componentOriginalba285bf8ecfe33d87f419e86f3217083; ?>
<?php unset($__componentOriginalba285bf8ecfe33d87f419e86f3217083); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalba285bf8ecfe33d87f419e86f3217083 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalba285bf8ecfe33d87f419e86f3217083 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category-v','data' => ['title' => ' '.e(__('mes.category_v_title_py_elastomers')).'','description' => ''.e(__('mes.category_v_description_py_elastomers')).'','image' => ''.e(Vite::asset('resources/img/mat_2/03.png')).'','link' => ''.e(route('prod_pu_elastomiri')).'','videoOne' => ''.e('Gtbn_KSweLY?si=Z9yzD9QhkwdJbezB').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category-v'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ' '.e(__('mes.category_v_title_py_elastomers')).'','description' => ''.e(__('mes.category_v_description_py_elastomers')).'','image' => ''.e(Vite::asset('resources/img/mat_2/03.png')).'','link' => ''.e(route('prod_pu_elastomiri')).'','video_one' => ''.e('Gtbn_KSweLY?si=Z9yzD9QhkwdJbezB').'']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalba285bf8ecfe33d87f419e86f3217083)): ?>
<?php $attributes = $__attributesOriginalba285bf8ecfe33d87f419e86f3217083; ?>
<?php unset($__attributesOriginalba285bf8ecfe33d87f419e86f3217083); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalba285bf8ecfe33d87f419e86f3217083)): ?>
<?php $component = $__componentOriginalba285bf8ecfe33d87f419e86f3217083; ?>
<?php unset($__componentOriginalba285bf8ecfe33d87f419e86f3217083); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalba285bf8ecfe33d87f419e86f3217083 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalba285bf8ecfe33d87f419e86f3217083 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category-v','data' => ['title' => ' '.e(__('mes.category_v_title_py_paste')).'','description' => ''.e(__('mes.category_v_description_py_paste')).'','image' => ''.e(Vite::asset('resources/img/mat_2/04.png')).'','link' => ''.e(route('prod_pu_pasta')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category-v'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ' '.e(__('mes.category_v_title_py_paste')).'','description' => ''.e(__('mes.category_v_description_py_paste')).'','image' => ''.e(Vite::asset('resources/img/mat_2/04.png')).'','link' => ''.e(route('prod_pu_pasta')).'']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalba285bf8ecfe33d87f419e86f3217083)): ?>
<?php $attributes = $__attributesOriginalba285bf8ecfe33d87f419e86f3217083; ?>
<?php unset($__attributesOriginalba285bf8ecfe33d87f419e86f3217083); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalba285bf8ecfe33d87f419e86f3217083)): ?>
<?php $component = $__componentOriginalba285bf8ecfe33d87f419e86f3217083; ?>
<?php unset($__componentOriginalba285bf8ecfe33d87f419e86f3217083); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalba285bf8ecfe33d87f419e86f3217083 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalba285bf8ecfe33d87f419e86f3217083 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category-v','data' => ['title' => ' '.e(__('mes.category_v_title_py_pigment_pastes')).'','description' => ''.e(__('mes.category_v_description_py_pigment_pastes')).'','image' => ''.e(Vite::asset('resources/img/mat_2/05.png')).'','link' => ''.e(route('prod_pu_pigment')).'','videoOne' => ''.e('njCuAvQ_YNc?si=uEVedbemEHlwVsC0').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category-v'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ' '.e(__('mes.category_v_title_py_pigment_pastes')).'','description' => ''.e(__('mes.category_v_description_py_pigment_pastes')).'','image' => ''.e(Vite::asset('resources/img/mat_2/05.png')).'','link' => ''.e(route('prod_pu_pigment')).'','video_one' => ''.e('njCuAvQ_YNc?si=uEVedbemEHlwVsC0').'']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalba285bf8ecfe33d87f419e86f3217083)): ?>
<?php $attributes = $__attributesOriginalba285bf8ecfe33d87f419e86f3217083; ?>
<?php unset($__attributesOriginalba285bf8ecfe33d87f419e86f3217083); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalba285bf8ecfe33d87f419e86f3217083)): ?>
<?php $component = $__componentOriginalba285bf8ecfe33d87f419e86f3217083; ?>
<?php unset($__componentOriginalba285bf8ecfe33d87f419e86f3217083); ?>
<?php endif; ?>
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

<?php echo $__env->make('layouts.base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Herd\himpost\resources\views\pages\dlya-poliuretanu.blade.php ENDPATH**/ ?>