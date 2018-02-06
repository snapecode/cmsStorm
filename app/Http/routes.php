<?php

use App\Post;
use App\User;



/*
|--------------------------------------------------------------------------
| DataBase RAW SWL Queries
|--------------------------------------------------------------------------
|
|
*/



//;Route::get('/insert', function (){
//
//
//    DB::insert('insert into posts(title, content) VALUES (?, ?)', ['Laravel is super friggin awesome','Laravel is ultimate the best thing that has happened to PHP!!!']);
//
//
//
//
//});
//
//Route::get('/read', function(){
//
//
//   $results = DB::select('select * from posts where id = ?', [1]);
//
//
//   // return var_dump($results);
//
//   foreach ($results as $post){
//       return $post->title;
//   }
//
//});

//Route::get('/update', function(){
//
//   $updated = DB::update('update posts set title = "Updated title" where id  = ?', [1]);
//
//
//});

//
//Route::get('/delete', function(){
//
//    $deleted = DB::delete('DELETE FROM posts WHERE id = ?', [1]);
//
//    return $deleted;
//
//
//});




/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
|
|
*/



//
//Route::get('/read', function(){
//
//    $posts = Post::all();
//
//
//    foreach($posts as $post) {
//        return $post->content;
//
//
//
//
//    }
//
//
//
//});
//
//Route::get('/find', function(){
//
//    $post = Post::find(1);
//
//
//        return $post->title;
//
//
//
//});


//
//Route::get('/findwhere', function(){
//
//   $posts = Post::where('id', 2) -> orderBy('id', 'desc')->take(1)->get();
//
//   return $posts;
//
//
//});

//Route::get('/findmore', function(){
//
//
////    $posts = Post::findOrFail(3);     //will try to find a record/id or get an exception
////
////    return $posts;
//
//    $posts = Post::where('id','>', 1)-> firstORFail();
//
//    return $posts;
//
//
//});




//Route::get('/basicinsert', function(){
//
//
//   $post = new Post::find(1);
//
//   $post->title = 'new Eleoquent title insert';
//   $post->content = 'Wow, Eloquent is really decent, this is where you would put content!';
//
//   $post->save();    /// save method will insert the record or update it
//
//
//
//
//});

//Route::get('/basicinsertupdate', function(){
//
//    $post = Post::find(2);    //dont need new because its a static method
//    $post->title = 'New title inserted for  2';
//    $post->content = 'This is an update to the content in id 2';
//
//        $post->save();    /// save method will insert the record or update it
//
//
//
//
//});




// Mass assignment operator, laravel prevents multiple
// records from being created at the same time unless
// you specify int he model like this


//Route::get('/create', function(){
//
//
//    Post::create(['title'=>'the create method2', 'content'=>'This is how I\'m gonna make more  data']);
//
//
//});


//updating

//Route::get('/update', function(){
//
//
//
//    Post::where('id', 2)->where('is_admin', 0)-> update(['title'=>'New PHP TITLE', 'content'=>'I am the best laraveler everrr']);
//
//
//
//});


//DELETEEEEEEEE

//
//Route::get('/delete', function(){
//
//
//    $post = Post::find(6);
//
//    $post->delete();
//
//
//
//});


//use destroy oif you know the key
//
//Route::get('/delete2', function(){
//
//   Post::destroy(7);
//
//   //or
//   // Post::where('is_admin',0) ->delete();
//
//
//});


////soft delete
//Route::get('/softdelete', function(){
//
//Post::find(2)->delete();
//
//
//
//});


//Route::get('/readsoftdelete', function(){
//
////   $post =  Post::find(7);
////
////   return $post;
//
////   $post = Post::withTrashed()->where('id', 7)->get();
////   return $post;
//
//
//    $post = Post::onlyTrashed()->where('is_admin', 0)->get();
//    return $post;
//
//
//
//
//});

////restore a soft deleted item
//Route::get('/restore', function(){
//
//    Post::withTrashed()->where('is_admin', 0)->restore();
//
//
//
//
//});
//
//Route::get('/forcedelete', function(){
//
//   Post::onlyTrashed()->where('is_admin',0)->forceDelete();
//
//
//});
//
//
//

/*
|--------------------------------------------------------------------------
| ELOQUENT Relationships
|--------------------------------------------------------------------------
|
|
*/

////HAS ONE --- ONE TO ONE Relationship
//
//Route::get('/user/{id}/post', function($id){
//
//    return User::find($id)->post->content;     ////post->title;
//
//
//
//});
////INVERSE - also add function to User.php
//
//Route::get('/post/{id}/user', function($id){
//
//   return Post::find($id)->user->name;
//
//
//
//});
//

//
////ONE TO MANY Relationship
//Route::get('/posts', function(){
//
//    $user = User::find(1);
//
//    foreach($user->posts as $post) {
//
//       echo $post->title ."<br>";   ///if you do return, it will only return 1 title
//    }
//
//
//});






/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return view('welcome');

});

/*   pages

Route::get('/about', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('welcome');
});

Route::get('/bio/{id}/{name}', function ($id,$name) {


return "This is Biograhy number ".$id." made by ".$name."!";
});


Route::get('admin/posts/example', array ('as'=> 'admin.home' ,function(){
        $url = route('admin.home');
   // <a href="route('admin.home')"> CLICK HERE </a>

        return "this url is".$url;
}));


    */


//Route::get('/crm/{id}', 'CrmController@index');


//This route gives post requests
//Route::resource('crm', 'CrmController');
//
//Route::get('/contact', 'CrmController@contact');
//
//Route::get('post/{id}/{name}', 'CrmController@showPost');
//
//
//

