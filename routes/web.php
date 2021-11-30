<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


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
    return view('home', [
        "title" => "Home",
        "post" => Post::all()
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "arief dwi muhidin",
        "email" => "ariefdmofficial@gmail.com",
        "image" => "ariefdm.png"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Arief Dwi Muhidin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia magni fuga molestias facere mollitia doloremque quos possimus ad alias non, ut quia vero molestiae aut distinctio perferendis pariatur, corrupti placeat quae consequuntur cumque qui culpa maxime est! Laborum debitis dolorem distinctio inventore eius dolor incidunt, illo ratione nulla! Consectetur error numquam sapiente expedita in incidunt eaque totam tempore rerum commodi cum optio accusamus porro, dicta fugiat! Deserunt ex atque, corporis, saepe necessitatibus ab accusantium modi voluptatibus sint tempore ea porro?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dwi A",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dolorum dicta mollitia nulla, nihil quidem facere voluptatibus dolor ipsum cumque fugiat fugit quis optio, sint natus labore quisquam amet nobis, incidunt sapiente. Blanditiis dolorem dignissimos, consectetur repellat fuga dolores a vitae dicta numquam, ducimus porro incidunt? Perferendis veniam minus recusandae quae blanditiis, ipsa, voluptas, expedita quam nisi debitis aliquid tenetur harum cumque eos corrupti aperiam. Voluptate corrupti hic velit ipsam aspernatur ad praesentium est. Fugiat expedita enim vitae odio impedit beatae similique consequuntur dolores sequi ratione aliquid, aliquam doloribus id minima nam incidunt voluptatum accusamus commodi saepe. At, est veritatis?"
        ],
    ];
    return view('posts', [
        "title" => "Post",
        "posts" => $blog_posts
    ]);
}); 


Route::get('/post', [PostController::class, 'index']);

Route::get('posts/{slug}', [PostController::class, 'show']);