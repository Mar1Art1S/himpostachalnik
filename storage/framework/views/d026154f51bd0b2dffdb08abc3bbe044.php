<?php

use function Laravel\Folio\name;
use App\Models\Product;

name('py_klei');
?>



<?php $__env->startSection('title', __('Поліуретанові клеї – надійне рішення для міцного з`єднання матеріалів')); ?>
<?php $__env->startSection('meta_description',
    __('Високоякісні поліуретанові клеї для міцного та довговічного з`єднання різних матеріалів.
    Ідеально підходять для будівництва, меблів, автоіндустрії та інших сфер. Стійкість до вологи, температури та механічних
    навантажень.')); ?>
<?php $__env->startSection('meta_keywords',
    __('поліуретановий клей, клей для міцного з`єднання, поліуретановий клей для будівництва,
    поліуретановий клей для меблів, стійкі поліуретанові клеї, клей для з`єднання матеріалів, водостійкі поліуретанові
    клеї')); ?>


<?php $__env->startSection('og_title', __('Поліуретанові клеї – надійне рішення для міцного з`єднання матеріалів')); ?>
<?php $__env->startSection('og_description',
    __('Високоякісні поліуретанові клеї для міцного та довговічного з`єднання різних матеріалів.
    Ідеально підходять для будівництва, меблів, автоіндустрії та інших сфер. Стійкість до вологи, температури та механічних
    навантажень.')); ?>
<?php $__env->startSection('og_image', Vite::asset('resources/img/categories/004.jpg')); ?>

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
            <?php echo e(__('mes.subproduct_top_title_py_glue')); ?>


         <?php $__env->endSlot(); ?>

         <?php $__env->slot('description', null, []); ?> 
            <?php echo e(__('mes.subproduct_top_description_py_glue')); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category-v','data' => ['title' => ' '.e(__('mes.category_v_title_glue_epdm')).'','description' => ''.e(__('mes.category_v_description_glue_epdm')).'','image' => ''.e(Vite::asset('resources/img/mat_4/01.png')).'','link' => ''.e(route('prod_klej_krihti')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category-v'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ' '.e(__('mes.category_v_title_glue_epdm')).'','description' => ''.e(__('mes.category_v_description_glue_epdm')).'','image' => ''.e(Vite::asset('resources/img/mat_4/01.png')).'','link' => ''.e(route('prod_klej_krihti')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category-v','data' => ['title' => ' '.e(__('mes.category_v_title_glue_d4_wood')).'','description' => ''.e(__('mes.category_v_description_glue_d4_wood')).'','image' => ''.e(Vite::asset('resources/img/mat_4/02.png')).'','link' => ''.e(route('prod_klej_dereva_d4')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category-v'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ' '.e(__('mes.category_v_title_glue_d4_wood')).'','description' => ''.e(__('mes.category_v_description_glue_d4_wood')).'','image' => ''.e(Vite::asset('resources/img/mat_4/02.png')).'','link' => ''.e(route('prod_klej_dereva_d4')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category-v','data' => ['title' => ' '.e(__('mes.category_v_title_glue_clinker_thermal_panels')).'','description' => ''.e(__('mes.category_v_description_glue_clinker_thermal_panels')).'','image' => ''.e(Vite::asset('resources/img/mat_4/03.png')).'','link' => ''.e(route('prod_klej_sendvich')).'','videoOne' => ''.e('mgQP2OUBN7U?si=KR6H0Is7s1OHX-lr').'','videoTwo' => ''.e('m1UBoCoopcE?si=q-Pe7I8TNGDuj7_r').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category-v'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ' '.e(__('mes.category_v_title_glue_clinker_thermal_panels')).'','description' => ''.e(__('mes.category_v_description_glue_clinker_thermal_panels')).'','image' => ''.e(Vite::asset('resources/img/mat_4/03.png')).'','link' => ''.e(route('prod_klej_sendvich')).'','video_one' => ''.e('mgQP2OUBN7U?si=KR6H0Is7s1OHX-lr').'','video_two' => ''.e('m1UBoCoopcE?si=q-Pe7I8TNGDuj7_r').'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category-v','data' => ['title' => ' '.e(__('mes.category_v_title_glue_foam_textiles')).'','description' => ''.e(__('mes.category_v_description_glue_foam_textiles')).'','image' => ''.e(Vite::asset('resources/img/mat_4/04.png')).'','link' => ''.e(route('prod_klej_tekstilyu')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category-v'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ' '.e(__('mes.category_v_title_glue_foam_textiles')).'','description' => ''.e(__('mes.category_v_description_glue_foam_textiles')).'','image' => ''.e(Vite::asset('resources/img/mat_4/04.png')).'','link' => ''.e(route('prod_klej_tekstilyu')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category-v','data' => ['title' => ' '.e(__('mes.category_v_title_glue_bulk_materials')).'','description' => ''.e(__('mes.category_v_description_glue_bulk_materials')).'','image' => ''.e(Vite::asset('resources/img/mat_4/05.png')).'','link' => ''.e(route('prod_klej_budivelnih')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category-v'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ' '.e(__('mes.category_v_title_glue_bulk_materials')).'','description' => ''.e(__('mes.category_v_description_glue_bulk_materials')).'','image' => ''.e(Vite::asset('resources/img/mat_4/05.png')).'','link' => ''.e(route('prod_klej_budivelnih')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category-v','data' => ['title' => ' '.e(__('mes.category_v_title_glue_parquet')).'','description' => ''.e(__('mes.category_v_description_glue_parquet')).'','image' => ''.e(Vite::asset('resources/img/mat_4/06.png')).'','link' => ''.e(route('prod_klej_parketu')).'','videoOne' => ''.e('oFXAYIwb2lw?si=o4fNi96jVLNELfkt').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category-v'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ' '.e(__('mes.category_v_title_glue_parquet')).'','description' => ''.e(__('mes.category_v_description_glue_parquet')).'','image' => ''.e(Vite::asset('resources/img/mat_4/06.png')).'','link' => ''.e(route('prod_klej_parketu')).'','video_one' => ''.e('oFXAYIwb2lw?si=o4fNi96jVLNELfkt').'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category-v','data' => ['title' => ' '.e(__('mes.category_v_title_glue_artificial_grass')).'','description' => ''.e(__('mes.category_v_description_glue_artificial_grass')).'','image' => ''.e(Vite::asset('resources/img/mat_4/07.png')).'','link' => ''.e(route('prod_klej_travi')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category-v'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ' '.e(__('mes.category_v_title_glue_artificial_grass')).'','description' => ''.e(__('mes.category_v_description_glue_artificial_grass')).'','image' => ''.e(Vite::asset('resources/img/mat_4/07.png')).'','link' => ''.e(route('prod_klej_travi')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category-v','data' => ['title' => ' '.e(__('mes.category_v_title_glue_paper_cardboard')).'','description' => ''.e(__('mes.category_v_description_glue_paper_cardboard')).'','image' => ''.e(Vite::asset('resources/img/mat_4/08.png')).'','link' => ''.e(route('prod_klej_kartonu')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category-v'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ' '.e(__('mes.category_v_title_glue_paper_cardboard')).'','description' => ''.e(__('mes.category_v_description_glue_paper_cardboard')).'','image' => ''.e(Vite::asset('resources/img/mat_4/08.png')).'','link' => ''.e(route('prod_klej_kartonu')).'']); ?>
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

<?php echo $__env->make('layouts.base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Herd\himpost\resources\views\pages\poliuretanovi-klei.blade.php ENDPATH**/ ?>