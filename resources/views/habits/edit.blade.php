<x-layout>
    <main class="py-10">
        <h1>Editar Hábito</h1>

        <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4">
            <form action="{{route('habit.update', $habit->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="flex flex-col gap-2 mb-2">
                    <label for="name">Nome</label>
                    <input name="name" value="{{ $habit->name }}" type="text" class="bg-white p-2 border-2 @error('name')border-red-500 @enderror">
                    @error('name')
                        <p class="text-sm text-red-500">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <button type="submit" class="bg-white p-2 border-2">Registrar</button>
            </form>
        </section>
    </main>
</x-layout>