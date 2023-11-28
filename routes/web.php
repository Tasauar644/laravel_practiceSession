 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoController;
use App\Http\Controllers\singleActionController;

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

Route::get('/',[demoController::class,'index']);
Route::get('/welcome',singleActionController::class);

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/demo/{name?}/{id?}',function($name=null,$id=null){
    /*echo "$name";
    echo"<br>";
    echo "$id";*/
    $demo="<h2>The h2 tag triggered</h2>";
    $data=compact('name','id','demo');

    return view('demo')->with($data);
});
