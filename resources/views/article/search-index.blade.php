<x-layout>
    <div class="container-fluid p-5 bg-info-text-center text-white">
        <div class="row justify-content-center">
            <h3 class="">All articles by: {{$query}}</h3>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3 my-2">
                <div class="card">
                    <div class="divImgSearch">
                    <img class="imgSearch" src="{{Storage::url($article->image)}}"  class="card-img-top" alt="...">
                    </div>
                    
                    <div class="card-body">
                        <h5 class="Card-title">{{ Str::limit($article->title, $limit = 20) }}</h5>
                        <p class="card-text">{{ Str::limit($article->subtitle, $limit = 20) }}</p>
                       
                        @if($article->category->id)
                            <a class=" btnCategory text-center me-1 category-{{ $article->category->id }} {{ contrastColor($article->category->color) }}" style="background-color: {{ $article->category->color }};" href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{ $article->category->name }}</a>
                        @else
                            <a class="btn btn-medium me-1" href="#">Non categorizzato</a>
                        @endif


                    

 
                        


                        
                        {{-- <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->color}}</a>
                        <p class="small fst-italic text-capitalize" > --}}
                            @foreach ($article->tags as $tag)
                            #{{$tag->name}}
                            @endforeach
                        </p>
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                        <a href="{{route('article.byAuthor', ['user' => $article->user->id])}}">  by {{$article->user->name}}</a>
                        <p>{{$article->created_at->format('d/m/Y')}}</p>
                        <a class="btn-small btn-info text-dark" href="{{route('article.show', compact('article'))}}">Leggi</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</x-layout>
{{-- @if($category)
    <a class=" btnCategory text-center me-1 category-{{ $category->id }} {{ contrastColor($category->color) }}" style="background-color: {{ $category->color }};" href="{{route('article.byCategory', ['category' => $category->id])}}">{{ $category->name }}</a>
    @else
    <a class="btn btn-medium me-1" href="#">Non categorizzato</a>
    @endif --}}