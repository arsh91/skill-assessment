@extends('index')
@section('title', 'Create Employee')
@section('subtitle', 'Create Employee')
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

.btncolor {
    background-image: linear-gradient(140deg, #3ddc35de 0%, #35dc7099 50%, #41c8d67a 75%);
}

.card-header {
    background-image: linear-gradient(140deg, #f8f9fa 0%, #35dc7047 50%, #41c8d652 75%);
}
</style>
<div class="card push-top">
    <div class="card-header text-center">
        Create Employee
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('employees.store')}}" enctype="multipart/form-data">
            <div class="form-group">
                @csrf
                @method('POST')
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" name="firstname" />
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" name="lastname" />
            </div>
            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" class="form-control" name="company" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" />
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" class="form-control" name="phone" />
            </div>
            <button type="submit" class="btn btn-block btncolor">Create Employee</button>
        </form>
    </div>
</div>
@endsection