<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/products', function () {
    return view('products');
});



use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/admin/contacts', [ContactController::class, 'index'])->name('contacts.index');


Route::get('/jig-fixture-manufacturing-company-kolkata', function () {
    return view('jig&Fixture');
})->name('jig-&-fixture');

Route::get('/cnc-machining-services-kolkata', function () {
    return view('machine');
})->name('machines');

Route::get('/mould-moulding-manufacturing-company-kolkata', function () {
    return view('mouldsMoulding');
})->name('moulds-Moulding');

Route::get('/valve-manufacturing-company-kolkata', function () {
    return view('valves');
})->name('valves');

use App\Http\Controllers\BlogController;

Route::resource('admin/blogs', BlogController::class);
Route::get('admin/blogs/{id}/restore', [BlogController::class, 'restore'])->name('blogs.restore');
Route::delete('admin/blogs/{id}/force-delete', [BlogController::class, 'forceDelete'])->name('blogs.forceDelete');
// Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog', [BlogController::class, 'home'])->name('home');

Route::get('/blog/{post_url}', [BlogController::class, 'getBlog'])->name('blog.show');


Route::get('/admin-avira-digital', function () {
    return view('admin');
});

use App\Http\Controllers\TagController;

Route::resource('/admin/tags', TagController::class);
