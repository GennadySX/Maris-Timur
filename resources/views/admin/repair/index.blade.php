@extends('layouts.admin')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <repair-index
            item_data="{{json_encode($data)}}"
        > </repair-index>
    </div>
    <!-- /page content -->
@endsection
