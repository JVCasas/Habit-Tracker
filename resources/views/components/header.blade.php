<header class="bg-white border-b-2 flex items-center justify-between p-4">
    <div class="flex gap-2 items-center">
        <a href="{{ route('habits.index') }}" class="habit-btn habit-shadow-lg px-2 py-1 bg-habit-orange">
            HT
        </a>
        <p class="text-lg">Habit Tracker</p>
    </div>

    <div>

        @auth
            <form action="{{ route('auth.logout') }}" method="POST">
                <button type="submit" class="p-2 habit-shadow-lg habit-btn">Logout</a>
            </form>
        @endauth

        @guest
            <div class="flex gap-2">
                <a href="{{ route('site.register') }}" class="p-2 habit-shadow-lg bg-white-500">Cadastrar</a>
                <a href="{{ route('site.login') }}" class="p-2 habit-shadow-lg bg-habit-orange">Login</a>
            </div>
        @endguest

    </div>
</header>