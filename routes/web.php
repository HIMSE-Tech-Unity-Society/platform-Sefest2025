<?php

use App\Http\Controllers\AuthController;
use App\Livewire\Admin\CompetitionParticipant;
use App\Livewire\Admin\CompetitionParticipantDetail;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\WorkshopParticipant;
use App\Livewire\Admin\WorkshopParticipantDetail;
use App\Livewire\Auth\Login;
use App\Livewire\RegistrationCompetition;
use App\Livewire\RegistrationWorkshop;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form/registrasi/lomba', RegistrationCompetition::class);
Route::get('/form/registrasi/workshop', RegistrationWorkshop::class);
Route::get('/auth/login', Login::class)->name('login');
Route::middleware('auth')->prefix('/sefest')->group(function (){
    Route::get('/competition-participant', CompetitionParticipant::class);
    Route::get('/workshop-participant', WorkshopParticipant::class);
    Route::get('/competition-participant/{id}', CompetitionParticipantDetail::class);
    Route::get('/workshop-participant/{id}', WorkshopParticipantDetail::class);
    Route::get('/', Dashboard::class);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
