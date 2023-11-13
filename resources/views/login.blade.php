@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="container">
        <h2>Agent Login</h2>
        <p>Keep streaming heart warming music</p>

        <form action="#" method="POST">
            <label for="email">Email Address</label><br>
            <input name="email" type="email" placeholder="johndoe@gmail.com"><br><br>

            <label for="category">Category</label><br>
            <select name="category" id="category">
                <option value="agent">Agent</option>
                <option value="label">Label artist</option>
                <option value="artist">Lone artist</option>
            </select><br><br>

            <label for="password">Password</label><br>
            <input name="password" type="password" placeholder="********"><br><br>

            <button type="submit" name="login">Login</button><br><br>
            <div class="signup">Don't have an account? <a href="#" class="register_link">Sign Up</a></div>
        </form>
        </div>
        <img src="pictures/artist_registration.png" alt="registration photo">
        @endsection