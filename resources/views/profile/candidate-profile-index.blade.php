@extends('layouts.app')

@section('content')
    <script src="{!! asset('assets/js/jquery-3.3.1.min.js') !!}"></script>



    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: rgba(44,221,32,0.1); margin-bottom: 0.5rem">
            <li class="breadcrumb-item"><a class="white-text" href="{!! url('home') !!}">Home</a></li>
            <li class="breadcrumb-item active">Candidate Profile</li>
        </ol>
    </nav>

    <div class="container-fluid">

{{--        <div class="row" id="top-head">--}}

{{--            <div class="col-md-4">--}}
{{--                <div class="pull-left">--}}
{{--                    <button type="button" class="btn btn-station-add btn-primary"><i class="fa fa-plus"></i>New</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="pull-right">--}}
{{--                    <button type="button" class="btn btn-print btn-primary"><i class="fa fa-print"></i>Print</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        @include('partials.error-msg')


        <div class="col-md-12 dataTables_wrapper" style="overflow-x:auto;">
            <table class="table table-bordered table-hover table-striped" id="profiles-table">
                {{--            <table style="width:100%" class="table table-bordered table-hover table-responsive" id="stations-table">--}}
                <thead style="background-color: #b0b0b0">
                <tr>
                    <th>Tracking No</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>District</th>
                    <th>Phone</th>
                    <th class="text-right">Action</th>
                </tr>
                </thead>
            </table>
        </div>


        <div id="new-station" class="col-md-8">
            <table width="50%" class="table table-bordered table-striped table-hover">
                <tbody>

                <tr>
                    <td><label for="name" class="control-label">Name</label></td>
                    <td><input id="name" type="text" class="form-control" name="name" value="" required autofocus></td>
                </tr>
                </tbody>

                <tfoot>
                <tr>
                    <td colspan="4"><button type="submit" id="btn-station-save" class="btn btn-primary btn-station-save">Submit</button></td>
                </tr>
                </tfoot>

            </table>
        </div>

        {{--        <form action="#"  method="post" accept-charset="utf-8">--}}
        <div id="edit-station" class="col-md-8">
            <table width="50%" class="table table-bordered table-striped table-hover">
                <tbody>
                {{--                <tr>--}}
                {{--                    <td><label for="category_id" class="control-label">Category Name</label></td>--}}
                {{--                    <td>{!! Form::select('category_id',$categories,null,array('id'=>'category-id-for-edit','class'=>'form-control','autofocus','required')) !!}</td>--}}
                {{--                </tr>--}}
                <tr>
                    <td><label for="name" class="control-label">Name</label></td>
                    <td><input id="name-for-edit" type="text" class="form-control" name="name" value="" required autofocus></td>
                </tr>


                </tbody>
                <input id="id-for-update" type="hidden" name="id-for-update"/>
                <tfoot>
                <tr>
                    <td colspan="4"><button type="submit" id="btn-sub-category-update" class="btn btn-primary btn-sub-category-update">Update</button></td>
                </tr>
                </tfoot>

            </table>
        </div>
        {{--        </form>--}}

    </div>


@endsection
@push('scripts')
    <script>

        $(document).ready(function(){

            $('#new-station').hide();
            $('#edit-station').hide();

        });

        $(function() {
            var table= $('#profiles-table').DataTable({
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                ajax: 'getProfiles',
                columns: [
                    { data: 'profile_id', name: 'profile_id' },
                    { data: 'name', name: 'name' },
                    { data: 'address', name: 'address' },
                    { data: 'pm_district.name', name: 'pm_district.name' },
                    { data: 'mobile', name: 'mobile' },
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
