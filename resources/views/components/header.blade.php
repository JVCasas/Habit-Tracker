<header class="bg-white border-b-2">
    <div class="max-w-7xl mx-auto flex items-center justify-between p-4">
        <div class="flex gap-2 items-center">
            <a href="{{ route('habits.index') }}" class="habit-btn habit-shadow-lg px-2 py-1 bg-habit-orange">
                HT
            </a>
            <p class="text-lg">Habit Tracker</p>
        </div>
        <div class="flex gap-2">
            @auth
                <form action="{{ route('auth.logout') }}" method="POST">
                    <button type="submit" class="p-2 habit-shadow-lg habit-btn">Logout</button>
                </form>
            @endauth
            @guest
            <a href="{{ route('site.register') }}" class="p-2 habit-shadow-lg bg-white-500">Cadastrar</a>
            <a href="{{ route('site.login') }}" class="p-2 habit-shadow-lg bg-habit-orange">Login</a>            
            @endguest
            <a href="https://github.com/JVCasas/Habit-Tracker" target="_blank" class="habit-btn habit-shadow-lg p-2">
                <x-icons.github/>
            </a>
        </div>
    </div>
</header>