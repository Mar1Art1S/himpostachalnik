@extends('layouts.base')

@section('content')

<x-section class="container mx-auto">
    <div class="flex items-center justify-center mt-12">
        <x-slot:caption>
            {{ __('Р‘Р»РѕРі') }}
            </x-slot>
    </div>

    <section class="bg-white w-full mt-[40px]">

        <x-decor.card>

            @foreach($articles as $article)
            <div
                class="group flex flex-col items-start w-full max-w-[400px] h-[625px] sm:h-auto sm:pb-4 overflow-hidden rounded-[30px] bg-white shadow-sm border border-black/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
                <a href="{{ route('article.show', [$article->category->slug, $article->slug]) }}"
                    class="block w-full overflow-hidden">
                    <img class="object-cover w-full justify-center overflow-hidden h-[400px] sm:h-[300px] xs:h-[200px] transition duration-700 group-hover:scale-105"
                        src="{{ Storage::url($article->preview_image) }}" alt="">
                </a>
                <div class="flex flex-col flex-1 p-6 xs:p-4">
                    <h2 class="text-lg font-bold text-[#0b2f7a] sm:text-xl md:text-2xl">
                        <a href="{{ route('article.show', [$article->category->slug, $article->slug]) }}">
                            {{ $article->title }}
                        </a>
                    </h2>
                    <p class="mt-3 text-sm leading-6 text-gray-500">{{ $article->preview_text }}</p>
                    <p class="pt-4 mt-auto text-xs font-medium text-gray-500">
                        <span class="mx-1">{{ $article->formatted_published_at }}</span> В·
                        <span class="mx-1 text-gray-600">{{ $article->category->title }}</span>
                    </p>
                </div>
            </div>
            @endforeach


        </x-decor.card>
        <div class="flex justify-center mt-8">
            <div class="mt-4 ">
                {{ $articles->links('vendor.pagination.custom') }}
            </div>

        </div>

    </section>

</x-section>

@endsection
