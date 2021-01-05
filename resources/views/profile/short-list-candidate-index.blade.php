@extends('layouts.app')

@section('content')

    <script src="{!! asset('assets/js/jquery-3.3.1.min.js') !!}"></script>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: rgba(44,221,32,0.1); margin-bottom: 0.5rem">
            <li class="breadcrumb-item"><a class="white-text" href="{!! url('home') !!}">Home</a></li>
            <li class="breadcrumb-item active">Short List</li>
        </ol>
    </nav>

    @empty($report)

    {!! Form::open(['url'=>'profile/shortListIndex','method'=>'get']) !!}

    <input type="hidden" name="search_id" value="{!! 1 !!}">

    <div id="new-station" class="col-md-12">
        <table width="100%" class="table table-bordered table-striped table-hover">
            <tbody>

            <tr>
                <td><label for="pm_district_id" class="control-label">Permanent Address District</label></td>
                <td>{!! Form::select('pm_district_id',$districts,null,array('id'=>'pm_district_id','class'=>'form-control','placeholder'=>'Select District')) !!}</td>
                <td><label for="pm_police_station_id" class="control-label">Permanent Address Thana</label></td>
                <td>{!! Form::select('pm_police_station_id',$thanas,null,array('id'=>'pm_police_station_id','class'=>'form-control','placeholder'=>'Select Thana')) !!}</td>
            </tr>

            <tr>
                <td><label for="graduation_uni_id" class="control-label">Graduation University</label></td>
                <td>{!! Form::select('graduation_uni_id',$universities,null,array('id'=>'graduation_uni_id','class'=>'form-control','placeholder'=>'Select University')) !!}</td>
                <td><label for="graduation_subject_id" class="control-label">Graduation Subject</label></td>
                <td>{!! Form::select('graduation_subject_id[]',$subjects,null,array('id'=>'graduation_subject_id','class'=>'form-control multiple','multiple'=>'multiple')) !!}</td>
            </tr>

            <tr>
                <td><label for="post_graduation_uni_id" class="control-label">Post Graduation University</label></td>
                <td>{!! Form::select('post_graduation_uni_id',$universities,null,array('id'=>'post_graduation_uni_id','class'=>'form-control','placeholder'=>'Select University')) !!}</td>
                <td><label for="post_graduation_subject_id" class="control-label">Post Graduation Subject</label></td>
                <td>{!! Form::select('post_graduation_subject_id[]',$subjects,null,array('id'=>'post_graduation_subject_id','class'=>'form-control','multiple'=>'multiple')) !!}</td>
            </tr>

            <tr>
                <td><label for="grade_point_ssc_from" class="control-label">GPA From : SSC</label></td>
                <td><input id="grade_point_ssc_from" type="text" class="form-control" name="grade_point_ssc_from" value=""></td>
{{--                <td>TO <input id="grade_point_ssc_to" type="text" class="form-control" name="grade_point_ssc_to" value=""></td>--}}
                <td><label for="grade_point_hsc_from" class="control-label">GPA From : HSC</label></td>
                <td><input id="grade_point_hsc_from" type="text" class="form-control" name="grade_point_hsc_from" value=""></td>
{{--                <td>To <input id="grade_point_hsc_to" type="text" class="form-control" name="grade_point_hsc" value=""></td>--}}
            </tr>

            <tr>
                <td><label for="grade_point_graduation_from" class="control-label">GPA From : Graduation From</label></td>
                <td><input type="text" class="form-control" name="grade_point_graduation_from"></td>
                <td><label for="grade_point_pg_from" class="control-label">GPA From : Post Graduation</label></td>
                <td><input id="grade_point_pg_from" type="text" class="form-control" name="grade_point_pg_from" value=""></td>
            </tr>

{{--            <tr>--}}
{{--                <td><label for="name" class="control-label">GPA Post Graduation</label></td>--}}
{{--                <td><input id="grade_point_ssc" type="text" class="form-control" name="grade_point_ssc" value=""></td>--}}
{{--            </tr>--}}

            </tbody>

            <tfoot>
            <tr>
                <td colspan="4"><button type="submit" id="btn-station-save" class="btn btn-primary btn-station-save">Submit</button></td>
            </tr>
            </tfoot>

        </table>
    </div>
    {!! Form::close() !!}
    @endempty

    @isset($report)

        <table class="table table-striped table-bordered">
            <thead>
            <tr style="border-color: #0c5460">
                <th style="width: 2%">SL</th>
                <th style="width: 5%">Photo</th>
                <th style="width: 10%">Name</th>
                <th style="width: 15%">Address</th>
                <th style="width: 40%">Education</th>
                <th style="width: 5%">Applied</th>
                <th style="width: 15%">Documents</th>
            </tr>
            {{--        <tr>--}}
            {{--            <th>Document</th>--}}
            {{--            <th>SSC</th>--}}
            {{--            <th>Last</th>--}}
            {{--        </tr>--}}
            </thead>
            <tbody>
            @foreach($report as $i=>$row)
                <tr style="background-color: {!! $i%2 == 0 ? '#fcebf5' : 'rgba(44,221,32,0.1)' !!}">
                    <td>{!! $i+1 !!}</td>
                    <td><img src="http://erecruitment.nrbglobalbank.com/careerPortal{!! $row->photo !!}" height="50px" width="50px"></td>
                    <td>{!! $row->name !!}</td>
                    <td style="width: 15%">{!! $row->pm_address !!}</td>
                    <td style="border-bottom-color: red; border-bottom-width: 1px">@foreach($row->education as $ed)
                            {!! $ed->examination->exam_name !!} : {!! $ed->exam_serial == 1 ? $ed->institute : ($ed->exam_serial ==2 ? $ed->institute : $ed->university->name) !!} : {!! $ed->result !!} Out of {!! $ed->total_cgpa !!} <br/>
                        @endforeach
                    </td>
                    <td>{!! isset($row->application) ? 'Yes' : 'No' !!}</td>
                    <td><a href="http://erecruitment.nrbglobalbank.com/careerPortal{!! $row->document[0]->document_path !!}" target = "_blank" class="dropdown-item has-icon text-danger">
                            Document
                        </a><br/>
                        <a href="http://erecruitment.nrbglobalbank.com/careerPortal{!! $row->document[1]->document_path !!}" target = "_blank" class="dropdown-item has-icon text-danger">
                            SSC
                        </a><br/>
                        <a href="http://erecruitment.nrbglobalbank.com/careerPortal{!! $row->document[2]->document_path !!}" target = "_blank" class="dropdown-item has-icon text-danger">
                            Last
                        </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @endisset

@endsection

@push('scripts')



@endpush
