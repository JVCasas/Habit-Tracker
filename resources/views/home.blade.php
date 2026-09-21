<x-layout>
    <main class="py-10">
        <h1>Teste de Slot</h1>
        @auth()
            <p>
                Bem Vindo(a), {{ auth()->user()->name }}!
            </p>    
        @endauth
    </main>
</x-layout>