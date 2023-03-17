<table class="table table-striped table-hpver border" >
    <thead class="table-dark" >
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>      
        </tr>
    </thead>
    <tbody>
        @foreach ($roleRequests as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>         
            <td>
                @switch($role)
                  @case('admin')
                        <a href="{{route('admin.setAdmin',compact('user'))}}" class="btn btn-info text-dark">Active{{$role}}</a>
                      @break
                  @case('revisor')
                        <a href="{{route('admin.setRevisor',compact('user'))}}" class="btn btn-info text-dark">Active{{$role}}</a>
                      @break
                  @case('writer')
                        <a href="{{route('admin.setWriter',compact('user'))}}" class="btn btn-info text-dark">Active{{$role}}</a>
                  @break      
                @endswitch
                {{-- <button class="btn btn-info text-white">Active {{$role}}</button> --}}
            </td>
        </tr>
            
        @endforeach
    </tbody>

</table>