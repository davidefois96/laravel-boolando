@extends('layout.main')

@section('content')

@foreach ($products as $product )

<div class="figure">

    <div class="model">

      <img src="/img/{{$product['frontImage']}}" alt="">
      <img class="hovered" src="/img/{{$product['backImage']}}" alt="{{$product['id']}}">

      @if ($product['isInFavorites'])

      <div class="heart text-danger">&#9829</div>

      @else

      <div class="heart">&#9829</div>

      @endif



      <div class="badgesContainer">

        @foreach ($product['badges'] as $badge )

        <span class="{{$badge['type']}}" key="{{$product['id']}}">

            {{ $badge['value'] }}

        </span>

        @endforeach



      </div>

    </div>


    <p>
        {{ $product['brand'] }} <br>
        <strong>{{ $product['name'] }}</strong><br>
        @php
            $discountPrice = $product['price'];
            foreach ($product['badges'] as $badge) {
                if ($badge['type'] === 'discount') {
                    $discount = intval(str_replace(['%','-'], '', $badge['value']));
                    $discountPrice =$product['price'] - ($product['price']/100*$discount);
                    $discountPrice = number_format($discountPrice, 2);
                }
            }
        @endphp
        <span><strong class="redtext">{{ $discountPrice  }} &#8364</strong></span>
        <span class=" text-decoration-line-through ">{{  $product['price'] }} &#8364</span>

      </p>


  </div>

@endforeach

@endsection
