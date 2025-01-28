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
            "password" => Hash::make('Sefest2025'),
            "email_verified_at" => Carbon::now()
        ]);
        User::create([
            "name" => "Arasy Admin Sefest",
            "email" => "arasy@sefest.com",
            "password" => Hash::make('Sefest2025'),
            "email_verified_at" => Carbon::now()
        ]);
        User::create([
            "name" => "Rizkyfeb Admin Sefest",
            "email" => "rizkyfeb@sefest.com",
            "password" => Hash::make('Sefest2025'),
            "email_verified_at" => Carbon::now()
        ]);
        User::create([
            "name" => "Terrafel admin sefest",
            "email" => "terrafel@sefest.com",
            "password" => Hash::make('Sefest2025'),
            "email_verified_at" => Carbon::now(),
        ]);
        User::create([
            "name" => "Mufid Admin Sefest",
            "email" => "mufid@sefest.com",
            "password" => Hash::make('Sefest2025'),
            "email_verified_at" => Carbon::now()
        ]);
        User::create([
            "name" => "Evi Admin Sefest",
            "email" => "evi@sefest.com",
            "password" => Hash::make('Sefest2025'),
            "email_verified_at" => Carbon::now()
        ]);
        User::create([
            "name" => "Alif Admin Sefest",
            "email" => "alif@sefest.com",
            "password" => Hash::make('Sefest2025'),
            "email_verified_at" => Carbon::now()
        ]);
        User::create([
            "name" => "Aurel Admin Sefest",
            "email" => "aurel@sefest.com",
            "password" => Hash::make('Sefest2025'),
            "email_verified_at" => Carbon::now()
        ]);
        User::create([
            "name" => "Mira Admin Sefest",
            "email" => "mira@sefest.com",
            "password" => Hash::make('Sefest2025'),
            "email_verified_at" => Carbon::now()
        ]);
        User::create([
            "name" => "Amanda Admin Sefest",
            "email" => "amanda@sefest.com",
            "password" => Hash::make('Sefest2025'),
            "email_verified_at" => Carbon::now()
        ]);
        User::create([
            "name" => "Debby Admin Sefest",
            "email" => "debby@sefest.com",
            "password" => Hash::make('Sefest2025'),
            "email_verified_at" => Carbon::now()
        ]);
        User::create([
            "name" => "Dewa Admin Sefest",
            "email" => "dewa@sefest.com",
            "password" => Hash::make('Sefest2025'),
            "email_verified_at" => Carbon::now()
        ]);
        User::create([
            "name" => "Faizah Admin Sefest",
            "email" => "faizah@sefest.com",
            "password" => Hash::make('Sefest2025'),
            "email_verified_at" => Carbon::now()
        ]);

    }
}
