<?php

use App\Http\Controllers\DefaultController;
use App\Http\Controllers\DemoRequestController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/request-demo', 'request-demo')->name('request-demo');
Route::post('/request-demo', [DemoRequestController::class, 'store'])->name('request-demo.store');
Route::view('/pricing', 'pages.pricing')->name('pricing');
Route::view('/solutions', 'pages.solutions')->name('solutions');
Route::view('/resources', 'pages.resources')->name('resources');
Route::view('/resources/weekly-hiring-brief', 'pages.resources.weekly-hiring-brief')->name('resources.weekly-hiring-brief');
Route::view('/resources/structured-interview-kit', 'pages.resources.structured-interview-kit')->name('resources.structured-interview-kit');
Route::view('/resources/candidate-experience-blueprint', 'pages.resources.candidate-experience-blueprint')->name('resources.candidate-experience-blueprint');
Route::view('/resources/talent-ops-academy', 'pages.resources.talent-ops-academy')->name('resources.talent-ops-academy');
Route::view('/resources/live-labs-ama', 'pages.resources.live-labs-ama')->name('resources.live-labs-ama');
Route::view('/resources/hiring-leader-stories', 'pages.resources.hiring-leader-stories')->name('resources.hiring-leader-stories');
Route::view('/resources/hiring-operations-starter-pack', 'pages.resources.hiring-operations-starter-pack')->name('resources.hiring-operations-starter-pack');
Route::view('/company', 'pages.company')->name('company');
Route::view('/team', 'pages.team')->name('team');

Route::get('/company-login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('company.login');



Route::view('/registration-pending', 'auth.registration-pending')->name('registration.pending');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/jobs/{slug}', [DefaultController::class, 'jobDetail'])->name('jobs.detail');
Route::get('/jobs/{slug}/apply', [DefaultController::class, 'jobApply'])->name('jobs.apply');
Route::post('/jobs/{slug}/apply', [DefaultController::class, 'applicationsStore'])->name('jobs.apply.store');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', function () {
        $role = Auth::user()->role;

        return match ($role) {
            'admin' => redirect()->route('admin.dashboard'),
            'recruiter' => redirect()->route('recruiter.dashboard'),
            default => redirect()->route('home'),
        };
    });

    Route::middleware('role:recruiter')->group(function () {
        Route::get('/recruiter/jobs', [ListingController::class, 'index'])->name('recruiter.jobs');
        Route::get('/recruiter/jobs/create', [ListingController::class, 'create'])->name('recruiter.job.create');
        Route::post('/recruiter/jobs/store', [ListingController::class, 'store'])->name('recruiter.job.store');
        Route::get('/recruiter/jobs/view-candidates/{slug}', [ListingController::class, 'viewCandidate'])->name('recruiter.jobs.candidates');
        Route::get('/recruiter/jobs/view-candidates/{slug}/profile', [ListingController::class, 'viewCandidateProfile'])->name('recruiter.jobs.candidate.profile');
        Route::view('/recruiter/jobs/view-candidates/move-stage', 'recruiter.jobs-candidate-move-stage')->name('recruiter.jobs.candidate.move-stage');

        Route::get('/recruiter/dashboard', function () {
            return view('recruiter.dashboard');
        })->name('recruiter.dashboard');

        Route::get('/recruiter/candidates', function () {
            return view('recruiter.candidates');
        })->name('recruiter.candidates');

        Route::get('/recruiter/pipeline', function () {
            return view('recruiter.pipeline');
        })->name('recruiter.pipeline');

        Route::get('/recruiter/interviews', function () {
            return view('recruiter.interviews');
        })->name('recruiter.interviews');

        Route::get('/recruiter/messages', function () {
            return view('recruiter.messages');
        })->name('recruiter.messages');

        Route::get('/recruiter/analytics', function () {
            return view('recruiter.analytics');
        })->name('recruiter.analytics');

        Route::get('/recruiter/settings', function () {
            return view('recruiter.settings');
        })->name('recruiter.settings');
    });

    Route::middleware('role:admin')->group(function () {
        Route::get('admin/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::get('/admin/users', function () {
            return view('admin.users');
        })->name('admin.users');

        Route::get('/admin/recruiters', function () {
            return view('admin.recruiters');
        })->name('admin.recruiters');

        Route::get('/admin/companies', function () {
            return view('admin.companies');
        })->name('admin.companies');

        Route::get('/admin/jobs', function () {
            return view('admin.jobs');
        })->name('admin.jobs');

        Route::get('/admin/applications', function () {
            return view('admin.applications');
        })->name('admin.applications');

        Route::get('/admin/moderation', function () {
            return view('admin.moderation');
        })->name('admin.moderation');

        Route::get('/admin/reports', function () {
            return view('admin.reports');
        })->name('admin.reports');

        Route::get('/admin/analytics', function () {
            return view('admin.analytics');
        })->name('admin.analytics');

        Route::get('/admin/settings', function () {
            return view('admin.settings');
        })->name('admin.settings');
    });
});

require __DIR__ . '/auth.php';
