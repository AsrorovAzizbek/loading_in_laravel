<div id="slom">
                    
</div>
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
                            <th>video</th>
                        </tr>
                        @foreach($vid as $bir)
                        <tr align="center">

                            <td  align="center">{{$bir->id}}</td>
                            <td>
                                <iframe  height="115" src="https://www.youtube.com/embed/RxDuqWAGAYA"></iframe>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    #salom 
    {
        background:url(https://i.pinimg.com/originals/84/c6/3f/84c63f9bb767b8a8705c0360baaa2f74.gif);
        background-size:cover;
        position: absolute;
        z-index: 1;
        background-position:center;
        overflow:hidden;
        width:100%;
        background-repeat:no-repeat;
        height:100vh;
        position: fixed;
    }
</style>