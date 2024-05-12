<?php

$faqs=config('footerMenues.faqs');
$icons=config('footerMenues.icons')


?>


<footer>

    <div class="container flexing" id="spc-between">

      <div>

        <p>

          <strong>Boolando s.r.l.</strong> <br>

        </p>

        <ul>

          <li class="flexing">

            @foreach ($faqs as $faq )

            <a class="right" href="#">{{$faq}}</a>

            @endforeach



          </li>

        </ul>

      </div>

      <div>

        <p>

          <strong>Trovaci anche su</strong> <br>

        </p>

        <ul>
          <li class="flexing">

            @foreach ($icons as $icon)

            <a v-for="(element,index) in icons" class="left" href="#"><i class="{{$icon}}"></i></a>

            @endforeach



          </li>
        </ul>

      </div>





    </div>


  </footer>
