<x-layout>
    <main class="py-10">
        <h1>Faça Login</h1>

        <section>
            <form action="{{ route('auth.login') }}" method="POST">
                @csrf
                @error('email')
                    <p class="text-xl text-red-500 mt-1">
                        {{$message}}
                    </p>
                @enderror
                <input name="email" placeholder="your@email.com" type="email" class="bg-white p-2 border-2">
                <input name="password" placeholder="********" type="password" class="bg-white p-2 border-2">
                <button type="submit" class="bg-white p-2 border-2">Entrar</button>
            </form>
        </section>
    </main>
</x-layout>