<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\helpers\JsonHelper;
use yii\web\Response;
use yii\filters\VerbFilter;

class PagesController extends Controller
{

    public function actionIndex()
    {
        $this->layout = 'main';
        return $this->render('/index');  
    }

    
    // Doctor dashboard pages

    public function actionDoctorDashboard()
    {
        $this->layout = 'main';
        return $this->render('/doctor-dashboard');
    }

    public function actionDoctorsAppointments()
    {
        $this->layout = 'main';
        return $this->render('/doctors-appointments');
    }

    public function actionDoctorsPatientDetails()
    {
        $this->layout = 'main';
        return $this->render('/doctors-patient-details');
    }

    public function actionDoctorsAppointmentDetails()
    {
        $this->layout = 'main';
        return $this->render('/doctors-appointment-details');
    }

    public function actionOnlineConsultations()
    {
        $this->layout = 'main';
        return $this->render('/online-consultations');
    }

    public function actionDoctorsSchedules()
    {
        $this->layout = 'main';
        return $this->render('/doctors-schedules');
    }

    public function actionDoctorsPrescriptions()
    {
        $this->layout = 'main';
        return $this->render('/doctors-prescriptions');
    }

    public function actionDoctorsPrescriptionDetails()
    {
        $this->layout = 'main';
        return $this->render('/doctors-prescription-details');
    }

    public function actionDoctorsLeaves()
    {
        $this->layout = 'main';
        return $this->render('/doctors-leaves');
    }

    public function actionDoctorsReviews()
    {
        $this->layout = 'main';
        return $this->render('/doctors-reviews');
    }

    public function actionDoctorsProfileSettings()
    {
        $this->layout = 'main';
        return $this->render('/doctors-profile-settings');
    }

    public function actionDoctorsPasswordSettings()
    {
        $this->layout = 'main';
        return $this->render('/doctors-password-settings');
    }

    public function actionDoctorsNotificationSettings()
    {
        $this->layout = 'main';
        return $this->render('/doctors-notification-settings');
    }

    public function actionDoctorsNotifications()
    {
        $this->layout = 'main';
        return $this->render('/doctors-notifications');
    }

    // Patient Dashboard pages

    public function actionPatientDashboard()
    {
        $this->layout = 'main';
        return $this->render('/patient-dashboard');
    }

    public function actionPatientAppointments()
    {
        $this->layout = 'main';
        return $this->render('/patient-appointments');
    }

    public function actionPatientAppointmentDetails()
    {
        $this->layout = 'main';
        return $this->render('/patient-appointment-details');
    }

    public function actionPatientDoctors()
    {
        $this->layout = 'main';
        return $this->render('/patient-doctors');
    }

    public function actionPatientsDoctorDetails()
    {
        $this->layout = 'main';
        return $this->render('/patients-doctor-details');
    }

    public function actionPatientPrescriptions()
    {
        $this->layout = 'main';
        return $this->render('/patient-prescriptions');
    }

    public function actionPatientPrescriptionDetails()
    {
        $this->layout = 'main';
        return $this->render('/patient-prescription-details');
    }

    public function actionPatientInvoices()
    {
        $this->layout = 'main';
        return $this->render('/patient-invoices');
    }

    public function actionPatientInvoiceDetails()
    {
        $this->layout = 'main';
        return $this->render('/patient-invoice-details');
    }

    public function actionPatientProfileSettings()
    {
        $this->layout = 'main';
        return $this->render('/patient-profile-settings');
    }

    public function actionPatientPasswordSettings()
    {
        $this->layout = 'main';
        return $this->render('/patient-password-settings');
    }

    public function actionPatientNotificationsSettings()
    {
        $this->layout = 'main';
        return $this->render('/patient-notifications-settings');
    }

    public function actionPatientNotifications()
    {
        $this->layout = 'main';
        return $this->render('/patient-notifications');
    }

    // Clinic modules
    public function actionDoctors()
    {
        $this->layout = 'main';
        return $this->render('/doctors');
    }

    public function actionDoctorsList()
    {
        $this->layout = 'main';
        return $this->render('/doctors-list');
    }

    public function actionDoctorDetails()
    {
        $this->layout = 'main';
        return $this->render('/doctor-details');
    }

    public function actionAddDoctor()
    {
        $this->layout = 'main';
        return $this->render('/add-doctor');
    }

    public function actionEditDoctor()
    {
        $this->layout = 'main';
        return $this->render('/edit-doctor');
    }

    public function actionDoctorSchedule()
    {
        $this->layout = 'main';
        return $this->render('/doctor-schedule');
    }

    public function actionPatients()
    {
        $this->layout = 'main';
        return $this->render('/patients');
    }

    public function actionPatientsGrid()
    {
        $this->layout = 'main';
        return $this->render('/patients-grid');
    }

    public function actionPatientDetails()
    {
        $this->layout = 'main';
        return $this->render('/patient-details');
    }

    public function actionCreatePatient()
    {
        $this->layout = 'main';
        return $this->render('/create-patient');
    }

    public function actionEditPatient()
    {
        $this->layout = 'main';
        return $this->render('/edit-patient');
    }

    public function actionAppointments()
    {
        $this->layout = 'main';
        return $this->render('/appointments');
    }

    public function actionAppointmentConsultations()
    {
        $this->layout = 'main';
        return $this->render('/appointment-consultations');
    }

    public function actionNewAppointment()
    {
        $this->layout = 'main';
        return $this->render('/new-appointment');
    }

    public function actionAppointmentCalendar()
    {
        $this->layout = 'main';
        return $this->render('/appointment-calendar');
    }

    public function actionLocations()
    {
        $this->layout = 'main';
        return $this->render('/locations');
    }

    public function actionServices()
    {
        $this->layout = 'main';
        return $this->render('/services');
    }

    public function actionSpecializations()
    {
        $this->layout = 'main';
        return $this->render('/specializations');
    }

    public function actionAsset()
    {
        $this->layout = 'main';
        return $this->render('/asset');
    }

    public function actionActivities()
    {
        $this->layout = 'main';
        return $this->render('/activities');
    }

    public function actionMessages()
    {
        $this->layout = 'main';
        return $this->render('/messages');
    }

    // HRM Modules

    public function actionStaffs()
    {
        $this->layout = 'main';
        return $this->render('/staffs');
    }

    public function actionHrmDepartments()
    {
        $this->layout = 'main';
        return $this->render('/hrm-departments');
    }

    public function actionDesignation()
    {
        $this->layout = 'main';
        return $this->render('/designation');
    }

    public function actionAttendance()
    {
        $this->layout = 'main';
        return $this->render('/attendance');
    }

    public function actionLeaves()
    {
        $this->layout = 'main';
        return $this->render('/leaves');
    }

    public function actionLeaveType()
    {
        $this->layout = 'main';
        return $this->render('/leave-type');
    }

    public function actionHolidays()
    {
        $this->layout = 'main';
        return $this->render('/holidays');
    }

    public function actionPayroll()
    {
        $this->layout = 'main';
        return $this->render('/payroll');
    }

    public function actionPayroll2()
    {
        $this->layout = 'main';
        return $this->render('/payroll-2');
    }

    // Finance & Accounts Modules

    public function actionExpenses()
    {
        $this->layout = 'main';
        return $this->render('/expenses');
    }

    public function actionExpenseCategory()
    {
        $this->layout = 'main';
        return $this->render('/expense-category');
    }

    public function actionIncome()
    {
        $this->layout = 'main';
        return $this->render('/income');
    }

    public function actionInvoices()
    {
        $this->layout = 'main';
        return $this->render('/invoices');
    }

    public function actionAddInvoices()
    {
        $this->layout = 'main';
        return $this->render('/add-invoices');
    }

    public function actionEditInvoices()
    {
        $this->layout = 'main';
        return $this->render('/edit-invoices');
    }

    public function actionInvoicesDetails()
    {
        $this->layout = 'main';
        return $this->render('/invoices-details');
    }

    public function actionPayments()
    {
        $this->layout = 'main';
        return $this->render('/payments');
    }

    public function actionTransactions()
    {
        $this->layout = 'main';
        return $this->render('/transactions');
    }

    // Administration Modules

    public function actionRolesAndPermissions()
    {
        $this->layout = 'main';
        return $this->render('/roles-and-permissions');
    }

    public function actionPermissions()
    {
        $this->layout = 'main';
        return $this->render('/permissions');
    }

    public function actionDeleteAccountRequest()
    {
        $this->layout = 'main';
        return $this->render('/delete-account-request');
    }

    // Report modules

    public function actionIncomeReport()
    {
        $this->layout = 'main';
        return $this->render('/income-report');
    }

    public function actionExpenseReport()
    {
        $this->layout = 'main';
        return $this->render('/expense-report');
    }

    public function actionProfitAndLoss()
    {
        $this->layout = 'main';
        return $this->render('/profit-and-loss');
    }

    public function actionAppointmentReport()
    {
        $this->layout = 'main';
        return $this->render('/appointment-report');
    }

    public function actionPatientReport()
    {
        $this->layout = 'main';
        return $this->render('/patient-report');
    }

    // Content Modules

    public function actionPages()
    {
        $this->layout = 'main';
        return $this->render('/pages');
    }

    public function actionAddPage()
    {
        $this->layout = 'main';
        return $this->render('/add-page');
    }

    public function actionEditPage()
    {
        $this->layout = 'main';
        return $this->render('/edit-page');
    }

    public function actionTestimonials()
    {
        $this->layout = 'main';
        return $this->render('/testimonials');
    }

    public function actionFaq()
    {
        $this->layout = 'main';
        return $this->render('/faq');
    }

    public function actionBlogs()
    {
        $this->layout = 'main';
        return $this->render('/blogs');
    }

    public function actionAddBlog()
    {
        $this->layout = 'main';
        return $this->render('/add-blog');
    }

    public function actionEditBlog()
    {
        $this->layout = 'main';
        return $this->render('/edit-blog');
    }

    public function actionBlogDetails()
    {
        $this->layout = 'main';
        return $this->render('/blog-details');
    }

    public function actionBlogComments()
    {
        $this->layout = 'main';
        return $this->render('/blog-comments');
    }

    public function actionBlogCategories()
    {
        $this->layout = 'main';
        return $this->render('/blog-categories');
    }

    public function actionCities()
    {
        $this->layout = 'main';
        return $this->render('/cities');
    }

    public function actionStates()
    {
        $this->layout = 'main';
        return $this->render('/states');
    }

    public function actionCountries()
    {
        $this->layout = 'main';
        return $this->render('/countries');
    }

    // Support Modules

    public function actionContactMessages()
    {
        $this->layout = 'main';
        return $this->render('/contact-messages');
    }

    public function actionTickets()
    {
        $this->layout = 'main';
        return $this->render('/tickets');
    }

    public function actionTicketDetails()
    {
        $this->layout = 'main';
        return $this->render('/ticket-details');
    }

    public function actionAnnouncements()
    {
        $this->layout = 'main';
        return $this->render('/announcements');
    }

    public function actionNewsletters()
    {
        $this->layout = 'main';
        return $this->render('/newsletters');
    }

    // Pages Modules

    public function actionStarter()
    {
        $this->layout = 'main';
        return $this->render('/starter');
    }

    public function actionProfile()
    {
        $this->layout = 'main';
        return $this->render('/profile');
    }

    public function actionGallery()
    {
        $this->layout = 'main';
        return $this->render('/gallery');
    }

    public function actionTimeline()
    {
        $this->layout = 'main';
        return $this->render('/timeline');
    }

    public function actionPricing()
    {
        $this->layout = 'main';
        return $this->render('/pricing');
    }

    public function actionComingSoon()
    {
        $this->layout = 'auth_main';
        return $this->render('/coming-soon');
    }

    public function actionUnderMaintenance()
    {
        $this->layout = 'auth_main';
        return $this->render('/under-maintenance');
    }

    public function actionPrivacyPolicy()
    {
        $this->layout = 'main';
        return $this->render('/privacy-policy');
    }

    public function actionTermsAndConditions()
    {
        $this->layout = 'main';
        return $this->render('/terms-and-conditions');
    }

    public function actionNotifications()
    {
        $this->layout = 'main';
        return $this->render('/notifications');
    }

    public function actionWidgets()
    {
        $this->layout = 'main';
        return $this->render('/widgets');
    }

    // Applications Modules

    public function actionChat()
    {
        $this->layout = 'main';
        return $this->render('/chat');
    }

    public function actionVoiceCall()
    {
        $this->layout = 'main';
        return $this->render('/voice-call');
    }

    public function actionVideoCall()
    {
        $this->layout = 'main';
        return $this->render('/video-call');
    }

    public function actionOutgoingCall()
    {
        $this->layout = 'main';
        return $this->render('/outgoing-call');
    }

    public function actionIncomingCall()
    {
        $this->layout = 'main';
        return $this->render('/incoming-call');
    }

    public function actionCallHistory()
    {
        $this->layout = 'main';
        return $this->render('/call-history');
    }

    public function actionCalendar()
    {
        $this->layout = 'main';
        return $this->render('/calendar');
    }

    public function actionContacts()
    {
        $this->layout = 'main';
        return $this->render('/contacts');
    }

    public function actionEmail()
    {
        $this->layout = 'main';
        return $this->render('/email');
    }

    public function actionEmailReply()
    {
        $this->layout = 'main';
        return $this->render('/email-reply');
    }

    public function actionInvoice()
    {
        $this->layout = 'main';
        return $this->render('/invoice');
    }

    public function actionInvoiceDetails()
    {
        $this->layout = 'main';
        return $this->render('/invoice-details');
    }

    public function actionTodo()
    {
        $this->layout = 'main';
        return $this->render('/todo');
    }

    public function actionTodoList()
    {
        $this->layout = 'main';
        return $this->render('/todo-list');
    }

    public function actionNotes()
    {
        $this->layout = 'main';
        return $this->render('/notes');
    }

    public function actionKanbanView()
    {
        $this->layout = 'main';
        return $this->render('/kanban-view');
    }

    public function actionFileManager()
    {
        $this->layout = 'main';
        return $this->render('/file-manager');
    }

    public function actionSocialFeed()
    {
        $this->layout = 'main';
        return $this->render('/social-feed');
    }

    public function actionSearchList()
    {
        $this->layout = 'main';
        return $this->render('/search-list');
    }

    // Settings Modules

    public function actionProfileSettings()
    {
        $this->layout = 'main';
        return $this->render('/profile-settings');
    }

    public function actionSecuritySettings()
    {
        $this->layout = 'main';
        return $this->render('/security-settings');
    }

    public function actionNotificationsSettings()
    {
        $this->layout = 'main';
        return $this->render('/notifications-settings');
    }

    public function actionIntegrationsSettings()
    {
        $this->layout = 'main';
        return $this->render('/integrations-settings');
    }

    public function actionOrganizationSettings()
    {
        $this->layout = 'main';
        return $this->render('/organization-settings');
    }

    public function actionLocalizationSettings()
    {
        $this->layout = 'main';
        return $this->render('/localization-settings');
    }

    public function actionPrefixesSettings()
    {
        $this->layout = 'main';
        return $this->render('/prefixes-settings');
    }

    public function actionSeoSetupSettings()
    {
        $this->layout = 'main';
        return $this->render('/seo-setup-settings');
    }

    public function actionLanguageSettings()
    {
        $this->layout = 'main';
        return $this->render('/language-settings');
    }

    public function actionLanguageSettings2()
    {
        $this->layout = 'main';
        return $this->render('/language-settings2');
    }

    public function actionLanguageSettings3()
    {
        $this->layout = 'main';
        return $this->render('/language-settings3');
    }

    public function actionMaintenanceModeSettings()
    {
        $this->layout = 'main';
        return $this->render('/maintenance-mode-settings');
    }

    public function actionLoginAndRegisterSettings()
    {
        $this->layout = 'main';
        return $this->render('/login-and-register-settings');
    }

    public function actionPreferencesSettings()
    {
        $this->layout = 'main';
        return $this->render('/preferences-settings');
    }

    public function actionAppointmentSettings()
    {
        $this->layout = 'main';
        return $this->render('/appointment-settings');
    }

    public function actionWorkingHoursSettings()
    {
        $this->layout = 'main';
        return $this->render('/working-hours-settings');
    }

    public function actionCancellationReasonSettings()
    {
        $this->layout = 'main';
        return $this->render('/cancellation-reason-settings');
    }

    public function actionInvoiceSettings()
    {
        $this->layout = 'main';
        return $this->render('/invoice-settings');
    }

    public function actionInvoiceTemplatesSettings()
    {
        $this->layout = 'main';
        return $this->render('/invoice-templates-settings');
    }

    public function actionSignaturesSettings()
    {
        $this->layout = 'main';
        return $this->render('/signatures-settings');
    }

    public function actionCustomFieldsSettings()
    {
        $this->layout = 'main';
        return $this->render('/custom-fields-settings');
    }

    public function actionEmailSettings()
    {
        $this->layout = 'main';
        return $this->render('/email-settings');
    }

    public function actionEmailTemplatesSettings()
    {
        $this->layout = 'main';
        return $this->render('/email-templates-settings');
    }

    public function actionSmsGatewaysSettings()
    {
        $this->layout = 'main';
        return $this->render('/sms-gateways-settings');
    }

    public function actionSmsTemplatesSettings()
    {
        $this->layout = 'main';
        return $this->render('/sms-templates-settings');
    }

    public function actionGdprCookiesSettings()
    {
        $this->layout = 'main';
        return $this->render('/gdpr-cookies-settings');
    }

    public function actionPaymentMethodsSettings()
    {
        $this->layout = 'main';
        return $this->render('/payment-methods-settings');
    }

    public function actionBankAccountsSettings()
    {
        $this->layout = 'main';
        return $this->render('/bank-accounts-settings');
    }

    public function actionTaxRatesSettings()
    {
        $this->layout = 'main';
        return $this->render('/tax-rates-settings');
    }

    public function actionCurrenciesSettings()
    {
        $this->layout = 'main';
        return $this->render('/currencies-settings');
    }

    public function actionSitemapSettings()
    {
        $this->layout = 'main';
        return $this->render('/sitemap-settings');
    }

    public function actionClearCacheSettings()
    {
        $this->layout = 'main';
        return $this->render('/clear-cache-settings');
    }

    public function actionStorageSettings()
    {
        $this->layout = 'main';
        return $this->render('/storage-settings');
    }

    public function actionCronjobSettings()
    {
        $this->layout = 'main';
        return $this->render('/cronjob-settings');
    }

    public function actionBanIpAddressSettings()
    {
        $this->layout = 'main';
        return $this->render('/ban-ip-address-settings');
    }

    public function actionSystemBackupSettings()
    {
        $this->layout = 'main';
        return $this->render('/system-backup-settings');
    }

    public function actionDatabaseBackupSettings()
    {
        $this->layout = 'main';
        return $this->render('/database-backup-settings');
    }

    public function actionSystemUpdate()
    {
        $this->layout = 'main';
        return $this->render('/system-update');
    }

    // Layout Pages

    public function actionLayoutDark()
    {
        $this->layout = 'main';
        return $this->render('/layout-dark');
    }

    public function actionLayoutFullWidth()
    {
        $this->layout = 'main';
        return $this->render('/layout-full-width');
    }

    public function actionLayoutHidden()
    {
        $this->layout = 'main';
        return $this->render('/layout-hidden');
    }

    public function actionLayoutHoverView()
    {
        $this->layout = 'main';
        return $this->render('/layout-hover-view');
    }

    public function actionLayoutMini()
    {
        $this->layout = 'main';
        return $this->render('/layout-mini');
    }

    public function actionLayoutRtl()
    {
        $this->layout = 'main';
        return $this->render('/layout-rtl');
    }

    // Authentication Pages

    public function actionLoginCover()
    {
        $this->layout = 'auth_main';
        return $this->render('/login-cover');
    }

    public function actionLoginIllustration()
    {
        $this->layout = 'auth_main';
        return $this->render('/login-illustration');
    }

    public function actionLoginBasic()
    {
        $this->layout = 'auth_main';
        return $this->render('/login-basic');
    }

    public function actionLogin()
    {
        $this->layout = 'auth_main';
        return $this->render('/login');
    }

    public function actionRegisterCover()
    {
        $this->layout = 'auth_main';
        return $this->render('/register-cover');
    }

    public function actionRegisterIllustration()
    {
        $this->layout = 'auth_main';
        return $this->render('/register-illustration');
    }

    public function actionRegisterBasic()
    {
        $this->layout = 'auth_main';
        return $this->render('/register-basic');
    }

    public function actionForgotPasswordCover()
    {
        $this->layout = 'auth_main';
        return $this->render('/forgot-password-cover');
    }

    public function actionForgotPasswordIllustration()
    {
        $this->layout = 'auth_main';
        return $this->render('/forgot-password-illustration');
    }

    public function actionForgotPasswordBasic()
    {
        $this->layout = 'auth_main';
        return $this->render('/forgot-password-basic');
    }

    public function actionResetPasswordCover()
    {
        $this->layout = 'auth_main';
        return $this->render('/reset-password-cover');
    }

    public function actionResetPasswordIllustration()
    {
        $this->layout = 'auth_main';
        return $this->render('/reset-password-illustration');
    }

    public function actionResetPasswordBasic()
    {
        $this->layout = 'auth_main';
        return $this->render('/reset-password-basic');
    }

    public function actionEmailVerificationCover()
    {
        $this->layout = 'auth_main';
        return $this->render('/email-verification-cover');
    }

    public function actionEmailVerificationIllustration()
    {
        $this->layout = 'auth_main';
        return $this->render('/email-verification-illustration');
    }

    public function actionEmailVerificationBasic()
    {
        $this->layout = 'auth_main';
        return $this->render('/email-verification-basic');
    }

    public function actionSuccessCover()
    {
        $this->layout = 'auth_main';
        return $this->render('/success-cover');
    }

    public function actionSuccessIllustration()
    {
        $this->layout = 'auth_main';
        return $this->render('/success-illustration');
    }

    public function actionSuccessBasic()
    {
        $this->layout = 'auth_main';
        return $this->render('/success-basic');
    }

    public function actionTwoStepVerificationCover()
    {
        $this->layout = 'auth_main';
        return $this->render('/two-step-verification-cover');
    }

    public function actionTwoStepVerificationIllustration()
    {
        $this->layout = 'auth_main';
        return $this->render('/two-step-verification-illustration');
    }

    public function actionTwoStepVerificationBasic()
    {
        $this->layout = 'auth_main';
        return $this->render('/two-step-verification-basic');
    }

    public function actionLockScreen()
    {
        $this->layout = 'auth_main';
        return $this->render('/lock-screen');
    }

    public function actionError404()
    {
        $this->layout = 'auth_main';
        return $this->render('/error-404');
    }

    public function actionError500()
    {
        $this->layout = 'auth_main';
        return $this->render('/error-500');
    }

    // UI Charts

    public function actionChartApex()
    {
        $this->layout = 'main';
        return $this->render('/chart-apex');
    }

    public function actionChartJs()
    {
        $this->layout = 'main';
        return $this->render('/chart-js');
    }

    public function actionChartMorris()
    {
        $this->layout = 'main';
        return $this->render('/chart-morris');
    }

    public function actionChartFlot()
    {
        $this->layout = 'main';
        return $this->render('/chart-flot');
    }

    public function actionChartPeity()
    {
        $this->layout = 'main';
        return $this->render('/chart-peity');
    }

    public function actionChartC3()
    {
        $this->layout = 'main';
        return $this->render('/chart-c3');
    }

    // UI - Forms

    public function actionFormBasicInputs()
    {
        $this->layout = 'main';
        return $this->render('/form-basic-inputs');
    }

    public function actionFormCheckboxRadios()
    {
        $this->layout = 'main';
        return $this->render('/form-checkbox-radios');
    }

    public function actionFormEditors()
    {
        $this->layout = 'main';
        return $this->render('/form-editors');
    }

    public function actionFormElements()
    {
        $this->layout = 'main';
        return $this->render('/form-elements');
    }

    public function actionFormFileupload()
    {
        $this->layout = 'main';
        return $this->render('/form-fileupload');
    }

    public function actionFormFloatingLabels()
    {
        $this->layout = 'main';
        return $this->render('/form-floating-labels');
    }

    public function actionFormGridGutters()
    {
        $this->layout = 'main';
        return $this->render('/form-grid-gutters');
    }

    public function actionFormHorizontal()
    {
        $this->layout = 'main';
        return $this->render('/form-horizontal');
    }

    public function actionFormInputGroups()
    {
        $this->layout = 'main';
        return $this->render('/form-input-groups');
    }

    public function actionFormMask()
    {
        $this->layout = 'main';
        return $this->render('/form-mask');
    }

    public function actionFormPickers()
    {
        $this->layout = 'main';
        return $this->render('/form-pickers');
    }

    public function actionFormRangeSlider()
    {
        $this->layout = 'main';
        return $this->render('/form-range-slider');
    }

    public function actionFormSelect2()
    {
        $this->layout = 'main';
        return $this->render('/form-select2');
    }

    public function actionFormValidation()
    {
        $this->layout = 'main';
        return $this->render('/form-validation');
    }

    public function actionFormVertical()
    {
        $this->layout = 'main';
        return $this->render('/form-vertical');
    }

    public function actionFormWizard()
    {
        $this->layout = 'main';
        return $this->render('/form-wizard');
    }

    // UI - Icons

    public function actionIconBootstrap()
    {
        $this->layout = 'main';
        return $this->render('/icon-bootstrap');
    }

    public function actionIconFontawesome()
    {
        $this->layout = 'main';
        return $this->render('/icon-fontawesome');
    }

    public function actionIconFeather()
    {
        $this->layout = 'main';
        return $this->render('/icon-feather');
    }

    public function actionIconIonic()
    {
        $this->layout = 'main';
        return $this->render('/icon-ionic');
    }

    public function actionIconMaterial()
    {
        $this->layout = 'main';
        return $this->render('/icon-material');
    }

    public function actionIconPe7()
    {
        $this->layout = 'main';
        return $this->render('/icon-pe7');
    }

    public function actionIconSimpleline()
    {
        $this->layout = 'main';
        return $this->render('/icon-simpleline');
    }

    public function actionIconThemify()
    {
        $this->layout = 'main';
        return $this->render('/icon-themify');
    }

    public function actionIconWeather()
    {
        $this->layout = 'main';
        return $this->render('/icon-weather');
    }

    public function actionIconTypicons()
    {
        $this->layout = 'main';
        return $this->render('/icon-typicons');
    }

    public function actionIconFlag()
    {
        $this->layout = 'main';
        return $this->render('/icon-flag');
    }

    public function actionIconRemix()
    {
        $this->layout = 'main';
        return $this->render('/icon-remix');
    }

    public function actionIconTabler()
    {
        $this->layout = 'main';
        return $this->render('/icon-tabler');
    }

    // UI - Maps

    public function actionMapsLeaflet()
    {
        $this->layout = 'main';
        return $this->render('/maps-leaflet');
    }

    public function actionMapsVector()
    {
        $this->layout = 'main';
        return $this->render('/maps-vector');
    }

    // UI - Tables

    public function actionTablesBasic()
    {
        $this->layout = 'main';
        return $this->render('/tables-basic');
    }

    public function actionDataTables()
    {
        $this->layout = 'main';
        return $this->render('/data-tables');
    }

    // UI - UI Components

    public function actionUiAccordion()
    {
        $this->layout = 'main';
        return $this->render('/ui-accordion');
    }

    public function actionUiAlerts()
    {
        $this->layout = 'main';
        return $this->render('/ui-alerts');
    }

    public function actionUiAvatar()
    {
        $this->layout = 'main';
        return $this->render('/ui-avatar');
    }

    public function actionUiBadges()
    {
        $this->layout = 'main';
        return $this->render('/ui-badges');
    }

    public function actionUiBreadcrumb()
    {
        $this->layout = 'main';
        return $this->render('/ui-breadcrumb');
    }

    public function actionUiButtonsGroup()
    {
        $this->layout = 'main';
        return $this->render('/ui-buttons-group');
    }

    public function actionUiButtons()
    {
        $this->layout = 'main';
        return $this->render('/ui-buttons');
    }

    public function actionUiCards()
    {
        $this->layout = 'main';
        return $this->render('/ui-cards');
    }

    public function actionUiCarousel()
    {
        $this->layout = 'main';
        return $this->render('/ui-carousel');
    }

    public function actionUiClipboard()
    {
        $this->layout = 'main';
        return $this->render('/ui-clipboard');
    }

    public function actionUiCollapse()
    {
        $this->layout = 'main';
        return $this->render('/ui-collapse');
    }

    public function actionUiColors()
    {
        $this->layout = 'main';
        return $this->render('/ui-colors');
    }

    public function actionUiDropdowns()
    {
        $this->layout = 'main';
        return $this->render('/ui-dropdowns');
    }

    public function actionUiGrid()
    {
        $this->layout = 'main';
        return $this->render('/ui-grid');
    }

    public function actionUiImages()
    {
        $this->layout = 'main';
        return $this->render('/ui-images');
    }

    public function actionUiLightbox()
    {
        $this->layout = 'main';
        return $this->render('/ui-lightbox');
    }

    public function actionUiLinks()
    {
        $this->layout = 'main';
        return $this->render('/ui-links');
    }

    public function actionUiListGroup()
    {
        $this->layout = 'main';
        return $this->render('/ui-list-group');
    }

    public function actionUiModals()
    {
        $this->layout = 'main';
        return $this->render('/ui-modals');
    }

    public function actionUiNavTabs()
    {
        $this->layout = 'main';
        return $this->render('/ui-nav-tabs');
    }

    public function actionUiNotifications()
    {
        $this->layout = 'main';
        return $this->render('/ui-notifications');
    }

    public function actionUiOffcanvas()
    {
        $this->layout = 'main';
        return $this->render('/ui-offcanvas');
    }

    public function actionUiPagination()
    {
        $this->layout = 'main';
        return $this->render('/ui-pagination');
    }

    public function actionUiPlaceholders()
    {
        $this->layout = 'main';
        return $this->render('/ui-placeholders');
    }

    public function actionUiPopovers()
    {
        $this->layout = 'main';
        return $this->render('/ui-popovers');
    }

    public function actionUiProgress()
    {
        $this->layout = 'main';
        return $this->render('/ui-progress');
    }

    public function actionUiRangeslider()
    {
        $this->layout = 'main';
        return $this->render('/ui-rangeslider');
    }

    public function actionUiRating()
    {
        $this->layout = 'main';
        return $this->render('/ui-rating');
    }

    public function actionUiRatio()
    {
        $this->layout = 'main';
        return $this->render('/ui-ratio');
    }

    public function actionUiScrollbar()
    {
        $this->layout = 'main';
        return $this->render('/ui-scrollbar');
    }

    public function actionUiScrollspy()
    {
        $this->layout = 'main';
        return $this->render('/ui-scrollspy');
    }

    public function actionUiSortable()
    {
        $this->layout = 'main';
        return $this->render('/ui-sortable');
    }

    public function actionUiSpinner()
    {
        $this->layout = 'main';
        return $this->render('/ui-spinner');
    }

    public function actionUiSweetalerts()
    {
        $this->layout = 'main';
        return $this->render('/ui-sweetalerts');
    }

    public function actionUiToasts()
    {
        $this->layout = 'main';
        return $this->render('/ui-toasts');
    }

    public function actionUiTooltips()
    {
        $this->layout = 'main';
        return $this->render('/ui-tooltips');
    }

    public function actionUiTypography()
    {
        $this->layout = 'main';
        return $this->render('/ui-typography');
    }

    public function actionUiUtilities()
    {
        $this->layout = 'main';
        return $this->render('/ui-utilities');
    }

    public function actionExtendedDragula()
    {
        $this->layout = 'main';
        return $this->render('/extended-dragula');
    }

}