<div class="container-fluid p-5 bg-dark text-center text-white">
    <div class="row justify-content-center">
        
            <h1 class="displa-1">
                Sign In
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
            <form class="card p-5 shadow" action="{{route('login')}}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" value="{{old('email')}}">
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input name="password" type="password" class="form-control" id="password" >
                </div>

                <div class="mt-2">
                    <button type="submit" class="btn btn-dark text-white">Sign up</button>
                    <p class="small mt-2" >Not yet registered? <a href="{{route('register')}}">Click here</a></p>
                </div>             

              </form>
        </div>
    </div>
</div>