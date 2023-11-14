<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ARTIST REGISTRATION</title>
        <link href="{{ asset('assets/css/artist_registration.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
        <p class="heading">Artist Registration</p>
        <p class="paragraph">Reachout to fans by uploading your album</p>
        <form action="{{route('create_artist')}}" method="POST">
            @if(Session::has('success'))
            <div style="color: green; background:white;width:81%;">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div style="color: red;background:white;width:81%;">{{Session::get('fail')}}</div>
            @endif
            @csrf
            <label for="name">Name</label><br>
            <input name="name" type="text" value="{{ old('name') }}" class=" {{ $errors->has('name') ? 'is-invalid' : ''}}" placeholder="john doe"><br>
            <span style="color: red;">@error('name'){{$message}}@enderror</span><br>

            <label for="phone">Phone Number</label><br>
            <input name="phone" type="phone" value="{{old('phone')}}" placeholder="6 77 89 01 45"><br>
            <span style="color: red;">@error('phone'){{$message}}@enderror</span><br>

            <label for="email">Email</label><br>
            <input name="email" type="email" value="{{old('email')}}" placeholder="johndoe@gmail.com"><br>
            <span style="color: red;">@error('email'){{$message}}@enderror</span><br>

            <label for="category">Category</label><br>
            <select name="category" id="category" value="{{old('category')}}">
                <option value="label">Label</option>
                <option value="artist">Lone artist</option>
            </select><br>
            <span style="color: red;">@error('category'){{$message}}@enderror</span><br>

            <label for="password">Password</label><br>
            <input name="password" type="password" placeholder="********"><br>
            <span style="color: red;">@error('password'){{$message}}@enderror</span><br>

            <label for="password">Confirm Password</label><br>
            <input name="confirm_password" type="password" placeholder="********"><br>
            <span style="color: red;">@error('password'){{$message}}@enderror</span><br>

            <button type="submit" name="register">CREATE ACCOUNT</button><br>
            <div class="signin">Already have an account? <a href="{{ route('artist.login')}}" class="login_link">Log In</a></div>
        </form>
        </div>
        <img class="regImage" src="{{ asset('assets/images/artist_registration.png') }}" alt="registration photo">
    </body>
</html>