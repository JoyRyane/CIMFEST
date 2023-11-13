<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ARTIST REGISTRATION</title>
        <link href="{{ asset('assets/css/artist_registration.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
        <h2>Artist Registration</h2>
        <p>Upload your songs to make people feel good</p>
        <form action="artist_registration.php" method="POST">
            <label for="name">Name</label><br>
            <input name="name" type="text" placeholder="john doe"><br><br>

            <label for="phone">Phone Number</label><br>
            <input name="phone" type="phone" placeholder="6 77 89 01 45"><br><br>

            <label for="email">Email Address</label><br>
            <input name="email" type="email" placeholder="johndoe@gmail.com"><br><br>

            <label for="category">Category</label><br>
            <select name="category" id="category">
                <option value="label">Label</option>
                <option value="artist">Lone artist</option>
            </select><br><br>

            <label for="password">Password</label><br>
            <input name="password" type="password" placeholder="********"><br><br>

            <label for="password">Confirm Password</label><br>
            <input name="confirm_password" type="password" placeholder="********"><br><br><br>

            <button type="submit" name="register">Register</button><br><br>
            <div class="signin">Already have an account? <a href="#" class="login_link">Sign In</a></div>
        

        </form>
        </div>
        <img src="{{ asset('assets/images/artist_registration.png') }}" alt="registration photo">
    </body>
</html>