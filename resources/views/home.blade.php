@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <upload></upload>

        <div class="container">
            <div class="row">
                @foreach($images as $image)
                    <div class="col-2 mb-4">
                        <a href="{{ $image->original }}"><img src="{{ $image->thumbnail }}" class="w-100"></a>

                        <form action="/images/{{$image->id}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button class="small btn btn-outline-dark mt-2">Delete</button>
                        </form>
                    </div>

                @endforeach

            </div>
        </div>
    </div>
@endsection
