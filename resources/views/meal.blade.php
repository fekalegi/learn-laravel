@extends('layout')
@section('content')
    <h1>List Data Meal</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Meal</th>
            <th scope="col">Meal Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($listMeal as $key => $value)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $value['code'] }}</td>
                <td>{{ $value['name'] }}</td>
                <td><a href="{{

url('meal/detail/'.$value['code'].'/'.$value['name']) }}">View</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
