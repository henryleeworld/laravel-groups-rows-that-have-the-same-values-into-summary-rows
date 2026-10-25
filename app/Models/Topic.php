<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name'])]
class Topic extends Model
{
    /**
     * Get the questions for the topic.
     */
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
