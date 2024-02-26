<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function programmes4()    {
        return $this->hasMany(Program::class, 
        'deparment_id' , 'department_');
    }
}
