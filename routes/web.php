<?php

use App\Http\Controllers\JoinedMembersController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PostsController;

use Illuminate\Support\Facades\Route;

use App\Models\InternationalCommittee;
use App\Models\EducationAndTraining;
use App\Models\CommunityOutreach;
use App\Models\Empowerment;
use App\Models\AboutGuinea;
use App\Models\HealthCare;
use App\Models\Mission;
use App\Models\Leader;
use App\Models\FAQ;

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

// ABOUT US
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/mission', function () {
    $mission = Mission::first();
    return view('mission')->with('mission', $mission);
})->name('mission');

Route::get('/about_guinea', function () {
    $aboutGuinea = AboutGuinea::first();
    return view('about_guinea')->with('aboutGuinea', $aboutGuinea);
})->name('about_guinea');

Route::get('/leadership', function () {
    $leaders = Leader::all();
    return view('leadership')->with('leaders', $leaders);
})->name('leadership');

Route::get('/international_committee', function () {
    $members =  InternationalCommittee::all();
    return view('international_committee')->with('members', $members);
})->name('international_committee');

// PROGRAMS
Route::get('/education_and_training', function () {
    $education_and_training = EducationAndTraining::first();
    return view('education_and_training')->with('education_and_training', $education_and_training);
})->name('education_and_training');

Route::get('/health_care', function () {
    $health_care = HealthCare::first();
    return view('health_care')->with('health_care', $health_care);
})->name('health_care');

Route::post('/news_letter', [NewsLetterController::class, 'store'])->name('create_news_letter');

Route::get('/empowerment', function () {
    $empowerment = Empowerment::first();
    return view('empowerment')->with('empowerment', $empowerment);
})->name('empowerment');

Route::get('/community_outreach', function () {
    $community_outreach = CommunityOutreach::first();
    return view('community_outreach')->with('community_outreach', $community_outreach);
})->name('community_outreach');

// MEMBERS
Route::get('/join_team', function () {
    return view('join_team');
})->name('join_team');

Route::resource('/join_team', JoinedMembersController::class);

Route::get('/faq', function () {
    $faqs = FAQ::all();
    return view('faq')->with('faqs', $faqs);
})->name('faq');

// Route::get('/news', function () {
//     return view('news');
// })->name('news');

Route::resource('/news', PostsController::class);

Route::resource('/contact_us', ContactUsController::class);

Route::get('/make_donation', function () {
    return view('make_donation');
})->name('make_donation');





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
