<x-layout>
   
<ul class="timeline">
    <!-- timeline step 1 start -->
    <li>
        <div class="timeline-image">
            <img alt="Timeline Img" class="img-circle img-responsive" src="{{ asset('assets/images/blog/blog-details-2.jpg')}}">
        </div>
        <div class="timeline-panel">
            
            
        </div>
    </li>
</ul><!-- timeline step 1 end -->
  
</x-layout>

<div class="swiper-container recent-reading-slider-active">
    <div class="swiper-wrapper">
        @foreach($articles->sortByDesc('created_at')->chunk(3) as $chunked_articles)
            <div class="swiper-slide">
                @foreach($chunked_articles as $article)
                    <!-- Single Recent Reading Post Start -->
                    <div class="single-recent-reading-post" data-aos="fade-up">
                        <a class="recent-reading-post-thum" href="{{ route('articles.show', $article->id) }}">
                            <img src="{{Storage::url($article->image)}}" alt="">
                        </a>
                        <div class="recent-reading-post-content">
                            <div class="recent-reading-post-author">
                                By <a href="#">{{ $article->user->name }}</a>
                            </div>
                            <h6 class="title"><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></h6>
                            <div class="recent-reading-post-meta">
                                <span class="post-date">
                                    <i class="icofont-ui-calendar"></i> 
                                    <a href="#">{{ $article->created_at->format('m-d-Y') }}</a>
                                {{-- </span>
                                <span>{{ $article->reading_time }} min read</span> --}}
                            </div>
                        </div>
                    </div><!-- Single Recent Reading Post End -->
                @endforeach
            </div>
        @endforeach
    </div>
</div>

