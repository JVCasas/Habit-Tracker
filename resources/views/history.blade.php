<x-layout>
    <main class="py-10 px-4 max-w-5xl mx-auto min-h-[calc(100vh-160px)]">
        
        <x-navbar/>

        @session('success')
        <div class="flex">
            <p class="bg-green-100 border border-green-400 text-green-700 mb-4 p-3">
                {{session('success')}}
            </p>
        </div>
        @endsession
        <div>
            @forelse($habits as $habit)
            <x-contribution :habit="$habit" :year="$selectedYear"/>
            @empty
            <div>
                <p class="text-black">
                    Nenhum hábito para exibir histórico.
                </p>
                <a href="{{ route(habits.create) }}" class="underline">
                    Crie um novo hábito
                </a>
            </div>
            @endforelse
        </div>
    </main>
</x-layout>