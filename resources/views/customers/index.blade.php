@extends('layouts.app')

@section('title','Customers')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Customers</h1>
            <p><a class="btn btn-outline-primary" href="/customers/create">Add New Customer</a></p>
        </div>
    </div>

    @foreach ($customers as $customer)
        <div class="row">
            <div class="col-2">{{$customer->id}}</div>
            <div class="col-4">
                <a href="/customers/{{$customer->id}}">{{$customer->name}}</a>
            </div>
            <div class="col-4">{{$customer->company->name}}</div>
            <div class="col-2">{{$customer->active}}</div>
        </div>

    @endforeach



@endsection