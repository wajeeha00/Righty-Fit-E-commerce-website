@extends('master')
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    
</head>
<body>
    

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
    
            <form action="login" method="POST" >
                <div class="form-group">
                    @csrf
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Login</button>
            </form>
        </div>
    </div>

</div>

</body>
</html>
<style>
    
   
.custom-login {

    color:white;
 background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfcgNSIigI7KlxFsTqB0nf0iGNMbUf-Nabsw&usqp=CAU");
 background-color:black;

}
</style>

@endsection