<?php
namespace Database\Seeders;

use App\Models\Form;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FormSeeder extends Seeder{
    public function run(): void{
        Form::create([
            "type"=>"lomba",
            "isClosed" => 1,
        ]);
        Form::create([
            "type"=>"workshop",
            "isClosed" => 1,
        ]);
    }
}
