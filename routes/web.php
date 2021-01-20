<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BanniereController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CardrapidController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactpageController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PrimetController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SloganController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TestimonialtController;
use App\Http\Controllers\TestimonialTitleController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\WelcomeController;
use App\Models\Newsletter;
use App\Models\Testimonialt;
use App\Models\TestimonialTitle;
use Database\Seeders\CardrapidSeeder;
use Database\Seeders\PromotionSeeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [WelcomeController::class, "index"])->name("welcome");

Route::get('/service', [ServiceController::class, "index"])->name("service");

Route::get('/blog', [BlogController::class, "index"])->name("blog");

Route::get('/contact', [ContactpageController::class, "index"])->name("contact");

Route::get('show-blog/{id}', [BlogController::class, "show"]);

Route::post('commentaire/{id}', [CommentaireController::class, "store"]);



// Route::get('/blog-post', function () {
//     return view('blog-post');
// })->name("blog-post");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//backend
Route::get('/backend.profile', function () {
    return view('backend.profile');
})->name("profile");

//resource
Route::resource("/admin/user",UserController::class)->middleware("isConnected");

Route::resource("/admin/navbar",NavbarController::class)->middleware(["isConnected", "isAdminandwebmaster"]);

Route::resource("/admin/banniere",BanniereController::class)->middleware(["isConnected", "isAdminandwebmaster"]);

Route::resource("/admin/slogan",SloganController::class)->middleware(["isConnected", "isAdminandwebmaster"]);

Route::resource("/admin/cardrapid",CardrapidController::class)->middleware(["isConnected", "isAdminandwebmaster"]);

Route::resource("/admin/about",AboutController::class)->middleware(["isConnected", "isAdminandwebmaster"]);

Route::resource("/admin/video",VideoController::class)->middleware(["isConnected", "isAdminandwebmaster"]);

Route::resource("/admin/testimonial", TestimonialController::class)->middleware(["isConnected", "isAdminandwebmaster"]);

Route::resource("/admin/title", TitleController::class)->middleware(["isConnected", "isAdminandwebmaster"]);

Route::resource("/admin/team", TeamController::class)->middleware(["isConnected", "isAdminandwebmaster"]);

Route::resource("/admin/equipe", EquipeController::class)->middleware(["isConnected", "isAdminandwebmaster"]);

Route::resource("/admin/promotion", PromotionController::class)->middleware(["isConnected","isAdminandwebmaster"]);

Route::post("/send-email", [MailController ::class, "sendMail"]);

Route::resource("/admin/contact", ContactController::class)->middleware(["isConnected", "isAdminandwebmaster"]);

Route::resource("/admin/primet", PrimetController::class)->middleware(["isConnected","isAdminandwebmaster"]);

Route::resource("/admin/newsletter", NewsletterController::class)->middleware(["isConnected", "isAdminandwebmaster"]);

Route::resource("/admin/map", MapController::class)->middleware(["isConnected", "isAdminandwebmaster"]);

Route::resource("/admin/article", ArticleController::class)->middleware(["isConnected","isAdminandwebmasterredacteur"]);

Route::get("/admin/edituser", [AdminController::class, "index"])->middleware(["isConnected","isAdminandwebmaster"]);

Route::get("/admin/edituser/{id}/edit", [AdminController::class, "edit"])->middleware(["isConnected","isAdminandwebmaster"]);

route::post("/admin/edituser/{id}/update", [AdminController::class, 'update'])->middleware(["isConnected","isAdminandwebmaster"]);

Route::post('/send-article/{id}', [ArticleController::class, 'sendArticle'])->middleware(["isConnected","isAdminandwebmaster"]);


//admin lte
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
