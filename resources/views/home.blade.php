<x-layout title="Home">
    <x-header/>
    <main class="py-16 lg:py-20">

        <div class="container">
            <h1 class="text-[26px] sm:text-xl xl:text-[48px] 2xl:text-2xl font-black">
                Лучшие статьи
            </h1>
            <div class="tasks grid gap-4 grid-cols-1 lg:grid-cols-2 gap-x-10 gap-y-14 xl:gap-y-20 mt-12 md:mt-20">
                <x-tasks-card/>
                <x-tasks-card/>
                <x-tasks-card/>
                <x-tasks-card/>
            </div>
        </div>
    </main>
    <x-footer/>
</x-layout>

