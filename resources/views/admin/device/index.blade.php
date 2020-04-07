@extends('layouts.admin')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <device-index
            item_data="{{json_encode($data)}}"
        > </device-index>
    </div>
    <!-- /page content -->
@endsection
