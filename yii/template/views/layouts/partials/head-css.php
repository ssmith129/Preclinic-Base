<?php
use yii\helpers\Html;
use yii\helpers\Url;

$path = Yii::$app->request->getPathInfo();
// Handle root path - if empty, treat as index page
$page = empty($path) ? 'index' : basename($path);
?>  

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= Url::to('@web/assets/img/favicon.png') ?>">

    <!-- Apple Icon -->
    <link rel="apple-touch-icon" href="<?= Url::to('@web/assets/img/apple-icon.png') ?>">

<?php if ($page !== 'layout-dark' && $page !== 'layout-mini' && $page !== 'layout-hidden' && $page !== 'layout-hover-view' && $page !== 'layout-full-width' && $page !== 'layout-rtl' && $page !== 'login-basic' && $page !== 'login-illustration' && $page !== 'login-cover' && $page !== 'login' && $page !== 'register-basic' && $page !== 'register-illustration' && $page !== 'register-cover' && $page !== 'forgot-password-basic' && $page !== 'forgot-password-illustration' && $page !== 'forgot-password-cover' && $page !== 'reset-password-basic' && $page !== 'reset-password-illustration' && $page !== 'reset-password-cover' && $page !== 'email-verification-basic' && $page !== 'email-verification-illustration' && $page !== 'email-verification-cover' && $page !== 'success-basic' && $page !== 'success-illustration' && $page !== 'success-cover' && $page !== 'two-step-verification-basic' && $page !== 'two-step-verification-illustration' && $page !== 'two-step-verification-cover' && $page !== 'lock-screen' && $page !== 'error-404' && $page !== 'error-500' && $page !== 'coming-soon' && $page !== 'under-maintenance') {?>     
    <!-- Theme Config Js -->
    <script src="<?= Url::to('@web/assets/js/theme-script.js') ?>"></script>
<?php }?>    

<?php if ($page !== 'layout-rtl') {?>    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/css/bootstrap.min.css') ?>">
<?php }?>     

<?php if ($page === 'layout-rtl') {?>    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/css/bootstrap.rtl.min.css') ?>"> 
<?php }?>       

    <!-- Fontawesome CSS -->
	<link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/fontawesome/css/fontawesome.min.css') ?>">
	<link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/fontawesome/css/all.min.css') ?>">    

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/tabler-icons/tabler-icons.min.css') ?>">

<?php if ($page === 'icon-bootstrap') {?>    
    <!-- Bootstrap Icon CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/icons/bootstrap/bootstrap-icons.min.css') ?>">
<?php }?>

<?php if ($page === 'icon-feather' || $page === 'tables-basic') {?>
    <!-- Feather CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/icons/feather/feather.css') ?>">
<?php }?>

<?php if ($page === 'icon-flag') {?>
    <!-- Flag CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/icons/flags/flags.css') ?>">
<?php }?>

<?php if ($page === 'icon-ionic') {?>
    <!-- Ionic CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/icons/ionic/ionicons.css') ?>">
<?php }?>

<?php if ($page === 'icon-material') {?>
    <!-- Material CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/material/materialdesignicons.css') ?>">
<?php }?>

<?php if ($page === 'icon-pe7') {?>
    <!-- Pe7 CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/icons/pe7/pe-icon-7.css') ?>">
<?php }?>

<?php if ($page === 'icon-remix') {?>
    <!-- Remix Icon CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/icons/remix/remixicon.css') ?>">
<?php }?>

<?php if ($page === 'icon-simpleline') {?>
    <!-- Simpleline CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/simpleline/simple-line-icons.css') ?>">
<?php }?>

<?php if ($page === 'icon-themify') {?>
    <!-- Themify CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/icons/themify/themify.css') ?>">
<?php }?>

<?php if ($page === 'icon-typicons') {?>
    <!-- Typicon CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/icons/typicons/typicons.css') ?>">
<?php }?>

<?php if ($page === 'icon-weather') {?>
    <!-- Weather CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/icons/weather/weathericons.css') ?>">
<?php }?>

    <!-- Simplebar CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/simplebar/simplebar.min.css') ?>">    

    <!-- Daterangepikcer CSS -->
	<link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/daterangepicker/daterangepicker.css') ?>">

<?php if ($page === 'add-doctor' || $page === 'add-invoices' || $page === 'appointment-calendar' || $page === 'appointment-consultations' || $page === 'appointment-settings' || $page === 'appointments' || $page === 'asset' || $page === 'calendar' || $page === 'create-patient' || $page === 'delete-account-request' || $page === 'designation' || $page === 'doctor-dashboard' || $page === 'doctor-details' || $page === 'doctor-schedule' || $page === 'doctors-appointment-details' || $page === 'doctor-appointments' || $page === 'doctors-leaves' || $page === 'doctors-list' || $page === 'doctors-patient-details' || $page === 'doctors-prescriptions' || $page === 'doctors-reviews' || $page === 'doctors-schedules' || $page === 'doctors' || $page === 'edit-doctor' || $page === 'edit-invoices' || $page === 'edit-patient' || $page === 'expense-category' || $page === 'expenses' || $page === 'holidays' || $page === 'hrm-departments' || $page === 'income' || $page === 'index' || $page === 'invoice' || $page === 'invoice-details' || $page === 'invoices' || $page === 'layout-full-width' || $page === 'layout-hidden' || $page === 'layout-hover-view' || $page === 'layout-mini' || $page === 'layout-dark' || $page === 'layout-rtl' || $page === 'leaves' || $page === 'new-appointment' || $page === 'notes' || $page === 'patient-appointment-details' || $page === 'patient-appointments' || $page === 'patient-dashboard' || $page === 'patient-details' || $page === 'patient-doctors' || $page === 'patient-invoices' || $page === 'patients-doctor-details' || $page === 'patient-prescriptions' || $page === 'patients' || $page === 'payments' || $page === 'payroll' || $page === 'specializations' || $page === 'staffs' || $page === 'todo-list' || $page === 'todo' || $page === 'transactions' || $page === 'working-hours-settings') {?>        
    <!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="<?= Url::to('@web/assets/css/bootstrap-datetimepicker.min.css') ?>">
<?php }?>    

<?php if ($page === 'add-blog' || $page === 'add-page' || $page === 'appointment-report' || $page === 'attendance' || $page === 'ban-ip-address-settings' || $page === 'clear-cache-settings' || $page === 'cronjob-settings' || $page === 'currencies-settings' || $page === 'database-backup-settings' || $page === 'delete-account-request' || $page === 'designation' || $page === 'doctor-schedule' || $page === 'doctors-list' || $page === 'doctors-notifications' || $page === 'doctor-schedules' || $page === 'edit-blog' || $page === 'edit-page' || $page === 'email-reply' || $page === 'email-templates-settings' || $page === 'email' || $page === 'expense-report' || $page === 'hrm-departments' || $page === 'income-report' || $page === 'language-settings' || $page === 'language-settings2' || $page === 'language-settings3' || $page === 'leaves' || $page === 'notifications' || $page === 'patient-notifications' || $page === 'patient-report' || $page === 'payroll-2' || $page === 'profit-and-loss' || $page === 'roles-and-permissions' || $page === 'security-settings' || $page === 'seo-setup-settings' || $page === 'services' || $page === 'sitemap-settigs' || $page === 'sms-templates-settings' || $page === 'specializations' || $page === 'storage-settings' || $page === 'system-backup-settings' || $page === 'system-update' || $page === 'tax-ratings-settings') {?>
    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') ?>">
<?php }?> 

<?php if ($page === 'contact-messages' || $page === 'create-patient' || $page === 'edit-patient' || $page === 'new-appointment' || $page === 'patient-details' || $page === 'patients-doctor-details' || $page === 'security-settings' || $page === 'ticket-details' || $page === 'tickets') {?>
	<!-- intltelinput CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/intltelinput/css/intlTelInput.css') ?>">
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/intltelinput/css/demo.css') ?>">
<?php }?>

<?php if ($page === 'asset' || $page === 'expenses' || $page === 'income' || $page === 'invoices' || $page === 'patient-details' || $page === 'patient-doctor-details' || $page === 'payments' || $page === 'roles-and-permissions' || $page === 'services' || $page === 'staffs' || $page === 'transactions' || $page === 'ui-rangeslider') {?>
    <!-- Rangeslider CSS -->
	<link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/ion-rangeslider/css/ion.rangeSlider.css') ?>">
	<link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css') ?>">
<?php }?>    

<?php if ($page === 'add-invoices' || $page === 'announcements' || $page === 'appointment-calendar' || $page === 'appointment-consultations' || $page === 'appointment-report' || $page === 'appointments' || $page === 'asset' || $page === 'attendance' || $page === 'contact-messages' || $page === 'contacts' || $page === 'data-tables' || $page === 'delete-account-request' || $page === 'designation' || $page === 'doctor-schedule' || $page === 'doctors-appointment-details' || $page === 'doctors-appointments' || $page === 'doctors-leaves' || $page === 'doctors-list' || $page === 'doctors-notifications' || $page === 'doctors-patient-details' || $page === 'doctors-prescription-details' || $page === 'doctors-prescriptions' || $page === 'doctors-reviews' || $page === 'doctors-schedules' || $page === 'edit-invoices' || $page === 'expense-category' || $page === 'expense-report' || $page === 'expenses' || $page === 'hrm-departments' || $page === 'income-report' || $page === 'income' || $page === 'invoice' || $page === 'invoice-details' || $page === 'invoices' || $page === 'leaves' || $page === 'newsletters' || $page === 'notifications' || $page === 'online-consultations' || $page === 'pages' || $page === 'patient-appointment-details' || $page === 'patient-appointments' || $page === 'patient-details' || $page === 'patient-doctors' || $page === 'patient-invoice-details' || $page === 'patient-invoices' || $page === 'patient-notifications' || $page === 'patient-prescription-details' || $page === 'patient-prescriptions' || $page === 'patient-report' || $page === 'patients-doctor-details' || $page === 'patients' || $page === 'payments' || $page === 'payroll-2' || $page === 'payroll' || $page === 'profit-and-loss' || $page === 'roles-and-permissions' || $page === 'services' || $page === 'specializations' || $page === 'staffs' || $page === 'tickets' || $page === 'transactions') {?>
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/css/dataTables.bootstrap5.min.css') ?>">
<?php }?> 

<?php if ($page === 'add-blog' || $page === 'add-page' || $page === 'edit-blog' || $page === 'edit-page' || $page === 'email-templates-settings' || $page === 'gdpr-cookies-settings' || $page === 'file-manager' || $page === 'invoice-settings' || $page === 'invoice-templates-settings' || $page === 'notes' || $page === 'sms-templates-settings' || $page === 'notes' || $page === 'sms-templates-settings' || $page === 'ticket-details' || $page === 'todo-list' || $page === 'todo') {?>
    <!-- Quill CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/quill/quill.snow.css') ?>">
<?php }?>

<?php if ($page === 'form-editors') {?>
    <!-- Quill css -->
    <link href="<?= Url::to('@web/assets/plugins/quill/quill.core.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= Url::to('@web/assets/plugins/quill/quill.snow.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= Url::to('@web/assets/plugins/quill/quill.bubble.css') ?>" rel="stylesheet" type="text/css">
<?php }?>   

<?php if ($page === 'email-reply' || $page === 'search-list' || $page === 'social-feed') {?>
    <!-- Fancybox -->
	<link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/fancybox/jquery.fancybox.min.css') ?>">
<?php }?>

<?php if ($page === 'kanban-view') {?>
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/css/owl.carousel.min.css') ?>">
<?php }?>

<?php if ($page === 'chart-c3') {?>
    <!-- ChartC3 CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/c3-chart/c3.min.css') ?>">
<?php }?>

<?php if ($page === 'chart-morris') {?>
    <!-- Morris CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/morris/morris.css') ?>">
<?php }?>

<?php if ($page === 'form-pickers' || $page === 'kanban-view' || $page === 'notes' || $page === 'todo-list' || $page === 'todo') {?>
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/flatpickr/flatpickr.min.css') ?>"> 
<?php }?>

<?php if ($page === 'form-range-slider') {?>
    <!-- nouisliderribute css -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/nouislider/nouislider.min.css') ?>">
<?php }?>

<?php if ($page === 'form-select2' || $page === 'email-reply' || $page === 'email' || $page === 'notes') {?>
    <!-- Choices CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/choices.js/public/assets/styles/choices.min.css') ?>">
<?php }?>

<?php if ($page === 'form-wizard') {?>
    <!-- Wizard CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/twitter-bootstrap-wizard/form-wizard.css') ?>">
<?php }?>

<?php if ($page === 'gallery' || $page === 'ui-lightbox' || $page === 'widgets') {?>
    <!-- Glightbox CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/lightbox/glightbox.min.css') ?>">
<?php }?>

<?php if ($page === 'maps-leaflet') {?>
    <!-- Leaflet Maps CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/leaflet/leaflet.css') ?>">
<?php }?>

<?php if ($page === 'maps-vector') {?>
    <!-- Jsvector Maps -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/jsvectormap/css/jsvectormap.min.css') ?>">
<?php }?>

<?php if ($page === 'ui-sweetalerts') {?>
    <!-- Sweetalert2 CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/sweetalert2/sweetalert2.min.css') ?>">
<?php }?>

<?php if ($page === 'ui-toasts') {?>
    <!-- Toatr CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/toastr/toatr.css') ?>">
<?php }?>

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/plugins/select2/css/select2.min.css') ?>">

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= Url::to('@web/assets/css/style.css') ?>" id="app-style">