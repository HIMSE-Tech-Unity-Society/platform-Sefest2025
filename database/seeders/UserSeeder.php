<?php
namespace Database\Seeders;

use App\Models\Form;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            "name" => "Siyun Admin Sefest",
            "email" => "rsiyun@sefest.com",
            "password" => Hash::make('password'),
            "email_verified_at" => Carbon::now()
        ]);
        User::create([
            "name" => "Arasy Admin Sefest",
            "email" => "arasy@sefest.com",
            "password" => Hash::make('password'),
            "email_verified_at" => Carbon::now()
        ]);
        User::create([
            "name" => "Rizkyfeb Admin Sefest",
            "email" => "rizkyfeb@sefest.com",
            "password" => Hash::make('password'),
            "email_verified_at" => Carbon::now()
        ]);
        Form::create([
            "type" => "lomba",
            "isClosed" => 1
        ]);
        Form::create([
            "type" => "workshop",
            "isClosed" => 1
        ]);

    }
}
