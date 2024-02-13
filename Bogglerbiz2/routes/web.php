<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\GptSessionController;
use App\Http\Controllers\trainmodelController;
use App\Http\Controllers\portal\AskAiController;
use App\Http\Controllers\portal\UsersController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\portal\AiModelController;
use App\Http\Controllers\portal\ChatGptController;
use App\Http\Controllers\portal\SubscripController;
use App\Http\Controllers\portal\dashboardController;
use App\Http\Controllers\sociallogin\GoogleLoginController;
use App\Http\Controllers\WidgetController;

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


Route::post('load-sessions', [GptSessionController::class,'loadSessions']);

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/checkout/{id}', [homeController::class, 'checkout'])->name('checkout');
Route::get('/checkout-success', [homeController::class, 'checkoutSuccess'])->name('checkout-success');
Route::get('/checkout-cancel', [homeController::class, 'checkoutCancel'])->name('checkout-cancel');
Route::post(
    'stripe/webhook',
    [homeController::class,'webhook']
);


Route::get('/google/redirect', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');



Route::post('/handleVisitor', [VisitorController::class, 'handleVisitor'])->name('handleVisitor');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'verified')->group(function () {

    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

    // users and mu profile
    Route::resource('/users', UsersController::class);
    Route::get('/myprofile', [UsersController::class, 'myprofile'])->name('show.myprofile');
    Route::get('edit/myprofile', [UsersController::class, 'editMyProfile'])->name('edit.myprofile');
   
    // Route::post('/aimodel', [trainmodelController::class, 'store'])->name('trainmodel.store');


    // subscription
    Route::resource('/subscriptions', SubscripController::class);

    // Ask ai
    Route::resource('/askai', AskAiController::class);
    Route::get('/user/feedback', [AskAiController::class,'feedback'])->name('users.feedback');
    Route::get('widget-code/{uid?}', [WidgetController::class,'index'])->name('widget');

    // Ai Model
    Route::resource('/aimodel', TrainmodelController::class)->names([
        'index' => 'aimodel.index',
        'create' => 'aimodel.create',
        'store' => 'aimodel.store',
        'show' => 'aimodel.show',
        'edit' => 'aimodel.edit',
        'update' => 'aimodel.update',
        'destroy' => 'aimodel.destroy',
    ]);

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';







Route::get('/billing-portal', function (Request $request) {
    return $request->user()->redirectToBillingPortal();
});
Route::get('/', [homeController::class, 'index'])->name('home');

Route::view('/about', 'pages.about');
Route::view('/faq', 'pages.faq');
Route::view('/Fazmain', 'pages.Fazmain');
Route::view('/privacy', 'pages.privacy');
Route::view('/refundPolicy', 'pages.refundPolicy');
Route::view('/term', 'pages.term');
Route::view('/work', 'pages.work');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/plan/{plan}', [PlanController::class, 'show'])->name('Plans.show');
    Route::get('/subscription/{id}', [SubscriptionController::class, 'create'])->name('subscription.create');
    Route::get('/subscription/{id}/payments', [SubscriptionController::class, 'payments'])->name('subscription.payments');
    Route::get('/stripe/success/{id}', [SubscriptionController::class, 'subscribed'])->name('stripe.success');

    // chat with ai
    Route::get('chat-now', [ChatGptController::class, 'index']);


    
});

// require __DIR__.'/auth.php';

