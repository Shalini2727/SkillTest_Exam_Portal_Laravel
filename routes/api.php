<?php
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Question;

Route::get('/categories', fn () => Category::where('status',1)->get());
Route::get('/questions', fn () => Question::with('category')->paginate(20));
