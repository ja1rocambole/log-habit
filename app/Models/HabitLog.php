<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['user_id', 'habit_id', 'completed_at'])]
class HabitLog extends Model
{
    //
}
