<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Role;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function( ){
//     User::factory(5)->create();
//     return User::first();
// });

// Route::get('/', function(){
   
//     $user = User::find(2); 
//     $post=new Post([
//         'title' => 'Happy Birthdayy',
//         'body' => 'wishing you a happy birthday',
//         'user_id' => $user->id
//     ]);
// $post->save();
// dump($user);   
// dd($post); 
//  });


//  Route::get('/', function(){
//     $user = User::find(2);   
//     $user->posts->first()->title = 'HAPPY BIRTHDAY';
//     $user->posts->first()->body = 'hyyyy happy birthday';
//     $user->push();
//     return $user->posts;
//     });

// Route::get('/', function(){
//     $user = User::find(3);
// $roles = Role::all();
//  $user->roles()->attach($roles);
//  dd($user->roles);
//     });


// Route::get('/', function(){
//         $user = User::first();
//         $roles = Role::first();
//         $user->roles()->detach($roles);
//         dd($user->roles);
//     });

// Route::get('/', function(){
//     $user = User::first();
//     $user->roles()->attach([1,3,4]);
//     dd($user->roles);
// });
// Route::get('/', function(){
//     $user = User::first();
//     $user->roles()->sync([1, 3, 5]); 
//     dd($user->roles);
// });
//  Route::get('/', function(){
//      $user = User::first();
//      $user->roles()->syncWithoutDetaching([1, 3,5]); 
//      dd($user->roles);
//  });

// Route::get('/', function(){
//     $role = Role::find(1);
//     $role->users()->sync([2,3]);
//     dd($role->users);
// });

// Route::get('/', function(){
//     $role = Role::first();
//     $role->users()->attach([6,7,8]);
//     dd($role->users);
// });
Route::get('/', function(){
    $role = Role::find(3);
    $role->users()->syncWithoutDetaching([2,10]);
    dd($role->users);
});