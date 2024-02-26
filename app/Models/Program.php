<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    public function modules()    {
        return $this->hasMany(Module::class, 
        'program_id' , 'program_id');
    }
}
