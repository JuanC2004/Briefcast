<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'user_id',
        'project_id'
    ];

    public function owner(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function project(): belongsTo{
        return $this->belongsTo(Project::class);
    }
}
