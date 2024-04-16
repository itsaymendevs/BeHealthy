<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealType extends Model
{
    use HasFactory;



    public function type()
    {

        return $this->belongsTo(Type::class, 'typeId');

    } // end function



} // end model