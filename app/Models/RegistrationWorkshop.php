<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationWorkshop extends Model
{
    use HasFactory;
    protected $table = "registration_workshops";
    protected $guarded = ['id'];

    public function scopeSearch($query, $value){
        $query->where('full_name', 'like', "%{$value}%")->orwhere('email', 'like', "%{$value}%")->orwhere('institution', 'like', "%{$value}%")->orwhere('phone', 'like', "%{$value}%");
    }
}
