@extends('layouts.app')

@section('content')
    <script src="{!! asset('src/js/vendor/jquery-3.3.1.min.js') !!}"></script>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: rgba(44,221,32,0.1); margin-bottom: 0.5rem">
            <li class="breadcrumb-item"><a class="white-text" href="{!! url('home') !!}">Home</a></li>
            <li class="breadcrumb-item active">Backup Database</li>
        </ol>
    </nav>
    @include('partials.error-msg')
    @isset($files)
    <div class="row" id="section-top">
        <div class="col-md-10">
{{--            <a href="{!! url('company/backupDBIndex') !!}">Backup</a>--}}
            <div class="pull-left">
                <button type="button" class="btn btn-new-backup btn-success"><i class="fa fa-plus"></i>New Backup</button>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>SL</th>
            <th>Date</th>
            <th>File Name</th>
            <th>Size</th>
            <th>Download</th>
            <th>Remove</th>
        </tr>

        </thead>
        <tbody>
        @foreach($files as $i=>$row)
        <tr>
            <td>{!! $i+1 !!}</td>
            <td>{!! date('d-M-Y H:i:s',$row->getMTime()) !!}</td>
            <td>{!! $row->getFileName() !!}</td>
            <td>{!! number_format($row->getSize() / 1048576,2)  !!}MB</td>
            <td><a href="{!! url('admin/downloadBkp/'.$row->getFileName()) !!}">Download</a></td>
            <td><a href="{!! url('admin/deleteBkp/'.$row->getFileName()) !!}">Remove</a></td>
{{--            <td><a href="{!! url('company/backupDBIndex') !!}">Backup</a></td>--}}
        </tr>
        @endforeach
        </tbody>

    </table>
    @endisset

@endsection

@push('scripts')
<script>
    $(document).on("click", ".btn-new-backup", function (e) {
        window.location='backupDBIndex'
    });
</script>


@endpush
