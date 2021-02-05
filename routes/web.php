<?php

use Illuminate\Support\Facades\Route;

Route::get('/numbers', function () {
    return view('numbers');
});

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

Route::get('/', function () {
    $recipes = App\Models\Recipe::all();
    return view('home', [
        'recipes' => $recipes,
    ]);
});

// Route::post('/recipes', function () {
//     $new_recipe_name = request('recipe_name');
//     $new_recipe = new App\Models\Recipe;
//     $new_recipe->name = $new_recipe_name;
//     $new_recipe->save();
//     return redirect('/');
// });

// Raw SQL Version
Route::post('/recipes', function () {
    $new_recipe_name = request('recipe_name');
    DB::unprepared('INSERT INTO recipes (name) VALUES ("'. $new_recipe_name . '")');
    return redirect('/');
});

Route::get('/recipes/{recipe_name}', function ($recipe_name) {
    return view('recipe', [
        'recipe_name' => $recipe_name
    ]);
});

Route::get('test', function () {
    $chicken = App\Models\Recipe::whereName('Chicken')->first();
    dd($chicken->steps);
});
