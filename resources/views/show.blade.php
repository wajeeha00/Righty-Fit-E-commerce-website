@extends('master')
@section("content")
<h1>Sneakers</h1>

<div >
    
      <div class="wrapper">
        
        @foreach($products as $item)
        <div class="item">
          <a href="detail/{{$item['id']}}">
          <img class="image" src="{{$item['gallery']}}">
          <div class="">
            <h3>{{$item['name']}}</h3>
          </div>
        </a>
        </div>
        @endforeach
      </div>
      
</div>
<style>
    .image{
        height:500px;
        width:500px;
        margin:10px;
    }
    .item{
        float:left;
    }
</style>
@endsection