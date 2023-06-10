@extends('master')
@section("content")
<div style="background-color:lightyellow">
<div>
  <h1 id="heading">RIGHTY FIT</h1>
</div>
<div class="container">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://cdn.shopify.com/s/files/1/0490/2443/4341/files/main_banner_6565c542-f2c8-401c-8f75-c2c69c388fdb.jpg?v=1671716990">
      </div>
      <div class="item">
        <img src="https://cdn.shopify.com/s/files/1/0490/2443/4341/files/1880_x720_websit_4_e5d768b3-4834-40e9-8bb6-3b73cb0fadac.jpg?v=1669615317">
      </div>
      <div class="item">
        <img src="https://cdn.shopify.com/s/files/1/0490/2443/4341/files/1880_x720_websit_2_5fbf5b45-805e-417f-9cef-dcfb75e7200e.jpg?v=1669615069">
      </div>
      <div class="item">
        <img src="https://cdn.shopify.com/s/files/1/0490/2443/4341/files/1880_x720_websit_1_b6e039e4-602c-4068-8a56-3b3c36d8ec67.jpg?v=1669614956">
      </div>
      <div class="item">
        <img src="https://cdn.shopify.com/s/files/1/0490/2443/4341/files/1880_x720_websit_2_5fbf5b45-805e-417f-9cef-dcfb75e7200e.jpg?v=1669615069">
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>
</div>
<div class="custom-product trend">
    
      <div class="trending-wrapper">
        <h3>Trending Products</h3>
        @foreach($products as $item)
        <div class="trending-item">
          <a href="detail/{{$item['id']}}">
          <img class="trending-image" src="{{$item['gallery']}}">
          <div class="caption">
            <h3>{{$item['name']}}</h3>
          </div>
        </a>
        </div>
        @endforeach
      </div>
      
</div>
<script>
  /*

dependencies:

//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js
//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js
//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js

*/

$(".carousel").swipe({

swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

  if (direction == 'left') $(this).carousel('next');
  if (direction == 'right') $(this).carousel('prev');

},
allowPageScroll:"vertical"

});
</script>
@endsection
