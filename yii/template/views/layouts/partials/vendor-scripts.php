<?php
use yii\helpers\Html;
use yii\helpers\Url;

$path = Yii::$app->request->getPathInfo();
// Handle root path - if empty, treat as index page
$page = empty($path) ? 'index' : basename($path);
?>

	<!-- jQuery -->
	<script src="<?= Url::to('@web/assets/js/jquery-3.7.1.min.js') ?>"></script>

	<!-- Bootstrap Core JS -->
	<script src="<?= Url::to('@web/assets/js/bootstrap.bundle.min.js') ?>"></script>  

	<!-- Simplebar JS -->
	<script src="<?= Url::to('@web/assets/plugins/simplebar/simplebar.min.js') ?>"></script>
    
	<!-- Daterangepikcer JS -->
	<script src="<?= Url::to('@web/assets/js/moment.min.js') ?>"></script>
	<script src="<?= Url::to('@web/assets/plugins/daterangepicker/daterangepicker.js') ?>"></script>

<?php if ($page === 'add-doctor' || $page === 'add-invoices' || $page === 'appointment-calendar' || $page === 'appointment-consultations' || $page === 'appointment-settings' || $page === 'appointments' || $page === 'asset' || $page === 'calendar' || $page === 'create-patient' || $page === 'delete-account-request' || $page === 'designation' || $page === 'doctor-dashboard' || $page === 'doctor-details' || $page === 'doctor-schedule' || $page === 'doctors-appointment-details' || $page === 'doctors-appointments' || $page === 'doctors-leaves' || $page === 'doctors-list' || $page === 'doctors-patient-details' || $page === 'doctors-prescriptions' || $page === 'doctors-reviews' || $page === 'doctors-schedules' || $page === 'doctors' || $page === 'edit-doctor' || $page === 'edit-invoices' || $page === 'edit-patient' || $page === 'expense-category' || $page === 'expenses' || $page === 'holidays' || $page === 'hrm-departments' || $page === 'income' || $page === 'index' || $page === 'invoice' || $page === 'invoice-details' || $page === 'invoices' || $page === 'layout-full-width' || $page === 'layout-hidden' || $page === 'layout-hover-view' || $page === 'layout-mini' || $page === 'layout-dark' || $page === 'layout-rtl' || $page === 'leaves' || $page === 'new-appointment' || $page === 'notes' || $page === 'patient-appointment-details' || $page === 'patient-appointments' || $page === 'patient-dashboard' || $page === 'patient-details' || $page === 'patient-doctors' || $page === 'patient-invoices' || $page === 'patients-doctor-details' || $page === 'patient-prescriptions' || $page === 'patients' || $page === 'payments' || $page === 'payroll' || $page === 'specializations' || $page === 'staffs' || $page === 'todo-list' || $page === 'todo' || $page === 'transactions' || $page === 'working-hours-settings') {?>  
    <!-- Date Time Pikcer JS -->
	<script src="<?= Url::to('@web/assets/js/bootstrap-datetimepicker.min.js') ?>"></script>
<?php }?>

<?php if ($page === 'appointment-calendar' || $page === 'calendar' || $page === 'doctors-appointment-details' || $page === 'patient-appointment-details') {?>
    <!-- Fullcalendar JS -->
    <script src="<?= Url::to('@web/assets/plugins/fullcalendar/index.global.min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/plugins/fullcalendar/calendar-data.js') ?>"></script>
<?php }?>

<?php if ($page === 'add-blog' || $page === 'add-page' || $page === 'appointment-report' || $page === 'attendance' || $page === 'ban-ip-address-settings' || $page === 'clear-cache-settings' || $page === 'cronjob-settings' || $page === 'currencies-settings' || $page === 'database-backup-settings' || $page === 'delete-account-request' || $page === 'designation' || $page === 'doctor-schedule' || $page === 'doctors-list' || $page === 'doctors-notifications' || $page === 'doctor-schedules' || $page === 'edit-blog' || $page === 'edit-page' || $page === 'email-reply' || $page === 'email-templates-settings' || $page === 'email' || $page === 'expense-report' || $page === 'hrm-departments' || $page === 'income-report' || $page === 'language-settings' || $page === 'language-settings2' || $page === 'language-settings3' || $page === 'leaves' || $page === 'notifications' || $page === 'patient-notifications' || $page === 'patient-report' || $page === 'payroll-2' || $page === 'profit-and-loss' || $page === 'roles-and-permissions' || $page === 'security-settings' || $page === 'seo-setup-settings' || $page === 'services' || $page === 'sitemap-settigs' || $page === 'sms-templates-settings' || $page === 'specializations' || $page === 'storage-settings' || $page === 'system-backup-settings' || $page === 'system-update' || $page === 'tax-ratings-settings') {?>
    <!-- Bootstrap Tagsinput JS -->
    <script src="<?= Url::to('@web/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') ?>"></script>
<?php }?>

<?php if ($page === 'contact-messages' || $page === 'create-patient' || $page === 'edit-patient' || $page === 'new-appointment' || $page === 'patient-details' || $page === 'patients-doctor-details' || $page === 'security-settings' || $page === 'ticket-details' || $page === 'tickets') {?>
    <!-- intel Input -->
    <script src="<?= Url::to('@web/assets/plugins/intltelinput/js/intlTelInput.js') ?>"></script>
<?php }?>

<?php if ($page === 'asset' || $page === 'expenses' || $page === 'income' || $page === 'invoices' || $page === 'patient-details' || $page === 'patient-doctor-details' || $page === 'payments' || $page === 'roles-and-permissions' || $page === 'services' || $page === 'staffs' || $page === 'transactions' || $page === 'ui-rangeslider') {?>
    <!-- Rangeslider JS -->
	<script src="<?= Url::to('@web/assets/plugins/ion-rangeslider/js/ion.rangeSlider.js') ?>"></script>
	<script src="<?= Url::to('@web/assets/plugins/ion-rangeslider/js/custom-rangeslider.js') ?>"></script>
	<script src="<?= Url::to('@web/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') ?>"></script>
<?php }?>    

<?php if ($page === 'add-invoices' || $page === 'announcements' || $page === 'appointment-calendar' || $page === 'appointment-consultations' || $page === 'appointment-report' || $page === 'appointments' || $page === 'asset' || $page === 'attendance' || $page === 'contact-messages' || $page === 'contacts' || $page === 'data-tables' || $page === 'delete-account-request' || $page === 'designation' || $page === 'doctor-schedule' || $page === 'doctors-appointment-details' || $page === 'doctors-appointments' || $page === 'doctors-leaves' || $page === 'doctors-list' || $page === 'doctors-notifications' || $page === 'doctors-patient-details' || $page === 'doctors-prescription-details' || $page === 'doctors-prescriptions' || $page === 'doctors-reviews' || $page === 'doctors-schedules' || $page === 'edit-invoices' || $page === 'expense-category' || $page === 'expense-report' || $page === 'expenses' || $page === 'hrm-departments' || $page === 'income-report' || $page === 'income' || $page === 'invoice' || $page === 'invoice-details' || $page === 'invoices' || $page === 'leaves' || $page === 'newsletters' || $page === 'notifications' || $page === 'online-consultations' || $page === 'pages' || $page === 'patient-appointment-details' || $page === 'patient-appointments' || $page === 'patient-details' || $page === 'patient-doctors' || $page === 'patient-invoice-details' || $page === 'patient-invoices' || $page === 'patient-notifications' || $page === 'patient-prescription-details' || $page === 'patient-prescriptions' || $page === 'patient-report' || $page === 'patients-doctor-details' || $page === 'patients' || $page === 'payments' || $page === 'payroll-2' || $page === 'payroll' || $page === 'profit-and-loss' || $page === 'roles-and-permissions' || $page === 'services' || $page === 'specializations' || $page === 'staffs' || $page === 'tickets' || $page === 'transactions') {?>
    <!-- Datatable JS -->
    <script src="<?= Url::to('@web/assets/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/js/dataTables.bootstrap5.min.js') ?>"></script>
<?php }?>    

<?php if ($page === 'add-blog' || $page === 'add-page' || $page === 'edit-blog' || $page === 'edit-page' || $page === 'email-templates-settings' || $page === 'file-manager' || $page === 'form-editors' || $page === 'gdpr-cookies-settings' || $page === 'invoice-settings' || $page === 'invoice-templates-settings' || $page === 'notes' || $page === 'sms-templates-settings' || $page === 'ticket-details' || $page === 'todo-list' || $page === 'todo') {?>
    <!-- Quill JS -->
    <script src="<?= Url::to('@web/assets/plugins/quill/quill.min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/js/form-quilljs.js') ?>"></script>
<?php }?>

<?php if ($page === 'email-reply' || $page === 'search-list' || $page === 'social-feed') {?>
    <!-- Fancybox JS -->
    <script src="<?= Url::to('@web/assets/plugins/fancybox/jquery.fancybox.min.js') ?>"></script>
<?php }?>

<?php if ($page === 'appointment-report' || $page === 'chart-apex' || $page === 'doctor-dashboard' || $page === 'file-manager' || $page === 'index' || $page === 'layout-full-width' || $page === 'layout-hidden' || $page === 'layout-hover-view' || $page === 'layout-mini' || $page === 'layout-rtl' || $page === 'layout-dark' || $page === 'patient-dashboard' || $page === 'widgets') {?>
    <!-- Chart JS -->
    <script src="<?= Url::to('@web/assets/plugins/apexchart/apexcharts.min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/plugins/apexchart/chart-data.js') ?>"></script>   
<?php }?>  

<?php if ($page === 'chart-c3') {?>
    <!-- Chart JS -->
    <script src="<?= Url::to('@web/assets/plugins/c3-chart/d3.v5.min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/plugins/c3-chart/c3.min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/plugins/c3-chart/chart-data.js') ?>"></script>
<?php }?>

<?php if ($page === 'chart-flot') {?>
    <!-- Chart JS -->
    <script src="<?= Url::to('@web/assets/plugins/flot/jquery.flot.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/plugins/flot/jquery.flot.fillbetween.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/plugins/flot/jquery.flot.pie.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/plugins/flot/chart-data.js') ?>"></script>
<?php }?>

<?php if ($page === 'chart-js') {?>
    <!-- Chart JS -->
    <script src="<?= Url::to('@web/assets/plugins/chartjs/chart.min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/plugins/chartjs/chart-data.js') ?>"></script>
<?php }?>

<?php if ($page === 'chart-morris') {?>
    <!-- Chart JS -->
    <script src="<?= Url::to('@web/assets/plugins/morris/raphael-min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/plugins/morris/morris.min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/plugins/morris/chart-data.js') ?>"></script>
<?php }?>

<?php if ($page === 'chart-peity') {?>
    <!-- Chart JS -->
    <script src="<?= Url::to('@web/assets/plugins/peity/jquery.peity.min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/plugins/peity/chart-data.js') ?>"></script>
<?php }?>

<?php if ($page === 'extended-dragula') {?>
    <!-- Dragula js-->
    <script src="<?= Url::to('@web/assets/plugins/dragula/dragula.min.js') ?>"></script>

    <!-- Dragula Demo Component js -->
    <script src="<?= Url::to('@web/assets/js/dragula.js') ?>"></script>
<?php }?>

<?php if ($page === 'form-fileupload') {?>
    <!-- Dropzone File Js -->
    <script src="<?= Url::to('@web/assets/plugins/dropzone/dropzone-min.js') ?>"></script>

    <!-- File Upload Demo js -->
    <script src="<?= Url::to('@web/assets/js/form-fileupload.js') ?>"></script>
<?php }?>

<?php if ($page === 'form-mask') {?>
    <!-- Mask JS -->
    <script src="<?= Url::to('@web/assets/js/jquery.maskedinput.min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/js/mask.js') ?>"></script>
<?php }?>

<?php if ($page === 'form-pickers' || $page === 'kanban-view' || $page === 'notes' || $page === 'todo-list' || $page === 'todo') {?>
    <!-- Flatpickr JS -->
	<script src="<?= Url::to('@web/assets/plugins/flatpickr/flatpickr.min.js') ?>"></script>
<?php }?>

<?php if ($page === 'form-range-slider') {?>
    <!-- noUiSlider js -->
    <script src="<?= Url::to('@web/assets/plugins/nouislider/nouislider.min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/plugins/wnumb/wNumb.min.js') ?>"></script>

    <!-- Plugins only -->
    <script src="<?= Url::to('@web/assets/js/extended-range-slider.js') ?>"></script>
<?php }?>

<?php if ($page !== 'form-mask') {?>
    <!-- Select2 JS -->
    <script src="<?= Url::to('@web/assets/plugins/select2/js/select2.min.js') ?>"></script>
<?php }?>

<?php if ($page === 'form-select2' || $page === 'email-reply' || $page === 'email' || $page === 'notes') {?>
    <!-- Choices JS -->
    <script src="<?= Url::to('@web/assets/plugins/choices.js/public/assets/scripts/choices.min.js') ?>"></script>
<?php }?>

<?php if ($page === 'form-validation') {?>
    <!-- Validation JS -->
    <script src="<?= Url::to('@web/assets/js/form-validation.js') ?>"></script>
<?php }?>

<?php if ($page === 'form-wizard') {?>
	<!-- Wizrd JS -->
	<script src="<?= Url::to('@web/assets/plugins/vanilla-wizard/js/wizard.min.js') ?>"></script>

    <!-- Wizard JS -->
    <script src="<?= Url::to('@web/assets/js/form-wizard.js') ?>"></script>
<?php }?>

<?php if ($page === 'gallery' || $page === 'ui-lightbox' || $page === 'widgets') {?>
    <!-- Lightbox JS -->
    <script src="<?= Url::to('@web/assets/plugins/lightbox/glightbox.min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/plugins/lightbox/lightbox.js') ?>"></script>
<?php }?>

<?php if ($page === 'maps-leaflet') {?>
    <!-- Leaflet Maps JS -->
    <script src="<?= Url::to('@web/assets/plugins/leaflet/leaflet.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/js/leaflet.js') ?>"></script>
<?php }?>

<?php if ($page === 'maps-vector') {?>
    <!-- Map JS -->
    <script src="<?= Url::to('@web/assets/plugins/jsvectormap/js/jsvectormap.min.js') ?>"></script>

    <!-- JSVector Maps MapsJS -->
    <script src="<?= Url::to('@web/assets/plugins/jsvectormap/maps/world-merc.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/js/us-merc-en.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/js/russia.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/js/spain.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/js/canada.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/js/jsvectormap.js') ?>"></script>
<?php }?>

<?php if ($page === 'ui-rating') {?>
    <!-- Rater JS -->
    <script src="<?= Url::to('@web/assets/plugins/rater-js/index.js') ?>"></script>

    <!-- Internal Ratings JS -->
    <script src="<?= Url::to('@web/assets/js/ratings.js') ?>"></script>
<?php }?>

<?php if ($page === 'ui-scrollbar' || $page === 'ui-scrollspy') {?>
    <!-- Scrollbar JS -->
    <script src="<?= Url::to('@web/assets/plugins/scrollbar/scrollbar.min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/plugins/scrollbar/custom-scroll.js') ?>"></script>
<?php }?>

<?php if ($page === 'ui-sortable') {?>
    <!-- Sortable JS -->
    <script src="<?= Url::to('@web/assets/plugins/sortablejs/Sortable.min.js') ?>"></script>

    <!-- Internal Sortable JS -->
    <script src="<?= Url::to('@web/assets/js/sortable.js') ?>"></script>
<?php }?>

<?php if ($page === 'ui-sweetalerts') {?>
    <!-- Sweet Alerts js -->
    <script src="<?= Url::to('@web/assets/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/js/sweetalerts.js') ?>"></script>
<?php }?>

<?php if ($page === 'ui-toasts') {?>
    <!-- Toastr JS -->
    <script src="<?= Url::to('@web/assets/plugins/toastr/toastr.min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/plugins/toastr/toastr.js') ?>"></script>
<?php }?>

<?php if ($page === 'ui-tooltips') {?>
    <!-- Custom JS -->
    <script src="<?= Url::to('@web/assets/js/popover.js') ?>"></script>
<?php }?>

<?php if ($page === 'doctor-details' || $page === 'doctors-patient-details' || $page === 'notes' || $page === 'patients-doctor-details' || $page === 'social-feed' || $page === 'file-manager') {?>
    <!-- Sticky Sidebar JS -->
    <script src="<?= Url::to('@web/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') ?>"></script>
<?php }?>

<?php if ($page === 'chat' || $page === 'messages' || $page === 'video-call') {?>
	<!-- Slimscroll JS -->
    <script src="<?= Url::to('@web/assets/js/jquery.slimscroll.min.js') ?>"></script>
<?php }?>

<?php if ($page === 'kanban-view') {?>
    <!-- Drag Card -->
    <script src="<?= Url::to('@web/assets/js/jquery-ui.min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/js/jquery.ui.touch-punch.min.js') ?>"></script>
<?php }?>

<?php if ($page === 'add-doctor' || $page === 'appointment-report' || $page === 'attendance' || $page === 'delete-account-request' || $page === 'designation' || $page === 'doctor-schedule' || $page === 'doctors-notifications' || $page === 'doctors-schedules' || $page === 'doctors' || $page === 'edit-doctor' || $page === 'expense-report' || $page === 'hrm-departments' || $page === 'income-report' || $page === 'leaves' || $page === 'notifications' || $page === 'patient-notifications' || $page === 'patient-report' || $page === 'payroll-2' || $page === 'payroll' || $page === 'permissions' || $page === 'profit-and-loss' || $page === 'roles-and-permissions' || $page === 'services' || $page === 'specializations' || $page === 'staffs') {?>    
    <!-- Custom JS -->
    <script src="<?= Url::to('@web/assets/js/doctors.js') ?>"></script>
<?php }?>    

<?php if ($page === 'chat' || $page === 'messages' || $page === 'video-call') {?>
	<!-- Custom JS -->
	<script src="<?= Url::to('@web/assets/js/chat.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/js/slimscroll.js') ?>"></script>
<?php }?>

<?php if ($page === 'doctor-details' || $page === 'doctors-patient-details' || $page === 'notes' || $page === 'social-feed') {?>
    <!-- Custom JS -->
    <script src="<?= Url::to('@web/assets/js/social-feed.js') ?>"></script>
<?php }?>

<?php if ($page === 'doctor-details' || $page === 'doctors-patient-details' || $page === 'email-reply' || $page === 'email' || $page === 'social-feed') {?>
    <!-- Custom JS -->
    <script src="<?= Url::to('@web/assets/js/email.js') ?>"></script>
<?php }?>      

<?php if ($page === 'coming-soon' || $page === 'under-maintenance') {?>
    <!-- Custom JS -->
    <script src="<?= Url::to('@web/assets/js/coming-soon.js') ?>"></script>
<?php }?>    

<?php if ($page === 'kanban-view') {?>
	<!-- Custom JS -->
    <script src="<?= Url::to('@web/assets/js/kanban.js') ?>"></script>
<?php }?>

<?php if ($page === 'todo-list' || $page === 'todo') {?>
	<!-- Custom JS -->
    <script src="<?= Url::to('@web/assets/js/todo.js') ?>"></script>
<?php }?>

<?php if ($page === 'ui-clipboard') {?>
    <!-- Clipboard JS -->
    <script src="<?= Url::to('@web/assets/plugins/clipboard/clipboard.min.js') ?>"></script>

	<!-- Custom JS -->
    <script src="<?= Url::to('@web/assets/js/clipboard.js') ?>"></script>
<?php }?>

<?php if ($page === 'ui-counter') {?>
    <!-- counter JS -->
    <script src="<?= Url::to('@web/assets/plugins/countup/jquery.counterup.min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/plugins/countup/jquery.waypoints.min.js') ?>"></script>
    <script src="<?= Url::to('@web/assets/plugins/countup/jquery.missofis-countdown.js') ?>"></script>

	<!-- Custom JS -->
    <script src="<?= Url::to('@web/assets/js/counter.js') ?>"></script>
<?php }?>

<?php if ($page !== 'form-mask') {?>
    <!-- Main JS -->
    <script src="<?= Url::to('@web/assets/js/script.js') ?>"></script>
<?php }?> 