@extends('layouts.admin')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <call-index
            call_data="{{json_encode($data)}}"
        />
    </div>
    <!-- /page content -->

@endsection
