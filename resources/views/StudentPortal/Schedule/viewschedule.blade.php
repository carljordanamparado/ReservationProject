@extends('main')

@section('content')
    <div class="content-wrapper" style="min-height: 1200.88px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">View Schedule</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Schedule List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr class="text-center">
                                           <th>Reservation ID</th>
                                           <th>Reservation Start</th>
                                           <th>Reservation End</th>
                                           <th>Status</th>
                                           <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $data)
                                            <tr class="text-center">
                                                <td>{{ $data->reservation_id }}</td>
                                                <td>{{ date('Y-m-d h:i A', strtotime($data->reservation_start)) }}</td>
                                                <td>{{ date('Y-m-d h:i A', strtotime($data->reservation_end)) }}</td>
                                                <td>
                                                    @if($data -> reservation_status == 0)
                                                        Pending
                                                    @elseif($data -> reservation_status == 1)
                                                        Approved
                                                    @else
                                                        Disapproved
                                                    @endif
                                                </td>
                                                <td> <a href="{{ route('Schedule.show', $data->reservation_id) }}" class="btn btn-primary">View Schedule</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('scripts')
@endsection
