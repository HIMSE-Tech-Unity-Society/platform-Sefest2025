<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationCompetition extends Model
{
    use HasFactory;
    protected $table = "registration_competitions";
    protected $guarded = ['id'];
    public function scopeSearch($query, $value){
        $query->where('team', 'like', "%{$value}%");
    }

}
