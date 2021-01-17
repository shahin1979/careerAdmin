@extends('layouts.app')

@section('content')
    <script src="{!! asset('src/js/vendor/jquery-3.3.1.min.js') !!}"></script>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: rgba(44,221,32,0.1); margin-bottom: 0.5rem">
            <li class="breadcrumb-item"><a class="white-text" href="{!! url('home') !!}">Home</a></li>
            <li class="breadcrumb-item active">Candidate Details</li>
        </ol>
    </nav>

    @isset($profile)
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 justify-content-center">
                    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header"><h4>Personal Information : Tracking No : {!! $profile->profile_id !!}</h4></div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                <tr>
                                    <td class="text-danger font-weight-bold">Name</td>
                                    <td class="text-danger font-weight-bold">:</td>
                                    <td class="text-danger font-weight-bold">{!! $profile->name !!}</td>
                                    <td colspan="1"><img src="http://erecruitment.nrbglobalbank.com/careerPortal{!! $profile->photo !!}" height="50px" width="50px"></td>
                                    <td>Birth Date</td>
                                    <td>{!! \Carbon\Carbon::parse($profile->dob)->format('d-M-Y') !!} <h5 class="text-danger">Age: {!! $age !!}</h5></td>
                                </tr>

                                <tr>
                                    <td>Father's Name</td>
                                    <td>:</td>
                                    <td>{!! $profile->father_name !!}</td>
                                    <td>Mother's Name</td>
                                    <td>:</td>
                                    <td>{!! $profile->mother_name !!}</td>
                                </tr>
                                <tr>
                                    <td>Blood group</td>
                                    <td>:</td>
                                    <td>{!! $profile->blood_group !!}</td>
                                    <td>Marital Status</td>
                                    <td>:</td>
                                    <td>{!! $profile->marital_status == 'S' ? 'Single' : 'Married' !!}</td>
                                </tr>

                                <tr>
                                    <td class="font-weight-bold">Mobile</td>
                                    <td>:</td>
                                    <td class="font-weight-bold">{!! $profile->mobile !!}</td>
                                    <td>Home Phone</td>
                                    <td>:</td>
                                    <td>{!! $profile->home_phone !!}</td>
                                </tr>

                                <tr>
                                    <td class="font-weight-bold">Email</td>
                                    <td>:</td>
                                    <td class="font-weight-bold">{!! $profile->email !!}</td>
                                    <td>Religion</td>
                                    <td>:</td>
                                    <td>{!! $profile->religion->name !!}</td>
                                </tr>

                                <tr>
                                    <td>Document Type</td>
                                    <td>:</td>
                                    <td>{!! $profile->document_type == 1 ? 'NID' : ($profile->document_type == 2 ? 'Birth certificate' : 'Passport') !!}</td>
                                    <td>Document No</td>
                                    <td>:</td>
                                    <td><a href="http://erecruitment.nrbglobalbank.com/careerPortal{!! $profile->document[0]->document_path !!}" target = "_blank" class="dropdown-item has-icon text-danger">
                                            {!! $profile->national_id !!} View
                                        </a>
                                    </td>
                                </tr>
                                </tbody>

                            </table>

                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Permanent Address</th>
                                    <th>Present Address</th>
                                </tr>
                                </thead>

                                <tbody>

                                <tr>
                                    <td>{!! $profile->pm_address !!}<br/>District : {!! $profile->pm_district->name !!}<br/>Post Office: {!! $profile->pm_post_office !!}</td>
                                    <td>{!! $profile->pr_address !!}<br/>District : {!! $profile->pr_district->name !!}<br/>Post Office: {!! $profile->pr_post_office !!}</td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br/>

                    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header"><h4>Education</h4></div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Exam Name</th>
                                    <th>Year Study</th>
                                    <th>Passing Year</th>
                                    <th>Institute</th>
                                    <th>University<br/>Board</th>
                                    <th>Subject<br/>Group</th>
                                    <th>Result</th>
                                    <th>View</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($profile->education as $row)
                                    <tr>
                                        <td>{!! $row->examination->exam_name !!}</td>
                                        <td>{!! $row->exam_serial == 3 ? $row->study_year : ($row->exam_serial == 4 ? $row->study_year : null)  !!}</td>
                                        <td>{!! $row->passing_year !!}</td>
                                        <td>{!! $row->institute !!}</td>
                                        <td>{!! $row->university->name !!}</td>
                                        <td>{!! $row->subject->name !!}</td>
                                        <td>{!! $row->result_type == 'C' ? ($row->result == 1.00 ? '1st Class' : '2nd Class') : $row->result.' / '.$row->total_cgpa !!}</td>
                                        @if($row->exam_serial == 1)
                                            <td><a href="http://erecruitment.nrbglobalbank.com/careerPortal{!! $profile->document[1]->document_path !!}" target = "_blank" class="dropdown-item has-icon text-danger">
                                                    SSC
                                                </a>
                                            </td>
                                        @endif
                                        @if($row->exam_serial == 4)
                                            <td>
                                                <a href="http://erecruitment.nrbglobalbank.com/careerPortal{!! $profile->document[2]->document_path !!}" target = "_blank" class="dropdown-item has-icon text-danger">
                                                    Last
                                                </a>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br/>

                    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header"><h4>Language</h4></div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Language</th>
                                    <th>Speaking</th>
                                    <th>Reading</th>
                                    <th>Writing</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($profile->language as $row)
                                    <tr>
                                        <td>{!! $row->language_name !!}</td>
                                        <td>{!! $row->speaking !!}</td>
                                        <td>{!! $row->reading !!}</td>
                                        <td>{!! $row->writing !!}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <br/>

                    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header"><h4>Reference Information</h4></div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th colspan="2">1st Reference</th>
                                    <th colspan="2">2nd reference</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{!! $profile->reference[0]->name !!}</td>
                                    <td>name</td>
                                    <td>{!! $profile->reference[1]->name !!}</td>
                                </tr>
                                <tr>
                                    <td>Designation</td>
                                    <td>{!! $profile->reference[0]->designation !!}</td>
                                    <td>Designation</td>
                                    <td>{!! $profile->reference[1]->designation !!}</td>
                                </tr>
                                <tr>
                                    <td>Organization</td>
                                    <td>{!! $profile->reference[0]->organization !!}</td>
                                    <td>Organization</td>
                                    <td>{!! $profile->reference[1]->organization !!}</td>
                                </tr>

                                <tr>
                                    <td>Mobile</td>
                                    <td>{!! $profile->reference[0]->mobile !!}</td>
                                    <td>Mobile</td>
                                    <td>{!! $profile->reference[1]->mobile !!}</td>
                                </tr>

                                <tr>
                                    <td>Email</td>
                                    <td>{!! $profile->reference[0]->email !!}</td>
                                    <td>Organization</td>
                                    <td>{!! $profile->reference[1]->email !!}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endisset


@endsection

@push('scripts')



@endpush
