//Basic Routing

use Illuminate\Support\Facades\Route;
 
Route::get('/greeting', function () {
    return 'Hello World';
});

//The Default Route Files

use App\Http\Controllers\UserController;
 
Route::get('/user', [UserController::class, 'index']);

//Available Router Methods

Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);

//Dependency Injection
use Illuminate\Http\Request;
 
Route::get('/users', function (Request $request) {
    // ...
});

//<form method="POST" action="/profile">
    @csrf
    ...
</form>

//Redirect Routes

Route::redirect('/here', '/there');

//view routes

Route::view('/welcome', 'welcome');
 
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
