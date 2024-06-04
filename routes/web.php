<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class,'index'])
    ->name('student.index'); 
Route::get('/students/create', [StudentController::class,'create'])
    ->name('student.create');
Route::post('/students/store', [StudentController::class,'store'])
    ->name('student.store');
Route::get('/students/{id}/edit', [StudentController::class,'edit'])
    ->name('student.edit');
Route::put('/students/{id}/update', [StudentController::class,'update'])
    ->name('student.update');
Route::delete('/students/{id}/delete', [StudentController::class,'destroy'])
    ->name('student.delete');
Route::get('/students/{id}/show', [StudentController::class,'show'])
    ->name('student.show');

Route::get('/storage/students/{filename}', function ($filename) {
        $path = storage_path('/storage/app/public/students/' . $filename);
    
        if (!File::exists($path)) {
            abort(404);
        }
    
        $file = File::get($path);
        $type = File::mimeType($path);
    
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
    
        return $response;
    })->name('students.image');
