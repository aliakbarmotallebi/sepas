<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'question',
        'type'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    
}
