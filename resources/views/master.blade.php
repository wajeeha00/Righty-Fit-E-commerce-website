<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm Project</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Niconne&family=Sigmar+One&display=swap" rel="stylesheet">
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

</body>
<style>
    
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 400px !important;
    }
    .trend{
        background-image:url("https://thumbs.dreamstime.com/b/stylish-lady-shoes-banner-brown-leather-women-golden-autumn-leaves-pumpkin-yellow-background-top-view-flat-lay-fashionable-197037020.jpg");

    }
    body{
        color:brown;
        background-color:lightyellow;
    }
    .custom-product{
        height: 600px;
        
    }
    .slider-text{
        background-color: #35443585 !important;
    }
    .trending-image{
        height: 200px;
        width:150px;
    }
    .trending-item{
        
        float: left;
        width: 20%;
    }
 
    .trending-wrapper{
        color:brown;
        margin: 30px;
        font-family: 'Niconne', cursive;
font-family: 'Sigmar One', cursive;
text-align:center;}
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
    #heading{
        font-family: 'Niconne', cursive;
font-family: 'Sigmar One', cursive;
text-align:center;
    }
   
</style>
</html>