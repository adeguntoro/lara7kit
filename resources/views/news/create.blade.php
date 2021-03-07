@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create News</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="here" rows="3" hidden></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('js/moment.js') }}"></script>
<script src="{{ asset('js/react.production.min.js') }}"></script>
<script src="{{ asset('js/react-dom.production.min.js') }}"></script>

<script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
<script>
    // const options = {};
    Laraberg.init('here',{
       laravelFilemanager: { prefix: '/laravel-filemanager' } 
    });
</script>

@endsection
