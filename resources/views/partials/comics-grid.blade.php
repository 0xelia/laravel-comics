<div>
    <button class="main_btn">current series</button>
    <ul class="comics_grid">
        <li class="comic_card">

            @foreach($products as $comic)
                <figure class="pic_img">
                    <div class="show_price">
                        <span>
                            {{$comic['price']}}
                        </span>
                        <button>buy now!</button>
                    </div>
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                </figure>
                <h4>{{$comic['series']}}</h4>
            @endforeach

        
        </li>
    </ul>
</div>