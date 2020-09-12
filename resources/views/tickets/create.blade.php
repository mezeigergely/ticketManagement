@extends('layouts.main')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add New Ticket</h1>
        </div>
        <form action="" method="post">
            {{csrf_field()}}


            <div class="form-group">
                <label for="user_id">User</label>
                <select id="user_id" name="user_id" class="form-control">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="summary">Summary</label>
                <input type="text" id="summary" name="summary" class="form-control {{$errors->has('summary') ? 'is-invalid' : ''}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" id="description" name="description" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="Open">Open</option>
                </select>
            </div>
            <div class="form-group">
                <label for="creation_time">Creation Time</label>
                <input class="form-control" id="creation_time" name="creation_time" value="{{date("Y-m-d H:i:s l")}}">
            </div>
            <div class="form-group">
                <label for="due_time">Due Time</label>
                <input class="form-control" id="due_time" name="due_time" value="{{date("Y-m-d H:i:s l", strtotime('+48 hours'))}}">
            </div>
            <button class="btn btn-primary" type="submit">Add</button>
        </form>

    </main>
@endsection
