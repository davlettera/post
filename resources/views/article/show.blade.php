<x-layout>

    



<body class="theme-color-six">
    <div id="main-wrapper">
        <div class="site-wrapper-reveal">

            <div class="blog-details-two-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="blog-details-two-header">

                                <div class="blog-details-two-post-meta">
                                    <span class="blog-details-two-post-author">
                                    By <a href="{{route('article.byAuthor', ['user' => $article->user->id])}}">{{$article->user->name}}</a>
                                    </span>
                                    <div class="articleFooter d-flex justify-content-between px-3">
                        
                                        <div>{{$article->readDuration()}} min read</div>
                                        <div> {{ $article->created_at->diffForHumans() }}</div>
                                    
                                    </div>
                                </div>
                                <h2 class="blog-details-two-post-title">{{$article->title}}</h2>

                                <div class="blog-details-two-tags ">
                                    @if ($article->category)
                                    {{-- <a class="btn-medium me-1 {{$article->category->color}}" href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{ $article->category->name }}</a> --}}
                                    <a class="btn-medium me-1 category category-{{ $article->category->id }}" style="background-color: {{ $article->category->color }};" href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{ $article->category->name }}</a>
                                    
                                    <span class="category-name {{ contrastColor($article->category->color) }}"></span>


                                        
                                        
                                    @else
                                    <a class="btn-medium me-1 " href="">Not categorized</a>

                                    @endif
                                    
                                      

                                    
                                </div>

                            </div>
                            <div class="d-flex justify-content-center  mt-5  mb-5">
                                <img class="img-show" src="{{Storage::url($article->image)}}" alt="">
                            </div>

                            <div class="blog-details-two-post-text section-space--pb_80">
                                <div class="col-lg-10 m-auto">
                                    <h3 class="text-center mb-5 title">{{$article->subtitle}}</h3>
                                    <p>{{$article->body}}</p>

                                    {{-- In questo modo se l'articolo è già stato accettato non appaiono i bottoni --}}
                                    @if (Auth::user() && Auth::user()->is_revisor && !$article_accepted)
                                        <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-success text-white my-5">Accept</a>
                                        <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-danger text-white my-5">Reject</a>
                                    @endif

                                    {{-- In questo modo apparivano anche se l'articolo è stato accettato dal revisore --}}
                                    {{-- @if (Auth::user() && Auth::user()->is_revisor)
                                        <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-success text-white my-5">Accept</a>
                                        <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-danger text-white my-5">Reject</a>

                                    @endif --}}
                                    <p class="small fst-italic text-capitalize" >
                                        @foreach ($article->tags as $tag)
                                            #{{$tag->name}}
                                        @endforeach
                                    </p>
                                   
                                    
    


</body>


</x-layout>
                               
