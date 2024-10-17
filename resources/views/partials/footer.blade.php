<footer>
    <div class="container">
      <div class="row list">
        <div class="col">
          <h3>
            DC COMICS
          </h3>
          <ul>
            @foreach ($linkFirst as $link)
                <li>
                    <a href="{{ $link['link'] }}">{{ $link['name'] }}</a>
                </li>
            @endforeach
          </ul>
          <h3>
            SHOP
          </h3>
          <ul>
            @foreach ($linkSecond as $link)
                <li>
                    <a href="{{ $link['link'] }}">{{ $link['name'] }}</a>
                </li>
            @endforeach
          </ul>
        </div>
        <div class="col">
          <h3>
            DC
          </h3>
          <ul>
            @foreach ($linkThird as $link)
                <li>
                    <a href="{{ $link['link'] }}">{{ $link['name'] }}</a>
                </li>
            @endforeach
          </ul>
        </div>
        <div class="col">
          <h3>
            SITES
          </h3>
          <ul>
            @foreach ($linkFourth as $link)
                <li>
                    <a href="{{ $link['link'] }}">{{ $link['name'] }}</a>
                </li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="row">
        <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
      </div>
    </div>
    <div class="container">
      <div>
        <p>

          SIGN UP NOW!
          
        </p>
      </div>
      <div>
        <p>
          FOLLOW US
        </p>
        <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="">

        <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="">
        
        <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="">
        
        <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="">

        <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="">
      </div>
    </div>
  </footer>

