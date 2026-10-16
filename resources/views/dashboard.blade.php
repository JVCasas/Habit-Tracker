<x-layout>
    <main class="py-10">
        <h1 class="font-bold text-4xl text-center">Dashboard</h1>
        
        <a href="{{route('habits.create')}}" class="p-2 border-2 bg-white font-bold block">Adicionar Hábito</a>

        @session('success')
        <div class="flex">
            <p class="bg-green-100 border border-green-400 text-green-700 mb-4 p-3">
                {{session('success')}}
            </p>
        </div>
        @endsession
        <div>
            <h2 class="text-xl mt-4">Listagem dos habitos</h2>
            <ul class="flex flex-col gap-2">
                @forelse($habits as $habit)
                <li class="pl-4">
                    <div class="flex gap-2 items-center">
                        <p class="font-bold text-xl">- {{ $habit->name }}</p>
                        <p>[{{ $habit->habitLogs->count() }}]</p>
                        <a href="{{ route('habit.edit', $habit)}}" class="bg-white text-white p1 hover:opacity-50 cursor-pointer">
                            <x-icons.pencil/>
                        </a>
                        <form action="{{ route('habit.destroy', $habit) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="bg-red-500 text-white p1 hover:opacity-50 cursor-pointer">
                                <x-icons.trash/>
                            </button>
                        </form>
                    </div>
                </li>
                @empty
                <p>Você ainda não possui nenhum hábito.</p>
                <a href="" class="bg-white p-2 border-2">Registre um novo hábito.</a>
                @endforelse
            </ul>
        </div>
    </main>
</x-layout>