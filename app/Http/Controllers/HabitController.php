<?php

namespace App\Http\Controllers;

use App\Http\Requests\HabitRequest;
use App\Models\Habit;
use App\Models\HabitLog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HabitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $habits = Auth::user()->habits;
        return view('dashboard', compact(var_name:'habits'));
    }

    public function manage()
    {
        $habits = Auth::user()->habits;
        return view('manager', compact(var_name:'habits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('habits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HabitRequest $request)
    {
        $validated = $request->validated();

        Auth::user()->habits()->create($validated);

        return redirect()->route('habits.index')->with('success', 'Habito criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Habit $habit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Habit $habit)
    {
        return view('habits.edit', compact('habit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HabitRequest $request, Habit $habit)
    {
        if($habit->user_id != Auth::user()->id){
            abort(code: 403, message:'Acesso não autorizado!');
        }

        $habit->update($request->all());

        return redirect()->route('habits.index')->with('success', 'Habito atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habit $habit)
    {
        if($habit->user_id != Auth::user()->id){
            abort(code: 403, message:'Acesso não autorizado!');
        }

        $habit->delete();

        return redirect()->route('habits.index')->with('success', 'Habito deletado com sucesso');
    }

    public function toggle(Habit $habit)
    {
        if($habit->user_id != Auth::user()->id){
            abort(403, 'Acesso não autorizado!');
        }

        $today = Carbon::today()->toDateString();
        $log = HabitLog::query()->where('habit_id', $habit->id)->where('completed_at', $today)->first();

        if($log)
        {
            $log->delete();
            $message = 'Hábito desmarcado';
        }
        else
        {
            HabitLog::create(['user_id'=> Auth::user()->id,'habit_id' => $habit->id, 'completed_at' => $today]);
            $message = 'Hábito concluido';
        }
        return redirect()->route('habits.index')->with('success', $message);
    }

}
