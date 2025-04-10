<?php

use App\Http\Controllers\MejaController;

Route::get('/mejas', [MejaController::class, 'index']);
