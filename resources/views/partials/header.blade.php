<?php

$links = [
        [ 
            'title' => 'Characters',
        ],
        [ 
            'title' => 'Comics',
        ],
        [ 
            'title' => 'Movies',
        ],
        [ 
            'title' => 'Tv',

        ],
        [ 
            'title' => 'Games',

        ],
        [ 
            'title' => 'Collectibles',

        ],
        [ 
            'title' => 'Video',

        ],
        [ 
            'title' => 'Fans',

        ],
        [ 
            'title' => 'News',

        ],
        [ 
            'title' => 'Shop',

        ],
        ]

?>




<header id="MainHeader">
    <div class="container">
        <figure class="logo">
            <img src="{{ asset('img/dc-logo.png') }}" alt="">
        </figure>

        <ul class="nav">
            @foreach ($links as $link)
            <li class="nav_link">
                
                <a href="#"> {{ $link['title'] }} </a>

            </li>
            @endforeach
        </ul>

    </div>
</header>