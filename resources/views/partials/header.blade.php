<?php

$types=config('headerMenues.types');
$icons=config('headerMenues.icons')


?>


<header>
    <div class="container flexing" id="spc-between">




        <ul class="flexing p-0 m-0" >

         @foreach ($types as  $type )


         <li><a class=" {{ Route::currentRouteName() == $type  ? 'bg-danger right' : 'right' }}" href="{{ route($type) }}"><strong>{{ $type }}</strong></a></li>

         @endforeach

        </ul>


        <img src="/img/boolean-logo.png" alt=""  id="resize-logo">


        <ul class="flexing p-0 m-0 " >
         @foreach ($icons as $icon )

         <li><a class="left" href="#"><i class="{{$icon}}"></i></a></li>

         @endforeach

        </ul>




    </div>











</header>
