@extends('main')

@section('content')
    <div class="content-wrapper" style="min-height: 1200.88px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Scheduled Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Scheduled Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>



        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <form id="scheduledForm">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    @foreach($schedule as $sched)
                                    @endforeach
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="">Date Applied</label>
                                            <input type="date" class="form-control" id="dateApplied" name="dateApplied" value="{{ $sched->reservation_date_applied }}" placeholder="Date Applied" readonly>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Date & Time EMO Request Receive ( For Emo Use Only ) </label>
                                            <input type="datetime-local" class="form-control" name="datetimeEMO" id="datetimeEMO" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="">Place</label>
                                            <select class="form-control" id="scheduledPlace" name="scheduledPlace">
                                                <option value=""> Choose option </option>

                                                @foreach($place as $data2)

                                                    <option value="{{ $data2 -> id }}" {{ ( $data2->id == $sched -> facility_id) ? 'selected' : '' }} readonly> {{ $data2 -> place_name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12" id="other_place_details" hidden>
                                            <label for="">Please specify : </label>
                                            <input type="text" class="form-control " id="other_place" name="other_place" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="">Date of Used</label>
                                            <input type="date" class="form-control" id="Applicants" name="useDate" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">Time of Start</label>
                                            <input type="time" class="form-control" id="timeStart" name="timeStart" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">Time of End</label>
                                            <input type="time" class="form-control" id="timeEnd" name="timeEnd" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="">Applicants</label>
                                            <input type="text" class="form-control" id="Applicants" value="{{ Auth::user()->username }}" name="Applicants"  readonly>
                                            <input type="hidden" class="form-control" id="Applicants" value="{{ Auth::user()->id }}" name="ApplicantsId"  readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="">Purpose</label>
                                            <input type="text" class="form-control" id="Purpose" name="Purpose" >
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="">Additionals Facitilies Needed</label>
                                            <input type="text" class="form-control" id="facilities" >
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="">&nbsp;</label>
                                            <button type="button" class="form-control btn-info" id="additionalButton">+</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="card col-md-12">
                                            <div class="card-header">
                                                <h3 class="card-title">Additionals Facilities Details:</h3>
                                            </div>
                                            <div class="card-body table-responsive table-striped p-0">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr class="text-center">
                                                        <th>ID</th>
                                                        <th>Additionals Details</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="additionTable">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-success" type="button" id="btnSubmit"> Add Schedule </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('scripts')
@endsection
