@extends('layouts.admin')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <sum-index
            item_data="{{json_encode($data)}}"
        > </sum-index>
    </div>
    <!-- /page content -->
@endsection
