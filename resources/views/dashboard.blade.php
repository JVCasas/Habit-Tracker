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
            <h2 class="text-lg mt-8 mb-4">{{ date('d/m/Y') }}</h2>
            <ul class="flex flex-col gap-2">
                @forelse($habits as $habit)
                <li class="habit-shadow-lg p-2 bg-[#ffdaac]">
                    <div class="flex items-center gap-2">
                        <input type="checkbox" class="w-5 h-5" name="" id="">
                        <p class="font-bold text-lg">{{ $habit->name }}</p>
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