const public_routes = {};

// --------- ( Main ) --------

public_routes.admin = "/index";
public_routes.doctor_dashboard = "/doctor-dashboard";
public_routes.patient_dashboard = "/patient-dashboard";

// --------- ( Doctor Module ) --------

public_routes.doctors_appointments = "/doctors-appointments";
public_routes.doctors_appointment_details = "/doctors-appointment-details";
public_routes.doctors_patient_details = "/doctors-patient-details";
public_routes.doctors_prescription_details = "/doctors-prescription-details";
public_routes.online_consultations = "/online-consultations";
public_routes.doctors_schedules = "/doctors-schedules";
public_routes.doctors_prescriptions = "/doctors-prescriptions";
public_routes.doctors_leaves = "/doctors-leaves";
public_routes.doctors_reviews = "/doctors-reviews";
public_routes.doctors_profile_settings = "/doctors-profile-settings";
public_routes.doctors_password_settings = "/doctors-password-settings";
public_routes.doctors_notification_settings = "/doctors-notification-settings";

// --------- ( Patient Module ) --------

public_routes.patient_appointments = "/patient-appointments";
public_routes.patient_appointment_details = "/patient-appointment-details";
public_routes.patients_doctor_details = "/patients-doctor-details";
public_routes.patient_doctors = "/patient-doctors";
public_routes.patient_prescriptions = "/patient-prescriptions";
public_routes.patient_prescription_details = "/patient-prescription-details";
public_routes.patient_invoices = "/patient-invoices";
public_routes.patient_invoice_details = "/patient-invoice-details";
public_routes.patient_profile_settings = "/patient-profile-settings";
public_routes.patient_password_settings = "/patient-password-settings";
public_routes.patient_notifications_settings = "/patient-notifications-settings";

// --------- ( Applications ) --------

public_routes.chat = "/chat";
public_routes.voice_call = "/voice-call";
public_routes.video_call = "/video-call";
public_routes.outgoing_call = "/outgoing-call";
public_routes.incoming_call = "/incoming-call";
public_routes.call_history = "/call-history";
public_routes.calendar = "/calendar";
public_routes.contacts = "/contacts";
public_routes.email = "/email";
public_routes.email = "/email";
public_routes.email_reply = "/email-reply";
public_routes.invoice = "/invoice";
public_routes.invoice_details = "/invoice-details";
public_routes.todo = "/todo";
public_routes.todo_list = "/todo-list";
public_routes.notes = "/notes";
public_routes.kanban_view = "/kanban-view";
public_routes.file_manager = "/file-manager";
public_routes.social_feed = "/social-feed";
public_routes.search_list = "/search-list";

// ---------- ( Extras ) ------------

public_routes.layout_default = "/layout-default";
public_routes.layout_mini = "/layout-mini";
public_routes.layout_hover_view = "/layout-hover-view";
public_routes.layout_hidden = "/layout-hidden";
public_routes.layout_full_width = "/layout-full-width";
public_routes.layout_rtl = "/layout-rtl";
public_routes.layout_dark = "/layout-dark";

// ---------- ( Clinic ) ------------

public_routes.doctors = "/doctors";
public_routes.doctors_list = "/doctors-list";
public_routes.doctor_details = "/doctor-details";
public_routes.add_doctor = "/add-doctor";
public_routes.edit_doctor = "/edit-doctor";
public_routes.doctor_schedule = "/doctor-schedule";
public_routes.patients = "/patients";
public_routes.patients_grid = "/patients-grid";
public_routes.create_patient = "/create-patient";
public_routes.patient_details = "/patient-details";
public_routes.edit_patient = "/edit-patient";
public_routes.appointments = "/appointments";
public_routes.appointment_calendar = "/appointment-calendar";
public_routes.new_appointment = "/new-appointment";
public_routes.locations = "/locations";
public_routes.services = "/services";
public_routes.specializations = "/specializations";
public_routes.assets_list = "/assets-list";
public_routes.activities = "/activities";
public_routes.messages = "/messages";

// ---------- ( HRM ) ------------

public_routes.staffs = "/staffs";
public_routes.hrm_departments = "/hrm-departments";
public_routes.designation = "/designation";
public_routes.attendance = "/attendance";
public_routes.leaves = "/leaves";
public_routes.leave_type = "/leave-type";
public_routes.holidays = "/holidays";
public_routes.payroll = "/payroll";

// ---------- ( Finance & Accounts ) ------------

public_routes.expenses = "/expenses";
public_routes.expense_category = "/expense-category";
public_routes.income = "/income";
public_routes.invoices = "/invoices";
public_routes.invoices_details = "/invoices-details";
public_routes.add_invoices = "/add-invoices";
public_routes.edit_invoices = "/edit-invoices";
public_routes.payments = "/payments";
public_routes.transactions = "/transactions";

// ---------- ( Administration ) ------------

public_routes.roles_and_permissions = "/roles-and-permissions";
public_routes.permissions = "/permissions";
public_routes.delete_account_request = "/delete-account-request";
public_routes.income_report = "/income-report";
public_routes.expense_report = "/expense-report";
public_routes.profit_and_loss = "/profit-and-loss";
public_routes.appointment_report = "/appointment-report";
public_routes.patient_report = "/patient-report";

// ---------- ( Content ) ------------

public_routes.pages = "/pages";
public_routes.add_page = "/add-page";
public_routes.edit_page = "/edit-page";
public_routes.add_blog = "/add-blog";
public_routes.edit_blog = "/edit-blog";
public_routes.blogs = "/blogs";
public_routes.blog_categories = "/blog-categories";
public_routes.blog_comments = "/blog-comments";
public_routes.countries = "/countries";
public_routes.states = "/states";
public_routes.cities = "/cities";
public_routes.testimonials = "/testimonials";
public_routes.faq = "/faq";

// ---------- ( Support ) ------------

public_routes.contact_messages = "/contact-messages";
public_routes.tickets = "/tickets";
public_routes.announcements = "/announcements";
public_routes.newsletters = "/newsletters";

// ---------- ( Pages ) ------------

public_routes.starter = "/starter";
public_routes.profile = "/profile";
public_routes.gallery = "/gallery";
public_routes.timeline = "/timeline";
public_routes.pricing = "/pricing";
public_routes.coming_soon = "/coming-soon";
public_routes.under_maintenance = "/under-maintenance";
public_routes.privacy_policy = "/privacy-policy";
public_routes.terms_and_conditions = "/terms-and-conditions";

// ---------- ( Settings ) ------------

public_routes.profile_settings = "/profile-settings";
public_routes.security_settings = "/security-settings";
public_routes.notifications_settings = "/notifications-settings";
public_routes.integrations_settings = "/integrations-settings";
public_routes.organization_settings = "/organization-settings";
public_routes.localization_settings = "/localization-settings";
public_routes.prefixes_settings = "/prefixes-settings";
public_routes.seo_setup_settings = "/seo-setup-settings";
public_routes.language_settings = "/language-settings";
public_routes.language_settings2 = "/language-settings2";
public_routes.language_settings3 = "/language-settings3";
public_routes.maintenance_mode_settings = "/maintenance-mode-settings";
public_routes.login_and_register_settings = "/login-and-register-settings";
public_routes.preferences_settings = "/preferences-settings";
public_routes.appointment_settings = "/appointment-settings";
public_routes.working_hours_settings = "/working-hours-settings";
public_routes.cancellation_reason_settings = "/cancellation-reason-settings";
public_routes.invoice_settings = "/invoice-settings";
public_routes.invoice_templates_settings = "/invoice-templates-settings";
public_routes.signatures_settings = "/signatures-settings";
public_routes.custom_fields_settings = "/custom-fields-settings";
public_routes.email_settings = "/email-settings";
public_routes.email_templates_settings = "/email-templates-settings";
public_routes.sms_gateways_settings = "/sms-gateways-settings";
public_routes.sms_templates_settings = "/sms-templates-settings";
public_routes.sms_templates_settings = "/sms-templates-settings";
public_routes.gdpr_cookies_settings = "/gdpr-cookies-settings";
public_routes.payment_methods_settings = "/payment-methods-settings";
public_routes.bank_accounts_settings = "/bank-accounts-settings";
public_routes.tax_rates_settings = "/tax-rates-settings";
public_routes.currencies_settings = "/currencies-settings";
public_routes.sitemap_settings = "/sitemap-settings";
public_routes.clear_cache_settings = "/clear-cache-settings";
public_routes.storage_settings = "/storage-settings";
public_routes.cronjob_settings = "/cronjob-settings";
public_routes.ban_ip_address_settings = "/ban-ip-address-settings";
public_routes.system_backup_settings = "/system-backup-settings";
public_routes.database_backup_settings = "/database-backup-settings";
public_routes.system_update = "/system-update";

// ---------- ( UI Interface ) ------------

public_routes.ui_accordion = "/ui-accordion";
public_routes.ui_alerts = "/ui-alerts";
public_routes.ui_avatar = "/ui-avatar";
public_routes.ui_badges = "/ui-badges";
public_routes.ui_breadcrumb = "/ui-breadcrumb";
public_routes.ui_buttons = "/ui-buttons";
public_routes.ui_buttons_group = "/ui-buttons-group";
public_routes.ui_cards = "/ui-cards";
public_routes.ui_carousel = "/ui-carousel";
public_routes.ui_collapse = "/ui-collapse";
public_routes.ui_dropdowns = "/ui-dropdowns";
public_routes.ui_ratio = "/ui-ratio";
public_routes.ui_grid = "/ui-grid";
public_routes.ui_images = "/ui-images";
public_routes.ui_links = "/ui-links";
public_routes.ui_list_group = "/ui-list-group";
public_routes.ui_modals = "/ui-modals";
public_routes.ui_offcanvas = "/ui-offcanvas";
public_routes.ui_pagination = "/ui-pagination";
public_routes.ui_placeholders = "/ui-placeholders";
public_routes.ui_popovers = "/ui-popovers";
public_routes.ui_progress = "/ui-progress";
public_routes.ui_scrollspy = "/ui-scrollspy";
public_routes.ui_spinner = "/ui-spinner";
public_routes.ui_nav_tabs = "/ui-nav-tabs";
public_routes.ui_toasts = "/ui-toasts";
public_routes.ui_tooltips = "/ui-tooltips";
public_routes.ui_typography = "/ui-typography";
public_routes.ui_utilities = "/ui-utilities";
public_routes.extended_dragula = "/extended-dragula";
public_routes.ui_clipboard = "/ui-clipboard";
public_routes.ui_rangeslider = "/ui-rangeslider";
public_routes.ui_sweetalerts = "/ui-sweetalerts";
public_routes.ui_lightbox = "/ui-lightbox";
public_routes.ui_rating = "/ui-rating";
public_routes.ui_scrollbar = "/ui-scrollbar";

// ---------- ( Forms ) ------------

public_routes.form_basic_inputs = "/form-basic-inputs";
public_routes.form_checkbox_radios = "/form-checkbox-radios";
public_routes.form_input_groups = "/form-input-groups";
public_routes.form_grid_gutters = "/form-grid-gutters";
public_routes.form_mask = "/form-mask";
public_routes.form_fileupload = "/form-fileupload";
public_routes.form_horizontal = "/form-horizontal";
public_routes.form_vertical = "/form-vertical";
public_routes.form_floating_labels = "/form-floating-labels";
public_routes.form_validation = "/form-validation";
public_routes.form_select2 = "/form-select2";
public_routes.form_wizard = "/form-wizard";
public_routes.form_pickers = "/form-pickers";

// ---------- ( Tables ) ------------

public_routes.tables_basic = "/tables-basic";
public_routes.data_tables = "/data-tables";

// ---------- ( Charts ) ------------

public_routes.chart_apex = "/chart-apex";
public_routes.chart_c3 = "/chart-c3";
public_routes.chart_js = "/chart-js";
public_routes.chart_morris = "/chart-morris";
public_routes.chart_flot = "/chart-flot";
public_routes.chart_peity = "/chart-peity";

// ---------- ( Icons ) ------------

public_routes.icon_fontawesome = "/icon-fontawesome";
public_routes.icon_tabler = "/icon-tabler";
public_routes.icon_bootstrap = "/icon-bootstrap";
public_routes.icon_remix = "/icon-remix";
public_routes.icon_feather = "/icon-feather";
public_routes.icon_ionic = "/icon-ionic";
public_routes.icon_material = "/icon-material";
public_routes.icon_pe7 = "/icon-pe7";
public_routes.icon_simpleline = "/icon-simpleline";
public_routes.icon_themify = "/icon-themify";
public_routes.icon_weather = "/icon-weather";
public_routes.icon_typicons = "/icon-typicons";
public_routes.icon_flag = "/icon-flag";

// ---------- ( Extras ) ------------

public_routes.login = "/login";
public_routes.login_basic = "/login-basic";
public_routes.login_cover = "/login-cover";
public_routes.login_illustration = "/login-illustration";
public_routes.register = "/register-basic";
public_routes.register_cover = "/register-cover";
public_routes.register_illustration = "/register-illustration";
public_routes.forgot_password = "/forgot-password-basic";
public_routes.forgot_password_cover = "/forgot-password-cover";
public_routes.forgot_password_illustration = "/forgot-password-illustration";
public_routes.email_verification_basic = "/email-verification-basic";
public_routes.email_verification_cover = "/email-verification-cover";
public_routes.email_verification_illustration = "/email-verification-illustration";
public_routes.reset_password_basic = "/reset-password-basic";
public_routes.reset_password_cover = "/reset-password-cover";
public_routes.reset_password_illustration = "/reset-password-illustration";
public_routes.success_basic = "/success-basic";
public_routes.success_cover = "/success-cover";
public_routes.success_illustration = "/success-illustration";
public_routes.two_step_verification_basic = "/two-step-verification-basic";
public_routes.two_step_verification_cover = "/two-step-verification-cover";
public_routes.two_step_verification_illustration = "/two-step-verification-illustration";
public_routes.lock_screen = "/lock-screen";
public_routes.error_404 = "/error-404";
public_routes.error_500 = "/error-500";

module.exports = public_routes;
