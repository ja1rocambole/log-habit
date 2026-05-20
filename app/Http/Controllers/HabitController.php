<?php

namespace App\Http\Controllers;

use App\Models\Habit;
use App\Http\Controllers\Controller;
use App\Http\Requests\HabitRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HabitController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('habit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HabitRequest $request)
    {
        $validated = $request->validated();

        $request->user()->habits()->create($validated);

        return redirect()
            ->route('site.dashboard')
            ->with('success', 'Hábito criado com sucesso!');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Habit $habit)
    {
        return view('habit.edit', compact('habit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HabitRequest $request, Habit $habit)
    {
         if ($habit->user_id !== Auth::id()) {
            abort(403, 'Ação não autorizada.');
        }

        $habit->update($request->all());

        return redirect()
            ->route('site.dashboard')
            ->with('success', 'Hábito atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habit $habit)
    {
        if ($habit->user_id !== Auth::id()) {
            abort(403, 'Ação não autorizada.');
        }
        // dd($habit);
        $habit->delete();

        return redirect()
            ->route('site.dashboard')
            ->with('success', 'Hábito deletado com sucesso!');
    }
}
