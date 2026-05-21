@extends('layouts.base')

@section('content')

<x-section class="container mx-auto">

    <div class="max-w-4xl p-6 xs:p-4 mx-auto mt-3 bg-white rounded-[30px] shadow-sm border border-black/5">
        <!-- Заголовок -->
        <h1 class="mb-4 text-3xl sm:text-2xl xs:text-xl font-bold">{{ $article->title }}</h1>

        <!-- Теги -->
        <div class="flex flex-wrap gap-2 mb-4">
            @foreach($article->tags as $tag)
            <span class="px-3 py-1 text-sm text-blue-500 bg-blue-100 rounded-full">{{ $tag }}</span>
            @endforeach
        </div>

        <!-- Категорія -->
        <div class="mb-4 text-sm text-gray-500">
            <span>Категорія: </span><a href="#" class="text-blue-500 hover:underline">{{ $article->category->name }}</a>
        </div>

        <!-- Зображення -->
        @if($article->detail_image)
        <div class="flex items-center justify-center mb-6 w-">
            <img src="{{ Storage::url($article->preview_image) }}" alt="{{ $article->title }}"
                class="w-full h-auto rounded-[30px] shadow-sm">
        </div>
        @endif

        <!-- Текст -->
        <div class="mb-6 text-lg leading-relaxed text-gray-700">
            {!! clean($article->detail_text) !!}
        </div>

        <!-- Дата публікації -->
        <div class="text-sm text-gray-400">
            Опубліковано: {{ $article->published_at->format('d M Y') }}
        </div>
    </div>

</x-section>

@endsection
