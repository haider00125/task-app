<?php

namespace App\Models;

use App\Enums\Priorities;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'priority',
        'project_id',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var string[]
     */
    protected $casts = [
        'priority' => Priorities::class,
    ];

    /**
     * Associate with project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
