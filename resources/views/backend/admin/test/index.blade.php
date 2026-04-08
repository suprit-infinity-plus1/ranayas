@extends('layouts.admin-master')
@section('title', 'Manage Products')
@section('content')

    <style>
        .section .card {
            padding: 30px;
            border: 1px solid #ddd;
        }
    </style>


    <section class="section">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-dark text-white-all">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i> Home</a></li>
            </ol>
        </nav>
        <div class="card">
            <div class="table-responsive">
                <table class="table table-striped table-hover datatable" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Full Name</th>
                            <th>Email ID</th>
                            <th>Created At</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testQuestions as $test)
                            <tr>
                                <td>{{ $test->id }}</td>
                                <td>{{ $test->full_name }}</td>
                                <td>{{ $test->email }}</td>
                                <td>{{ date('d-M-Y', strtotime($test->created_at)) }}</td>
                                <td><a href="{{ route('test.start.table', $test->id) }}" class="btn btn-primary">View Test
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    @endsection
