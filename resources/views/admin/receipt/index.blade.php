@extends('layouts.admin')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <receipt-index
        item_data="{{json_encode($data)}}"
        > </receipt-index>
    </div>
    <!-- /page content -->
@endsection
