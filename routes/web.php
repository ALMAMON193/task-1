<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//exam type all route
Route::get('/exam/type/view', [NoteController::class, 'View'])->name('note.view');
Route::get('/exam/type/add', [NoteController::class, 'Add'])->name('note.add');
Route::post('/exam/type/store', [NoteController::class, 'store'])->name('note.store');
Route::get('/exam/type/edit/{exam_type_id}', [NoteController::class, 'Edit'])->name('note.edit');
Route::post('/exam/type/update/{exam_type_id}', [NoteController::class, 'Update'])->name('note.update');
Route::get('/exam/type/delete/{exam_type_id}', [NoteController::class, 'Delete'])->name('note.delete');
Route::get('/notes/search', [NoteController::class, 'search'])->name('notes.search');


require __DIR__ . '/auth.php';
