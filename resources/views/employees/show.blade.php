@extends('index')
@section('title', 'Show Employee')
@section('subtitle', 'Show Employee')
@section('content')
<style>
.card {
    margin: 0 auto;
    /* Added */
    float: none;
    /* Added */
    margin-bottom: 10px;
    /* Added */
    width: 500px;
}

.card-header {
    background-image: linear-gradient(140deg, #f8f9fa 0%, #35dc7047 50%, #41c8d652 75%);
}
</style>
<div class="card push-top">
    <div class="card-header text-center">
        Show Employee
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>First Name:</strong>
                    {{ $Employees->firstname }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last Name:</strong>
                    {{ $Employees->lastname }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Company:</strong>
                    {{ $Employees->company }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $Employees->email }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone:</strong>
                    {{ $Employees->phone }}
                </div>
            </div>
        </div>
    </div>
    @endsection