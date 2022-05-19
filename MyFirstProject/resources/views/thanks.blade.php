<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF_8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>Clinic Page</title>
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
                    <li> <a href="/admin">My appointment</a></li>
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
        <div class="container">
            @if($message = Session::get('message'))
            <div class="alert">
                {{$message}}
            </div>
            @endif
            <div class="thanks">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($books as $i)

                        <tr>
                            <td>{{ $i->name }}</td>
                            <td>{{ $i->date }}</td>
                            <td>{{ $i->time }}</td>
                            <td>
                                <button class="edit_butt"><a href="/book/{{$i->id}}/edit" class="butt_link">Edit</a></button>
                                
                                
                            </td>
                            <td>
                                <form action="{{ route('book.destroy', $i->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="delete_butt"  >Delete</button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
                
            </div>
        </div>
        <!--Start footer-->
        <div class="footer">
            &copy; 2022 <span>Pantomath </span> All Right Reserved
        </div>
        <!--End footer-->
</body>    
</html>        