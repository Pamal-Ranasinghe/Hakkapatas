<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create my advertiesment</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
    <a href="/">Back to home</a>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                
                <div class="content">
                    <div>
                        <h1>Create my advertiesment</h1>
                        <form action="/createad" method = "POST">
                        @csrf
                            <label for="First Name">First Name</label>
                                <input type="text" name = "firstname"><br><br>
                            <label for="Last Name">Last Name</label>
                                <input type="text" name = "lastname"><br><br>
                            <label for="Email">Email</label>
                                <input type="text" name = "email"><br><br>
                            <input type="submit" value = "Submit">
                        </form>
                    </div>
                </div>
            
            </div>
        </div>
    </body>
</html>
