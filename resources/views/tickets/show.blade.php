@extends('layouts.main')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Update Ticket {{$ticket->id}}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                </button>
            </div>
        </div>
        <form action="" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="summary">Summary</label>
                <input type="text" id="summary" name="summary" class="form-control {{$errors->has('summary') ? 'is-invalid' : ''}}" value="{{old('summary', $ticket->summary)}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" id="description" name="description" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" value="{{old('description', $ticket->description)}}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" value="{{$ticket->status}}">
                    <option value="Open" {{$ticket->status == "Open" ? "selected" : ""}}>Open</option>
                    <option value="In Progress" {{$ticket->status == "In Progress" ? "selected" : ""}}>In Progress</option>
                    <option value="Closed" {{$ticket->status == "Closed" ? "selected" : ""}}>Closed</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
        </form>

    </main>
@endsection
