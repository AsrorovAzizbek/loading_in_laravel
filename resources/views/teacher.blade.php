@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                  <a  data-bs-toggle="modal" data-bs-target="#modal" class="btn btn-dark text-warning float-right">+Adduser</a>
                  <a href="/home" class='btn btn-dark text-warning'>Back</a>
                </div>

                <div class="card-body">
                    <table class="table table-border">
                        <tr align="center">
                            <th>ID</th>
                            <th>name</th>
                            <th>email</th>
                            <th>rasm</th>
                            <th>button</th>
                        </tr>
                        @foreach($tech as $bir)
                        <tr align="center">
                            <td>{{$bir->id}}</td>
                            <td>{{$bir->name}}</td>
                            <td>{{$bir->email}}</td>
                            <td width=200px>
                              <img src="iamag/{{$bir->rasmtech}}" width=70px alt="">
                            </td>
                            <td>
                              <a href="/tdel/{{$bir->id}}" class="btn btn-dark text-warning">delete</a>
                              <a href="/tedit/{{$bir->id}}" class="btn btn-dark text-warning">edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">+Adduser</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <form method="POST" action="/techsaq" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label class="form-label">Name</label>
                              <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Email</label>
                              <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Password</label>
                              <input type="password" class="form-control" name="pass">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Rasm</label>
                              <input type="file" class="form-control" name="techrasm">
                            </div>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                          </form>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection