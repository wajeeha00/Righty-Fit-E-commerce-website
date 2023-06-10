@extends('master')
@section("content")
    
      <div class="wrapper">
        @foreach($info as $item)
        <h3>{{$item['heading']}}</h3>    
        <div class=out> <img src="{{$item['image']}}" alt=""></div>
           <div class=in>  
            <p>{{$item['information']}}</p></div>
        
         
          
        @endforeach
      </div>
      

      <style>
        body{
            
            background-color:lightyellow;
        }
        .out{
            float:left;
            margin:20px;
        }
        .in{
            margin:20px;
           
        }
    .image{
        height:300px;
        width:500px;
        margin:10px;
    }
    .item{
        float:left;
    }
    h3,p{
        color:black;
    }
    p{
        font-size: 30px;
    }
    h3{
        font-size:30px;
        text-decoration-line:  underline;
  text-decoration-style: line;
    }
</style>
@endsection