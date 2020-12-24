@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: rgba(44,221,32,0.1); margin-bottom: 0.5rem">
            <li class="breadcrumb-item"><a class="white-text" href="{!! url('home') !!}">Home</a></li>
            <li class="breadcrumb-item active">Add Employee</li>
        </ol>
    </nav>

    <table class="table">
        <thead>
        <tr>
            <th>SL</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Address</th>
            <th>Education</th>
        </tr>
        </thead>
        <tbody>
        @foreach($profiles as $i=>$row)
        <tr>
            <td>{!! $i+1 !!}</td>
            <td><img src="{!! asset('/projects/careerPortal/public').$row->photo !!}"></td>
            <td>{!! $row->name !!}</td>
            <td>{!! $row->address !!}</td>
            <td>{!! $row->name !!}</td>
        </tr>
        @endforeach
        </tbody>
    </table>


@endsection

@push('scripts')



@endpush
