@extends('layout')
@section('content')
    <h1>List Data Item</h1>
    <form action="{{ url('product') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="comp_code" class="form-label"> Product Code</label>
            <input type="text" class="form-control" id="code" name="code">
        </div>
        <div class="mb-3">
            <label for="comp_code" class="form-label"> Product Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <input type="submit" class="form-control">
        </div>
    </form>
@endsection
