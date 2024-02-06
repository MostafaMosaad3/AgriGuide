<?php


use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\logoutController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgetPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Community\QuestionCommentController;
use App\Http\Controllers\Community\QuestionController;
use App\Http\Controllers\Consultion\InstractorController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\datacontroller;
use App\Http\Controllers\GrowingTips\TipController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//protected routes
Route::group(['middleware'=>'auth:sanctum'] , function(){

    // Auth Routes
    Route::get('/profile/{id}', [ProfileController::class , 'show']);
    Route::patch('/update_profile/{id}' , [ProfileController::class , 'update']) ;
    Route::post('/email_verification' , [EmailVerificationController::class ,'email_verification' ]);
    Route::get('/send_email_verification' , [EmailVerificationController::class ,'SendEmailVerification' ]);
    Route::post('/logout' , [logoutController::class , 'logout']) ;
    Route::get('/question' ,[QuestionController::class , 'index'] );


    //Community Routes
    Route::post('/create_question' ,[QuestionController::class , 'create'] );
    Route::get('/question/{id}' , [QuestionController::class , 'show']);
    Route::post('/question/{id}' , [QuestionCommentController::class , 'add_comment']);



    //GrowingTips Routes
    Route::get('/growing_tips' , [TipController::class , 'index']) ;
    Route::get('/growing_tips/categories' , [TipController::class , 'all_categories']) ;
    Route::get('/growing_tips/categories/{id}' , [TipController::class , 'category']) ;
    Route::get('/growing_tips/{id}' , [TipController::class , 'tip']) ;



    //Consultation Routes
    Route::get('/consultation' , [InstractorController::class , 'index']);
    Route::get('/consultation/{id}' , [InstractorController::class , 'show']) ;


    //Dashboard Routes
    Route::group(['middleware' =>'admin'] , function (){
        Route::get('/posts' ,[PostController::class , 'index'] );
        Route::post('/create_post' ,[PostController::class , 'create'] );
        Route::patch('/update_post/{id}' ,[PostController::class , 'update'] );
        Route::delete('/post/{id}' ,[PostController::class , 'destroy'] );
    });

}) ;

Route::post('add_soil',[datacontroller::class,'soildata']);





//public routes
Route::post('/register' , [RegisterController::class, 'register']);
Route::post('/login' , [LoginController::class, 'login']) ;
Route::post('/forget_password' , [ForgetPasswordController::class , 'forget_password']) ;
Route::post('/reset_password' , [ResetPasswordController::class , 'reset_password']) ;



