@extends('layouts.main')

@section('content')

    <h1>Contact </h1>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, aliquam.</p>



<form method="POST" action="/contact">
    @csrf
<div class="form-item">
    <input type="text" name="name">
</div>
<div class="form-item">
    <input type="text" name="email">
</div>
<div class="form-item">
    <textarea name="question" id="" cols="30" rows="10"></textarea>
</div>

<button type="submit">Submit!</button>
</form>

@if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif



@endsection

@section('title', "contact us")
