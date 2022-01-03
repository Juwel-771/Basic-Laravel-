@extends('layout.app')
@section('content')
    <h3>Message</h3>
    @foreach ($msg as $message)
     <ul class="list-group">
         <li class="list-group-item">Name: {{$message->name}}</li>
         <li class="list-group-item">Email: {{$message->email}}</li>
         <li class="list-group-item">Message: {{$message->message}}</li>
     </ul>
     <br><br>
    @endforeach
@endsection