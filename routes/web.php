<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('about/', function () {
//     return "page";
// });
// --------------------------------------------------------
// ep8
// Route::get('/about', function () {
//     // return "product id : $id , name: $name ";

//     // return "<a href='/contact'> Contact Page </a>";
//     return "<a href='".route('contact')."'> Contact Page </a>";
// });

// Route::get("/contact", function () {
//     return "Contact Page";
// })->name('contact');


// Route::get('/about', function () {
//     // return "product id : $id , name: $name ";

//     // return "<a href='/contact'> Contact Page </a>";
//     return "<a href='".route('contact', [12,"sss"])."'> Contact Page </a>";
// });

// Route::get("/contact/test/{id}/{name}", function ($id, $name) {
//     return "Contact Page id :$id , name :$name";
// })->name('contact');


// --------------------------------------------------------
// ep9
// Route::prefix('/users')->group(function () {

//     Route::get('/', function () {
//         return "users list";
//     });

//     Route::get('/create', function () {
//         return "users create";
//     });

//     Route::get('/{id}', function ($id) {
//         return "users id :$id";
//     });

// });


// --------------------------------------------------------
// ep10
// Route::get("/create", function () {
//     return "home";
// });



// Route::fallback(function () {
//     return "page note found";
// });

// --------------------------------------------------------
// ep11
// Route::get("/about", function () {
//     return view('about');
// });


// --------------------------------------------------------
// ep12
// Route::get("/about", function () {
//     $str = "weoprog.io";
//     $str2 = "ali sheikh";
//     // first way
//     // return view('about', ['text' => $str , 'name' => $str2]);

//     // second way
//     return view('about', compact('str', 'str2'));
// });


// --------------------------------------------------------
// ep13
Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
