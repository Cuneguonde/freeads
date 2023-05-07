<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\Utilisateur;
use App\Models\Annonce;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function () {
return view('register');
});/* [IndexController::class, 'showIndex'] */
//Route::post('register', [Utilisateur::class, 'store']);
Route::post('/annonce', function (Request $request) {
/*     $validator = Validator::make($request->all(), [
        'email' => 'required|max:255',
    ]);
 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    } */
    $task = new Annonce;
    $task->name = $request->name;
    $task->save();
 
    return redirect('/');
    // Create The Task...
});
Route::resource('user', Utilisateur::class);