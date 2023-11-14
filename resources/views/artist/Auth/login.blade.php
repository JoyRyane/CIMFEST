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

            <form action="{{ route('artist.login') }}" method="POST">
                @csrf
            <label for="email">Email Address</label><br>
            <input name="email" type="email" placeholder="johndoe@gmail.com"><br><br>

            <label for="password">Password</label><br>
            <input name="password" type="password" placeholder="********"><br><br><br>

            <button type="submit" name="login">Login</button><br><br><br>
            <div class="sign_up">Don't have an account? <a href="{{ route('artist.register')}}" class="register_link">Sign Up</a></div>
        </form>
        </div>
        <img src="{{ asset('assets/images/artist_registration.png') }}" alt="registration photo">
    </body>
</html>