<x-layout>
    <main class="py-10 px-4 max-w-5xl mx-auto min-h-[80vh] min-w-[90vw]">
        
        <x-navbar/>
        
        <div class="flex flex-col gap-4 items-start">
            <h2 class="text-lg mt-8 mb-4 font-bold">{{ \Carbon\Carbon::now()->locale('pt_BR')->translatedFormat('l, d \d\e F') }}</h2>
            <ul class="flex flex-col gap-2 w-full">
                @forelse($habits as $habit)
                <li class="habit-shadow-lg p-2 bg-[#ffdaac]">
                    <form method="POST" action="{{ route('habits.toggle', $habit->id) }}" id="form-{{ $habit->id }}" class="flex items-center gap-2">
                        @csrf
                        <input type="checkbox" onchange="document.getElementById('form-{{ $habit->id }}').submit()" {{ $habit->wasCompletedToday() ? 'checked' : ''}} class="w-5 h-5" name="" id="">
                        <p class="font-bold text-lg">{{ $habit->name }}</p>
                    </form>
                </li>
                @empty
                <p>Você ainda não possui nenhum hábito.</p>
                <a href="" class="bg-white p-2 border-2">Registre um novo hábito.</a>
                @endforelse    
            </ul>
            <a href="{{ route('habits.create') }}" class="habit-btn habit-shadow-lg bg-habit-orange font-bold p-2">
                + Hábito
            </a>
        </div>
    </main>
</x-layout>