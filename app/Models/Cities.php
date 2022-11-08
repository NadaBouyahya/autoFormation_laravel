<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;

    protected $table = 'city';
    protected $primaryKey = 'city_id';
    protected $fillable = ['city_name'];

    public function citizen(){
        return $this->hasMany(citizen::class, 'id_city', 'city_id');
    }
}
