<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF_8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>Sign-up Page</title>
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
        <!--start Sign-up -->
        <div class="container">
            <div class="signup">
            <h2 class="subtitle">Sign-up</h2>
                <p>Enter some Information</p>
                <form action="{{ route('sign-up.store') }}" method="post">
                    @csrf
                    <fieldset>
                        <legend>Sign-up Form</legend>
                        <br><br>
                        <label for="name">Enter your name:</label>
                        <input required type="text" name="name" id="name" value="{{old('name')}}">
                        @error('name') <p class="error">{{$message}}</p> @enderror
                        <br> <br> <br> 
                        
                        <label for="email">Enter your E-mail:</label>
                        <input required type="email" name="email" id="email" value="{{old('email')}}">
                        @error('email') <p class="error">{{$message}}</p> @enderror
                        <br> <br> <br> 

                        <label for="password">create Password:</label>
                        <input required type="password" name="password" id="password">
                        @error('password') <p class="error">{{$message}}</p> @enderror
                        <br> <br> <br> 

                        <label for="password_comfirmation">Confrim Password:</label>
                        <input required type="password" name="password_confirmation" id="password_confirmation"><br> <br> <br> <br> <br>
                        
                        
                        @if($alert = Session::get('alert'))
                        <div class="error">
                        {{ $alert}}
                        </div>
                        @endif
                        <input type="submit" value="Sign-up" class="butt"><br><br><br>
                        <span>Already have an account ?</span> <a href="/login"> Login</a>
                    </fieldset>
                    
            </div>
        </div>
        <!--end Sign-up -->
         <!--Start footer-->
         <div class="footer">
            &copy; 2022 <span>Pantomath </span> All Right Reserved
        </div>
        <!--End footer-->

</body>
</html>