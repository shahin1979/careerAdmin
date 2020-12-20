@extends('layouts.app')

@section('content')
    <script src="{!! asset('assets/js/jquery-3.3.1.min.js') !!}"></script>



    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: rgba(44,221,32,0.1); margin-bottom: 0.5rem">
            <li class="breadcrumb-item"><a class="white-text" href="{!! url('home') !!}">Home</a></li>
            <li class="breadcrumb-item active">Post Office</li>
        </ol>
    </nav>

    {{--    <div class="justify-content-center">--}}
    {{--        <img src="{!! asset('assets/images/page-under-construction.jpg') !!}" class="img-responsive">--}}
    {{--    </div>--}}

    <div class="container-fluid">

        <div class="row" id="top-head">

            <div class="col-md-4">
                <div class="pull-left">
                    <button type="button" class="btn btn-post-add btn-primary"><i class="fa fa-plus"></i>New</button>
                </div>
            </div>
            <div class="col-md-8">
                <div class="pull-right">
                    <button type="button" class="btn btn-print btn-primary"><i class="fa fa-print"></i>Print</button>
                </div>
            </div>
        </div>
        @include('partials.error-msg')

        <div class="col-md-12 dataTables_wrapper" style="overflow-x:auto;">
            <table class="table table-bordered table-hover table-striped" id="post-office-table">
                {{--            <table style="width:100%" class="table table-bordered table-hover table-responsive" id="stations-table">--}}
                <thead style="background-color: #b0b0b0">
                <tr>
                    <th>ID</th>
                    <th>District</th>
                    <th>Post Office</th>
                    <th>Post Code</th>
                    <th class="text-right">Action</th>
                </tr>
                </thead>
            </table>
        </div>

        {!! Form::open(['url'=>'bangladesh/PostOfficeIndex','method'=>'POST']) !!}
        <div id="new-posts" class="col-md-8">
            <table width="50%" class="table table-bordered table-striped table-hover">
                <tbody>
                <tr>
                    <td><label for="name" class="control-label">Category</label></td>
                    <td>{!! Form::select('district_id',$districts,null,array('id'=>'district_id','class'=>'form-control','autofocus')) !!}</td>
                </tr>
                <tr>
                    <td><label for="name" class="control-label">Post Office</label></td>
                    <td><input id="name" type="text" class="form-control" name="name" value="" required></td>
                </tr>
                <tr>
                    <td><label for="post_code" class="control-label">Post Code</label></td>
                    <td><input id="post_code" type="text" class="form-control" name="post_code" value="" required></td>
                </tr>
                </tbody>

                <tfoot>
                <tr>
                    <td colspan="4"><button type="submit" id="btn-station-save" class="btn btn-primary btn-station-save">Submit</button></td>
                </tr>
                </tfoot>

            </table>
        </div>
        {!! Form::close() !!}

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

            $('#new-posts').hide();
            $('#edit-station').hide();

        });

        $(function() {
            var table= $('#post-office-table').DataTable({
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                ajax: 'getPOfficeData',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'district.name', name: 'district.name' },
                    { data: 'name', name: 'name' },
                    { data: 'post_code', name: 'post_code' },
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

            $(this).on('click', '.btn-sub-category-edit', function (e) {


                $('#category-id-for-edit').val($(this).data('category'));
                $('#name-for-edit').val($(this).data('name'));
                $('#acc-in-stock-edit').val($(this).data('receive'));
                $('#acc-out-stock-edit').val($(this).data('delivery'));
                $('#id-for-update').val($(this).data('rowid'));

                $('#edit-sub-category').show();
                $('#post-office-table').parents('div.dataTables_wrapper').first().hide();
                $('#top-head').hide();
            });


            $(this).on('click', '.btn-sub-category-delete', function (e) {

                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var url = $(this).data('remote');
                // confirm then
                $.ajax({
                    beforeSend: function (request) {
                        return confirm("Are you sure?");
                    },
                    url: url,
                    type: 'DELETE',
                    dataType: 'json',
                    data: {method: '_DELETE', submit: true},

                    error: function (request, status, error) {
                        alert(request.responseText);
                    },

                }).always(function (data) {
                    $('#sub-categories-table').DataTable().draw(true);
                })
            });


        });



        $(document).on('click', '.btn-post-add', function (e) {
            $('#new-posts').show();
            $('#post-office-table').parents('div.dataTables_wrapper').first().hide();
            $('#top-head').hide();
        });

        // add new sub Category



        $(document).on('click', '.btn-sub-category-update', function (e) {
            e.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var url = 'subCategory/update/' + $('#id-for-update').val();

            // confirm then
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',

                data: {method: '_POST', submit: true,
                    acc_out_stock:$('#acc-out-stock-edit').val(),
                    acc_in_stock:$('#acc-in-stock-edit').val(),
                    name:$('#name-for-edit').val(),
                },

                error: function (request, status, error) {
                    var myObj = JSON.parse(request.responseText);
                    alert(myObj.error);
                },

                success: function (data) {
                    $('#edit-sub-category').hide();
                    $('#post-office-table').DataTable().draw(false);
                    $('#top-head').show();
                    $('#post-office-table').parents('div.dataTables_wrapper').first().show();

                }

            });
        });

    </script>

@endpush
