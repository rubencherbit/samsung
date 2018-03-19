<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 'score',
    ];
    protected $hidden = [
        'created_at', 'updated_at', 'question_id'
    ];
}
