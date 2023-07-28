<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'finish_date',
        'category_id',
        'owner_id',
    ];


    protected $casts = [
        'finis_date' => 'date',
    ];


    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function owner(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function developmenttools(): HasMany{
        return $this->hasMany(Developmenttoll::class);
    }
}
