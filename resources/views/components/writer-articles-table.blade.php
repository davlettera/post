

<table class="table table-striped table-hover border">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Subtitle</th>
        <th scope="col">Category</th>
        <th scope="col">Tags</th>
        <th scope="col">Created_at</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{ Str::limit($article->title, $limit = 15) }}</td>
            <td>{{ Str::limit($article->subtitle, $limit = 15) }}</td>
            <td>{{$article->category->name ?? 'Not categorized'}}</td>
            <td>
                @foreach ($article->tags as $tag)
                {{ Str::limit($tag->name, $limit = 15) }},
                @endforeach  
            </td>
            <td>{{$article->created_at->format('d/m/Y')}}</td>
            <td>
                <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-dark">Read</a>
                <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning text-dark">Edit</a>
                <form action="{{route('article.destroy', compact('article'))}}"  method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger text-dark" >Delete</button>
                </form>
            </td>
          </tr>
        @endforeach
      
    </tbody>
  </table>