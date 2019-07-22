@extends('layouts.app')

@section('title','Details for '. $customer->name)

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Details for {{$customer->name}}</h1>
           <p> <a class="btn btn-outline-secondary" href="/customers/{{$customer->id}}/edit">&nbsp;&nbsp;Edit&nbsp;&nbsp;</a> </p

            <form action="/customer/{{$customer->id}}" method="POST">
                @method('delete')
                @csrf

                <button class="btn btn-outline-danger" type="submit">Delete</button>
            </form>

        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Name</strong> {{$customer->name}}</p>
            <p><strong>Email</strong> {{$customer->email}}</p>
            <p><strong>Company</strong> {{$customer->company->name}}</p>
        </div>
    </div>


@endsection
