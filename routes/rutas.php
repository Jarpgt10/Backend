
<?php
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;



Route::post('productos', [ProductoController::class, 'index']);