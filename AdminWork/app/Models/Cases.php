<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;
    protected $fillable = [
        'theme',
        'machine_number',
        'parts',
        'repair_description',
        'owner'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        // your other new column
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function machine(){

        return $this->hasMany(Machine::class);

    }

    // public function part(){

    //     return $this->hasMany(Part::class);

    // }

}
