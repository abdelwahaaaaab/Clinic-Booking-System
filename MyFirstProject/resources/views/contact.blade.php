<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF_8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>Contact Page</title>
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
         <!--Start Contact -->
         @if($message = Session::get('message'))
         <div class="alert">
             {{ $message }}
         </div>
         @endif
         <div class="contact" id="contact">
            <div class="container">
                <h2 class="subtitle">Contact us</h2>
                <p>If you have any problems or suggestion</p>
                <form action="{{route('contact.store')}}" method="post">
                    @csrf
                    <fieldset>
                        <legend>Contact</legend>
                        <label for="name1">Name: </label>
                        <input type="text" name="name1" id="name1">
                        <hr>
                        <label for="email2">Email: </label>
                        <input type="email" name="email2" id="email2">
                        <hr>
                        <label for="subject">Subject:</label>
                        <input type="text" name="subject" id="subject">
                        <hr>
                        <textarea name="message1" id="message1" cols="30" rows="10" placeholder="Message"></textarea><br>
                        <input type="submit" value="Send Message" class="butt">
                    </fieldset>
                </form>
            </div>
        </div>
        <!--End Contact -->
        <!--Start footer-->
        <div class="footer">
            &copy; 2022 <span>Pantomath </span> All Right Reserved
        </div>
        <!--End footer-->
</body> 
</html>       