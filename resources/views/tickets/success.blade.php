@extends('layouts.main')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Your ticket has been sent!</h1>
        </div>
        <div><strong></strong></div>
        <div><strong>{{$ticket->user_id}}</strong></div>
        <div><strong>{{$ticket->user->name}}</strong></div>
        <div><strong>{{$ticket->summary}}</strong></div>
        <div><strong>{{$ticket->description}}</strong></div>
        <div><strong>{{$ticket->created_at}}</strong></div>
    </main>
@endsection
