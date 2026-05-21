<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['caption', 'fullWidth' => false]));

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

foreach (array_filter((['caption', 'fullWidth' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<section <?php echo e($attributes->merge(['class' => 'mb-12 overflow-x-hidden max-w-full'])); ?>>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($caption)): ?>
        <h2
            <?php echo e($caption->attributes->class([
                'flex items-center justify-center text-3xl font-semibold text-gray-800
                    sf:text-2xl xs:text-base',
            ])); ?>>
            <?php echo e($caption); ?>

        </h2>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['container' => !$fullWidth, 'w-full' => $fullWidth]); ?>">
        <?php echo e($slot); ?>

    </div>
</section>
<?php /**PATH E:\Herd\himpost\resources\views/components/section.blade.php ENDPATH**/ ?>