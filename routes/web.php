<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\News;
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

Route::get('/Login',[UserController::class, 'getLoginView'])->middleware('guest');
Route::post('/Login',[UserController::class, 'login']);
Route::post('/Logout',[UserController::class, 'logout']);
Route::get('/Sign-up', [UserController::class, 'getRegisterView'])->middleware('guest');
Route::post('/Sign-up', [UserController::class, 'register']);
Route::get('/', [UserController::class, 'getHomeView']);




Route::get('/Profile',[UserController::class, 'getProfileView']);
Route::post('/Profile/UpdateProfile/{id}',[UserController::class, 'updateProfile']);



Route::get('/Games',[GameController::class, 'getGameView']);
Route::get('/Games/Platform/{platform}',[GameController::class, 'getGameViewbyPlatform']);
Route::get('/Games/Genre/{genre}',[GameController::class, 'getGameViewbyGenre']);
Route::get('/Games/{id}',[GameController::class, 'getGameDetailView']);
Route::post('/Games/{id}',[ReviewController::class, 'createReview']);
Route::post('/Games/UpdateReview/{id}',[ReviewController::class, 'updateReview']);
Route::post('/Games/DeleteReview/{id}',[ReviewController::class, 'deleteReview']);



Route::get('/News',[NewsController::class, 'getNewsView']);
Route::get('/News/{id}',[NewsController::class, 'getNewsDetailView']);



Route::get('/Community',[ForumController::class, 'getForumView']);
Route::get('/Community/Forum/{id}',[ForumController::class, 'getForumDetailView']);
Route::post('/Community/Forum/CreateComment/{id}',[CommentController::class, 'createComment']);
Route::post('/Community/Forum/UpdateComment/{id}',[CommentController::class, 'updateComment']);
Route::post('/Community/Forum/DeleteComment/{id}',[CommentController::class, 'deleteComment']);



Route::get('/CreatorStudio/Overview',[UserController::class, 'getCreatorStudioOverviewView']);

Route::get('/CreatorStudio/Game/CreateGame',[GameController::class, 'getCreateGameFormView']);
Route::post('/CreatorStudio/Game/CreateGame',[GameController::class, 'createGame']);
Route::get('/CreatorStudio/Games',[GameController::class, 'getCreatorStudioGamesView']);
Route::get('/CreatorStudio/Games/GameDetail/{id}',[GameController::class, 'getCreatorStudioGameDetailFormView']);
Route::post('/CreatorStudio/Game/UpdateGame/{id}',[GameController::class, 'updateGame']);
Route::post('/CreatorStudio/Game/DeleteGame/{id}',[GameController::class, 'deleteGame']);

Route::get('/CreatorStudio/Forum/CreateForum',[ForumController::class, 'getCreateForumFormView']);
Route::post('/CreatorStudio/Forum/CreateForum',[ForumController::class, 'createForum']);
Route::get('/CreatorStudio/Forums',[ForumController::class, 'getCreatorStudioForumsView']);
Route::get('/CreatorStudio/Forums/ForumDetail/{id}',[ForumController::class, 'getCreatorStudioForumDetailFormView']);
Route::post('/CreatorStudio/Forum/UpdateForum/{id}',[ForumController::class, 'updateForum']);
Route::post('/CreatorStudio/Forum/DeleteForum/{id}',[ForumController::class, 'deleteForum']);



Route::get('/AppManagement/Overview',[UserController::class, 'getAppManagementOverviewView']);

Route::get('/AppManagement/News/CreateNews',[NewsController::class, 'getCreateNewsFormView']);
Route::post('/AppManagement/News/CreateNews',[NewsController::class, 'createNews']);
Route::get('/AppManagement/News',[NewsController::class, 'getAppManagementNewsView']);
Route::get('/AppManagement/News/NewsDetail/{id}',[NewsController::class, 'getNewsDetailFormView']);
Route::post('/AppManagement/News/UpdateNews/{id}',[NewsController::class, 'updateNews']);
Route::post('/AppManagement/News/DeleteNews/{id}',[NewsController::class, 'deleteNews']);






