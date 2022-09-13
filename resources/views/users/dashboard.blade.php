@extends('index')
@section('title', 'Dashboard')
@section('subtitle', 'Dashboard')
@section('content')
@if(session()->has('message'))
<div class="alert alert-success">
    {{session()->get('message')}}
</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <style>

            </style>
            <br><br><br><br><br>
            <h3 style="padding-left: 20%">DASHBOARD</h3>
            <br><br>

        </div>
    </div>
</div>
@endsection
@section('js_scripts')
<script>
$(document).ready(function() {
    $('.dashboard-button').on('click', function() {

    });
});
// $(document).on('click', '.tr', function() 
// {
//     var job_id = $(this).find('td').html();
//     var href = "/job/show/"+job_id;
//     window.location = href;
// });
</script>
@endsection