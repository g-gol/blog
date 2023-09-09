<x-layout title="Title">
    <x-header/>
    <main class="py-16 lg:py-20">
        <div class="container">
            <img class="w-full rounded-xl my-8" src="images/article_demo.jpg" alt="">

            <div class="prose prose-lg min-w-full prose-img:rounded-xl prose-invert">
                <h1 class="text-[26px] sm:text-xl xl:text-[48px] 2xl:text-2xl font-black">
                    Заголовок статьи
                </h1>
                <div class="flex flex-wrap gap-3 mt-7">
                    <a href="#"
                       class="grow xs:grow-0 py-2 px-4 rounded-[32px] bg-[#2A2B4E] text-white no-underline text-xxs sm:text-xs font-semibold whitespace-nowrap">
                        Категория 1
                    </a>
                </div>

                <div class="mt-4 break-words">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cumque dolore eveniet
                        exercitationem fugit laborum non nostrum, officia reiciendis repellat sapiente sequi, velit
                        voluptatem! Alias dolor officiis pariatur perspiciatis quod.
                    </p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cumque dolore eveniet
                        exercitationem fugit laborum non nostrum, officia reiciendis repellat sapiente sequi, velit
                        voluptatem! Alias dolor officiis pariatur perspiciatis quod.
                    </p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cumque dolore eveniet
                        exercitationem fugit laborum non nostrum, officia reiciendis repellat sapiente sequi, velit
                        voluptatem! Alias dolor officiis pariatur perspiciatis quod.
                    </p>
                </div>
            </div>
        </div>
    </main>
    <x-footer/>
</x-layout>
