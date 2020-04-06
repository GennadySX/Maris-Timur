<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('admin/images/favicon.ico')}}" type="image/ico"/>

    <title>Yota</title>

    <!-- Bootstrap -->
    <link href="{{asset('admin/dash/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin/dash/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin/dash/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('admin/dash/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('admin/dash/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('admin/dash/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('admin/dash/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('admin/dash/build/css/custom.min.css')}}" rel="stylesheet">

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/" class="site_title"><img src="{{asset('admin/images/logo.png')}}" alt="" style="width: 45px; height: 45px; border-radius: 25px;"> <span>Yota</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
{{--                        <img src="{{asset('/uploads/users/'.Auth::user()->avatar)}}" alt="..." class="img-circle profile_img" >--}}
                    </div>
                    <div class="profile_info">
                      {{--  @if(Auth::check())
                            <h2>{{{ Auth::user()->name}}} {{{ Auth::user()->surname}}}</h2>
                            <span>{{{ Auth::user()->roles->first()->display_name}}}</span>
                        @endif--}}
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />
                <style>

                    .xnb {
                        max-width: 400px;
                        margin: 0px auto;
                    }

                    .avatar-upload {
                        position: relative;
                        max-width: 205px;
                        margin: 50px auto;
                    }
                    .avatar-upload .avatar-edit {
                        position: absolute;
                        right: 12px;
                        z-index: 1;
                        top: 10px;
                    }
                    .avatar-upload .avatar-edit input {
                        display: none;
                    }
                    .avatar-upload .avatar-edit input + label {
                        display: inline-block;
                        width: 34px;
                        height: 34px;
                        margin-bottom: 0;
                        border-radius: 100%;
                        background: #FFFFFF;
                        border: 1px solid transparent;
                        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
                        cursor: pointer;
                        font-weight: normal;
                        transition: all 0.2s ease-in-out;
                    }
                    .avatar-upload .avatar-edit input + label:hover {
                        background: #f1f1f1;
                        border-color: #d6d6d6;
                    }
                    .avatar-upload .avatar-edit input + label:after {
                        content: "\f040";
                        font-family: 'FontAwesome';
                        color: #757575;
                        position: absolute;
                        top: 10px;
                        left: 0;
                        right: 0;
                        text-align: center;
                        margin: auto;
                    }
                    .avatar-upload .avatar-preview {
                        width: 192px;
                        height: 192px;
                        position: relative;
                        border-radius: 100%;
                        border: 6px solid #F8F8F8;
                        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
                    }
                    .avatar-upload .avatar-preview > div {
                        width: 100%;
                        height: 100%;
                        border-radius: 100%;
                        background-size: cover;
                        background-repeat: no-repeat;
                        background-position: center;
                    }

                </style>
