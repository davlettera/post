<x-layout>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <!-- <h2 class="breadcrumb-title">@@title</h2> -->
                        <!-- breadcrumb-list start -->
                        <div >
                            @if($category)
                                <div class=" btnCategory text-center me-1 category-{{ $category->id }} {{ contrastColor($category->color) }}" style="background-color: {{ $category->color }};">{{ $category->name }}</div>
                                @else
                                <a class="btn btn-medium me-1" href="#">Non categorizzato</a>
                                @endif 
                        </div>
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
                <div class="container-fluid">
                    <div class="row row--17 justify-content-center">
                        @foreach ($articles as $article)
                        
                        
                            <div class="col-lg-2 col-md-3 col-sm-6 col-12 shadow-lg rounded container-single-following-post border p-2 mx-2">
                                <!-- Single Following Post Start -->
                                <div class="single-following-post" data-aos="fade-up">
                                    <a href="{{ route('article.show', $article->slug) }}" class="following-post-thum">
                                        <img src="{{Storage::url($article->image)}}" alt="">
                                    </a>
                                    <div class="following-post-content">
                                        <div class="following-blog-post-top">
                                            
                                            <div class="following-blog-post-author">
                                                By <a href="{{route('article.byAuthor', ['user' => $article->user->id])}}">{{$article->user->name}}</a>
                                            </div>
                                        </div>
                                        <h5 class="following-blog-post-title">
                                            <a href="{{ route('article.show', $article->slug) }}">{{ Str::limit($article->title, $limit = 100) }}
                                            </a>
                                            <a class="category-body" href="{{ route('article.show', $article->slug) }}">{{ Str::limit( $article->body, $limit = 250)}}
                                            </a>
                                        </h5>
                                        <div class="following-blog-post-meta">
                                            <div class="post-meta-left-side d-flex justify-content-center">
                                                <div class="post-date">
                                                    <i class="fa-regular fa-calendar-days"></i>
                                                    {{ $article->created_at->diffForHumans() }}
                                                </div>
                                            </div>
                                                <div>{{$article->readDuration()}} min read</div>
                                            
                                            <div class="post-meta-right-side">
                                                <a href="#"><img src="assets/images/icons/small-bookmark.png" alt="" /></a>
                                                <a href="#"><img src="assets/images/icons/heart.png" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Single Following Post End -->
                            </div>
                        
                        @endforeach
                    </div>
                </div>
            </div>
</x-layout>