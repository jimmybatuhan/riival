<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        @if(!Route::is(['mentor','mentee','booking-list','categories','transactions-list','settings','invoice-report','profile','blog','blog-details','add-blog','edit-blog','login','register','forgot-password',
        'lock-screen','error-404','error-500','blank-page','components','form-basic-inputs','form-input-groups','form-horizontal','form-vertical','form-mask','form-validation','tables-basic','data-tables']))
        <title>Mentoring - Dashboard</title>
        @endif
        @if(Route::is(['mentor','mentee']))
        <title>Mentoring - Mentor List Page</title>
        @endif
        @if(Route::is(['booking-list']))
        <title>Mentoring - Booking List Page</title>
        @endif
        @if(Route::is(['categories']))
        <title>Mentoring - Categories Page</title>
        @endif
        @if(Route::is(['transactions-list']))
        <title>Mentoring - Transactions List Page</title>
        @endif
        @if(Route::is(['settings']))
        <title>Mentoring - Settings Page</title>
        @endif
        @if(Route::is(['invoice-report']))
        <title>Doccure - Invoice Report Page</title>
        @endif
        @if(Route::is(['profile']))
        <title>Mentoring - Profile</title>
        @endif
        @if(Route::is(['blog']))
        <title>Mentoring - Blog Page</title>
        @endif
        @if(Route::is(['blog-details']))
        <title>Mentoring - Blog Details Page</title>
        @endif
        @if(Route::is(['add-blog']))
        <title>Mentoring - Add Blog Page</title>
        @endif
        @if(Route::is(['edit-blog']))
        <title>Mentoring - Edit Blog Page</title>
        @endif
        @if(Route::is(['login']))
        <title>Mentoring - Login</title>
        @endif
        @if(Route::is(['register']))
        <title>Mentoring - Register</title>
        @endif
        @if(Route::is(['forgot-password']))
        <title>Mentoring - Forgot Password</title>
        @endif
        @if(Route::is(['lock-screen']))
        <title>Mentoring - Lock Screen</title>
        @endif
        @if(Route::is(['error-404']))
        <title>Doccure - Error 404</title>
        @endif
        @if(Route::is(['error-500']))
        <title>Doccure - Error 500</title>
        @endif
        @if(Route::is(['blank-page']))
        <title>Mentoring - Blank Page</title>
        @endif
        @if(Route::is(['components']))
        <title>Mentoring - Components</title>
		@endif
        @if(Route::is(['form-basic-inputs']))
        <title>Mentoring - Basic Inputs</title>
        @endif
        @if(Route::is(['form-input-groups']))
        <title>Mentoring - Form Input Groups</title>
        @endif
        @if(Route::is(['form-horizontal']))
        <title>Mentoring - Horizontal Form</title>
        @endif
        @if(Route::is(['form-vertical']))
        <title>Mentoring - Vertical Form</title>
        @endif
        @if(Route::is(['form-mask']))
        <title>Mentoring - Form Mask</title>
        @endif
        @if(Route::is(['form-validation']))
        <title>Mentoring - Form Validation</title>
        @endif
        @if(Route::is(['tables-basic']))
        <title>Mentoring - Tables Basic</title>
        @endif
        @if(Route::is(['data-tables']))
        <title>Mentoring - Data Tables</title>
        @endif
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets_admin/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/css/font-awesome.min.css')}}">
        @if(Route::is(['add-blog','blog-details','blog','edit-blog']))
        <link rel="stylesheet" href="{{asset('assets_admin/plugins/fontawesome/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets_admin/plugins/fontawesome/css/all.min.css')}}">
        @endif
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/css/feathericon.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets_admin/plugins/morris/morris.css')}}">	
         <!-- Select2 CSS -->
         <link rel="stylesheet" href="{{asset('assets_admin/plugins/select2/css/select2.min.css')}}">	
        <!-- Datatables CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/plugins/datatables/datatables.min.css')}}">	
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('assets_admin/css/style.css')}}">