@extends('master')
@section("content")
<h1 style="background-color:lightyellow">BELOW RS. 5000</h1>

<div class="xero custom-product">
    
      <div >
        @foreach($products as $item)
        <div class="below">
          <a href="detail/{{$item['id']}}">
          <img class="belo1" src="{{$item['gallery']}}">
          <div class="">
            <h3>{{$item['name']}}</h3>
          </div>
        </a>
        </div>
        @endforeach
      </div>
      
</div>
<style>
    .below{
      float:left;
      padding: 20px;

    }
    .xero{
      height:200px;
    }
    .belo1{
      height:400px;
      width:400px;
    }
    body{
      background-color:lightyellow;
    }
    
    
</style>
@endsection