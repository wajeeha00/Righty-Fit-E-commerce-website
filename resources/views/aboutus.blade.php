@extends('master')
@section("content")
    
      <div class="wrapper">
      @foreach($info as $item)
        <ul class="navbar0" >
            <li class="nav-item1">Contact no:</li>
            <li class="nav-item1">{{$item['number']}}</li>
            
        </ul>
        <hr>
        <ul class="navbar0">
            <li class="nav-item1">Email:</li>
            <li class="nav-item1">{{$item['email']}}</li>
        </ul>
        <hr>
        <ul class="navbar0">
            <li class="nav-item1">Branch:</li>
            <li class="nav-item1">{{$item['branch']}}</li>
        </ul>
        <hr>
        
            
        <ul class="navbar0">
            <li class="nav-item1">{{$item['text']}}</li>
        </ul>
        <div class="icon">
        <a href="{{$item['fb']}}"><img class="lol" src="https://assets.dryicons.com/uploads/icon/svg/8305/089674ac-511d-4993-8fe9-c616e1f0c857.svg" alt="123"></a>
            <a href="{{$item['insta']}}"><img class="lol" src="https://assets.dryicons.com/uploads/icon/svg/8329/f654bca4-dd69-4369-a22a-765059d9436b.svg" alt="123"></a>
            <a href="{{$item['twitter']}}"><img class="lol" src="https://assets.dryicons.com/uploads/icon/svg/8385/c23f7ffc-ca8d-4246-8978-ce9f6d5bcc99.svg" alt="123"></a>
        </div>
        
    
        @endforeach
</div>
<div class="creator0">
<p style="">CREATORS</p>

    
</div>
<div class="creator">
<img class="coc" src="{{ asset('images/wajeeha.jpeg') }}" alt="My Image">
<img class="coc" src="{{ asset('images/fatima.jpeg') }}" alt="My Image">
<img class="coc" src="{{ asset('images/ayesha.jpeg') }}" alt="My Image">
    
</div>
<div class="creator2">
<p style="font-size:30px;">WAJEEHA AFTAB</p>
<P style="font-size:30px;">FATIMA KASHIF</P>
<P style="font-size:30px;">AYESHA INAM</P>
    
</div>

      <style>
        .creator2{
            display:flex;
            
            margin:10px 150px 10px 150px;
            justify-content:space-between;
            padding:30px;
            
        }
        .creator0{
            text-align:center;
        }
        .creator{
            background:black;
            display:flex;
            justify-content:space-between;
            
           

        }
        .coc{
            width:200px;
            height:200px;
            border-radius:50%;
            margin:10px 150px 10px 150px;
            border: 5px solid black;

        }
        .icon{
            display:flex;
            justify-content:center;
        }
        .lol{
            margin:40px;
            width: 50px;
            height: 50px;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            
    
        }
        
        .wrapper{
            margin:20px;
            
        }
        .navbar0 {
    display: flex;
    list-style:none;
    align-items:left;
    justify-content:flex-start;

}

.nav-item1 {
    padding:10px;
    font-size:30px;
    
}
        .out{
            float:left;
            margin:20px;
        }
        .in{
            margin:20px;
           
        }
    .image{
        height:500px;
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
        font-size: 50px;
    }
    h3{
        font-size:30px;
        text-decoration-line:  underline;
  text-decoration-style: line;
    }
</style>
@endsection