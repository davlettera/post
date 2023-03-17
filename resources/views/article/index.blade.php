<x-layout>
     <!-- Recent Reading List Area Start -->
    
    <!-- Recent Reading List Area End -->
   
   
    <div class="section-title">
        <h3 class="text-center"> {{$conteggio}} articoli</h3>

    </div> 
    
<div class="container-fluid indexContainer">
    @for ($i = 0; $i < $numColumns; $i++)
        <div class="row rowArticleCategory justify-content-center">
        @foreach ($categories->skip($i * 3)->take(3) as $category)
            <div class="col-12 col-md-3 colCategoryArticles border borer-dark ">
            
                @if($category)
                <!-- <a class=" btnCategory text-center me-1 category-{{ $category->id }} {{ contrastColor($category->color) }}" style="background-color: {{ $category->color }};" href="{{route('article.byCategory', ['category' => $category->id])}}">{{ $category->name }}</a> -->
                <a class=" btnCategory text-center me-1 fw-bold " style="background-color: light;" href="{{route('article.byCategory', ['category' => $category->id])}}">{{ $category->name }}</a>

                @else
                <a class="btn btn-medium me-1" href="#">Non categorizzato</a>
                @endif
                {{-- <h4 class="categoryName">{{ $category->name }}</h4> --}}
            
                <ul>
                  @foreach ($articlesByCategory[$category->id] as $article)
                  <div class="sectionCategoryArticle"> 
                    <a href="{{route('article.byAuthor', ['user' => $article->user->id])}}"class="pt-2 ps-2 fw-semibold">  {{ $article->user->name }}</a>                   
                    <div class="d-flex justify-content-between py-1">
                        <a class="titleCategoryIndex" href="{{ route('article.show', $article->slug) }}">{{ Str::limit($article->title, $limit = 120) }}</a>
                        <a class="recent-reading-post-thum" href="{{ route('article.show', $article->slug) }}">
                            <img class="img-thum" src="{{Storage::url($article->image)}}" alt="">                   
                        </a>
                    </div>
                    <div class="articleFooter d-flex justify-content-between px-3">
                        
                        <div>{{$article->readDuration()}} min read</div>
                        <div> {{ $article->created_at->diffForHumans() }}</div>
                    
                    </div>
                   
                </div>
                  @endforeach
                </ul>
              </div>
            @endforeach
          </div>
        @endfor
      </div>
      
    </body>
</x-layout>