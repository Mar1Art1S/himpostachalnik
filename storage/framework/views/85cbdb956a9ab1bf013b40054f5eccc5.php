<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'description']));

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

foreach (array_filter((['title', 'description']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="relative w-full bg-gray-50">
    <div class="flex flex-row py-8 mf:flex-col mf:justify-center mf:items-center">
        <h1 <?php echo e($title->attributes->class('pl-3 font-r900 text-gray-400 text-[54px] leading-[77px] text-left uppercase
            w-1/3 lf:text-[42px]
            rg:text-[38px] rg:leading-[60px] tg:w-2/5 fg:text-4xl fg:w-1/2 mf:w-full mf:text-center sm:text-2xl
            sm:leading-9')); ?>>
            <?php echo e($title); ?>


        </h1>
        <div <?php echo e($description->attributes->class('w-2/3 text-xl text-left leading-[33px] text-gray-400 px-2
            rg:text-base rg:leading-8 tg:text-sm tg:w-3/5 fg:w-1/2 mf:w-full sm:text-center
            sm:py-3 sm:leading-6')); ?>>
            <?php echo e($description); ?>


        </div>
    </div>
</div><?php /**PATH E:\Herd\himpost\resources\views/components/category-header.blade.php ENDPATH**/ ?>