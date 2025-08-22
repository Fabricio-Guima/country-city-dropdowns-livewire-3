<?php

use App\Livewire\CompanyCreate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('companies/create', CompanyCreate::class)
    ->name('companies.create');
