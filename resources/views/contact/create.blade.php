@extends('layouts.app')

@section('title','Contact us')

@section('content')

    @if( ! session()->has('message'))
        <form action="{{ route('contact.store') }}" method="POST">
            <div  class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ old('name')}}" class="form-control">
                <div> {{ $errors->first('name') }} </div>
            </div>

            <div class="form-group pb-2">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{ old('email')}}" class="form-control">
                <div>  {{ $errors->first('email') }} </div>
            </div>

            <div class="form-group pb-2">
                <label for="message">Message</label>
                <textarea name="message"  rows="8" class="form-control" >{{ old('message') }}</textarea>
                <div>  {{ $errors->first('message') }} </div>
            </div>

            <button type="submit" class="btn btn-outline-primary">Send Message</button>

            @csrf
        </form>
    @endif

@endsection

