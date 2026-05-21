<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'image',
    'title',
    'description',
    'link',
    'video_one',
    'video_two',
    'video_three',
    'video_four',
    'video_five',
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
    'image',
    'title',
    'description',
    'link',
    'video_one',
    'video_two',
    'video_three',
    'video_four',
    'video_five',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php if (isset($component)) { $__componentOriginalb6a52979d1901b3b08f4dce2759dccd8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb6a52979d1901b3b08f4dce2759dccd8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.decor.flip-v','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('decor.flip-v'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="relative front xs:hidden">
        <img class="absolute" src="<?php echo e($image); ?>" alt="" />
        <h3
            class="absolute inset-0 pl-5 leading-[40px] text-3xl font-r900 bg-[#0b2f7a]/55 w-full h-full uppercase lf:text-2xl">
            <?php echo e($title); ?>

        </h3>
    </div>
    <div class="back xs:hidden !bg-white p-6 flex h-full flex-col">
        <h4 class="pt-2 text-1.5xl leading-[28px] font-r700 text-center lf:text-base lf:leading-[18px]">
            <?php echo e($title); ?>

        </h4>
        <p class="mt-5 mb-4 text-base font-r400 leading-[22px] text-center text-[#666] line-clamp-6 lf:mt-3 lf:text-sm lf:leading-[18px]">
            <?php echo e($description); ?>

        </p>
        <div class="mt-auto flex items-center justify-center pb-2">
            <a class="inline-block px-12 py-3 text-sm text-white rounded-2xl font-r700 bg-[#2453df] hover:bg-[#0b2f7a] focus:outline-none focus:ring active:text-white transition lf:px-8 lf:py-2"
                href="<?php echo e($link); ?>">
                <?php echo e(__('other.other_next')); ?>

            </a>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($video_one)): ?>
                <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false" class="relative z-50 w-auto h-auto">
                    <button @click="modalOpen=true"
                        class="inline-block w-40 px-12 py-3 m-2 text-sm text-white bg-[#2453df] border-2 border-[#2453df] rounded-2xl font-r700 transition hover:bg-white hover:text-[#2453df] hover:border-[#2453df] focus:outline-none focus:ring focus:ring-blue-200 active:text-[#2453df] disabled:opacity-75 lf:py-2 lf:px-4 lf:w-24">
                        <?php echo e(__('other.other_video')); ?></button>
                    <template x-teleport="body">
                        <div x-show="modalOpen"
                            class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
                            <div x-show="modalOpen" x-transition:enter="ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0" @click="modalOpen=false"
                                class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
                            <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen"
                                x-transition:enter="ease-out duration-300"
                                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave="ease-in duration-200"
                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                class="relative w-[min(92vw,960px)] max-h-[88vh] py-10 bg-white px-8 rounded-[30px] shadow-2xl overflow-y-auto">
                                <div class="flex items-center justify-between pb-2 ">


                                    <button @click="modalOpen=false"
                                        class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                        <svg class="block w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="relative flex flex-col w-full gap-6">
                                    <div class="pt-5 my-2">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($video_one)): ?>
                                            <iframe class="w-full aspect-video rounded-2xl"
                                                src="https://www.youtube.com/embed/<?php echo e($video_one); ?>"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

                                            </iframe>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                    <div class="my-1">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($video_two)): ?>
                                            <iframe class="w-full aspect-video rounded-2xl"
                                                src="https://www.youtube.com/embed/<?php echo e($video_two); ?>"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

                                            </iframe>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                    <div class="my-1">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($video_three)): ?>
                                            <iframe class="w-full aspect-video rounded-2xl"
                                                src="https://www.youtube.com/embed/<?php echo e($video_three); ?>"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

                                            </iframe>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                    <div class="my-1">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($video_four)): ?>
                                            <iframe class="w-full aspect-video rounded-2xl"
                                                src="https://www.youtube.com/embed/<?php echo e($video_four); ?>"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

                                            </iframe>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                    <div class="my-1">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($video_five)): ?>
                                            <iframe class="w-full aspect-video rounded-2xl"
                                                src="https://www.youtube.com/embed/<?php echo e($video_five); ?>"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

                                            </iframe>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb6a52979d1901b3b08f4dce2759dccd8)): ?>
<?php $attributes = $__attributesOriginalb6a52979d1901b3b08f4dce2759dccd8; ?>
<?php unset($__attributesOriginalb6a52979d1901b3b08f4dce2759dccd8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb6a52979d1901b3b08f4dce2759dccd8)): ?>
<?php $component = $__componentOriginalb6a52979d1901b3b08f4dce2759dccd8; ?>
<?php unset($__componentOriginalb6a52979d1901b3b08f4dce2759dccd8); ?>
<?php endif; ?>


<div
    class="mobile-category-card relative w-full max-w-[300px] aspect-square mx-auto mt-4 mb-4 rounded-[30px] overflow-hidden shadow-sm border border-black/5">
    <img class="absolute inset-0 w-full h-full object-cover" src="<?php echo e($image); ?>" alt="" />

    
    <h3
        class="absolute top-0 bg-[#0b2f7a]/70 w-full text-lg leading-tight font-r900 uppercase text-center text-white p-3 break-words">
        <?php echo e($title); ?>

    </h3>

    
    <div class="absolute bottom-4 w-full h-auto flex justify-center items-center flex-wrap">
        <a class="rounded-2xl px-8 py-2 m-2 text-sm text-white font-r700 bg-[#2453df] hover:bg-[#0b2f7a] focus:outline-none focus:ring active:text-white transition"
            href="<?php echo e($link); ?>">
            <?php echo e(__('other.other_next')); ?>

        </a>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($video_one)): ?>
            <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false" class="relative z-50 w-auto h-auto">
                <button @click="modalOpen=true"
                    class="inline-block w-40 px-12 py-3 m-2 text-sm text-white bg-[#2453df] border-2 border-[#2453df] rounded-2xl font-r700 transition hover:bg-white hover:text-[#2453df] hover:border-[#2453df] focus:outline-none focus:ring focus:ring-blue-200 active:text-[#2453df] disabled:opacity-75 lf:py-2 lf:px-4 lf:w-24">
                    <?php echo e(__('other.other_video')); ?></button>
                <template x-teleport="body">
                    <div x-show="modalOpen"
                        class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen" x-cloak>
                        <div x-show="modalOpen" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" @click="modalOpen=false"
                            class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
                        <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen"
                            x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            class="relative w-[min(92vw,960px)] max-h-[88vh] py-10 bg-white px-4 sm:px-8 rounded-[30px] shadow-2xl overflow-y-auto">
                            <div class="flex items-center justify-between pb-2 ">


                                <button @click="modalOpen=false"
                                    class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-8 ml-8 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                    <svg class="block w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="relative flex flex-col w-full gap-5">
                                <div class="pt-5 my-0">

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($video_one)): ?>
                                        <iframe class="w-full aspect-video rounded-2xl"
                                            src="https://www.youtube.com/embed/<?php echo e($video_one); ?>"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                                <div class="my-1">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($video_two)): ?>
                                        <iframe class="w-full aspect-video rounded-2xl"
                                            src="https://www.youtube.com/embed/<?php echo e($video_two); ?>"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                        </iframe>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                                <div class="my-1">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($video_three)): ?>
                                        <iframe class="w-full aspect-video rounded-2xl"
                                            src="https://www.youtube.com/embed/<?php echo e($video_three); ?>"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                        </iframe>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                                <div class="my-1">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($video_four)): ?>
                                        <iframe class="w-full aspect-video rounded-2xl"
                                            src="https://www.youtube.com/embed/<?php echo e($video_four); ?>"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                        </iframe>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                                <div class="my-1">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($video_five)): ?>
                                        <iframe class="w-full aspect-video rounded-2xl"
                                            src="https://www.youtube.com/embed/<?php echo e($video_five); ?>"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                        </iframe>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </template>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</div>
<?php /**PATH E:\Herd\himpost\resources\views/components/category-v.blade.php ENDPATH**/ ?>