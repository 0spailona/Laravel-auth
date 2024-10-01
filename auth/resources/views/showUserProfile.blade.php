@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div><h3>Profile</h3></div>
                        <div><h4>Name:</h4></div>
                        <span>{{$user['name']}}</span>
                            <div><h4>email:</h4></div>
                            <span>{{$user['email']}}</span>
                            <div><h4>id:</h4></div>
                            <span>{{$user['id']}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
