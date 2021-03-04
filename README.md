<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Step Pengerjaan project Blogpost

1. Setup konfigurasi database pada .env dan buat database baru pada phpmyadmin dengan nama blogspot
2. Pada app/Providers/AppServiceProvider tambahkan Schema::defaultStringLength(191); pada method boot()
   dan jangan lupa untuk import Illuminate\Support\Facades\Schema
3. Buat model dengan menggunakan script ---> php artisan make:model Post -m 
   (dengan menambahkan option -m ini maka model post akan sekaligus akan membuat tabel yang ada pada database atau dengan istilah migrations) --> cek pada direktori database/migrations
4. Tambahkan atribut dari file migrations tersebut (ex: 2021_03_02_022436_create_posts_table)
5. Buka terminal dan ketikkan --> php artisan migrate
   maka akan membuat tabel migrations pada database yang sudah dibikin
6. Buat controller dengan nama PostController menggunakan perintah : 
   php artisan make:controller PostController --resource --model=Post
   ini akan membuat controller dengan langsung implement model Post pada PostController
   <!-- Read data -->
7. Buat direktori layouts, part dan posts, pada resources/views
8. Pada layouts buat file baru dengan nama main.blade.php sebagai view utamanya, dan design layout dengan
   menggunakan dokumentasi boostrap
9. Pada part buat file navbar.blade.php untuk design navbar dan jumbotron.blade.php sebagai header
10. Buat layout untuk nampilin data posts pada folder posts dengan nama index.blade.php
11. Setelah itu pada PostController di method index tambahkan baris kode program berikut :
    <!-- Tambahkan pada bagian index() -->
    $posts = Post::all();
    return view('posts.index',['posts' => $posts]);
12. Pada routes/web.php ubah kode program untuk nampilin index dari project Blogpost dengan menambahkan 
    baris kode program berikut :
    Route::get('/', [PostController::class,'index'])->name('posts.index');
    Route::get('/posts', [PostController::class,'index'])->name('posts.index');
13. Untuk merubah konfigurasi timezone ubah pada bagian config/app.php dengan merubah nilai 
    'timezone' =>'UTC' menjadi 'timezone' => 'Asia/Jakarta'
14. Run pada browser (jangan lupa jalankan server dengan perintah php artisan serve) 
    dengan URL: localhost:8000/blogpost
    <!-- Insert/Create -->
15. Buat file baru dengan nama create.blade.php pada direktori resource/views/posts untuk view dari insert
    data dan masukkan kode program view nya
16. Pada method store() di PostController.php buat baris program untuk mengeksekusi inputan dari user dan
    store ke database.
17. Tambahkan variable $fillable di model Post dengan atribut yang sesuai dengan tabel post
18. Kemudian buka routes/web.php panggil method posts.create() untuk return view dan method posts.store() 
    untuk store data ke Database.
    <!-- Menampilkan detail data -->
19. Buka PostController.php dan tambahkan baris kode program berikut di dalam method show()
    return view('posts.show',['post' => $post]);
20. Buat file show.blade.php di direktori resource/views/posts sebagai file View detail data
21. Tambahkan kode program dan logic untuk nampilin detail data
22. Jangan lupa tambahkan route dari get detail data tersebut di route/web.php
    Route::get('/posts/{post}', [PostController::class,'show'])->name('posts.show');
    <!-- Update data -->
23. Buat file edit.blade.php para resource/views/posts dan tambahkan baris kode program untuk form edit data
24. Buka file index.blade.php pada direktori resource/views/posts dan tambahkan button untuk action edit
    dengan mengubah anchor link yang ada pada card item data post tersebut
25. Tambahkan baris program untuk return view dari edit.blade.php pada method edit()
26. Buat logic untuk mengubah data pada bagian method update()
27. Run pada browser