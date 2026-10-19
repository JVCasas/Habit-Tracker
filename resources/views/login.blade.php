<x-layout>
    <main class="py-10">
        <section  class="bg-white max-w-[600px] mx-auto mt-4 p-10 habit-shadow-lg">
            <h1 class="font-bold text-3xl">Faça Login</h1>
            
            <p>Insira seus dados para acessar</p>

            <form action="{{ route('auth.login') }}" method="POST" class="flex flex-col">
                
                @csrf
                
                <div class="flex flex-col gap-2 mb-4">
                    <label for="email">Email</label>
                    <input name="email" placeholder="your@email.com" type="email" class="bg-white p-2 habit-shadow @error('email')border-red-500 @enderror">
                    
                    @error('email')
                    <p class="text-sm text-red-500">
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 mb-2">
                    <label for="password">Senha</label>
                    <input name="password" placeholder="********" type="password" class="bg-white p-2 habit-shadow @error('password')border-red-500 @enderror">
                    @error('password')
                        <p class="text-sm text-red-500">
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <button type="submit" class="bg-habit-orange p-2 habit-shadow-lg habit-btn">Entrar</button>
            </form>

            <span>
                <p class="text-center mt-4">Ainda não tem conta? <a href="{{route('site.register')}}" class="underline hover:opacity-50 transition">Registre-se</a></p>
            </span>
            
        </section>
    </main>
</x-layout>