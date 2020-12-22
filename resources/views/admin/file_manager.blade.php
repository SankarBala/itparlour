@extends('admin.layouts.admin')


@section('content')
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}"/>
    <div style="min-height: 600px;">
        <div id="fm" ></div>
    </div>
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>


{{--    <iframe src="{{url("file-manager/ckeditor")}}" width="100%" height="600px" style="border:0px;"></iframe>--}}

@endsection

