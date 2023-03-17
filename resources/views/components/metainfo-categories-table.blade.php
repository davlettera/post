<table class="table table-striped table-hover border" >
    <thead class="table-dark" >
        <tr>
            <th scope="col-12 col-md-6" >#</th>
            <th scope="col-12 col-md-6" >Categoria</th>
            <th scope="col-12 col-md-6" >Articoli</th>
            <th scope="col-12 col-md-6" >Aggiorna</th>
            <th scope="col-12 col-md-6" >Cancella</th>            
        </tr>
    </thead>
    <tbody>
<tbody>
    @foreach ($metaInfos as $metaInfo)
        <tr>
            <th scope="row">{{$metaInfo->id}}</th>
            <td>{{$metaInfo->name}}</td>
            <td>{{count($metaInfo->articles)}}</td>
            
                <td>
                    <form action="{{route('admin.editCategory', ['category' => $metaInfo])}}" method="POST">
                        @csrf
                        @method('put')
                        <input type="text" name="name" placeholder="category new name" class="form-control w-50 d-inline">
                        <button type="submit" class="btn btn-info " >Refresh</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('admin.deleteCategory', ['category' => $metaInfo->id])}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger text-dark" >Delete</button>
                    </form>
                </td>
         
        </tr>            
    @endforeach
</tbody>
</table>

