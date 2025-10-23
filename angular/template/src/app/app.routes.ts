import { Routes } from '@angular/router';

export const routes: Routes = [
  {
    path: '',
    redirectTo: 'index',
    pathMatch: 'full'
  },
  //Auth Routes//
  { path: '',loadComponent:()=>import('./auth/auth.component').then(m=>m.AuthComponent),
    children:[
      {
        path: 'login',loadComponent:()=>import('./auth/login/login.component').then(m=>m.LoginComponent)
      },
      {
        path: 'lock-screen',loadComponent:()=>import('./auth/lock-screen/lock-screen.component').then(m=>m.LockScreenComponent)
      },
      //Basic
      { path: 'login-basic', loadComponent: () => import('./auth/basic/login/login.component').then(m => m.LoginComponent) },
      { path: 'register-basic', loadComponent: () => import('./auth/basic/register/register.component').then(m => m.RegisterComponent) },
      { path: 'forgot-password-basic', loadComponent: () => import('./auth/basic/forgot-password/forgot-password.component').then(m => m.ForgotPasswordComponent) },
      { path: 'reset-password-basic', loadComponent: () => import('./auth/basic/reset-password/reset-password.component').then(m => m.ResetPasswordComponent) },
      { path: 'email-verification-basic', loadComponent: () => import('./auth/basic/email-verification/email-verification.component').then(m => m.EmailVerificationComponent) },
      { path: 'two-step-verification-basic', loadComponent: () => import('./auth/basic/two-step-verification/two-step-verification.component').then(m => m.TwoStepVerificationComponent) },
      { path: 'success-basic', loadComponent: () => import('./auth/basic/success/success.component').then(m => m.SuccessComponent) },
      //Cover
      { path: 'login-cover', loadComponent: () => import('./auth/cover/login/login.component').then(m => m.LoginComponent) },
      { path: 'register-cover', loadComponent: () => import('./auth/cover/register/register.component').then(m => m.RegisterComponent) },
      { path: 'forgot-password-cover', loadComponent: () => import('./auth/cover/forgot-password/forgot-password.component').then(m => m.ForgotPasswordComponent) },
      { path: 'reset-password-cover', loadComponent: () => import('./auth/cover/reset-password/reset-password.component').then(m => m.ResetPasswordComponent) },
      { path: 'email-verification-cover', loadComponent: () => import('./auth/cover/email-verification/email-verification.component').then(m => m.EmailVerificationComponent) },
      { path: 'two-step-verification-cover', loadComponent: () => import('./auth/cover/two-step-verification/two-step-verification.component').then(m => m.TwoStepVerificationComponent) },
      { path: 'success-cover', loadComponent: () => import('./auth/cover/success/success.component').then(m => m.SuccessComponent) },
      //Illustration
      { path: 'login-illustration', loadComponent: () => import('./auth/illustration/login/login.component').then(m => m.LoginComponent) },
      { path: 'register-illustration', loadComponent: () => import('./auth/illustration/register/register.component').then(m => m.RegisterComponent) },
      { path: 'forgot-password-illustration', loadComponent: () => import('./auth/illustration/forgot-password/forgot-password.component').then(m => m.ForgotPasswordComponent) },
      { path: 'reset-password-illustration', loadComponent: () => import('./auth/illustration/reset-password/reset-password.component').then(m => m.ResetPasswordComponent) },
      { path: 'email-verification-illustration', loadComponent: () => import('./auth/illustration/email-verification/email-verification.component').then(m => m.EmailVerificationComponent) },
      { path: 'two-step-verification-illustration', loadComponent: () => import('./auth/illustration/two-step-verification/two-step-verification.component').then(m => m.TwoStepVerificationComponent) },
      { path: 'success-illustration', loadComponent: () => import('./auth/illustration/success/success.component').then(m => m.SuccessComponent) },
    
    ]

  },
  //Features Routes//
  {
    path: '',loadComponent:()=>import('./features/features.component').then(m=>m.FeaturesComponent),
    children:[
      {path:'index',loadComponent:()=>import('./features/dashboard/dashboard.component').then(m=>m.DashboardComponent)},
      { path: 'application',
        loadComponent: () => import('./features/application/application.component').then(m=>m.ApplicationComponent),
        children: [
          { path: 'chat', loadComponent: () => import('./features/application/chat/chat.component').then((m) => m.ChatComponent),},
          { path: 'email', loadComponent: () => import('./features/application/email/email.component').then((m) => m.EmailComponent),},
          { path: 'email-reply', loadComponent: () => import('./features/application/email-reply/email-reply.component').then(m => m.EmailReplyComponent) },
          { path: 'todo', loadComponent: () => import('./features/application/todo/todo.component').then(m => m.TodoComponent) },
          { path: 'notes', loadComponent: () => import('./features/application/notes/notes.component').then(m => m.NotesComponent) },
          { path: 'social-feed', loadComponent: () => import('./features/application/social-feed/social-feed.component').then(m => m.SocialFeedComponent) },
          { path: 'file-manager', loadComponent: () => import('./features/application/file-manager/file-manager.component').then(m => m.FileManagerComponent) },
          { path: 'kanban-view', loadComponent: () => import('./features/application/kanban-view/kanban-view.component').then(m => m.KanbanViewComponent) },
          { path: 'contacts', loadComponent: () => import('./features/application/contacts/contacts.component').then(m => m.ContactsComponent) },
          { path: 'invoice', loadComponent: () => import('./features/application/invoice/invoice.component').then(m => m.InvoiceComponent) },
          { path: 'search-list', loadComponent: () => import('./features/application/search-list/search-list.component').then(m => m.SearchListComponent) },
          { path: 'todo-list', loadComponent: () => import('./features/application/todo-list/todo-list.component').then(m => m.TodoListComponent) },
          { path: 'calls', loadComponent: () => import('./features/application/calls/calls.component').then(m => m.CallsComponent),
            children: [
              { path: 'voice-call', loadComponent: () => import('./features/application/calls/voice-call/voice-call.component').then((m) => m.VoiceCallComponent,),},
              { path: 'video-call', loadComponent: () => import('./features/application/calls/video-call/video-call.component').then((m) => m.VideoCallComponent,),},
              { path: 'outgoing-call', loadComponent: () => import('./features/application/calls/outgoing-call/outgoing-call.component').then((m) => m.OutgoingCallComponent),},
              { path: 'incoming-call', loadComponent: () => import('./features/application/calls/incoming-call/incoming-call.component').then((m) => m.IncomingCallComponent),},
              { path: 'call-history', loadComponent: () => import('./features/application/calls/call-history/call-history.component').then((m) => m.CallHistoryComponent),},
            ]
           },
          { path: 'invoice-details', loadComponent: () => import('./features/application/invoice-details/invoice-details.component').then(m => m.InvoiceDetailsComponent) },
          { path: 'calendar', loadComponent: () => import('./features/application/calendar/calendar.component').then(m => m.CalendarComponent) },
        ],
      },
      //UI Interface Routes//
      { path: 'base-ui',loadComponent:()=>import('./features/ui-interface/base-ui/base-ui.component').then(m=>m.BaseUIComponent),
        children: [
          { path: 'alert', loadComponent: () => import('./features/ui-interface/base-ui/alerts/alerts.component').then(m => m.AlertsComponent),},
          { path: 'accordions',loadComponent:()=>import('./features/ui-interface/base-ui/accordions/accordions.component').then(m=>m.AccordionsComponent)},
          { path: 'avatar',loadComponent:()=>import('./features/ui-interface/base-ui/avatar/avatar.component').then(m=>m.AvatarComponent)},
          { path: 'badges',loadComponent:()=>import('./features/ui-interface/base-ui/badges/badges.component').then(m=>m.BadgesComponent)},
          { path: 'buttons',loadComponent:()=>import('./features/ui-interface/base-ui/buttons/buttons.component').then(m=>m.ButtonsComponent)},
          { path: 'button-group',loadComponent:()=>import('./features/ui-interface/base-ui/button-group/button-group.component').then(m=>m.ButtonGroupComponent)},
          { path: 'breadcrumb',loadComponent:()=>import('./features/ui-interface/base-ui/breadcrumb/breadcrumb.component').then(m=>m.BreadcrumbComponent)},
          { path: 'cards',loadComponent:()=>import('./features/ui-interface/base-ui/cards/cards.component').then(m=>m.CardsComponent)},
          { path: 'carousel',loadComponent:()=>import('./features/ui-interface/base-ui/carousel/carousel.component').then(m=>m.CarouselComponent)},
          { path: 'drop-down',loadComponent:()=>import('./features/ui-interface/base-ui/dropdowns/dropdowns.component').then(m=>m.DropdownsComponent)},
          { path: 'grid',loadComponent:()=>import('./features/ui-interface/base-ui/grid/grid.component').then(m=>m.GridComponent)},
          { path: 'images',loadComponent:()=>import('./features/ui-interface/base-ui/images/images.component').then(m=>m.ImagesComponent)},
          { path: 'modal',loadComponent:()=>import('./features/ui-interface/base-ui/modals/modals.component').then(m=>m.ModalsComponent)},
          { path: 'offcanvas',loadComponent:()=>import('./features/ui-interface/base-ui/offcanvas/offcanvas.component').then(m=>m.OffcanvasComponent)},
          { path: 'pagination',loadComponent:()=>import('./features/ui-interface/base-ui/pagination/pagination.component').then(m=>m.PaginationComponent)},
          { path: 'placeholder',loadComponent:()=>import('./features/ui-interface/base-ui/placeholders/placeholders.component').then(m=>m.PlaceholdersComponent)},
          { path: 'popover',loadComponent:()=>import('./features/ui-interface/base-ui/popover/popover.component').then(m=>m.PopoverComponent)},
          { path: 'progress-bars',loadComponent:()=>import('./features/ui-interface/base-ui/progress-bars/progress-bars.component').then(m=>m.ProgressBarsComponent)},
          { path: 'spinner',loadComponent:()=>import('./features/ui-interface/base-ui/spinner/spinner.component').then(m=>m.SpinnerComponent)},
          { path: 'tabs',loadComponent:()=>import('./features/ui-interface/base-ui/tabs/tabs.component').then(m=>m.TabsComponent)},
          { path: 'toasts',loadComponent:()=>import('./features/ui-interface/base-ui/toasts/toasts.component').then(m=>m.ToastsComponent)},
          { path: 'tooltip',loadComponent:()=>import('./features/ui-interface/base-ui/tooltip/tooltip.component').then(m=>m.TooltipComponent)},
          { path: 'typography',loadComponent:()=>import('./features/ui-interface/base-ui/typography/typography.component').then(m=>m.TypographyComponent)},
          { path: 'collapse', loadComponent: () => import('./features/ui-interface/base-ui/collapse/collapse.component').then(m => m.CollapseComponent) },
          { path: 'ratio', loadComponent: () => import('./features/ui-interface/base-ui/ratio/ratio.component').then(m => m.RatioComponent) },
          { path: 'links', loadComponent: () => import('./features/ui-interface/base-ui/links/links.component').then(m => m.LinksComponent) },
          { path: 'list-group', loadComponent: () => import('./features/ui-interface/base-ui/list-group/list-group.component').then(m => m.ListGroupComponent) },
          { path: 'utilities', loadComponent: () => import('./features/ui-interface/base-ui/utlities/utlities.component').then(m => m.UtlitiesComponent) },
        ] 
      },
      { path: 'advanced-ui',loadComponent:()=>import('./features/ui-interface/advanced-ui/advanced-ui.component').then(m=>m.AdvancedUiComponent),
        children: [
          { path: 'clipboards',loadComponent:()=>import('./features/ui-interface/advanced-ui/clipboards/clipboards.component').then(m=>m.ClipboardsComponent)},
          { path: 'drag-drop',loadComponent:()=>import('./features/ui-interface/advanced-ui/drag-drop/drag-drop.component').then(m=>m.DragDropComponent)},
          { path: 'rating',loadComponent:()=>import('./features/ui-interface/advanced-ui/rating/rating.component').then(m=>m.RatingComponent)},
          { path: 'text-editor',loadComponent:()=>import('./features/ui-interface/advanced-ui/text-editor/text-editor.component').then(m=>m.TextEditorComponent)},
          { path: 'counter',loadComponent:()=>import('./features/ui-interface/advanced-ui/counter/counter.component').then(m=>m.CounterComponent)},
          { path: 'scrollbar',loadComponent:()=>import('./features/ui-interface/advanced-ui/scrollbar/scrollbar.component').then(m=>m.ScrollbarComponent)},
          { path: 'light-box',loadComponent:()=>import('./features/ui-interface/advanced-ui/lightbox/lightbox.component').then(m=>m.LightboxComponent)},
          { path: 'range-slider',loadComponent:()=>import('./features/ui-interface/advanced-ui/rangeslider/rangeslider.component').then(m=>m.RangesliderComponent)},
          
          
        ]
      },
      { path: 'maps',loadComponent:()=>import('./features/ui-interface/maps/maps.component').then(m=>m.MapsComponent),
        children: [
          { path: 'leaflet-map',loadComponent:()=>import('./features/ui-interface/maps/leaflet/leaflet.component').then(m=>m.LeafletComponent)},
        ]
      },
      { path: 'tables',loadComponent:()=>import('./features/ui-interface/tables/tables.component').then(m=>m.TablesComponent),
        children: [
          { path: 'data-table',loadComponent:()=>import('./features/ui-interface/tables/data-tables/data-tables.component').then(m=>m.DataTablesComponent)},
          { path: 'basic',loadComponent:()=>import('./features/ui-interface/tables/basic-tables/basic-tables.component').then(m=>m.BasicTablesComponent)},
        ],
      },
      { path: 'icon',loadComponent:()=>import('./features/ui-interface/icon/icon.component').then(m=>m.IconComponent),
        children: [
          { path: 'fontawesome',loadComponent:()=>import('./features/ui-interface/icon/fontawesome/fontawesome.component').then(m=>m.FontawesomeComponent)},
          {
            path: 'feather',loadComponent:()=>import('./features/ui-interface/icon/feathers/feathers.component').then(m=>m.FeathersComponent)},
          {
            path: 'ionic',loadComponent:()=>import('./features/ui-interface/icon/ionic/ionic.component').then(m=>m.IonicComponent)},
          {
            path: 'material',loadComponent:()=>import('./features/ui-interface/icon/material/material.component').then(m=>m.MaterialComponent)},
          {
            path: 'pe7',loadComponent:()=>import('./features/ui-interface/icon/pe7/pe7.component').then(m=>m.Pe7Component)},
          {
              path: 'simple-line',loadComponent:()=>import('./features/ui-interface/icon/simpline/simpline.component').then(m=>m.SimplineComponent)},
          {
            path: 'themify',loadComponent:()=>import('./features/ui-interface/icon/themify/themify.component').then(m=>m.ThemifyComponent)},
          {
            path: 'typicon',loadComponent:()=>import('./features/ui-interface/icon/typicon/typicon.component').then(m=>m.TypiconComponent)},
          {
            path: 'weather',loadComponent:()=>import('./features/ui-interface/icon/weather/weather.component').then(m=>m.WeatherComponent)},
          {
            path: 'flag',loadComponent:()=>import('./features/ui-interface/icon/flag/flag.component').then(m=>m.FlagComponent)},
        ]     
      },
      { path: 'forms',loadComponent:()=>import('./features/ui-interface/forms/forms.component').then(m=>m.FormsComponent),
        children: [
          { path: 'basic-inputs',loadComponent:()=> import('./features/ui-interface/forms/basic-inputs/basic-inputs.component').then(m=>m.BasicInputsComponent)},
          { path: 'horizontal-form',loadComponent:()=>import('./features/ui-interface/forms/horizontal-form/horizontal-form.component').then(m=>m.HorizontalFormComponent)},
          { path: 'vertical-form',loadComponent:()=>import('./features/ui-interface/forms/vertical-form/vertical-form.component').then(m=>m.VerticalFormComponent)},
          { path: 'form-mask',loadComponent:()=>import('./features/ui-interface/forms/form-mask/form-mask.component').then(m=>m.FormMaskComponent)},
          { path: 'form-validation',loadComponent:()=>import('./features/ui-interface/forms/form-validation/form-validation.component').then(m=>m.FormValidationComponent)},
          { path: 'input-groups',loadComponent:()=>import('./features/ui-interface/forms/input-groups/input-groups.component').then(m=>m.InputGroupsComponent)},
          { path: 'file-upload',loadComponent:()=>import('./features/ui-interface/forms/form-fileupload/form-fileupload.component').then(m=>m.FormFileuploadComponent)},
          { path: 'form-checkbox-radios',loadComponent:()=>import('./features/ui-interface/forms/form-checkbox-radios/form-checkbox-radios.component').then(m=>m.FormCheckboxRadiosComponent)},
          { path: 'form-grid-gutters',loadComponent:()=>import('./features/ui-interface/forms/form-grid-gutters/form-grid-gutters.component').then(m=>m.FormGridGuttersComponent)},
          { path: 'form-pickers',loadComponent:()=>import('./features/ui-interface/forms/form-pickers/form-pickers.component').then(m=>m.FormPickersComponent)},
        ]         
      },
      { path: 'chart',loadComponent:()=>import('./features/ui-interface/charts/charts.component').then(m=>m.ChartsComponent),
        children: [
            { path: 'apex-charts',loadComponent:()=>import('./features/ui-interface/charts/apexcharts/apexcharts.component').then(m=>m.ApexchartsComponent)},
            { path: 'prime-ng',loadComponent:()=>import('./features/ui-interface/charts/prime-ng/prime-ng.component').then(m=>m.PrimeNgComponent)},
        ]
      },  
      // Clinic Routes//
      { path: 'doctor', loadComponent: () => import('./features/clinic/doctor/doctor.component').then(m => m.DoctorComponent),
        children:[
          { path: 'doctor-grid', loadComponent: () => import('./features/clinic/doctor/doctor-grid/doctor-grid.component').then(m => m.DoctorGridComponent) },
          { path: 'doctor-list', loadComponent: () => import('./features/clinic/doctor/doctor-list/doctor-list.component').then(m => m.DoctorListComponent) },
          { path: 'doctor-details', loadComponent: () => import('./features/clinic/doctor/doctor-details/doctor-details.component').then(m => m.DoctorDetailsComponent) },
          { path: 'add-doctor', loadComponent: () => import('./features/clinic/doctor/add-doctor/add-doctor.component').then(m => m.AddDoctorComponent) },
          { path: 'doctor-schedule', loadComponent: () => import('./features/clinic/doctor/doctor-schedule/doctor-schedule.component').then(m => m.DoctorScheduleComponent) }, 
          { path: 'edit-doctor', loadComponent: () => import('./features/clinic/doctor/edit-doctor/edit-doctor.component').then(m => m.EditDoctorComponent) },
        ]
      },
      { path: 'patient', loadComponent: () => import('./features/clinic/patient/patient.component').then(m => m.PatientComponent),
        children:[
          { path: 'patient-grid', loadComponent: () => import('./features/clinic/patient/patient-grid/patient-grid.component').then(m => m.PatientGridComponent) },
          { path: 'patient-list', loadComponent: () => import('./features/clinic/patient/patient-list/patient-list.component').then(m => m.PatientListComponent) },
          { path: 'patient-details', loadComponent: () => import('./features/clinic/patient/patient-details/patient-details.component').then(m => m.PatientDetailsComponent) },
          { path: 'create-patient', loadComponent: () => import('./features/clinic/patient/create-patient/create-patient.component').then(m => m.CreatePatientComponent) },
          { path: 'edit-patient', loadComponent: () => import('./features/clinic/patient/edit-patient/edit-patient.component').then(m => m.EditPatientComponent) },
        ]
       },
      { path: 'appointment', loadComponent: () => import('./features/clinic/appointment/appointment.component').then(m => m.AppointmentComponent),
        children: [
          { path: 'appointment-list', loadComponent: () => import('./features/clinic/appointment/appointment-list/appointment-list.component').then(m => m.AppointmentListComponent)
          },
          { path: 'new-appointment', loadComponent: () => import('./features/clinic/appointment/new-appointment/new-appointment.component').then(m => m.NewAppointmentComponent)
          },
          { path: 'appointment-calendar', loadComponent: () => import('./features/clinic/appointment/appointment-calendar/appointment-calendar.component').then(m => m.AppointmentCalendarComponent)
          },
        ]
       },
      { path: 'locations', loadComponent: () => import('./features/clinic/locations/locations.component').then(m => m.LocationsComponent) },
      { path: 'services', loadComponent: () => import('./features/clinic/services/services.component').then(m => m.ServicesComponent) },
      { path: 'assets', loadComponent: () => import('./features/clinic/assets/assets.component').then(m => m.AssetsComponent) },
      { path: 'activities', loadComponent: () => import('./features/clinic/activites/activites.component').then(m => m.ActivitesComponent) },
      { path: 'messages', loadComponent: () => import('./features/clinic/messages/messages.component').then(m => m.MessagesComponent) },
      { path: 'specializations', loadComponent: () => import('./features/clinic/specializations/specializations.component').then(m => m.SpecializationsComponent) },
      //HRM Routes//
      { path: 'staffs', loadComponent : () => import('./features/hrm/staffs/staffs.component').then(m => m.StaffsComponent) },
      { path: 'departments', loadComponent: () => import('./features/hrm/departments/departments.component').then(m => m.DepartmentsComponent) },  
      { path: 'designation',  loadComponent: () => import('./features/hrm/designation/designation.component').then(m => m.DesignationComponent) },
      { path: 'attendance', loadComponent: () => import('./features/hrm/attendance/attendance.component').then(m => m.AttendanceComponent) },
      { path: 'holidays', loadComponent: () => import('./features/hrm/holidays/holidays.component').then(m => m.HolidaysComponent) },
      { path: 'payroll', loadComponent: () => import('./features/hrm/payroll/payroll.component').then(m => m.PayrollComponent) },
      { path: 'leaves', loadComponent: () => import('./features/hrm/leaves/leaves.component').then(m => m.LeavesComponent),
        children:[
          { path: 'leaves-list', loadComponent: () => import('./features/hrm/leaves/leaves-list/leaves-list.component').then(m => m.LeavesListComponent) },
          { path: 'leave-type', loadComponent: () => import('./features/hrm/leaves/leave-type/leave-type.component').then(m => m.LeaveTypeComponent) }    
       ]        
       },
      { path: 'payroll-2', loadComponent: () => import('./features/hrm/payroll-2/payroll-2.component').then(m => m.Payroll2Component) },
      //Finance Routes//
      { path: 'payments', loadComponent: () => import('./features/finance/payments/payments.component').then(m => m.PaymentsComponent) },
      { path: 'transactions', loadComponent: () => import('./features/finance/transactions/transactions.component').then(m => m.TransactionsComponent) },
      { path: 'income', loadComponent: () => import('./features/finance/income/income.component').then(m => m.IncomeComponent) },
      { path: 'expenses', loadComponent: () => import('./features/finance/expenses/expenses.component').then(m => m.ExpensesComponent),
        children: [
          { path: 'expense-list', loadComponent: () => import('./features/finance/expenses/expense-list/expense-list.component').then(m => m.ExpenseListComponent) },
          { path: 'expense-category', loadComponent: () => import('./features/finance/expenses/expense-category/expense-category.component').then(m => m.ExpenseCategoryComponent) },
        ]
       },
      { path: 'invoices', loadComponent: () => import('./features/finance/invoices/invoices.component').then(m => m.InvoicesComponent),
        children: [
          { path: 'invoices-list', loadComponent: () => import('./features/finance/invoices/invoices-list/invoices-list.component').then(m => m.InvoicesListComponent) },
          { path: 'add-invoices', loadComponent: () => import('./features/finance/invoices/add-invoices/add-invoices.component').then(m => m.AddInvoicesComponent) },
          { path: 'edit-invoices', loadComponent: () => import('./features/finance/invoices/edit-invoices/edit-invoices.component').then(m => m.EditInvoicesComponent) },
          { path: 'invoices-details', loadComponent: () => import('./features/finance/invoices/invoices-details/invoices-details.component').then(m => m.InvoicesDetailsComponent) },
        ]
       },

       { path: 'reports', loadComponent: () => import('./features/administration/reports/reports.component').then(m => m.ReportsComponent),
        children:[
          { path: 'income-report', loadComponent: () => import('./features/administration/reports/income-report/income-report.component').then(m => m.IncomeReportComponent) },
          { path: 'expense-report', loadComponent: () => import('./features/administration/reports/expense-report/expense-report.component').then(m => m.ExpenseReportComponent) },
          { path: 'profit-and-loss', loadComponent: () => import('./features/administration/reports/profit-and-loss/profit-and-loss.component').then(m => m.ProfitAndLossComponent) },
          { path: 'patient-report', loadComponent: () => import('./features/administration/reports/patient-report/patient-report.component').then(m => m.PatientReportComponent) },
          { path: 'appointment-report', loadComponent: () => import('./features/administration/reports/appointment-report/appointment-report.component').then(m => m.AppointmentReportComponent) }
        ]
        },
       { path: 'users', loadComponent: () => import('./features/administration/users/users.component').then(m => m.UsersComponent),
        children:[
      
          { path: 'roles-and-permissions', loadComponent: () => import('./features/administration/users/roles-and-permissions/roles-and-permissions.component').then(m => m.RolesAndPermissionsComponent) },
          { path: 'permission', loadComponent: () => import('./features/administration/users/permission/permission.component').then(m => m.PermissionComponent) },
          { path: 'delete-account-request', loadComponent: () => import('./features/administration/users/delete-account-request/delete-account-request.component').then(m => m.DeleteAccountRequestComponent) },
            ]
        },

        { path: 'pages', loadComponent: () => import('./features/content/pages/pages.component').then(m => m.PagesComponent) },
        { path: 'add-page', loadComponent: () => import('./features/content/add-page/add-page.component').then(m => m.AddPageComponent) },
       { path: 'edit-page', loadComponent: () => import('./features/content/edit-page/edit-page.component').then(m => m.EditPageComponent) },
       { path: 'blogs', loadComponent: () => import('./features/content/blogs/blogs.component').then(m => m.BlogsComponent),
        children:[
          { path: 'add-blog', loadComponent: () => import('./features/content/blogs/add-blog/add-blog.component').then(m => m.AddBlogComponent) },
          { path: 'blog', loadComponent: () => import('./features/content/blogs/blog-list/blog-list.component').then(m => m.BlogListComponent) },
          { path: 'blog-details', loadComponent: () => import('./features/content/blogs/blog-details/blog-details.component').then(m => m.BlogDetailsComponent) },
          { path: 'blog-category', loadComponent: () => import('./features/content/blogs/blog-category/blog-category.component').then(m => m.BlogCategoryComponent) },
          { path: 'blog-comments', loadComponent: () => import('./features/content/blogs/blog-comments/blog-comments.component').then(m => m.BlogCommentsComponent) },
          { path: 'edit-blog', loadComponent: () => import('./features/content/blogs/edit-blog/edit-blog.component').then(m => m.EditBlogComponent) },
        ] 
       },
       { path: 'locations', loadComponent: () => import('./features/content/locations/locations.component').then(m => m.LocationsComponent),
        children:[
          { path: 'countries', loadComponent: () => import('./features/content/locations/countries/countries.component').then(m => m.CountriesComponent) },
          { path: 'states', loadComponent: () => import('./features/content/locations/states/states.component').then(m => m.StatesComponent) },
          { path: 'cities', loadComponent: () => import('./features/content/locations/cities/cities.component').then(m => m.CitiesComponent) },
        ]
       },
       { path: 'testimonials', loadComponent: () => import('./features/content/testimonials/testimonials.component').then(m => m.TestimonialsComponent) },
       { path: 'faq', loadComponent: () => import('./features/content/faq/faq.component').then(m => m.FaqComponent) },

       { path: 'contact-messages', loadComponent: () => import('./features/support/contact-messages/contact-messages.component').then(m => m.ContactMessagesComponent) },
       { path: 'tickets', loadComponent: () => import('./features/support/tickets/tickets.component').then(m => m.TicketsComponent) },
        { path: 'ticket-details', loadComponent: () => import('./features/support/ticket-details/ticket-details.component').then(m => m.TicketDetailsComponent) },
        { path: 'announcements', loadComponent: () => import('./features/support/announcements/announcements.component').then(m => m.AnnouncementsComponent) },
      { path: 'newsletters', loadComponent: () => import('./features/support/newsletters/newsletters.component').then(m => m.NewslettersComponent) },

      { path: 'starter', loadComponent: () => import('./features/pages/starter/starter.component').then(m => m.StarterComponent) },
      { path: 'profile', loadComponent: () => import('./features/pages/profile/profile.component').then(m => m.ProfileComponent) },
      { path: 'gallery', loadComponent: () => import('./features/pages/gallery/gallery.component').then(m => m.GalleryComponent) },
      { path: 'timeline', loadComponent: () => import('./features/pages/timeline/timeline.component').then(m => m.TimelineComponent) },
        { path: 'pricing', loadComponent: () => import('./features/pages/pricing/pricing.component').then(m => m.PricingComponent) },
      { path: 'privacy-policy', loadComponent: () => import('./features/pages/privacy-policy/privacy-policy.component').then(m => m.PrivacyPolicyComponent) },
      { path: 'terms-and-conditions', loadComponent: () => import('./features/pages/terms-and-conditions/terms-and-conditions.component').then(m => m.TermsAndConditionsComponent) },

      //Settings Routes//
      { path: 'settings', loadComponent: () => import('./features/settings/settings.component').then((m) => m.SettingsComponent),
        children: [
          { path: 'account-settings', loadComponent: () => import('./features/settings/account-settings/account-settings.component').then(m => m.AccountSettingsComponent),
            children:[
              { path: 'profile-settings', loadComponent: () => import('./features/settings/account-settings/profile-settings/profile-settings.component').then(m => m.ProfileSettingsComponent) },
              { path: 'security-settings', loadComponent: () => import('./features/settings/account-settings/security-settings/security-settings.component').then(m => m.SecuritySettingsComponent) },
              { path: 'notifications-settings', loadComponent: () => import('./features/settings/account-settings/notifications-settings/notifications-settings.component').then(m => m.NotificationsSettingsComponent) },
              { path: 'integrations-settings', loadComponent: () => import('./features/settings/account-settings/integrations-settings/integrations-settings.component').then(m => m.IntegrationsSettingsComponent) }
                ]
           },
          { path: 'website-settings', loadComponent: () => import('./features/settings/website-settings/website-settings.component').then(m => m.WebsiteSettingsComponent),
            children:[
              { path: 'organization-settings', loadComponent: () => import('./features/settings/website-settings/organization-settings/organization-settings.component').then(m => m.OrganizationSettingsComponent) },
              { path: 'localization-settings', loadComponent: () => import('./features/settings/website-settings/localization-settings/localization-settings.component').then(m => m.LocalizationSettingsComponent) }, 
              { path: 'prefixes-settings', loadComponent: () => import('./features/settings/website-settings/prefixes-settings/prefixes-settings.component').then(m => m.PrefixesSettingsComponent) },
              { path: 'seo-setup-settings', loadComponent: () => import('./features/settings/website-settings/seo-setup-settings/seo-setup-settings.component').then(m => m.SeoSetupSettingsComponent) }, 
              { path: 'language-settings', loadComponent: () => import('./features/settings/website-settings/language-settings/language-settings.component').then(m => m.LanguageSettingsComponent) }, 
              { path: 'language-settings-2', loadComponent: () => import('./features/settings/website-settings/language-settings-2/language-settings-2.component').then(m => m.LanguageSettings2Component) },
              { path: 'maintenance-mode-settings', loadComponent: () => import('./features/settings/website-settings/maintenance-mode-settings/maintenance-mode-settings.component').then(m => m.MaintenanceModeSettingsComponent) },
              { path: 'login-and-register-settings', loadComponent: () => import('./features/settings/website-settings/login-and-register-settings/login-and-register-settings.component').then(m => m.LoginAndRegisterSettingsComponent) },
              { path: 'preferences-settings', loadComponent: () => import('./features/settings/website-settings/preferences-settings/preferences-settings.component').then(m => m.PreferencesSettingsComponent) }
            ]
           },
          { path: 'app-settings', loadComponent: () => import('./features/settings/app-settings/app-settings.component').then(m => m.AppSettingsComponent),
            children:[
              { path: 'invoice-settings', loadComponent: () => import('./features/settings/app-settings/invoice-settings/invoice-settings.component').then(m => m.InvoiceSettingsComponent) },
               { path: 'invoice-templates-settings', loadComponent: () => import('./features/settings/app-settings/invoice-templates-settings/invoice-templates-settings.component').then(m => m.InvoiceTemplatesSettingsComponent) },
               { path: 'signatures-settings', loadComponent: () => import('./features/settings/app-settings/signatures-settings/signatures-settings.component').then(m => m.SignaturesSettingsComponent) },
               { path: 'custom-fields-settings', loadComponent: () => import('./features/settings/app-settings/custom-fields-settings/custom-fields-settings.component').then(m => m.CustomFieldsSettingsComponent) }, 
            ] 
           },
          { path: 'clinic-settings', loadComponent: () => import('./features/settings/clinic-settings/clinic-settings.component').then(m => m.ClinicSettingsComponent),
            children:[
              { path: 'appointment-settings', loadComponent: () => import('./features/settings/clinic-settings/appointment-settings/appointment-settings.component').then(m => m.AppointmentSettingsComponent) },
              { path: 'working-hours-settings', loadComponent: () => import('./features/settings/clinic-settings/working-hours-settings/working-hours-settings.component').then(m => m.WorkingHoursSettingsComponent) },
              { path: 'cancellation-reason-settings', loadComponent: () => import('./features/settings/clinic-settings/cancellation-reason-settings/cancellation-reason-settings.component').then(m => m.CancellationReasonSettingsComponent) }
            ]     
           },
          { path: 'system-settings', loadComponent: () => import('./features/settings/system-settings/system-settings.component').then(m => m.SystemSettingsComponent),
            children:[
              { path: 'email-settings', loadComponent: () => import('./features/settings/system-settings/email-settings/email-settings.component').then(m => m.EmailSettingsComponent) },
              { path: 'email-templates-settings', loadComponent: () => import('./features/settings/system-settings/email-templates-settings/email-templates-settings.component').then(m => m.EmailTemplatesSettingsComponent) },
                { path: 'sms-gateways-settings', loadComponent: () => import('./features/settings/system-settings/sms-gateways-settings/sms-gateways-settings.component').then(m => m.SmsGatewaysSettingsComponent) },
              { path: 'sms-templates-settings', loadComponent: () => import('./features/settings/system-settings/sms-templates-settings/sms-templates-settings.component').then(m => m.SmsTemplatesSettingsComponent) },
              { path: 'gdpr-cookies-settings', loadComponent: () => import('./features/settings/system-settings/gdpr-cookies-settings/gdpr-cookies-settings.component').then(m => m.GdprCookiesSettingsComponent) }
            ]
           },
          { path: 'finance-settings', loadComponent: () => import('./features/settings/finance-settings/finance-settings.component').then(m => m.FinanceSettingsComponent),
            children:[
              { path: 'payment-methods-settings', loadComponent: () => import('./features/settings/finance-settings/payment-methods-settings/payment-methods-settings.component').then(m => m.PaymentMethodsSettingsComponent) },
              { path: 'bank-accounts-settings', loadComponent: () => import('./features/settings/finance-settings/bank-accounts-settings/bank-accounts-settings.component').then(m => m.BankAccountsSettingsComponent) },
              { path: 'tax-rates-settings', loadComponent: () => import('./features/settings/finance-settings/tax-rates-settings/tax-rates-settings.component').then(m => m.TaxRatesSettingsComponent) },
              { path: 'currencies-settings', loadComponent: () => import('./features/settings/finance-settings/currencies-settings/currencies-settings.component').then(m => m.CurrenciesSettingsComponent) }
            ]
           },   
          { path: 'other-settings', loadComponent: () => import('./features/settings/other-settings/other-settings.component').then(m => m.OtherSettingsComponent),
            children:[
              { path: 'sitemap-settings', loadComponent: () => import('./features/settings/other-settings/sitemap-settings/sitemap-settings.component').then(m => m.SitemapSettingsComponent) },
              { path: 'clear-cache-settings', loadComponent: () => import('./features/settings/other-settings/clear-cache-settings/clear-cache-settings.component').then(m => m.ClearCacheSettingsComponent) },
              { path: 'storage-settings', loadComponent: () => import('./features/settings/other-settings/storage-settings/storage-settings.component').then(m => m.StorageSettingsComponent) },
              { path: 'cronjob-settings', loadComponent: () => import('./features/settings/other-settings/cronjob-settings/cronjob-settings.component').then(m => m.CronjobSettingsComponent) },
              { path: 'ban-ip-address-settings', loadComponent: () => import('./features/settings/other-settings/ban-ip-address-settings/ban-ip-address-settings.component').then(m => m.BanIpAddressSettingsComponent) },
              { path: 'system-backup-settings', loadComponent: () => import('./features/settings/other-settings/system-backup-settings/system-backup-settings.component').then(m => m.SystemBackupSettingsComponent) },
              { path: 'database-backup-settings', loadComponent: () => import('./features/settings/other-settings/database-backup-settings/database-backup-settings.component').then(m => m.DatabaseBackupSettingsComponent) }, 
              { path: 'system-update', loadComponent: () => import('./features/settings/other-settings/system-update/system-update.component').then(m => m.SystemUpdateComponent) }
            ]
           },
        ]
      },

      //Doctor Modules//
      { path: 'doctors',loadComponent: () => import('./features/doctor-module/doctor-module.component').then((m) => m.DoctorModuleComponent),
        children:[
          { path: 'dashboard', loadComponent: () => import('./features/doctor-module/dashboard/dashboard.component').then(m => m.DashboardComponent) },
          { path: 'appointments', loadComponent: () => import('./features/doctor-module/appointments/appointments/appointments.component').then(m => m.AppointmentsComponent) },
          { path: 'online-consultations', loadComponent: () => import('./features/doctor-module/appointments/online-consultations/online-consultations.component').then(m => m.OnlineConsultationsComponent) },
            { path: 'schedules', loadComponent: () => import('./features/doctor-module/schedules/schedules.component').then(m => m.SchedulesComponent) },
      { path: 'prescriptions', loadComponent: () => import('./features/doctor-module/prescriptions/prescriptions.component').then(m => m.PrescriptionsComponent) },
      { path: 'leaves', loadComponent: () => import('./features/doctor-module/leaves/leaves.component').then(m => m.LeavesComponent) },
      { path: 'reviews', loadComponent: () => import('./features/doctor-module/reviews/reviews.component').then(m => m.ReviewsComponent) },
      { path: 'profile-settings', loadComponent: () => import('./features/doctor-module/settings/profile-settings/profile-settings.component').then(m => m.ProfileSettingsComponent) },
      { path: 'password-settings', loadComponent: () => import('./features/doctor-module/settings/password-settings/password-settings.component').then(m => m.PasswordSettingsComponent) },
      { path: 'notification-settings', loadComponent: () => import('./features/doctor-module/settings/notification-settings/notification-settings.component').then(m => m.NotificationSettingsComponent) }, 
      { path: 'prescription-details', loadComponent: () => import('./features/doctor-module/prescription-details/prescription-details.component').then(m => m.PrescriptionDetailsComponent) },
      { path: 'doctor-patient-details', loadComponent: () => import('./features/doctor-module/appointments/doctor-patient-details/doctor-patient-details.component').then(m => m.DoctorPatientDetailsComponent) },
      { path: 'patient-appointment-details', loadComponent: () => import('./features/doctor-module/appointments/patient-appointment-details/patient-appointment-details.component').then(m => m.PatientAppointmentDetailsComponent) },
        ]
       },
       //Patient Modules//
       { path: 'patients', loadComponent: () => import('./features/patient-module/patient-module.component').then((m) => m.PatientModuleComponent),
        children:[
          { path: 'dashboard', loadComponent: () => import('./features/patient-module/dashboard/dashboard.component').then(m => m.DashboardComponent) },
          { path: 'appointments', loadComponent: () => import('./features/patient-module/appointments/appointments.component').then(m => m.AppointmentsComponent) }, 
          { path: 'profile-settings', loadComponent: () => import('./features/patient-module/settings/profile-settings/profile-settings.component').then(m => m.ProfileSettingsComponent) },
          { path: 'password-settings', loadComponent: () => import('./features/patient-module/settings/password-settings/password-settings.component').then(m => m.PasswordSettingsComponent) },
          { path: 'notification-settings', loadComponent: () => import('./features/patient-module/settings/notification-settings/notification-settings.component').then(m => m.NotificationSettingsComponent) }, 
          { path: 'doctor', loadComponent: () => import('./features/patient-module/doctor/doctor.component').then(m => m.DoctorComponent) },
          { path: 'prescriptions', loadComponent: () => import('./features/patient-module/prescriptions/prescriptions.component').then(m => m.PrescriptionsComponent) },
          { path: 'invoices', loadComponent: () => import('./features/patient-module/invoices/invoices.component').then(m => m.InvoicesComponent) },
          { path: 'patients-doctor-details', loadComponent: () => import('./features/patient-module/patients-doctor-details/patients-doctor-details.component').then(m => m.PatientsDoctorDetailsComponent) },
        ]
       },
       //layout Routes//
      { path: 'layout-default', loadComponent: () =>import('./features/modal-dashboard/modal-dashboard.component').then((m) => m.ModalDashboardComponent), },
      { path: 'layout-single',loadComponent: () =>import('./features/modal-dashboard/modal-dashboard.component').then((m) => m.ModalDashboardComponent),},
      { path: 'layout-rtl', loadComponent: () => import('./features/modal-dashboard/modal-dashboard.component').then((m) => m.ModalDashboardComponent),},
      { path: 'layout-mini', loadComponent: () => import('./features/modal-dashboard/modal-dashboard.component').then((m) => m.ModalDashboardComponent),},
      { path: 'layout-hover-view', loadComponent: () => import('./features/modal-dashboard/modal-dashboard.component').then((m) => m.ModalDashboardComponent),},
      { path: 'layout-hidden', loadComponent: () => import('./features/modal-dashboard/modal-dashboard.component').then((m) => m.ModalDashboardComponent),},
      {path: 'layout-full-width',loadComponent: () => import('./features/modal-dashboard/modal-dashboard.component').then((m) => m.ModalDashboardComponent),},
      {path: 'layout-dark',loadComponent: () => import('./features/modal-dashboard/modal-dashboard.component').then((m) => m.ModalDashboardComponent),},
    ],
  },
  { path: 'coming-soon', loadComponent: () => import('./features/pages/coming-soon/coming-soon.component').then(m => m.ComingSoonComponent) },
  { path: 'under-maintenance', loadComponent: () => import('./features/pages/under-maintenance/under-maintenance.component').then(m => m.UnderMaintenanceComponent) },



  { path: 'error', loadComponent: () => import('./error/error.component').then(m => m.ErrorComponent),
    children:[
      {path: 'error404', loadComponent: () => import('./error/error404/error404.component').then(m => m.Error404Component)},
      {path: 'error500', loadComponent: () => import('./error/error500/error500.component').then(m => m.Error500Component)},
    ]
   },
  {
    path:'**',
    redirectTo:'error/error404',
    pathMatch:'full'
  },

]as const;
