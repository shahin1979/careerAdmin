@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: rgba(44,221,32,0.1); margin-bottom: 0.5rem">
            <h5>List of candidate under permanent address District : {!! $report['district'] !!} & Thana: {!! $report['thana'] !!}</h5>
        </ol>
    </nav>

    <table class="table table-striped table-bordered">
        <thead>
        <tr style="border-color: #0c5460">
            <th style="width: 2%">SL</th>
            <th style="width: 5%">Photo</th>
            <th style="width: 10%">Name</th>
            <th style="width: 15%">Address</th>
            <th style="width: 40%">Education</th>
{{--            <th style="width: 5%">Applied</th>--}}
            <th style="width: 15%">Documents</th>
        </tr>
{{--        <tr>--}}
{{--            <th>Document</th>--}}
{{--            <th>SSC</th>--}}
{{--            <th>Last</th>--}}
{{--        </tr>--}}
        </thead>
        <tbody>
        @foreach($profiles as $i=>$row)
        <tr style="background-color: {!! $i%2 == 0 ? '#fcebf5' : 'rgba(44,221,32,0.1)' !!}">
            <td>{!! $i+1 !!}</td>
            <td><img src="http://erecruitment.nrbglobalbank.com/careerPortal{!! $row->photo !!}" height="50px" width="50px"></td>
            <td>{!! $row->name !!}</td>
            <td style="width: 15%">{!! $row->pm_address !!}</td>
            <td style="border-bottom-color: red; border-bottom-width: 1px">@foreach($row->education as $ed)
                {!! $ed->examination->exam_name !!} : {!! $ed->exam_serial == 1 ? $ed->institute : ($ed->exam_serial ==2 ? $ed->institute : $ed->university->name) !!} : {!! $ed->result !!} Out of {!! $ed->total_cgpa !!} <br/>
                @endforeach
            </td>
{{--            <td>{!! isset($row->application) ? 'Yes' : 'No' !!}</td>--}}
{{--            <td><a href="http://erecruitment.nrbglobalbank.com/careerPortal{!! $row->document[0]->document_path !!}" target = "_blank" class="dropdown-item has-icon text-danger">--}}
{{--                    Document--}}
{{--                </a><br/>--}}
{{--            <a href="http://erecruitment.nrbglobalbank.com/careerPortal{!! $row->document[1]->document_path !!}" target = "_blank" class="dropdown-item has-icon text-danger">--}}
{{--                    SSC--}}
{{--                </a><br/>--}}
{{--            <a href="http://erecruitment.nrbglobalbank.com/careerPortal{!! $row->document[2]->document_path !!}" target = "_blank" class="dropdown-item has-icon text-danger">--}}
{{--                    Last--}}
{{--                </a></td>--}}
            <td><a href="{!! url('profile/candidate/'.$row->id) !!}" target = "_blank" class="btn btn-outline-primary">
                    View Details
                </a></td>
        </tr>
        @endforeach
        </tbody>
    </table>


@endsection

@push('scripts')



@endpush
