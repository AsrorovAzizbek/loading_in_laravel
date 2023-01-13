@extends('layouts.log')
@section('log')
            <div class="signup-form">
                <h2 class="form-title">Register</h2>
                <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">
                    @csrf
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Your Name"  required autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" required/>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" required/>
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="password_confirmation" id="password-confirm" placeholder="Repeat your password" required/>
                    </div>
                    <div class="form-group form-button">
                        <button name="teacher" id="teacher" class="form-submit">Teacher</button>
                        <button class="form-submit"><a href="/stud" style="color:white; text-decoration:none;">Student</a></button>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="../../log/images/signup-image.jpg" alt="sing up image"></figure>
            </div>
@endsection