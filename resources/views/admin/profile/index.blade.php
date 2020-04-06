@extends('layouts.admin')
@section('content')


    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Профил</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Поиск...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Искать!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Форма личного данных <small></small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">

                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br/>
                            <form enctype="multipart/form-data" id="demo-form2" data-parsley-validate
                                  class="form-horizontal form-label-left" action="/dashboard/profile/update"
                                  method="post">
                                @csrf
                                <div class="form-group ">

                                    <div class="container xnb">

                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg"
                                                       name="avatar"/>
                                                <label for="imageUpload"></label>
                                            </div>
                                            <div class="avatar-preview">
                                                <div id="imagePreview"
                                                     style="background-image: url({{asset('uploads/users/')}}/{{\Illuminate\Support\Facades\Auth::user()->avatar}});">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Имя <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" required="required" name="name"
                                               class="form-control col-md-7 col-xs-12" value="{{{Auth::user()->name}}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Фамилия
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="last-name" name="lastname" required="required"
                                               class="form-control col-md-7 col-xs-12"
                                               value="{{{Auth::user()->surname}}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="middle-name"
                                           class="control-label col-md-3 col-sm-3 col-xs-12">Отчество</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text"
                                               name="middle_name" value="{{{Auth::user()->middle_name}}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <input type="tel" id="telephone" name="email" required="required"
                                               data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12"
                                               value="{{{Auth::user()->email}}}">
                                        <span class="fa fa-at form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                           for="last-name">Телефон<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <input type="tel" id="telephone2" name="phone" required="required"
                                               data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12"
                                               value=" {{{Auth::user()->phone}}}">
                                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <a href="/dashboard">
                                            <button class="btn btn-primary" type="button">отменить</button>
                                        </a>
                                        <button class="btn btn-warning" type="reset">очистить</button>
                                        <button type="submit" class="btn btn-success send_profile">сохранить</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection
