<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('app');
});

Route::get( "/subscribe/{var}",function(String $var )
{
return view('form2',["var" => $var]);
}
)->name("subscribe");
Route::post("/formvalidation/{sub}" ,function (Request $request,String $sub)
{
$request->validate(["nom"=> "required","prenom" => "required","nom_entreprise" =>"nullable","num_tel"=>"numeric|nullable" ,"adresse"=>"nullable","adresse_email"=>"nullable|email","commentaire"=>"nullable"]);
$request=$request->all();
//user::create
//dd("echo");
})->name("validation");

