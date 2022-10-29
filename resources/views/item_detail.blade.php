@extends('layout')
@section('content')
    <h1>Detail - Data Item</h1>
    <div>
        <h3>{{ isset($detail['code']) ? $detail['code'] : 'Item code tidak ada' }}</h3>

        <p>{{ isset($detail['name']) ? $detail['name'] : 'Item name tidak ada' }}</p>
    </div>
@endsection
