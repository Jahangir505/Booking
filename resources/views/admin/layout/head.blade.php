 <head>
    <meta charset="utf-8" />
    <title>@if($gnl) {{$gnl->title}} @endif - Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
  
    <meta content="" name="description" />
    <meta content="" name="author" />
    @if($gnl && $gnl->favicon)
        <link rel="shortcut icon" type="image/png" href="{{Storage::url('public/logo/'.$gnl->favicon)}}"/>
    @else
        <link rel="shortcut icon" type="image/png" href="{{asset('assets/favicon.png')}}"/>
    @endif
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/admin/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <script src="{{ asset('assets/admin/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('assets/admin/global/css/components-rounded.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ asset('assets/admin/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ asset('assets/admin/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/layouts/layout/css/themes/darkblue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{ asset('assets/admin/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="{{ asset('assets/images/front/favicon.png') }}" />

    <link href="{{ asset('assets/admin/global/plugins/jquery-file-upload/css/jquery.fileupload.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css') }}" rel="stylesheet" type="text/css" />



    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <link href="{{ asset('assets/admin/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />

    <!-- Datetime-->
    <link href="{{ asset('assets/admin/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/smartwizard@4.3.1/dist/css/smart_wizard.min.css" rel="stylesheet" type="text/css" />

    @yield('styles')

    <style>
        #step-1,#step-2,#step-3{
            margin: 10px;
        }

        .gallery,.existed-gallery {
            display: flex;
        }

        .gallery img,.existed-gallery img {
            width: 150px;
            height: 150px;
        }
        .dropbox {
            display: flex;
            /* width: 300px; */
            /* height: 300px; */
            text-align: center;
            padding: 100px;
            align-items: center;
            border: 4px dashed green;
            justify-content: center;
            cursor: pointer;
        }

        .dropbox input[type="file"] {
            position: absolute !important;
            height: 1px;
            width: 1px;
            overflow: hidden;
            clip: rect(1px, 1px, 1px, 1px);
        }
        .prev {
            display: block;
            width: 150px;
            position: relative;
            margin: 10px;
        }
        .prev > button.removeBtn, button.removeFS{
            position: absolute;
            top: 10px;
            right: 10px;
            color: #454743;
            font-size: 20px;
            font-weight: 700;
            background: none;
            border: none;
        }

        #stopover {
            display: none;
        }

        .form-horizontal .checkbox,
        .checkbox{
        min-height: auto;
        display: inline-block;
        }
    </style>
</head>

