<x-layout>
    <main class="py-10">
        <h1>Dashboard</h1>
        <p>
            Bem Vindo(a), {{ auth()->user()->name }}!
        </p>
        <div>
            <h2 class="text-xl mt-4">Listagem dos habitos</h2>
            <ul class="flex flex-col gap-2">
                @forelse($habits as $habit)
                <li class="pl-4">
                    <div class="flex gap-2 items-center">
                        <p class="font-bold text-xl">- {{ $habit->name }}</p>
                        <p>[{{ $habit->habitLogs->count() }}]</p>
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