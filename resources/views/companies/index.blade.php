@extends('index')
@section('title', 'Agency Document')
@section('subtitle', 'Agency Document')
@section('content')
<center>
    <h2><b>Companies Log</b></h2>
</center>

<a href="{{ url('/companies/create') }}" class="btn addBTn">Add new Company</a>
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Logo</th>
                    <th>Action</th>

                </tr>
            </thead>

            <tbody>

                @forelse($Companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->website}}</td>
                    <td><img src="/storage/app/public/logo/{{ $company->logo }}" width="100px"></td>
                    <td>
                        <a href="{{url('/companies/show/'.$company->id)}}"><i class="fa fa-eye fa-fw iconColor"></i></a>

                        <a href="{{url('/companies/edit/'.$company->id)}}"><i
                                class="fa fa-edit fa-fw iconColor"></i></a>

                        @include('includes.delete',array( 'url' =>
                        url('/companies/destroy/'.$company['id']), 'text' => '<i class="fa fa-delete fa-fw"></i>',
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