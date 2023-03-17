@extends('layouts.app')

@section('content')
<div class="container pt-5 mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-4 ">
            <h2>Lavora come <strong>Amministratore</strong></h2>
            <p>Cosa farai: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, cupiditate aut dolore est deserunt necessitatibus culpa ab ad dolores in facere reiciendis tempore delectus, velit neque corrupti placeat magnam. Nam.</p>
            <h2>Lavora come <strong>Revisore</strong></h2>
            <p>Cosa farai: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, cupiditate aut dolore est deserunt necessitatibus culpa ab ad dolores in facere reiciendis tempore delectus, velit neque corrupti placeat magnam. Nam.</p>
            <h2>Lavora come <strong>Redattore</strong></h2>
            <p>Cosa farai: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, cupiditate aut dolore est deserunt necessitatibus culpa ab ad dolores in facere reiciendis tempore delectus, velit neque corrupti placeat magnam. Nam.</p>

        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session('message'))
            <div class="alert alert-success text-center">
                {{session('message')}}
            </div>
        @endif
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrati e scegli il tuo ruolo') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('careers.submit')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Ruolo') }}</label>

                            <div class="col-md-6 pt-1">
                                <select name="role" id="role" class="form-control">
                                    <option value="">Scegli</option>
                                    <option value="admin">Amministratore</option>
                                    <option value="revisor">Revisore</option>
                                    <option value="writer">Redattore</option>
                                {{-- </select>  --}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? Auth::user()->email}}" required autocomplete="email">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="biography" class="col-md-4 col-form-label text-md-end">{{ __('Chi sei') }}</label>

                            <div class="col-md-6">
                                <textarea id="biography" cols="30" rows="7" class="form-control @error('message') is-invalid @enderror" name="biography" required autocomplete="biography">{{old('biography')}}</textarea>
                            @error('message')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                              
                            </div>
                        </div>

                       
                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Invia') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
