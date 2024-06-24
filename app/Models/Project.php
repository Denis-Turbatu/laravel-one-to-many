<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ["title", "thumb", "description", "start_date", "end_date", "type", "slug"];

    public function projects()
    {
        return $this->belongsTo(Type::class);
    }
}
