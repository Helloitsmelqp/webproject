<?php
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemlateController;
use App\Http\Controllers\HelloController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',function()
{
    return view('frontend.home');
}
);
Route::get('/contect',function()
{
    return view('frontend.contect');
}
);
Route::get('/information', [HelloController ::class, 'index']);

Route::get('/qualification',function()
{
    return view('frontend.qualification');
}
);
Route::get('/test',function()
{
    return view('frontend.test');
}
);






