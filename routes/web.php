<?php

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

//*HOME:
Route::get('/', function () {
    $posts = \App\Post::orderBy('created_at', 'DESC')
        ->take(1)
        ->get();

    return view('pages.home', [
        'somePosts' => $posts,
    ]);
});

//*GALLERY:
Route::get('/gallery', function () {

    $posts = \App\Post::get(); //dabūt visus ierakstus no datu bāzes

    return view('pages.gallery', [
        'manyPosts' => $posts,
    ]);
});

Route::get('/blog/{id}', function ($id) {

    $post = \App\Post::find($id);

    $posts = \App\Post::limit(4)->get();

    if($post == null) {
        return abort(404);
    }

    return view ('pages.blog-item', [
        'post' => $post,
        'posts' => $posts,
    ]);
});




//*CONTACT:
Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', function () {
    $variables = request()->all();
    $specific = request()->input('title', 'default');

    $message = new \App\Message;

    $message->name = request()->input('name');
    $message->email = request()->input('email');
    $message->question = request()->input('question');

    $message->save();

    //send a person email...

    $emailSend = true; //false uz error

    if ($emailSend) {
        return redirect('/contact')->with('message', "Msg sent!"); // pēc submit nospiešanas aizvest uz to pašu /contact,
    } else {
        return redirect('/contact')->with('error', "Msg NOT sent!");
    }
    // return redirect('/'); // uz /home...
});

// Route::get('/blog/{id}', function ($id) {
//     return 'Hello Blog item ' . $id;
// });
