@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- shows username -->
                    Logged in as: {{ Auth::user()->name }}
                        <br>

                    <!-- if user logged in as admin.. -->
                    @if (Auth::user() && Auth::user()->role == 'admin')
                        <p>Hello admin</P>

                    <!-- else show.. -->
                    @else
                        <p>Hello user</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
