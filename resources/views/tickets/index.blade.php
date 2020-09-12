@extends('layouts.main')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tickets</h1>
        </div>
        <div>
            <form class="form-inline mt-2 mt-md-0" action="{{URL::to('/search')}}" method="post">
                {{ csrf_field() }}
                <div class="input-group">
                    <input class="form-control mr-sm-2" type="text" placeholder="User" aria-label="search" name="search">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary"> Search</button>
                    </span>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>User</th>
                    <th>
                        <a>Created at</a>
                        <a href="/tickets/?sort=asc">▲</a>
                        <a href="/tickets/?sort=desc">▼</a>
                    </th>
                    <th>
                        <a>Due date</a>
                        <a href="/tickets/?sort=asc">▲</a>
                        <a href="/tickets/?sort=desc">▼</a>
                    </th>
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
                    <td>{{$ticket->user->name}}</td>
                    <td>{{$ticket->created_at}}</td>
                    <td>due date</td>
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
            {{$tickets->appends(request()->toArray())->links()}}
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center pt-4">
                {{$tickets->links()}}
            </div>
        </div>

    </main>
@endsection
