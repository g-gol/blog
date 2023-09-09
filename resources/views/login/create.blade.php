<x-layout>
    <main class="bg-darkblue text-white md:min-h-screen md:flex md:items-center md:justify-center py-16 lg:py-20">
        <div class="container">
            <div class="text-center">
                <a rel="home" href="index.html">
                    <img alt="CutCode"
                         class="w-[148px] md:w-[201px] h-[36px] md:h-[50px] inline-block"
                         src="images/nav/logo.svg"
                    >
                </a>
            </div>
            <div class="max-w-[640px] mt-12 mx-auto p-6 xs:p-8 md:p-12 2xl:p-16 rounded-[20px] bg-purple">
                <h1 class="mb-5 text-lg font-semibold">Вход в аккаунт</h1>
                <form class="space-y-3">

                    <x-form.input type="email" autocomplete="email" name="E-mail"/>
                    <x-form.input type="password" autocoplete="current-password" name="Пароль"/>

                    <div class="mt-3 text-pink text-xxs xs:text-xs hidden">These credentials do not match our records.</div>

                    <button class="w-full btn btn-pink" type="submit">Войти</button>
                </form>

                <div class="space-y-3 mt-5">
                    <div class="text-xxs md:text-xs">
                        <a class="text-white hover:text-white/70 font-bold"
                           href="forgot.html"
                        >
                            Забыли пароль?
                        </a>
                    </div>
                    <div class="text-xxs md:text-xs">
                        <a class="text-white hover:text-white/70 font-bold"
                           href="register.html">
                            Регистрация
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
