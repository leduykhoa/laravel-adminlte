<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLteController extends Controller
{
    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.adminlte.index');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        //
        return view('admin.adminlte.index2');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index3()
    {
        //
        return view('admin.adminlte.index3');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesWidgets()
    {
        //
        return view('admin.adminlte.pages.widgets');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesLayoutTopNav()
    {
        //
        return view('admin.adminlte.pages.layout.top-nav');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesLayoutTopNavSidebar()
    {
        //
        return view('admin.adminlte.pages.layout.top-nav-sidebar');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesLayoutBoxed()
    {
        //
        return view('admin.adminlte.pages.layout.boxed');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesLayoutFixedSidebar()
    {
        //
        return view('admin.adminlte.pages.layout.fixed-sidebar');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesLayoutFixedSidebarCustom()
    {
        //
        return view('admin.adminlte.pages.layout.fixed-sidebar-custom');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesLayoutFixedTopnav()
    {
        //
        return view('admin.adminlte.pages.layout.fixed-topnav');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesLayoutFixedFooter()
    {
        //
        return view('admin.adminlte.pages.layout.fixed-footer');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesLayoutCollapsedSidebar()
    {
        //
        return view('admin.adminlte.pages.layout.collapsed-sidebar');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesChartsChartjs()
    {
        //
        return view('admin.adminlte.pages.charts.chartjs');
    }
    
    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesChartsFlot()
    {
        //
        return view('admin.adminlte.pages.charts.flot');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesChartsInline()
    {
        //
        return view('admin.adminlte.pages.charts/inline');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesChartsUplot()
    {
        //
        return view('admin.adminlte.pages.charts.uplot');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesUIGeneral()
    {
        //
        return view('admin.adminlte.pages.ui.general');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesUIIcons()
    {
        //
        return view('admin.adminlte.pages.ui.icons');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesUIButtons()
    {
        //
        return view('admin.adminlte.pages.ui.buttons');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesUISliders()
    {
        //
        return view('admin.adminlte.pages.ui.sliders');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesUIModals()
    {
        //
        return view('admin.adminlte.pages.ui.modals');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesUINavbar()
    {
        //
        return view('admin.adminlte.pages.ui.navbar');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesUITimeline()
    {
        //
        return view('admin.adminlte.pages.ui.timeline');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesUIRibbons()
    {
        //
        return view('admin.adminlte.pages.ui.ribbons');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesFormsGeneral()
    {
        //
        return view('admin.adminlte.pages.forms.general');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesFormsAdvanced()
    {
        //
        return view('admin.adminlte.pages.forms.advanced');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesFormsEditors()
    {
        //
        return view('admin.adminlte.pages.forms.editors');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesFormsValidation()
    {
        //
        return view('admin.adminlte.pages.forms.validation');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesTablesSimple()
    {
        //
        return view('admin.adminlte.pages.tables.simple');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesTablesData()
    {
        //
        return view('admin.adminlte.pages.tables.data');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesTablesJsgrid()
    {
        //
        return view('admin.adminlte.pages.tables.jsgrid');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesCalendar()
    {
        //
        return view('admin.adminlte.pages.calendar');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesGallery()
    {
        //
        return view('admin.adminlte.pages.gallery');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesKanban()
    {
        //
        return view('admin.adminlte.pages.kanban');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesMailboxMailbox()
    {
        //
        return view('admin.adminlte.pages.mailbox.mailbox');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesMailboxCompose()
    {
        //
        return view('admin.adminlte.pages.mailbox.compose');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesMailboxReadMail()
    {
        //
        return view('admin.adminlte.pages.mailbox.read-mail');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesInvoice()
    {
        //
        return view('admin.adminlte.pages.examples.invoice');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesProfile()
    {
        //
        return view('admin.adminlte.pages.examples.profile');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesECommerce()
    {
        //
        return view('admin.adminlte.pages.examples.e-commerce');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesProjects()
    {
        //
        return view('admin.adminlte.pages.examples.projects');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesProjectAdd()
    {
        //
        return view('admin.adminlte.pages.examples.project-add');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesProjectEdit()
    {
        //
        return view('admin.adminlte.pages.examples.project-edit');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesProjectDetail()
    {
        //
        return view('admin.adminlte.pages.examples.project-detail');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesContacts()
    {
        //
        return view('admin.adminlte.pages.examples.contacts');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesFaq()
    {
        //
        return view('admin.adminlte.pages.examples.faq');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesContactUs()
    {
        //
        return view('admin.adminlte.pages.examples.contact-us');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesLogin()
    {
        //
        return view('admin.adminlte.pages.examples.login');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesRegister()
    {
        //
        return view('admin.adminlte.pages.examples.register');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesForgotPassword()
    {
        //
        return view('admin.adminlte.pages.examples.forgot-password');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesRecoverPassword()
    {
        //
        return view('admin.adminlte.pages.examples.recover-password');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesLoginV2()
    {
        //
        return view('admin.adminlte.pages.examples.login-v2');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesRegisterV2()
    {
        //
        return view('admin.adminlte.pages.examples.register-v2');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesForgotPasswordV2()
    {
        //
        return view('admin.adminlte.pages.examples.forgot-password-v2');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesRecoverPasswordV2()
    {
        //
        return view('admin.adminlte.pages.examples.recover-password-v2');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesLockscreen()
    {
        //
        return view('admin.adminlte.pages.examples.lockscreen');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesLegacyUserMenu()
    {
        //
        return view('admin.adminlte.pages.examples.legacy-user-menu');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesLanguageMenu()
    {
        //
        return view('admin.adminlte.pages.examples.language-menu');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamples404()
    {
        //
        return view('admin.adminlte.pages.examples.404');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamples500()
    {
        //
        return view('admin.adminlte.pages.examples.500');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesPace()
    {
        //
        return view('admin.adminlte.pages.examples.pace');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesExamplesBlank()
    {
        //
        return view('admin.adminlte.pages.examples.blank');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function starter()
    {
        //
        return view('admin.adminlte.starter');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function iframe()
    {
        //
        return view('admin.adminlte.iframe');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesSearchSimple()
    {
        //
        return view('admin.adminlte.pages.search.simple');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesSearchSimpleResults()
    {
        //
        return view('admin.adminlte.pages.search.simple-results');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesSearchEnhanced()
    {
        //
        return view('admin.adminlte.pages.search.enhanced');
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesSearchEnhancedResults()
    {
        //
        return view('admin.adminlte.pages.search.enhanced-results');
    }
}
