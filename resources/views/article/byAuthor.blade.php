<x-layout>
    
    
    
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <!-- <h2 class="breadcrumb-title">@@title</h2> -->
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Blog Writer</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    
    
    
    
    
    
    
    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!-- Blog Details Wrapper Start -->
            <div class="blog-details-wrapper section-space--ptb_80">
                <div class="container">
                    <div class="row row--17">
                        <div class="blog-details-col-8">
                            <!-- blog details Post Start -->
                            @foreach ($articles as $article)
                            
                            
                            <div class="blog-details-post-wrap">
                                <div class="blog-details-thum">
                                    <img src="assets/images/blog/blog-details-1.jpg" alt="">
                                </div>
                                <div class="blog-details-post-content">
                                    <div class="blog-details-meta-box">
                                        <div class="post-meta-left-side mb-2">
                                            @if($article->category->id)
                                            <a class=" btnCategory text-center me-1 category-{{ $article->category->id }} {{ contrastColor($article->category->color) }}" style="background-color: {{ $article->category->color }};" href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{ $article->category->name }}</a>
                                            @else
                                            <a class="btn btn-medium me-1" href="#">Non categorizzato</a>
                                            @endif
                                            {{-- <a class="btn-medium  {{$article->category->color}}" href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{ $article->category->name }}</a> --}}
                                            
                                            
                                        </div>
                                        
                                        
                                        
                                        <div class="post-meta-right-side mb-2">
                                            <a href="#"><img src="assets/images/icons/small-bookmark.png" alt="" /></a>
                                            <a href="#"><img src="assets/images/icons/heart.png" alt="" /></a>
                                        </div>
                                    </div>
                                    <h3 class="following-blog-post-title">
                                        {{ $article->title }}
                                        
                                    </h3>
                                    <h4 class="following-blog-post-title">
                                        {{ $article->subtitle }}
                                        
                                    </h4>
                                    
                                    <div class="post-details-text">
                                        
                                        <p>{{ Str::limit( $article->body, $limit = 500)}}
                                        </p>
                                        
                                        <div class="articleFooter d-flex justify-content-around px-3">
                                            <div> {{ $article->created_at->diffForHumans() }}</div>
                                            <div>{{$article->readDuration()}} min read</div>
                                        </div>
                                        <div class="blog-details-tag-and-share-area">
                                            <div class="post-tag">
                                                
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    <!-- Related Post Area Start -->
                                </div>
                            </div><!-- blog details Post End -->
                            @endforeach
                        </div>
                        <div class="blog-details-col-4">
                            <div class="following-author-area">
                                <div class="author-image">
                                    
                                    <ul class="timeline globale">
                                        <!-- timeline step 1 start -->
                                        <li>
                                            <div class="timeline-image">     
                                                <img alt="Timeline Img" class="img-circle img-responsive" src="{{Storage::url('immagini/'.$article->user->avatar)}}">
                                            </div>
                                            <div class="timeline-panel">
                                                
                                                
                                            </div>
                                        </li>
                                    </ul><!-- timeline step 1 end -->
                                </div>
                                <div class="author-title">
                                    <h4>{{$article->user->name}}</h4>
                                    {{-- <p>Author, Dingcode</p> --}}
                                </div>
                                <div class="author-details">
                                    <p>{{$article->user->biography}}</p>
                                        <p>Numero totale di articoli: {{ $authorArticlesNumber }}</p>  
                                    </div>
                                </div>
                                
                               
                                <!-- Latest Post Area Start -->
                                <div class="latest-post-inner-wrap mt-5">
                                    
                                    <div class="swiper-container latest-post-slider-active">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="latest-post-box">
                                                    <div class="bannerPubblicitario">
                                                        <img src="{{ asset('assets/images/spazio.jpg')}}" alt="">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div> <!-- Latest Post Area End -->
                                
                                <!-- Stay In Touch Area Start -->
                                <div class="stay-in-touch-area mt-5">
                                <div class="bannerPubblicitario">
                                    <img src="{{ asset('assets/images/spazio.jpg')}}" alt="">
                                </div>
                                </div> <!-- Stay In Touch Area End -->
                                
                                <div class="following-add-banner mt-5">
                                    <a href="#">
                                        <img src="assets/images/banners/home-following-banner.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div> <!-- Blog Details Wrapper End -->
                
                
                
            </div>
        </div>
        
        
        
       
        
    </x-layout>