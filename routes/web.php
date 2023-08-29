<?php

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
    return view('posts');
});

Route::get('posts/{post}',function ($slug){ 

     
     
     if(! file_exists($path=__DIR__ . "/../resources/posts/{$slug}.html" )){
      // ddd("file does not exists");
      //abort(404);
      return redirect('/');
     }
     $post= cache()->remember("posts.{$slug}",5,fn()=> file_get_contents($path));
       var_dump('f');
      
     
       return view('post',[
      'post'=>$post
  ]);
})-> where('post','[A-z_\-]+');
