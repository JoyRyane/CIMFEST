@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="container">
        <h2>AGENT Registration</h2>
        <p>Make money by creating content for our artist</p>
        <form action="agent_registration.php" method="POST">
            <label for="name">Name</label><br>
            <input name="name" type="text" placeholder="john doe"><br><br>

            <label for="email">Email Address</label><br>
            <input name="email" type="email" placeholder="johndoe@gmail.com"><br><br>

            
            <label for="social_media">Add Social media Handles</label><br>
            <input name="social_media" type="text" placeholder="snapchat:@renna"><br><br>


            <label for="password">Password</label><br>
            <input name="password" type="password" placeholder="********"><br><br>

            <label for="password">Confirm Password</label><br>
            <input name="confirm_password" type="password" placeholder="********"><br><br><br>

            <button type="submit" name="register">Register</button><br><br>
            <div class="signin">Already have an account? <a href="#" class="login_link">Sign In</a></div>
        

        </form>
        </div>
        <img src="pictures/agent_registration.png" alt="registration photo">
        @endsection