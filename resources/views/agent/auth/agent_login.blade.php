<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agent LOGIN</title>
        <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
        <p class="heading">Agent Login</p>
        <p class="paragraph">Keep streaming heart warming music</p>

            <form action="{{route('agent.login')}}" method="POST">
                @csrf
            <label for="email">Email Address</label><br>
            <input name="email" type="email" placeholder="johndoe@gmail.com"><br><br>

            <label for="password">Password</label><br>
            <input class="last_child" name="password" type="password" placeholder="********"><br>
            <a class="forgot_password" href="#">Forgot Password?</a><br><br>

            <button type="submit" name="login">LOGIN</button><br><br>
            <div class="sign_up">Don't have an account? <a href="{{ route('artist.register')}}" class="register_link">Register</a></div>
        </form>
        </div>
        <img class="regImage" src="{{ asset('assets/images/artist_registration.png') }}" alt="registration photo">
    </body>
</html>