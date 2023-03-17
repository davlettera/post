<!--========  header area =========-->

    
    <header class="header">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 order-1 order-lg-1">
                        <ul class="header-top-menu-list">
                        <form class="mt-4" action="/" method="POST">
                                @csrf
                                <input type="text" name="city_name" id="city_name" required placeholder="Città">
                                <span> <button type="submit">Invia</button>
                                 
                                </span>
                                  
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 order-3 order-lg-2">
                        <div class="header-top-contact-info">
                            <div class="header-top-single-contact-item mt-3">
                                <div class="header-top-contact-icon">
                                    <img src="{{ asset('assets/images/icons/contact-call.png') }}" alt="">
                                </div>
                                <div class="header-top-contact-text text-size-small ">
                                    <a href="tel:3662914955">(+39) 366-291-4955</a>
                                </div>
                            </div>
    
                            <div class="header-top-single-contact-item ">
                                <div class="header-top-contact-icon mt-3">
                                    <img src="{{ asset('assets/images/icons/contact-emaill.png') }}" alt="">
                                </div>
                                <div class="header-top-contact-text mt-3">
                                    <a href="mailto:davlettera@gmail.com">davlettera@gmail.com</a>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 order-2 order-lg-3">
                        <div class="header-top-right-side">
                         
                            <div class="wayder">
                            @if(session()->has('temperature_in_celsius'))
                               <p>{{ session('city_name') }} : {{ session('temperature_in_celsius') }}&deg; C
                               <span><img width="50px" height="50px" src="http://openweathermap.org/img/wn/{{ session('temperature_current_weather_icon') }}@2x.png" alt="Weather icon">
                               </span></p>
                            @endif
                               
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mid-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2 col-5">
                        @auth
                            <div class="logo">                              
                                <h3 class="text-center">{{ __('Benvenuto ') }}<br> {{Auth::user()->name}}</h3>                                
                            </div>
                        @endauth
                        @guest
                        <div class="logo">
                            <h3>{{ __('Ciao Ospite') }}</h3>
                        </div>
                        @endguest
                    </div>
                    <div class="col-lg-6 col-md-6 d-md-block d-none">
                        <div class="header-add-banner text-center py-3 bg-black">
                            <div>
                               <div class="divBanner d-flex">
                                <img class="maiuscole" src="{{ asset('assets\images\letters\A-8575ff.svg') }}" alt="" />
                                <img class="uLetter" src="{{ asset('assets\images\letters\u-c1eccf.svg') }}" alt="" />
                                <img class="bannerLetters" src="{{ asset('assets\images\letters\l-ffe0e6.svg') }}" alt="" />
                                <img class="bannerLetters" src="{{ asset('assets\images\letters\a-fcfed9.svg') }}" alt="" />
                                <img class="bannerLetters" src="{{ asset('assets\images\letters\b-ff82a0.svg') }}" alt="" />
                                <img class="maiuscole pi" src="{{ asset('assets\images\letters\p-bedaf1.svg') }}" alt="" />
                                <img class="bannerLetters" src="{{ asset('assets\images\letters\o-f1d3b2.svg') }}" alt="" />
                                <img class="bannerLetters" src="{{ asset('assets\images\letters\s-91f1f8.svg') }}" alt="" />
                                <img class="bannerLetters" src="{{ asset('assets\images\letters\t-d9c6e5.svg') }}" alt="" />
                                {{-- <img class="aulabpost"src="{{ asset('assets\images\banner.jpg') }}" alt="" /> --}}
                                
                               </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-7">
                        <div class="header-mid-right-side">
                            
                            <form id="search-form" class="d-flex" action="{{route('article.search')}}" method="GET">
                                <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-info" type="submit" >Cerca</button>
                            </form>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-area">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-12 col-3">
                        <div class="main-menu-area text-center">
                            <nav class="navigation-menu">
                                <ul>
                                    
                                    <li class="has-children">
                                        <a href="{{route('homepage')}}"><span>Home <i class="fa-solid fa-chevron-down"></i></span></a>
                                       
                                    </li>
                                    <li class="has-children"><a ><span>{{ __('Penne ') }}<i class="fa-solid fa-chevron-down"></i></span></a>
                                        <ul class="submenu">
                                            @foreach(DB::table('users')->where('is_writer', 1)->get() as $user)
                                               <li><a href="{{route('article.byAuthor', ['user' => $user->id])}}"><span>{{ $user->name }}</span></a> </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                   
                                    <li>
                                        <a href="{{route('article.create')}}"><span>{{ __('Scrivi ') }}<i class="fa-solid fa-chevron-down"></i></span></a>
                                    </li>
                                    <li class="has-children"><span>{{ __('Categorie ') }}<i class="fa-solid fa-chevron-down"></i></span>
                                        <ul class="submenu">
                                            @foreach(DB::table('categories')->get() as $category)
                                               <li><a href="{{route('article.byCategory', ['category' => $category->id])}}"><span>{{ $category->name }}</span></a> </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{route('article.index')}}"><span>{{ __('Articoli ') }} <i class="fa-solid fa-chevron-down"></i></span></a>
                                        
                                    </li>
                                    <li class="d-none"><a href="contact-us.html"><span>{{ __('Contatti ') }} <i class="fa-solid fa-chevron-down "></i></span></a></li>
                                    
                                   
                                    <li class="has-children"><span>{{ __('Utente ') }} <i class="fa-solid fa-chevron-down"></i></span>
                                        <ul class="submenu">
                                            @auth
                                                    @if (Auth::user()->is_admin)
                                                        <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">{{ __('Pannello di Controllo') }}</a></li>
                                                    @endif
                                                    @if (Auth::user()->is_revisor)
                                                        <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">{{ __('Pannello di Controllo') }}</a></li>
                                                        
                                                        
                                                        @endif
                                                        @if (Auth::user()->is_writer)
                                                        <li><a class="dropdown-item" href="{{route('writer.dashboard')}}">{{ __('Pannello di Controllo') }}</a></li>
                                                       
                                                        @endif
                                                        @if (!Auth::user()->is_admin)
                                                            <li><a href="{{ route('careers') }}">{{ __('Lavora con noi') }}</a></li>
                                                        @endif
                                                
                                                    <li><a href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                                                    <form method="post" action="{{route('logout')}}" id="form-logout" class="d-none">
                                                    @csrf
                                                </form>
                                            @endauth
                                            
                                            @guest
                                         
                                                <li><a href="{{route('register')}}">{{ __('Registrati') }}</a></li>
                                                <li><a href="{{route('login')}}">{{ __('Entra') }}</a></li>
                                          
                                            @endguest
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- mobile menu -->
                        <div class="mobile-menu-right">
                            <div class="mobile-navigation-icon d-block d-lg-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--======== End of header area  =========-->
    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                            <div class="divBannerFooter">
                                        <img class="maiuscole" src="{{ asset('assets\images\letters\A-8575ff.svg') }}" alt="" />
                                        <img class="uLetter" src="{{ asset('assets\images\letters\u-c1eccf.svg') }}" alt="" />
                                        <img class="bannerLetters" src="{{ asset('assets\images\letters\l-ffe0e6.svg') }}" alt="" />
                                        <img class="bannerLetters" src="{{ asset('assets\images\letters\a-fcfed9.svg') }}" alt="" />
                                        <img class="bannerLetters" src="{{ asset('assets\images\letters\b-ff82a0.svg') }}" alt="" />
                                        <img class="maiuscole pi" src="{{ asset('assets\images\letters\p-bedaf1.svg') }}" alt="" />
                                        <img class="bannerLetters" src="{{ asset('assets\images\letters\o-f1d3b2.svg') }}" alt="" />
                                        <img class="bannerLetters" src="{{ asset('assets\images\letters\s-91f1f8.svg') }}" alt="" />
                                        <img class="bannerLetters" src="{{ asset('assets\images\letters\t-d9c6e5.svg') }}" alt="" />
                                        {{-- <img class="aulabpost"src="{{ asset('assets\images\banner.jpg') }}" alt="" /> --}}
                                        
                                       </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-end">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">
                    <ul>
                        <li>
                            <a href="{{route('homepage')}}">Home</a>
                            
                        </li>
                        <li class="has-children">
                            <a >{{ __('Penne ') }}</a>
                                <ul class="sub-menu">
                                    
                                    @foreach(DB::table('users')->where('is_writer', 1)->get() as $user)
                                    <li><a href="{{route('article.byAuthor', ['user' => $user->id])}}"><span>{{ $user->name }}</span></a> </li>
                                    @endforeach
                                </ul>
                        </li>
                        <li>
                            <a href="{{route('article.create')}}"><span>{{ __('Scrivi ') }}</span></a>
                        </li>
                        <li class="has-children">
                            <a href="#">{{ __('Categorie ') }}</a>
                            <ul class="sub-menu">
                                @foreach(DB::table('categories')->get() as $category)
                                     <li><a href="{{route('article.byCategory', ['category' => $category->id])}}"><span>{{ $category->name }}</span></a> </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="{{route('article.index')}}"><span>{{ __('Articoli ') }}</i></span></a>
                        </li>
                        <li><a href="contact-us.html"><span>{{ __('Contatti ') }}</span></a></li>

                        <li class="has-children">
                            <a><span>{{ __('Utente ') }}</span><a>
                            <ul class="sub-menu">
                                @auth
                                        @if (Auth::user()->is_admin)
                                            <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">{{ __('Pannello di Controllo') }}</a></li>
                                        @endif
                                        @if (Auth::user()->is_revisor)
                                            <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">{{ __('Pannello di Controllo') }}</a></li>
                                            <li><a href="{{ route('careers') }}" >{{ __('Lavora con noi ') }}</a></li>
                                        
                                            @endif
                                        @if (Auth::user()->is_writer)
                                            <li><a class="dropdown-item" href="{{route('writer.dashboard')}}">{{ __('Pannello di Controllo') }}</a></li>
                                            <li><a href="{{ route('careers') }}" >{{ __('Lavora con noi ') }}</a></li>
                                        
                                            @endif
                                        
                                        <li><a href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                                        <form method="post" action="{{route('logout')}}" id="form-logout" class="d-none">
                                        @csrf
                                    </form>
                                @endauth
                               
                                @guest
                             
                                    <li><a href="{{route('register')}}">{{ __('Registrati') }}</a></li>
                                    <li><a href="{{route('login')}}">{{ __('Entra') }}</a></li>
                                                                  
                                @endguest
                                

                                



                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->

    



