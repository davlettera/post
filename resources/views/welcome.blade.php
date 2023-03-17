
<x-layout>

    @if (session('message'))
    <div id="success-message" class="d-flex justify-content-center align-items-center" style="height: 100px;">
        <div class="alert alert-success text-center d-inline-block">
            <p class="m-0">{{ session('message') }}</p>
        </div>
    </div>
    
    @endif

<!-- Hero Area Start -->
<div class="hero-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-inner-area">
                    <!-- Hero Category Area Start -->
                    <div class="hero-category-area">
                        @foreach ($categories->take(4) as $category)
                                    
                                 
                                    <div class=" pb-4 {{$category->color}}  d-flex justify-content-center align-items-center ">
                                        <a class="" href="{{route('article.byCategory', ['category' => $category->id])}}">
                                            <button class="single-hero-category-item  btnWelcome btn btn-lg text-center me-1 category-{{ $category->id }} {{ contrastColor($category->color) }}" style="background-color: {{ $category->color }};">{{ $category->name }}</button>
                                        </a>
                                          
                                    </div>
                           
                              
                        @endforeach
                       
                    </div><!-- Hero Category Area End -->

                    <!-- Hero Banner Area Start -->
                    <div class="hero-banner-area " data-aos="fade-up">
                        <a  href="blog-details.html">
                            <img class="best-image" src="{{Storage::url($bestImage->image)}}" alt="">
                        </a>
                    </div><!-- Hero Banner Area End -->

                    <div class="hero-blog-post">
                        <!-- Single-hero-blog-post Start -->
                        <h4 class="text-primary">{{ __('Articoli') }}: {{$conteggio}}</h4>
                        
                        @foreach ($articles as $article)
                            
                        
                            <div class="single-hero-blog-post" data-aos="fade-up">
                                <div class="hero-blog-post-top">
                                    <div class="blog-details-two-tags ">
                                        
                                        <div >
                                            @if($article->category)
                                                <a href="{{route('article.byCategory', ['category' => $article->category->id])}}"><div class=" btnCategory text-center me-1 category-{{ $category->id }} {{ contrastColor($article->category->color) }}" style="background-color: {{ $article->category->color }};">{{ $article->category->name }}</div></a>
                                                @else
                                                <a class="btn btn-medium me-1" href="#">Non categorizzato</a>
                                                @endif 
                                        </div>
                                         
                                    </div>

                                    <div class="hero-blog-post-author text-end mt-4">
                                       By <a   href="{{route('article.byAuthor', ['user' => $article->user->id])}}">{{$article->user->name}}</a>
                                    </div>
                                </div>
                                <h3 class="hero-blog-post-title fs-5">
                                    <a href="{{ route('article.show', $article->slug) }}">{{ Str::limit($article->title, $limit = 25) }}
                                    </a>
                                </h3>
                                {{-- <h5 class="hero-blog-post-title fs-5">
                                    {{ Str::limit($article->subtitle, $limit = 30) }}
                                    
                                </h5> --}}
                                <p class="post-short-details">
                                    {{ Str::limit($article->body, $limit = 70) }}
                                </p>
                                <div class="hero-blog-post-meta ">
                                    <div class="post-meta-left-side ">
                                        <span class="post-date">
                                        <i class="fa-regular fa-calendar-days"></i> 
                                        {{ $article->created_at->diffForHumans() }}
                                     </span >
                                        <span>{{$article->readDuration()}} min read</span>
                                    </div>      
                                </div>
                            </div><!-- Single-hero-blog-post End -->
                        @endforeach
                        
  
                            
                        

                    </div>
                </div>

            </div>
        </div>
    </div>
</div> <!-- Hero Area End -->
<!-- <form action="/" method="POST">
@csrf

<label for="city_name">Enter city name:</label>
<input type="text" name="city_name" id="city_name" required>
<button type="submit">Get weather</button>
</form>

@if(session()->has('temperature_in_celsius'))
    <div>
        <p>The current temperature in {{ session('city_name') }} is {{ session('temperature_in_celsius') }}&deg; Celsius</p>
        <img src="http://openweathermap.org/img/wn/{{ session('temperature_current_weather_icon') }}@2x.png" alt="Weather icon">
    </div>
@endif -->
 



</x-layout>









