<x-layout title="Articles">
    <x-header/>
    <main class="py-16 lg:py-20">
        <div class="container">
            <h1 class="text-[26px] sm:text-xl xl:text-[48px] 2xl:text-2xl font-black">
                Статьи
            </h1>

            <x-category-section/>

            <div class="tasks grid gap-4 grid-cols-1 lg:grid-cols-2 gap-x-10 gap-y-14 xl:gap-y-20 mt-12 md:mt-20">

                @foreach($articles as $article)
                    <x-tasks-card :article="$article"/>
                @endforeach
            </div>

            {{ $articles->links('pagination/pagination') }}
        </div>
    </main>
    <x-footer/>
</x-layout>
