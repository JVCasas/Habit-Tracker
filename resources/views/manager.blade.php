<x-layout>
    <main class="py-10 px-4 min-h-[calc(100vh-160px)]">
        
        <x-navbar/>

        @session('success')
        <div class="flex">
            <p class="bg-green-100 border border-green-400 text-green-700 mb-4 p-3">
                {{session('success')}}
            </p>
        </div>
        @endsession
        <div>
            <h2 class="text-lg mt-8 mb-4">Gerenciar Hábitos</h2>
            <ul class="flex flex-col gap-2">
                @forelse($habits as $habit)
                <li class="flex gap-2 items-center">
                    <div class="habit-shadow-lg p-2 bg-[#ffdaac]">
                        <p class="font-bold text-lg">{{ $habit->name }}</p>
                    </div>
                    <form action="{{ route('habits.destroy', $habit) }}" method="POST" class="flex gap-2">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('habits.edit', $habit)}}" class="bg-white p2 hover:opacity-50 habit-btn habit-shadow">
                            <x-icons.pencil/>
                        </a>
                        <button type="submit" class="bg-red-500 text-white p2 hover:opacity-50 habit-btn habit-shadow">
                            <x-icons.trash/>
                        </button>
                    </form>
                </li>
                @empty
                <p>Você ainda não possui nenhum hábito.</p>
                <a href="" class="bg-white p-2 border-2">Registre um novo hábito.</a>
                @endforelse
            </ul>
            <a href="{{route('habits.create')}}" class="p-2 habit-btn bg-habit-orange habit-shadow-lg">+ Adicionar</a>
        </div>
    </main>
</x-layout>