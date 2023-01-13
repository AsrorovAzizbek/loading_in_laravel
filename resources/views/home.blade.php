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

                    <a href="/teacher" class="btn btn-primary">Teacher</a>
                    <a href="/video" class="btn btn-primary center">Videos</a>
                    <a href="/student" class="btn btn-primary float-right">Student</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    .center 
    {
        position:absolute;
        left:50%;
        transform:translate(-50%,0);
    }
</style>
