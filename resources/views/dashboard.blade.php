<x-layout>
    <main class="py-10 px-4 max-w-5xl mx-auto min-h-[calc(100vh-160px)]">
        
        <x-navbar/>
        
        <div>
            <h2 class="text-lg mt-8 mb-4">{{ date('d/m/Y') }}</h2>
            <ul class="flex flex-col gap-2">
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
        </div>
    </main>
</x-layout>