@extends('layouts.app')

@section('title','Customers')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Customers</h1>
        </div>
    </div>

    @can('create' , App\Customer::class)
    <div class="row">
        <div class="col-12">
            <p><a class="btn btn-outline-primary" href="/customers/create">Add New Customer</a></p>
        </div>
    </div>
    @endcan

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

    <div class="row">
        <div class="col-12 d-flex justify-content-center pt-4">
            {{  $customers->links()  }}
        </div>
    </div>

@endsection
