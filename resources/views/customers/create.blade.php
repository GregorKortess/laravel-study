@extends('layouts.app')

@section('title','Add new Customer')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Add new Customer</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/customers" method="POST">
                @include('customers.form')

                <button type="submit" class="btn btn-outline-dark">Add customer</button>

            </form>
        </div>
    </div>


@endsection
