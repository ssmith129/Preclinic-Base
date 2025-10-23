<?php
use yii\helpers\Html;
use yii\helpers\Url;

$path = Yii::$app->request->getPathInfo();
// Handle root path - if empty, treat as index page
$page = empty($path) ? 'index' : basename($path);
?>    
    
<?php if ($page !=='doctor-dashboard' && $page !=='doctors-appointments' && $page !=='doctors-appointment-details' && $page !=='doctors-patient-details' && $page !=='online-consultations' && $page !=='doctors-schedules' && $page !=='doctors-prescriptions' && $page !=='doctors-prescription-details' && $page !=='doctors-leaves' && $page !=='doctors-reviews' && $page !=='doctors-profile-settings' && $page !=='doctors-password-settings' && $page !=='doctors-notification-settings' && $page !=='doctors-notifications' && $page !=='patient-dashboard' && $page !=='patient-appointments' && $page !=='patient-appointment-details' && $page !=='patients-doctor-details' && $page !=='patient-doctors' && $page !=='patient-prescriptions' && $page !=='patient-prescription-details' && $page !=='patient-invoices' && $page !=='patient-invoice-details' && $page !=='patient-profile-settings' && $page !=='patient-password-settings' && $page !=='patient-notifications-settings' && $page !=='patient-notifications') { ?>
<!-- Search Modal -->
<div class="modal fade" id="searchModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-transparent">
            <div class="card shadow-none mb-0">
                <div class="px-3 py-2 d-flex flex-row align-items-center" id="search-top">
                    <i class="ti ti-search fs-22"></i>
                    <input type="search" class="form-control border-0" placeholder="Search">
                    <button type="button" class="btn p-0" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x fs-22"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<!-- Sidenav Menu Start -->
<div class="sidebar" id="sidebar">
    
    <!-- Start Logo -->
    <div class="sidebar-logo">
        <div>
            <!-- Logo Normal -->
            <a href="index" class="logo logo-normal">
                <img src="assets/img/logo.svg" alt="Logo">
            </a>

            <!-- Logo Small -->
            <a href="index" class="logo-small">
                <img src="assets/img/logo-small.svg" alt="Logo">
            </a>

            <!-- Logo Dark -->
            <a href="index" class="dark-logo">
                <img src="assets/img/logo-white.svg" alt="Logo">
            </a>
        </div>
        <button class="sidenav-toggle-btn btn border-0 p-0 active" id="toggle_btn"> 
            <i class="ti ti-arrow-left"></i>
        </button>

        <!-- Sidebar Menu Close -->
        <button class="sidebar-close">
            <i class="ti ti-x align-middle"></i>
        </button>                
    </div>
    <!-- End Logo -->

    <!-- Sidenav Menu -->
    <div class="sidebar-inner" data-simplebar>                
        <div id="sidebar-menu" class="sidebar-menu">            
            <?php if ($page !== 'doctor-dashboard' && $page !== 'doctors-appointments' && $page !== 'doctors-appointment-details' && $page !== 'doctors-patient-details' && $page !== 'online-consultations' && $page !== 'doctors-schedules' && $page !== 'doctors-prescriptions' && $page !== 'doctors-prescription-details' && $page !== 'doctors-leaves' && $page !== 'doctors-reviews' && $page !== 'doctors-profile-settings' && $page !== 'doctors-password-settings' && $page !== 'doctors-notification-settings' && $page !== 'doctors-notifications' && $page !== 'patient-dashboard' && $page !== 'patient-appointments' && $page !== 'patient-appointment-details' && $page !== 'patients-doctor-details' && $page !== 'patient-doctors' && $page !== 'patient-prescriptions' && $page !== 'patient-prescription-details' && $page !== 'patient-invoices' && $page !== 'patient-invoice-details' && $page !== 'patient-profile-settings' && $page !== 'patient-password-settings' && $page !== 'patient-notifications-settings' && $page !== 'patient-notifications') { ?>
            <div class="sidebar-top shadow-sm p-2 rounded-1 mb-3 dropend">
                <a href="javascript:void(0);" class="drop-arrow-none" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-offset="0,22" aria-haspopup="false" aria-expanded="false">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <span class="avatar rounded-circle flex-shrink-0 p-2"><img src="./assets/img/icons/trustcare.svg" alt="img"></span>
                            <div class="ms-2">
                                <h6 class="fs-14 fw-semibold mb-0">Trustcare Clinic</h6>
                                <p class="fs-13 mb-0">Lasvegas</p>
                            </div>
                        </div>
                        <i class="ti ti-arrows-transfer-up"></i>                            
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg">
                    <div class="p-2"> 
                        <label class="dropdown-item d-flex align-items-center justify-content-between p-1">
                            <span class="d-flex align-items-center">
                                <span class="me-2"><img src="assets/img/icons/clinic-01.svg" alt=""></span>
                                <span class="fw-semibold text-dark">CureWell Medical Hub<small class="d-block text-muted fw-normal fs-13">Ohio</small></span>
                            </span>
                            <input class="form-check-input m-0 me-2" type="checkbox">
                        </label> 
                        <label class="dropdown-item d-flex align-items-center justify-content-between p-1">
                            <span class="d-flex align-items-center">
                                <span class="me-2"><img src="assets/img/icons/clinic-02.svg" alt=""></span>
                                <span class="fw-semibold text-dark">Trustcare Clinic<small class="d-block text-muted fw-normal fs-13">Lasvegas</small></span>
                            </span>
                            <input class="form-check-input m-0 me-2" type="checkbox">
                        </label> 
                        <label class="dropdown-item d-flex align-items-center justify-content-between p-1">
                            <span class="d-flex align-items-center">
                                <span class="me-2"><img src="assets/img/icons/clinic-03.svg" alt=""></span>
                                <span class="fw-semibold text-dark">NovaCare Medical<small class="d-block text-muted fw-normal fs-13">Washington</small></span>
                            </span>
                            <input class="form-check-input m-0 me-2" type="checkbox">
                        </label> 
                        <label class="dropdown-item d-flex align-items-center justify-content-between p-1">
                            <span class="d-flex align-items-center">
                                <span class="me-2"><img src="assets/img/icons/clinic-04.svg" alt=""></span>
                                <span class="fw-semibold text-dark">Greeny Medical Clinic<small class="d-block text-muted fw-normal fs-13">Illinios</small></span>
                            </span>
                            <input class="form-check-input m-0 me-2" type="checkbox">
                        </label> 
                    </div>
                </div>
            </div>

            <ul>
                <li class="menu-title"><span>Main Menu</span></li>
                <li>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'index' || $page == '/') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-layout-dashboard"></i><span>Dashboard</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="index" class="<?php echo ($page == 'index' || $page == '/') ? 'active' : '' ?>">Admin Dashboard</a></li>
                                <li><a href="doctor-dashboard" class="<?php echo ($page == 'doctor-dashboard') ? 'active' : '' ?>">Doctor Dashboard</a></li>
                                <li><a href="patient-dashboard" class="<?php echo ($page == 'patient-dashboard') ? 'active' : '' ?>">Patient Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'chat' || $page == 'voice-call' || $page == 'video-call' || $page == 'outgoing-call' || $page == 'incoming-call' || $page == 'call-history' || $page == 'calendar' || $page == 'contacts' || $page == 'email' || $page == 'email-reply' || $page == 'invoice' || $page == 'add-invoices' || $page == 'edit-invoices' || $page == 'invoice-details' || $page == 'todo' || $page == 'todo-list' || $page == 'notes' || $page == 'kanban-view' || $page == 'file-manager' || $page == 'social-feed' || $page == 'search-list') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-apps"></i><span>Applications</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="chat" class="<?php echo ($page == 'chat') ? 'active' : '' ?>">Chat</a></li>
                                <li class="submenu submenu-two">
                                    <a href="#" class="<?php echo ($page == 'voice-call' || $page == 'video-call' || $page == 'outgoing-call' || $page == 'incoming-call' || $page == 'call-history') ? 'active subdrop' : '' ?>">Calls<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="voice-call" class="<?php echo ($page == 'voice-call') ? 'active' : '' ?>">Voice Call</a></li>
                                        <li><a href="video-call" class="<?php echo ($page == 'video-call') ? 'active' : '' ?>">Video Call</a></li>
                                        <li><a href="outgoing-call" class="<?php echo ($page == 'outgoing-call') ? 'active' : '' ?>">Outgoing Call</a></li>
                                        <li><a href="incoming-call" class="<?php echo ($page == 'incoming-call') ? 'active' : '' ?>">Incoming Call</a></li>
                                        <li><a href="call-history" class="<?php echo ($page == 'call-history') ? 'active' : '' ?>">Call History</a></li>
                                    </ul>
                                </li>
                                <li><a href="calendar" class="<?php echo ($page == 'calendar') ? 'active' : '' ?>">Calendar</a></li>
                                <li><a href="contacts" class="<?php echo ($page == 'contacts') ? 'active' : '' ?>">Contacts</a></li>		
                                <li><a href="email" class="<?php echo ($page == 'email' || $page == 'email-reply') ? 'active' : '' ?>">Email</a></li>
                                <li class="submenu submenu-two">
                                    <a href="#" class="<?php echo ($page == 'invoice' || $page == 'add-invoices' || $page == 'edit-invoices' || $page == 'invoice-details') ? 'active subdrop' : '' ?>">Invoices<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="invoice" class="<?php echo ($page == 'invoice' || $page == 'add-invoices' || $page == 'edit-invoices') ? 'active' : '' ?>">Invoices</a></li>
                                        <li><a href="invoice-details" class="<?php echo ($page == 'invoice-details') ? 'active' : '' ?>">Invoice Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="todo" class="<?php echo ($page == 'todo' || $page == 'todo-list') ? 'active' : '' ?>">To Do</a></li>
                                <li><a href="notes" class="<?php echo ($page == 'notes') ? 'active' : '' ?>">Notes</a></li>
                                <li><a href="kanban-view" class="<?php echo ($page == 'kanban-view') ? 'active' : '' ?>">Kanban Board</a></li>
                                <li><a href="file-manager" class="<?php echo ($page == 'file-manager') ? 'active' : '' ?>">File Manager</a></li>
                                <li><a href="social-feed" class="<?php echo ($page == 'social-feed') ? 'active' : '' ?>">Social Feed</a></li>
                                <li><a href="search-list" class="<?php echo ($page == 'search-list') ? 'active' : '' ?>">Search Result</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'layout-mini' || $page == 'layout-hover-view' || $page == 'layout-hidden' || $page == 'layout-full-width' || $page == 'layout-rtl' || $page == 'layout-dark') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-layout-sidebar"></i><span>Layouts</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="index" class="<?php echo ($page == 'index') ? 'active' : '' ?>">Default</a></li>
                                <li><a href="layout-mini" class="<?php echo ($page == 'layout-mini') ? 'active' : '' ?>">Mini</a></li>
                                <li><a href="layout-hover-view" class="<?php echo ($page == 'layout-hover-view') ? 'active' : '' ?>">Hover View</a></li>
                                <li><a href="layout-hidden" class="<?php echo ($page == 'layout-hidden') ? 'active' : '' ?>">Hidden</a></li>
                                <li><a href="layout-full-width" class="<?php echo ($page == 'layout-full-width') ? 'active' : '' ?>">Full Width</a></li>
                                <li><a href="layout-rtl" class="<?php echo ($page == 'layout-rtl') ? 'active' : '' ?>">RTL</a></li>
                                <li><a href="layout-dark" class="<?php echo ($page == 'layout-dark') ? 'active' : '' ?>">Dark</a></li>                                
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-title"><span>Clinic</span></li>
                <li>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'doctors' || $page == 'doctors-list' || $page == 'edit-doctor' || $page == 'doctor-details' || $page == 'add-doctor' || $page == 'doctor-schedule') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-user-plus"></i><span>Doctors</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="doctors" class="<?php echo ($page == 'doctors' || $page == 'doctors-list' || $page == 'edit-doctor') ? 'active' : '' ?>">Doctors</a></li>
                                <li><a href="doctor-details" class="<?php echo ($page == 'doctor-details') ? 'active' : '' ?>">Doctor Details</a></li>
                                <li><a href="add-doctor" class="<?php echo ($page == 'add-doctor') ? 'active' : '' ?>">Add Doctor</a></li>
                                <li><a href="doctor-schedule" class="<?php echo ($page == 'doctor-schedule') ? 'active' : '' ?>">Doctor Schedule</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'patients' || $page == 'patients-grid' || $page == 'edit-patient' || $page == 'patient-details' || $page == 'create-patient') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-user-heart"></i><span>Patients</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="patients" class="<?php echo ($page == 'patients' || $page == 'edit-patient' || 'patients-grid') ? 'active' : '' ?>">Patients</a></li>
                                <li><a href="patient-details" class="<?php echo ($page == 'patient-details') ? 'active' : '' ?>">Patient Details</a></li>
                                <li><a href="create-patient" class="<?php echo ($page == 'create-patient') ? 'active' : '' ?>">Create Patient</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'appointments' || $page == 'appointment-consultations' || $page == 'new-appointment' || $page == 'appointment-calendar') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-calendar-check"></i><span>Appointments</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="appointments" class="<?php echo ($page == 'appointments' || $page == 'appointment-consultations') ? 'active' : '' ?>">Appointments</a></li>
                                <li><a href="new-appointment" class="<?php echo ($page == 'new-appointment') ? 'active' : '' ?>">New Appointment</a></li>
                                <li><a href="appointment-calendar" class="<?php echo ($page == 'appointment-calendar') ? 'active' : '' ?>">Calendar</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo ($page == 'locations') ? 'active' : '' ?>">
                            <a href="locations">
                                <i class="ti ti-map-pin"></i><span>Locations</span>
                            </a>
                        </li>  
                        <li class="<?php echo ($page == 'services') ? 'active' : '' ?>">
                            <a href="services">
                                <i class="ti ti-user-cog"></i><span>Services</span>
                            </a>
                        </li>  
                        <li class="<?php echo ($page == 'specializations') ? 'active' : '' ?>">
                            <a href="specializations">
                                <i class="ti ti-user-shield"></i><span>Specializations</span>
                            </a>
                        </li> 
                        <li class="<?php echo ($page == 'asset') ? 'active' : '' ?>">
                            <a href="asset">
                                <i class="ti ti-asset"></i><span>Assets</span>
                            </a>
                        </li>  
                        <li class="<?php echo ($page == 'activities') ? 'active' : '' ?>">
                            <a href="activities">
                                <i class="ti ti-activity"></i><span>Activities</span>
                            </a>
                        </li> 
                        <li class="<?php echo ($page == 'messages') ? 'active' : '' ?>">
                            <a href="messages">
                                <i class="ti ti-messages"></i><span>Messages</span>
                            </a>
                        </li>                           
                    </ul>
                </li>
                <li class="menu-title"><span>HRM</span></li>
                <li>
                    <ul>
                        <li class="<?php echo ($page == 'staffs') ? 'active' : '' ?>">
                            <a href="staffs">
                                <i class="ti ti-users-group"></i><span>Staffs</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'hrm-departments') ? 'active' : '' ?>">
                            <a href="hrm-departments">
                                <i class="ti ti-building-bank"></i><span>Departments</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'designation') ? 'active' : '' ?>">
                            <a href="designation">
                                <i class="ti ti-user-cog"></i><span>Designation</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'attendance') ? 'active' : '' ?>">
                            <a href="attendance">
                                <i class="ti ti-user-check"></i><span>Attendance</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'leaves' || $page == 'leave-type') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-users-minus"></i><span>Leaves</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="leaves" class="<?php echo ($page == 'leaves') ? 'active' : '' ?>">Leaves</a></li>
                                <li><a href="leave-type" class="<?php echo ($page == 'leave-type') ? 'active' : '' ?>">Leave Type</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo ($page == 'holidays') ? 'active' : '' ?>">
                            <a href="holidays">
                                <i class="ti ti-home-exclamation"></i><span>Holidays</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'payroll') ? 'active' : '' ?>">
                            <a href="payroll">
                                <i class="ti ti-coin"></i><span>Payroll</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title"><span>Finance & Accounts</span></li>
                <li>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'expenses' || $page == 'expense-category') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-credit-card"></i><span>Expenses</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="expenses" class="<?php echo ($page == 'expenses') ? 'active' : '' ?>">Expenses</a></li>
                                <li><a href="expense-category" class="<?php echo ($page == 'expense-category') ? 'active' : '' ?>">Expense Category</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo ($page == 'income') ? 'active' : '' ?>">
                            <a href="income">
                                <i class="ti ti-coins"></i><span>Income</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'invoices' || $page == 'invoices-details') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-file-invoice"></i><span>Invoices</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="invoices" class="<?php echo ($page == 'invoices') ? 'active' : '' ?>">Invoices</a></li>
                                <li><a href="invoices-details" class="<?php echo ($page == 'invoices-details') ? 'active' : '' ?>">Invoice Details</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo ($page == 'payments') ? 'active' : '' ?>">
                            <a href="payments">
                                <i class="ti ti-cards"></i><span>Payments</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'transactions') ? 'active' : '' ?>">
                            <a href="transactions">
                                <i class="ti ti-transition-right"></i><span>Transactions</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title"><span>Administration</span></li>
                <li>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'roles-and-permissions' || $page == 'permissions' || $page == 'delete-account-request') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-user"></i><span>Users</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="roles-and-permissions" class="<?php echo ($page == 'roles-and-permissions' || $page == 'permissions') ? 'active' : '' ?>">Roles & Permissions</a></li>
                                <li><a href="delete-account-request" class="<?php echo ($page == 'delete-account-request') ? 'active' : '' ?>">Delete Account Request</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'income-report' || $page == 'expense-report' || $page == 'profit-and-loss' || $page == 'appointment-report' || $page == 'patient-report') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-report"></i><span>Reports</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="income-report" class="<?php echo ($page == 'income-report') ? 'active' : '' ?>">Income Report</a></li>
                                <li><a href="expense-report" class="<?php echo ($page == 'expense-report') ? 'active' : '' ?>">Expense Report</a></li>
                                <li><a href="profit-and-loss" class="<?php echo ($page == 'profit-and-loss') ? 'active' : '' ?>">Profit & Loss</a></li>
                                <li><a href="appointment-report" class="<?php echo ($page == 'appointment-report') ? 'active' : '' ?>">Appointment Report</a></li>
                                <li><a href="patient-report" class="<?php echo ($page == 'patient-report') ? 'active' : '' ?>">Patient Report</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-title"><span>Content</span></li>
                <li>
                    <ul>
                        <li class="<?php echo ($page == 'pages' || $page == 'add-page' || $page == 'edit-page') ? 'active' : '' ?>">
                            <a href="pages">
                                <i class="ti ti-brand-pagekit"></i><span>Pages</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'add-blog' || $page == 'blogs' || $page == 'edit-blog' || $page == 'blog-details' || $page == 'blog-categories' || $page == 'blog-comments') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-brand-blogger"></i><span>Blogs</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="add-blog" class="<?php echo ($page == 'add-blog') ? 'active' : '' ?>">Add Blog</a></li>
                                <li><a href="blogs" class="<?php echo ($page == 'blogs' || $page == 'edit-blog' || $page == 'blog-details') ? 'active' : '' ?>">Blogs</a></li>
                                <li><a href="blog-categories" class="<?php echo ($page == 'blog-categories') ? 'active' : '' ?>">Blog Categories</a></li>
                                <li><a href="blog-comments" class="<?php echo ($page == 'blog-comments') ? 'active' : '' ?>">Blog Comments</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'countries' || $page == 'states' || $page == 'cities') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-map-pins"></i><span>Location</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="countries" class="<?php echo ($page == 'countries') ? 'active' : '' ?>">Countries</a></li>
                                <li><a href="states" class="<?php echo ($page == 'states') ? 'active' : '' ?>">States</a></li>
                                <li><a href="cities" class="<?php echo ($page == 'cities') ? 'active' : '' ?>">Cities</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo ($page == 'testimonials') ? 'active' : '' ?>">
                            <a href="testimonials">
                                <i class="ti ti-brand-wechat"></i><span>Testimonials</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'faq') ? 'active' : '' ?>">
                            <a href="faq">
                                <i class="ti ti-question-mark"></i><span>FAQ</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title"><span>Support</span></li>
                <li>
                    <ul>
                        <li class="<?php echo ($page == 'contact-messages') ? 'active' : '' ?>">
                            <a href="contact-messages">
                                <i class="ti ti-message-dots"></i><span>Contact Messages</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'tickets' || $page == 'ticket-details') ? 'active' : '' ?>">
                            <a href="tickets">
                                <i class="ti ti-ticket"></i><span>Tickets</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'announcements') ? 'active' : '' ?>">
                            <a href="announcements">
                                <i class="ti ti-speakerphone"></i><span>Announcements</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'newsletters') ? 'active' : '' ?>">
                            <a href="newsletters">
                                <i class="ti ti-mail-bolt"></i><span>Newsletters</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title"><span>Pages</span></li>
                <li>
                    <ul>
                        <li class="<?php echo ($page == 'starter') ? 'active' : '' ?>">
                            <a href="starter">
                                <i class="ti ti-player-play"></i><span>Starter</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'profile') ? 'active' : '' ?>">
                            <a href="profile">
                                <i class="ti ti-user-circle"></i><span>Profile</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'gallery') ? 'active' : '' ?>">
                            <a href="gallery">
                                <i class="ti ti-photo"></i><span>Gallery</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'timeline') ? 'active' : '' ?>">
                            <a href="timeline">
                                <i class="ti ti-timeline-event-text"></i><span>Timeline</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'pricing') ? 'active' : '' ?>">
                            <a href="pricing">
                                <i class="ti ti-tag"></i><span>Pricing</span>
                            </a>
                        </li>
                        <li>
                            <a href="coming-soon">
                                <i class="ti ti-sparkles"></i><span>Coming Soon</span>
                            </a>
                        </li>
                        <li>
                            <a href="under-maintenance">
                                <i class="ti ti-settings-down"></i><span>Under Maintenance</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'privacy-policy') ? 'active' : '' ?>">
                            <a href="privacy-policy">
                                <i class="ti ti-shield-check"></i><span>Privacy Policy</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'terms-and-conditions') ? 'active' : '' ?>">
                            <a href="terms-and-conditions">
                                <i class="ti ti-file-time"></i><span>Terms & Conditions</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title"><span>Authentication</span></li>
                <li>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-login"></i><span>Login</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="login-cover">Cover</a></li>
                                <li><a href="login-illustration">Illustration</a></li>
                                <li><a href="login-basic">Basic</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-file-pencil"></i><span>Register</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="register-cover">Cover</a></li>
                                <li><a href="register-illustration">Illustration</a></li>
                                <li><a href="register-basic">Basic</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-lock-exclamation"></i><span>Forgot Password</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="forgot-password-cover">Cover</a></li>
                                <li><a href="forgot-password-illustration">Illustration</a></li>
                                <li><a href="forgot-password-basic">Basic</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-restore"></i><span>Reset Password</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="reset-password-cover">Cover</a></li>
                                <li><a href="reset-password-illustration">Illustration</a></li>
                                <li><a href="reset-password-basic">Basic</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-mail-check"></i><span>Email Verification</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="email-verification-cover">Cover</a></li>
                                <li><a href="email-verification-illustration">Illustration</a></li>
                                <li><a href="email-verification-basic">Basic</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-discount-check"></i><span>2 Step Verification</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="two-step-verification-cover">Cover</a></li>
                                <li><a href="two-step-verification-illustration">Illustration</a></li>
                                <li><a href="two-step-verification-basic">Basic</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="lock-screen">
                                <i class="ti ti-lock"></i><span>Lock Screen</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-exclamation-mark-off"></i><span>Error Pages</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="error-404">404 Error</a></li>
                                <li><a href="error-500">500 Error</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-title"><span>Settings</span></li>
                <li>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'profile-settings' || $page == 'security-settings' || $page == 'notifications-settings' || $page == 'integrations-settings') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-user-cog"></i><span>Account Settings</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="profile-settings" class="<?php echo ($page == 'profile-settings') ? 'active' : '' ?>">Profile</a></li>
                                <li><a href="security-settings" class="<?php echo ($page == 'security-settings') ? 'active' : '' ?>">Security</a></li>
                                <li><a href="notifications-settings" class="<?php echo ($page == 'notifications-settings') ? 'active' : '' ?>">Notifications</a></li>
                                <li><a href="integrations-settings" class="<?php echo ($page == 'integrations-settings') ? 'active' : '' ?>">Integrations</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'organization-settings' || $page == 'localization-settings' || $page == 'prefixes-settings' || $page == 'seo-setup-settings' || $page == 'language-settings' || $page == 'language-settings2' || $page == 'language-settings3' || $page == 'maintenance-mode-settings' || $page == 'login-and-register-settings' || $page == 'preferences-settings') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-world-cog"></i><span>Website Settings</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="organization-settings" class="<?php echo ($page == 'organization-settings') ? 'active' : '' ?>">Organization</a></li>
                                <li><a href="localization-settings" class="<?php echo ($page == 'localization-settings') ? 'active' : '' ?>">Localization</a></li>
                                <li><a href="prefixes-settings" class="<?php echo ($page == 'prefixes-settings') ? 'active' : '' ?>">Prefixes</a></li>
                                <li><a href="seo-setup-settings" class="<?php echo ($page == 'seo-setup-settings') ? 'active' : '' ?>">SEO Setup</a></li>
                                <li><a href="language-settings" class="<?php echo ($page == 'language-settings' || $page == 'language-settings2' || $page == 'language-settings3') ? 'active' : '' ?>">Language</a></li>
                                <li><a href="maintenance-mode-settings" class="<?php echo ($page == 'maintenance-mode-settings') ? 'active' : '' ?>">Maintenance Mode</a></li>
                                <li><a href="login-and-register-settings" class="<?php echo ($page == 'login-and-register-settings') ? 'active' : '' ?>">Login & Register</a></li>
                                <li><a href="preferences-settings" class="<?php echo ($page == 'preferences-settings') ? 'active' : '' ?>">Preferences</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'appointment-settings' || $page == 'working-hours-settings' || $page == 'cancellation-reason-settings') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-building-hospital"></i><span>Clinic Settings</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="appointment-settings" class="<?php echo ($page == 'appointment-settings') ? 'active' : '' ?>">Appointment</a></li>
                                <li><a href="working-hours-settings" class="<?php echo ($page == 'working-hours-settings') ? 'active' : '' ?>">Working Hours</a></li>
                                <li><a href="cancellation-reason-settings" class="<?php echo ($page == 'cancellation-reason-settings') ? 'active' : '' ?>">Cancellation Reason</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'invoice-settings' || $page == 'invoice-templates-settings' || $page == 'signatures-settings' || $page == 'custom-fields-settings') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-device-mobile-cog"></i><span>App Settings</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="invoice-settings" class="<?php echo ($page == 'invoice-settings') ? 'active' : '' ?>">Invoice Settings</a></li>
                                <li><a href="invoice-templates-settings" class="<?php echo ($page == 'invoice-templates-settings') ? 'active' : '' ?>">Invoice Templates</a></li>
                                <li><a href="signatures-settings" class="<?php echo ($page == 'signatures-settings') ? 'active' : '' ?>">Signatures</a></li>
                                <li><a href="custom-fields-settings" class="<?php echo ($page == 'custom-fields-settings') ? 'active' : '' ?>">Custom Fields</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'email-settings' || $page == 'email-templates-settings' || $page == 'sms-gateways-settings' || $page == 'sms-templates-settings' || $page == 'gdpr-cookies-settings') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-device-desktop-cog"></i><span>System Settings</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="email-settings" class="<?php echo ($page == 'email-settings') ? 'active' : '' ?>">Email Settings</a></li>
                                <li><a href="email-templates-settings" class="<?php echo ($page == 'email-templates-settings') ? 'active' : '' ?>">Email Templates</a></li>
                                <li><a href="sms-gateways-settings" class="<?php echo ($page == 'sms-gateways-settings') ? 'active' : '' ?>">SMS Gateways</a></li>
                                <li><a href="sms-templates-settings" class="<?php echo ($page == 'sms-templates-settings') ? 'active' : '' ?>">SMS Templates</a></li>
                                <li><a href="gdpr-cookies-settings" class="<?php echo ($page == 'gdpr-cookies-settings') ? 'active' : '' ?>">GDPR Cookies</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'payment-methods-settings' || $page == 'bank-accounts-settings' || $page == 'tax-rates-settings' || $page == 'currencies-settings') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-settings-dollar"></i><span>Finance & Accounts</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="payment-methods-settings" class="<?php echo ($page == 'payment-methods-settings') ? 'active' : '' ?>">Payment Methods</a></li>
                                <li><a href="bank-accounts-settings" class="<?php echo ($page == 'bank-accounts-settings') ? 'active' : '' ?>">Bank Accounts</a></li>
                                <li><a href="tax-rates-settings" class="<?php echo ($page == 'tax-rates-settings') ? 'active' : '' ?>">Tax Rates</a></li>
                                <li><a href="currencies-settings" class="<?php echo ($page == 'currencies-settings') ? 'active' : '' ?>">Currencies</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'sitemap-settings' || $page == 'clear-cache-settings' || $page == 'storage-settings' || $page == 'cronjob-settings' || $page == 'ban-ip-address-settings' || $page == 'system-backup-settings' || $page == 'database-backup-settings' || $page == 'system-update') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-settings-2"></i><span>Other Settings</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="sitemap-settings" class="<?php echo ($page == 'sitemap-settings') ? 'active' : '' ?>">Sitemap</a></li>
                                <li><a href="clear-cache-settings" class="<?php echo ($page == 'clear-cache-settings') ? 'active' : '' ?>">Clear Cache</a></li>
                                <li><a href="storage-settings" class="<?php echo ($page == 'storage-settings') ? 'active' : '' ?>">Storage</a></li>
                                <li><a href="cronjob-settings" class="<?php echo ($page == 'cronjob-settings') ? 'active' : '' ?>">Cronjob</a></li>
                                <li><a href="ban-ip-address-settings" class="<?php echo ($page == 'ban-ip-address-settings') ? 'active' : '' ?>">Ban IP Address</a></li>
                                <li><a href="system-backup-settings" class="<?php echo ($page == 'system-backup-settings') ? 'active' : '' ?>">System Backup</a></li>
                                <li><a href="database-backup-settings" class="<?php echo ($page == 'database-backup-settings') ? 'active' : '' ?>">Database Backup</a></li>
                                <li><a href="system-update" class="<?php echo ($page == 'system-update') ? 'active' : '' ?>">System Update</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-title"><span>UI Interface</span></li>
                <li>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'ui-accordion' || $page == 'ui-alerts' || $page == 'ui-avatar' || $page == 'ui-badges' || $page == 'ui-breadcrumb' || $page == 'ui-buttons' || $page == 'ui-buttons-group' || $page == 'ui-cards' || $page == 'ui-carousel' || $page == 'ui-collapse' || $page == 'ui-dropdowns' || $page == 'ui-ratio' || $page == 'ui-grid' || $page == 'ui-images' || $page == 'ui-links' || $page == 'ui-list-group' || $page == 'ui-modals' || $page == 'ui-offcanvas' || $page == 'ui-pagination' || $page == 'ui-placeholders' || $page == 'ui-popovers' || $page == 'ui-progress' || $page == 'ui-scrollspy' || $page == 'ui-spinner' || $page == 'ui-nav-tabs' || $page == 'ui-toasts' || $page == 'ui-tooltips' || $page == 'ui-typography' || $page == 'ui-utilities') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-chart-pie"></i><span>Base UI</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="ui-accordion" class="<?php echo ($page == 'ui-accordion') ? 'active' : '' ?>">Accordion</a></li>
                                <li><a href="ui-alerts" class="<?php echo ($page == 'ui-alerts') ? 'active' : '' ?>">Alerts</a></li>
                                <li><a href="ui-avatar" class="<?php echo ($page == 'ui-avatar') ? 'active' : '' ?>">Avatar</a></li>
                                <li><a href="ui-badges" class="<?php echo ($page == 'ui-badges') ? 'active' : '' ?>">Badges</a></li>
                                <li><a href="ui-breadcrumb" class="<?php echo ($page == 'ui-breadcrumb') ? 'active' : '' ?>">Breadcrumb</a></li>
                                <li><a href="ui-buttons" class="<?php echo ($page == 'ui-buttons') ? 'active' : '' ?>">Buttons</a></li>
                                <li><a href="ui-buttons-group" class="<?php echo ($page == 'ui-buttons-group') ? 'active' : '' ?>">Button Group</a></li>
                                <li><a href="ui-cards" class="<?php echo ($page == 'ui-cards') ? 'active' : '' ?>">Card</a></li>
                                <li><a href="ui-carousel" class="<?php echo ($page == 'ui-carousel') ? 'active' : '' ?>">Carousel</a></li>
                                <li><a href="ui-collapse" class="<?php echo ($page == 'ui-collapse') ? 'active' : '' ?>">Collapse</a></li>
                                <li><a href="ui-dropdowns" class="<?php echo ($page == 'ui-dropdowns') ? 'active' : '' ?>">Dropdowns</a></li>
                                <li><a href="ui-ratio" class="<?php echo ($page == 'ui-ratio') ? 'active' : '' ?>">Ratio</a></li>
                                <li><a href="ui-grid" class="<?php echo ($page == 'ui-grid') ? 'active' : '' ?>">Grid</a></li>
                                <li><a href="ui-images" class="<?php echo ($page == 'ui-images') ? 'active' : '' ?>">Images</a></li>
                                <li><a href="ui-links" class="<?php echo ($page == 'ui-links') ? 'active' : '' ?>">Links</a></li>
                                <li><a href="ui-list-group" class="<?php echo ($page == 'ui-list-group') ? 'active' : '' ?>">List Group</a></li>
                                <li><a href="ui-modals" class="<?php echo ($page == 'ui-modals') ? 'active' : '' ?>">Modals</a></li>
                                <li><a href="ui-offcanvas" class="<?php echo ($page == 'ui-offcanvas') ? 'active' : '' ?>">Offcanvas</a></li>
                                <li><a href="ui-pagination" class="<?php echo ($page == 'ui-pagination') ? 'active' : '' ?>">Pagination</a></li>
                                <li><a href="ui-placeholders" class="<?php echo ($page == 'ui-placeholders') ? 'active' : '' ?>">Placeholders</a></li>
                                <li><a href="ui-popovers" class="<?php echo ($page == 'ui-popovers') ? 'active' : '' ?>">Popovers</a></li>
                                <li><a href="ui-progress" class="<?php echo ($page == 'ui-progress') ? 'active' : '' ?>">Progress</a></li>
                                <li><a href="ui-scrollspy" class="<?php echo ($page == 'ui-scrollspy') ? 'active' : '' ?>">Scrollspy</a></li>
                                <li><a href="ui-spinner" class="<?php echo ($page == 'ui-spinner') ? 'active' : '' ?>">Spinner</a></li>
                                <li><a href="ui-nav-tabs" class="<?php echo ($page == 'ui-nav-tabs') ? 'active' : '' ?>">Tabs</a></li>
                                <li><a href="ui-toasts" class="<?php echo ($page == 'ui-toasts') ? 'active' : '' ?>">Toasts</a></li>
                                <li><a href="ui-tooltips" class="<?php echo ($page == 'ui-tooltips') ? 'active' : '' ?>">Tooltips</a></li>
                                <li><a href="ui-typography" class="<?php echo ($page == 'ui-typography') ? 'active' : '' ?>">Typography</a></li>
                                <li><a href="ui-utilities" class="<?php echo ($page == 'ui-utilities') ? 'active' : '' ?>">Utilities</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'extended-dragula' || $page == 'ui-clipboard' || $page == 'ui-rangeslider' || $page == 'ui-sweetalerts' || $page == 'ui-lightbox' || $page == 'ui-rating' || $page == 'ui-scrollbar') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-radar"></i><span>Advanced UI</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="extended-dragula" class="<?php echo ($page == 'extended-dragula') ? 'active' : '' ?>">Dragula</a></li>
                                <li><a href="ui-clipboard" class="<?php echo ($page == 'ui-clipboard') ? 'active' : '' ?>">Clipboard</a></li>
                                <li><a href="ui-rangeslider" class="<?php echo ($page == 'ui-rangeslider') ? 'active' : '' ?>">Range Slider</a></li>
                                <li><a href="ui-sweetalerts" class="<?php echo ($page == 'ui-sweetalerts') ? 'active' : '' ?>">Sweet Alerts</a></li>
                                <li><a href="ui-lightbox" class="<?php echo ($page == 'ui-lightbox') ? 'active' : '' ?>">Lightbox</a></li>
                                <li><a href="ui-rating" class="<?php echo ($page == 'ui-rating') ? 'active' : '' ?>">Rating</a></li>
                                <li><a href="ui-scrollbar" class="<?php echo ($page == 'ui-scrollbar') ? 'active' : '' ?>">Scrollbar</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'form-basic-inputs' || $page == 'form-checkbox-radios' || $page == 'form-input-groups' || $page == 'form-grid-gutters' || $page == 'form-mask' || $page == 'form-fileupload' || $page == 'form-horizontal' || $page == 'form-vertical' || $page == 'form-floating-labels' || $page == 'form-validation' || $page == 'form-select2' || $page == 'form-wizard' || $page == 'form-pickers') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-forms"></i><span>Forms</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);" class="<?php echo ($page == 'form-basic-inputs' || $page == 'form-checkbox-radios' || $page == 'form-input-groups' || $page == 'form-grid-gutters' || $page == 'form-mask' || $page == 'form-fileupload') ? 'active subdrop' : '' ?>">Form Elements<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="form-basic-inputs" class="<?php echo ($page == 'form-basic-inputs') ? 'active' : '' ?>">Basic Inputs</a></li>
                                        <li><a href="form-checkbox-radios" class="<?php echo ($page == 'form-checkbox-radios') ? 'active' : '' ?>">Checkbox & Radios</a></li>
                                        <li><a href="form-input-groups" class="<?php echo ($page == 'form-input-groups') ? 'active' : '' ?>">Input Groups</a></li>
                                        <li><a href="form-grid-gutters" class="<?php echo ($page == 'form-grid-gutters') ? 'active' : '' ?>">Grid & Gutters</a></li>
                                        <li><a href="form-mask" class="<?php echo ($page == 'form-mask') ? 'active' : '' ?>">Input Masks</a></li>
                                        <li><a href="form-fileupload" class="<?php echo ($page == 'form-fileupload') ? 'active' : '' ?>">File Uploads</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);" class="<?php echo ($page == 'form-horizontal' || $page == 'form-vertical' || $page == 'form-floating-labels') ? 'active subdrop' : '' ?>">Layouts<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="form-horizontal" class="<?php echo ($page == 'form-horizontal') ? 'active' : '' ?>">Horizontal Form</a></li>
                                        <li><a href="form-vertical" class="<?php echo ($page == 'form-vertical') ? 'active' : '' ?>">Vertical Form</a></li>
                                        <li><a href="form-floating-labels" class="<?php echo ($page == 'form-floating-labels') ? 'active' : '' ?>">Floating Labels</a></li>
                                    </ul>
                                </li>
                                <li><a href="form-validation" class="<?php echo ($page == 'form-validation') ? 'active' : '' ?>">Form Validation</a></li>
                                <li><a href="form-select2" class="<?php echo ($page == 'form-select2') ? 'active' : '' ?>">Select2</a></li>
                                <li><a href="form-wizard" class="<?php echo ($page == 'form-wizard') ? 'active' : '' ?>">Form Wizard</a></li>
                                <li><a href="form-pickers" class="<?php echo ($page == 'form-pickers') ? 'active' : '' ?>">Form Picker</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'tables-basic' || $page == 'data-tables') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-table-row"></i><span>Tables</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="tables-basic" class="<?php echo ($page == 'tables-basic') ? 'active' : '' ?>">Basic Tables </a></li>
                                <li><a href="data-tables" class="<?php echo ($page == 'data-tables') ? 'active' : '' ?>">Data Table </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'chart-apex' || $page == 'chart-c3' || $page == 'chart-js' || $page == 'chart-morris' || $page == 'chart-flot' || $page == 'chart-peity') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-chart-donut"></i>
                                <span>Charts</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="chart-apex" class="<?php echo ($page == 'chart-apex') ? 'active' : '' ?>">Apex Charts</a></li>
                                <li><a href="chart-c3" class="<?php echo ($page == 'chart-c3') ? 'active' : '' ?>">Chart C3</a></li>
                                <li><a href="chart-js" class="<?php echo ($page == 'chart-js') ? 'active' : '' ?>">Chart Js</a></li>
                                <li><a href="chart-morris" class="<?php echo ($page == 'chart-morris') ? 'active' : '' ?>">Morris Charts</a></li>
                                <li><a href="chart-flot" class="<?php echo ($page == 'chart-flot') ? 'active' : '' ?>">Flot Charts</a></li>
                                <li><a href="chart-peity" class="<?php echo ($page == 'chart-peity') ? 'active' : '' ?>">Peity Charts</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'icon-fontawesome' || $page == 'icon-tabler' || $page == 'icon-bootstrap' || $page == 'icon-remix' || $page == 'icon-feather' || $page == 'icon-ionic' || $page == 'icon-material' || $page == 'icon-pe7' || $page == 'icon-simpleline' || $page == 'icon-themify' || $page == 'icon-weather' || $page == 'icon-typicons' || $page == 'icon-flag') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-icons"></i>
                                <span>Icons</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="icon-fontawesome" class="<?php echo ($page == 'icon-fontawesome') ? 'active' : '' ?>">Fontawesome Icons</a></li>
                                <li><a href="icon-tabler" class="<?php echo ($page == 'icon-tabler') ? 'active' : '' ?>">Tabler Icons</a></li>
                                <li><a href="icon-bootstrap" class="<?php echo ($page == 'icon-bootstrap') ? 'active' : '' ?>">Bootstrap Icons</a></li>
                                <li><a href="icon-remix" class="<?php echo ($page == 'icon-remix') ? 'active' : '' ?>">Remix Icons</a></li>
                                <li><a href="icon-feather" class="<?php echo ($page == 'icon-feather') ? 'active' : '' ?>">Feather Icons</a></li>
                                <li><a href="icon-ionic" class="<?php echo ($page == 'icon-ionic') ? 'active' : '' ?>">Ionic Icons</a></li>
                                <li><a href="icon-material" class="<?php echo ($page == 'icon-material') ? 'active' : '' ?>">Material Icons</a></li>
                                <li><a href="icon-pe7" class="<?php echo ($page == 'icon-pe7') ? 'active' : '' ?>">Pe7 Icons</a></li>
                                <li><a href="icon-simpleline" class="<?php echo ($page == 'icon-simpleline') ? 'active' : '' ?>">Simpleline Icons</a></li>
                                <li><a href="icon-themify" class="<?php echo ($page == 'icon-themify') ? 'active' : '' ?>">Themify Icons</a></li>
                                <li><a href="icon-weather" class="<?php echo ($page == 'icon-weather') ? 'active' : '' ?>">Weather Icons</a></li>
                                <li><a href="icon-typicons" class="<?php echo ($page == 'icon-typicons') ? 'active' : '' ?>">Typicons Icons</a></li>
                                <li><a href="icon-flag" class="<?php echo ($page == 'icon-flag') ? 'active' : '' ?>">Flag Icons</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-title"><span>Help</span></li>
                <li>
                    <ul>
                        <li>
                            <a href="javascript:void(0);"><i class="ti ti-file-dots"></i><span>Documentation</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="ti ti-status-change"></i><span>Changelog</span><span class="badge bg-danger ms-2 badge-md rounded-2 fs-12 fw-medium">v1.7.0</span></a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-versions"></i><span>Multi Level</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="javascript:void(0);">Multilevel 1</a></li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Multilevel 2<span
                                            class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Multilevel 2.1</a></li>
                                        <li class="submenu submenu-two submenu-three">
                                            <a href="javascript:void(0);">Multilevel 2.2<span
                                                    class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                            <ul>
                                                <li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
                                                <li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);">Multilevel 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>                        
            </ul>  
            <?php } ?>
            
            <?php if ($page == 'doctor-dashboard' || $page == 'doctors-appointments' || $page == 'doctors-appointment-details' || $page == 'doctors-patient-details' || $page == 'online-consultations' || $page == 'doctors-schedules' || $page == 'doctors-prescriptions' || $page == 'doctors-prescription-details' || $page == 'doctors-leaves' || $page == 'doctors-reviews' || $page == 'doctors-profile-settings' || $page == 'doctors-password-settings' || $page == 'doctors-notification-settings' || $page == 'doctors-notifications') { ?>
            <ul>
                <li class="menu-title"><span>Main Menu</span></li>
                <li>
                    <ul>
                        <li class="<?php echo ($page == 'doctor-dashboard' || $page == 'doctors-notifications') ? 'active' : '' ?>">
                            <a href="doctor-dashboard">
                                <i class="ti ti-layout-dashboard"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'doctors-appointments' || $page == 'doctors-appointment-details' || $page == 'doctors-patient-details' || $page == 'online-consultations') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-calendar-check"></i><span>Appointments</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="doctors-appointments" class="<?php echo ($page == 'doctors-appointments' || $page == 'doctors-appointment-details' || $page == 'doctors-patient-details') ? 'active' : '' ?>">Appointments</a></li>
                                <li><a href="online-consultations" class="<?php echo ($page == 'online-consultations') ? 'active' : '' ?>">Online Consultations</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo ($page == 'doctors-schedules') ? 'active' : '' ?>">
                            <a href="doctors-schedules">
                                <i class="ti ti-clock-check"></i><span>My Schedule</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'doctors-prescriptions' || $page == 'doctors-prescription-details') ? 'active' : '' ?>">
                            <a href="doctors-prescriptions">
                                <i class="ti ti-prescription"></i><span>Prescriptions</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'doctors-leaves') ? 'active' : '' ?>">
                            <a href="doctors-leaves">
                                <i class="ti ti-calendar-x"></i><span>Leave</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'doctors-reviews') ? 'active' : '' ?>">
                            <a href="doctors-reviews">
                                <i class="ti ti-star"></i><span>Reviews</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'doctors-profile-settings' || $page == 'doctors-password-settings' || $page == 'doctors-notification-settings') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-settings"></i><span>Settings</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="doctors-profile-settings" class="<?php echo ($page == 'doctors-profile-settings') ? 'active' : '' ?>">Profile Settings</a></li>
                                <li><a href="doctors-password-settings" class="<?php echo ($page == 'doctors-password-settings') ? 'active' : '' ?>">Change Password</a></li>
                                <li><a href="doctors-notification-settings" class="<?php echo ($page == 'doctors-notification-settings') ? 'active' : '' ?>">Notifications</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>                                
            </ul>  
            <?php } ?>

            <?php if ($page == 'patient-dashboard' || $page == 'patient-appointments' || $page == 'patient-appointment-details' || $page == 'patients-doctor-details' || $page == 'patient-doctors' || $page == 'patient-prescriptions' || $page == 'patient-prescription-details' || $page == 'patient-invoices' || $page == 'patient-invoice-details' || $page == 'patient-profile-settings' || $page == 'patient-password-settings' || $page == 'patient-notifications-settings' || $page == 'patient-notifications') { ?>
            <ul>
                <li class="menu-title"><span>Main Menu</span></li>
                <li>
                    <ul>
                        <li class="<?php echo ($page == 'patient-dashboard' || $page == 'patient-notifications') ? 'active' : '' ?>">
                            <a href="patient-dashboard">
                                <i class="ti ti-layout-dashboard"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'patient-appointments' || $page == 'patient-appointment-details') ? 'active' : '' ?>">
                            <a href="patient-appointments">
                                <i class="ti ti-calendar-check"></i><span>Appointments</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'patient-doctors' || $page == 'patients-doctor-details') ? 'active' : '' ?>">
                            <a href="patient-doctors">
                                <i class="ti ti-stethoscope"></i><span>Doctors</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'patient-prescriptions' || $page == 'patient-prescription-details') ? 'active' : '' ?>">
                            <a href="patient-prescriptions">
                                <i class="ti ti-prescription"></i><span>Prescriptions</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page == 'patient-invoices' || $page == 'patient-invoice-details') ? 'active' : '' ?>">
                            <a href="patient-invoices">
                                <i class="ti ti-star"></i><span>Invoice</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'patient-profile-settings' || $page == 'patient-password-settings' || $page == 'patient-notifications-settings') ? 'active subdrop' : '' ?>">
                                <i class="ti ti-settings"></i><span>Settings</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="patient-profile-settings" class="<?php echo ($page == 'patient-profile-settings') ? 'active' : '' ?>">Profile Settings</a></li>
                                <li><a href="patient-password-settings" class="<?php echo ($page == 'patient-password-settings') ? 'active' : '' ?>">Change Password</a></li>
                                <li><a href="patient-notifications-settings" class="<?php echo ($page == 'patient-notifications-settings') ? 'active' : '' ?>">Notifications</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>                                
            </ul>  
            <?php } ?>
        </div>
        <div class="sidebar-footer border-top mt-3">
            <div class="trial-item mt-0 p-3 text-center">
                <div class="trial-item-icon rounded-4 mb-3 p-2 text-center shadow-sm d-inline-flex">
                    <img src="./assets/img/icons/sidebar-icon.svg" alt="img">
                </div>
                <div>
                    <h6 class="fs-14 fw-semibold mb-1">Upgrade To Pro</h6>
                    <p class="fs-13 mb-0">Check 1 min video and begin use Preclinic like a pro</p>
                </div>
                <a href="javascript:void(0);" class="close-icon shadow-sm"><i class="ti ti-x"></i></a>
            </div>
        </div>
    </div>

</div>
<!-- Sidenav Menu End -->