<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    // use HasFactory;
    protected $fillable =[];

    public function friend(){
        return $this->belongsTo(friends::class,'id_student_phone', 'id_friend');
    }
}
