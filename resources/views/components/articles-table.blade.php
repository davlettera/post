<table class="table table-striped table-hover border">
    <thead class="table-dark">
      <tr>
        <th scope="col-12 col-md-6">#</th>
        <th scope="col-12 col-md-6">Titolo</th>
        <th scope="col-12 col-md-6">Sottotitolo</th>
        <th scope="col-12 col-md-6">Autore</th>
        <th scope="col-12 col-md-6">Azione</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->subtitle}}</td>
            
         

            <td>{{$article->user->name}}</td>
            <td>
                @if(is_null($article->is_accepted))
                <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-dark">{{ __('Leggi') }}</a>
                @else 
                <a href="{{route('revisor.undoArticle', compact('article'))}}" class="btn btn-info text-dark">{{ __('Revisione') }}</a>
                @endif
                
            </td>
          </tr>
         

        @endforeach
      
    </tbody>
  </table>