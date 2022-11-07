<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class friends extends Model
{
    // use HasFactory;
    public function phone(){
        return $this->hasOne(phone::class, 'id_student_phone', 'id_friend');
    }
}
