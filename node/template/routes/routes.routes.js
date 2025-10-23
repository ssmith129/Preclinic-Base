const express = require("express");
const route = express.Router();
const public_routes = require("./public.routes");

const index = "index";
const index_without_nav = "index-without-nav";
const index_error = "index-error";

route.use(function (req, res, next) {
  let url_replace_options = req.url.replace("?", "").replace("/", "");
  options = req.url.replace("?", "").replace("/", "");
  let routes = {};
  for (var key in public_routes) {
    routes[key] = public_routes[key].replace("/", "");
  }
  res.locals.routes = routes;
  res.locals.active_path = url_replace_options;
  next();
});

// ----------- ( Main ) -----------------

route.get(public_routes.admin, (req, res, next) => {
  res.render(index, {
    title: "Admin Dashboard | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "dashboard/admin-dashboard",
  });
});

route.get(public_routes.doctor_dashboard, (req, res, next) => {
  res.render(index, {
    title: "Doctor Dashboard | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "dashboard/doctor-dashboard",
  });
});

route.get(public_routes.patient_dashboard, (req, res, next) => {
  res.render(index, {
    title: "Patient Dashboard | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "dashboard/patient-dashboard",
  });
});
// ----------- ( Doctor Module ) -----------------

route.get(public_routes.doctors_appointments, (req, res, next) => {
  res.render(index, {
    title: "Doctors Appointments | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "doctor-module/doctors-appointments",
  });
});

route.get(public_routes.doctors_appointment_details, (req, res, next) => {
  res.render(index, {
    title: "Doctors Appointment Details | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "doctor-module/doctors-appointment-details",
  });
});

route.get(public_routes.doctors_patient_details, (req, res, next) => {
  res.render(index, {
    title: "Doctors Patient Details | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "doctor-module/doctors-patient-details",
  });
});

route.get(public_routes.doctors_prescription_details, (req, res, next) => {
  res.render(index, {
    title: "Doctors Prescription Details | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "doctor-module/doctors-prescription-details",
  });
});

route.get(public_routes.online_consultations, (req, res, next) => {
  res.render(index, {
    title: "Online Consultations | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "doctor-module/online-consultations",
  });
});

route.get(public_routes.doctors_schedules, (req, res, next) => {
  res.render(index, {
    title: "Doctors Schedules | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "doctor-module/doctors-schedules",
  });
});

route.get(public_routes.doctors_prescriptions, (req, res, next) => {
  res.render(index, {
    title: "Doctors Prescriptions | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "doctor-module/doctors-prescriptions",
  });
});

route.get(public_routes.doctors_leaves, (req, res, next) => {
  res.render(index, {
    title: "Doctors Leaves | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "doctor-module/doctors-leaves",
  });
});

route.get(public_routes.doctors_reviews, (req, res, next) => {
  res.render(index, {
    title: "Doctors Reviews | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "doctor-module/doctors-reviews",
  });
});

route.get(public_routes.doctors_profile_settings, (req, res, next) => {
  res.render(index, {
    title: "Doctors Profile Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "doctor-module/doctors-profile-settings",
  });
});

route.get(public_routes.doctors_password_settings, (req, res, next) => {
  res.render(index, {
    title: "Doctors Password Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "doctor-module/doctors-password-settings",
  });
});

route.get(public_routes.doctors_notification_settings, (req, res, next) => {
  res.render(index, {
    title: "Doctors Notification Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "doctor-module/doctors-notification-settings",
  });
});

// ---------------- Patient Module -------------------- //

route.get(public_routes.patient_appointments, (req, res, next) => {
  res.render(index, {
    title: "Patient Appointments | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "patient-module/patient-appointments",
  });
});

route.get(public_routes.patient_appointment_details, (req, res, next) => {
  res.render(index, {
    title: "Patient Appointment Details | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "patient-module/patient-appointment-details",
  });
});

route.get(public_routes.patients_doctor_details, (req, res, next) => {
  res.render(index, {
    title: "Patient Doctor Details | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "patient-module/patients-doctor-details",
  });
});

route.get(public_routes.patient_doctors, (req, res, next) => {
  res.render(index, {
    title: "Patient Doctors | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "patient-module/patient-doctors",
  });
});

route.get(public_routes.patient_prescriptions, (req, res, next) => {
  res.render(index, {
    title: "Patient Prescriptions | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "patient-module/patient-prescriptions",
  });
});

route.get(public_routes.patient_prescription_details, (req, res, next) => {
  res.render(index, {
    title: "Patient Prescriptions Details | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "patient-module/patient-prescription-details",
  });
});

route.get(public_routes.patient_invoices, (req, res, next) => {
  res.render(index, {
    title: "Patient Invoices | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "patient-module/patient-invoices",
  });
});

route.get(public_routes.patient_invoice_details, (req, res, next) => {
  res.render(index, {
    title: "Patient Invoice Details | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "patient-module/patient-invoice-details",
  });
});

route.get(public_routes.patient_profile_settings, (req, res, next) => {
  res.render(index, {
    title: "Patient Profile Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "patient-module/patient-profile-settings",
  });
});

route.get(public_routes.patient_password_settings, (req, res, next) => {
  res.render(index, {
    title: "Patient Password Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "patient-module/patient-password-settings",
  });
});

route.get(public_routes.patient_notifications_settings, (req, res, next) => {
  res.render(index, {
    title: "Patient Notifications Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "patient-module/patient-notifications-settings",
  });
});

// ---------------- Applications -------------------- //

route.get(public_routes.chat, (req, res, next) => {
  res.render(index, {
    title: "Chat | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/chat",
  });
});

route.get(public_routes.voice_call, (req, res, next) => {
  res.render(index, {
    title: "Audio Call | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/calls/voice-call",
  });
});

route.get(public_routes.video_call, (req, res, next) => {
  res.render(index, {
    title: "Video Call | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/calls/video-call",
  });
});

route.get(public_routes.outgoing_call, (req, res, next) => {
  res.render(index, {
    title: "Outgoing Call | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/calls/outgoing-call",
  });
});

route.get(public_routes.incoming_call, (req, res, next) => {
  res.render(index, {
    title: "Incoming Call | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/calls/incoming-call",
  });
});

route.get(public_routes.call_history, (req, res, next) => {
  res.render(index, {
    title: "Call History | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/calls/call-history",
  });
});

route.get(public_routes.calendar, (req, res, next) => {
  res.render(index, {
    title: "Calendar | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/calendar",
  });
});

route.get(public_routes.contacts, (req, res, next) => {
  res.render(index, {
    title: "Contacts | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/contacts",
  });
});

route.get(public_routes.email, (req, res, next) => {
  res.render(index, {
    title: "Email | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/email",
  });
});

route.get(public_routes.email_reply, (req, res, next) => {
  res.render(index, {
    title: "Email Reply | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/email-reply",
  });
});

route.get(public_routes.invoice, (req, res, next) => {
  res.render(index, {
    title: "Invoice | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/invoices/invoice",
  });
});

route.get(public_routes.invoice_details, (req, res, next) => {
  res.render(index, {
    title: "Invoice Details | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/invoices/invoice-details",
  });
});

route.get(public_routes.todo, (req, res, next) => {
  res.render(index, {
    title: "Todo | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/todo",
  });
});

route.get(public_routes.todo_list, (req, res, next) => {
  res.render(index, {
    title: "Todo List | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/todo-list",
  });
});

route.get(public_routes.notes, (req, res, next) => {
  res.render(index, {
    title: "Notes | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/notes",
  });
});

route.get(public_routes.kanban_view, (req, res, next) => {
  res.render(index, {
    title: "Kanban View | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/kanban-view",
  });
});

route.get(public_routes.file_manager, (req, res, next) => {
  res.render(index, {
    title: "File Manager | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/file-manager",
  });
});

route.get(public_routes.social_feed, (req, res, next) => {
  res.render(index, {
    title: "Social Feed | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/social-feed",
  });
});

route.get(public_routes.search_list, (req, res, next) => {
  res.render(index, {
    title: "Search List | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "applications/search-list",
  });
});

// ---------- ( Layouts ) ------------

route.get(public_routes.layout_default, (req, res, next) => {
  res.render(index, {
    title: "Admin Dashboard | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "layouts/layout-default",
  });
});

route.get(public_routes.layout_mini, (req, res, next) => {
  res.render(index, {
    title: "Admin Dashboard | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "layouts/layout-mini",
  });
});

route.get(public_routes.layout_hover_view, (req, res, next) => {
  res.render(index, {
    title: "Admin Dashboard | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "layouts/layout-hover-view",
  });
});

route.get(public_routes.layout_hidden, (req, res, next) => {
  res.render(index, {
    title: "Admin Dashboard | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "layouts/layout-hidden",
  });
});

route.get(public_routes.layout_full_width, (req, res, next) => {
  res.render(index, {
    title: "Admin Dashboard | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "layouts/layout-full-width",
  });
});

route.get(public_routes.layout_rtl, (req, res, next) => {
  res.render(index, {
    title: "Admin Dashboard | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "layouts/layout-rtl",
  });
});

route.get(public_routes.layout_dark, (req, res, next) => {
  res.render(index, {
    title: "Admin Dashboard | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "layouts/layout-dark",
  });
});

// ---------- ( Clinic ) ------------

route.get(public_routes.doctors, (req, res, next) => {
  res.render(index, {
    title: "Doctors Grid | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/doctors/doctors",
  });
});

route.get(public_routes.doctors_list, (req, res, next) => {
  res.render(index, {
    title: "Doctors List | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/doctors/doctors-list",
  });
});

route.get(public_routes.doctor_details, (req, res, next) => {
  res.render(index, {
    title: "Doctors Details | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/doctors/doctor-details",
  });
});

route.get(public_routes.add_doctor, (req, res, next) => {
  res.render(index, {
    title: "Add Doctor | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/doctors/add-doctor",
  });
});

route.get(public_routes.edit_doctor, (req, res, next) => {
  res.render(index, {
    title: "Edit Doctor | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/doctors/edit-doctor",
  });
});

route.get(public_routes.doctor_schedule, (req, res, next) => {
  res.render(index, {
    title: "Doctor Schedule | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/doctors/doctor-schedule",
  });
});

route.get(public_routes.patients, (req, res, next) => {
  res.render(index, {
    title: "Patients List | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/patients/patients",
  });
});

route.get(public_routes.patients_grid, (req, res, next) => {
  res.render(index, {
    title: "Patients Grid | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/patients/patients-grid",
  });
});

route.get(public_routes.create_patient, (req, res, next) => {
  res.render(index, {
    title: "Create Patient | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/patients/create-patient",
  });
});

route.get(public_routes.patient_details, (req, res, next) => {
  res.render(index, {
    title: "Patient Details | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/patients/patient-details",
  });
});

route.get(public_routes.edit_patient, (req, res, next) => {
  res.render(index, {
    title: "Edit Patient | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/patients/edit-patient",
  });
});

route.get(public_routes.appointments, (req, res, next) => {
  res.render(index, {
    title: "Appointments | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/appointments/appointments",
  });
});

route.get(public_routes.appointment_calendar, (req, res, next) => {
  res.render(index, {
    title: "Appointment Calendar | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/appointments/appointment-calendar",
  });
});

route.get(public_routes.new_appointment, (req, res, next) => {
  res.render(index, {
    title: "Appointment Calendar | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/appointments/new-appointment",
  });
});

route.get(public_routes.locations, (req, res, next) => {
  res.render(index, {
    title: "Locations | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/locations",
  });
});

route.get(public_routes.services, (req, res, next) => {
  res.render(index, {
    title: "Services | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/services",
  });
});

route.get(public_routes.specializations, (req, res, next) => {
  res.render(index, {
    title: "Specializations | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/specializations",
  });
});

route.get(public_routes.assets_list, (req, res, next) => {
  res.render(index, {
    title: "Assets | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/assets-list",
  });
});

route.get(public_routes.activities, (req, res, next) => {
  res.render(index, {
    title: "Activities | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/activities",
  });
});

route.get(public_routes.messages, (req, res, next) => {
  res.render(index, {
    title: "Messages | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "clinic/messages",
  });
});


// ---------- ( HRM ) ------------

route.get(public_routes.staffs, (req, res, next) => {
  res.render(index, {
    title: "Staffs | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "hrm/staffs",
  });
});

route.get(public_routes.hrm_departments, (req, res, next) => {
  res.render(index, {
    title: "Hrm Departments | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "hrm/hrm-departments",
  });
});

route.get(public_routes.designation, (req, res, next) => {
  res.render(index, {
    title: "Designation | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "hrm/designation",
  });
});

route.get(public_routes.attendance, (req, res, next) => {
  res.render(index, {
    title: "Attendance | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "hrm/attendance",
  });
});

route.get(public_routes.leaves, (req, res, next) => {
  res.render(index, {
    title: "Leaves | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "hrm/leaves/leaves",
  });
});

route.get(public_routes.leave_type, (req, res, next) => {
  res.render(index, {
    title: "Leaves Type | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "hrm/leaves/leave-type",
  });
});

route.get(public_routes.holidays, (req, res, next) => {
  res.render(index, {
    title: "Holidays | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "hrm/holidays",
  });
});

route.get(public_routes.payroll, (req, res, next) => {
  res.render(index, {
    title: "Payroll | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "hrm/payroll",
  });
});


// ---------- ( Finance & Accounts ) ------------

route.get(public_routes.expenses, (req, res, next) => {
  res.render(index, {
    title: "expenses | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "finance-accounts/expenses/expenses",
  });
});

route.get(public_routes.expense_category, (req, res, next) => {
  res.render(index, {
    title: "Expense Category | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "finance-accounts/expenses/expense-category",
  });
});

route.get(public_routes.income, (req, res, next) => {
  res.render(index, {
    title: "Income | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "finance-accounts/income",
  });
});

route.get(public_routes.invoices, (req, res, next) => {
  res.render(index, {
    title: "Invoices | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "finance-accounts/invoices/invoices",
  });
});

route.get(public_routes.invoices_details, (req, res, next) => {
  res.render(index, {
    title: "Invoices Details | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "finance-accounts/invoices/invoices-details",
  });
});

route.get(public_routes.add_invoices, (req, res, next) => {
  res.render(index, {
    title: "Add Invoices | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "finance-accounts/invoices/add-invoices",
  });
});

route.get(public_routes.edit_invoices, (req, res, next) => {
  res.render(index, {
    title: "Edit Invoices | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "finance-accounts/invoices/edit-invoices",
  });
});

route.get(public_routes.payments, (req, res, next) => {
  res.render(index, {
    title: "Payments | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "finance-accounts/payments",
  });
});

route.get(public_routes.transactions, (req, res, next) => {
  res.render(index, {
    title: "Transactions | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "finance-accounts/transactions",
  });
});

// ---------- ( Administration ) ------------

route.get(public_routes.roles_and_permissions, (req, res, next) => {
  res.render(index, {
    title: "Roles And Permissions | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "administration/users/roles-and-permissions",
  });
});

route.get(public_routes.permissions, (req, res, next) => {
  res.render(index, {
    title: "Permissions | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "administration/users/permissions",
  });
});

route.get(public_routes.delete_account_request, (req, res, next) => {
  res.render(index, {
    title: "Delete Account Request | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "administration/users/delete-account-request",
  });
});

route.get(public_routes.income_report, (req, res, next) => {
  res.render(index, {
    title: "Income Report | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "administration/reports/income-report",
  });
});

route.get(public_routes.expense_report, (req, res, next) => {
  res.render(index, {
    title: "Expense Report | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "administration/reports/expense-report",
  });
});

route.get(public_routes.profit_and_loss, (req, res, next) => {
  res.render(index, {
    title: "Profit And Loss | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "administration/reports/profit-and-loss",
  });
});

route.get(public_routes.appointment_report, (req, res, next) => {
  res.render(index, {
    title: "Appointment Report | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "administration/reports/appointment-report",
  });
});

route.get(public_routes.patient_report, (req, res, next) => {
  res.render(index, {
    title: "Patient Report | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "administration/reports/patient-report",
  });
});


// ---------- ( Extras ) ------------

route.get(public_routes.pages, (req, res, next) => {
  res.render(index, {
    title: "Pages | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "content/pages",
  });
});

route.get(public_routes.add_page, (req, res, next) => {
  res.render(index, {
    title: "Add Page | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "content/add-page",
  });
});

route.get(public_routes.edit_page, (req, res, next) => {
  res.render(index, {
    title: "Edit Page | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "content/edit-page",
  });
});

route.get(public_routes.add_blog, (req, res, next) => {
  res.render(index, {
    title: "Add Blog | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "content/blogs/add-blog",
  });
});

route.get(public_routes.edit_blog, (req, res, next) => {
  res.render(index, {
    title: "Edit Blog | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "content/blogs/edit-blog",
  });
});

route.get(public_routes.blogs, (req, res, next) => {
  res.render(index, {
    title: "Blogs | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "content/blogs/blogs",
  });
});

route.get(public_routes.blog_categories, (req, res, next) => {
  res.render(index, {
    title: "Blogs Categories | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "content/blogs/blog-categories",
  });
});

route.get(public_routes.blog_comments, (req, res, next) => {
  res.render(index, {
    title: "Blogs Comments | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "content/blogs/blog-comments",
  });
});

route.get(public_routes.countries, (req, res, next) => {
  res.render(index, {
    title: "Countries | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "content/location/countries",
  });
});

route.get(public_routes.states, (req, res, next) => {
  res.render(index, {
    title: "States | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "content/location/states",
  });
});

route.get(public_routes.cities, (req, res, next) => {
  res.render(index, {
    title: "Cities | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "content/location/cities",
  });
});

route.get(public_routes.testimonials, (req, res, next) => {
  res.render(index, {
    title: "Testimonials | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "content/testimonials",
  });
});

route.get(public_routes.faq, (req, res, next) => {
  res.render(index, {
    title: "FAQ | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "content/faq",
  });
});

// ---------- ( Support ) ------------

route.get(public_routes.contact_messages, (req, res, next) => {
  res.render(index, {
    title: "Contact Messages| Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "support/contact-messages",
  });
});

route.get(public_routes.tickets, (req, res, next) => {
  res.render(index, {
    title: "Tickets | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "support/tickets",
  });
});

route.get(public_routes.announcements, (req, res, next) => {
  res.render(index, {
    title: "Announcements | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "support/announcements",
  });
});

route.get(public_routes.newsletters, (req, res, next) => {
  res.render(index, {
    title: "Newsletters | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "support/newsletters",
  });
});

// ---------- ( Pages ) ------------

route.get(public_routes.starter, (req, res, next) => {
  res.render(index, {
    title: "starter | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "pages/starter",
  });
});

route.get(public_routes.profile, (req, res, next) => {
  res.render(index, {
    title: "Profile | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "pages/profile",
  });
});

route.get(public_routes.gallery, (req, res, next) => {
  res.render(index, {
    title: "Gallery | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "pages/gallery",
  });
});

route.get(public_routes.timeline, (req, res, next) => {
  res.render(index, {
    title: "Timeline | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "pages/timeline",
  });
});

route.get(public_routes.pricing, (req, res, next) => {
  res.render(index, {
    title: "Pricing | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "pages/pricing",
  });
});

route.get(public_routes.privacy_policy, (req, res, next) => {
  res.render(index, {
    title: "Privacy Policy | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "pages/privacy-policy",
  });
});

route.get(public_routes.terms_and_conditions, (req, res, next) => {
  res.render(index, {
    title: "Terms And Conditions | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "pages/terms-and-conditions",
  });
});

route.get(public_routes.coming_soon, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Coming Soon | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "coming-soon",
  });
});

route.get(public_routes.under_maintenance, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Under Maintenance | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "under-maintenance",
  });
});

route.get(public_routes.error_404, (req, res, next) => {
  res.render(index_error, {
    title: "Error 404 | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_error,
    page_path: "error/error-404",
  });
});

route.get(public_routes.error_500, (req, res, next) => {
  res.render(index_error, {
    title: "Error 500 | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_error,
    page_path: "error/error-500",
  });
});

// ---------- ( Settings ) ------------

route.get(public_routes.profile_settings, (req, res, next) => {
  res.render(index, {
    title: "Profile Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/account-settings/profile-settings",
  });
});

route.get(public_routes.security_settings, (req, res, next) => {
  res.render(index, {
    title: "Profile Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/account-settings/security-settings",
  });
});

route.get(public_routes.notifications_settings, (req, res, next) => {
  res.render(index, {
    title: "Notifications Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/account-settings/notifications-settings",
  });
});

route.get(public_routes.integrations_settings, (req, res, next) => {
  res.render(index, {
    title: "Integrations Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/account-settings/integrations-settings",
  });
});

route.get(public_routes.organization_settings, (req, res, next) => {
  res.render(index, {
    title: "Organization Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/website-settings/organization-settings",
  });
});

route.get(public_routes.localization_settings, (req, res, next) => {
  res.render(index, {
    title: "Localization Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/website-settings/localization-settings",
  });
});

route.get(public_routes.prefixes_settings, (req, res, next) => {
  res.render(index, {
    title: "Prefixes Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/website-settings/prefixes-settings",
  });
});

route.get(public_routes.seo_setup_settings, (req, res, next) => {
  res.render(index, {
    title: "Seo Setup Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/website-settings/seo-setup-settings",
  });
});

route.get(public_routes.language_settings, (req, res, next) => {
  res.render(index, {
    title: "Language Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/website-settings/language-settings",
  });
});

route.get(public_routes.language_settings2, (req, res, next) => {
  res.render(index, {
    title: "Language Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/website-settings/language-settings2",
  });
});

route.get(public_routes.language_settings3, (req, res, next) => {
  res.render(index, {
    title: "Language Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/website-settings/language-settings3",
  });
});

route.get(public_routes.maintenance_mode_settings, (req, res, next) => {
  res.render(index, {
    title: "Maintenance Mode Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/website-settings/maintenance-mode-settings",
  });
});

route.get(public_routes.login_and_register_settings, (req, res, next) => {
  res.render(index, {
    title: "Login And Register Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/website-settings/login-and-register-settings",
  });
});

route.get(public_routes.preferences_settings, (req, res, next) => {
  res.render(index, {
    title: "Preferences Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/website-settings/preferences-settings",
  });
});

route.get(public_routes.appointment_settings, (req, res, next) => {
  res.render(index, {
    title: "Appointment Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/clinic-settings/appointment-settings",
  });
});

route.get(public_routes.working_hours_settings, (req, res, next) => {
  res.render(index, {
    title: "Working Hours Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/clinic-settings/working-hours-settings",
  });
});

route.get(public_routes.cancellation_reason_settings, (req, res, next) => {
  res.render(index, {
    title: "Cancellation Reason Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/clinic-settings/cancellation-reason-settings",
  });
});

route.get(public_routes.invoice_settings, (req, res, next) => {
  res.render(index, {
    title: "Invoice Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/app-settings/invoice-settings",
  });
});

route.get(public_routes.invoice_templates_settings, (req, res, next) => {
  res.render(index, {
    title: "Invoice Templates Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/app-settings/invoice-templates-settings",
  });
});

route.get(public_routes.signatures_settings, (req, res, next) => {
  res.render(index, {
    title: "Signatures Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/app-settings/signatures-settings",
  });
});

route.get(public_routes.custom_fields_settings, (req, res, next) => {
  res.render(index, {
    title: "Custom Fields Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/app-settings/custom-fields-settings",
  });
});

route.get(public_routes.email_settings, (req, res, next) => {
  res.render(index, {
    title: "Email Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/system-settings/email-settings",
  });
});

route.get(public_routes.email_templates_settings, (req, res, next) => {
  res.render(index, {
    title: "Email Templates Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/system-settings/email-templates-settings",
  });
});

route.get(public_routes.sms_gateways_settings, (req, res, next) => {
  res.render(index, {
    title: "SMS Gateways Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/system-settings/sms-gateways-settings",
  });
});

route.get(public_routes.sms_templates_settings, (req, res, next) => {
  res.render(index, {
    title: "SMS Templates Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/system-settings/sms-templates-settings",
  });
});

route.get(public_routes.gdpr_cookies_settings, (req, res, next) => {
  res.render(index, {
    title: "GDRP Cookies Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/system-settings/gdpr-cookies-settings",
  });
});

route.get(public_routes.payment_methods_settings, (req, res, next) => {
  res.render(index, {
    title: "Payment Methods Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/finance-account-settings/payment-methods-settings",
  });
});

route.get(public_routes.bank_accounts_settings, (req, res, next) => {
  res.render(index, {
    title: "Bank Accounts Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/finance-account-settings/bank-accounts-settings",
  });
});

route.get(public_routes.tax_rates_settings, (req, res, next) => {
  res.render(index, {
    title: "Tax Rates Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/finance-account-settings/tax-rates-settings",
  });
});

route.get(public_routes.currencies_settings, (req, res, next) => {
  res.render(index, {
    title: "Currencies Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/finance-account-settings/currencies-settings",
  });
});

route.get(public_routes.sitemap_settings, (req, res, next) => {
  res.render(index, {
    title: "Other Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/other-settings/sitemap-settings",
  });
});

route.get(public_routes.clear_cache_settings, (req, res, next) => {
  res.render(index, {
    title: "Clear Cache Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/other-settings/clear-cache-settings",
  });
});

route.get(public_routes.storage_settings, (req, res, next) => {
  res.render(index, {
    title: "Storage Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/other-settings/storage-settings",
  });
});

route.get(public_routes.cronjob_settings, (req, res, next) => {
  res.render(index, {
    title: "Cronjob Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/other-settings/cronjob-settings",
  });
});

route.get(public_routes.ban_ip_address_settings, (req, res, next) => {
  res.render(index, {
    title: "Ban IP Address Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/other-settings/ban-ip-address-settings",
  });
});

route.get(public_routes.system_backup_settings, (req, res, next) => {
  res.render(index, {
    title: "System Backup Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/other-settings/system-backup-settings",
  });
});

route.get(public_routes.database_backup_settings, (req, res, next) => {
  res.render(index, {
    title: "Database Backup Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/other-settings/database-backup-settings",
  });
});

route.get(public_routes.system_update, (req, res, next) => {
  res.render(index, {
    title: "System Update Settings | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "settings/other-settings/system-update",
  });
});

// ---------- ( Extras ) ------------

route.get(public_routes.login, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Login Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "login",
  });
});

// ---------- ( UI Interface ) ------------

route.get(public_routes.ui_accordion, (req, res, next) => {
  res.render(index, {
    title: "Accordion | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-accordion",
  });
});

route.get(public_routes.ui_alerts, (req, res, next) => {
  res.render(index, {
    title: "Alerts | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-alerts",
  });
});

route.get(public_routes.ui_avatar, (req, res, next) => {
  res.render(index, {
    title: "Avatar | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-avatar",
  });
});

route.get(public_routes.ui_badges, (req, res, next) => {
  res.render(index, {
    title: "Bagde | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-badges",
  });
});

route.get(public_routes.ui_breadcrumb, (req, res, next) => {
  res.render(index, {
    title: "Breadcrumb | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-breadcrumb",
  });
});

route.get(public_routes.ui_buttons, (req, res, next) => {
  res.render(index, {
    title: "Buttons | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-buttons",
  });
});

route.get(public_routes.ui_buttons_group, (req, res, next) => {
  res.render(index, {
    title: "Button Group | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-buttons-group",
  });
});

route.get(public_routes.ui_cards, (req, res, next) => {
  res.render(index, {
    title: "Cards | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-cards",
  });
});

route.get(public_routes.ui_carousel, (req, res, next) => {
  res.render(index, {
    title: "Carousel | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-carousel",
  });
});

route.get(public_routes.ui_collapse, (req, res, next) => {
  res.render(index, {
    title: "Collapse | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-collapse",
  });
});

route.get(public_routes.ui_dropdowns, (req, res, next) => {
  res.render(index, {
    title: "Dropdowns | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-dropdowns",
  });
});

route.get(public_routes.ui_ratio, (req, res, next) => {
  res.render(index, {
    title: "Ratio | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-ratio",
  });
});

route.get(public_routes.ui_grid, (req, res, next) => {
  res.render(index, {
    title: "Grid | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-grid",
  });
});

route.get(public_routes.ui_images, (req, res, next) => {
  res.render(index, {
    title: "Images | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-images",
  });
});

route.get(public_routes.ui_links, (req, res, next) => {
  res.render(index, {
    title: "Links | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-links",
  });
});

route.get(public_routes.ui_list_group, (req, res, next) => {
  res.render(index, {
    title: "List Group | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-list-group",
  });
});

route.get(public_routes.ui_modals, (req, res, next) => {
  res.render(index, {
    title: "Modals | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-modals",
  });
});

route.get(public_routes.ui_offcanvas, (req, res, next) => {
  res.render(index, {
    title: "Offcanvas | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-offcanvas",
  });
});

route.get(public_routes.ui_pagination, (req, res, next) => {
  res.render(index, {
    title: "Pagination | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-pagination",
  });
});

route.get(public_routes.ui_placeholders, (req, res, next) => {
  res.render(index, {
    title: "Placeholders | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-placeholders",
  });
});

route.get(public_routes.ui_popovers, (req, res, next) => {
  res.render(index, {
    title: "Popovers | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-popovers",
  });
});

route.get(public_routes.ui_progress, (req, res, next) => {
  res.render(index, {
    title: "Progress | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-progress",
  });
});

route.get(public_routes.ui_scrollspy, (req, res, next) => {
  res.render(index, {
    title: "Scrollspy | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-scrollspy",
  });
});

route.get(public_routes.ui_spinner, (req, res, next) => {
  res.render(index, {
    title: "Spinner | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-spinner",
  });
});

route.get(public_routes.ui_nav_tabs, (req, res, next) => {
  res.render(index, {
    title: "Nav Tabs | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-nav-tabs",
  });
});

route.get(public_routes.ui_toasts, (req, res, next) => {
  res.render(index, {
    title: "Toasts | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-toasts",
  });
});

route.get(public_routes.ui_tooltips, (req, res, next) => {
  res.render(index, {
    title: "Tooltips | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-tooltips",
  });
});

route.get(public_routes.ui_typography, (req, res, next) => {
  res.render(index, {
    title: "Typography | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-typography",
  });
});

route.get(public_routes.ui_utilities, (req, res, next) => {
  res.render(index, {
    title: "Utilities | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/base-ui/ui-utilities",
  });
});

route.get(public_routes.extended_dragula, (req, res, next) => {
  res.render(index, {
    title: "Extended Dragula | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/advanced-ui/extended-dragula",
  });
});

route.get(public_routes.ui_clipboard, (req, res, next) => {
  res.render(index, {
    title: "Extended Dragula | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/advanced-ui/ui-clipboard",
  });
});

route.get(public_routes.ui_rangeslider, (req, res, next) => {
  res.render(index, {
    title: "Rangeslider | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/advanced-ui/ui-rangeslider",
  });
});

route.get(public_routes.ui_sweetalerts, (req, res, next) => {
  res.render(index, {
    title: "Sweetalerts | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/advanced-ui/ui-sweetalerts",
  });
});

route.get(public_routes.ui_lightbox, (req, res, next) => {
  res.render(index, {
    title: "Lightbox | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/advanced-ui/ui-lightbox",
  });
});

route.get(public_routes.ui_rating, (req, res, next) => {
  res.render(index, {
    title: "Rating | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/advanced-ui/ui-rating",
  });
});

route.get(public_routes.ui_scrollbar, (req, res, next) => {
  res.render(index, {
    title: "Scrollbar | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/advanced-ui/ui-scrollbar",
  });
});

// ---------- ( Forms ) ------------

route.get(public_routes.form_basic_inputs, (req, res, next) => {
  res.render(index, {
    title: "Form basic inputs | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/forms/form-elements/form-basic-inputs",
  });
});

route.get(public_routes.form_checkbox_radios, (req, res, next) => {
  res.render(index, {
    title: "Form Checkbox Radios | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/forms/form-elements/form-checkbox-radios",
  });
});

route.get(public_routes.form_input_groups, (req, res, next) => {
  res.render(index, {
    title: "Form Input Groups | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/forms/form-elements/form-input-groups",
  });
});

route.get(public_routes.form_grid_gutters, (req, res, next) => {
  res.render(index, {
    title: "Form Grid Gutters | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/forms/form-elements/form-grid-gutters",
  });
});

route.get(public_routes.form_mask, (req, res, next) => {
  res.render(index, {
    title: "Form Mask | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/forms/form-elements/form-mask",
  });
});

route.get(public_routes.form_fileupload, (req, res, next) => {
  res.render(index, {
    title: "Form Mask | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/forms/form-elements/form-fileupload",
  });
});

route.get(public_routes.form_horizontal, (req, res, next) => {
  res.render(index, {
    title: "Form Horizontal | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/forms/layouts/form-horizontal",
  });
});

route.get(public_routes.form_vertical, (req, res, next) => {
  res.render(index, {
    title: "Form Vertical | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/forms/layouts/form-vertical",
  });
});

route.get(public_routes.form_floating_labels, (req, res, next) => {
  res.render(index, {
    title: "Form Floating Labels | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/forms/layouts/form-floating-labels",
  });
});

route.get(public_routes.form_validation, (req, res, next) => {
  res.render(index, {
    title: "Form Validation | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/forms/form-validation",
  });
});

route.get(public_routes.form_select2, (req, res, next) => {
  res.render(index, {
    title: "Form Select2 | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/forms/form-select2",
  });
});

route.get(public_routes.form_wizard, (req, res, next) => {
  res.render(index, {
    title: "Form Wizard | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/forms/form-wizard",
  });
});

route.get(public_routes.form_pickers, (req, res, next) => {
  res.render(index, {
    title: "Form Wizard | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/forms/form-pickers",
  });
});

// ---------- ( Tables ) ------------

route.get(public_routes.tables_basic, (req, res, next) => {
  res.render(index, {
    title: "Basic Tables | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/tables/tables-basic",
  });
});

route.get(public_routes.data_tables, (req, res, next) => {
  res.render(index, {
    title: "Data Tables | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/tables/data-tables",
  });
});

// ---------- ( Charts ) ------------

route.get(public_routes.chart_apex, (req, res, next) => {
  res.render(index, {
    title: "Chart Apex | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/charts/chart-apex",
  });
});

route.get(public_routes.chart_c3, (req, res, next) => {
  res.render(index, {
    title: "Chart c3 | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/charts/chart-c3",
  });
});

route.get(public_routes.chart_js, (req, res, next) => {
  res.render(index, {
    title: "Chart Js | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/charts/chart-js",
  });
});

route.get(public_routes.chart_morris, (req, res, next) => {
  res.render(index, {
    title: "Chart Morris | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/charts/chart-morris",
  });
});

route.get(public_routes.chart_flot, (req, res, next) => {
  res.render(index, {
    title: "Chart Flot | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/charts/chart-flot",
  });
});

route.get(public_routes.chart_peity, (req, res, next) => {
  res.render(index, {
    title: "Chart Peity | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/charts/chart-peity",
  });
});


// ---------- ( Icons ) ------------

route.get(public_routes.icon_fontawesome, (req, res, next) => {
  res.render(index, {
    title: "Fontawesome icons | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/icons/icon-fontawesome",
  });
});

route.get(public_routes.icon_tabler, (req, res, next) => {
  res.render(index, {
    title: "Tabular icons | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/icons/icon-tabler",
  });
});

route.get(public_routes.icon_bootstrap, (req, res, next) => {
  res.render(index, {
    title: "Bootstrap icons | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/icons/icon-bootstrap",
  });
});

route.get(public_routes.icon_remix, (req, res, next) => {
  res.render(index, {
    title: "Remix icons | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/icons/icon-remix",
  });
});

route.get(public_routes.icon_feather, (req, res, next) => {
  res.render(index, {
    title: "Feather icons | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/icons/icon-feather",
  });
});

route.get(public_routes.icon_ionic, (req, res, next) => {
  res.render(index, {
    title: "Ionic icons | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/icons/icon-ionic",
  });
});

route.get(public_routes.icon_material, (req, res, next) => {
  res.render(index, {
    title: "Material icons | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/icons/icon-material",
  });
});

route.get(public_routes.icon_pe7, (req, res, next) => {
  res.render(index, {
    title: "Pe7 icons | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/icons/icon-pe7",
  });
});

route.get(public_routes.icon_simpleline, (req, res, next) => {
  res.render(index, {
    title: "Simpleline icons | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/icons/icon-simpleline",
  });
});

route.get(public_routes.icon_themify, (req, res, next) => {
  res.render(index, {
    title: "Themify icons | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/icons/icon-themify",
  });
});

route.get(public_routes.icon_weather, (req, res, next) => {
  res.render(index, {
    title: "Weather icons | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/icons/icon-weather",
  });
});

route.get(public_routes.icon_typicons, (req, res, next) => {
  res.render(index, {
    title: "Typicons icons | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/icons/icon-typicons",
  });
});

route.get(public_routes.icon_flag, (req, res, next) => {
  res.render(index, {
    title: "Flag icons | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/icons/icon-flag",
  });
});

route.get(public_routes.icon_typicons, (req, res, next) => {
  res.render(index, {
    title: "Typicons icons | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    page_path: "ui-interface/icons/icon-typicons",
  });
});


// ---------- ( Extras ) ------------

route.get(public_routes.login, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Login Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "login",
  });
});

route.get(public_routes.login_basic, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Login Basic Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "login-basic",
  });
});

route.get(public_routes.login_cover, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Login Cover Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "login-cover",
  });
});

route.get(public_routes.login_illustration, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Login Illustration Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "login-illustration",
  });
});

route.get(public_routes.register, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Register Basic Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "register-basic",
  });
});

route.get(public_routes.register_cover, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Register Cover Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "register-cover",
  });
});

route.get(public_routes.register_illustration, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Register Illustration Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "register-cover",
  });
});

route.get(public_routes.forgot_password, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Forgot Cover Basic | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "forgot-password-basic",
  });
});

route.get(public_routes.forgot_password_cover, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Forgot Cover Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "forgot-password-cover",
  });
});

route.get(public_routes.forgot_password_illustration, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Forgot Cover Illustration | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "forgot-password-illustration",
  });
});

route.get(public_routes.email_verification_basic, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Email Verify Basic Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "email-verification-basic",
  });
});

route.get(public_routes.email_verification_cover, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Email Verify Cover Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "email-verification-cover",
  });
});

route.get(public_routes.email_verification_illustration, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Email Verify Illustration Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "email-verification-illustration",
  });
});

route.get(public_routes.reset_password_basic, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Reset Password Basic Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "reset-password-basic",
  });
});

route.get(public_routes.reset_password_cover, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Reset Password Cover Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "reset-password-cover",
  });
});

route.get(public_routes.reset_password_illustration, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Reset Password Illustration Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "reset-password-illustration",
  });
});

route.get(public_routes.success_basic, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Success Basic Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "success-basic",
  });
});

route.get(public_routes.success_cover, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Success Cover Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "success-cover",
  });
});

route.get(public_routes.success_illustration, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Success Illustration Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "success-illustration",
  });
});

route.get(public_routes.two_step_verification_basic, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Two Step Verification Basic Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "two-step-verification-basic",
  });
});

route.get(public_routes.two_step_verification_cover, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Two Step Verification Cover Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "two-step-verification-cover",
  });
});

route.get(public_routes.two_step_verification_illustration, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Two Step Verification Illustration Form | Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "two-step-verification-illustration",
  });
});

route.get(public_routes.lock_screen, (req, res, next) => {
  res.render(index_without_nav, {
    title: "Preclinic - Medical & Hospital - Bootstrap 5 Admin Template",
    layout: index_without_nav,
    page_path: "lock-screen",
  });
});

route.get("/", function (req, res) {
  res.redirect(public_routes.login);
});
route.get("*", function (req, res) {
  res.redirect(public_routes.pageNotFound);
});

module.exports = route;
