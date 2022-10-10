<div class="container">

    <div class="comics-gird-section">
        <button class="main_btn">current series</button>
        <ul class="comics_grid">

            @foreach($products as $comic)
                <li class="comic_card">

                        <figure class="pic_img">
                            <div class="show_price">
                                <span>
                                    {{$comic['price']}}
                                </span>
                                <button>buy now!</button>
                            </div>
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        </figure>
                        <a href="{{ route('comic_details', $id = $loop->index) }}">
                            
                            <h4>{{$comic['series']}}</h4>

                        </a>

                </li>
            @endforeach

        </ul>
    </div>

</div>