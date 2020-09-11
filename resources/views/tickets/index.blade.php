@extends('layouts.main')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tickets</h1>
        </div>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>Updated at</th>
                    <th>Summary</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tickets as $ticket)
                <tr>
                    <td>{{$ticket->updated_at}}</td>
                    <td>{{$ticket->summary}}</td>
                    <td>{{$ticket->description}}</td>
                    <td>{{$ticket->status}}</td>
                    <td>
                        <a href="/tickets/{{$ticket->id}}" class="btn btn-primary">Update</a>
                        <a href="/tickets/delete/{{$ticket->id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-4">
                {{$tickets->links()}}
            </div>
        </div>

    </main>
@endsection
