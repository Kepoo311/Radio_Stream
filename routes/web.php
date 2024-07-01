<?php

use App\Livewire\Homepage;
use App\Livewire\RadioPage;
use App\Livewire\RadioStream;
use Illuminate\Support\Facades\Route;

Route::get('/', Homepage::class);
Route::get('/radio', RadioPage::class);
Route::get('/radio/stream/{uuid}',RadioStream::class);