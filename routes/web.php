<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('adminlte/index.html', 'Backend\AdminLteController@index')->name('adminlte.index');
    Route::get('adminlte/index2.html', 'Backend\AdminLteController@index2')->name('adminlte.index2');
    Route::get('adminlte/index3.html', 'Backend\AdminLteController@index3')->name('adminlte.index3');
    Route::get('adminlte/pages/widgets.html', 'Backend\AdminLteController@pagesWidgets')->name('adminlte.pages.widgets');
    Route::get('adminlte/pages/layout/top-nav.html', 'Backend\AdminLteController@pagesLayoutTopNav')->name('adminlte.pages.layout.top-nav');
    Route::get('adminlte/pages/layout/top-nav-sidebar.html', 'Backend\AdminLteController@pagesLayoutTopNavSidebar')->name('adminlte.pages.layout.top-nav-sidebar');
    Route::get('adminlte/pages/layout/boxed.html', 'Backend\AdminLteController@pagesLayoutBoxed')->name('adminlte.pages.layout.boxed');
    Route::get('adminlte/pages/layout/fixed-sidebar.html', 'Backend\AdminLteController@pagesLayoutFixedSidebar')->name('adminlte.pages.layout.fixed-sidebar');
    Route::get('adminlte/pages/layout/fixed-sidebar-custom.html', 'Backend\AdminLteController@pagesLayoutFixedSidebarCustom')->name('adminlte.pages.layout.fixed-sidebar-custom');
    Route::get('adminlte/pages/layout/fixed-topnav.html', 'Backend\AdminLteController@pagesLayoutFixedTopnav')->name('adminlte.pages.layout.fixed-topnav');
    Route::get('adminlte/pages/layout/fixed-footer.html', 'Backend\AdminLteController@pagesLayoutFixedFooter')->name('adminlte.pages.layout.fixed-footer');
    Route::get('adminlte/pages/layout/collapsed-sidebar.html', 'Backend\AdminLteController@pagesLayoutCollapsedSidebar')->name('adminlte.pages.layout.collapsed-sidebar');
    Route::get('adminlte/pages/charts/chartjs.html', 'Backend\AdminLteController@pagesChartsChartjs')->name('adminlte.pages.charts.chartjs');
    Route::get('adminlte/pages/charts/flot.html', 'Backend\AdminLteController@pagesChartsFlot')->name('adminlte.pages.charts.flot');
    Route::get('adminlte/pages/charts/inline.html', 'Backend\AdminLteController@pagesChartsInline')->name('adminlte.pages.charts.inline');
    Route::get('adminlte/pages/charts/uplot.html', 'Backend\AdminLteController@pagesChartsUplot')->name('adminlte.pages.charts.uplot');
    Route::get('adminlte/pages/ui/general.html', 'Backend\AdminLteController@pagesUIGeneral')->name('adminlte.pages.ui.general');
    Route::get('adminlte/pages/ui/icons.html', 'Backend\AdminLteController@pagesUIIcons')->name('adminlte.pages.ui.icons');
    Route::get('adminlte/pages/ui/buttons.html', 'Backend\AdminLteController@pagesUIButtons')->name('adminlte.pages.ui.buttons');
    Route::get('adminlte/pages/ui/sliders.html', 'Backend\AdminLteController@pagesUISliders')->name('adminlte.pages.ui.sliders');
    Route::get('adminlte/pages/ui/modals.html', 'Backend\AdminLteController@pagesUIModals')->name('adminlte.pages.ui.modals');
    Route::get('adminlte/pages/ui/navbar.html', 'Backend\AdminLteController@pagesUINavbar')->name('adminlte.pages.ui.navbar');
    Route::get('adminlte/pages/ui/timeline.html', 'Backend\AdminLteController@pagesUITimeline')->name('adminlte.pages.ui.timeline');
    Route::get('adminlte/pages/ui/ribbons.html', 'Backend\AdminLteController@pagesUIRibbons')->name('adminlte.pages.ui.ribbons');
    Route::get('adminlte/pages/forms/general.html', 'Backend\AdminLteController@pagesFormsGeneral')->name('adminlte.pages.forms.general');
    Route::get('adminlte/pages/forms/advanced.html', 'Backend\AdminLteController@pagesFormsAdvanced')->name('adminlte.pages.forms.advanced');
    Route::get('adminlte/pages/forms/editors.html', 'Backend\AdminLteController@pagesFormsEditors')->name('adminlte.pages.forms.editors');
    Route::get('adminlte/pages/forms/validation.html', 'Backend\AdminLteController@pagesFormsValidation')->name('adminlte.pages.forms.validation');
    Route::get('adminlte/pages/tables/simple.html', 'Backend\AdminLteController@pagesTablesSimple')->name('adminlte.pages.tables.simple');
    Route::get('adminlte/pages/tables/data.html', 'Backend\AdminLteController@pagesTablesData')->name('adminlte.pages.tables.data');
    Route::get('adminlte/pages/tables/jsgrid.html', 'Backend\AdminLteController@pagesTablesJsgrid')->name('adminlte.pages.tables.jsgrid');
    Route::get('adminlte/pages/calendar.html', 'Backend\AdminLteController@pagesCalendar')->name('adminlte.pages.calendar');
    Route::get('adminlte/pages/gallery.html', 'Backend\AdminLteController@pagesGallery')->name('adminlte.pages.gallery');
    Route::get('adminlte/pages/kanban.html', 'Backend\AdminLteController@pagesKanban')->name('adminlte.pages.kanban');
    Route::get('adminlte/pages/mailbox/mailbox.html', 'Backend\AdminLteController@pagesMailboxMailbox')->name('adminlte.pages.mailbox.mailbox');
    Route::get('adminlte/pages/mailbox/compose.html', 'Backend\AdminLteController@pagesMailboxCompose')->name('adminlte.pages.mailbox.compose');
    Route::get('adminlte/pages/mailbox/read-mail.html', 'Backend\AdminLteController@pagesMailboxReadMail')->name('adminlte.pages.mailbox.read-mail');
    Route::get('adminlte/pages/examples/invoice.html', 'Backend\AdminLteController@pagesExamplesInvoice')->name('adminlte.pages.examples.invoice');
    Route::get('adminlte/pages/examples/profile.html', 'Backend\AdminLteController@pagesExamplesProfile')->name('adminlte.pages.examples.profile');
    Route::get('adminlte/pages/examples/e-commerce.html', 'Backend\AdminLteController@pagesExamplesECommerce')->name('adminlte.pages.examples.e-commerce');
    Route::get('adminlte/pages/examples/projects.html', 'Backend\AdminLteController@pagesExamplesProjects')->name('adminlte.pages.examples.projects');
    Route::get('adminlte/pages/examples/project-add.html', 'Backend\AdminLteController@pagesExamplesProjectAdd')->name('adminlte.pages.examples.project-add');
    Route::get('adminlte/pages/examples/project-edit.html', 'Backend\AdminLteController@pagesExamplesProjectEdit')->name('adminlte.pages.examples.project-edit');
    Route::get('adminlte/pages/examples/project-detail.html', 'Backend\AdminLteController@pagesExamplesProjectDetail')->name('adminlte.pages.examples.project-detail');
    Route::get('adminlte/pages/examples/contacts.html', 'Backend\AdminLteController@pagesExamplesContacts')->name('adminlte.pages.examples.contacts');
    Route::get('adminlte/pages/examples/faq.html', 'Backend\AdminLteController@pagesExamplesFaq')->name('adminlte.pages.examples.faq');
    Route::get('adminlte/pages/examples/contact-us.html', 'Backend\AdminLteController@pagesExamplesContactUs')->name('adminlte.pages.examples.contact-us');
    Route::get('adminlte/pages/examples/login.html', 'Backend\AdminLteController@pagesExamplesLogin')->name('adminlte.pages.examples.login');
    Route::get('adminlte/pages/examples/register.html', 'Backend\AdminLteController@pagesExamplesRegister')->name('adminlte.pages.examples.register');
    Route::get('adminlte/pages/examples/forgot-password.html', 'Backend\AdminLteController@pagesExamplesForgotPassword')->name('adminlte.pages.examples.forgot-password');
    Route::get('adminlte/pages/examples/recover-password.html', 'Backend\AdminLteController@pagesExamplesRecoverPassword')->name('adminlte.pages.examples.recover-password');
    Route::get('adminlte/pages/examples/login-v2.html', 'Backend\AdminLteController@pagesExamplesLoginV2')->name('adminlte.pages.examples.login.v2');
    Route::get('adminlte/pages/examples/register-v2.html', 'Backend\AdminLteController@pagesExamplesRegisterV2')->name('adminlte.pages.examples.register.v2');
    Route::get('adminlte/pages/examples/forgot-password-v2.html', 'Backend\AdminLteController@pagesExamplesForgotPasswordV2')->name('adminlte.pages.examples.forgot-password.v2');
    Route::get('adminlte/pages/examples/recover-password-v2.html', 'Backend\AdminLteController@pagesExamplesRecoverPasswordV2')->name('adminlte.pages.examples.recover-password.v2');
    Route::get('adminlte/pages/examples/lockscreen.html', 'Backend\AdminLteController@pagesExamplesLockscreen')->name('adminlte.pages.examples.lockscreen');
    Route::get('adminlte/pages/examples/legacy-user-menu.html', 'Backend\AdminLteController@pagesExamplesLegacyUserMenu')->name('adminlte.pages.examples.legacy-user-menu');
    Route::get('adminlte/pages/examples/language-menu.html', 'Backend\AdminLteController@pagesExamplesLanguageMenu')->name('adminlte.pages.examples.language-menu');
    Route::get('adminlte/pages/examples/404.html', 'Backend\AdminLteController@pagesExamples404')->name('adminlte.pages.examples.404');
    Route::get('adminlte/pages/examples/500.html', 'Backend\AdminLteController@pagesExamples500')->name('adminlte.pages.examples.500');
    Route::get('adminlte/pages/examples/pace.html', 'Backend\AdminLteController@pagesExamplesPace')->name('adminlte.pages.examples.pace');
    Route::get('adminlte/pages/examples/blank.html', 'Backend\AdminLteController@pagesExamplesBlank')->name('adminlte.pages.examples.blank');
    Route::get('adminlte/starter.html', 'Backend\AdminLteController@starter')->name('adminlte.starter');
    Route::get('adminlte/iframe.html', 'Backend\AdminLteController@iframe')->name('adminlte.iframe');
    Route::get('adminlte/pages/search/simple.html', 'Backend\AdminLteController@pagesSearchSimple')->name('adminlte.pages.search.simple');
    Route::get('adminlte/pages/search/simple-results.html', 'Backend\AdminLteController@pagesSearchSimpleResults')->name('adminlte.pages.search.simple-results');
    Route::get('adminlte/pages/search/enhanced.html', 'Backend\AdminLteController@pagesSearchEnhanced')->name('adminlte.pages.search.enhanced');
    Route::get('adminlte/pages/search/enhanced-results.html', 'Backend\AdminLteController@pagesSearchEnhancedResults')->name('adminlte.pages.search.enhanced-results');
});



Route::get('/home', 'HomeController@index')->name('home');
// Frontend Auth
// +--------+----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
// | Domain | Method   | URI                    | Name             | Action                                                                 | Middleware   |
// +--------+----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
// |        | GET|HEAD | /                      |                  | Closure                                                                | web          |
// |        | GET|HEAD | api/user               |                  | Closure                                                                | api,auth:api |
// |        | GET|HEAD | home                   | home             | App\Http\Controllers\HomeController@index                              | web,auth     |
// |        | GET|HEAD | login                  | login            | App\Http\Controllers\Auth\LoginController@showLoginForm                | web,guest    |
// |        | POST     | login                  |                  | App\Http\Controllers\Auth\LoginController@login                        | web,guest    |
// |        | POST     | logout                 | logout           | App\Http\Controllers\Auth\LoginController@logout                       | web          |
// |        | POST     | password/email         | password.email   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web,guest    |
// |        | GET|HEAD | password/reset         | password.request | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web,guest    |
// |        | POST     | password/reset         |                  | App\Http\Controllers\Auth\ResetPasswordController@reset                | web,guest    |
// |        | GET|HEAD | password/reset/{token} | password.reset   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web,guest    |
// |        | GET|HEAD | register               | register         | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,guest    |
// |        | POST     | register               |                  | App\Http\Controllers\Auth\RegisterController@register                  | web,guest    |
// +--------+----------+------------------------+------------------+------------------------------------------------------------------------+--------------+
Route::get('login', 'Frontend\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Frontend\Auth\LoginController@login')->name('login');
Route::post('logout', 'Frontend\Auth\LoginController@logout')->name('logout');
Route::post('password/email', 'Frontend\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset', 'Frontend\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/reset', 'Frontend\Auth\ForgotPasswordController@reset')->name('password.request');
Route::get('password/reset/{token}', 'Frontend\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::get('register', 'Frontend\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Frontend\Auth\RegisterController@register')->name('register');


