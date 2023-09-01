<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\FrontMatter\Data\SymfonyYamlFrontMatterParser;
use App\Http\Controllers\PageController;
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

//   Route::get('/', function () 
//   {
   
//     return view('posts',['posts'=>Post::all()]);
//    });


//    Route::get('posts/{slug}',function ($slug){ 


    
//      return view('post',['post'=>Post::find($slug)]);
      

// })-> where('post','[A-z_\-]+');
Route::get('/',[PageController::class,"showUser"])->name('home');
Route::get('/test',[PageController::class,"showTest"])->name('test');