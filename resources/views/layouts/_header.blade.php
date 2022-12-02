<header>
    <div id="header_nav" class="header-container">
        <div id="main_menu" class="sh">
            <div class="sh-nav-wrapper">
                <nav class="sh-nav">
                    <a href="/">
                        <div class="sh-nav-logo">
                            <span>金信佳业</span>
                        </div>
                    </a>
                    <div class="sh-nav-links">

                        @if(!empty($category))
                            <div class="sh-nav-link">
                                <div class="sh-nav-link-text">产品</div>
                                <div class="sh-nav-link-wrapper" style="display: none">
                                    <div class="sh-menu">
                                        <div class="sh-menu-grid-container">
                                            @foreach($category as $cate)
                                                <div class="sh-menu-grid">
                                                    <div class="sh-menu-list">
                                                        <header class="sh-menu-list-header">
                                                            <div class="sh-menu-list-header-title">{{$cate['name']}}</div>
                                                        </header>
                                                        @if(!empty($cate['son']))
                                                            <div class="sh-menu-list-link-container">
                                                                @foreach($cate['son'] as $children)
                                                                    <div class="sh-menu-list-link"><a href="/product?category={{$children['id']}}">{{$children['name']}}</a></div>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if(!empty($navs))
                            @foreach($navs as $nav)
                                <div class="sh-nav-link">
                                    <div class="sh-nav-link-text">{{ $nav['title'] }}</div>
                                    @if(!empty($nav['son']))
                                        <div class="sh-nav-link-wrapper" style="display: none">
                                            <div class="sh-menu">
                                                <div class="sh-menu-grid-container">
                                                    @foreach($nav['son'] as $son)
                                                        <div class="sh-menu-grid">
                                                            <div class="sh-menu-list">
                                                                <header class="sh-menu-list-header">
                                                                    <div class="sh-menu-list-header-title">{{$son['title']}}</div>
                                                                </header>
                                                                @if(!empty($son['son']))
                                                                    <div class="sh-menu-list-link-container">
                                                                        @foreach($son['son'] as $children)
                                                                            <div class="sh-menu-list-link"><a href="{{$children['url']}}">{{$children['title']}}</a></div>
                                                                        @endforeach
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        @endif
                    </div>
                </nav>
                <div class="sh-service">
                    <a href="#" class="sh-service-login">
                        <svg t="1669728344835" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="6181" width="40" height="40">
                            <path d="M235.097303 699.133018C247.384597 735.582848 286.382106 763.623932 324.772759 763.623932L861.658537 763.623932 880.429732 763.623932 885.649214 745.458146 1009.08775 315.845043C1021.388907 273.032339 993.187631 235.213675 949.051586 235.213675L424.585365 235.213675C410.791718 235.213675 399.609756 246.479262 399.609756 260.376068 399.609756 274.272875 410.791718 285.538462 424.585365 285.538462L949.051586 285.538462C959.924 285.538462 964.161052 291.220461 961.106394 301.851829L837.667859 731.464932 861.658537 713.299145 324.772759 713.299145C307.742153 713.299145 287.789837 698.952471 282.395194 682.949451L73.600164 63.566336C69.16437 50.407706 54.980454 43.363344 41.919502 47.832313 28.858551 52.301281 21.86648 66.591273 26.302275 79.749903L235.097303 699.133018Z" p-id="6182" fill="#ffffff"></path>
                            <path d="M399.609756 902.017094C399.609756 846.429871 354.881911 801.367522 299.707317 801.367522 244.532723 801.367522 199.804878 846.429871 199.804878 902.017094 199.804878 957.604318 244.532723 1002.666667 299.707317 1002.666667 354.881911 1002.666667 399.609756 957.604318 399.609756 902.017094ZM249.756098 902.017094C249.756098 874.223482 272.120021 851.692307 299.707317 851.692307 327.294613 851.692307 349.658537 874.223482 349.658537 902.017094 349.658537 929.810705 327.294613 952.341879 299.707317 952.341879 272.120021 952.341879 249.756098 929.810705 249.756098 902.017094Z" p-id="6183" fill="#ffffff"></path>
                            <path d="M924.097562 902.017094C924.097562 846.429871 879.369715 801.367522 824.195121 801.367522 769.020529 801.367522 724.292683 846.429871 724.292683 902.017094 724.292683 957.604318 769.020529 1002.666667 824.195121 1002.666667 879.369715 1002.666667 924.097562 957.604318 924.097562 902.017094ZM774.243902 902.017094C774.243902 874.223482 796.607825 851.692307 824.195121 851.692307 851.782419 851.692307 874.146342 874.223482 874.146342 902.017094 874.146342 929.810705 851.782419 952.341879 824.195121 952.341879 796.607825 952.341879 774.243902 929.810705 774.243902 902.017094Z" p-id="6184" fill="#ffffff"></path>
                        </svg>
                    </a>
                    <div class="sh-service-search-sm">
                        <div class="sh-search">
                            <a href="/search" class="sh-search-form" id="search-button-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 17 17">
                                    <circle cx="7" cy="7" r="6.5" stroke="#fff"></circle>
                                    <path fill="#fff" d="M12.086 11.379H18.086V12.379H12.086z" transform="rotate(45 12.086 11.379)"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="sh-service-search">
                        <div class="sh-search">
                            <div class="sh-search-form">
                                <form id="search-submit" action="/search">
                                    <button type="button" role="button" aria-label="搜索" class="icon-pos-search" id="search-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 17 17">
                                            <circle cx="7" cy="7" r="6.5" stroke="#fff"></circle>
                                            <path fill="#fff" d="M12.086 11.379H18.086V12.379H12.086z" transform="rotate(45 12.086 11.379)"></path>
                                        </svg>
                                    </button>
                                    <label for="header-search-input" aria-label="搜索">
                                        <input type="text" name="keyword" id="header-search-input" placeholder="搜索" class="sh-header-search-keyword">
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sh-nav-toggle">
                <button class="sh-nav-toggle-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="sh-nav-mob">
                    <div class="sh-menu-mob-search">
                        <div class="sh-menu-mob-search-container">
                            <div class="sh-search-form">
                                <form class="search-input-mob" id="search-submit-sm">
                                    <button type="submit" class="icon-pos-search">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 17 17">
                                            <circle cx="7" cy="7" r="6.5" stroke="#fff"></circle>
                                            <path fill="#fff" d="M12.086 11.379H18.086V12.379H12.086z" transform="rotate(45 12.086 11.379)"></path>
                                        </svg>
                                    </button>
                                    <label>
                                        <input placeholder="搜索" name="keyword" id="header-search-input-sm">
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sh-menu-mob-container">
                        <div class="sh-menu-mob-primary">
                            @if(!empty($category))
                                <div class="sh-menu-mob-d1">
                                    <button class="sh-menu-mob-d1-toggle">
                                        <span>产品</span>
                                        <span class="sh-menu-mob-d1-toggle-arrow"></span>
                                    </button>
                                </div>
                            @endif

                            @if(!empty($navs))
                                @foreach($navs as $nav)
                                    <div class="sh-menu-mob-d1">
                                        <button class="sh-menu-mob-d1-toggle">
                                            <span>{{$nav['title']}}</span>
                                            <span class="sh-menu-mob-d1-toggle-arrow"></span>
                                        </button>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        @if(!empty($category))
                            <div class="sh-menu-mob-secondary">
                                <button class="sh-menu-mob-secondary-back">
                                    <span class="sh-menu-mob-secondary-back-arrow"></span>
                                    <span>产品</span>
                                </button>
                                <div class="sh-menu-mob-secondary-list">
                                    <div class="sh-menu-mob-d3-container">
                                        @foreach($category as $cate)
                                            <div class="sh-menu-mob-d3">
                                                <header class="sh-menu-mob-d3-header">{{ $cate['name'] }}</header>
                                                @if(!empty($cate['son']))
                                                    @foreach($cate['son'] as $children)
                                                        <a href="/product?category={{ $children['id'] }}" class="sh-menu-mob-d4">{{ $children['name'] }}</a>
                                                    @endforeach
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if(!empty($navs))
                            @foreach($navs as $nav)
                                <div class="sh-menu-mob-secondary">
                                    <button class="sh-menu-mob-secondary-back">
                                        <span class="sh-menu-mob-secondary-back-arrow"></span>
                                        <span>{{ $nav['title'] }}</span>
                                    </button>
                                    <div class="sh-menu-mob-secondary-list">
                                        <div class="sh-menu-mob-d3-container">
                                            @if(!empty($nav['son']))
                                                @foreach($nav['son'] as $son)
                                                    <div class="sh-menu-mob-d3">
                                                        <header class="sh-menu-mob-d3-header">{{ $son['title'] }}</header>
                                                        @if(!empty($son['son']))
                                                            @foreach($son['son'] as $children)
                                                                <a href="{{ $children['url'] }}" class="sh-menu-mob-d4">{{ $children['title'] }}</a>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
