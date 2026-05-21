<div class="w-full h-auto py-2 px-2 mx-auto ">
    <label for="default-search" class="text-sm text-gray-100 sr-only font-r500 max-w-md"><?php echo e(__('search.search_search')); ?></label>

    <div class="relative max-w-[600px] w-auto mx-auto ">
        <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['type' => 'search','icon' => 'search','id' => 'default-search','placeholder' => ''.e(__('search.search_placeholder')).'','wire:model.live' => 'search']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'search','icon' => 'search','id' => 'default-search','placeholder' => ''.e(__('search.search_placeholder')).'','wire:model.live' => 'search']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
    </div>

    <div class="mt-4 ">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($products)): ?>
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

                        <div class=" xs:hidden front w-full h-full">
                            <h2 class=" p-3 mb-5 text-2xl text-center text-white uppercase font-r700 lf:text-1.5xl lf:mb-1 lf:p-1">
                                <?php echo e($product->getTranslation('name', app()->getLocale())); ?>

                            </h2>
                            <div>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $product->getTranslation('options', app()->getLocale()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $options): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                    <div class="flex flex-row items-center w-full px-4 mt-4 lf:mt-2">
                                        <div class="justify-start w-3/4 text-sm text-white text-start lf:leading-[15px] lf:w-2/3"><?php echo e($options['name']); ?></div>
                                        <div class="justify-end w-1/4 text-sm font-bold text-white text-end flex-nowrap lf:text-xs lf:w-1/3"><?php echo e($options['parameter']); ?></div>
                                    </div>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                            </div>
                        </div>
                        <div class="back xs:hidden">
                            <h4 class="mt-3 text-2xl font-semibold leading-10 text-center text-white uppercase">
                                <?php echo e($product->getTranslation('name', app()->getLocale())); ?>

                            </h4>
                            <div class="flex flex-col items-center justify-center mt-5 space-y-3">
                                <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['title' => ''.e(__('product.prod_commodity')).'','product' => $product]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('product.prod_commodity')).'','product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                                     <?php $__env->slot('button', null, []); ?> 

                                        <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['@click' => 'modalOpen=true','class' => 'w-40 lf:py-2 lf:px-4 lf:w-24']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'modalOpen=true','class' => 'w-40 lf:py-2 lf:px-4 lf:w-24']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
<?php echo e(__('other.other_buy')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
                                     <?php $__env->endSlot(); ?>
                                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('order', ['product' => ''.e($product['name']).'']);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-842087593-0', $__key);

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

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->tds_content[app()->getLocale()] ?? ''): ?>
                                    <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false"
                                         class="relative z-50 w-auto h-auto">
                                        <button @click="modalOpen=true"
                                                class="inline-block w-40 px-12 py-3 m-2 text-sm text-white bg-blue-800 border border-white rounded
                            font-r500 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white disabled:opacity-75
                            lf:py-2 lf:px-4 lf:w-24">
                                            <?php echo e(__('other.other_tds')); ?></button>
                                        <template x-teleport="body">
                                            <div x-show="modalOpen"
                                                 class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen"
                                                 x-cloak>
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
                                                     class="relative w-full max-w-[860px] h-[700px] py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg overflow-y-auto overflow-auto">
                                                    <div class="flex items-center justify-between pb-2 ">
                                                        <h3 class="text-lg font-semibold"> <?php echo e($product->tds_title); ?></h3>
                                                        <button @click="modalOpen=false"
                                                                class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      d="M6 18L18 6M6 6l12 12"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="relative w-auto">
                                                        <div class="">
                                                            <?php echo clean($product->tds_content[app()->getLocale()] ?? ''); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->tehcarta_content[app()->getLocale()] ?? ''): ?>

                                    <div x-data="{ modalOpen: false }"
                                         @keydown.escape.window="modalOpen = false"
                                         class="relative z-50 w-auto h-auto">

                                        <!-- Кнопка відкриття модального вікна -->
                                        <button @click="modalOpen = true"
                                                class="inline-block w-[100px] text-sm text-white text-center font-r500
                       hover:bg-transparent hover:text-white focus:outline-none focus:ring
                       active:text-white disabled:opacity-75">
                                            <?php echo e(__('other.other_technological_map')); ?>

                                        </button>

                                        <!-- Телепорт модального вікна -->
                                        <template x-teleport="body">
                                            <div x-show="modalOpen"
                                                 x-cloak
                                                 class="fixed inset-0 z-[99] flex items-center justify-center w-screen h-screen">

                                                <!-- Фон модального вікна -->
                                                <div @click="modalOpen = false"
                                                     x-show="modalOpen"
                                                     x-transition:enter="ease-out duration-300"
                                                     x-transition:enter-start="opacity-0"
                                                     x-transition:enter-end="opacity-100"
                                                     x-transition:leave="ease-in duration-300"
                                                     x-transition:leave-start="opacity-100"
                                                     x-transition:leave-end="opacity-0"
                                                     class="absolute inset-0 w-full h-full bg-black bg-opacity-40">
                                                </div>

                                                <!-- Контент модального вікна -->
                                                <div x-show="modalOpen"
                                                     x-trap.inert.noscroll="modalOpen"
                                                     x-transition:enter="ease-out duration-300"
                                                     x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                     x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                     x-transition:leave="ease-in duration-200"
                                                     x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                     x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                     class="relative w-full max-w-[860px] h-[700px] py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg overflow-y-auto">

                                                    <!-- Кнопка закриття -->
                                                    <button @click="modalOpen = false"
                                                            class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5
                                   text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  d="M6 18L18 6M6 6l12 12"/>
                                                        </svg>
                                                    </button>

                                                    <!-- Текстовий контент -->
                                                    <div class="relative w-auto">
                                                        <div>
                                                            <?php echo clean($product->tehcarta_content[app()->getLocale()] ?? ''); ?>

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
<?php if (isset($__attributesOriginale47212f009b961ab7b80ccab07ecf7e7)): ?>
<?php $attributes = $__attributesOriginale47212f009b961ab7b80ccab07ecf7e7; ?>
<?php unset($__attributesOriginale47212f009b961ab7b80ccab07ecf7e7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale47212f009b961ab7b80ccab07ecf7e7)): ?>
<?php $component = $__componentOriginale47212f009b961ab7b80ccab07ecf7e7; ?>
<?php unset($__componentOriginale47212f009b961ab7b80ccab07ecf7e7); ?>
<?php endif; ?>

                    <div class="hidden xs:block">
                        <div class="xs:w-[min(350px,calc(100vw-2rem))] xs:h-auto xs:bg-slate-600">
                            <h2 class="hidden xs:block xs:p-3 xs:mb-5 xs:text-xl xs:text-center xs:text-white xs:uppercase xs:font-r700">
                                <?php echo e($product->getTranslation('name', app()->getLocale())); ?>

                            </h2>
                            <div>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $product->getTranslation('options', app()->getLocale()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $options): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                    <div class="xs:flex xs:flex-row xs:items-center xs:w-full xs:px-4 xs:mt-2">
                                        <div class="w-3/4 text-sm text-white text-start lf:leading-[15px]"><?php echo e($options['name']); ?></div>
                                        <div class="w-1/4 text-sm font-bold text-white xs:text-xs text-end flex-nowrap"><?php echo e($options['parameter']); ?></div>
                                    </div>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                            </div>


                            <div class="hidden xs:flex xs:flex-col xs:items-center xs:justify-center xs:mt-5 xs:space-y-3">
                                <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['title' => ''.e(__('product.prod_commodity')).'','product' => $product]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('product.prod_commodity')).'','product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                                     <?php $__env->slot('button', null, []); ?> 

                                        <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['@click' => 'modalOpen=true','class' => 'w-40 lf:py-2 lf:px-4 lf:w-24']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'modalOpen=true','class' => 'w-40 lf:py-2 lf:px-4 lf:w-24']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
<?php echo e(__('other.other_buy')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
                                     <?php $__env->endSlot(); ?>
                                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('order', ['product' => ''.e($product['name']).'']);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-842087593-1', $__key);

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
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>


                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->tds_content[app()->getLocale()] ?? ''): ?>
                                    <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false"
                                         class="relative z-50 w-auto h-auto">
                                        <button @click="modalOpen=true"
                                                class="inline-block w-40 px-12 py-3 m-2 text-sm text-white bg-blue-800 border border-white rounded font-r500 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white disabled:opacity-75 lf:py-2 lf:px-4 lf:w-24">
                                            <?php echo e(__('other.other_tds')); ?>

                                        </button>
                                        <template x-teleport="body">
                                            <div x-show="modalOpen"
                                                 class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen"
                                                 x-cloak>
                                                <div x-show="modalOpen" @click="modalOpen=false"
                                                     class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
                                                <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen"
                                                     class="relative w-full max-w-[860px] h-[500px] py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg overflow-y-auto xs:overflow-auto xs:p-1">
                                                    <div class="flex items-center justify-between pb-2">
                                                        <h3 class="text-sm font-semibold"><?php echo e($product->tds_title); ?></h3>
                                                        <button @click="modalOpen=false"
                                                                class="absolute top-0 right-0 w-8 h-8 mt-5 mr-5 text-gray-600 hover:text-gray-800 hover:bg-gray-50">
                                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      d="M6 18L18 6M6 6l12 12"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="relative">
                                                        <div><?php echo clean($product->tds_content[app()->getLocale()] ?? ''); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->tehcarta_content[app()->getLocale()] ?? ''): ?>
                                    <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false"
                                         class="relative z-50 w-auto h-auto">
                                        <button @click="modalOpen=true"
                                                class="inline-block w-[100px] text-sm text-white font-r500 hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-white disabled:opacity-75">
                                            <?php echo e(__('other.other_technological_map')); ?>

                                        </button>
                                        <template x-teleport="body">
                                            <div x-show="modalOpen"
                                                 class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen"
                                                 x-cloak>
                                                <div x-show="modalOpen" @click="modalOpen=false"
                                                     class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
                                                <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen"
                                                     class="relative w-full max-w-[860px] h-[700px] py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg overflow-y-auto">
                                                    <button @click="modalOpen=false"
                                                            class="absolute top-0 right-0 w-8 h-8 mt-5 mr-5 text-gray-600 hover:text-gray-800 hover:bg-gray-50">
                                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke-width="1.5" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                                        </svg>
                                                    </button>
                                                    <div class="relative">
                                                        <div><?php echo clean($product->tehcarta_content[app()->getLocale()] ?? ''); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                        </div>
                    </div>
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
        <?php else: ?>
            <p>No products found.</p>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</div>
<?php /**PATH E:\Herd\himpost\resources\views/livewire/search.blade.php ENDPATH**/ ?>