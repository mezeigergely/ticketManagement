@extends('layouts.main')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add New Ticket</h1>
        </div>
        <form action="" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="user_id">Name</label>
                <select class="form-control" id="user_id" name="user_id">
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
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

            <button class="btn btn-primary" type="submit">Add</button>
        </form>
    </main>
@endsection
