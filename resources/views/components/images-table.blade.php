<table class="table table-striped table-hover border">
    <thead class="table-dark">
      <tr>
        <th scope="col-12 col-md-6">#</th>
        <th scope="col-12 col-md-6">{{ __('Immagine') }}</th>
        <th scope="col-12 col-md-6">{{ __('Autore') }}</th>
        <th scope="col-12 col-md-6">{{ __('Azione') }}</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>
                <a class="recent-reading-post-thum">
                    <img class="img-thum" src="{{Storage::url($article->image)}}" alt="">                   
                </a>
            </td>

            <td>{{$article->user->name}}</td>
            <td>  
           @if($article->best===0)
            <a href="/article/image/{{$article->id}}/choose" class="btn btn-info text-dark">{{ __('Scegli') }}</a>
          @endif

     
            </td>
          </tr>
          

        @endforeach
      
    </tbody>
  </table>