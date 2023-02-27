<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Part extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    // public function cases(){

    //     return $this->belongsTo(Cases::class);

    // }

    // public function user(){

    //     return $this->belongsTo(User::class);

    // }
}
