<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'number'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cases(){

        return $this->belongsTo(Cases::class);

    }
}
