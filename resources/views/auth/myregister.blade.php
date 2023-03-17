<div class="container-fluid p-5 bg-dark text-center text-white">
    <div class="row justify-content-center">
        
            <h1 class="displa-1">
                Sign Up
            </h1>
        
    </div>
</div>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach                        
                    </ul>       
                </div>
            @endif
            <form class="card p-5 shadow" action="{{route('register')}}" method="post">
                @csrf

                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input name="name" type="text" class="form-control" id="username" value="{{old('name')}}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" value="{{old('email')}}">
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input name="password" type="password" class="form-control" id="password" >
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" >
                  </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-dark text-white">Sign in</button>
                    <p class="small mt-2" >Already registered? <a href="{{route('login')}}">Click here</a></p>
                </div>             

              </form>
        </div>
    </div>
</div>