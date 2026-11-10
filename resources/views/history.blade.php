<x-layout>
    <main class="py-10 px-4 max-w-5xl mx-auto min-h-[80vh] min-w-[90vw]">
        
        <x-navbar/>
        <div class="my-4">
            @foreach($avalibleYears as $year)
            <a href="{{ route('habits.history', $year) }}" class="habit-btn habit-shadow-lg p-2 inline-block {{ $selectedYear == $year ? 'bg-habit-orange' : 'bg-white'}}">
                {{$year}}
            </a>
            @endforeach
        </div>

        <div>
            @forelse($habits as $habit)
            <x-contribution :$habit :$selectedYear/>
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