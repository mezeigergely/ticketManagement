@extends('layouts.main')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">User</h1>
        </div>
        <form action="" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}">
                @if($errors->has('name'))
                    <span class="help-block">
                            <strong>{{$errors->first('name')}}</strong>
                        </span>
                @endif
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}">
                    @if($errors->has('email'))
                        <span class="help-block">
                            <strong>{{$errors->first('email')}}</strong>
                        </span>
                    @endif
            </div>
            <button class="btn btn-primary" type="submit">Next</button>
        </form>

    </main>
@endsection
