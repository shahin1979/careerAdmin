@extends('layouts.app')

@section('content')
    <script src="{!! asset('src/js/vendor/jquery-3.3.1.min.js') !!}"></script>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: rgba(44,221,32,0.1); margin-bottom: 0.5rem">
            <li class="breadcrumb-item"><a class="white-text" href="{!! url('home') !!}">Home</a></li>
            <li class="breadcrumb-item active">Eligible Candidate List</li>
        </ol>
    </nav>

    <div class="col-md-12 dataTables_wrapper" style="overflow-x:auto;">
        <table class="table table-bordered table-hover table-striped" id="eligible-table">
            {{--            <table style="width:100%" class="table table-bordered table-hover table-responsive" id="stations-table">--}}
            <thead style="background-color: #b0b0b0">
            <tr>
                <th>Tracking</th>
                <th>Name</th>
                <th>Address</th>
                <th>District</th>
                <th>Education</th>
                <th>Verified By</th>
                <th class="text-right">Action</th>
            </tr>
            </thead>
        </table>
    </div>


{{--    <div class="row">--}}
{{--        <div class="col-12">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                    <h4>Eligible Candidate List : Total: {!! $eligible->count() !!}</h4>--}}
{{--                    <div class="card-header-form">--}}
{{--                        <form>--}}
{{--                            <div class="input-group">--}}
{{--                                <input type="text" name="search" id="search" class="form-control" placeholder="Search">--}}
{{--                                <div class="input-group-btn">--}}
{{--                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-body p-0">--}}
{{--                    <div class="table-responsive">--}}
{{--                        <table class="table table-striped district-table" id="district-table">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th>Photo</th>--}}
{{--                                <th>Name</th>--}}
{{--                                <th>Address</th>--}}
{{--                                <th>Result</th>--}}
{{--                                <th>Verified By</th>--}}
{{--                                <th>Verified Date</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @foreach($eligible as $i=>$row)--}}
{{--                                <tr style="background-color: {!! $i%2 == 0 ? '#fcebf5' : 'rgba(44,221,32,0.1)' !!}">--}}
{{--                                    <td><img src="http://erecruitment.nrbglobalbank.com/careerPortal{!! $row->photo !!}" height="50px" width="50px"></td>--}}
{{--                                    <td>{!! $row->name !!}</td>--}}
{{--                                    <td>{!! $row->pm_address !!} <br/> {!! $row->pm_post_office !!}--}}
{{--                                        ,{!! $row->pm_thana->name !!},{!! $row->pm_district->name !!}</td>--}}
{{--                                    <td style="border-bottom-color: red; border-bottom-width: 1px">@foreach($row->education as $ed)--}}
{{--                                            {!! $ed->examination->exam_name !!} : {!! $ed->result !!} Out of {!! $ed->total_cgpa !!} <br/>--}}
{{--                                        @endforeach--}}
{{--                                    </td>--}}
{{--                                    <td>{!! $row->eligible->user->name !!}</td>--}}
{{--                                    <td>{!! $row->eligible->verified_date !!}</td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                            </tbody>--}}

{{--                        </table>--}}
{{--                        <div>{!! $eligible->appends(['eligible' => $eligible])->links() !!}</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


@endsection

@push('scripts')
    <script>

        $(function() {
            var table= $('#eligible-table').DataTable({
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                ajax: 'getEligible',
                columns: [
                    { data: 'profile_id', name: 'profile_id' },
                    { data: 'name', name: 'name' },
                    { data: 'address', name: 'address' },
                    { data: 'pm_district.name', name: 'pm_district.name' },
                    { data: 'education', name: 'education' },
                    { data: 'eligible.user.name', name: 'eligible.user.name' },
                    { data: 'action', name: 'action', orderable: false, searchable: false, printable: false}
                ],
                columnDefs: [
                    {
                        targets: -1,
                        className: 'dt-body-right'
                    }
                ],
                rowCallback: function( row, data, index ) {
                    if(index%2 == 0){
                        $(row).removeClass('myodd myeven');
                        $(row).addClass('myodd');
                    }else{
                        $(row).removeClass('myodd myeven');
                        $(row).addClass('myeven');
                    }
                }
            });

            $(this).on('click', '.btn-details', function (e) {
                e.preventDefault();
                var url = $(this).data('remote');
                window.location.href = url;
            });
        });

    </script>

@endpush
