@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: rgba(44,221,32,0.1); margin-bottom: 0.5rem">
            <h5>List of candidate under permanent address District : {!! $report['district'] !!} & Thana: {!! $report['thana'] !!}</h5>
        </ol>
    </nav>

    <table class="table table-striped">
        <thead>
        <tr>
            <th rowspan="2">SL</th>
            <th rowspan="2">Photo</th>
            <th rowspan="2">Name</th>
            <th rowspan="2">Address</th>
            <th rowspan="2">Education</th>
            <th colspan="3">Download</th>
        </tr>
        <tr>
            <th>Document</th>
            <th>SSC</th>
            <th>Last</th>
        </tr>
        </thead>
        <tbody>
        @foreach($profiles as $i=>$row)
        <tr style="background-color: {!! $i%2 == 0 ? '#fcebf5' : 'rgba(44,221,32,0.1)' !!}">
            <td width="2%">{!! $i+1 !!}</td>
            <td width="5%"><img src="http://erecruitment.nrbglobalbank.com/careerPortal{!! $row->photo !!}" height="50px" width="50px"></td>
            <td width="10%">{!! $row->name !!}</td>
            <td width="15%">{!! $row->pm_address !!}</td>
            <td width="35%" style="border-bottom-color: red; border-bottom-width: 1px">@foreach($row->education as $ed)
                {!! $ed->examination->exam_name !!} : {!! $ed->institute !!} : {!! $ed->result !!} <br/>
                @endforeach
            </td>
            <td width="5%"><a href="http://erecruitment.nrbglobalbank.com/careerPortal{!! $row->document[0]->document_path !!}" class="dropdown-item has-icon text-danger">
                    Document
                </a></td>
            <td width="5%"><a href="http://erecruitment.nrbglobalbank.com/careerPortal{!! $row->document[1]->document_path !!}" class="dropdown-item has-icon text-danger">
                    SSC
                </a></td>
            <td width="5%"><a href="http://erecruitment.nrbglobalbank.com/careerPortal{!! $row->document[2]->document_path !!}" class="dropdown-item has-icon text-danger">
                    Last
                </a></td>
        </tr>
        @endforeach
        </tbody>
    </table>


@endsection

@push('scripts')



@endpush
