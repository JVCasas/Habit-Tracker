<header class="bg-white border-b-2 flex items-center justify-between p-4">
    <div>
        Logo
    </div>

    <div>
        GitHub

        @auth
            <form action="{{ route('auth.logout') }}" method="POST">
                <button type="submit" class="bg-red-400 p-2 border-2">Logout</a>
            </form>
        @endauth

        @guest
            <a href="{{ route('site.login') }}" class="bg-gray-100 p-2 border-2">Login</a>
        @endguest

    </div>
</header>