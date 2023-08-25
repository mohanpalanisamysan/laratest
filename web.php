<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;

// Primary
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\NewUserController;
use App\Http\Controllers\NewUserStudentController;

//Admin
use App\Http\Controllers\Admin\Users\AdminUsersController;

use App\Http\Controllers\Admin\School\AdminSchoolController;
use App\Http\Controllers\Admin\School\AdminClassController;
use App\Http\Controllers\Admin\Students\Dev\AdminJohnWhiteMoreCategoryController;
use App\Http\Controllers\Admin\Students\Dev\AdminSwotCategoriesController;
use App\Http\Controllers\Admin\Students\Dev\AdminLeadershipCategoriesController;

use App\Http\Controllers\Admin\Students\SoftSkills\AdminSoftSkillsCategoriesController;
use App\Http\Controllers\Admin\Students\SoftSkills\AdminSoftSkillsCourseController;
use App\Http\Controllers\Admin\Students\SoftSkills\AdminSoftSkillsUnitController;
use App\Http\Controllers\Admin\Students\SoftSkills\AdminSoftSkillsModuleController;
use App\Http\Controllers\Admin\Students\SoftSkills\AdminSoftSkillsChapterController;
use App\Http\Controllers\Admin\Students\SoftSkills\AdminSoftSkillsTopicController;

//Principal
use App\Http\Controllers\Principal\PrincipalSchoolController;
use App\Http\Controllers\Principal\School\PrincipalSchoolClassController;
use App\Http\Controllers\Principal\Home\PrincipalHomePageController;

//Student
use App\Http\Controllers\Student\Home\StudentHomePageController;

use App\Http\Controllers\Student\Dev\StudentEisenhowerMatrixController;
use App\Http\Controllers\Student\Dev\StudentWhiteMoreController;
use App\Http\Controllers\Student\Dev\StudentSwotController;
use App\Http\Controllers\Student\Dev\StudentLeadershipController;
use App\Http\Controllers\Student\Dev\StudentProblemsolvingController;
use App\Http\Controllers\Student\Dev\StudentFTFController;
use App\Http\Controllers\Student\Dev\StudentTwentyOneDaysController;

// Student - Softskills
use App\Http\Controllers\Student\SoftSkills\StudentSoftSkillsCategoriesController;

use App\Http\Controllers\Student\SoftSkills\StudentSoftSkillsCoursesController;
use App\Http\Controllers\Student\SoftSkills\StudentSoftSkillsUnitsController;
use App\Http\Controllers\Student\SoftSkills\StudentSoftSkillsModulesController;

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
    Route::get('/',[HomeController::class, 'home']);

    Route::get('/dashboard',[DashboardController::class, 'dashboard']);

    // Login

    Route::get('/login',[AuthController::class, 'login']);
    Route::post('login', [AuthController::class, 'AuthLogin']);
    
    // Register

    Route::get('/register',[AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'AuthRegister']);
    
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('forgot-password', [AuthController::class, 'forgotpassword']);
    Route::post('forgot-password', [AuthController::class, 'PostForgotPassword']);
    Route::get('reset/{token}', [AuthController::class, 'reset']);
    Route::post('reset/{token}', [AuthController::class, 'PostReset']);
    
    // New User

    Route::get('/newuser',[NewUserController::class, 'NewUserSetup']);
    Route::post('/newuser',[NewUserController::class, 'NewUserSetupFormValue']);

    // New User - Student

    Route::get('/newuser-student',[NewUserStudentController::class, 'NewUserStudentSetup']);
    Route::post('/newuser-student',[NewUserStudentController::class, 'NewUserStudentSetupFormValue']);

    // Admin Start

    Route::group(['middleware' => 'admin'], function() {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    // ADMIN - Users Management

    Route::get('/admin/dashboard/users/users-list', [ AdminUsersController::class, 'UsersList' ]);
    Route::get('/admin/dashboard/users/new-users-list', [ AdminUsersController::class, 'NewUsersList' ]);
    Route::get('/admin/dashboard/users/new-users-anonymous-list', [ AdminUsersController::class, 'NewUsersAnonymousList' ]);
  
    Route::get('/admin/dashboard/users/users-add', [ AdminUsersController::class, 'UsersAdd' ]);
    Route::post('/admin/dashboard/users/users-add', [ AdminUsersController::class, 'UsersAddFormValue' ]);
    Route::get('/admin/dashboard/users/users-edit/{id}', [ AdminUsersController::class, 'UsersEdit' ]);
    Route::post('/admin/dashboard/users/users-edit/{id}', [ AdminUsersController::class, 'UsersEditFormValue' ]);
    Route::get('/admin/dashboard/users/users-delete/{id}', [ AdminUsersController::class, 'UsersDelete' ]);
    Route::get('/admin/dashboard/users/users-detail/{id}', [ AdminUsersController::class, 'UsersDetail' ]);

    // ADMIN - Schools Management

    Route::get('/admin/dashboard/schools/school-list', [ AdminSchoolController::class, 'SchoolsList' ]);
    Route::get('/admin/dashboard/schools/school-add', [ AdminSchoolController::class, 'SchoolsAdd' ]);
    Route::post('/admin/dashboard/schools/school-add', [ AdminSchoolController::class, 'SchoolsAddFormValue' ]);
    Route::get('/admin/dashboard/schools/school-edit/{id}', [ AdminSchoolController::class, 'SchoolsEdit' ]);
    Route::post('/admin/dashboard/schools/school-edit/{id}', [ AdminSchoolController::class, 'SchoolsEditFormValue' ]);
    Route::get('/admin/dashboard/schools/school-delete/{id}', [ AdminSchoolController::class, 'SchoolsDelete' ]);
    Route::get('/admin/dashboard/schools/school-detail/{id}', [ AdminSchoolController::class, 'SchoolsDetail' ]);

    // ADMIN - Class Management

    Route::get('/admin/dashboard/class/class-list', [ AdminClassController::class, 'ClassList' ]);
    Route::get('/admin/dashboard/class/class-add', [ AdminClassController::class, 'ClassAdd' ]);
    Route::post('/admin/dashboard/class/class-add', [ AdminClassController::class, 'ClassAddFormValue' ]);
    Route::get('/admin/dashboard/class/class-edit/{id}', [ AdminClassController::class, 'ClassEdit' ]);
    Route::post('/admin/dashboard/class/class-edit/{id}', [ AdminClassController::class, 'ClassEditFormValue' ]);
    Route::get('/admin/dashboard/class/class-delete/{id}', [ AdminClassController::class, 'ClassDelete' ]);
    Route::get('/admin/dashboard/class/class-detail/{id}', [ AdminClassController::class, 'ClassDetail' ]);

    // ADMIN - Development - JohnWhiteMore Model

    Route::get('/admin/dashboard/students/dev/johnwhitemore/johnwhitemoremodelcategory-list', [ AdminJohnWhiteMoreCategoryController::class, 'JohnwhitemoremodelcategoryList' ]);
    Route::get('/admin/dashboard/students/dev/johnwhitemore/johnwhitemoremodelcategory-add', [ AdminJohnWhiteMoreCategoryController::class, 'JohnwhitemoremodelcategoryAdd' ]);
    Route::post('/admin/dashboard/students/dev/johnwhitemore/johnwhitemoremodelcategory-add', [ AdminJohnWhiteMoreCategoryController::class, 'JohnwhitemoremodelcategoryAddFormValue' ]);
    Route::get('/admin/dashboard/students/dev/johnwhitemore/johnwhitemoremodelcategory-edit/{id}', [ AdminJohnWhiteMoreCategoryController::class, 'JohnwhitemoremodelcategoryEdit' ]);
    Route::post('/admin/dashboard/students/dev/johnwhitemore/johnwhitemoremodelcategory-edit/{id}', [ AdminJohnWhiteMoreCategoryController::class, 'JohnwhitemoremodelcategoryEditFormValue' ]);
    Route::get('/admin/dashboard/students/dev/johnwhitemore/johnwhitemoremodelcategory-delete/{id}', [ AdminJohnWhiteMoreCategoryController::class, 'JohnwhitemoremodelcategoryDelete' ]);
    Route::get('/admin/dashboard/students/dev/johnwhitemore/johnwhitemoremodelcategory-detail/{id}', [ AdminJohnWhiteMoreCategoryController::class, 'JohnwhitemoremodelcategoryDetail' ]);

    // ADMIN - Development - SWOT Analysis

    Route::get('/admin/dashboard/students/dev/swot/swotcategories-list', [ AdminSwotCategoriesController::class, 'SwotcategoriesList' ]);
    Route::get('/admin/dashboard/students/dev/swot/swotcategories-add', [ AdminSwotCategoriesController::class, 'SwotcategoriesAdd' ]);
    Route::post('/admin/dashboard/students/dev/swot/swotcategories-add', [ AdminSwotCategoriesController::class, 'SwotcategoriesAddFormValue' ]);
    Route::get('/admin/dashboard/students/dev/swot/swotcategories-edit/{id}', [ AdminSwotCategoriesController::class, 'SwotcategoriesEdit' ]);
    Route::post('/admin/dashboard/students/dev/swot/swotcategories-edit/{id}', [ AdminSwotCategoriesController::class, 'SwotcategoriesEditFormValue' ]);
    Route::get('/admin/dashboard/students/dev/swot/swotcategories-delete/{id}', [ AdminSwotCategoriesController::class, 'SwotcategoriesDelete' ]);
    Route::get('/admin/dashboard/students/dev/swot/swotcategories-detail/{id}', [ AdminSwotCategoriesController::class, 'SwotcategoriesDetail' ]);

    // ADMIN - Leadership Practices
    
    Route::get('/admin/dashboard/students/dev/leadership/leadershipcategories-list', [ AdminLeadershipCategoriesController::class, 'LeadershipcategoriesList' ]);
    Route::get('/admin/dashboard/students/dev/leadership/leadershipcategories-add', [ AdminLeadershipCategoriesController::class, 'LeadershipcategoriesAdd' ]);
    Route::post('/admin/dashboard/students/dev/leadership/leadershipcategories-add', [ AdminLeadershipCategoriesController::class, 'LeadershipcategoriesAddFormValue' ]);
    Route::get('/admin/dashboard/students/dev/leadership/leadershipcategories-edit/{id}', [ AdminLeadershipCategoriesController::class, 'LeadershipcategoriesEdit' ]);
    Route::post('/admin/dashboard/students/dev/leadership/leadershipcategories-edit/{id}', [ AdminLeadershipCategoriesController::class, 'LeadershipcategoriesEditFormValue' ]);
    Route::get('/admin/dashboard/students/dev/leadership/leadershipcategories-delete/{id}', [ AdminLeadershipCategoriesController::class, 'LeadershipcategoriesDelete' ]);
    Route::get('/admin/dashboard/students/dev/leadership/leadershipcategories-detail/{id}', [ AdminLeadershipCategoriesController::class, 'LeadershipcategoriesDetail' ]);

    // ADMIN - Soft Skills

    Route::get('/admin/dashboard/students/softskills/softskillscategories/softskillscategories-list', [ AdminSoftSkillsCategoriesController::class, 'SoftskillscategoriesList' ]);
    Route::get('/admin/dashboard/students/softskills/softskillscategories/softskillscategories-add', [ AdminSoftSkillsCategoriesController::class, 'SoftskillscategoriesAdd' ]);
    Route::post('/admin/dashboard/students/softskills/softskillscategories/softskillscategories-add', [ AdminSoftSkillsCategoriesController::class, 'SoftskillscategoriesAddFormValue' ]);
    Route::get('/admin/dashboard/students/softskills/softskillscategories/softskillscategories-edit/{id}', [ AdminSoftSkillsCategoriesController::class, 'SoftskillscategoriesEdit' ]);
    Route::post('/admin/dashboard/students/softskills/softskillscategories/softskillscategories-edit/{id}', [ AdminSoftSkillsCategoriesController::class, 'SoftskillscategoriesEditFormValue' ]);
    Route::get('/admin/dashboard/students/softskills/softskillscategories/softskillscategories-delete/{id}', [ AdminSoftSkillsCategoriesController::class, 'SoftskillscategoriesDelete' ]);
    Route::get('/admin/dashboard/students/softskills/softskillscategories/softskillscategories-detail/{id}', [ AdminSoftSkillsCategoriesController::class, 'SoftskillscategoriesDetail' ]);

    Route::get('/admin/dashboard/students/softskills/softskillscourses/softskillscourses-list', [ AdminSoftSkillsCourseController::class, 'SoftskillscoursesList' ]);
    Route::get('/admin/dashboard/students/softskills/softskillscourses/softskillscourses-add', [ AdminSoftSkillsCourseController::class, 'SoftskillscoursesAdd' ]);
    Route::post('/admin/dashboard/students/softskills/softskillscourses/softskillscourses-add', [ AdminSoftSkillsCourseController::class, 'SoftskillscoursesAddFormValue' ]);
    Route::get('/admin/dashboard/students/softskills/softskillscourses/softskillscourses-edit/{id}', [ AdminSoftSkillsCourseController::class, 'SoftskillscoursesEdit' ]);
    Route::post('/admin/dashboard/students/softskills/softskillscourses/softskillscourses-edit/{id}', [ AdminSoftSkillsCourseController::class, 'SoftskillscoursesEditFormValue' ]);
    Route::get('/admin/dashboard/students/softskills/softskillscourses/softskillscourses-delete/{id}', [ AdminSoftSkillsCourseController::class, 'SoftskillscoursesDelete' ]);
    Route::get('/admin/dashboard/students/softskills/softskillscourses/softskillscourses-detail/{id}', [ AdminSoftSkillsCourseController::class, 'SoftskillscoursesDetail' ]);
    
    Route::get('/admin/dashboard/students/softskills/softskillsunits/units-list', [ AdminSoftSkillsUnitController::class, 'UnitsList' ]);
    Route::get('/admin/dashboard/students/softskills/softskillsunits/units-add', [ AdminSoftSkillsUnitController::class, 'UnitsAdd' ]);
    Route::post('/admin/dashboard/students/softskills/softskillsunits/units-add', [ AdminSoftSkillsUnitController::class, 'UnitsAddFormValue' ]);
    Route::get('/admin/dashboard/students/softskills/softskillsunits/units-edit/{id}', [ AdminSoftSkillsUnitController::class, 'UnitsEdit' ]);
    Route::post('/admin/dashboard/students/softskills/softskillsunits/units-edit/{id}', [ AdminSoftSkillsUnitController::class, 'UnitsEditFormValue' ]);
    Route::get('/admin/dashboard/students/softskills/softskillsunits/units-delete/{id}', [ AdminSoftSkillsUnitController::class, 'UnitsDelete' ]);
    Route::get('/admin/dashboard/students/softskills/softskillsunits/units-detail/{id}', [ AdminSoftSkillsUnitController::class, 'UnitsDetail' ]);

    Route::get('/admin/dashboard/students/softskills/softskillsmodules/modules-list', [ AdminSoftSkillsModuleController::class, 'ModulesList' ]);
    Route::get('/admin/dashboard/students/softskills/softskillsmodules/modules-add', [ AdminSoftSkillsModuleController::class, 'ModulesAdd' ]);
    Route::post('/admin/dashboard/students/softskills/softskillsmodules/modules-add', [ AdminSoftSkillsModuleController::class, 'ModulesAddFormValue' ]);
    Route::get('/admin/dashboard/students/softskills/softskillsmodules/modules-edit/{id}', [ AdminSoftSkillsModuleController::class, 'ModulesEdit' ]);
    Route::post('/admin/dashboard/students/softskills/softskillsmodules/modules-edit/{id}', [ AdminSoftSkillsModuleController::class, 'ModulesEditFormValue' ]);
    Route::get('/admin/dashboard/students/softskills/softskillsmodules/modules-delete/{id}', [ AdminSoftSkillsModuleController::class, 'ModulesDelete' ]);
    Route::get('/admin/dashboard/students/softskills/softskillsmodules/modules-detail/{id}', [ AdminSoftSkillsModuleController::class, 'ModulesDetail' ]);

    Route::get('/admin/dashboard/students/softskills/chapters/chapters-list', [ AdminSoftSkillsChapterController::class, 'ChaptersList' ]);
    Route::get('/admin/dashboard/students/softskills/chapters/chapters-add', [ AdminSoftSkillsChapterController::class, 'ChaptersAdd' ]);
    Route::post('/admin/dashboard/students/softskills/chapters/chapters-add', [ AdminSoftSkillsChapterController::class, 'ChaptersAddFormValue' ]);
    Route::get('/admin/dashboard/students/softskills/chapters/chapters-edit/{id}', [ AdminSoftSkillsChapterController::class, 'ChaptersEdit' ]);
    Route::post('/admin/dashboard/students/softskills/chapters/chapters-edit/{id}', [ AdminSoftSkillsChapterController::class, 'ChaptersEditFormValue' ]);
    Route::get('/admin/dashboard/students/softskills/chapters/chapters-delete/{id}', [ AdminSoftSkillsChapterController::class, 'ChaptersDelete' ]);
    Route::get('/admin/dashboard/students/softskills/chapters/chapters-detail/{id}', [ AdminSoftSkillsChapterController::class, 'ChaptersDetail' ]);

     });

    Route::group(['middleware' => 'student'], function() {
    
    //Home Page

    Route::get('/student/home/', [ StudentHomePageController::class, 'GetHomePage' ]);

    // STUDENT - Development - Eisenhower Matrix

    Route::get('/student/home/dev/eisenhowermatrix/eisenhowermatrix-list', [ StudentEisenhowerMatrixController::class, 'EisenhowermatrixList' ]);
    Route::get('/student/home/dev/eisenhowermatrix/eisenhowermatrix-add', [ StudentEisenhowerMatrixController::class, 'EisenhowermatrixAdd' ]);
    Route::post('/student/home/dev/eisenhowermatrix/eisenhowermatrix-add', [ StudentEisenhowerMatrixController::class, 'EisenhowermatrixAddFormValue' ]);
    Route::get('/student/home/dev/eisenhowermatrix/eisenhowermatrix-edit/{id}', [ StudentEisenhowerMatrixController::class, 'EisenhowermatrixEdit' ]);
    Route::post('/student/home/dev/eisenhowermatrix/eisenhowermatrix-edit/{id}', [ StudentEisenhowerMatrixController::class, 'EisenhowermatrixEditFormValue' ]);
    Route::get('/student/home/dev/eisenhowermatrix/eisenhowermatrix-delete/{id}', [ StudentEisenhowerMatrixController::class, 'EisenhowermatrixDelete' ]);
    Route::get('/student/home/dev/eisenhowermatrix/eisenhowermatrix-detail/{id}', [ StudentEisenhowerMatrixController::class, 'EisenhowermatrixDetail' ]);

    Route::get('/student/home/dev/eisenhowermatrix/eisenhowermatrix-close/{id}', [ StudentEisenhowerMatrixController::class, 'EisenhowermatrixClose' ]);
    Route::post('/student/home/dev/eisenhowermatrix/eisenhowermatrix-close/{id}', [ StudentEisenhowerMatrixController::class, 'EisenhowermatrixCloseFormValue' ]);

    // STUDENT - Development - John WhiteMore Model

    Route::get('/student/home/dev/johnwhitemore/johnwhitemore-list', [ StudentWhiteMoreController::class, 'JohnwhitemoreList' ]);
    Route::get('/student/home/dev/johnwhitemore/johnwhitemore-add', [ StudentWhiteMoreController::class, 'JohnwhitemoreAdd' ]);
    Route::post('/student/home/dev/johnwhitemore/johnwhitemore-add', [ StudentWhiteMoreController::class, 'JohnwhitemoreAddFormValue' ]);
    Route::get('/student/home/dev/johnwhitemore/johnwhitemore-edit/{id}', [ StudentWhiteMoreController::class, 'JohnwhitemoreEdit' ]);
    Route::post('/student/home/dev/johnwhitemore/johnwhitemore-edit/{id}', [ StudentWhiteMoreController::class, 'JohnwhitemoreEditFormValue' ]);
    Route::get('/student/home/dev/johnwhitemore/johnwhitemore-delete/{id}', [ StudentWhiteMoreController::class, 'JohnwhitemoreDelete' ]);
    Route::get('/student/home/dev/johnwhitemore/johnwhitemore-detail/{id}', [ StudentWhiteMoreController::class, 'JohnwhitemoreDetail' ]);
    Route::get('/student/home/dev/johnwhitemore/johnwhitemore-close/{id}', [ StudentWhiteMoreController::class, 'JohnwhitemoreClose' ]);

    Route::get('/student/home/dev/johnwhitemore/johnwhitemore-ptask-add/{id}', [ StudentWhiteMoreController::class, 'JohnwhitemorePTaskAdd' ]);
    Route::post('/student/home/dev/johnwhitemore/johnwhitemore-ptask-add/{id}', [ StudentWhiteMoreController::class, 'JohnwhitemorePTaskAddFormValue' ]);
    
    Route::get('/student/home/dev/johnwhitemore/johnwhitemore-ptask-edit/{id}', [ StudentWhiteMoreController::class, 'JohnwhitemorePTaskEdit' ]);
    Route::post('/student/home/dev/johnwhitemore/johnwhitemore-ptask-edit/{id}', [ StudentWhiteMoreController::class, 'JohnwhitemorePTaskEditFormValue' ]);
   
    Route::get('/student/home/dev/johnwhitemore/johnwhitemore-ptask-delete/{id}', [ StudentWhiteMoreController::class, 'JohnwhitemorePTaskDelete' ]);

    // STUDENT - Development - SWOT Analysis

    Route::get('/student/home/dev/swot/swot-list', [ StudentSwotController::class, 'SwotList' ]);
    Route::get('/student/home/dev/swot/swot-add', [ StudentSwotController::class, 'SwotAdd' ]);
    Route::post('/student/home/dev/swot/swot-add', [ StudentSwotController::class, 'SwotAddFormValue' ]);
    Route::get('/student/home/dev/swot/swot-edit/{id}', [ StudentSwotController::class, 'SwotEdit' ]);
    Route::post('/student/home/dev/swot/swot-edit/{id}', [ StudentSwotController::class, 'SwotEditFormValue' ]);
    Route::get('/student/home/dev/swot/swot-delete/{id}', [ StudentSwotController::class, 'SwotDelete' ]);
    Route::get('/student/home/dev/swot/swot-detail/{id}', [ StudentSwotController::class, 'SwotDetail' ]);
    Route::get('/student/home/dev/swot/swot-close/{id}', [ StudentSwotController::class, 'SwotClose' ]);

    // STUDENT - Development - Leadership Practice

    Route::get('/student/home/dev/leadershippractice/leadershipcategories-list', [ StudentLeadershipController::class, 'LeadershippracticeCategoriesList' ]);
    Route::get('/student/home/dev/leadershippractice/leadershipcategories-detail/{id}', [ StudentLeadershipController::class, 'LeadershippracticeCategoriesDetail' ]);

    Route::get('/student/home/dev/leadershippractice/leadershippractice-list', [ StudentLeadershipController::class, 'LeadershippracticeList' ]);
    Route::get('/student/home/dev/leadershippractice/leadershippractice-add', [ StudentLeadershipController::class, 'LeadershippracticeAdd' ]);
    Route::post('/student/home/dev/leadershippractice/leadershippractice-add', [ StudentLeadershipController::class, 'LeadershippracticeAddFormValue' ]);
    Route::get('/student/home/dev/leadershippractice/leadershippractice-edit/{id}', [ StudentLeadershipController::class, 'LeadershippracticeEdit' ]);
    Route::post('/student/home/dev/leadershippractice/leadershippractice-edit/{id}', [ StudentLeadershipController::class, 'LeadershippracticeEditFormValue' ]);
    Route::get('/student/home/dev/leadershippractice/leadershippractice-delete/{id}', [ StudentLeadershipController::class, 'LeadershippracticeDelete' ]);
    Route::get('/student/home/dev/leadershippractice/leadershippractice-detail/{id}', [ StudentLeadershipController::class, 'LeadershippracticeDetail' ]);

    // STUDENT - Development - Problem Solving
    
    Route::get('/student/home/dev/problemsolving/problemsolving-list', [ StudentProblemsolvingController::class, 'ProblemsolvingList' ]);
    Route::get('/student/home/dev/problemsolving/problemsolving-add', [ StudentProblemsolvingController::class, 'ProblemsolvingAdd' ]);
    Route::post('/student/home/dev/problemsolving/problemsolving-add', [ StudentProblemsolvingController::class, 'ProblemsolvingAddFormValue' ]);
    Route::get('/student/home/dev/problemsolving/problemsolving-rootcause-add/{id}', [ StudentProblemsolvingController::class, 'ProblemsolvingRCAAdd' ]);
    Route::post('/student/home/dev/problemsolving/problemsolving-rootcause-add/{id}', [ StudentProblemsolvingController::class, 'ProblemsolvingRCAAddFormValue' ]);
    Route::get('/student/home/dev/problemsolving/problemsolving-edit/{id}', [ StudentProblemsolvingController::class, 'ProblemsolvingEdit' ]);
    Route::post('/student/home/dev/problemsolving/problemsolving-edit/{id}', [ StudentProblemsolvingController::class, 'ProblemsolvingEditFormValue' ]);
    Route::get('/student/home/dev/problemsolving/problemsolving-delete/{id}', [ StudentProblemsolvingController::class, 'ProblemsolvingDelete' ]);
    Route::get('/student/home/dev/problemsolving/problemsolving-detail/{id}', [ StudentProblemsolvingController::class, 'ProblemsolvingDetail' ]);

    Route::get('/student/home/dev/problemsolving/problemsolving-close/{id}', [ StudentProblemsolvingController::class, 'ProblemsolvingClose' ]);
    Route::post('/student/home/dev/problemsolving/problemsolving-close/{id}', [ StudentProblemsolvingController::class, 'ProblemsolvingCloseFormValue' ]);


    // STUDENT - Development - 5/25 Rule

    Route::get('/student/home/dev/ftfrule/ftfrule-list', [ StudentFTFController::class, 'FtfruleList' ]);
    Route::get('/student/home/dev/ftfrule/ftfrule-add', [ StudentFTFController::class, 'FtfruleAdd' ]);
    Route::post('/student/home/dev/ftfrule/ftfrule-add', [ StudentFTFController::class, 'FtfruleAddFormValue' ]);
    Route::get('/student/home/dev/ftfrule/ftfrule-edit/{id}', [ StudentFTFController::class, 'FtfruleEdit' ]);
    Route::post('/student/home/dev/ftfrule/ftfrule-edit/{id}', [ StudentFTFController::class, 'FtfruleEditFormValue' ]);
    Route::get('/student/home/dev/ftfrule/ftfrule-delete/{id}', [ StudentFTFController::class, 'FtfruleDelete' ]);
    Route::get('/student/home/dev/ftfrule/ftfrule-detail/{id}', [ StudentFTFController::class, 'FtfruleDetail' ]);
    Route::get('/student/home/dev/ftfrule/ftfrule-addtofive/{id}', [ StudentFTFController::class, 'FtfruleAddtoFive' ]);
    Route::get('/student/home/dev/ftfrule/ftfrule-removefromfive/{id}', [ StudentFTFController::class, 'FtfruleRemovefromFive' ]);

    Route::get('/student/home/dev/ftfrule/ftfrule-choose5goals', [ StudentFTFController::class, 'FtfruleAddChoose5' ]);
    Route::post('/student/home/dev/ftfrule/ftfrule-choose5goals', [ StudentFTFController::class, 'FtfruleAddFormValueChoose5' ]);

    // STUDENT - Development - 21 Days Practice

    Route::get('/student/home/dev/twentyonedays/twentyonedays-list', [ StudentTwentyOneDaysController::class, 'TwentyonedaysList' ]);
    Route::get('/student/home/dev/twentyonedays/twentyonedays-add', [ StudentTwentyOneDaysController::class, 'TwentyonedaysAdd' ]);
    Route::post('/student/home/dev/twentyonedays/twentyonedays-add', [ StudentTwentyOneDaysController::class, 'TwentyonedaysAddFormValue' ]);
    Route::get('/student/home/dev/twentyonedays/twentyonedays-edit/{id}', [ StudentTwentyOneDaysController::class, 'TwentyonedaysEdit' ]);
    Route::post('/student/home/dev/twentyonedays/twentyonedays-edit/{id}', [ StudentTwentyOneDaysController::class, 'TwentyonedaysEditFormValue' ]);
    Route::get('/student/home/dev/twentyonedays/twentyonedays-delete/{id}', [ StudentTwentyOneDaysController::class, 'TwentyonedaysDelete' ]);
    Route::get('/student/home/dev/twentyonedays/twentyonedays-detail/{id}', [ StudentTwentyOneDaysController::class, 'TwentyonedaysDetail' ]);
    Route::get('/student/home/dev/twentyonedays/twentyonedays-close/{id}', [ StudentTwentyOneDaysController::class, 'TwentyonedaysClose' ]);
  
    Route::get('/student/home/dev/twentyonedays/twentyonedays-status-edit/{id}', [ StudentTwentyOneDaysController::class, 'TwentyonedaysStatusEdit' ]);
    Route::post('/student/home/dev/twentyonedays/twentyonedays-status-edit/{id}', [ StudentTwentyOneDaysController::class, 'TwentyonedaysStatusEditFormValue' ]);
    
    // STUDENT - SoftSkills

    Route::get('/student/home/softskills/categories/categories-list', [ StudentSoftSkillsCategoriesController::class, 'CategoriesList' ]);

    Route::get('/student/home/softskills/courses/courses-list', [ StudentSoftSkillsCoursesController::class, 'CoursesList' ]);
    Route::get('/student/home/softskills/courses/courses-detail/{id}', [ StudentSoftSkillsCoursesController::class, 'CoursesDetail' ]);

    Route::get('/student/home/softskills/courses/units-list', [ StudentSoftSkillsUnitsController::class, 'UnitsList' ]);
    Route::get('/student/home/softskills/courses/units-detail/{id}', [ StudentSoftSkillsUnitsController::class, 'UnitsDetail' ]);

    Route::get('/student/home/softskills/modules/modules-detail/{id}', [ StudentSoftSkillsModulesController::class, 'ModulesDetail' ]);

    });