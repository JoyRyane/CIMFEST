<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AGENT REGISTRATION</title>
        <link href="{{ asset('assets/css/agent_registration.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
        <p class="heading">Agent Registration</p>
        <p class="paragraph">Make money by creating content for our artist</p>
        <form action="{{ route('create_agent') }}" method="POST">
            @if(Session::has('success'))
                <div style="color: green; background:white;width:81%;">{{Session::get('success')}}</div>
            @endif

            @if(Session::has('fail'))
                <div style="color: red;background:white;width:81%;">{{Session::get('fail')}}</div>
            @endif

            @csrf
            <label for="name">Name</label><br>
            <input name="name" type="text" placeholder="john doe"><br>
            <span style="color: red;">@error('name'){{$message}}@enderror</span><br>

            <label for="phone">Phone</label><br>
            <input name="phone" type="number" placeholder="6 77 12 98 34"><br>
            <span style="color: red;">@error('phone'){{$message}}@enderror</span><br>

            <label for="email">Email Address</label><br>
            <input name="email" type="email" placeholder="johndoe@gmail.com"><br>
            <span style="color: red;">@error('email'){{$message}}@enderror</span><br>

            
            <label for="social_media">Add Social media Handles</label><br>
            <input name="social_media" type="text" placeholder="snapchat:@renna"><br>
            <span style="color: red;">@error('social_media'){{$message}}@enderror</span><br>


            <label for="password">Password</label><br>
            <input name="password" type="password" placeholder="********"><br>
            <span style="color: red;">@error('password'){{$message}}@enderror</span><br>

            <label for="password">Confirm Password</label><br>
            <input name="password_confirmation" type="password" placeholder="********"><br>
            <span style="color: red;">@error('name'){{$message}}@enderror</span><br>

            <button type="submit" >Register</button><br>
            <div class="signin">Already have an account? <a href="#" class="login_link">Sign In</a></div>

        </form>
        </div>
        <img class="regImage" src="{{ asset('assets/images/artist_registration.png') }}" alt="registration photo">
    </body>
</html>