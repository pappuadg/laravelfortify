@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Two Factor Authentication</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <form action="/user/two-factor-authentication" method="POST">
                        @csrf

                        @if(auth()->user()->two_factor_secret)
                            @method('DELETE')
                            Two factor authentication is enabled
     
                            <button type="submit" class="btn btn-danger">Disable</button>
                        @else
                        <button type="submit" class="btn btn-primary">Enable</button>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection