<x-layout>
    <main class="py-10">
        <section  class="bg-white max-w-[600px] mx-auto mt-4 p-10 border-2">
            <h1 class="font-bold text-3xl">Registre-se</h1>
            
            <p>Preencha as informações para se cadastrar</p>

            <form action="{{ route('auth.register') }}" method="POST" class="flex flex-col">
                
                @csrf
                
                <div class="flex flex-col gap-2 mb-4">
                    <label for="name">Nome</label>
                    <input name="name" placeholder="Seu Nome" type="text" class="bg-white p-2 border-2 @error('name')border-red-500 @enderror">
                    
                    @error('name')
                    <p class="text-sm text-red-500">
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 mb-4">
                    <label for="email">Email</label>
                    <input name="email" placeholder="your@email.com" type="email" class="bg-white p-2 border-2 @error('email')border-red-500 @enderror">
                    
                    @error('email')
                    <p class="text-sm text-red-500">
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 mb-2">
                    <label for="password">Senha</label>
                    <input name="password" placeholder="********" type="password" class="bg-white p-2 border-2 @error('password')border-red-500 @enderror">
                    @error('password')
                        <p class="text-sm text-red-500">
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 mb-2">
                    <label for="password_confirmation">Confirme a Senha</label>
                    <input name="password_confirmation" placeholder="********" type="password" class="bg-white p-2 border-2 @error('password')border-red-500 @enderror">
                    @error('password')
                        <p class="text-sm text-red-500">
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <button type="submit" class="bg-white p-2 border-2">Cadastrar</button>
            </form>

            <span>
                <p class="text-center mt-4">Ainda não tem conta? <a href="{{route('site.login')}}" class="underline hover:opacity-50 transition">Faça Login</a></p>
            </span>

        </section>
    </main>
</x-layout>