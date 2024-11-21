<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostareController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\CalculateCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Role;


// Dependency injection - manage the dependencies between different components or objects
// Route::get('/', function (Request $request) {
//     // return view('welcome');
//     return redirect('/profile');
// });

// Route::redirect('/', '/profile');

// Route::get('/profile', function (Request $request) {
//     return "PROFILE";
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/{id}/{status}', function ($id, $status) {
//     return $status;
// });

// Optional parameters
// Route::get('/{id?}', function (?int $id = null) {
//     return $id;
// });

// Route::get('/user/{id}', function ($id) {
//     return $id;
    
//     // Regular expression ->where() => the page will be loaded only at ID 22
// })->where('id', 22);

// // More complex regular expressions lvl 2
// Route::get('/user/{name}', function ($name) {
//     return $name;
    
// })->where('name', '[A-Za-z]+');

// // More complex regular expressions lvl 3
// Route::get('/user/{name}/{id}', function (string $name, int $id) {
//     return $name;
    
// })->where(['name' => '[A-Za-z]+', 'id' => '[0-9]+']);

// // More complex regular expressions, constraint methods lvl 4
// Route::get('/user/{name}', function (string $name) {
//     return $name;
    
// })->whereAlpha('name');

// Route::get('/user/{name}', function (string $name) {
//     return $name;
    
// })->whereNumber(1);

// Route::get('/user/{categories}', function (string $categories) {
//     return $categories;
    
// })->whereIn('categories', ['php', 'python', 'flutter']);

// Route::view('/', 'welcome');

// Example
// Route::get('/user', 'CONTROLLER', 'METHOD');

// Route::post('/', function () {
//     return view('welcome');
// });

// Route::put('/', function () {
//     return view('welcome');
// });

// Route::patch('/', function () {
//     return view('welcome');
// });

// Route::delete('/', function () {
//     return view('welcome');
// });

// Route::options('/', function () {
//     return view('welcome');
// });


// Named routes
// Route::get('/', function() {
//     return view('welcome');
// })->name('home');

// Route::get('/company-contact', function() {
//     return 'contact';
// })->name('company.contact');

// Route::get('/profile', function() {
//     return 'profile';
// })->name('profile');

// Route::get('/', function () {
//     return view('welcome');
//     // Each time a request on '/' is made, instead of going to 'welcome', it will go to CalculateCode
// })->middleware('cal');

// Route::get('/', function (Request $request) {

    // $token = $request->session()->token();
    // return $token;
//     return view('welcome');
// });

// Using the Controller method to return the desired view
// Route::get('/', [PostsController::class, 'index']);

// Route::get('/', [UserController::class, 'show'])->middleware('auth');

// With this route I can use all the methods inside CategoriesController 
// Route::resource('categories', CategoriesController::class)->only([
//     'index', 'show'
// ]);

// Route::resource('categories', CategoriesController::class)->except([
//     'create', 'update', 'store', 'destroy'
// ]);

// Route::apiResource('categories', CategoriesController::class);

// Route::resource('/categories', CategoriesController::class)->names([
//     'destroy' => 'categories.delete'
// ]);

// Route::resource('/categories', CategoriesController::class)->parameters([
//     'categories' => 'category_id'
// ]);

// Route::get('/categories/attach/post', [CategoriesController::class, 'attach_post']);

// Route::resources([
//     'categories' => CategoriesController::class,
//     'photos' => PhotosController::class
// ]);

// Route::get('/', function(Request $request) {

//     $data = $request->all();

//    dd($data);
// });

// Route::get('/', function(Request $request) {

//     $data = $request->collect();

//    return $data->get("name");
// });

// Route::get('/', function(Request $request) {

//     $data = $request->input();

//    return $data['name'];
// });

// Route::get('/', function(Request $request) {

    // return $request->cookie('laravel_session');
    // $request->old('email');
//     return view('welcome');
// })->name('home');

// Route::post('/flash', function (Request $request) {
//     // $request->flashOnly('password');
//     $request->flashExcept('password');
//     return "FLASH";
// });

// Route::get('/', function () {
    // return view('welcome');
    // return response("Hello God", 200)
    //     ->header('Content-Type', 'text/plain')
    //     ->header('Content-Type', 'value for Header 1')
    //     ->header('Content-Type', 'value for Header 2');

        // return response("Hello God", 200)->withHeaders([
        //     'Content-Type' => 'text/plain',
        //     'Header-1' => 'text/plain',
        //     'Header-2' => 'text/plain',
        // ]);
// });

// MIDDLEWARE FOR BROWSER CACHING
// Route::middleware('cache.headers:private;no_cache')->group(function() {
//     Route::get('/dashboard', function() {

//         $user = 'Ionut Cornea';

//         $cookie = cookie('user', $user, 1);

//         return response('DASHBOARD')->withoutCookie('visit');
//     });

//     Route::get('/posts', function(Request $request) {

//         $cookie = cookie('visit', 1, 30);

//         return response('POSTS')->cookie($cookie);

        // return 'WELCOME TO YOUR POST MR. ' . $request->cookie('user');;
//     });
// });

// Route::post('/flash', function (Request $request) {
    
//     $request->route('home')->withInput();
//     return back()->withInput();
// });

// Route::post('/custom', function(Request $request) {

    // $inputs = $request->only(['email', 'checkBox']);

    // $inputs = $request->except(['email']);

    // if($request->has('email')) {
    //     return "email is present";
    // }
//     if($request->hasAny(['email', 'checkBox'])) {
//         return "value is present";
//     }
// });

// Route::get('/data', function(Request $request) {

//     $inputs = $request->merge(['email' => 'edwin@edwindiaz.com']);

//     dd($request->all());
    // if($request->missing(['email'])) {
    //     return "email key is missing";
    // }
// });



// Route::post('/date', function(Request $request) {

    // $obj = ($request->date('appointment', 'Y-m-d', 'Europe/Bucharest'));
    // return $obj->diffForHumans();
//     return $request->appointment;

// });

// Route::post('/colors', function(Request $request) {

//     return $request->input('colors.0');
// });

// Route::get('/custom', function(Request $request) {
//     return $request->query('name', 'Havier');
// });

// Route::post('/posts', function () {
//     return "IT LUCREAZA WELL";
// });


// REQUEST lESSONS START
// Route::get('/', [PostsController::class, 'index']);

// Route::patch('/posts/{id}', [PostsController::class, 'update']);

// Route::get('/posts/path', [PostsController::class, 'the_path'])->name('posts.path');

// Route::get('/', function(Request $request) {
//     // return $request->getHttpHost();
//     if($request->method('get')) {
//         return "test TRUE";
//     };
// });

// Route::get('/', function() {
//     // return view('welcome');

//     return redirect()->action([DashboardController::class, 'index'], ['id' => 1]);
// });

// Route::get('/login', function () {
    
//     return redirect()->route('home');
// });

// Route::get('/data', function (Request $request) {
    
//     return $request->query('id');
// })->name('data');

// Route::get('/dashboard', [DashboardController::class, 'index']);

// Route::get('/external', function() {

//     return redirect()->away('https://www.portofolio.icornea.ro');
// });

// Route::get('/', function() {

//     return redirect('dashboard')->with('user', 'Ionut Cornea');
// });

// Route::get('/', function() {

    // return view('welcome', ['username'=> 'IONUT DANIEL CORNEA', 'count'=> 9, 'status'=> 'active']);
    // $datas = [];

    // return view('welcome', ['datas' => $datas]);

    // Implementation for FOREACH
    // return view('welcome',
    // [
    //     'users' => [
    //         'name' => ['Daniel', 'Mihaela', 'Abigal']
    //     ]
    // ]);
// });

// Route::get('/json', function() {

//     return response()->json([
//         'name' => 'Ionut',
//         'role' => 'admin'
//     ]);
// });

// Route::get('/profile', function() {

    

    // Pass data to the view 
    // return view('profile', ['user' => $user]);

//     return view('profile');
// });

// Route::get('/dashboard', function() {

   

//     return view('dashboard');
// });

// Route::get('/dashboard', [DashboardController::class, 'show']);

// Route::view('/dashboard', 'dashboard');

// Route::view('/posts', 'posts.create');

// SESSIONS
// Route::get('/', function(Request $request) {
    
//     $request->session(['secret'=> '1234']);

//     session(['secret'=> '1234FILE']);
//     $value =  session('secret');

//     return view('welcome');
// });

// SESSIONS 2
// Route::prefix('sessions')->controller(SessionsController::class)->group(function() {
//     Route::get('/', 'index');
//     Route::get('/set', 'set');
//     Route::get('/delete', 'delete');
// });

// Route::prefix('sessions')
// ->controller(SessionsController::class)
// ->group(function() {
//     Route::get('/', 'index');
// });


// BLADE MASTER LAYOUT
// Route::get('/', function() {

//     $type = 'submit';

//     return view('welcome', compact('type'));
// });

// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Route::get('/profile', function() {
//     return view('profile');
// });


// FORM - VALIDATION PART
// Route::get('/', function () {
//     return view('posts');
// });

// Route::prefix('posts')->resource('posts', PostareController::class);

// DB CRUD - inserting data using SQL queries
// Route::get('/', function() {

    // CREATE
    // DB::insert('INSERT INTO users (name, email, password) values(?, ?, ?)', ['rares', 'rares@gmail.com', 'secret123']);

    // READ
    // $user = DB::select('SELECT * FROM users WHERE id =?', [1]);
    // dd($user);

    // UPDATE
    // $newHashedPassword = Hash::make('secret123@@');

    // $result = DB::update("UPDATE users SET password = '$newHashedPassword', created_at = CURRENT_TIMESTAMP, updated_at = CURRENT_TIMESTAMP WHERE id = ?", [1]);
    // dd($result);

    // DELETE
    // $result = DB::delete('DELETE FROM users WHERE id = ?', [1]);
    // dd($result);

//     return view('welcome');
// });

// DATABASE - QUERY BUILDER SMALL PROJECT
Route::get('/', function() {

    // $user = User::find(3);

    // $user->roles()->attach(1);
    // $user->roles()->detach(1);
    // $user->roles()->sync(1);
    // $user->roles()->syncWithoutDetaching(1, 2, 4);
    // $user->roles()->updateExistingPivot(1);
    // $user->roles()->create(['name' => 'student']);

    // $role = new Role(['name' => 'teacher']);

    // $user->roles()->save($role);

    // $user->roles()->toggle([109 => ['created_at' => now()]]);
    // $user->roles()->toggle([10, 11, 12]);

    // Role::destroy([11, 12]);

    // $user->roles()->updateExistingPivot(109, ['user_id'=> 6]);

    // $comment = new Comment(['message'=>'NEW COMMENT']);

    // Post::find(9)->comments()->save($comment);

    // dd(User::find(3)->name) ;

    // $user->roles()->create(['name' => 'student']);

    // $comment = ['message' => "God is TRUE ADONAI" . fake()->sentence];

    // User::find(3)->postComments()->create($comment);

    // dd(User::find(3)->postComments()->first()->delete($comment));

    // $comment = ['post_id'=> 5, 'message'=> 'New message created 22'];

    // $data = User::find(1)->postComment[0]->post->user->posts->each(function ($post){
    //     return $post->id === 1 ? $post->delete() : $post->refresh();
    // });

    // dd($data);

    // $comment = ['message'=> "hello from ro updated 5"];

    // dd(User::find(1)->postComment()->get()->where('id', 5)->first()->update($comment));

    // dd(User::find(1)->postComment[0]->message);

    // dd(Post::find(10)->user()->delete());

    // $post = Post::find(1);

    // $post->title = "UPDATED FROM THE PUSH SHOW";
    // $post->comments[0]->message = "TEST UPDATED";
    // $post->user->name = "PUSH NAME UPDATED";

    // $post->push();

    // dd($post->comments);

    // $post = (Comment::find(1)->post);

    // $post->title = "NEW TITLE";
    // $post->body = "NEW BODY";
    // $post->save();

    // Comment::find(2)->post()->associate(Post::find(3))->save();

    // $comment = Comment::find(2);
    // $post = Post::find(3);
    // $comment->post()->associate($post);
    // $comment->save();

    // return view('welcome');

    // Schema::connection('sqlite2')->create('users', function(Blueprint $table){
    //     $table->id();
    //     $table->string('name');
    //     $table->string('username', '100');
    //     $table->timestamps();
    // });

    // try {
    //     Schema::connection('sqlite2')->table('users', function(Blueprint $table){
    //         $table->string('email')->unique();
    //     });
    // } catch(Exception $e) {
    //     echo $e->getMessage();
    // }

    // try {
    //     Schema::connection('sqlite2')->rename('users', 'custom_users');

    //     return 'Table updated!';
    // } catch(Exception $e) {
    //     echo $e->getMessage();
    // }

    // CRUD FOR ELOQUENT SECTION 22
    // Create 
    // $post = new Post();
    // $post->title ="First post";
    // $post->body ="Body text";
    // $post->save();
    // return 'post created';

    // Retrieve & Reading
    // dd(Post::find(1));
    // Post::firstWhere('role', 'status');
    // Post::where('id', 1)->firstOr(function() {
    // });

    // Retrieve & Reading 2
    // These are for the collections
    // dd(User::all());
    // dd(User::select('email')->orderBy('id', 'desc')->get());

    // Update
    // $user = User::find(1);
    // $user->name = 'John Cornea';
    // $user->where('id', 2)->update([
    //     'name' => 'Josephina',
    //     'email' => 'Josel@gmail.com'
    // ]);
    // return 'User Updated';

    // Delete
    // $user = User::find(1)->delete();
    
    // return 'User deleted';

    // Builders & Collections
    // foreach(User::orderBy('created_at', 'desc')->get() as $user) {
    //     echo "<br>";
    //     echo $user->name;
    // }

    // Schema::disableForeignKeyConstraints();

    // User::truncate();
    // Comment::truncate();
    // Post::truncate();

    // dd(Comment::find(1)->user->name);
    // dd(Post::find(2)->title);
    // dd(User::find(1)->comment->message);

    // DATABASE ORM CRUD
    // dd(User::find(1)->posts);
    // dd(Post::find(1)->user);

    // CREATE & UPDATE
    // $post1 = new Post(
    //     [
    //         'title'=> 'POST 1',
    //         'body'=> 'UNU 1'
    //     ]
    // );

    // $post2 = new Post(
    //     [
    //         'title'=> 'POST DOI',
    //         'body'=> 'DOI 2'
    //     ]
    // );

    // User::find(1)->posts()->saveMany([
    //     $post1, $post2
    // ]);
    // return response(200);

    
    // DELETE
    // dd(User::find(6)->posts()->whereId(6)->delete());

    // $user = [
    //     'name' => 'CORNEA IONUT',
    //     'email' => 'cornea@gmail.com',
    //     'password' => 'secret123',
    // ];

    // Creating a model from the array above
    // $newUser = new User($user);

    // $comment = Comment::find(5)->user()->delete();

    // return "DELETED";

})->name('home');

Route::post('/create/dummy', [UsersController::class, 'created_dummy_users'])->name('users.create.dummy');
Route::delete('/delete/dummy', [UsersController::class, 'delete_dummy_users'])->name('users.delete.dummy');
Route::resource('/users', UsersController::class);

// Route::get('/users', [UsersController::class, 'index']);

