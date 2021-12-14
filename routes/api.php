<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('login', 'Auth\AuthController@login');
Route::post('login-social', 'Auth\AuthController@loginSocial');
Route::post('register', 'Auth\AuthController@register');
Route::get('home', 'Auth\AuthController@home');
Route::get('sections/{slugSection}/articles', 'Auth\AuthController@getArticlesBySections');
Route::get('article/{idArticle}', 'Auth\AuthController@getArticleDetail');
Route::get('/sections', 'Auth\AuthController@getSections');
Route::get('/banner', 'Auth\AuthController@getSlide');
Route::get('/areas', 'Auth\AuthController@getAreas');
Route::get('tips', 'Auth\AuthController@getTips');
Route::get('tips/{slug}', 'Auth\AuthController@getTipDetail');
Route::get('/company/public', 'Auth\AuthController@getCompanyData');
Route::get('/sections/{slug}', 'Auth\AuthController@getSectionDetail');

Route::get('/about/{slug}', 'Auth\AuthController@aboutXimena');

Route::get('activation/{data}/{content}', 'Auth\AuthController@activate');
Route::post('forget-password', 'Auth\AuthController@sendLinkResetPassword');
Route::post('reset-password', 'Auth\AuthController@ResetPassword');

//ruta para recetas -> esta publico temporalmente
Route::get('recipes', 'Api\RecipeController@index');
Route::get('recipes/{slug}', 'Api\RecipeController@detailRecipe');


Route::get('certificate/{id}/course/download', 'Api\CourseController@downloadPdf');

Route::patch('order/{orderId}/confirm-payment', 'Api\CourseController@confirmPaymentOrder');

//courses: colocando endpoints publicos, para pruebas
// Route::get('courses/{slug}/units', 'Api\CourseController@unitsByCourse');
// Route::get('units', 'Api\UnitController@index');
// Route::get('units/{slug}/detail','Api\UnitController@getUnitDetail');
// Route::get('units/{id}/questions', 'Api\UnitController@questionsByUnit');
// Route::get('questions', 'Api\QuestionController@index');
// Route::get('questions/{id}/answers', 'Api\QuestionController@index');
// Route::get('questions/{slug}/detail', 'Api\QuestionController@questionDetail');

// Route::post('questions/final','Api\UnitController@finishQuestion');
// Route::post('units/{id}/final','Api\UnitController@finishUnit');

// Route::post('rating/course/{slug}', 'Api\CourseController@rateAndCommentCourse');
// Route::get('comments/course/{slug}', 'Api\CourseController@commentsByCourse');

Route::group(['middleware' => 'auth.jwt'], function () {
    Route::post('logout', 'Auth\AuthController@logout');
    Route::get('current', 'Auth\AuthController@getUserDetails');
    Route::post('current/update', 'Auth\AuthController@updateUserData');
    Route::post('current/additionalInfo', 'Auth\AuthController@setAdditionalInfo');

    //courses
    Route::get('courses', 'Api\CourseController@index');
    Route::get('courses/{slug}/detail', 'Api\CourseController@detailCourse');
    Route::patch('courses/{slug}/payment', 'Api\CourseController@UserRegisterOnCourse');
    Route::post('courses/{slug}/check-free', 'Api\CourseController@checkCourseFree');

    //directions
    Route::get('address', 'Auth\AuthController@getUserAddress');
    Route::post('address/create', 'Auth\AuthController@createUserAddress');
    Route::post('address/edit/{id?}', 'Auth\AuthController@editUserAddress');
    Route::post('address/setFavorite/{id}', 'Auth\AuthController@setFavoriteUserAddress');
    Route::post('address/delete/{id}', 'Auth\AuthController@deleteUserAddress');

    Route::get('refresh', 'Auth\AuthController@refreshToken');
    //Lista de Retos por usuario
    Route::get('courses-by-user', 'Api\CourseController@coursesByUser');

    // courses
    Route::get('courses/{slug}/units', 'Api\CourseController@unitsByCourse');
    Route::get('units', 'Api\UnitController@index');
    Route::get('units/{slug}/detail', 'Api\UnitController@getUnitDetail');
    Route::get('units/{id}/questions', 'Api\UnitController@questionsByUnit');
    Route::get('questions', 'Api\QuestionController@index');
    Route::get('questions/{id}/answers', 'Api\QuestionController@index');
    Route::get('questions/{code}/detail', 'Api\QuestionController@questionDetail');
    //RUTA PARA FINALIZAR EL CURSO
    Route::post('questions/final', 'Api\UnitController@finishQuestion');
    Route::post('units/{id}/final', 'Api\UnitController@finishUnit');
    //RUTA PARA VALORACION Y COMENTARIO
    Route::post('rating/course/{slug}', 'Api\CourseController@rateAndCommentCourse');
    Route::get('comments/course/{slug}', 'Api\CourseController@commentsByCourse');
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
