<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF_8">
        <meta name="viewport" content="width=device-width, initial-scale-1.0">
        <title>Home Page</title>
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
                    <li> <a href="/home">About</a></li>
                    <li> <a href="/book">Booking</a></li>
                    <li> <a href="/contact">Contact</a></li>
                    <li> <a href="/thanks">My appointment</a></li>
                    <li class="logout"> 
                        <form action="{{ route('login.destroy', session('id')) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="delete_butt_logout"  value="Log out">
                        </form>
                    </li>
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
        <!-- Start about-->
        <div class="about" id="about">
            <div class=".container">
                
                @if($message = Session::get('message'))
                        <div class="alert">
                        {{ $message}}
                        </div>
                @endif
                
                <h2 class="subtitle">About us</h2>
                <p style="font-size: larger;">making life easy for you</p>
                <p class="content">We help you to make an appointment easily by booking online, just booking and come in your time</p>
                <ul style="margin-left: 80px; font-size: larger;">
                    <li>To make appointment you should go to Booking page from navegation bar</li>
                    <li>If you have any problem  or suggestion you can cotact us from contact us page </li>
                </ul>
            </div>
        </div>
        
        
       
        <!--Start footer-->
        <div class="footer">
            &copy; 2022 <span>Pantomath </span> All Right Reserved
        </div>
        <!--End footer-->
    </body>
</html>