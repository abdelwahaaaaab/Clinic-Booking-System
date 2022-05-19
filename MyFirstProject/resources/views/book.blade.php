<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF_8">
        <meta name="viewport" content="width=device-width, initial-scale-1.0">
        <title>Booking Page</title>
        <link rel="stylesheet" href="/css/index.css">
        <!--Normalize css file -->
        <link rel="stylesheet" href="/css/normalize.css">
        <!-- Google fonts -->
        <link rel="preconnect" href="/https://fonts.googleapis.com">
        <link rel="preconnect" href="/https://fonts.gstatic.com" crossorigin>
        <link href="/https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,400;0,500;0,600;0,700;0,800;1,200&display=swap" rel="stylesheet">
        <!--Font awesome library -->
        <link rel="stylesheet" href="css/all.css">
    </head>
    <body>
        <!-- Start header-->
        <div class="header">
            <img src="/image/logo.png" alt="logo pic">
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
        <!-- Start booking-->
        <div class="booking" id="booking">
            <div class="container">
               
                <h2 class="subtitle">Booking</h2>
                <p>Fill the form</p>
                <form action= "{{ route('book.store') }} " method="post">
                    @csrf
                    <fieldset>
                        <legend>Make an appointment</legend>
                    
                        <label for="name">Full name: </label>    
                        <input type="text" name="name" id="name" >
                        @error('name') <p class="error">{{$message}}</p> @enderror
                        <hr>
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email">
                        @error('email') <p class="error">{{$message}}</p> @enderror
                        <hr>
                        <label for="date">Date: </label>
                        <input type="date" name="date" id="date">
                        @error('date') <p class="error">{{$message}}</p> @enderror
                        <hr>
                        <label for="time">Time: </label>
                        <input type="time" name="time" id="time">
                        @error('time') <p class="error">{{$message}}</p> @enderror
                        <hr>
                        <label for="phone">Phone: </label>
                        <input type="text" name="phone" id="phone">
                        @error('phone') <p class="error">{{$message}}</p> @enderror
                        <hr>
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Enter your notices"></textarea><br><br>
                        @if($message = Session::get('message'))
                        <div class="alert">
                        {{ $message}}
                        </div>
                        @endif
                        <input type="submit" value="Submit" class="butt">
                    </fieldset>
                    
                </form>
            </div>
        </div>
        <!-- End booking-->
       
        <!--Start footer-->
        <div class="footer">
            &copy; 2022 <span>Pantomath </span> All Right Reserved
        </div>
        <!--End footer-->
    </body>
</html>