<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['image', 'title', 'description', 'link']));

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

foreach (array_filter((['image', 'title', 'description', 'link']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php if (isset($component)) { $__componentOriginale47212f009b961ab7b80ccab07ecf7e7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale47212f009b961ab7b80ccab07ecf7e7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.decor.flip','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('decor.flip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    
    <div class="relative front xs:hidden w-full h-full">
        <img class="absolute inset-0 w-full h-full object-cover" src="<?php echo e($image); ?>" alt="" />
        <h3
            class="absolute inset-0 pl-5 pr-2 pt-5 leading-[40px] text-3xl font-r900 bg-[#0b2f7a]/55
         w-full h-full uppercase lf:text-2xl md:text-xl md:leading-[30px] sm:text-lg sm:leading-[24px] break-words overflow-hidden z-10">
            <?php echo e($title); ?>

        </h3>
    </div>
    
    <div class="back xs:hidden relative z-10 !bg-white p-6 flex h-full flex-col">
        <h4 class="pt-2 text-1.5xl leading-[28px] font-r700 text-center">
            <?php echo e($title); ?>

        </h4>
        <p
            class="mt-5 mb-4 text-base font-r400 leading-[22px] text-center text-[#666] line-clamp-6
        lf:mt-3 lf:text-sm lf:leading-[18px]">
            <?php echo e($description); ?>

        </p>
        <div class="mt-auto flex items-center justify-center pb-2">
            <a class="inline-block px-12 py-3 text-sm text-white rounded-2xl font-r700 bg-[#2453df] hover:bg-[#0b2f7a] focus:outline-none focus:ring active:text-white transition"
                href="<?php echo e($link); ?>">
                <?php echo e(__('other.other_next')); ?>

            </a>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale47212f009b961ab7b80ccab07ecf7e7)): ?>
<?php $attributes = $__attributesOriginale47212f009b961ab7b80ccab07ecf7e7; ?>
<?php unset($__attributesOriginale47212f009b961ab7b80ccab07ecf7e7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale47212f009b961ab7b80ccab07ecf7e7)): ?>
<?php $component = $__componentOriginale47212f009b961ab7b80ccab07ecf7e7; ?>
<?php unset($__componentOriginale47212f009b961ab7b80ccab07ecf7e7); ?>
<?php endif; ?>


<div
    class="mobile-category-card relative w-full max-w-[300px] aspect-square mx-auto mt-4 rounded-[30px] overflow-hidden shadow-sm border border-black/5 transition duration-300">
    <img class="absolute inset-0 w-full h-full object-cover" src="<?php echo e($image); ?>" alt="" />

    
    <div class="absolute inset-0 bg-[#0b2f7a]/55 z-0"></div>
    <h3
        class="absolute top-0 w-full text-lg leading-tight font-r900 uppercase text-center text-white p-3 break-words z-10">
        <?php echo e($title); ?>

    </h3>

    
    <p
        class="absolute top-[44%] -translate-y-1/2 px-4 text-white text-sm text-center line-clamp-3 leading-snug drop-shadow-md z-10">
        <?php echo e($description); ?>

    </p>

    
    <div class="absolute bottom-5 w-full flex justify-center z-10">
        <a class="rounded-2xl px-6 py-2 text-sm text-white font-r700 bg-[#2453df] hover:bg-[#0b2f7a] focus:outline-none focus:ring active:text-white transition"
            href="<?php echo e($link); ?>">
            <?php echo e(__('other.other_next')); ?>

        </a>
    </div>
</div>

<?php /**PATH E:\Herd\himpost\resources\views/components/category.blade.php ENDPATH**/ ?>