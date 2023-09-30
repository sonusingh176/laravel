<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blogs;
use App\Models\BlogTags;
use App\Http\Controllers\HomeController;

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

Route::middleware(["web"])->group(function(){


    Route::get("/",[HomeController::class, "home"]);
    // Route::get('/', function () {    
    //     return view('home',[
    //         "title" => "My Blog",
    //         "page_length" =>10,
    //         "total_blogs" =>11,
    //         "page_number" =>1,
    
    //         "blogs" =>[
    //             [
    //             "url" =>"/",
    //             "is_trending" => true,
    //             "author" => "sonu",
    //             "author_image_url" => "https://avatars.githubusercontent.com/u/110038971?v=4",
    //             "image_url_portait" => "https://picsum.photos/200/300",
    //             "image_url_landscape" => "https://picsum.photos/536/354",
    //             "title" => "Laravel websocket | Chat Application",
    //             "date" =>"August 27, 2023",
    //             "description" => "how to learn about websocket development",
    //             "tags" =>"tag1,tag2,tag3"
    //             ],
    //             [
    //                 "url" =>"/",
    //                 "is_trending" => true,
    //                 "author" => "sonu",
    //                 "author_image_url" => "https://avatars.githubusercontent.com/u/110038971?v=4",
    //                 "image_url_portait" => "https://picsum.photos/id/237/200/300",
    //                 "image_url_landscape" => "https://picsum.photos/id/237/536/354",
    //                 "title" => "Laravel websocket | Chat Application",
    //                 "date" =>"August 27, 2023",
    //                 "description" => "how to learn about websocket development",
    //                 "tags" =>"tag1,tag2,tag3"
    //             ],
    //             [
    //                 "url" =>"/",
    //                 "is_trending" => true,
    //                 "author" => "sonu",
    //                 "author_image_url" => "https://avatars.githubusercontent.com/u/110038971?v=4",
    //                 "image_url_portait" => "https://picsum.photos/200/300",
    //                 "image_url_landscape" => "https://picsum.photos/536/354",
    //                 "title" => "Laravel websocket | Chat Application",
    //                 "date" =>"August 27, 2023",
    //                 "description" => "how to learn about websocket development",
    //                 "tags" =>"tag1,tag2,tag3"
    //                 ]
    //             ],
            
    //             "trending" =>[
    //                 [
    //                 "url" =>"/",
    //                 "is_trending" => true,
    //                 "author" => "sonu",
    //                 "author_image_url" => "https://avatars.githubusercontent.com/u/110038971?v=4",
    //                 "image_url_portait" => "https://picsum.photos/200/300",
    //                 "image_url_landscape" => "https://picsum.photos/536/354",
    //                 "title" => "Laravel websocket | Chat Application",
    //                 "date" =>"August 27, 2023",
    //                 "description" => "how to learn about websocket development",
    //                 "tags" =>"tag1,tag2,tag3"
    //                 ],
    //                 [
    //                     "url" =>"/",
    //                     "is_trending" => true,
    //                     "author" => "sonu",
    //                     "author_image_url" => "https://avatars.githubusercontent.com/u/110038971?v=4",
    //                     "image_url_portait" => "https://picsum.photos/200/300",
    //                     "image_url_landscape" => "https://picsum.photos/536/354",
    //                     "title" => "Laravel websocket | Chat Application",
    //                     "date" =>"August 27, 2023",
    //                     "description" => "how to learn about websocket development",
    //                     "tags" =>"tag1,tag2,tag3"
    //                 ],
    //                 [
    //                     "url" =>"/",
    //                     "is_trending" => true,
    //                     "author" => "sonu",
    //                     "author_image_url" => "https://avatars.githubusercontent.com/u/110038971?v=4",
    //                     "image_url_portait" => "https://picsum.photos/200/300",
    //                     "image_url_landscape" => "https://picsum.photos/536/354",
    //                     "title" => "Laravel websocket | Chat Application",
    //                     "date" =>"August 27, 2023",
    //                     "description" => "how to learn about websocket development",
    //                     "tags" =>"tag1,tag2,tag3"
    //                     ]
    //                 ],
    
    //             "recents" =>[
    //                 [
    //                 "url" =>"/",
    //                 "is_trending" => true,
    //                 "author" => "sonu",
    //                 "author_image_url" => "https://avatars.githubusercontent.com/u/110038971?v=4",
    //                 "image_url_portait" => "https://picsum.photos/200/300",
    //                 "image_url_landscape" => "https://picsum.photos/536/354",
    //                 "title" => "Laravel websocket | Chat Application",
    //                 "date" =>"August 27, 2023",
    //                 "description" => "how to learn about websocket development",
    //                 "tags" =>"tag1,tag2,tag3"
    //                 ],
    //                 [
    //                     "url" =>"/",
    //                     "is_trending" => true,
    //                     "author" => "sonu",
    //                     "author_image_url" => "https://avatars.githubusercontent.com/u/110038971?v=4",
    //                     "image_url_portait" => "https://picsum.photos/200/300",
    //                     "image_url_landscape" => "https://picsum.photos/536/354",
    //                     "title" => "Laravel websocket | Chat Application",
    //                     "date" =>"August 27, 2023",
    //                     "description" => "how to learn about websocket development",
    //                     "tags" =>"tag1,tag2,tag3"
    //                 ],
    //                 [
    //                     "url" =>"/",
    //                     "is_trending" => true,
    //                     "author" => "sonu",
    //                     "author_image_url" => "https://avatars.githubusercontent.com/u/110038971?v=4",
    //                     "image_url_portait" => "https://picsum.photos/id/237/200/300",
    //                     "image_url_landscape" => "https://picsum.photos/id/237/536/354",
    //                     "title" => "Laravel websocket | Chat Application",
    //                     "date" =>"August 27, 2023",
    //                     "description" => "how to learn about websocket development",
    //                     "tags" =>"tag1,tag2,tag3"
    //                     ]
    //                 ],
    //             "tags" => [
    //                         [
    //                             "url" => "/",
    //                             "name" => "laravel"
    //                         ],
    //                         [
    //                             "url" => "/",
    //                             "name" => "laravel"
    //                         ],
    //                         [
    //                             "url" => "/",
    //                             "name" => "laravel"
    //                         ]
    //             ]
    //     ]);
    // });

});


