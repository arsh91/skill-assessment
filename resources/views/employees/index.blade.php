@extends('index')
@section('title', 'Employees Log')
@section('subtitle', 'Employees Log')
@section('content')
<center>
    <h2><b>Employees Log</b></h2>
</center>

<a href="{{ url('/employees/create') }}" class="btn addBTn">Add new Employee</a>
<br>
<hr>

<!-- filter -->
<div class="box-header with-border" id="filter-box">
    <br>
    @if(Session::has('message'))
    <div class="alert alert-success">{{Session::get('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif


    <div class="box-body table-responsive" style="margin-bottom: 5%">
        <table class="table table-hover" id="agencydocument_table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>

                </tr>
            </thead>

            <tbody>

                @forelse($Employees as $employee)
                <tr>
                    <td>{{ $employee->firstname }}</td>
                    <td>{{ $employee->lastname }}</td>
                    <td>{{ $employee->company}}</td>
                    <td>{{ $employee->email}}</td>
                    <td>{{ $employee->phone}}</td>

                    <td>
                        <a href="{{url('/employees/show/'.$employee->id)}}"><i
                                class="fa fa-eye fa-fw iconColor"></i></a>

                        <a href="{{url('/employees/edit/'.$employee->id)}}"><i
                                class="fa fa-edit fa-fw iconColor"></i></a>

                        @include('includes.delete',array( 'url' =>
                        url('/employees/destroy/'.$employee->id), 'text' => '',
                        'class'=>''))

                    </td>


                </tr>
                @empty

                @endforelse


            </tbody>
        </table>
    </div>
    @endsection
    @section('js_scripts')
    <script>
    $(document).ready(function() {

        $('#agencydocument_table').DataTable({
            "order": []
            //"columnDefs": [ { "orderable": false, "targets": 7 }]
        });
    });
    </script>
    <style>
    .addBTn {
        color: #fff;
        background-color: #35dc70cf;
        border-color: #35dc70cf;
    }

    .addBTn:hover {
        color: #fff;
    }

    .iconColor {
        color: #35dc70cf;
    }

    .table-hover tbody tr:hover .deleteBtn {
        background: #e9ecef !important;
    }

    .deleteBtn:hover {
        background: #e9ecef !important;

    }
    </style>
    @endsection