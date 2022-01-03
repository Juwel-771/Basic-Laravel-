@extends('layout.app')
@section('content')
    <h3>Contact</h3>
    {!! Form::open(['url'=>'contact/submit']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', '', ['class'=>'form-control','placeholder'=>'Enter Your Name']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', '', ['class'=>'form-control','placeholder'=>'Enter Your Email']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('textarea', 'Message') !!}
        {!! Form::textarea('textarea', '', ['class'=>'form-control','placeholder'=>'Enter Your Message']) !!}
    </div>
    <div class="form-group my-2">
        {!! Form::submit('submit', ['class'=>'btn btn-success']) !!}
    </div>
    {!! Form::close() !!}
@endsection
