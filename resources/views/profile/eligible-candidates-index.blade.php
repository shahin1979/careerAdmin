@extends('layouts.app')

@section('content')
    <script src="{!! asset('src/js/vendor/jquery-3.3.1.min.js') !!}"></script>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: rgba(44,221,32,0.1); margin-bottom: 0.5rem">
            <li class="breadcrumb-item"><a class="white-text" href="{!! url('home') !!}">Home</a></li>
            <li class="breadcrumb-item active">Eligible Candidate List</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Eligible Candidate List</h4>
                    <div class="card-header-form">
                        <form>
                            <div class="input-group">
                                <input type="text" name="search" id="search" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped district-table" id="district-table">
                            <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Verified By</th>
                                <th>Verified Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($eligible as $row)
                                <tr>
                                    <td><img src="http://erecruitment.nrbglobalbank.com/careerPortal{!! $row->photo !!}" height="50px" width="50px"></td>
                                    <td>{!! $row->name !!}</td>
                                    <td>{!! $row->pm_address !!} <br/>{!! $row->pm_post_office !!}
                                        <br/>{!! $row->pm_thana->name !!}
                                        <br/>{!! $row->pm_district->name !!}</td>
                                    <td>{!! $row->eligible->user->name !!}</td>
                                    <td>{!! $row->eligible->verified_date !!}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')



@endpush
