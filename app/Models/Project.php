<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($params)
    {
        return $this->tasks()->create($params);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
