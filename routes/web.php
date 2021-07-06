<?php

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
    return view('pages/home', [
        'title' => 'Home'
    ]);
});
Route::get('/about', function () {
    return view('pages/about', [
        'title' => 'About',
        'name' => 'Takemichy',
        'email' => 'takemichy@toman.jpn',
    ]);
});

Route::get('/blog/post/{slug}', function ($slug) {
    $posts_article = [
        [
            'title' => 'How to create Login page Using Jetstream',
            'author' => 'Mamat Kompresor',
            'slug' => 'how_to_create_login_page_using_jetstream',
            'article' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex sequi aperiam est quis, ipsum, at sunt in veritatis
            repellendus aliquam cumque itaque laudantium, soluta maiores voluptatibus et voluptatem! Saepe atque soluta ex cumque
            ducimus eligendi cupiditate ipsam labore nobis. Provident earum, aspernatur repudiandae blanditiis possimus itaque
            voluptatum corporis? Dolorum voluptatum quo eligendi facere vero fugit corrupti earum incidunt laborum tempore fugiat,
            debitis corporis obcaecati excepturi eum. Quaerat at nulla vero excepturi praesentium mollitia dolorum eos.'
        ],
        [
            'title' => 'How to create Animation page Using GSAP',
            'author' => 'Asep Rempag',
            'slug' => 'how_to_create_animation_page_using_gsap',
            'article' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est eos, molestiae delectus, sed harum accusantium laborum
            ipsam perferendis porro voluptates quidem eveniet impedit beatae quam. Temporibus reiciendis porro a neque qui nemo,
            consectetur officiis rerum incidunt amet voluptatum velit laboriosam libero ea cumque maiores explicabo architecto eius
            expedita ad modi error dolor? Quo saepe minus aliquid illo quas sit harum perspiciatis optio dolores a natus deserunt
            magnam sunt rerum est, mollitia autem repudiandae quae voluptatem dignissimos eveniet ducimus beatae et! Cumque, qui
            quis ut soluta eum nobis doloremque inventore sint vel possimus et blanditiis nostrum magnam. Facilis tenetur expedita
            magni!'
        ],
    ];

    $article = []; 
    foreach ($posts_article as $post) {
        if($post['slug'] == $slug){
            $article = $post;
        }   
    }
    
    return view('pages/post', [
        'title' => 'Article',
        'article' => $article
    ]);
});


Route::get('/blog', function () {
    $posts_article = [
        [
            'title' => 'How to create Login page Using Jetstream',
            'author' => 'Mamat Kompresor',
            'slug' => 'how_to_create_login_page_using_jetstream',
            'article' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio nemo eius recusandae! Esse illum rem minima.
            Harum, tenetur.'
        ],
        [
            'title' => 'How to create Animation page Using GSAP',
            'author' => 'Asep Rempag',
            'slug' => 'how_to_create_animation_page_using_gsap',
            'article' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam ducimus ipsam iusto accusamus consectetur
            optio rem molestiae nemo beatae inventore.'
        ],
    ];

    return view('pages/blog', [
        'title' => 'Blog',
        'articles' => $posts_article
        
    ]);
});