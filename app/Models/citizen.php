<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citizen extends Model
{
    use HasFactory;

    protected $table = 'citizen';
    protected $primaryKey = 'id_citizen';

    public function city(){
        return $this->belongsTo(city::class, 'id_city', 'id_citizen');
    }

}
