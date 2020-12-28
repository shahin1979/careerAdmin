@extends('layouts.app')
@section('content')

    <script src="{!! asset('assets/js/jquery-3.3.1.min.js') !!}"></script>
    @include('partials.error-msg')
    <div class="row ">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content">
                                    <h5 class="font-15">Open Job</h5>
                                    <h2 class="mb-3 font-18">1</h2>
                                    <p class="mb-0"><span class="col-green"></span></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                <div class="banner-img">
                                    <img src="{!! asset('beauty/img/banner/1.png') !!}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content">
                                    <h5 class="font-15"> Users</h5>
                                    <h2 class="mb-3 font-18">{!! $users !!}</h2>
                                    {{--                                                <p class="mb-0"><span class="col-orange"></span></p>--}}
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                <div class="banner-img">
                                    <img src="{!! asset('beauty/img/banner/5.png') !!}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content">
                                    <h5 class="font-15">Profile Registered</h5>
                                    <h2 class="mb-3 font-18">{!! $profiles !!}</h2>
                                    {{--                                                <p class="mb-0"><span class="col-green">18%</span>--}}
                                    {{--                                                    Increase</p>--}}
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                <div class="banner-img">
                                    <img src="{!! asset('beauty/img/banner/3.png') !!}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                <div class="card-content">
                                    <h5 class="font-15">Applied</h5>
                                    <h2 class="mb-3 font-18">{!! $applications !!}</h2>
                                    {{--                                                <p class="mb-0"><span class="col-green">42%</span> Increase</p>--}}
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                <div class="banner-img">
                                    <img src="{!! 'beauty/img/banner/apply.png' !!}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>District Wise Applicant</h4>
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
                                <th>Name of District</th>
                                <th>Police Station</th>
{{--                                <th>Gender</th>--}}
                                <th class="text-right">No of Applicant</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($applied as $row)
                                    <tr>
                                        <td>{!! $row->pm_district->name !!}</td>
                                        <td>{!! $row->pm_thana->name !!}</td>
{{--                                        <td>{!! $row->gender !!}</td>--}}
                                        <td class="text-right">{!! $row->total !!}</td>
                                        <td class="text-right"><a href="{!! url('profile/groupIndex/'.$row->pm_district_id.'/'.$row->pm_police_station_id) !!}" class="btn btn-outline-primary">Detail</a></td>
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
    <script>

        function fetch_candidate_data(query = '')
        {


            var url = 'districtThanaIndex';

            $.ajax({
                url: url,
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(response)
                {
                    $(".district-table tr:has(td)").remove();
                    $(".district-table tr:has(th)").remove();

                    var trHTML = '<tr class="table-primary">\n' +
                        '                        <th>Name of District</th>\n' +
                        '                        <th>Police Station</th>\n' +
                        '                        <th>No of Applicant</th>\n' +
                        '                        <th style="text-align: right">Action</th>\n' +
                        '                    </tr>';

                    $.each(response, function (i, item) {

                        trHTML += '<tr><td>' + item.pm_district.name + '</td>' +
                            '<td>' + item.pm_thana.name + '</td><td>' + item.total + '</td>' +
                            '<td style="text-align: right"><a href="profile/groupIndex/' + item.pm_district_id + "/" + item.pm_police_station_id + ' " class="btn btn-outline-primary">Details</td>' +
                            '</tr>';
                    });

                    {{--<td class="text-right"><a href="{!! url('profile/groupIndex/'.$row->pm_district_id.'/'.$row->pm_police_station_id) !!}" class="btn btn-outline-primary">Detail</a></td>--}}

                    $('#district-table').append(trHTML);



                    // $('tbody').html(data.table_data);
                    // $('#total_records').text(data.total_data);
                }
            })
        }

        $(document).on('keyup', '#search', function(){
            var query = $(this).val();
            fetch_candidate_data(query);
        });

    </script>

@endpush
