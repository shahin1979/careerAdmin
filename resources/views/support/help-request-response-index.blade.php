@extends('layouts.app')

@section('content')
    <script src="{!! asset('assets/js/jquery-3.3.1.min.js') !!}"></script>



    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: rgba(44,221,32,0.1); margin-bottom: 0.5rem">
            <li class="breadcrumb-item"><a class="white-text" href="{!! url('home') !!}">Home</a></li>
            <li class="breadcrumb-item active">Support Request</li>
        </ol>
    </nav>

    <div class="container-fluid">

        <div class="col-md-12 dataTables_wrapper" style="overflow-x:auto;">
            <table class="table table-bordered table-hover table-striped" id="supports-table">
                <thead style="background-color: #b0b0b0">
                <tr>
                    <th></th>
                    <th>User</th>
                    <th>Request Subject</th>
                    <th>Request Details</th>
                    <th>Response</th>
                    <th>Response By</th>
                    <th class="text-right">Action</th>
                </tr>
                </thead>
            </table>
        </div>


        {!! Form::open(['url'=>'support/submitResponseIndex','method'=>'POST']) !!}
        <div id="response-support" class="col-md-8">
            <table width="50%" class="table table-bordered table-striped table-hover">
                <tbody>
                <tr>
                    <td><label for="name" class="control-label">Candidate Name</label></td>
                    <td id="name"></td>
                </tr>

                <tr>
                    <td><label for="subject" class="control-label">Subject</label></td>
                    <td id="subject"></td>
                </tr>

                <tr>
                    <td><label for="description" class="control-label">Details</label></td>
                    <td id="description"></td>
                </tr>

                <tr>
                    <td><label for="remarks" class="control-label">Response</label></td>
                    <td><textarea class="form-control" name="remarks" cols="50" rows="5" id="remarks"></textarea></td>
                </tr>


                </tbody>
                <input id="support_id" type="hidden" name="support_id"/>
                <tfoot>
                <tr>
                    <td colspan="4"><button type="submit" id="btn-remarks" class="btn btn-primary btn-remarks">Submit</button></td>
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

            $('#response-support').hide();

        });

        $(function() {
            var table= $('#supports-table').DataTable({
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                ajax: 'getRequestData',
                columns: [
                    { data: 'id', name: 'id', visible: false },
                    { data: 'user.name', name: 'user.name' },
                    { data: 'subject', name: 'subject' },
                    { data: 'description', name: 'description' },
                    { data: 'remarks', name: 'remarks' },
                    { data: 'resolved_by', name: 'resolved_by' },
                    { data: 'action', name: 'action', orderable: false, searchable: false, printable: false}
                ],
                order: [[ 0, "desc" ]],

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

            $(this).on('click', '.btn-request-response', function (e) {
                $('#support_id').val($(this).data('helper'));
                $('#name').html($(this).data('name'));
                $('#subject').html($(this).data('subject'));
                $('#description').html($(this).data('description'));
                $('#remarks').val($(this).data('remarks'));

                $('#supports-table').parents('div.dataTables_wrapper').first().hide();
                $('#response-support').show();
            });
        });



        // $(document).on('click', '.btn-sub-category-update', function (e) {
        //     e.preventDefault();
        //
        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });
        //     var url = 'subCategory/update/' + $('#id-for-update').val();
        //
        //     // confirm then
        //     $.ajax({
        //         url: url,
        //         type: 'POST',
        //         dataType: 'json',
        //
        //         data: {method: '_POST', submit: true,
        //             acc_out_stock:$('#acc-out-stock-edit').val(),
        //             acc_in_stock:$('#acc-in-stock-edit').val(),
        //             name:$('#name-for-edit').val(),
        //         },
        //
        //         error: function (request, status, error) {
        //             var myObj = JSON.parse(request.responseText);
        //             alert(myObj.error);
        //         },
        //
        //         success: function (data) {
        //             $('#edit-sub-category').hide();
        //             $('#sub-categories-table').DataTable().draw(false);
        //             $('#top-head').show();
        //             $('#sub-categories-table').parents('div.dataTables_wrapper').first().show();
        //
        //         }
        //
        //     });
        // });

    </script>

@endpush
