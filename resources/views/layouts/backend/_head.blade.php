<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<link rel="icon" href="{{ asset('assets/favicon.ico') }}">
<title>{{ config('app.name', 'Md. Saif Uddin') }}</title>
@yield('library-css')
<link href="{{ asset('assets/theme1/css/style.min.css') }}" rel="stylesheet">
<!-- Select 2 -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/theme1/libs/select2/dist/css/select2.min.css') }}">
<!-- data table plugin CSS -->
<link href="{{ asset('assets/theme1/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@yield('custom-css')
<style>
    .select2-container--default .select2-selection--multiple .select2-selection__choice{
       background-color: #2962ff!important;
    }
</style>    
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
