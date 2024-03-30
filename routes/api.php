<?php


use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ResetPasswordVerificationController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\logoutController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgetPasswordController;
use App\Http\Controllers\Chat\MessageController;
use App\Http\Controllers\Community\QuestionCommentController;
use App\Http\Controllers\Community\QuestionController;
use App\Http\Controllers\Consultion\InstractorController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Disease\DiseaseController;
use App\Http\Controllers\GrowingTips\TipController;
use App\Http\Controllers\Hiring\HiringController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\WeatherController;
use App\Http\Controllers\Membership\MembershipController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\Soil\SoilController;
use App\Http\Controllers\SuitableCrops\CropController;
use App\Http\Controllers\Task\TaskController;
use App\Models\Post;
use App\Models\Question;
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
    Route::get('/send_email_verification' , [EmailVerificationController::class ,'SendEmailVerification' ]);
    Route::post('/email_verification' , [EmailVerificationController::class ,'email_verification' ]);
    Route::get('/profile', [ProfileController::class , 'profile']);
    Route::patch('/profile/update_profile' , [ProfileController::class , 'update']) ;
    Route::post('/logout' , [logoutController::class , 'logout']) ;


    //Home Routes
    Route::get('/weather', [WeatherController::class, 'getWeather']);
    Route::get('/blogs', [HomeController::class, 'blogs']);
    Route::get('/search', [HomeController::class, 'search']);


    //Service Routes
    Route::get('/services', [ServiceController::class, 'index']) ;



    //Soil Routes
    Route::get('/soils' , [SoilController::class , 'index']);
    Route::get('/soils/search' , [SoilController::class , 'search']) ;
    Route::get('/soils/soil/{name}' , [SoilController::class ,'show']) ;



    //Crops Routes
    Route::get('/crops' , [CropController::class , 'index']);
    Route::get('/crops/soils' , [CropController::class , 'soils']);
    Route::get('/crops/search' , [CropController::class , 'search']) ;
    Route::get('/crops/crop/{id}' , [CropController::class , 'show']);


    //Diseases Routes
    Route::get('/diseases' , [DiseaseController::class , 'index']);
    Route::get('/diseases/search' , [DiseaseController::class , 'search']) ;
    Route::get('/diseases/disease/{name}' , [DiseaseController::class ,'show']) ;



    //GrowingTips Routes
    Route::get('/growing_tips' , [TipController::class , 'index']) ;
    Route::get('/growing_tips/categories' , [TipController::class , 'all_categories']) ;
    Route::get('/growing_tips/categories/{id}' , [TipController::class , 'category']) ;
    Route::get('/growing_tips/{id}' , [TipController::class , 'tip']) ;



    //MembershipsLevels Routes
    Route::get('/membership' , [MembershipController::class , 'index']);
    Route::get('membership/{id}' , [MembershipController::class , 'purchase']);


    //Chat Routes
    Route::post('/send_message' , [MessageController::class , 'sendMessage']) ;
    Route::get('/receive_message/{id}' , [MessageController::class , 'receiveMessage']);
    Route::get('/conversations', [MessageController::class, 'conversations']);




    //Community Routes
    Route::group(['middleware' => 'basic_membership'] , function() {
        Route::get('/question', [QuestionController::class, 'index']);
        Route::post('/question/create_question', [QuestionController::class, 'create']);
        Route::get('/question/{id}', [QuestionController::class, 'show']);
        Route::post('/question/{id}', [QuestionCommentController::class, 'add_comment']);
        Route::post('/questions/{id}/likes', [QuestionController::class, 'add_like']);
        Route::get('/questions/{id}/likes', [QuestionController::class, 'all_likes']);
    });



    //Tasks Routes
    Route::group(['middleware' =>'basic_membership'] , function (){
        Route::get('/tasks' ,[TaskController::class , 'index'] );
        Route::post('/tasks/create_task' ,[TaskController::class , 'create'] );
        Route::get('/tasks/edit/{id}' , [TaskController::class , 'edit']) ;
        Route::patch('/tasks/update_task/{id}' ,[TaskController::class , 'update'] );
        Route::delete('/tasks/delete_task/{id}' ,[TaskController::class , 'destroy'] );
    });



    //Consultation Routes
    Route::group(['middleware'=>'premium_membership'] , function(){
        Route::get('/consultation', [InstractorController::class, 'index']);
        Route::get('/consultation/{id}', [InstractorController::class, 'show']);
    });



    //Hiring Route
    Route::post('/apply-for-hiring' , [HiringController::class , 'hiring']) ;




    //Dashboard Routes
    Route::group(['middleware' =>'admin'] , function (){
        Route::get('/posts' ,[PostController::class , 'index'] );
        Route::post('/posts/create_post' ,[PostController::class , 'create'] );
        Route::get('/posts/edit/{id}' , [PostController::class , 'edit']) ;
        Route::patch('/posts/update_post/{id}' ,[PostController::class , 'update'] );
        Route::delete('/posts/delete_post/{id}' ,[PostController::class , 'destroy'] );
    });


}) ;







//public routes
Route::post('/register' , [RegisterController::class, 'register']);
Route::post('/login' , [LoginController::class, 'login']) ;
Route::post('/forget_password' , [ForgetPasswordController::class , 'forget_password']) ;
Route::post('/forget_password_verification' , [ResetPasswordVerificationController::class , 'forget_password_verification']) ;
Route::post('/reset_password' , [ResetPasswordController::class , 'reset_password']) ;




