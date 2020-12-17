@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>District Wise Applicant</h4>
                    <div class="card-header-form">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Name of District</th>
                                <th>Police Station</th>
                                <th>Gender</th>
                                <th class="text-right">No of Applicant</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($applied as $row)
                                    <tr>
                                        <td>{!! $row->pm_district->name !!}</td>
                                        <td>{!! $row->pm_thana->name !!}</td>
                                        <td>{!! $row->gender !!}</td>
                                        <td class="text-right">{!! $row->total !!}</td>
                                        <td class="text-right"><a href="#" class="btn btn-outline-primary">Detail</a></td>
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
