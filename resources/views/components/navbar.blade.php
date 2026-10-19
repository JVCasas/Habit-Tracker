<nav>
    <ul class="flex gap-4 items-center">
        <li>
            <a href="{{ route('habits.index') }}" class="{{ Route::is('habits.index') ? 'font-bold underline' : '' }} text-md border-r-2 pr-4 border-habit-orange hover:underline">Hoje</a>
        </li>
        <li>
            <a href="#" class="text-md border-r-2 pr-4 border-habit-orange hover:underline">Histórico</a>
        </li>
        <li>
            <a href="#" class="text-md border-r-2 pr-4 border-habit-orange hover:underline">Calendário</a>
        </li>
        <li>
            <a href="{{ route('habits.manage') }}" class="{{ Route::is('habits.manage') ? 'font-bold underline' : '' }}text-md hover:underline">Gerenciar Hábitos</a>
        </li>
    </ul>
</nav>