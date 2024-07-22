<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\ResumeController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PortfolioController;


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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('home', [HomeController::class, 'home']);
Route::get('/', [HomeController::class, 'index']);
Route::get('about', [HomeController::class, 'about']);
Route::get('resume', [HomeController::class, 'resume']);
Route::get('portfolio', [HomeController::class, 'portfolio']);
Route::get('services', [HomeController::class, 'services']);
Route::get('contact', [HomeController::class, 'contact']);
Route::post('/contact/post', [HomeController::class, 'contact_post']);
// Admin
Route::group(['middleware' => 'admin'], function ()
{
Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
Route::get('admin/home', [DashboardController::class, 'admin_home']);
Route::post('admin/home/posts', [DashboardController::class, 'admin_home_posts']);
Route::get('admin/about', [DashboardController::class, 'admin_about']);
Route::post('admin/about/post', [DashboardController::class, 'admin_about_post']);
Route::get('admin/resume', [DashboardController::class, 'admin_resume']);
Route::get('admin/portfolio', [DashboardController::class, 'admin_portfolio']);
Route::get('admin/services', [DashboardController::class, 'admin_services']);
Route::get('admin/contact', [DashboardController::class, 'admin_contact']);
Route::get('admin/contact/delete/{id}', [DashboardController::class, 'admin_contact_delete']);
// Resume

Route::get('/admin/resume', [ResumeController::class, 'admin_resume'])->name('admin.resume');
Route::get('/admin/resume/add', [ResumeController::class, 'admin_resume_add'])->name('admin.resume.add');
Route::post('/admin/resume/add', [ResumeController::class, 'admin_resume_add_post'])->name('admin.resume.add.post');
Route::get('/admin/resume/edit/{id}', [ResumeController::class, 'admin_resume_edit'])->name('admin.resume.edit');
Route::put('/admin/resume/edit/{id}', [ResumeController::class, 'admin_resume_edit_post'])->name('admin.resume.edit.post');
Route::delete('/admin/resume/delete/{id}', [ResumeController::class, 'admin_resume_delete'])->name('admin.resume.delete');
// Portfolio
Route::get('admin/portfolio', [PortfolioController::class, 'admin_portfolio'])->name('admin.portfolio');
Route::get('admin/portfolio/add', [PortfolioController::class, 'admin_portfolio_add']);
Route::post('admin/portfolio/add', [PortfolioController::class, 'admin_portfolio_add_post']);
Route::get('admin/portfolio/edit/{id}', [PortfolioController::class, 'admin_portfolio_edit_']);
Route::put('admin/portfolio/update/{id}', [PortfolioController::class, 'admin_portfolio_update']);
Route::post('admin/portfolio/edit/{id}', [PortfolioController::class, 'admin_portfolio_edit_post']);
Route::get('admin/portfolio/delete/{id}', [PortfolioController::class, 'admin_portfolio_delete']);
// Services
Route::get('admin/services', [ServicesController::class, 'admin_services'])->name('admin.services');
Route::get('/admin/services/add', [ServicesController::class, 'admin_services_add']);
Route::post('/admin/services/add', [ServicesController::class, 'admin_services_add_post']);
Route::get('/admin/services/edit/{id}', [ServicesController::class, 'admin_services_edit']);
Route::put('/admin/services/update/{id}', [ServicesController::class, 'admin_services_update_post']);
Route::post('/admin/services/edit/{id}', [ServicesController::class, 'admin_services_edit_post']);
Route::get('/admin/services/delete/{id}', [ServicesController::class, 'admin_services_delete']);
});

Route::get('login', [AuthController::class, 'login']);
Route::post('admin_login', [AuthController::class, 'admin_login']);
Route::get('forgot',[AuthController::class, 'forgot']);
Route::get('logout', [AuthController::class, 'logout']);
Route::post('forgot_admin',[AuthController::class, 'forgot_admin']);

