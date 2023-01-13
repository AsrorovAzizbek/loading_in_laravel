@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <form method="POST" action="/editsaq/{{$ted->id}}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label class="form-label">Name</label>
                              <input type="text" value="{{$ted->name}}" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Email</label>
                              <input type="email" value="{{$ted->email}}" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">rasm</label>
                              <input type="file" value="{{$ted->rasmtech}}" class="form-control" name="rasma">
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                            <a href="/teacher" class='btn btn-dark text-warning'>Back</a>
                          </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection