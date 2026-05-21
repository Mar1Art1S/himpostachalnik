@props(['caption', 'fullWidth' => false])

<section {{ $attributes->merge(['class' => 'mb-12 overflow-x-hidden max-w-full']) }}>
    @isset($caption)
        <h2
            {{ $caption->attributes->class([
                'flex items-center justify-center text-3xl font-semibold text-gray-800
                    sf:text-2xl xs:text-base',
            ]) }}>
            {{ $caption }}
        </h2>
    @endisset

    <div @class(['container' => !$fullWidth, 'w-full' => $fullWidth])>
        {{ $slot }}
    </div>
</section>
