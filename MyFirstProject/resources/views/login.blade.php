<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF_8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/index.css">
    <!--Normalize css file -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,400;0,500;0,600;0,700;0,800;1,200&display=swap" rel="stylesheet">
    <!--Font awesome library -->
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
     <!-- Start header-->
     <div class="header">
            <img src="image/logo.png" alt="logo pic">
            <div class="links">
                <span class="icons">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <ul>
                    <li> <a href="/login">Login</a></li>
                    <li> <a href="/sign-up">Register</a></li>
                    
                </ul>
            </div>
       
        </div>
        <!-- End header-->
        <!-- Start wallpaper -->
        <div class="wallpaper">
            <div class="txt1">
                <h1>Welcome</h1>
                <p>book your appointment online </p>
            </div>
        </div>
        <!-- End wallpaper -->
        <!-- Start login-->
        <div class="login">
            <div class="container">
            <h2 class="subtitle">Login</h2>
                <p>Enter username and password</p>
                <form action="{{route('login.store')}}" method="post">
                    @csrf
                    <fieldset>
                        <legend>Login Form</legend>
                        <br><br>
                        <label for="email_address">Email Address:</label>
                        <input type="text" name="email_address" id="email_address"><br> <br> <br> 
                        @error('email_address') <p class="error">{{$message}}</p> @enderror
                        <label for="login_password">Password:</label>
                        <input type="password" name="login_password" id="login_password"><br> <br> <br> 
                        @error('login_password') <p class="error">{{$message}}</p> @enderror
                        <input type="submit" value="Login" class="butt"><br>
                        @if($alert = Session::get('alert'))
                        <div class="error">
                        {{ $alert }}
                        <br><br>
                        </div>
                        @endif
                        <span>Don't have an account  </span><a href="/sign-up">sign-up</a>
                        <p>{{session('loggedIn')}}</p>
                        
                    </fieldset>
                </form>
               
            </div>
        </div>
        <!-- End login-->
        <!--Start footer-->
        <div class="footer">
            &copy; 2022 <span>Pantomath </span> All Right Reserved
        </div>
        <!--End footer-->


</body>
</html>