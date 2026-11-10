<x-layout>
    <main class="py-10 px-4 mx-auto max-w-5xl min-h-[80vh] min-w-[90vw]">
        
        <x-navbar/>

        <div>
            <h2 class="text-lg mt-8 mb-4">Gerenciar Hábitos</h2>
            <ul class="flex flex-col gap-2 mb-5">
                @forelse($habits as $habit)
                <li class="flex gap-2 items-center">
                    <div class="habit-shadow-lg p-2 bg-[#ffdaac] w-full">
                        <p class="font-bold text-lg">{{ $habit->name }}</p>
                    </div>
                    <form action="{{ route('habits.destroy', $habit) }}" method="POST" class="flex gap-2">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('habits.edit', $habit)}}" class="bg-white p-2 hover:opacity-50 habit-btn habit-shadow-lg">
                            <x-icons.pencil/>
                        </a>
                        <button type="submit" class="bg-red-500 text-white p-2 hover:opacity-50 habit-btn habit-shadow-lg">
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