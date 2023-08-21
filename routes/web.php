<?php

use App\Models\Task;
use App\Models\ChatGroup;
use App\Models\Announcement;

use App\Models\DailyReportList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\ChatGroupController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DailyReportListController;
use App\Http\Controllers\admin\DailyReportController;
use App\Http\Controllers\admin\UserVerifiedConroller;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\admin\SopController as AdminSopController;
use App\Http\Controllers\admin\IconController as AdminIconController;
use App\Http\Controllers\admin\LinkController as AdminLinkController;
use App\Http\Controllers\admin\TeamController as AdminTeamController;
use App\Http\Controllers\admin\ClientController as AdminClientController;
use App\Http\Controllers\admin\EmployeController as AdminEmployeController;
use App\Http\Controllers\admin\MeetingController as AdminMeetingController;
use App\Http\Controllers\admin\ProfileController as AdminProfileController;
use App\Http\Controllers\admin\ProjectController as AdminProjectController;
use App\Http\Controllers\admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\admin\ChatGroupController as AdminChatGroupController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\AnnouncementController as AdminAnnouncementController;
use App\Http\Controllers\admin\UserPresenceController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\TesController;
use App\Models\TesCoding;

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

Route::get('/', function () {
    return view('auth.login');
});

// admin verified
Route::get('admin_verified', function () {
    if (Auth::user()->employe->verified == 1) {
        return redirect()->route('dashboard');
    }
    return view('admin_verified');
})->name('admin.verified')->middleware('auth');


Route::get('/message', function () {
    return view('mail.verified_message');
})->middleware(['auth', 'verified'])->name('message');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified', 'admin_verified',])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // profile user route
    Route::get('/profile/edit', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // rotu category
    Route::resource('category', CategoryController::class);
    Route::resource('folder', FolderController::class);
    Route::resource('link', LinkController::class);
    Route::resource('link', AdminLinkController::class);
    // route cliet user
    Route::resource('client', ClientController::class);

    // route project for user
    Route::resource('project', ProjectController::class);
    Route::get('my-project', [ProjectController::class, 'myProject'])->name('myProject');
    Route::get('my-project/show/{id}', [ProjectController::class, 'myProjectShow'])->name('myProject.show');
    Route::get('my-project/sop/{id}', [ProjectController::class, 'myProjectSop'])->name('myProject.sop');

    // route prosence
    Route::resource('presence', PresenceController::class);
    Route::post('/workPermit', [PresenceController::class, 'workPermit'])->name('presence.workPermit');

    // daily report list route
    Route::resource('daily-report-list', DailyReportListController::class);
    Route::get('daily-report-list-create/{id}', [DailyReportListController::class, 'create_data'])->name('report_create');

    // chat group route user
    Route::resource('chat-group', ChatGroupController::class);


    // route meeting countroller
    Route::resource('meeting', MeetingController::class);
    Route::get('meeting/create/{id}', [MeetingController::class, 'create_data'])->name('meeting.create_data');


    // route print
    Route::get('print-client-all', [PrintController::class, 'allClient'])->name('print.all-client');
    Route::get('print-client-detail/{id}', [PrintController::class, 'detailClient'])->name('print.detail-client');
    Route::get('print-project-all', [PrintController::class, 'allProject'])->name('print.all-project');
    Route::get('print-project-detail/{id}', [PrintController::class, 'detailProject'])->name('print.detail-project');
    Route::get('print-employe-all', [PrintController::class, 'allEmploye'])->name('print.all-employe');
    Route::get('print-team-all', [PrintController::class, 'allTeam'])->name('print.all-team');
    Route::get('print-team-detail/{id}', [PrintController::class, 'detailTeam'])->name('print.detail-team');
    Route::get('print-presence-all', [PrintController::class, 'allPresence'])->name('print.all-presence');
    Route::get('print-book-all', [PrintController::class, 'allBook'])->name('print.all-book');
});

Route::resource('tes-coding', TesController::class);

// admin route
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['verified', 'auth', 'role:admin', 'admin_verified']
], function () {
    // dashboard
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // category
    Route::resource('category', AdminCategoryController::class);

    // client route
    Route::resource('client', AdminClientController::class);

    // Project route
    Route::resource('project', AdminProjectController::class);

    // employe route
    Route::resource('employe', AdminEmployeController::class);

    // link rotte

    // task route
    Route::resource('task', TaskController::class);
    Route::post('task/action', [TaskController::class, 'taskAction'])->name('task.action');

    // annountcement route
    Route::resource('announcement', AdminAnnouncementController::class);

    // user verified route
    Route::get('/user-verified', [UserVerifiedConroller::class, 'index'])->name('user-verified.index');

    // profile route
    Route::resource('profile', AdminProfileController::class);

    // team Route
    Route::resource('team', AdminTeamController::class);

    // icon route
    Route::resource('icon', AdminIconController::class);

    // daily Report route
    Route::resource('daily-report', DailyReportController::class);

    // sop route
    Route::resource('sop', AdminSopController::class);
    Route::get('sop-create/{id}', [AdminSopController::class, 'create_data'])->name('sop.create_data');

    // chat group route
    Route::resource('chat-group', AdminChatGroupController::class);

    // meeting route
    Route::resource('meeting', AdminMeetingController::class);
    Route::get('meeting/create/{id}', [AdminMeetingController::class, 'create_data'])->name('meeting.create_data');

    // route presence admin
    Route::get('user-presence', [UserPresenceController::class, 'index'])->name('presence.index');
    Route::post('user-presence-clear', [UserPresenceController::class, 'clear'])->name('presence.clear');
});



require __DIR__ . '/auth.php';
