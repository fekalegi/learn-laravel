@extends('layout')
@section('content')
    <h1>List Data Student</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Student</th>
            <th scope="col">Student Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($listStudent as $key => $value)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $value['code'] }}</td>
                <td>{{ $value['name'] }}</td>
                <td><a href="{{

url('student/detail/'.$value['code'].'/'.$value['name']) }}">View</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
