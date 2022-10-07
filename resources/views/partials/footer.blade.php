<?php

$widgets = [
    [
        'text' => 'icon text'
    ],
    [
        'text' => 'icon text'
    ],
    [
        'text' => 'icon text'
    ],
    [
        'text' => 'icon text'
    ],
    [
        'text' => 'icon text'
    ],
]


?>


<footer>
        <div class="footer_top">
            {{-- <div class="container"> --}}
                <ul class="widgets_list">

                    @foreach ($widgets as $el)
                        
                        <li class="widget_item">
                            {{-- <figure class="widget_icon">
                                <img src="{{$el['icon']}}" alt="">
                            </figure> --}}

                            <a href="#">
                                {{ $el['text'] }}
                            </a>
                        </li>
                    
                    @endforeach

                </ul>
            </div>
        </div>


        <div class="content_footer">
            <div class="container">
                <div class="grid_links">
                    <ul class="link_list">
                        dc comics
                        <li>
                            <a href="#">
                                item
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                item
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                item
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                item
                            </a>
                        </li>
                    </ul>
                    <ul class="link_list">
                        shop
                        <li>
                            <a href="#">
                                item
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                item
                            </a>
                        </li>
                    </ul>
                    <ul class="link_list">
                        dc
                        <li>
                            <a href="#">
                                item
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                item
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                item
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                item
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                item
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                item
                            </a>
                        </li>
                    </ul>
                    <ul class="link_list">
                        sites
                        <li>
                            <a href="#">
                                item
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                item
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                item
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                item
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="logo_big">
                    <img src="{{ asset('img/dc-logo-bg.png') }}" alt="">
                </div>
            </div>
        </div>
</footer>